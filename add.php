<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title>添加成员国-联合国亚洲分部管理系统</title>
    <style>
        body {
            background-image: url(./img/flag.png) ;
        }
        .container {
            background-color: white;
            padding-top: 20px;
            padding-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center">联合国亚洲分部管理系统</h1>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href="./home.php">成员国列表</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="./add.php">添加成员国</a>
            </li>
        </ul>
        <br>
        <div class="container" style="width: 500px;">
            <form action="" method="POST">
              <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">国名</span>
                  </div>
                  <input name="name" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
      
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">首都</span>
                  </div>
                  <input name="capital" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">是否为常任理事国</label>
                  </div>
                  <select class="custom-select" name="is">
                    <option value="1" selected>是</option>
                    <option value="0">否</option>
                  </select>
                </div>
      
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">加入时间</span>
                  </div>
                  <input name="join_time" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
  
                <button type="submit" class="btn btn-success btn-lg btn-block">添加</button>
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

  $sql = "INSERT INTO country (name, capital, is_security_council, join_time) VALUES ('{$_POST['name']}', '{$_POST['capital']}', {$_POST['is']} , '{$_POST['join_time']}')";

  if ($conn->query($sql) === TRUE) {
      alert('添加成功');
      href('../home.php');
  }
  else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
?>