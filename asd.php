<?php
/**
 * Created by PhpStorm.
 * User: yanqijs
 * Date: 2017/1/16
 * Time: 17:00
 */
include 'TestObj.php';
$a = array('a' => 1, 'b' => 2);
$obj = new TestObj();
$obj->name = 'a';
$obj->id = '11';
$obj->money = '152';

$b = json_encode($obj);
echo $b;
