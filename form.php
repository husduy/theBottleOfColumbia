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
	<title>Подать заявку</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
	<style type="text/css">
		body {
			font-family: Montserrat, Arial;
			overflow-x: hidden;
			background-color: #FBFEF9;
		}
		.header {
			background-image: url(img/pokr.jpg);
			height: 512px;
			background-size: cover;
			font-size: 20px
		}
		.title {
			height: 539px;
			font-family: Poppins, Arial;
			color:#FBFEF9;
			text-transform: uppercase;
			font-weight: bold;
		}
		.title h1 {
			margin: 0;
		}
		.light {
			background-color: #D6F9D3;
		}
		.btn-light {
			background-color: #e9ecef;
			border: none;
		}
		.dark {
			background-color: #FCE38B;
		}
		.btn-dark {
			background-color: #e9ecef;
			border: none;
		}
		.footer {
			margin-top: 80px;
			height: 80px;
			background-color: #232323;
			color: #FBFEF9;
		}
		.footer .col-6, .footer .col-5 {
			margin-top: 30px;
		}
	</style>
</head>
<body>
	<div class="header">
		<div class="container-fluid d-flex flex-row-reverse">
			<nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
			    <div class="container-fluid">
				    	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				      		<span class="navbar-toggler-icon"></span>
				    	</button>
			    	<div class="collapse navbar-collapse ml-5" id="navbarNav">
				      	<ul class="navbar-nav">
					        <li class="nav-item">
					          	<a class="nav-link" href="index.php">Главная</a>
					        </li>
					        <li class="nav-item">
					          	<a class="nav-link active" aria-current="page" href="form.php">Подать заявку</a>
					        </li>
					        <li class="nav-item">
					          	<a class="nav-link" href="#">Топ месяца</a>
					        </li>
					        <li class="nav-item">
					          	<a class="nav-link" href="#" tabindex="-1" aria-disabled="true">О проекте</a>
					        </li>
				        </ul>
			    	</div>
			  	</div>
			</nav>
		</div>

		<div class="title d-flex justify-content-center">
			<h1 class="align-self-center">проект: бутылка коламбии</h1>
		</div>
	</div>


	<div class="container mt-5 light p-5" id="dost">
		<h1>Подать заявку для достопримичательности</h1>
		<h3 class="mb-5">Подав заявку вы можете (крч микро описание) </h3>
		<form action="thanksDost.php" method="post" enctype="multipart/form-data">
			<div class="mb-3">
				<label for="exampleFormControlTextarea1" class="form-label">Название места</label>
				<input class="form-control" type="text" aria-label="default input example" name="name">
			</div>
			<div class="mb-3">
			  	<label for="exampleFormControlTextarea1" class="form-label">Описание места</label>
			  	<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="decription"></textarea>
			</div>
			<div class="mb-3">
			    <label for="formFile" class="form-label">Выберите фото места</label>
			    <input class="form-control" type="file" id="formFile" name="picture">
			</div>
			<button name="sendDost" type="submit" class="btn btn-light">Подать заявку</button>
		</form>
	</div>

	<div class="container mt-5 dark p-5" id="jab">
		<h1>Подать заявку на жалобу</h1>
		<h3 class="mb-5">Подав заявку вы можете (крч микро описание) </h3>
		<form action="thanksJab.php" method="post" enctype="multipart/form-data">
			<div class="mb-3">
				<label for="exampleFormControlTextarea1" class="form-label">Название места</label>
				<input class="form-control" type="text" aria-label="default input example"name="nameJab">
			</div>
			<div class="mb-3">
			  	<label for="exampleFormControlTextarea1" class="form-label">Описание места</label>
			  	<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="decriptionJab"></textarea>
			</div>
			<div class="mb-3">
			    <label for="formFile" class="form-label">Выберите фото места</label>
			    <input class="form-control" type="file" id="formFile" name="pictureJab">
			</div>
			<button type="submit" class="btn btn-light" name="sendJab">Подать заявку</button>
		</form>
	</div>

	<div class="footer">
		<div class="row">
			<div class="col-6 d-flex justify-content-center">
				<p>Сайт был разработан командой "Бутылка Коламбии"</p>
			</div>
			<div class="col-5 d-flex justify-content-center">
				<p>2021</p>
			</div>
		</div>
	</div>




	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>