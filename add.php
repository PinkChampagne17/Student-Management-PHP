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
        }
        div {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>添加学生</h1>
        <form action="" method="POST">
          <div class="form-group">
            <label>学号：</label>
            <input class="form-control" name="sid">
          </div>
          <div class="form-group">
            <label>姓名：</label>
            <input class="form-control" name="name">
          </div>
          <div class="form-group">
            <label>年龄：</label>
            <input type="number" class="form-control" name="age">
          </div>
          <div class="form-group">
            <label>性别：</label>
            <br>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="sex" value="男" checked>
              <label class="form-check-label" >男</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="sex" value="女">
              <label class="form-check-label">女</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="sex" value="其他">
              <label class="form-check-label">其他</label>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">添加</button>
        </form>
      </div>
</body>
</html>
<?php
    if (empty($_POST)) {
      return;
    }

    $sid = $_POST['sid'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $sex = $_POST['sex'];

    require './until.php';
    
    if ($sid == '' || $name == '' || $age == '') {
      alert('请写填完所有项');
      return;
    }

    require './connect_db.php';

    $uid = $_COOKIE['id'];

    $sql = "INSERT INTO student (sid, name, age, sex, uid) VALUES ($sid, '$name', $age, '$sex', $uid)";
  
    if ($conn->query($sql) === TRUE) {
        alert('添加成功');
        href('./home.php');
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
   
    $conn->close();
  
?>  