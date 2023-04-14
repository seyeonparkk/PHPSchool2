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