<meta charset="utf-8">
<?php
	$host = 'localhost'; 
	$user = 'root';      
	$pass = '';          
	$name = 'mydb1';      
	
	$link = mysqli_connect($host, $user, $pass, $name);
    mysqli_query($link, "SET NAMES 'utf-8'");

    $query = 'SELECT
	Categories.name as Categories_name, 
    Subcategories.name as Subcategories_name, 
    Sub_subcategories.name as Sub_subcategories_name,
    Sub_sub_subcategories.name as Sub_sub_subcategories_name
FROM
    Categories
LEFT JOIN Categories as Subcategories ON Subcategories.id=Categories.id_subcategory
LEFT JOIN Categories as Sub_subcategories ON Sub_subcategories.id=Subcategories.id_subcategory
LEFT JOIN Categories as Sub_sub_subcategories ON Sub_sub_subcategories.id=Sub_subcategories.id_subcategory';

    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

    echo '<pre>';
    print_r($data); 
    echo '</pre>';   