<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title>登录-联合国亚洲分部管理系统</title>
    <style>
        body {
            background-image: url(./img/flag.png) ;
        }
        .container {
            margin-top: 5%;
            border-radius: 30px;
            background-color: white;
            padding: 150px;
        }
        .horizontal-center {
            margin: 0 auto;
        }
        .block {
            display: block;
        }
    </style>
</head>
<body>
    <div class="container">
        <div style="width: 500px; margin: 0 auto;">
            <img src="./img/logo.svg" width="300px" class="horizontal-center block">
            <br>
            <form action="" method="POST">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">账号</span>
                    </div>
                    <input name="id" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">密码</span>
                    </div>
                    <input name="pwd" type="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                <button type="submit" class="btn btn-success btn-lg btn-block">登录</button>
            </form>
        </div>
    </div>
</body>
</html>
<?php
    if (empty($_POST)) {
        return;
    }

    require './connect_mysql.php';

    $id = $_POST['id'];
    $pwd = $_POST['pwd'];

    $sql = "SELECT * FROM admin where id='$id' and pwd=$pwd";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        alert('登录成功');
        href('./home.php');
    }
    else {
        alert('用户不存在或密码错误');
    }

    $conn->close();
?>