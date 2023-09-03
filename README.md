# Webbshop


## MySQL Commands
The following are the MySQL commands which you can copy paste to create your own webbshop database. Inside of Managers/db_connection.php you will find the $db variable which
is the name of the database. It is important that the $db variable is the same as the name 
you will give to your database inside of "phpmyadmin" otherwise the script will fail to
create the connection.
```
CREATE TABLE users(ID int PRIMARY KEY AUTO_INCREMENT, email varchar(30), userName varchar(20), passw varchar(60));
CREATE TABLE products(ID int PRIMARY KEY AUTO_INCREMENT, fileImage varchar(70),name varchar(20), price int, info varchar(255), secondHand bit , stock int);
CREATE TABLE carts (cartID int PRIMARY KEY AUTO_INCREMENT,userID int);
CREATE TABLE cart_items (cartItemID int PRIMARY KEY AUTO_INCREMENT,cartID int,productID int,quantity int);
```
