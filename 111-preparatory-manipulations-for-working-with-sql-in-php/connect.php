<?php
	$host = 'localhost'; // имя хоста
	$user = 'root';      // имя пользователя
	$pass = '';          // пароль
	$name = 'mydb';      // имя базы данных
	
	$link = mysqli_connect($host, $user, $pass, $name);

    $query = 'SELECT * FROM users';
    $result = mysqli_query($link, $query) or die(mysqli_error($link));

    echo '<pre>';
    print_r($result);
    echo '</pre>';
?>