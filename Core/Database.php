<?php

namespace Core;

use PDO;

class Database {
  public $connection;
  public $statement;

  public function __construct($username = 'root', $password = 'password')
  {
    $config = require BASE_PATH.'/config.php';
    $dsn = 'mysql:'.http_build_query($config['db'], '', ';');
    $this->connection = new PDO($dsn, $username, $password, [
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
  }

  public function query($query, $params = [])
  {
    $this->statement = $this->connection->prepare($query);
    $this->statement->execute($params);
    return $this;
  }

  public function get()
  {
    return $this->statement->fetchAll();
  }
}