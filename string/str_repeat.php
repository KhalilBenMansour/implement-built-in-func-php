<?php
function custom_str_repeat(string $str,int $repeats):string{
$result="";
if($repeats < 0){
     throw new Error("custom_str_repeat(): Argument #2 must be greater than or equal to 0");
} 

for ($i=0; $i <$repeats ; $i++) { 
    $result.=$str;
}
return $result;
}
 echo str_repeat("khalil", 2)."<br>";
echo custom_str_repeat("khalil",2)."<br>";