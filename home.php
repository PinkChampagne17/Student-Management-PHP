<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title>联合国亚洲分部管理系统</title>
    <style>
        body {
            background-image: url(./img/flag.png) ;
        }
        .container {
            background-color: white;
            padding-top: 20px;
            padding-bottom: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center">联合国亚洲分部管理系统</h1>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="#">成员国列表</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./add.php">添加成员国</a>
            </li>
        </ul>
        <table class="table table-striped text-center">
            <tr>
                <th>国名</th>
                <th>首都</th>
                <th>是否为常任理事国</th>
                <th>加入时间</th>
                <th>操作</th>
            </tr>
            <?php
                require './connect_mysql.php';

                $sql = "SELECT * FROM country";

                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        
                        $id = $row['id'];
                        $name = $row['name'];
                        $capital = $row['capital'];
                        $is = $row['is_security_council'];
                        $is_disp = $is == 1 ? '是' : '否';
                        $jt = $row['join_time'];        

                        echo "
                            <tr>
                                <td>$name</td>
                                <td>$capital</td>
                                <td>$is_disp</td>
                                <td>$jt</td>
                                <td>
                                    <button
                                        type=\"button\"
                                        class=\"btn btn-info\"
                                        onclick=\"location.href='./edit.php?id=$id&name=$name&captial=$capital&is=$is&join_time=$jt'\"
                                    >编辑</button>
                                    <button
                                        type=\"button\"
                                        class=\"btn btn-danger\"
                                        onclick=\"location.href='./delete.php?id=$id'\"
                                    >删除</button>
                                </td>
                            </tr>
                        ";
                    }
                }
                else {
                    echo "<tr><td colspan='5'>目前还没有成员国</td></tr>";
                }

                $conn->close();
            ?>
            
        </table>
    </div>
</body>
</html>