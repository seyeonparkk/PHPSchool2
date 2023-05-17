<?php
//저장
$Filename="data.txt";
// $fp=fopen($Filename,"w");
// $str="Mary had a dog";
// $str1="tom had a cat";
// fwrite($fp,$str1);
// fclose($fp);
// echo"저장되었습니다"
echo "안녕";


//파일읽기
$fp=fopen($Filename,"r");
while(!feof($fp)){   //end of file 파일을 가리키는게 끝이 아니면
    //echo fgetc($fp);
    echo fgets($fp);
}












?>