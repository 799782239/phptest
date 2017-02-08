<?php
/**
 * Created by PhpStorm.
 * User: yQ
 * Date: 2017/2/6
 * Time: 18:29
 */

include 'db/DbTransaction.php';
include 'model/GeneralEquipmentModel.php';
include 'Out.php';

$pId = $_GET['pid'];
//$pId = 100001;
$result = queryDb("SELECT base_equipment.*,general_equipment.* FROM base_equipment,general_equipment WHERE base_equipment.pid='$pId' AND general_equipment.pid='$pId'");
$data = new GeneralEquipmentModel();
while ($obj = mysqli_fetch_array($result)) {
    $data->equipmentName = $obj["equipment_name"];
    $data->qualityRank = $obj["quality_rank"];
    $data->equipmentScore = $obj["equipment_score"];
    $data->school = $obj["school"];
    $data->stand = $obj["stand"];
    $data->from = $obj["from"];
    $data->part = $obj["part"];
    $data->pId = $obj["pid"];
    $data->money = $obj["money"];
    $data->outDefense = $obj["out_defense"];
    $data->innerDefense = $obj["inner_defense"];
    $data->constitution = $obj["constitution"];
    $data->attribute = $obj["attribute"];
    $data->attack = $obj["attack"];
    $data->special = $obj["special"];
    $data->specialEffect = $obj["special_effect"];
    $data->broken = $obj["broken"];
    $data->hit = $obj["hit"];
    $data->wushuang = $obj["wushuang"];
    $data->resistSpecial = $obj["resist_special"];
    $data->resistAttack = $obj["resist_attack"];
    $data->weiwangxiaohao = $obj["weiwangxiaohao"];
    $data->banggongxiaohao = $obj["banggongxiaohao"];
    $data->xiayixiaohao = $obj["xiayixiaohao"];
//    $results[] = $data;
}
echo outMessage("1", "success", $data);