<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017-03-15
 * Time: 上午 9:57
 */

$data = '{"code":0,"msg":"ok","info":["hello","world"]}';
$key = ftok(__FILE__, 'a');
$shmid = shm_attach( $key, '10240', 0666 );
$view = true;
while (1){
    if (shm_has_var($shmid, 1)){
        $string = shm_get_var($shmid, 1);
        if ($view){
            echo $string;
            $view = false;
        }
    }
}
shm_remove( $shmid );