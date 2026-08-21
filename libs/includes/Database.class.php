<?php

class Database{
    public static $conn = null;

    public static function getconnection(){

    if(Database :: $conn == null){

    $servername = "mysql.selfmade.ninja:3306";
    $username = "Saravanan04";
    $password = "Saravanan123#";
    $dbname = "Saravanan04_newdb2";


    // Create connection
    $connection = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}else{
    // printf("This is returning...");
    Database::$conn = $connection;
    return Database::$conn;
}

    }else{
        printf("This is existing.... ");
        return Database :: $conn;
    }

    }
}