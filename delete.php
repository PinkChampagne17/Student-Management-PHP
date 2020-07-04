<?php
    $id = $_GET['id'];

    require './connect_db.php';

    $conn->query("DELETE FROM student WHERE id=$id");
    
    $conn->close();

    require './until.php';

    alert('删除成功');
    href('./home.php');
?>