<?php
/**
 * Created by PhpStorm.
 * User: yQ
 * Date: 2017/1/23
 * Time: 18:07
 */
include 'db/DbTransaction.php';
include 'model/EquipmentListModel.php';
include 'Out.php';

$part = $_GET['part'];
$min = $_GET['min'];
$max = $_GET['max'];

$results = array();
$result = queryDb("select * from base_equipment WHERE part='$part'&& quality_rank BETWEEN '$min'AND '$max'");
while ($obj = mysqli_fetch_array($result)) {
    $data = new EquipmentListModel();
    $data->equipmentName = $obj["equipment_name"];
    $data->qualityRank = $obj["quality_rank"];
    $data->equipmentScore = $obj["equipment_score"];
    $data->school = $obj["school"];
    $data->stand = $obj["stand"];
    $data->from = $obj["from"];
    $data->part = $obj["part"];
    $results[] = $data;
}
//$results['errorCode'] = "0";
//$results['errorMessage'] = "ok";
echo outMessage("1", "success", $results);
