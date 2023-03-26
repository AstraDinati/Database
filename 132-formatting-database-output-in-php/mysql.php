<meta charset="utf-8">
<?php
	$host = 'localhost'; 
	$user = 'root';      
	$pass = '';          
	$name = 'mydb1';      
	
	$link = mysqli_connect($host, $user, $pass, $name);
    mysqli_query($link, "SET NAMES 'utf-8'");

    $query = "SELECT * FROM users";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

    $result = '';

	    //1
	// foreach ($data as $elem) {
    //     $result .= '<div>';

    //     $result .= '<h2>' . $elem['name'] . '</h2>';
    //     $result .= '<p>';
    //     $result .= $elem['age'] . 'years, ' . '<b>' . $elem['salary'] . '</b>';
    //     $result .= '</p>';
    //     $result .= '</div>';
    // }
    // echo $result;

        //2
    // $result .= '<table>';
    // $result .= '<tr>';
    // $result .= '<th> id </th>';
    // $result .= '<th> name </th>';
    // $result .= '<th> age </th>';
    // $result .= '<th> salary </th>';
    // $result .= '</tr>';

    // foreach($data as $elem){

    //     $result .= '<tr>';
    //     $result .= '<td>' . $elem['id'] . '</td>';
    //     $result .= '<td>' . $elem['name'] . '</td>';
    //     $result .= '<td>' . $elem['age'] . '</td>';
    //     $result .= '<td>' . $elem['salary'] . '</td>';
    //     $result .= '</tr>';
    // }
    // echo $result;

        //3
    $result .= '<ul>';
    foreach($data as $elem){
        $result .= '<li>' . $elem['name'] . '</li>';
    }
    $result .= '</ul>';
    echo $result;
    
    // echo '<pre>';
    // print_r($data); 
    // echo '</pre>';  