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


$sql = 'SELECT * FROM jab';
$result = mysqli_query($link, $sql);

?>


<!DOCTYPE html>
<html>
<head>
	<title>Бутылка Коламбии</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
	<style type="text/css">
		body {
			font-family: Montserrat, Arial;
			overflow-x: hidden;
			background-color: #1A181B;
		}
		.header {
			background-image: url(img/pokr.jpg);
			height: 512px;
			background-size: cover;
			font-size: 20px
		}
		.title {
			height: 360px;
			font-family: Poppins, Arial;
			color:#FBFEF9;
			text-transform: uppercase;
			font-weight: bold;
		}
		.title h1 {
			margin: 0;
		}
		.btn-logo {
			border: none;	
			padding: 0;
			background: transparent;
		}
		.btn-logo img:hover {
			cursor: pointer;
		}
		.footer {
			margin-top: 20px;
			height: 80px;
			background-color: #232323;
			color: #FBFEF9;
		}
		.footer .col-6, .footer .col-5 {
			margin-top: 30px;
		}
		.card {
			border: 0;
			background-color: #FCE38B;			
			max-width: 540px;
			margin-right: 1rem;
			transition: 0.2s;
			bottom: -10px;
		}
		.card:hover {
			background-color: #ffeca7;
			bottom:0px;
		}
	</style>
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
					          	<a class="nav-link active" aria-current="page" href="dark.php">Главная</a>
					        </li>
					        <li class="nav-item">
					          	<a class="nav-link" href="form.php">Подать заявку</a>
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

		<div class="theme ps-5">
			<a class="btn-logo" href="index.php">
				<img src="img/logo.png">
			</a>
		</div>

		<div class="title d-flex justify-content-center">
			<h1 class="align-self-center">проект: бутылка коламбии</h1>
		</div>
	</div>

	<div class="container mt-5">
		<div class="row">
			<?php while ($row = mysqli_fetch_array($result)): ?>
				<div class="card mb-3 col-6 p-0">
				  	<div class="row g-0">
				    	<div class="col-md-4">
				      		<img src="<?= $row['img']; ?>" width="100%">
				    	</div>
			   			<div class="col-md-8">
				      		<div class="card-body">
				        		<h5 class="card-title"><?= $row['name']; ?></h5>
			        			<p class="card-text"><?= $row['decription']; ?></p>
				      		</div>
				    	</div>
				  	</div>
				</div>
			<?php endwhile; ?>
		</div>
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