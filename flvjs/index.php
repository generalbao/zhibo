<?php

header("Content-type:application/json");
$arr = 
[
    'type'=>'flv',
    'isLive'=>'',
    'url'=>'http://192.168.28.135:8080/record/haha-2017-09-22-18_21_44.flv'

];
echo json_encode($arr);
?>
