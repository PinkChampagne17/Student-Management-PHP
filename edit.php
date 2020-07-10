<?php
  if (count($_GET) > 0) {
    $id = $_GET['id'];
    $sid = $_GET['sid'];
    $name = $_GET['name'];
    $age = $_GET['age'];
    $sex = $_GET['sex'];
  }
?>
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
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="./home.php">学生列表</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./user.php">个人中心</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./actions/logout.php">注销</a>
                </li>
            </ul>
        </div>
      </nav>
      <h1>修改信息</h1>
      <form action="" method="POST">
        <input style="display: none;" name="id" value="<?php echo $id ?>">

        <div class="form-group">
          <label>学号：</label>
          <input class="form-control" name="sid" type="number" value="<?php echo $sid ?>">
        </div>

        <div class="form-group">
          <label>姓名：</label>
          <input class="form-control" name="name" value="<?php echo $name ?>">
        </div>

        <div class="form-group">
          <label>年龄：</label>
          <input type="number" class="form-control" name="age" value="<?php echo $age ?>">
        </div>

        <div class="form-group">
          <label>性别：</label>
          <br>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="sex" value="男" <?php if ($sex == '男') echo "checked" ?>>
            <label class="form-check-label">男</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="sex" value="女" <?php if ($sex == '女') echo "checked" ?>>
            <label class="form-check-label">女</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="sex" value="其他" <?php if ($sex == '其他') echo "checked" ?>>
            <label class="form-check-label">其他</label>
          </div>
        </div>

        <button type="submit" class="btn btn-primary">修改</button>
      </form>
    </div>
</body>
</html>
<?php
    if (count($_POST) == 0) {
      return;
    }  

    require './untils/connect_db.php';

    $id = $_POST['id'];
    $sid = $_POST['sid'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $sex = $_POST['sex'];
  
    $conn->query("update student set sid=$sid, name='$name', age=$age, sex='$sex' where id=$id");
    $conn->close();

    require './untils/functions.php';
    
    alert('修改成功');
    href('./home.php');
?>