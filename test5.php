<style>
    h1 {
        color : red;
    }
</style>

<?php

echo "<h1>1. strlen</h1>";
$str = "php is a popular scripting language";
echo strlen($str);

?>

<hr>

<?php

$var1 = "hello";
$var2 = "Hello";
$result = strcmp($var1, $var2);
echo "result : ".$result;

?>
<?php
$str="abcdef";
$find="c";
$pos=$strpos($str,$find);
echo "pos".$pos;
?>
<hr>
<?php
$str="mary had a little lamb and she loved it so MUCH";
echo strtolower($str)."<br/>";
echo strtoupper($str);
?>
<?php
$str="hellophpwelcome";
$result=substr($str,5,5);
echo $result;    //phpwe
$result2=substr($str,3);
echo $result2;
?>