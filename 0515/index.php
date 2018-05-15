<?php
session_start();
$session_name = session_name();
$id = session_id();
echo "<h3>session_name:{$session_name} </h3>";
echo "<h3>session_id: {$id}</h3>";

echo "<h3>Session Before</h3>";
$_SESSION['system'] = 'Linux';
echo '<pre>';
print_r($_SESSION);
echo '</pre>';

session_unset();
session_destroy();
echo "<h3>Session After</h3>";
echo '<pre>';
print_r($_SESSION);
echo '</pre>';
?>
