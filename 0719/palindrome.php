<?php
function isPalindrome($number)
{
    $temp = $number;
    $new_number = 0;
    while(floor($temp))
    {
        $d = $temp % 10;
        $new_number = $new_number * 10 + $d;
        $temp = $temp / 10;
    }

    return $new_number == $number;
}

$ori_number = 12321;
if(isPalindrome($ori_number))
{
       echo "Palindrome" . PHP_EOL;
}
else
{
        echo "Not a Palindrome" . PHP_EOL;
}

?>
