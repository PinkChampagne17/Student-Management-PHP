create database un_management default charset=utf8;
use un_management;

create table admin
(
    id  varchar(15) not null primary key,
    pwd varchar(15) not null
);

create table country
(
    id int auto_increment primary key,
    name                varchar(15) not null,
    capital             varchar(15) not null,
    is_security_council tinyint(1)  not null,
    join_time           varchar(15) not null
);

insert admin (id, pwd) values ('admin', '123456');