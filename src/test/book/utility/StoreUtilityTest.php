<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 1/12/13
 * Time: 5:59 PM
 */

namespace src\test\book\utility;
require(dirname(__FILE__) . "/../../../main/book/utility/StoreUtility.php");
require(dirname(__FILE__) . "/../../../main/book/factory/SQLEngine.php");



use src\main\book\utility\StoreUtility as StoreUtility;
use src\main\book\factory\SQLEngine as SQLEngine;

class StoreUtilityTest extends \PHPUnit_Framework_TestCase {

    public function testToCheckQueryObjectToBookDataStructuredConverted(){
        //given
        $store = new StoreUtility();
        SQLEngine::executeQuery("select * from book");
        $result = SQLEngine::getResultSet();
        //when
        $actual = $store->queryToBook($result);
        //then
        assert($result->num_rows == count($actual));
    }

}
 