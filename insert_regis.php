<?php
    include "headers.php";
    include "connection_pdo.php";

    $userid = $_POST['userid'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $fullname = $_POST['fullname'];

    $sql = "INSERT INTO admin (user_id, adm_username, adm_password, adm_fullname) ";
    $sql .= " VALUES (:userid, :username, :password, :fullname) ";
    $stml = $conn->prepare($sql);
    $stml->bindParam(':userid', $userid);
    $stml->bindParam(':username', $username);
    $stml->bindParam(':password', $password);
    $stml->bindParam(':fullname', $fullname);
    $stml->execute();
    $returnValue = $stml->rowCount() > 0 ? 1 : 0;

    echo json_encode($returnValue);

      

?>