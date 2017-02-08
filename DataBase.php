<?php

class DataBase{

    private static $host = "localhost";
    private static $dbName = 'esolar07_cuban_spot';
	private static $dbUsername = 'esolar07_dbeddie';
	private static $dbUserPassword = 'kate3481';
	private static $db; 

    public static function dbConnect(){
        
        try {

            self::$db = new PDO( "mysql:host=" . self::$host . ";" . "dbname=" . self::$dbName, self::$dbUsername, self::$dbUserPassword );
            self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
            return self::$db;
            
        } catch(Exception $e){

			echo $e->getMessage();
			die();

		}
        
    }

    public static function dbDisconnect(){
        self::$db = null;
    }

}