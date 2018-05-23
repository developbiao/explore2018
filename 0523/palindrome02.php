<?php
function isPalindrome($number)
{
    $temp = $number;
    $new = 0;
    while(floor($temp))
    {
        $d = $temp % 10;
        $new = $new * 10 + $d;
        $temp = $temp / 10;
    }

    if($new == $number)
    {
        return true;
    }
    else
    {
        return false;
    }
}

// Driver code
$ori_number = 2441;
if(isPalindrome($ori_number))
{
   echo "Palindrome" . PHP_EOL;
}
else
{
    echo "Not a Palindrome" . PHP_EOL;

}



?>
