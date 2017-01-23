<?php
/**
 * Created by PhpStorm.
 * User: yanqijs
 * Date: 2017/1/16
 * Time: 17:00
 */
include 'TestObj.php';
include 'db/DbTransaction.php';
include 'model/EquipmentListModel.php';
header("Content-Type:text/html;charset=utf-8");
$sku = $_GET['skuIds'];
$type = $_GET['type'];
$a = array('a' => 1, 'b' => 2);
$obj = new TestObj();
$obj->name = $sku;
$obj->id = '11';
$obj->money = $type;
//while ($obj = mysqli_fetch_object(queryDb("select * from base_equipment"), EquipmentListModel)) {
$result = queryDb("select * from base_equipment");
while ($obj = $result->fetch_object(EquipmentListModel)) {
    echo $obj->from;
}
//}


$b = json_encode($obj);
echo $b;
