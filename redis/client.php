<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017-03-15
 * Time: 上午 9:57
 */

$data = '{"code":0,"msg":"ok","info":["hello","world"]}';
$client = new Redis();
$client->connect('127.0.0.1');
$queue_name = 'test';
for ($i = 0; $i < 1000; $i ++){
    $client->lPush('test', $data);
}
$client->close();