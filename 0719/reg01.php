<?php
$pattern = "/^1[34578]\d{9}$/";
$subject = "18828077953";
if(preg_match($pattern, $subject))
{
    echo "YES\n";
}
else
{
    echo "NO\n";
}
?>
