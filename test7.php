<?php
//fread($fp,파일크기);
$fileName = "data2.txt";
$fp=fopen("data2.txt","r");
$fr = fread($fp, filesize("data2.txt"));
   echo $fr;
    

?>