<?php


class SelectQueryBuilder
{
    private string $tableName;
    private string $alias;

    protected const SPECIAL_HANDLING = [
        'student_id',
        'student_name',
        'student_surname',
        'student_password',
        'student_email '
    ];

    private array $whereClauses = [];
    private array $dynamicWhereClause = [];
    private array $orderByList = [];
    private array $additionalSelect = [];

    protected function __construct(string $tableName, string $alias)
    {
        $this->tableName = $tableName;
        $this->alias = $alias;
    }

    public static function create(string $tableName, string $alias = 't1'): SelectQueryBuilder
    {
        return new SelectQueryBuilder($tableName, $alias);
    }

    public function add(
        string $field,
        $value,
        ?string $type,
        string $operator = OperatorType::EQUALS
    ): SelectQueryBuilder {
        $this->whereClauses[] = new WhereClause($field, $operator, $value, $type);
        return $this;
    }

    public function addDynamic(string $query, string $type, ...$parameters): SelectQueryBuilder
    {
        $this->dynamicWhereClause[] = new DynamicWhereClause($query, $type, $parameters);
        return $this;
    }

    public function getTypes(): string
    {
        $types = '';
        foreach ($this->whereClauses as $where) {
            $types .= $where->getType();
        }
        foreach ($this->dynamicWhereClause as $where) {
            $types .= $where->getTypes();
        }
        return $types;
    }

    public function getValues(): array
    {
        $whereValues = [];
        foreach ($this->whereClauses as $where) {
            if (is_array($where->getValue())) {
                //for IN statement
                $whereValues = array_merge($whereValues, $where->getValue());
            } else {
                $whereValues[] = $where->getValue();
            }
        }
        foreach ($this->dynamicWhereClause as $where) {
            foreach ($where->getParameters() as $param) {
                if (is_array($param)) {
                    $whereValues = array_merge($whereValues, $param);
                } else {
                    $whereValues[] = $param;
                }
            }
        }
        return array_filter($whereValues, function ($value) {
            return $value !== null;
        });
    }

    public function getQuery(): string
    {
        return "SELECT {$this->getSelectStatement()} FROM {$this->tableName} {$this->alias}{$this->getWhereClause()}{$this->getOrderByClause()}";
    }

    public function getSelectStatement(): string
    {
        $select = "{$this->alias}.*";
        foreach ($this->additionalSelect as $selectStatement) {
            $select .= ", ({$selectStatement->getSql()}) {$selectStatement->getAlias()}";
        }
        return $select;
    }

    public function getWhereClause(): string
    {
        if (empty($this->whereClauses) && empty($this->dynamicWhereClause)) {
            return '';
        }
        $whereSQL = ' WHERE ';
        $lastKey = $this->getLastElementKey($this->whereClauses);
        foreach ($this->whereClauses as $key => $where) {
            $isLastElement = $key === $lastKey;
            if (str_contains($where->getField(), '$action_inside_query$')) {
                $field = str_replace(
                    '$action_inside_query$',
                    "{$where->getOperator()->getExpression()} {$where->getParameter()}",
                    $where->getField()
                );
                $whereSQL .= " {$field} ";
            } else {
                $whereSQL .= " {$where->getField()} {$where->getOperator()->getExpression()} {$where->getParameter()}";
            }

            if (!$isLastElement || !empty($this->dynamicWhereClause)) {
                $whereSQL .= ' AND';
            }
        }
        $lastKey = $this->getLastElementKey($this->dynamicWhereClause);
        foreach ($this->dynamicWhereClause as $key => $where) {
            $isLastElement = $key === $lastKey;
            $whereSQL .= $where->getQuery();

            if (!$isLastElement) {
                $whereSQL .= ' AND';
            }
        }
        return $whereSQL;
    }

    public function addOrderBy(string $column, string $type): SelectQueryBuilder
    {
        $this->orderByList[] = new OrderBy($column, new OrderType($type));
        return $this;
    }

    public function addAdditionalSelect(string $sql, string $alias)
    {
        $this->additionalSelect[] = new AdditionalSelect($sql, $alias);
    }

    public function getOrderByClause(): string
    {
        if (empty($this->orderByList)) {
            return '';
        }
        $sql = ' ORDER BY ';
        $lastKey = $this->getLastElementKey($this->orderByList);
        foreach ($this->orderByList as $key => $orderBy) {
            $isLastElement = $key === $lastKey;
            $sql .= $orderBy->getColumn() . " " . $orderBy->getOrderType();
            if (!$isLastElement) {
                $sql .= ', ';
            }
        }
        return $sql;
    }

    public function addExtendedFilter(array $extendedSearch): SelectQueryBuilder
    {
        foreach ($extendedSearch as $filterItem) {
            if (in_array($filterItem->getAttribute(), self::SPECIAL_HANDLING)) {
                continue;
            }

            $this->add(
                $filterItem->getAttribute(),
                $filterItem->getValue(),
                $filterItem->getType(),
                $filterItem->getOperator()->getValue()
            );

            if ($filterItem->getOperator()->getValue() === OperatorType::NOT_EMPTY) {
                $this->add($filterItem->getAttribute(), '', 's', OperatorType::NOT_EQUALS);
            }
        }

        return $this;
    }

    private function getLastElementKey(array $array): ?int
    {
        if (!empty($array)) {
            $keys = array_keys($array);
            return end($keys);
        }
        return null;
    }
}