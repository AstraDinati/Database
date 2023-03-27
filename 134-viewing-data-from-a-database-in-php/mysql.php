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
        $query = "SELECT * FROM users WHERE id=$id";
        $result = mysqli_query($link, $query) or die(mysqli_error($link));
    }
    $user = mysqli_fetch_assoc($result); ?>
    
    <form method="GET">
        <input name="id">
        <input type="submit" value="показать юзера">
    </form>

    <!-- <div> //cw
        <h1><?= $user['name'] ?></h1>
        <p>
            age: <span class="age"><?= $user['age'] ?></span>,
            salary: <span class="salary"><?= $user['salary'] ?></span>
        </p>
    </div> -->

    <!-- <div>  //hw1
	<p>
		имя: <span class="name"><?= $user['name'] ?></span>
	</p>
	<p>
		возраст: <span class="age"><?= $user['age'] ?></span>,
		зарплата: <span class="salary">
        <?= $user['salary'] ?>$</span>, 
	</p>
    </div> -->

    