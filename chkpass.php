<?php
    session_start();
    $passchk=$_POST["password"];
    $userid=$_POST["username"];

    require "includes/dbconfig.php";
    
 // 以下建立SQL查詢指令
 // $sql = "SELECT * FROM news order by id desc";
 //使用 insert into  
    if($userid==NULL || $passchk==NULL  ){
        header("Location: login.php");
    }
    else{
        $sql = "SELECT * FROM students WHERE sid='$userid'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $name = $row["sname"];
        $passok = $row["password"];
        $id = $row["sid"];
        if ($passok==$passchk ){
            $_SESSION["user_type"]=1;    
            header("Location: homepage.php");        
        } else{
            header("Location: login.php");
        }
         
    }
    $conn->close();
?>