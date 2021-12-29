<?php  

include 'controller/user_config.php';
include 'layout/header.php';

$id = $_GET['id'];

if (isset($_POST['bayar'])) {
	
	bayar($_POST);
}
?>
<div class="container my-5">
	<form action="" method="POST" enctype="multipart/form-data" class="col-md-5">
		<div class="my-5">
			<label for="bukti" class="form-label">Kirim Bukti Bayar</label>
			<input type="file" name="bukti" class="form-control" id="bukti">
		</div>
		<button type="submit" class="btn btn-primary px-5" name="bayar">Kirim</button>
	</form>	
	
</div>

<?php include 'layout/footer.php'; ?>