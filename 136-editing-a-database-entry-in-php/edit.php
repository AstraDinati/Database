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
    } ?>

    <h2>Выберите юзера, данные которого хотите изменить:</h2>

    <?php
    $query = 'SELECT * FROM users';
    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row); 
    
    echo '<ul>';
    foreach($data as $elem){ ?>
    <li><?= $elem['name'] ?><a href="?id=<?= $elem['id'] ?>"> edit</a></li>
    <?php } ?>
    </ul>

<form method="GET">
    Или введите id: <input name="id" value="<?php if(isset($_GET['id'])) echo $_GET['id'] ?>">
    <input type="submit" value="Показать юзера">
</form>

<h3>Изменение данных юзера: </h3>

<form  method="POST">
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

<?php 
if(isset($_POST['name']) AND isset($_POST['age']) AND isset($_POST['salary'])){
$name = $_POST['name'];
$age = $_POST['age'];
$salary = $_POST['salary'];

$query = "UPDATE users SET
		name='$name', age='$age', salary='$salary'
	WHERE id=$id";

mysqli_query($link, $query) or 
die(mysqli_error($link)); 

echo 'Юзер успешно изменен!';
}
?>