<?php
class Database
{
    private static $dbName = 'multi_login';
    private static $dbHost = 'localhost';
    private static $dbUsername = 'root';
    private static $dbUserPassword = '';
     
    private static $cont  = null;
     
    //DESTRUTOR chamado a cada novo objeto criado
    public function __construct() {
      die('Init function is not allowed');
    }
     
    public static function connect() {
      if (null == self::$cont )
      {     
        try
        {
          self::$cont =  new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbUserPassword);
          //session_start(); 
        }
        catch(PDOException $e)
        {
          die($e->getMessage()); 
        }
      }
      return self::$cont;
    }
     
    public static function disconnect() {
      self::$cont = null;
    }
}
?>
