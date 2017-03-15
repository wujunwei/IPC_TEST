<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017-03-15
 * Time: 上午 9:57
 */

$data = '{"code":0,"msg":"ok","info":["hello","world"]}';
$key = ftok(__DIR__.'server.php', 'a');
$message_queue = msg_get_queue($key, 0666);
//向消息队列中写
$i = 1000;
while ($i > 0){
    $i --;
    msg_send($message_queue, 1, $data);

}

if (isset($_GET['end'])){
    msg_remove_queue($message_queue);
}