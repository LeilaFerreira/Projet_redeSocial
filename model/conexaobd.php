<?php
  
class Conexao {
  
    public static $db;
   
    private function __construct() {
        
    }
  
    public static function getInstance() {
        
      
        if (!isset(self::$db)) {
            self::$db = new PDO('mysql:host=localhost;dbname=talkhouse;charset=utf8;port:3306', 'root','');
           // self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           // self::$db->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
        }
  
        return self::$db;
    }



  
}
  
?>