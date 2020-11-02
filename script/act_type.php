<?php
include ('connect.php');
/*$sq="CREATE TABLE act_type (actid INT AUTO_INCREMENT PRIMARY KEY, act_name VARCHAR(20))"; 
// Execute query
if (mysql_query($sq,$con)) {
  echo "Table Account type created successfully";
} 
else {
  echo "Error creating table: " . mysql_error($con);
}
*/

/*$sq="CREATE TABLE user
     (user_id INT PRIMARY KEY AUTO_INCREMENT,
     fname varchar(50),
     lname varchar(50),
     email varchar(50),
     address varchar(70),
     act_type varchar(30),
     gender varchar(10),
     marital_status varchar(15),
     username varchar(20),
     password varchar(20),
     re_password varchar(20),
     dob date)";
// Execute query
if (mysql_query($sq,$con)) {
  echo "Table User created successfully";
} 
else {
  echo "Error creating table: " . mysql_error($con);
}*/


$sq="CREATE TABLE login (login_id INT PRIMARY KEY AUTO_INCREMENT, act_type varchar(30), username varchar(20), password varchar(20), flag INT(11))";
// Execute query
if (mysql_query($sq,$con)) {
  echo "Table Login created successfully";
} 
else {
  echo "Error creating table: " . mysql_error($con);
}
/*
OLIZs-MBP:~ OLIZ$ /Applications/MAMP/library/bin/mysql --host=localhost -uroot -proot
Welcome to the MySQL monitor.  Commands end with ; or \g.
Your MySQL connection id is 109
Server version: 5.5.38 Source distribution

Copyright (c) 2000, 2014, Oracle and/or its affiliates. All rights reserved.

Oracle is a registered trademark of Oracle Corporation and/or its
affiliates. Other names may be trademarks of their respective
owners.

Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

mysql> show databases;
+--------------------+
| Database           |
+--------------------+
| information_schema |
| hospital           |
| mysql              |
| performance_schema |
+--------------------+
4 rows in set (0.04 sec)

mysql> use hospital;
Reading table information for completion of table and column names
You can turn off this feature to get a quicker startup with -A

Database changed
mysql> -a
    -> ;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-a' at line 1
mysql> -A
    -> ;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-A' at line 1
mysql> show tables;
+--------------------+
| Tables_in_hospital |
+--------------------+
| act_type           |
| patients           |
| register           |
+--------------------+
3 rows in set (0.00 sec)

mysql> select * from act_type;
Empty set (0.00 sec)

mysql> desc act_type;
+----------+-------------+------+-----+---------+----------------+
| Field    | Type        | Null | Key | Default | Extra          |
+----------+-------------+------+-----+---------+----------------+
| actid    | int(11)     | NO   | PRI | NULL    | auto_increment |
| act_name | varchar(20) | YES  |     | NULL    |                |
+----------+-------------+------+-----+---------+----------------+
2 rows in set (0.02 sec)

mysql> insert into act_type (act_name) values(Doctor);
ERROR 1054 (42S22): Unknown column 'Doctor' in 'field list'
mysql> insert into act_type (act_name) values('Doctor');
Query OK, 1 row affected (0.11 sec)

mysql> insert into act_type (act_name) values('Nurse');
Query OK, 1 row affected (0.01 sec)

mysql> insert into act_type (act_name) values('Phamarcist');
Query OK, 1 row affected (0.01 sec)

mysql> insert into act_type (act_name) values('Laboratorist');
Query OK, 1 row affected (0.10 sec)

mysql> insert into act_type (act_name) values('Accountant');
Query OK, 1 row affected (0.02 sec)

mysql> insert into act_type (act_name) values('Health Officer');
Query OK, 1 row affected (0.08 sec)

mysql> select * from act_type;
+-------+----------------+
| actid | act_name       |
+-------+----------------+
|     1 | Doctor         |
|     2 | Nurse          |
|     3 | Phamarcist     |
|     4 | Laboratorist   |
|     5 | Accountant     |
|     6 | Health Officer |
+-------+----------------+
6 rows in set (0.00 sec)

mysql> show tables;
+--------------------+
| Tables_in_hospital |
+--------------------+
| act_type           |
| patients           |
| register           |
+--------------------+
3 rows in set (0.07 sec)

mysql> select * from register;
Empty set (0.00 sec)

mysql> desc register;
+------------------+--------------+------+-----+---------+-------+
| Field            | Type         | Null | Key | Default | Extra |
+------------------+--------------+------+-----+---------+-------+
| FirstName        | varchar(20)  | YES  |     | NULL    |       |
| LastName         | varchar(20)  | YES  |     | NULL    |       |
| Email            | varchar(50)  | YES  |     | NULL    |       |
| Address          | varchar(100) | YES  |     | NULL    |       |
| Account type     | varchar(20)  | YES  |     | NULL    |       |
| Gender           | varchar(10)  | YES  |     | NULL    |       |
| Marital Status   | varchar(20)  | YES  |     | NULL    |       |
| Username         | varchar(20)  | YES  |     | NULL    |       |
| Password         | varchar(20)  | YES  |     | NULL    |       |
| Confirm Password | varchar(20)  | YES  |     | NULL    |       |
| Date Of Birth    | int(11)      | YES  |     | NULL    |       |
+------------------+--------------+------+-----+---------+-------+
11 rows in set (0.12 sec)

mysql> drop table register;
Query OK, 0 rows affected (0.14 sec)

mysql> create table user
    -> (user_id INT PRIMARY KEY AUTO_INCREMENT,
    -> fname varchar(50),
    -> lname varchar(50),
    -> email varchar(50),
    -> address varchar(70),
    -> act_type varchar(30),
    -> gender varchar(10),
    -> marital_status varchar(15),
    -> username varchar(20),
    -> password varchar(20),
    -> re_password varchar(20),
    -> dob date);


mysql> desc user;
+----------------+-------------+------+-----+---------+----------------+
| Field          | Type        | Null | Key | Default | Extra          |
+----------------+-------------+------+-----+---------+----------------+
| user_id        | int(11)     | NO   | PRI | NULL    | auto_increment |
| fname          | varchar(50) | YES  |     | NULL    |                |
| lname          | varchar(50) | YES  |     | NULL    |                |
| email          | varchar(50) | YES  |     | NULL    |                |
| address        | varchar(70) | YES  |     | NULL    |                |
| act_type       | varchar(30) | YES  |     | NULL    |                |
| gender         | varchar(10) | YES  |     | NULL    |                |
| marital_status | varchar(15) | YES  |     | NULL    |                |
| username       | varchar(20) | YES  |     | NULL    |                |
| password       | varchar(20) | YES  |     | NULL    |                |
| re_password    | varchar(20) | YES  |     | NULL    |                |
| dob            | date        | YES  |     | NULL    |                |
+----------------+-------------+------+-----+---------+----------------+
12 rows in set (0.21 sec)

mysql> alter table user add column flag int;
Query OK, 0 rows affected (1.39 sec)
Records: 0  Duplicates: 0  Warnings: 0

mysql> desc user;
+----------------+-------------+------+-----+---------+----------------+
| Field          | Type        | Null | Key | Default | Extra          |
+----------------+-------------+------+-----+---------+----------------+
| user_id        | int(11)     | NO   | PRI | NULL    | auto_increment |
| fname          | varchar(50) | YES  |     | NULL    |                |
| lname          | varchar(50) | YES  |     | NULL    |                |
| email          | varchar(50) | YES  |     | NULL    |                |
| address        | varchar(70) | YES  |     | NULL    |                |
| act_type       | varchar(30) | YES  |     | NULL    |                |
| gender         | varchar(10) | YES  |     | NULL    |                |
| marital_status | varchar(15) | YES  |     | NULL    |                |
| username       | varchar(20) | YES  |     | NULL    |                |
| password       | varchar(20) | YES  |     | NULL    |                |
| re_password    | varchar(20) | YES  |     | NULL    |                |
| dob            | date        | YES  |     | NULL    |                |
| flag           | int(11)     | YES  |     | NULL    |                |
+----------------+-------------+------+-----+---------+----------------+


*/

?>