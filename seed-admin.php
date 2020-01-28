<?php
require 'src/Core/System/Config.php';
require 'src/Core/Database/DatabaseConnection.php';
require 'src/Core/Database/Database.php';



 $db = new \Kago\Core\Database\Database();

 $db->create('users',  [

     "email" => "admin@kago.test" ,
     "password" => password_hash('password',PASSWORD_DEFAULT)
 ]);