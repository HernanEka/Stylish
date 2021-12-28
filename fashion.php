<?php 
include 'controller/user_config.php';
include 'layout/header.php'; 

if (isset($_GET['search'])) {
	
	$cari = $_GET['search'];

	$sql = "SELECT * FROM product WHERE nama like '%$cari%'";
	$select = mysqli_query($koneksi,$sql);

}else if (isset($_GET['kategori'])) {
	
	$kategori = $_GET['kategori'];
	$sql = "SELECT * FROM product WHERE kategori = '$kategori' ";
	$select = mysqli_query($koneksi,$sql);

}else{
	$sql = "SELECT * FROM product";
	$select = mysqli_query($koneksi,$sql);	
}





?>
<section id="carousel" class="mt-4">
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

<section id="Fashion">
	<div class="container">
		<div class="row">
			<?php while ($data=mysqli_fetch_assoc($select)) { ?>
				<div class="col-md-3">
					<div class="card" style="border: none;">
						<img src="src/img/foto-product/<?=$data['gambar']?>" class="card-img-top" style='max-height: 250px; object-fit: contain;'>
						<div class="card-body text-center">
							<h5 class="card-title"><?=$data['nama']?></h5>
							<p class="card-text">Rp <?=number_format($data['harga'])?></p>
							<a href="detail.php?id=<?=$data['id']?>" class="btn btn-beli">Beli</a>
						</div>
					</div>
				</div>
			<?php } ?>
			
		</div>
	</div>
</section>
<?php include 'layout/footer.php'; ?>