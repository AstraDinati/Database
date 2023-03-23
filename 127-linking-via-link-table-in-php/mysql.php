<meta charset="utf-8">
<?php
	$host = 'localhost'; 
	$user = 'root';      
	$pass = '';          
	$name = 'mydb';      
	
	$link = mysqli_connect($host, $user, $pass, $name);
    mysqli_query($link, "SET NAMES 'utf-8'");

    $query = 'SELECT
	Products.name as product_name, Categories.name as category_name
FROM
	Products
LEFT JOIN Products_Categories ON Products_Categories.product_id=Products.id
LEFT JOIN Categories ON Products_Categories.category_id=Categories.id';

    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
    
    $res = [];
	foreach ($data as $elem) {
		$res[$elem['product_name']][] = $elem['category_name'];
	}

    echo '<ul>';
    foreach($res as $key => $elems){
        $length = count($elems);
        echo '<li>' . $key .': ';
            for($i=0;$i<$length;++$i){
        echo $elems[$i];
        if(isset($elems[$i+1])){
            echo ', ';
        }
        }
        echo '</li>';
    }
    echo '</ul>';

 	// echo '<pre>';
    // print_r($res); 
    // echo '</pre>';   