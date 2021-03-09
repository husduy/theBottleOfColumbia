<?php

$database = 'hackathon';
$user = 'root';
$password = 'root';
$host = 'localhost';

$mysqli = new mysqli($host, $user, $password, $database);

$link = mysqli_connect($host, $user, $password, $database);

if ($link == false){
	print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Спасибо</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
</head>
<body>
 <h1 class="text-center">Благодарим за заявку</h1>
 <?php 
    if (isset($_POST['sendJab'])) {
    	$path = 'img/';
        $queryJab = "INSERT INTO jab (name, decription, img) VALUES ('". $_POST['nameJab'] ."', '". $_POST['decriptionJab'] ."', 
        '". $path . $_FILES['pictureJab']['name'] ."')";
        $resJab = mysqli_query($link, $queryJab);

    	$uploaddir = 'img/';
		$uploadfile = $uploaddir . basename($_FILES['pictureJab']['name']);
    	if (move_uploaded_file($_FILES['pictureJab']['tmp_name'], $uploadfile)) {
		    echo "Ваша заявка успешно подана\n";
		} else {
		    echo "Что-то пошло не так\n";
		}
    }
 ?>

 <a href="form.php#jab"><p class="text-center" style="margin-top: 150px;">Вернуться обратно</p></a>
</body>
</html>