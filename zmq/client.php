<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017-03-15
 * Time: 上午 9:57
 */
$data = '{"code":0,"msg":"ok","info":["hello","world"]}';
$context = new ZMQContext ();
$sender = new ZMQSocket ($context, ZMQ::SOCKET_PUSH);
$sender->bind("ipc://step2.ipc");
//向消息队列中写
$i = 1000;
while ($i > 0){
    $i --;
    $sender->send($data);
}
$sender->disconnect("ipc://step2.ipc");