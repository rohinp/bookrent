<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 18/12/13
 * Time: 12:18 AM
 */

namespace src\main\book\factory;

require(dirname(__FILE__) . "/../../../main/book/factory/DBFactory.php");

use src\main\book\factory\DBFactory as DBFactory;

class SQLEngine {

    private static $resultSet;

    public static function executeQuery($sqlQuery){
        DBFactory::openConnection();
        self::$resultSet = mysqli_query(DBFactory::getConnection(),$sqlQuery);
        DBFactory::closeConnection();
    }

    public static function getResultSet(){
        return self::$resultSet;
    }
} 