<?php 
include 'controller/user_config.php';
include 'layout/header.php';

if (isset($_GET['search'])) {
	
	$cari = $_GET['search'];

	header('Location:fashion.php?search='.$cari);
}

?>
	<section id="home" style="margin-top: 50px;">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-5">
					<div class="card text-center">
						<img src="https://images.unsplash.com/photo-1578996953841-b187dbe4bc8a?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=387&q=80" class="card-img">
						<div class="card-img-overlay">
							<div class="card-body">
								<a href="fashion.php?kategori=Wanita" class="btn white-box">TOKO WANITA <span class="fa fa-chevron-right"></span></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-5">
					<div class="card text-center">
						<img src="https://images.unsplash.com/photo-1618886614638-80e3c103d31a?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=370&q=80" class="card-img">
						<div class="card-img-overlay">
							<div class="card-body">
								<a href="fashion.php?kategori=Pria" class="btn white-box">TOKO PRIA <span class="fa fa-chevron-right"></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-5">
					<div class="card text-center">
						<img src="https://images.unsplash.com/photo-1612902376491-7a8a99b424e8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" class="card-img">
						<div class="card-img-overlay">
							<div class="card-body">
								<a href="fashion.php?kategori=Olahraga" class="btn white-box">TOKO OLAHRAGA <span class="fa fa-chevron-right"></span></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-5">
					<div class="card text-center">
						<img src="https://images.unsplash.com/photo-1607877742555-38bf41344842?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=387&q=80" class="card-img">
						<div class="card-img-overlay">
							<div class="card-body">
								<a href="fashion.php?kategori=Anak" class="btn white-box">TOKO ANAK <span class="fa fa-chevron-right"></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php include 'layout/footer.php'; ?>