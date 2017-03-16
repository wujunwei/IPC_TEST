<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017-03-15
 * Time: 上午 9:57
 */

$client = new Redis();
$client->connect('127.0.0.1');
$queue_name = 'test';
while (1){
    if($client->lLen('test') > 0){
        $client->lPop('test');
    }
}
$client->close();