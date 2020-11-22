<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="icon" type="text/css" href="img/favicon.png">
		<title> E-Farming</title>
		
	</head>
	<body>
		<nav class="navbar sticky-top navbar-expand-lg  navbar-dark bg-primary">
			<a class="navbar-brand links" href="index.php"> E-Farming </a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link links" id="index" href="#">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link links" id="Registr" href="#"> Authorised Sellers</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Categories
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item links" id="dairy" href="#">Dairy</a>
							<a class="dropdown-item links" id="vegitables" href="#">Vegetables</a>
							<a class="dropdown-item links" id="plants" href="#">Plants</a>
							<a class="dropdown-item links" id="fruit" href="#">Fruits</a>
							<a class="dropdown-item links" id="pulses" href="#">Pulses</a>
							<a class="dropdown-item links" id="flower" href="#">Flowers</a>
						</div>
					</li>
					<li>
						
					</li>
				</ul>
				
			</div>
		</nav>


<!----------------------START-div for ajax load method------------------------------------------>
	<div id="ajax_loader_div">
		<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="img/img01.jpg" class="h-25 h-lg-auto d-block" alt="Responsive image">
				</div>
				<div class="carousel-item">
					<img src="img/img02.jpg" class="h-25 d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
					<img src="img/img03.jpg" class="h-25 d-block w-100" alt="...">
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6">
					<picture>
						<a> <img src="img/cow (7).jpg" class="dairy"> </a>
						<h3> Dairy</h3>
					</picture>
				</div>
				<div class="col-lg-6">
					<picture>
						<a> <img src="img/img04.jpeg" class="vegitables"> </a>
						<h3> Vegetables</h3>
					</picture>
				</div>
			</div>
			
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6">
					<picture>
						<a> <img src="img/plants.jpg" class="plants"> </a>
						<h3> Plants</h3>
					</picture>
				</div>
				<div class="col-lg-6">
					<picture>
						<a> <img src="img/fruits.jpg" class="fruit"> </a>
						<h3> Fruits</h3>
					</picture>
				</div>
			</div>
			
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6">
					<picture>
						<a> <img src="img/nuts.jpg" class="pulses"> </a>
						<h3> Pulses</h3>
					</picture>
				</div>
				<div class="col-lg-6">
					<picture>
						<a> <img src="img/flowers.jpg" class="flower"> </a>
						<h3> Flowers</h3>
					</picture>
				</div>
			</div>
		</div>
	</div>
<!----------------------END-div for ajax load method------------------------------------------>



		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/popper.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/myscript.js"></script>
	</body>
</html>