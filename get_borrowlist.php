<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

include 'connection_pdo.php';

$userid = $_GET['userid'];

$sql = "SELECT * FROM borrowlist WHERE user_id = :userid ";
$sql .= " ORDER BY bor_auto ";
$stmt = $conn->prepare($sql);
$stmt->bindParam(":userid", $userid);
$stmt->execute();
$returnValue = $stmt->fetchAll(PDO::FETCH_ASSOC);   

echo json_encode($returnValue);

?>