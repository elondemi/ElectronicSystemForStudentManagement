<?php 

class UpdateQueryBuilder extends AbstractQueryBuilder
{
    public static function create(string $tableName): UpdateQueryBuilder
    {
        return new UpdateQueryBuilder($tableName);
    }

    private function __construct(string $tableName)
    {
        $this->tableName = $tableName;
    }

    public function getQuery(): string
    {
        $set = '';
        $lastKey = $this->getLastElementKey($this->queryValues);
        foreach ($this->queryValues as $field => $value) {
            $isLastElement = $field === $lastKey;
            $set .= " `{$field}` = ? ";
            if (!$isLastElement) {
                $set .= ', ';
            }
        }

        $where = '';
        $lastKey = $this->getLastElementKey($this->whereValues);
        foreach ($this->whereValues as $field => $value) {
            $isLastElement = $field === $lastKey;
            $where .= " `{$field}` = ?";
            if (!$isLastElement) {
                $where .= ' AND ';
            }
        }

        return "UPDATE `{$this->tableName}` SET {$set} WHERE {$where};";
    }
}