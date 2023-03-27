<meta charset="utf-8">
<?php
	$host = 'localhost'; 
	$user = 'root';      
	$pass = '';          
	$name = 'mydb1';      
	
	$link = mysqli_connect($host, $user, $pass, $name);
    mysqli_query($link, "SET NAMES 'utf-8'");


$id = $_GET['id'];
$name = $_POST['name'];
$age = $_POST['age'];
$salary = $_POST['salary'];

$query = "UPDATE users SET
		name='$name', age='$age', salary='$salary'
	WHERE id=$id";

mysqli_query($link, $query) or 
die(mysqli_error($link)); 

echo 'Юзер успешно изменен!';