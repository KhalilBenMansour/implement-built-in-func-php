<?php
$strarg="12";
function khalil_strlen( string $str):int{
    $i=0;
    while($str[$i]!="" && $i<20){
        echo $i;
        $i++;
    }
return $i;
}
echo khalil_strlen($strarg) . "<br>";
echo strlen($strarg) . "<br>";;