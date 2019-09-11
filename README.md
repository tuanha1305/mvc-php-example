# PHP Manager Book MVC
## 1. Clone repo github
## 2. Create database
Go mysql
```
mysql -u root -p
```
Create database
```
CREATE DATABASE cloudcomputing_db;
```
Create user cloudcomputing password cloudcomputing_demo
```
CREATE USER 'cloudcomputing'@'localhost' IDENTIFIED BY 'cloudcomputing_demo';
GRANT ALL PRIVILEGES ON cloudcomputing_db. * TO 'cloudcomputing'@'localhost';
FLUSH PRIVILEGES;
```
Create table books
```
CREATE TABLE `books` (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,`title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,`author` varchar(50) COLLATE utf8_unicode_ci NOT NULL,`description` varchar(255) COLLATE utf8_unicode_ci NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
```


