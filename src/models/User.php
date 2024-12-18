<?php

namespace Dsw\Tema6\Models;

use PDO;
use PDOException;

class User {
  static private $connection;

  public function __construct()
  {
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $db = 'capasbd';
    $dsn = "mysql:host=$host;dbname=$db";

    try {
      self::$connection = new PDO($dsn, $user, $password);
      self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $th) {
      die('Error en la conexión: ' . $th->getMessage());
    }
  }

  public static function all() {
    $statement = self::$connection->prepare('SELECT * FROM users');
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $results;
  }

  public static function get($id) {
    // return array_first(self::$users, function($user) use($id) {
    //   return $user['id'] == $id;
    // });
  }
}