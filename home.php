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
                <a class="nav-link" href="#">添加成员国</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">修改密码</a>
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
            <tr>
                <td>中国</td>
                <td>北京</td>
                <td>是</td>
                <td>114514</td>
                <td>
                    <button type="button" class="btn btn-info">编辑</button>
                    <button type="button" class="btn btn-danger">删除</button>
                </td>
            </tr>
            <tr>
                <td>美国</td>
                <td>华盛顿</td>
                <td>是</td>
                <td>114515</td>
                <td>
                    <button type="button" class="btn btn-info">编辑</button>
                    <button type="button" class="btn btn-danger">删除</button>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>