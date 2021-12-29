<?php  

include 'koneksi.php';

function tambahuser($request)
{
	global $koneksi;

	$nama = $request['nama'];
	$email = $request['email'];
	$password = $request['password'];
	$no_hp = $request['no_hp'];
	$alamat = $request['alamat'];

	$getuser = "SELECT * FROM users WHERE email = '$email' ";
	$select = mysqli_query($koneksi,$getuser);

	$cek_user = mysqli_num_rows($select);

	if ($cek_user == 0) {
		
		$sql = "INSERT INTO users VALUES ('','$nama','$email','$password','$no_hp','$alamat','2')";
		mysqli_query($koneksi,$sql);

		header('Location:user.php');
		exit();

	}else{
		header('Location:tambah_data.php');
		exit();
	}

}

function edituser($request)
{

	global $koneksi;

	$id = $_GET['id'];

	$nama = $request['nama'];
	$email = $request['email'];
	$password = $request['password'];
	$no_hp = $request['no_hp'];
	$alamat = $request['alamat'];
	$level = $request['level'];

	$sql = "UPDATE users SET nama = '$nama', email = '$email', password = '$password', no_hp = '$no_hp', alamat = '$alamat', level = '$level' WHERE id = '$id'";
	mysqli_query($koneksi,$sql);

	header('Location:user.php');


}


function tambahproduct($request)
{
	global $koneksi;

	$nama = $request['nama'];
	$deskripsi = $request['deskripsi'];
	$harga = $request['harga'];
	$kategori = $request['kategori'];

	$rand = rand();
	$ekstensi =  array('png','jpg','jpeg','gif');
	$filename = $_FILES['gambar']['name'];
	$ukuran = $_FILES['gambar']['size'];
	$ext = pathinfo($filename, PATHINFO_EXTENSION);

	$gambar = $rand."_".$filename;
	move_uploaded_file($_FILES['gambar']['tmp_name'], '../src/img/foto-product/'.$gambar);

	$insert = "INSERT INTO product VALUES('', '$nama', '$deskripsi', '$harga', '$gambar', '$kategori')";
	mysqli_query($koneksi,$insert);

	header('Location:product.php');
}

function editproduct($request)
{
	global $koneksi;

	$id = $_GET['id'];

	$nama = $request['nama'];
	$deskripsi = $request['deskripsi'];
	$harga = $request['harga'];
	$kategori = $request['kategori'];

	$sql = "SELECT * FROM product WHERE id = '$id'";
	$select = mysqli_query($koneksi,$sql);

	$data = mysqli_fetch_assoc($select);
	$lama = $data['gambar'];

	$cekgambar = $_FILES['gambar']['name'];

	if ($cekgambar != '') {
		
		unlink('../src/img/foto-product/'.$lama);

		$rand = rand();
		$ekstensi =  array('png','jpg','jpeg','gif');
		$filename = $_FILES['gambar']['name'];
		$ukuran = $_FILES['gambar']['size'];
		$ext = pathinfo($filename, PATHINFO_EXTENSION);

		$gambar = $rand."_".$filename;
		move_uploaded_file($_FILES['gambar']['tmp_name'], '../src/img/foto-product/'.$gambar);

		$sql = "UPDATE product SET nama =  '$nama', deskripsi =  '$deskripsi', harga = '$harga', gambar =  '$gambar', kategori = '$kategori' WHERE id = '$id'";
		mysqli_query($koneksi,$sql);

		header('Location:product.php');

	}else{

		$sql = "UPDATE product SET nama =  '$nama', deskripsi =  '$deskripsi', harga = '$harga', gambar =  '$lama', kategori = '$kategori' WHERE id = '$id'";
		mysqli_query($koneksi,$sql);

		header('Location:product.php');

	}
}

function ubahstatus($request)
{
	global $koneksi;

	$id = $_GET['id'];

	$status = $_POST['status'];

	$sql = "UPDATE pesanan SET status = '$status' WHERE id = '$id'";
	mysqli_query($koneksi,$sql);

	header('Location:home.php');
}


if (isset($_GET['delete'])) {
	
	$kategori = $_GET['delete'];
	$id = $_GET['id'];


	if ($kategori == 'user') {
		
		$sql = "DELETE FROM users WHERE id = '$id' ";
		mysqli_query($koneksi,$sql);

		header('Location:../admin/user.php');

	}elseif ($kategori == 'product') {
		
		$sql = "DELETE FROM product WHERE id = '$id' ";
		mysqli_query($koneksi,$sql);

		header('Location:../admin/product.php');

	}elseif ($kategori == 'pesanan') {
		
		$sql = "DELETE FROM pesanan WHERE id = '$id' ";
		mysqli_query($koneksi,$sql);

		header('Location:../admin/home.php');


	}
}
?>