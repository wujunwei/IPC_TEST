<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017-03-15
 * Time: 上午 9:57
 */

$m = new Memcache();
$m->connect('127.0.0.1',12212);
$display = true;
while (1){
    $date = $m->get('testq');
    if ($display){
        var_dump($date);
        $display = false;
    }
}
$m->close();