<meta charset="utf-8">
<?php
	$host = 'localhost'; // имя хоста
	$user = 'root';      // имя пользователя
	$pass = '';          // пароль
	$name = 'mydb';      // имя базы данных
	
	$link = mysqli_connect($host, $user, $pass, $name);
    mysqli_query($link, "SET NAMES 'utf-8'");

    // $query = "SELECT * FROM users ORDER BY salary"; //1
    // $query = "SELECT * FROM users ORDER BY salary DESC"; //2
    // $query = "SELECT * FROM users ORDER BY name"; //3
    // $query = "SELECT * FROM users ORDER BY age"; //4
    $query = "SELECT * FROM users ORDER BY name, salary"; //5
    
    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
    
 	echo '<pre>';
    print_r($data); 
    echo '</pre>';   