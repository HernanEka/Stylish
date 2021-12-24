<?php 

include 'controller/koneksi.php';
include 'layout/header.php'; 
?>
<section id="carousel" style="margin-top: 10%">
	<div class="container">
		<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
			</div>
			<div class="carousel-inner" style="height: 200px;">
				<div class="carousel-item active">
					<img src="https://1.bp.blogspot.com/-IwVVUDaMGWg/YKSGnSPrkkI/AAAAAAAAJ7U/FprhAuRnK9IGyIPGrz7no_g3cQIFUPH8ACNcBGAsYHQ/s800/toko%2Bbaju%2Bwanita%2Bdi%2BShopee.png" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
					<img src="https://pusatproduksibajukoko.files.wordpress.com/2020/02/cropped-slide3.jpg" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
					<img src="https://blogunik.com/wp-content/uploads/2018/07/Jenis-Jenis-Atasan-Wanita-Yang-Trendi-dan-Fashionable.jpg" class="d-block w-100" alt="...">
				</div><div class="carousel-item">
					<img src="https://blogunik.com/wp-content/uploads/2018/07/Jenis-Jenis-Atasan-Wanita-Yang-Trendi-dan-Fashionable.jpg" class="d-block w-100" alt="...">
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
	</div>
</section>
<!-- <section id="tawaran" style="margin-top: 50px;">
	<div class="container">
		<div class="row text-center">
			<h1 class="title">Pakaian yang mungkin anda suka</h1>
		</div>
		<div class="row justify-content-center" style="height: 650px;">
			<div class="col-md-3">
				<div class="card" style="border: none;">
					<img src="https://cf.shopee.co.id/file/d488bae582ab9df56f674be925ce10e0" class="card-img-top">
					<div class="card-body text-center">
						<h5 class="card-title">Blouse Renda</h5>
						<p class="card-text">Blouse Wanita Hijau - Tya Fashion<br>Rp 50.000</p>
						<a href="#" class="btn btn-beli">Beli</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> -->
<?php include 'layout/footer.php'; ?>