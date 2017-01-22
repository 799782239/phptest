<?php
/**
 * Created by PhpStorm.
 * User: yanqijs
 * Date: 2017/1/16
 * Time: 17:00
 */
include 'TestObj.php';
$sku = $_GET['skuIds'];
$type = $_GET['type'];
$a = array('a' => 1, 'b' => 2);
$obj = new TestObj();
$obj->name = $sku;
$obj->id = '11';
$obj->money = $type;


$b = json_encode($obj);
echo $b;
