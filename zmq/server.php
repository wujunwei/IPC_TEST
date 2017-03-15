<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017-03-15
 * Time: 上午 9:57
 */

$context = new ZMQContext ();

$receiver = $context->getSocket(ZMQ::SOCKET_PULL);
$receiver->bind("ipc://step2.ipc");
 while (1){
     $strings = $receiver->recv();
     if (!empty($strings)){
         echo $strings;
     }
 }
