<?php
class Database
{
  private static $db_name = 'rai_task_4_1103120100';
  private static $db_host = 'localhost';
  private static $db_user = 'root';
  private static $db_pass = '';

  private static $connection = null;

  public function __construct()
  {
    die('Instancing is not allowed');
  }

  public static function instance()
  {
    if (null == self::$connection)
    {
      try {
        self::$connection = new PDO( "mysql:host=".self::$db_host.";"."dbname=".self::$db_name, self::$db_user, self::$db_pass);
      } catch (PDOException $e) {
        die($e->getMessage());
      }
      return self::$connection;
    }
  }

  public static function release()
  {
    self::$connection = null;
  }
}
?>
