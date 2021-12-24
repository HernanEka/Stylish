<?php 

session_start();

include_once 'controller/koneksi.php';
include_once 'controller/user_config.php';


if (isset($_POST['login'])) {
	
	login($_POST);
}
include 'layout/header.php'; 
?>
<section id="login">
	<div class="container login-container">
		<div class="row justify-content-center">
			<div class="col-md-5 text-center login-form">
				<h5 class="text-title">Login</h5>
				<hr>
				<p>Belum Punya Akun? Register Sekarang!!</p>
				<a href="register.php" class="btn btn-register">Register</a>
				<hr>
				<form action="" method="POST">
					<div class="form-group">
						<input type="email" name="email" class="form-control" placeholder="Email">
					</div>
					<div class="form-group">
						<input type="password" name="password" class="form-control" placeholder="Password">
					</div>
					<hr>
					<button type="submit" class="btn btn-login" name="login">LOGIN</button>
				</form>
			</div>
		</div>
	</div>
</section>
<?php include 'layout/footer.php'; ?>