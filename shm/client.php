<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017-03-15
 * Time: 上午 9:57
 */

$data = '{"code":0,"msg":"ok","info":["hello","world"]}';
$key = ftok(__DIR__.DIRECTORY_SEPARATOR.'server.php', 'a');
$shmid = shm_attach( $key); // 创建一个共享内存
$i = 1000;
while ($i > 0){
    $i --;
    shm_put_var( $shmid, 1, $data ); // 插入一个共享内存变量
}
shm_detach( $shmid ); // 关闭共享内存