<?php


namespace Kago\Core\Database;


use PDO;
use PDOException;

class DatabaseConnection
{

    private static $connection = null;

    static function getConnection(){
        if(self::$connection == null){

            $servername = "localhost";
            $username = "root";
            $password = "password";
            try {
                self::$connection = new PDO("mysql:host=$servername;dbname=kago_blog", $username, $password);
                self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch(PDOException $e)
            {
                echo "Connection failed: " . $e->getMessage();
            }

        }

        return self::$connection;
    }



}