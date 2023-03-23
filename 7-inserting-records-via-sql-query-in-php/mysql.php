<meta charset="utf-8">
<?php
	$host = 'localhost'; // имя хоста
	$user = 'root';      // имя пользователя
	$pass = '';          // пароль
	$name = 'mydb';      // имя базы данных
	
	$link = mysqli_connect($host, $user, $pass, $name);
    mysqli_query($link, "SET NAMES 'utf-8'");

    $query = "INSERT INTO users(name, age, salary) VALUES ('user7', 26, 300)"; 

    // $result = mysqli_query($link, $query) or die(mysqli_error($link));
    // for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
    
 	// echo '<pre>';
    // print_r($data); 
    // echo '</pre>';   