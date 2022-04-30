<?php


 class Database 
 {
    private static $dbHost = "localhost:3308";
    private static $dbName="mamma_yummy";
    private static $dbUser="root";
    private static $dbUserPassword="";

    private static $connection = null ;

    public static function connect()
    {
        try{
            self::$connection = new PDO( "mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName , self::$dbUser , self::$dbUserPassword );
        }
        catch(PDOException $e){
            die($e->getMessage());
        }
        return self::$connection;  
        
    }
    public static function disconnect(){
        self::$connection = null;
    }
}

Database::connect();

    

?>
