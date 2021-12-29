<?php  

include '../controller/admin_config.php';

if (isset($_GET['kategori'])) {
	
	$kategori = $_GET['kategori'];

}else{
	$kategori = '';
}


if (isset($_POST['user'])) {
	
	edituser($_POST);

} elseif (isset($_POST['product'])) {
	
	editproduct($_POST);

} elseif (isset($_POST['pesanan'])) {
	ubahstatus($_POST);
}

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
						<li class="nav-item"><a href="home.php" class="nav-link <?php if ($kategori == 'pesanan') { echo "fw-bold"; } ?>">Tabel Pesanan</a></li>
						<li class="nav-item"><a href="product.php" class="nav-link <?php if ($kategori == 'product') { echo "fw-bold"; } ?>">Tabel Product</a></li>
						<li class="nav-item"><a href="user.php" class="nav-link <?php if ($kategori == 'user') { echo "fw-bold"; } ?>">Tabel User</a></li>
					</ul>
				</div>
				<div class="p-3">
					<a href="../controller/koneksi.php?logout=yes" class="btn btn-danger px-5">Log Out</a>
				</div>
			</div>
			<div class="col-md-10">
				<div class="p-4">
					<?php if ($kategori == 'user') {

						$id = $_GET['id'];

						$sql = "SELECT * FROM users WHERE id = '$id'";
						$select = mysqli_query($koneksi,$sql);

						$data = mysqli_fetch_assoc($select);

						?>
						<h1 class="display-6">Tambah Data User</h1>
						<form action="" method="POST" class="col-md-5">
							<div class="my-3">
								<label for="nama" class="form-label">Nama Lengkap User</label>
								<input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Lengkap" value="<?=$data['nama']?>">
							</div>
							<div class="my-3">
								<label for="email" class="form-label">Email User</label>
								<input type="email" id="email" name="email" class="form-control" placeholder="Email" value="<?=$data['email']?>">
							</div>
							<div class="my-3">
								<label for="password" class="form-label">Password User</label>
								<input type="password" id="password" name="password" class="form-control" placeholder="Password" value="<?=$data['password']?>">
							</div>
							<div class="my-3">
								<label for="no_hp" class="form-label">No Handphone User</label>
								<input type="number" id="no_hp" name="no_hp" class="form-control" placeholder="No Handphone" value="<?=$data['no_hp']?>">
							</div>
							<div class="my-3">
								<label for="alamat" class="form-label">Alamat</label>
								<textarea class="form-control" id="alamat" name="alamat" placeholder="Alamat"><?=$data['alamat']?></textarea>
							</div>
							<div class="my-3">
								<label for="level" class="form-label">Level</label>
								<select name="level" id="level" class="form-select">
									<option value="1" <?php if ($data['level'] == 1): ?>
									selected
									<?php endif ?>>Admin</option>
									<option value="2" <?php if ($data['level'] == 2): ?>
									selected
									<?php endif ?>>User</option>
								</select>
							</div>
							<hr>
							<button type="submit" class="btn btn-primary" name="user">Update Data</button>
						</form>
					<?php }elseif ($kategori == 'product') {

						$id = $_GET['id'];

						$sql = "SELECT * FROM product WHERE id = '$id'";
						$select = mysqli_query($koneksi,$sql);

						$data = mysqli_fetch_assoc($select);

						?>
						<h1 class="display-6">Update Data Product</h1>
						<form action="" method="POST" enctype="multipart/form-data" class="col-md-5">
							<div class="my-3">
								<label for="nama" class="form-label">Nama Product</label>
								<input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Product" value="<?=$data['nama']?>">
							</div>
							<div class="my-3">
								<label for="deskripsi" class="form-label">Deskripsi Product</label>
								<textarea class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsi Product"><?=$data['deskripsi']?></textarea>
							</div>
							<div class="my-3">
								<label for="harga" class="form-label">Harga Product</label>
								<input type="number" id="harga" name="harga" class="form-control" placeholder="Harga Product" value="<?=$data['harga']?>">
							</div>
							<div class="my-3">
								<label for="kategori" class="form-label">Kategori Product</label>
								<select name="kategori" id="kategori" class="form-select">
									<option value="" selected disabled hidden>Pilih Kategori</option>
									<option value="Wanita" <?php if ($data['kategori'] == "Wanita"): ?>
									selected
									<?php endif ?>>Wanita</option>
									<option value="Pria" <?php if ($data['kategori'] == "Pria"): ?>
									selected
									<?php endif ?>>Pria</option>
									<option value="Olahraga" <?php if ($data['kategori'] == "Olahraga"): ?>
									selected
									<?php endif ?>>Olahraga</option>
									<option value="Anak" <?php if ($data['kategori'] == "Anak"): ?>
									selected
									<?php endif ?>>Anak-anak</option>
								</select>
							</div>
							<div class="my-3">
								<label for="gambar" class="form-label">Gambar Product</label>
								<input type="file" id="gambar" name="gambar" class="form-control">
							</div>
							<hr>
							<button type="submit" class="btn btn-primary" name="product">Update Data</button>
						</form>
						<?php }elseif ($kategori == 'pesanan') {

							$id = $_GET['id'];

							$sql = "SELECT * FROM pesanan WHERE id = '$id'";
							$select = mysqli_query($koneksi,$sql);

							$data = mysqli_fetch_assoc($select);

							?>
							<h1 class="display-6">Update Status Pesanan</h1>
							<form action="" method="POST" enctype="multipart/form-data" class="col-md-5">
								<div class="my-3">
									<label for="status" class="form-label">Kategori Product</label>
									<select name="status" id="status" class="form-select">
										<option value="" selected disabled hidden>Pilih Kategori</option>
										<option value="1" <?php if ($data['status'] == "1"): ?>
										selected
										<?php endif ?>>Belum Dibayar</option>
										<option value="2" <?php if ($data['status'] == "2"): ?>
										selected
										<?php endif ?>>Dalam Proses</option>
										<option value="3" <?php if ($data['status'] == "3"): ?>
										selected
										<?php endif ?>>Terkirim</option>
									</select>
								</div>
								<hr>
								<button type="submit" class="btn btn-primary" name="pesanan">Update Data</button>
							</form>
						<?php } ?>
					</div>
				</div>
			</div>
		</body>
		</html>