<?php

require '../vendor/autoload.php';

// dump(phpinfo());

function connection()
{
  return new PDO("mysql:host=myapp_mysql;dbname=docker", "root", "root");
}

$connection = connection();

$users = $connection->query("SELECT * FROM users")->fetchAll(PDO::FETCH_OBJ);

dd($users);
