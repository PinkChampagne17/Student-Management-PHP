<?php
    $id = $_GET['id'];

    require '../untils/connect_db.php';

    $conn->query("DELETE FROM classinfo WHERE id=$id");
    
    $conn->close();

    require '../untils/functions.php';

    href('../classinfo.php');
?>
