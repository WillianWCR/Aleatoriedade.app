<?php
  class DB{
    private $returnId;
    private static $databasename;

    private static function connect($key){
      $DBPASS = '';
      $DBNAME = $key;
      $DBUSER = 'root';
      $DBHOST = 'localhost';

      $pdo = new PDO('mysql:host='.$DBHOST.';dbname='.$DBNAME.';charset=utf8', $DBUSER, $DBPASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
      $pdo->exec("SET CHARACTER SET utf8");
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      //self::$returnId = $pdo::lastInsertId();
      return $pdo;

    }
    
    public static function setDB($name){
      return self::$databasename = $name;
    }

    public static function query($query, $params = array(), $dbname = 'willianw_aleatoriedade'){
      if(self::$databasename){
        $dbname = self::$databasename;
      }
      $connection = self::connect($dbname);
      $statment = $connection->prepare($query);
      $statment->execute($params);

      if (explode(' ', $query)[0] == 'SELECT'){
        $data = $statment->fetchAll();
        return $data;
      }

      if (explode(' ', $query)[0] == 'INSERT'){
        return $connection->lastInsertId();
      }

    }
  }


?>
