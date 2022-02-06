<?php
function isFirstLetterUpperCase($str)
{
    $pattern = '/^[A-Z]/';
    if(preg_match($pattern, $str)){
        echo "String's first character is uppercase";
    }else{
        echo "String's first character is not uppercase";

    }
}
$str = "Hung";
echo isFirstLetterUpperCase($str);
echo "<pre>";
$str = "nhung";
echo isFirstLetterUpperCase($str);