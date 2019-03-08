SET NAMES UTF8;
DROP DATABASE IF EXISTS users;
CREATE DATABASE USERS CHARSET=UTF8;
USE users;
CREATE TABLE student (
    bid INT PRIMARY KEY AUTO_INCREMENT,
    sid VARCHAR(11),
    uname VARCHAR(16),
    sex VARCHAR(2),
    mail VARCHAR(32),
    age VARCHAR(16),
    phone VARCHAR(16),
    addr VARCHAR(64)
);
INSERT INTO student VALUES (
    null,
    '1605030109',
    '胡宇轩',
    'm',
    '1194162880@qq.com',
    '1998',
    '18845632045',
    '黑龙江省哈尔滨市'
)