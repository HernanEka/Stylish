<?php  

include 'controller/user_config.php';
include 'layout/header.php';



$id = $_SESSION['id'];

$sql = "SELECT * FROM pesanan WHERE user_id = '$id'";
$select = mysqli_query($koneksi,$sql);

$data = mysqli_fetch_assoc($select);

?>
<section id="detail">
	<div class="container">
		
	</div>
</section>


<?php include 'layout/footer.php'; ?>