<?php
//当用户推流的时候 可以进行权限认证 如果有权限返回200 没有就返回
// if($_POST['clientid']!='110'){
// header("Location:")

// };
// 
//header('WWW-Authenticate: Basic realm="My Realm"');
  // header('HTTP/1.0 401 Unauthorized');
   // echo 'Text to send if user hits Cancel button';
   // exit;
    
$content = "publish begin \n\n".date('Y-m-d H:i:s').print_r($_POST,true).print_r($_SERVER,true);
file_put_contents('log.txt',$content,FILE_APPEND);


?>
