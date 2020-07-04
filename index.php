<?php
    require './until.php';

    if (isset($_COOKIE['id'])) {
        href('./home.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>学生管理系统</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <style>
        body {
            color: white;
            padding: 20px;
            background: url(./img/bg.gif) repeat center top;
        }
        div {
            margin-bottom: 20px;
        }
        .title {
            font-size:  60px;
            text-shadow: 2px 2px 3px #000000;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row align-items-start">
            <div class="col text-center title">学生管理系统</div>
        </div>
        <div class="row align-items-end">
            <button class="btn btn-primary col" onclick="location.href='./register.php'">注册</button>
        </div>
        <div class="row align-items-end">
            <button class="btn btn-success col" onclick="location.href='./login.php'">登录</button>
        </div>
    </div>
</body>
</html>