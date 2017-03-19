<?php


$data = '{"code":0,"msg":"ok","info":["hello","world"]}';

$client = new swoole_client(SWOOLE_SOCK_TCP);
if( !$client->connect("127.0.0.1", 9501 , 1) ) {
    echo "Connect Error";
}
$i = 1000;
while ($i > 0){
    $i --;
    $this->client->send($data);
}
