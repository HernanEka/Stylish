<?php 

include_once 'controller/koneksi.php';
include_once 'controller/user_config.php';
include 'layout/header.php'; 


if (isset($_POST['register'])) {
	register($_POST);
}

?>
<section id="register">
	<div class="container login-container">
		<div class="row justify-content-center">
			<div class="col-md-5 login-form text-center">
				<h5 class="text-title">Register</h5>
				<hr>
				<p>Sudah Punya Akun? Langsung Login aja</p>
				<a href="login.php" class="btn btn-register">Login</a>
				<hr>
				<form action="" method="POST">
					<div class="form-group">
						<input type="text" name="nama" class="form-control" placeholder="Nama Lengkap">
					</div>
					<div class="form-group">
						<input type="email" name="email" class="form-control" placeholder="Email">
					</div>
					<div class="form-group">
						<input type="password" name="password" class="form-control" placeholder="Password">
					</div>
					<div class="form-group">
						<input type="number" name="no_hp" class="form-control" placeholder="No Handphone">
					</div>
					<div class="form-group">
						<textarea class="form-control" name="alamat" placeholder="Alamat"></textarea>
					</div>
					<hr>
					<button type="submit" class="btn btn-login" name="register">Register</button>
				</form>
			</div>
		</div>
	</div>
</section>
<?php include 'layout/footer.php'; ?>