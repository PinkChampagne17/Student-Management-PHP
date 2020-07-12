<?php
    // 创建连接
    $conn = new mysqli("localhost", "root", "", "un_management", 3306);

    $conn->set_charset("utf8");
    
    // 检测连接
    if ($conn->connect_error) {
        die("数据库连接失败: " . $conn->connect_error);
    }

    function alert($msg) {
        echo "<script>alert('$msg')</script>";
    }

    function href($url) {
        echo "<script>location.href='$url'</script>";
    }
?>