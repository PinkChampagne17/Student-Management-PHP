create database student_management;
use student_management;

CREATE TABLE user (
   id int auto_increment primary key,
   uname varchar(20) not null,
   pwd varchar(20) not null
);

create table student (
    id int primary key auto_increment,
    sid int not null,
    name varchar(15) not null,
    age int not null,
    sex enum('男', '女', '其他') not null,
    uid int not null,
    FOREIGN KEY(uid) REFERENCES user(id)
)