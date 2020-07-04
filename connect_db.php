<?php
    // 创建连接
    $conn = new mysqli("localhost", "root", "123456", "student_management", 3308);
    
    // 检测连接
    if ($conn->connect_error) {
        die("数据库连接失败: " . $conn->connect_error);
    }
?>