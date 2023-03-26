<meta charset="utf-8">
<?php
	$host = 'localhost'; 
	$user = 'root';      
	$pass = '';          
	$name = 'mydb1';      
	
	$link = mysqli_connect($host, $user, $pass, $name);
    mysqli_query($link, "SET NAMES 'utf-8'");

    if(isset($_GET['del'])){
        $id = $_GET['del'];
        $query = "DELETE FROM users WHERE id=$id";
        mysqli_query($link, $query) or die(mysqli_error($link));
    }

    $query = "SELECT * FROM users";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
    ?>

    <table>
    <tr>
    <th> id </th>
    <th> name </th>
    <th> age </th>
    <th> salary </th>
    <th> Delete </th>
    </tr>

    <?php foreach($data as $elem){ ?>

        <tr>
        <td><?= $elem['id'] ?></td>
        <td><?= $elem['name'] ?></td>
        <td><?= $elem['age'] ?></td>
        <td><?= $elem['salary'] ?></td>
        <td><a href="?del=<?= $elem['id'] ?>">delete <?= $elem['name'] ?></a></td>
        </tr>
    <?php } ?>
    </table>