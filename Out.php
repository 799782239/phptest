<?php
/**
 * Created by PhpStorm.
 * User: yQ
 * Date: 2017/1/25
 * Time: 16:45
 */
function outMessage($errorCode, $errorMessage, $message)
{
    $out = array();
    $out['errorCode'] = $errorCode;
    $out['errorMessage'] = $errorMessage;
    $out['data'] = $message;
    return json_encode($out);
}