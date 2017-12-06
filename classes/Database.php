
<?php
class Database{
    public static $host = "localhost";
    public static $dbname = "test";
    public static $username = "root";
    public static $password = "";


   private static function connect(){
       $pdo= new PDO('mysql:host='.self::$host.';dbname='.self::$dbname.';charset=utf8',self::$username,self::$password);
       $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
       return $pdo;
   }

   public static function query($query,$params=array())
   {

       $statement=self::connect()->prepare($query);
       $statement->execute($params);
       if (explode(' ',$query)[0]=="SELECT"){
           $data=$statement->fetchAll();
           return $data;
       }else if (explode(' ', $query)[1] == "DELETE"){
            $data = $statement->delete();
            return $data;

       }

   
   }



}












?>