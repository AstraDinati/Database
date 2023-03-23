<meta charset="utf-8">
<?php
	$host = 'localhost'; // имя хоста
	$user = 'root';      // имя пользователя
	$pass = '';          // пароль
	$name = 'mydb';      // имя базы данных
	
	$link = mysqli_connect($host, $user, $pass, $name);
    mysqli_query($link, "SET NAMES 'utf-8'");

    
    // $query = "SELECT * FROM users LIMIT 4"; //1
    // $query = "SELECT * FROM users LIMIT 1,3"; //2
    // $query = "SELECT * FROM users ORDER BY salary LIMIT 3"; //3
    $query = "SELECT * FROM users ORDER BY salary DESC LIMIT 3";

    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
    
 	echo '<pre>';
    print_r($data); 
    echo '</pre>';   