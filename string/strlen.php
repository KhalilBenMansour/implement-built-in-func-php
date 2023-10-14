<?php
$strarg="Hello";
function khalil_strlen( string $str):int{
    $count=0;
    while($str && $str[$count]){
        $count++;
    }
return $count;
}
echo khalil_strlen($strarg) . "<br>";
echo strlen($strarg) . "<br>";;