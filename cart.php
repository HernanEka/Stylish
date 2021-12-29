<?php  

include 'controller/user_config.php';
include 'layout/header.php';



$id = $_SESSION['id'];

$sql = "SELECT * FROM pesanan WHERE user_id = '$id'";
$select = mysqli_query($koneksi,$sql);

$i = 1;



?>
<section id="detail">
	<div class="container">
		<h1 class="display-6">Tabel Pesanan</h1>
		<table class="my-3 table table-striped table-bordered">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Nama Product</th>
					<th scope="col">Jumlah</th>
					<th scope="col">Ukuran</th>
					<th scope="col">Total Harga</th>
					<th scope="col">Status</th>
					<th scope="col">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php while ($data = mysqli_fetch_assoc($select)) {

					$product_id = $data['product_id'];

					$sql2 = "SELECT * FROM product WHERE id = '$product_id'";
					$select2 = mysqli_query($koneksi,$sql2);

					$product = mysqli_fetch_assoc($select2);

					?>
					<tr>
						<th scope="row"><?=$i++?></th>
						<td><?=$product['nama']?></td>
						<td><?=$data['jumlah']?></td>
						<td><?=$data['ukuran']?></td>
						<td><?=$data['total']?></td>
						<td>
							<?php if ($data['status']==1): ?>
								<p class="btn btn-danger">Belum Dibayar</p>
							<?php endif ?>
							<?php if ($data['status']==2): ?>
								<p class="btn btn-warning">Dalam Proses</p>
							<?php endif ?>
							<?php if ($data['status']==3): ?>
								<p class="btn btn-success">Sudah Terkirim</p>
							<?php endif ?>
						</td>
						<td>
							<!-- Button trigger modal -->
							<a class="btn btn-success" href="bayar.php?id=<?=$data['id']?>">Edit</a>
							<a href="../controller/admin_config.php?delete=pesanan&id=<?=$data['id']?>" class="btn btn-danger">Delete</a>


							
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>

		

		
	</div>
</section>


<?php include 'layout/footer.php'; ?>