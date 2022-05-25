<?php declare(strict_types=1);



// use InvalidArgumentException;
// use LogicException;

abstract class AbstractQueryBuilder
{
    protected string $tableName;
    protected string $queryTypes = '';
    protected array $queryValues = [];
    protected string $whereTypes = '';
    protected array $whereValues = [];
    protected array $forceOverwriteFields = [];
    abstract public function getQuery(): string;

  
    public function add(string $field, $value, string $type = null, bool $addNullValue = false): AbstractQueryBuilder
    {
        $field = trim($field);
        if (array_key_exists($field, $this->queryValues)) {
            throw new LogicException("Field {$field} already set!");
        }

        if (!$addNullValue && null === $value && !$this->isUpdateForced($field)) {
            return $this;
        }

        if (null === $type) {
            $type = $this->detectType($value);
        }

        $this->queryTypes .= $type;
        $this->queryValues[$field] = $value;

        return $this;
    }

    public function addCurrentDateTime(string $field): AbstractQueryBuilder
    {
        return $this->add($field, date('Y-m-d H:i:s'), 's');
    }


    public function addDate(string $field, $value, bool $addNullValue = false): AbstractQueryBuilder
    {
        if (array_key_exists($field, $this->queryValues)) {
            throw new LogicException("Field {$field} already set!");
        }

        if (!$addNullValue && null === $value) {
            return $this;
        }

        $this->queryTypes .= 's';
        $value = '' === $value ? null : $value;
        $this->queryValues[$field] = $value;

        return $this;
    }


    public function addWhere(string $field, $value, string $type = null): AbstractQueryBuilder
    {
        if (array_key_exists($field, $this->whereValues)) {
            throw new LogicException("Field {$field} already set!");
        }

        if (null === $type) {
            $type = $this->detectType($value);
        }

        $this->whereTypes .= $type;
        $this->whereValues[$field] = $value;

        return $this;
    }

  
    public function getTypes(): string
    {
        return $this->queryTypes . $this->whereTypes;
    }


    public function getValues(): array
    {
        return array_merge(array_values($this->queryValues), array_values($this->whereValues));
    }

 
    public function addForceOverwriteFields(array $forceOverwriteFields): AbstractQueryBuilder
    {
        $this->forceOverwriteFields = array_merge($this->forceOverwriteFields, $forceOverwriteFields);

        return $this;
    }


    public function detectType($value): string
    {
        $type = gettype($value);
        switch ($type) {
            case 'boolean':
            case 'integer':
                return 'i';
            case 'double':
                return 'd';
            case 'NULL':
            case 'string':
                return 's';
            case 'array':
            case 'object':
            case 'resource':
            default:
                throw new InvalidArgumentException("Type {$type} not supported!");
        }
    }

    protected function getLastElementKey(array $array)
    {
        $keys = array_keys($array);
        return end($keys);
    }

    protected function isUpdateForced(string $field): bool
    {
        return in_array($field, $this->forceOverwriteFields);
    }
}
