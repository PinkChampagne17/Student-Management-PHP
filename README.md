# PHP 学生管理系统


一个使用 PHP 实现，功能简单的学生管理系统，刚好够应付课堂作业用。

背景图片来源：https://www.pixiv.net/artworks/59440693

## 项目截图预览

![](./screenshot/主页.png)
![](./screenshot/列表.png)
![](./screenshot/个人中心.png)
![](./screenshot/修改用户名.png)
![](./screenshot/登录.png)
![](./screenshot/注册.png)

## 实现功能

- 登录
- 注册
- 修改用户名
- 修改密码
- 使用 cookie 保持登录状态
- 对学生的增删查改
- 对班级的增删查改
- 对成绩的增删查改

## 技术栈

- PHP
- Bootstrap v4
- MariaDB（与 MySQL 兼容）

## 测试环境

- WampServer Version 3.2.0 64bit
- PHP 5.6.40 for CLI (Command-Line Interface)
- MariaDB 10.4.10

## 数据库创建语句

```SQL
create database student_management;
use student_management;

CREATE TABLE `classinfo` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `sid` int(20) NOT NULL,
  `name` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `sc` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `Class` varchar(40) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `uid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

CREATE TABLE `scoreinfo` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `sid` int(20) NOT NULL,
  `name` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `sub` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT '',
  `score` int(20) DEFAULT NULL,
  `uid` int(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

CREATE TABLE `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sid` int(11) NOT NULL,
  `name` varchar(15) NOT NULL,
  `age` int(11) NOT NULL,
  `sex` enum('男','女','其他') NOT NULL,
  `uid` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
CREATE TABLE `user` (
   id int auto_increment primary key,
   uname varchar(20) not null,
   pwd varchar(20) not null
)default charset=utf8;

```

## 可以改善的地方

- SQL 语句的生成是通过简单粗暴地拼接字符串完成的，最开始是为了方便应付作业的人能够快速上手并完成。正确的做法是对 SQL 语句进行预处理，否则会导致 SQL 注入攻击。

## 米米个人留言板

米米连接数据表以及数据库代码方式有浓重的个人风格哦，这不关米米事啦。
反正米米也不改(
下一站：中山竞马场
米米，出发咯
