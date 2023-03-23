<meta charset="utf-8">
<?php
	$host = 'localhost'; // имя хоста
	$user = 'root';      // имя пользователя
	$pass = '';          // пароль
	$name = 'mydb';      // имя базы данных
	
	$link = mysqli_connect($host, $user, $pass, $name);
    mysqli_query($link, "SET NAMES 'utf-8'");

    // $query = 'SELECT * FROM users WHERE id = 3'; // 1
    // $query = 'SELECT * FROM users WHERE salary = 900'; //2
    // $query = 'SELECT * FROM users WHERE age = 23'; //3
    // $query = 'SELECT * FROM users WHERE salary > 400'; //4
    // $query = 'SELECT * FROM users WHERE salary >= 500'; //5
    // $query = 'SELECT * FROM users WHERE salary <> 500'; //6
    // $query = 'SELECT * FROM users WHERE salary <= 500'; //7
    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
    
 	echo '<pre>';
    print_r($data); 
    echo '</pre>';   