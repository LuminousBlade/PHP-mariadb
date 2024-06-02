<?php
require "config.php";
class Database {
  public $connection;
  public function __construct($config, $username = 'root', $password = 'mariadb') {

    $dsn = 'mysql:host=localhost;dbname=todo_db;port=3306';

    $this->connection = new PDO($dsn, $username, $password, [
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
  }

  public function query($query, $params = []) {

    $statement = $this->connection->prepare($query);
    $statement->execute($params);

    return $statement;

  }
}
?>
