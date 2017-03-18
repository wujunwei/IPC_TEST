<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017-03-15
 * Time: 上午 9:57
 */

while (1){
    $string = apcu_fetch('test');
    echo $string;
}
