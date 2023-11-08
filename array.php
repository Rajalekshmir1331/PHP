<?php
$num = array(5 , 8 , 6 , 25 , 1 , 2);
sort($num);
$arrlength = count($num);
for($x = 0; $x < $arrlength; $x++) 
{
    echo $num[$x];
    echo "<br>";
}
?>