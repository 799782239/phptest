<?php
/**
 * Created by PhpStorm.
 * User: yanqijs
 * Date: 2017/1/22
 * Time: 18:19
 */

function connectDb()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $table = "jx_equipment";
    $mySql = new mysqli($servername, $username, $password, $table);
    if ($mySql->connect_error) {
        die("connect_failed:" + $mySql->connect_error);
    }
    return $mySql;
}

function queryDb($sql)
{
    $mySql = connectDb();
    //解决中文乱码
    $mySql->query("SET NAMES 'utf8'");
    $result = $mySql->query($sql);
//    $obj = queryDb("select * from base_equipment");
    $mySql->close();
    if ($result->num_rows > 0) {
        return $result;
    } else {
        die("no result");
    }
}
