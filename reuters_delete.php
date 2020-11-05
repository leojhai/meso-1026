<?php
    $id = $_GET["id"];
    if ($id==NULL) {
        header("Location: reuters.php");
        exit;
    }
    require "includes/dbconfig.php";

    $sql = "DELETE FROM news WHERE id='$id' LIMIT 1";
    $result = $conn->query($sql);
    $conn->close();
    header("Location: reuters.php");
    exit;
?>