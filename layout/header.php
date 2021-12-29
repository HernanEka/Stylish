<!doctype html>
	<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

		<!-- Custom CSS -->
		<link rel="stylesheet" type="text/css" href="src/css/style.css">

		<!-- link for icon -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
		
		<!-- Option 1: Bootstrap Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

		<title>Stylish</title>
	</head>
	<body>
		<nav class="navbar sticky-top navbar-expand-md navbar-dark bg-dark">
			<a href="home.php" class="navbar-brand" style="margin-left: 80px;">Stylish</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav me-auto">
					<li class="nav-item">
						<a href="fashion.php?kategori=Wanita" class="nav-link"><b class="nav">Wanita</b></a>
					</li>
					<li class="nav-item">
						<a href="fashion.php?kategori=Pria" class="nav-link"><b class="nav">Pria</b></a>
					</li>
					<li class="nav-item">
						<a href="fashion.php?kategori=Olahraga" class="nav-link"><b class="nav">Olahraga</b></a>
					</li>
					<li class="nav-item">
						<a href="fashion.php?kategori=Anak" class="nav-link"><b class="nav">Anak-Anak</b></a>
					</li>
					<li class="nav-item">
						<a href="about.php" class="nav-link"><b class="nav">Tentang Kami</b></a>
					</li>
				</ul>
				<form action="" method="GET" class="d-flex">
					<input type="search" class="form-control me-2" name="search" placeholder="Cari Product.." aria-label="Search">
					<button type="submit" class="btn btn-search"><span class="fa fa-search"></span></button>
					<ul class="navbar-nav me-auto" style="padding-right: 80px;">
						<?php if (isset($_SESSION['id'])) { ?>
							<li class="nav-item">
							<div class="dropdown">
								<a href="#" class="nav-link dropdown-toggle" id="dropdownMenuButton1" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-user icon-nav"></i></a>
								<ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton1">
									<li><a class="dropdown-item" href="#">Profile</a></li>
									<li><hr class="dropdown-devider"></li>
									<li><a href="controller/koneksi.php?logout=yes" class="dropdown-item">Log out</a></li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a href="cart.php" class="nav-link"><i class="fa fa-shopping-bag icon-nav"></i></a>
						</li>
						<?php }else{ ?>
						<li class="nav-item">
							<a href="login.php" class="btn btn-success">Login</a>
						</li>
						<li class="nav-item">
							<a href="register.php" class="btn btn-primary">Register</a>
						</li>
						<?php } ?>
					</ul>
				</form>
			</div>
		</nav>
		

