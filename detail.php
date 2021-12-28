<?php  

include 'controller/user_config.php';
include 'layout/header.php';

if (!isset($_SESSION['id'])) {
	
	header('Location:login.php');
}

if (isset($_POST['beli'])) {
	beli($_POST);
}

$id = $_GET['id'];

$sql = "SELECT * FROM product WHERE id = '$id'";
$select = mysqli_query($koneksi,$sql);

$data = mysqli_fetch_assoc($select);

?>
<section id="detail">
	<div class="container">
		<div class="card">
			<div class="row">
				<div class="col-md-5">
					<img src="src/img/foto-product/<?=$data['gambar']?>" class="img-fluid rounded-start" alt="...">
				</div>
				<div class="col-md-7">
					<div class="card-body">
						<h5 class="card-title"><?=$data['nama']?></h5>
						<p class="card-text"><?=$data['deskripsi']?></p>
						<p class="card-text">Rp <?=number_format($data['harga'])?></p>
						<form action="" method="POST">
							<select name="ukuran" class="form-select my-2">
								<option value="" selected disabled hidden>Pilih Ukuran</option>
								<option value="S">S</option>
								<option value="M">M</option>
								<option value="L">L</option>
								<option value="XL">XL</option>
							</select>
							<input type="number" name="harga" value="<?=$data['harga']?>" hidden>
							<input type="number" name="jumlah" class="form-control mt-4" placeholder="Masukan Jumlah Beli">
							<div class="text-center mt-5 mb-2">
								<button type="submit" name="beli" class="btn btn-secondary px-5">Beli</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<?php include 'layout/footer.php'; ?>