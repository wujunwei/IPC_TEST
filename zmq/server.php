<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017-03-15
 * Time: 上午 9:57
 */

$context = new ZMQContext ();

$receiver = new ZMQSocket ($context, ZMQ::SOCKET_PULL);
$receiver->connect ("ipc://step2.ipc");
 while (1){
     $strings = $receiver->recv();
 }
$receiver->disconnect("ipc://step2.ipc");