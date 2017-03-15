<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017-03-15
 * Time: 上午 9:57
 */

$data = '{"code":0,"msg":"ok","info":["hello","world"]}';
$context = new ZMQContext ();

$receiver = new ZMQSocket ($context, ZMQ::SOCKET_PAIR);
$receiver->bind ("ipc://step2.ipc");
 
$strings = $receiver->recv();

$sender = new ZMQSocket ($context, ZMQ::SOCKET_PAIR);
 
$sender->connect ("ipc://step3.ipc");
 
$sender->send ($data);