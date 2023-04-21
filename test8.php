
<?php
$fileName = "sent.txt";
$fp=fopen("sent.txt","r");
$fr = fread($fp, filesize("sent.txt"));
   echo $fr;

?>