<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>学生管理系统</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <span class="navbar-brand">
                <?php
                    require './untils/connect_db.php';

                    $sql = "select uname from user where id={$_COOKIE['id']}";
                    $result = $conn->query($sql);
                        
                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo $row['uname'];
                    }

                    $conn->close();
                ?>
            </span>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="./home.php">学生列表</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="./user.php">个人中心</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./actions/logout.php">注销</a>
                    </li>
                </ul>
            </div>
        </nav>

        <br>

        <form action="./actions/change_username.php" method="POST">
            <h4>修改用户名</h4>
            <div class="form-group">
                <label>新用户名：</label>
                <input class="form-control" name="uname">
            </div>
            <button type="submit" class="btn btn-primary">修改</button>
        </form>

        <br>
        <br>

        <form action="./actions/change_pwd.php" method="POST">
            <h4>修改新密码</h4>
            <div class="form-group">
                <label>原密码：</label>
                <input type="password" class="form-control" name="pwd">
            </div>
            <div class="form-group">
                <label>新密码：</label>
                <input type="password" class="form-control" name="npwd">
            </div>
            <div class="form-group">
                <label>确认密码：</label>
                <input type="password" class="form-control" name="cnpwd">
            </div>
            <button type="submit" class="btn btn-primary">修改</button>
        </form>

      </div>
</body>
</html>
