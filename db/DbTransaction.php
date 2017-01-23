<?php
/**
 * Created by PhpStorm.
 * User: yanqijs
 * Date: 2017/1/22
 * Time: 18:19
 */

function  connectDb()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $mySql = new mysqli($servername, $username, $password);
    if ($mySql->connect_error) {
        die("connect_failed:" + $mySql->connect_error);
    }
    $mySql->close();
    return $mySql;
}

function  queryDb($sql)
{
    $mySql = connectDb();
    $result = $mySql->query($sql);
    $mySql->close();
    if ($result->num_rows > 0) {
        return $result;
    } else {
        return "无结果";
    }
}
