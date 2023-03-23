<meta charset="utf-8">
<?php
	$host = 'localhost'; // имя хоста
	$user = 'root';      // имя пользователя
	$pass = '';          // пароль
	$name = 'mydb';      // имя базы данных
	
	$link = mysqli_connect($host, $user, $pass, $name);
    mysqli_query($link, "SET NAMES 'utf-8'");

    $query = 'SELECT * FROM users';
    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    
    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	// echo '<pre>';
    // print_r($data); // здесь будет массив с результатом
    // echo '</pre>';

    echo $data[0]['name'] . '<br>';
    echo $data[1]['name'] .' '. $data[1]['age'] . ' лет <br>';
    echo $data[2]['name'] .' '. $data[1]['age'] . ' лет, зарплата: ' . $data[1]['salary'] . '<br>';