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
                <a class="nav-link" href="#">成员国列表</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="#">添加成员国</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">修改密码</a>
            </li>
        </ul>
        <br>
        <div class="container" style="width: 500px;">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-default">国名</span>
                </div>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
              </div>
    
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-default">首都</span>
                </div>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
              </div>
              
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="inputGroupSelect01">是否为常任理事国</label>
                </div>
                <select class="custom-select">
                  <option value="1" selected>是</option>
                  <option value="2">否</option>
                </select>
              </div>
    
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-default">加入时间</span>
                </div>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
              </div>

              <button type="button" class="btn btn-success btn-lg btn-block">添加</button>
        </div>
    </div>
</body>
</html>