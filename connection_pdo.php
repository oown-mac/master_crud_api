<?php
//$servername = 'localhost';        // Replace with your database host
//$dbusername = 'root';         // Replace with your database username
//$dbpassword = '';             // Replace with your database password
//$dbname = 'master_crud';    // Replace with your database name

$servername = '163.44.198.71';        // Replace with your database host
$dbusername = 'cp246871_master';         // Replace with your database username
$dbpassword = 'masteroown';             // Replace with your database password
$dbname = 'cp246871_master_crud';    // Replace with your database name

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $dbusername, $dbpassword);
    // set the PDO error mode to exception
    
    $conn->exec("set names utf8");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>  
