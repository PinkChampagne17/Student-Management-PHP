# PHP学生管理系统
一个使用PHP实现，功能简单的学生管理系统，刚好够应付课堂作业用。

GitHub仓库：https://github.com/PinkChampagne17/Student-Management-PHP

背景图片来源：https://www.pixiv.net/artworks/59440693

## 项目截图预览
![](https://img2020.cnblogs.com/blog/1981089/202008/1981089-20200820173617003-221244557.png)
![](https://img2020.cnblogs.com/blog/1981089/202008/1981089-20200820173703084-201000813.png)
![](./screenshot/个人中心.png)
![](./screenshot/修改用户名.png)
![](./screenshot/登录.png)
![](./screenshot/注册.png)

## 实现功能
- 登录
- 注册
- 修改用户名
- 修改密码
- 使用cookie保持登录状态
- 对学生的增删查改

## 技术栈
- PHP
- Bootstrap v4
- MariaDB（与MySQL兼容）

## 测试环境
- WampServer Version 3.2.0 64bit
- PHP 5.6.40 for CLI (Command-Line Interface)
- MariaDB 10.4.10

## 数据库创建语句
```SQL
create database student_management;
use student_management;

CREATE TABLE user (
   id int auto_increment primary key,
   uname varchar(20) not null,
   pwd varchar(20) not null
)default charset=utf8;

create table student (
    id int primary key auto_increment,
    sid int not null,
    name varchar(15) not null,
    age int not null,
    sex enum('男', '女', '其他') not null,
    uid int not null,
    FOREIGN KEY(uid) REFERENCES user(id)
)default charset=utf8;
```