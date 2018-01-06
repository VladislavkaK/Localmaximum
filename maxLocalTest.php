<?php
/**
 * Created by PhpStorm.
 * User: Vlad
 * Date: 03.11.2017
 * Time: 16:05
 */

require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'maxLocal.php';

use PHPUnit\Framework\TestCase;

class MaxLocalTest extends TestCase
{

    public function testMaxLocalOne()
    {
        $arr = [10, 100, 44, 72, 36, 8, 9, 20, 84, 79, 51 ,91 ,50, 72, 41, 21, 82, 97, 2, 93 ];
        $result = localMax($arr);
        $testResult = [100, 72, 84, 91, 72, 97];

        $this->assertEquals($testResult, $result);//сравнивается количества всех полученных локальных максмумов
        //$this->assertTrue($variable,$result);
    }

    public function testMaxLocalTwo()
    {
        $arr = [ 51 ,91 ,50, 72, 41, 21, 82, 97, 2, 93 ];
        $result = localMax($arr);
        $testResult = [91, 72, 97];
        $this->assertEquals($testResult, $result);//сравнивается количества всех полученных локальных максмумов
        //$this->assertTrue($variable,$result);
    }

    public function testMaxLocalThree()
    {
        $arr = [10, 100, 44 ];
        $result = localMax($arr);
        $testResult = [100];
        $this->assertEquals($testResult, $result);//сравнивается количества всех полученных локальных максмумов
        //$this->assertTrue($variable,$result);
    }
}