<?php

$real_id = "test";
$real_pass = "testpass";

// 사용자가 입력한 id와 pass를 가져올거야
// $_GET    $_POST
$id = $_POST["user_id"];    //$id : 사용자가 입력한 id값
$pass=$_POST["user_pass"];

if ( ($real_id == $id) && ($real_pass == $pass)) {
    echo "로그인 성공</br>";
    echo "id : ".$id."이고</br>";
    echo "password : ".$pass."이다.";
} else {
    echo "로그인 실패";
}

?>