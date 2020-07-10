<?php
    require '../untils/connect_db.php';
    require '../untils/functions.php';
  
    $sql = "update user set uname='{$_POST['uname']}' where id= {$_COOKIE['id']}";

    if ($conn->query($sql) === TRUE) {
        alert('修改成功');
        href("../user.php");
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>