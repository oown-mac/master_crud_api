<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

include 'connection_pdo.php';

$username = $_GET['username'];
$password = $_GET['password'];


$sql = "SELECT * FROM admin WHERE adm_username = :username ";
$sql .= " AND adm_password = :password ";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':username', $username);
$stmt->bindParam(':password', $password);
$stmt->execute();
$returnValue = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($returnValue);


?>
