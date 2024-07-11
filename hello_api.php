<?php
header("Access-Control-Allow-Origin: *");

$name = $_GET['name'];
$address = $_GET['address'];

//echo "Hello API World From Internet\n";
echo "Hello $name,  ...you are from $address !";

?>
