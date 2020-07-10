<?php
    $id = $_GET['id'];

    require '../untils/connect_db.php';

    $conn->query("DELETE FROM student WHERE id=$id");
    
    $conn->close();

    require '../untils/functions.php';

    href('../home.php');
?>