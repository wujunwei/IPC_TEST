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
$sender->connect ("ipc://step2.ipc");
$sender->send($data);