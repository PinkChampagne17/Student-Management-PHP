<?php
  if (count($_GET) > 0) {
    $id = $_GET['id'];
    $sid = $_GET['sid'];
    $name = $_GET['name'];
    $sub = $_GET['sub'];
    $score = $_GET['score'];
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
                    <a class="nav-link" href="./classinfo.php">班级信息</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./scoreinfo.php">成绩信息</a>
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
          <label>科目：</label>
          <input class="form-control" name="sub" value="<?php echo $sub ?>">
        </div>

        <div class="form-group">
          <label>分数：</label>
          <br>
          <input class="form-control" name="score" value="<?php echo $score ?>">
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
    $sub = $_POST['sub'];
    $score = $_POST['score'];
  
    $conn->query("update sco set sid=$sid, name='$name', sub='$sub', score=$score where id=$id");
    $conn->close();

    require './untils/functions.php';
    
    alert('修改成功');
    href('./scoreinfo.php');
?>