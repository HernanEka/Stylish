<?php  

include '../controller/admin_config.php';

$sql = "SELECT * FROM users";
$select = mysqli_query($koneksi,$sql);

$i = 1;

?>

<!doctype html>
	<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

		<!-- link for icon -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
		

		<!-- Option 1: Bootstrap Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

		<style type="text/css">
			.sidebar{
				min-height: 100vh;
			}
			.nav-link{
				color: #fff;
				font-weight: 300;
				font-size: 20px;
			}
			.nav-link:hover{
				color: #888;
			}
		</style>

		<title>Admin Stylish</title>
	</head>
	<body>
		<div class="d-flex">
			<div class="col-md-2 sidebar bg-dark">
				<h1 class="display-6 text-muted p-4 ">Admin</h1>
				<div class="p-4" style="min-height: 70vh;">
					<ul class="navbar-nav">
						<li class="nav-item"><a href="home.php" class="nav-link">Tabel Pesanan</a></li>
						<li class="nav-item"><a href="product.php" class="nav-link">Tabel Product</a></li>
						<li class="nav-item"><a href="user.php" class="nav-link fw-bold">Tabel User</a></li>
					</ul>
				</div>
				<div class="p-3 ">
					<a href="../controller/koneksi.php?logout=yes" class="btn btn-danger px-5">Log Out</a>
				</div>
			</div>
			<div class="col-md-10">
				<div class="p-4">
					<h1 class="display-6">Tabel User</h1>
					<a href="tambah_data.php?kategori=user" class="btn btn-primary px-3 mt-3">Tambah Data +</a>
					<table class="my-3 table table-striped table-bordered">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Nama</th>
								<th scope="col">Email</th>
								<th scope="col">Password</th>
								<th scope="col">No Handphone</th>
								<th scope="col">Alamat</th>
								<th scope="col">Level</th>
								<th scope="col">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php while ($data = mysqli_fetch_assoc($select)) {?>
								<tr>
									<th scope="row"><?=$i++?></th>
									<td><?=$data['nama']?></td>
									<td><?=$data['email']?></td>
									<td><?=$data['password']?></td>
									<td><?=$data['no_hp']?></td>
									<td><?=$data['alamat']?></td>
									<td><?=$data['level']?></td>
									<td>
										<a class="btn btn-success" href="update_data.php?kategori=user&id=<?=$data['id']?>">Edit</a>
										<a href="../controller/admin_config.php?delete=user&id=<?=$data['id']?>" class="btn btn-danger">Delete</a>
									</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</body>
	</html>