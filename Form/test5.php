<?php
//사용자가 입력한 id와 pass를 가져옴
//$_GET  $_POST
$real_id="test";
$real_pass="testpass";


$id=$_POST["user_id"];   //사용자가 입력한 id값
$pass=$_POST["user_pass"];

if($real_id==$id&&$real_pass==$pass){
    echo "회원입니다";
}else if($real_id==$id&&$real_pass!=$pass){
    echo "비밀번호 틀렸습니다";
}else if($real_id!=$id&&$real_pass==$pass){
    echo "아이디 틀렸습니다";
}else{
    echo "회원아님";
}
// echo "id".$id."이고<br/>";
// echo "password".$pass;
?>