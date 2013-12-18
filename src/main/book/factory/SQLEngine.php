<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 18/12/13
 * Time: 12:18 AM
 */

namespace src\main\book\factory;


class SQLEngine {

    public static function executeQuery($sqlQuery){
        DBFactory::openConnection();
        mysqli_query(DBFactory::getConnection(),$sqlQuery);
        DBFactory::closeConnection();
    }
} 