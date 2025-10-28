<?php
include 'koneksi.php';

$createUserTableQuery = 'CREATE TABLE user(id INT(11) AUTO_INCREMENT PRIMARY KEY, 
                        username VARCHAR(50), password VARCHAR(50));';
//mysqli_query($koneksi, $createUserTableQuery);

$insertDataUser = "INSERT INTO user(id, username, password) VALUES('1', 'admin', MD5('123'));";
mysqli_query($koneksi, $insertDataUser);
?>