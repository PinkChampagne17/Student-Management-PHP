<?php
    // 创建连接
    $conn = new mysqli("localhost", "root", "", "student_management", 3306);

    $conn->set_charset("utf8");
    
    // 检测连接
    if ($conn->connect_error) {
        die("数据库连接失败: " . $conn->connect_error);
    }
?>