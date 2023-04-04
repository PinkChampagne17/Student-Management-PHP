<?php
    // 创建连接
    //输入你自己的的数据库连接:"连接地址"，“登入账号”，“登入密码”，“使用数据库”,端口
    $conn = new mysqli("", "", "", "", );

    $conn->set_charset("utf8");
    
    // 检测连接
    if ($conn->connect_error) {
        die("数据库连接失败: " . $conn->connect_error);
    }
?>
