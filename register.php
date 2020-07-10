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
    </style>
</head>
<body>
    <div class="container">
        <h1>注册</h1>
        <form action="" method="POST">
          <div class="form-group">
            <label>用户名：</label>
            <input class="form-control" name="uname">
          </div>
          <div class="form-group">
            <label>密码：</label>
            <input type="password" class="form-control" name="pwd">
          </div>
          <div class="form-group">
            <label>确认密码：</label>
            <input type="password" class="form-control" name="cpwd">
          </div>
          <button type="submit" class="btn btn-primary">注册</button>
        </form>
      </div>
</body>
</html>

<?php
  require './untils/functions.php';

  if (empty($_POST)) {
    return;
  }

  if ($_POST['uname'] == '' || $_POST['pwd'] == '' || $_POST['cpwd'] == '') {
    alert('请填完所有项');
    return;
  }

  if ($_POST['pwd'] != $_POST['cpwd']) {
    alert('密码不一致');
    return;
  }

  require './untils/connect_db.php';

  $uname = $_POST['uname'];
  $pwd = $_POST['pwd'];

  $sql = "INSERT INTO user (uname, pwd) VALUES ('$uname', '$pwd')";
  
  if ($conn->query($sql) === TRUE) {
      alert('注册成功');
      href('./login.php');
  }
  else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
 
  $conn->close();
?>