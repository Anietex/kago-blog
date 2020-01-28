<?php


namespace Kago\Core\Database;


use Kago\Core\System\Config;
use PDO;
use PDOException;

class DatabaseConnection
{

    private static $connection = null;

    static function getConnection(){
        $config = new Config();

        $dbConfig =  $config->getConfig('database');

        if(self::$connection == null){

            $servername = $dbConfig->host;
            $username = $dbConfig->user;
            $password = $dbConfig->password;
            $dbName = $dbConfig->database;
            try {
                self::$connection = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);
                self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
//                $this->pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );

            }
            catch(PDOException $e)
            {
                echo "Connection failed: " . $e->getMessage();
            }

        }

        return self::$connection;
    }






}