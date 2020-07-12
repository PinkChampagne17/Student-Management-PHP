<?php
  if (!empty($_GET)) {
    $id = $_GET['id'];
    $name = $_GET['name'];
    $captial = $_GET['captial'];
    $is = $_GET['is'];
    $join_time = $_GET['join_time'];
  }

  require './connect_mysql.php';

  if (!empty($_POST)) {
    $sql = "update country set name='{$_POST['name']}', capital='{$_POST['capital']}', is_security_council={$_POST['is']}, join_time='{$_POST['join_time']}' where id = {$_POST['id']}";

    if ($conn->query($sql) === TRUE) {
        alert('修改成功');
        href('../home.php');
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }

  $conn->close();
?>
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
                <a class="nav-link" href="./add.php">添加成员国</a>
            </li>
        </ul>
        <br>
        <div class="container" style="width: 500px;">
            <form action="" method="POST">
              <input name="id" value="<?php echo $id ?>" style="display: none;">

              <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">国名</span>
                  </div>
                  <input name="name" value="<?php echo $name ?>" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
      
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">首都</span>
                  </div>
                  <input name="capital" value="<?php echo $captial ?>" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">是否为常任理事国</label>
                  </div>
                  <select class="custom-select" name="is">
                    <option value="1" <?php if ($is == 1) echo "selected" ?>>是</option>
                    <option value="0" <?php if ($is == 0) echo "selected" ?>>否</option>
                  </select>
                </div>
      
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">加入时间</span>
                  </div>
                  <input name="join_time" value="<?php echo $join_time ?>" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
  
                <button type="submit" class="btn btn-success btn-lg btn-block">修改</button>
            </form>
        </div>
    </div>
</body>
</html>