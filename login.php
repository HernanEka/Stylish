<?php 

session_start();


include_once 'controller/user_config.php';
include 'layout/header.php'; 


if (isset($_POST['login'])) {
	
	login($_POST);
}



?>
<section id="login">
	<div class="container login-container">
		<div class="row justify-content-center">
			<div class="col-md-5 login-form">
				<div class="text-center">
					<h5 class="text-title">Login</h5>
					<hr>
					<p>Belum Punya Akun? Register Sekarang!!</p>
					<a href="register.php" class="btn btn-register">Register</a>
					<hr>
				</div>
				<form action="" method="POST">
					<div class="form-group">
						<input type="email" name="email" class="form-control" placeholder="Email" <?php if (isset($_COOKIE['email'])) {
								echo 'value='.$_COOKIE['email'];
							} ?>>
					</div>
					<div class="form-group">
						<input type="password" name="password" class="form-control" placeholder="Password" <?php if (isset($_COOKIE['password'])) {
								echo 'value='.$_COOKIE['password'];
							} ?>>
						<div class="form-check">
							<input type="checkbox" name="remember" id="remember" class="form-check-input">
							<label class="form-check-label" for="remember">Remember Me</label>
						</div>
					</div>
					<hr>
					<button type="submit" class="btn btn-login" name="login">LOGIN</button>
				</form>
			</div>
		</div>
	</div>
</section>
<?php include 'layout/footer.php'; ?>