<?php

    require './connect_db.php';

    $id = $_COOKIE['id'];

    $sql = "SELECT uname FROM user where id=$id";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $uname = $row['uname'];
    }
    else {
        echo "获取用户名失败";
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
            padding: 20px;
            background: url(./img/bg.jpg) repeat center top;
        }
        div {
            margin-bottom: 20px;
        }
        .container {
            background-color: white;
            border-radius: 10px;
            padding: 20px;
        }
    </style>
</head>
<body>
    
    <div class="container table-responsive text-center shadow-lg">
        <div class="float-left">
            <span> <?php echo $uname ?> </span>
            <a href="./user.php" class="text-right">个人中心</a>
            <a href="./logout.php" class="text-right">注销</a>
        </div>

        <h1>学生列表</h1>
        
        <form action="" method="POST" class="float-left" style="margin-bottom: 10px;">
            <input class="form-control" style="display: inline-block; width: auto;" name="search">
            <input type="submit" value="搜索">
        </form>

        <table class="table table-hover" border="1">
            <thead class="thead-dark">
                <tr>
                    <th>学号</th>
                    <th>姓名</th>
                    <th>年龄</th>
                    <th>性别</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>

                <?php

                    $sql = "SELECT id, sid, name, age, sex FROM student where uid=$id";
                    
                    if (isset($_POST['search'])) {
                        $s = $_POST['search'];
                        $sql = "$sql and (sid='$s' or name like '%$s%' or age='$s' or sex='$s')";
                    }

                    $result = $conn->query($sql);
                     
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {

                            $id = $row['id'];
                            $sid = $row['sid'];
                            $name = $row['name'];
                            $age = $row['age'];
                            $sex = $row['sex'];

                            echo "
                                <tr>
                                    <td>$sid</td>
                                    <td>$name</td>
                                    <td>$age</td>
                                    <td>$sex</td>
                                    <td>
                                        <button
                                            type=\"button\"
                                            class=\"btn btn-primary\"
                                            onclick=\"location.href='./edit.php?id=$id&sid=$sid&name=$name&age=$age&sex=$sex'\"
                                            >
                                            编辑
                                        </button>
                                        <button
                                            type=\"button\"
                                            class=\"btn btn-danger\"
                                            onclick=\"location.href='./delete.php?id=$id'\"
                                            >
                                            删除
                                        </button>
                                    </td>
                                </tr>
                            ";
                        }
                    }
                    else {
                        echo "<tr><td colspan='5'>目前还没有添加学生</td></tr>";
                    }

                    $conn->close();

                ?>

            </tbody>
        </table>
        <button
            type="button"
            class="btn btn-success"
            onclick="location.href='./add.php'"
            >
            添加新学生
        </button>
    </div>
</body>
</html>