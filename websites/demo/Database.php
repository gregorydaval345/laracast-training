<?php


class Database
{
    public $connection;

    public function __construct($config)
    {
        $dsn = 'mysql:' . http_build_query($config, '', ';');

        // $userName = getenv('DB_USERNAME');
        // $password = getenv('DB_PASSWORD');

        // add username and password below
        $this->connection = new PDO($dsn, '', '', [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }
    public function query($query, $params = [])
    {
        $statement = $this->connection->prepare($query);
        $statement->execute($params);

        return $statement;
    }
}
