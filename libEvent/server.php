<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017-03-15
 * Time: 上午 9:57
 */

$data = '{"code":0,"msg":"ok","info":["hello","world"]}';
$key = ftok(__FILE__, 'a');
$message_queue = msg_get_queue($key, 0666);
//从消息队列中读
while (1){
    msg_receive($message_queue, 0, $message_type, 1024, $message, true, MSG_IPC_NOWAIT);
}
msg_remove_queue($message_queue);