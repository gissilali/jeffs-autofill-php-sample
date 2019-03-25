<?php

class QueryBuilder
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function findOne($table, $column, $value)
    {
        $statement = $this->pdo->prepare(
            "select * from {$table} where {$column} = '{$value}' LIMIT 1"
        );

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS)[0];
    }
}