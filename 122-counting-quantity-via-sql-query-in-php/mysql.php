<meta charset="utf-8">
<?php
	$host = 'localhost'; // имя хоста
	$user = 'root';      // имя пользователя
	$pass = '';          // пароль
	$name = 'mydb';      // имя базы данных
	
	$link = mysqli_connect($host, $user, $pass, $name);
    mysqli_query($link, "SET NAMES 'utf-8'");

    // $query = 'SELECT COUNT(*) as count FROM users WHERE salary = 500'; //1
    $query = 'SELECT COUNT(*) as count FROM users WHERE salary = 500 OR age = 23'; //2

    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    $data = mysqli_fetch_assoc($result);
    
 	echo '<pre>';
    print_r($data); 
    echo '</pre>';   