<?php
include "abstract.php";
class InsertQueryBuilder extends AbstractQueryBuilder
{
    public static function create(string $tableName): InsertQueryBuilder
    {
        return new InsertQueryBuilder($tableName);
    }

    private function __construct(string $tableName)
    {
        $this->tableName = $tableName;
    }

    public function getQuery(): string
    {
        $fields = '';
        $values = '';
        $lastKey = $this->getLastElementKey($this->queryValues);
        foreach ($this->queryValues as $field => $value) {
            $isLastElement = $field === $lastKey;
            $fields .= "`{$field}`";
            $values .= '?';
            if (!$isLastElement) {
                $fields .= ', ';
                $values .= ', ';
            }
        }

        return "INSERT INTO `{$this->tableName}` ({$fields}) VALUES ({$values});";
    }
}