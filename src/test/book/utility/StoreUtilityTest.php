<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 1/12/13
 * Time: 5:59 PM
 */

namespace src\test\book\utility;
require(dirname(__FILE__) . "/../../../main/book/utility/StoreUtility.php");
require(dirname(__FILE__) . "/../../../main/book/factory/DBFactory.php");


use src\main\book\utility\StoreUtility as StoreUtility;
use src\main\book\factory\DBFactory as DBFactory;

class StoreUtilityTest extends \PHPUnit_Framework_TestCase {

    private $con;

    public function testToCheckQueryObjectToBookDataStructuredConverted(){
        //given
        $store = new StoreUtility();
        DBFactory::openConnection();
        $this->con = DBFactory::getConnection();
        $result = mysqli_query($this->con,"select * from book");
        //when
        $actual = $store->queryToBook($result);
        //then
        assert($result->num_rows == count($actual));
        DBFactory::closeConnection();
    }

}
 