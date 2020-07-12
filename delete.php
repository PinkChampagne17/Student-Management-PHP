<?php
        require './connect_mysql.php';

        $id = $_GET['id'];
    
        $conn->query("DELETE FROM country WHERE id=$id");
        
        $conn->close();
    
        href('./home.php');
?>