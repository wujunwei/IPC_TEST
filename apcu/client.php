<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017-03-15
 * Time: 上午 9:57
 */

$data = '{"code":0,"msg":"ok","info":["hello","world"]}';
$i = 1000;
while ($i > 0){
    if (apcu_exists('test')){
        apcu_add('test', $data);
    }else{
        apcu_cas('test', $data, $data);
    }
}

