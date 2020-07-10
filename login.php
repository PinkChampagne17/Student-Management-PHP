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
      <h1>登录</h1>

      <form action="" method="POST">
        <div class="form-group">
          <label>用户名：</label>
          <input class="form-control" name="uname">
        </div>
        <div class="form-group">
          <label>密码：</label>
          <input type="password" class="form-control" name="pwd">
        </div>
        <button type="submit" class="btn btn-primary">登录</button>
      </form>

    </div>
</body>
<?php
  require './untils/functions.php';

  if (empty($_POST)) {
    return;
  }

  if ($_POST['uname'] == '' || $_POST['pwd'] == '') {
    alert('请填完所有项');
    return;
  }

  require './untils/connect_db.php';

  $uname = $_POST['uname'];
  $pwd = $_POST['pwd'];

  $sql = "SELECT id FROM user where uname='$uname' and pwd=$pwd";
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      $id = $row['id'];

      setcookie("id", $id, time() + 86400);
      
      alert('登录成功');
      href('./home.php');
  }
  else {
      alert('用户不存在或密码错误');
  }

  $conn->close();
  
?>