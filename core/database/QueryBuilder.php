<?php

namespace App\Core\Database;

use Exception;

class QueryBuilder
{
    /** @var \PDO */
    private $pdo;

    /**
     * @param \PDO $pdo
     */
    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    /**
     * Select all rows in a table
     *
     * @param string $table
     * @return array
     */
    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();

        return $statement->fetchAll(\PDO::FETCH_CLASS);
    }

    /**
     * Insert data into a table
     *
     * @param string $table
     * @param array $parameters
     * @return void
     */
    public function insert($table, $parameters)
    {
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );

        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters);
        } catch (Exception $e) {
            die('Whoops, something went wrong.');
        }
    }
}
