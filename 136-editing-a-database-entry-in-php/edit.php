<meta charset="utf-8">
<?php
	$host = 'localhost'; 
	$user = 'root';      
	$pass = '';          
	$name = 'mydb1';      
	
	$link = mysqli_connect($host, $user, $pass, $name);
    mysqli_query($link, "SET NAMES 'utf-8'");

    if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM users 
		WHERE id=$id";

    $result = mysqli_query($link, $query) or 
    die(mysqli_error($link)); 
    
    $user = mysqli_fetch_assoc($result);
    }
?>

<form method="GET">
    Введите id: <input name="id" value="<?php if(isset($_GET['id'])) echo $_GET['id'] ?>">
    <input type="submit" value="Показать юзера">
</form>

<h3>Изменение данных юзера: </h3>

<form action="/136-editing-a-database-entry-in-php/save.php/?id=<?= $_GET['id'] 
	?>" method="POST">
	<p>Введите новое имя: <input name="name" 
		value="<?php if(isset($_GET['id'])) echo $user['name'] 
		?>"> </p>
	<p>Введите новый возраст: <input name="age" value="<?php if(isset($_GET['id'])) echo $user['age'] 
		?>"> </p>
	<p>Введите новую зарплату: <input name="salary" 
		value="<?php if(isset($_GET['id'])) echo $user['salary'] 
		?>"> </p>
	<input type="submit" value="Изменить">
</form>