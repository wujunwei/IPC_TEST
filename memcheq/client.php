<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017-03-15
 * Time: 上午 9:57
 * port：12212
 */

$data = '{"code":0,"msg":"ok","info":["hello","world"]}';
$m = new Memcache();
$m->connect('127.0.0.1',22201);
$i = 1000;
while ($i > 0){
    $m->set('testq','{"code":0,"msg":"ok","info":["hello","world"]}');
    $i --;
}
$m->close();