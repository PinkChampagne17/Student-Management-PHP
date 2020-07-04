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
      <h1>修改信息</h1>
      <form action="" method="POST">
        <input style="display: none;" name="id" value="<?php echo $id ?>">

        <div class="form-group">
          <label>学号：</label>
          <input class="form-control" name="sid" value="<?php echo $sid ?>">
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
            <label class="form-check-label" >男</label>
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

    require './connect_db.php';
    require './until.php';
  
    $id = $_POST['id'];
    $sid = $_POST['sid'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $sex = $_POST['sex'];
  
    $conn->query("update student set sid=$sid, name='$name', age=$age, sex='$sex' where id=$id");
    $conn->close();

    
    alert('修改成功');
    href('./home.php');
?>