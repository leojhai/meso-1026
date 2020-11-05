<?php
    $id = $_POST["id"];
    $message = $_POST["message"];
    if ($id==NULL) {
        header("Location: reuters.php");
        exit;
    }
    require "includes/dbconfig.php";

    $sql = "UPDATE news SET message='$message' WHERE id='$id' LIMIT 1";
    $result = $conn->query($sql);
    $conn->close();
    header("Location: reuters.php");
    exit;
?>