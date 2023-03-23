<meta charset="utf-8">
<?php
	$host = 'localhost'; // имя хоста
	$user = 'root';      // имя пользователя
	$pass = '';          // пароль
	$name = 'mydb';      // имя базы данных
	
	$link = mysqli_connect($host, $user, $pass, $name);
    mysqli_query($link, "SET NAMES 'utf-8'");

    // $query = "DELETE FROM users WHERE id = 7"; // 1 (нет такого юзера)
    // $query = "DELETE FROM users WHERE age = 23"; // 2
    $query = "DELETE FROM users"; // 3

    $result = mysqli_query($link, $query) or die(mysqli_error($link));
