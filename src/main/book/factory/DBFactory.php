<?php

namespace src\main\book\factory;


class DBFactory {

    private static $connection = null;
    private static $properties = array();

    private static $server;
    private static $user;
    private static $password;
    private static $database;

    public function __construct(){

    }

    public static function openConnection(){
        if(!self::isDBConnected()){
            self::createConnection();
        }
    }

    private static function createConnection()
    {
        self::populateProperties();
        self::$connection = mysqli_connect(self::$server, self::$user,self::$password,self::$database);
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
    }

    private static function populateProperties(){
        self::$properties = parse_ini_file(dirname(__FILE__) . "/../../../resources/system.ini");
        self::$server = self::$properties["dbserver"];
        self::$user = self::$properties["dbuser"];
        self::$password = self::$properties["dbpassword"];
        self::$database = self::$properties["dbname"];
    }

    public static function closeConnection() {
        if(self::isDBConnected()){
            mysqli_close(self::$connection);
            self::$connection = null;
        }
    }

    private static function isDBConnected() {
        return self::$connection != null;
    }

    public static function getConnection(){
        return self::$connection;
    }

}