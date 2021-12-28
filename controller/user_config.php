<?php  

include 'koneksi.php';

function login($request)
{

	global $koneksi;


	$email = $request['email'];
	$password = $request['password'];

	$sql = "SELECT * FROM users WHERE email = '$email' ";
	$select = mysqli_query($koneksi,$sql);

	$cek_user = mysqli_num_rows($select);

	if ($cek_user == 1) {
		
		$data = mysqli_fetch_assoc($select);

		if ($password == $data['password']) {
			
			if ($data['level'] == 1) {
				
				$_SESSION['id'] = $data['id'];
				$_SESSION['nama'] = $data['nama'];
				$_SESSION['email'] = $data['email'];

				header('Location:admin');
				exit();
			}else{
				$_SESSION['id'] = $data['id'];
				$_SESSION['nama'] = $data['nama'];
				$_SESSION['email'] = $data['email'];
				$_SESSION['pesan'] = 'Berhasil Login';

				if (isset($_POST['remember'])) {
					
					setcookie('email', $_POST['email'], strtotime('+7 days'), "/");
					setcookie('password', $_POST['password'], strtotime('+7 days'), "/");

				}

				header('Location:home.php');
				exit();
			}

		}else{
			$_SESSION['warning'] = 'Password Salah';
			header('Location:login.php');
			exit();
		}

	}else{
		$_SESSION['warning'] = 'Password Salah';
		header('Location:login.php');
		exit();
	}
}

function register($request)
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

		header('Location:login.php');
		$_SESSION['pesan'] = 'Berhasil Membuat Akun';
		exit();

	}else{
		$_SESSION['pesan'] = 'Akun Sudah Terdaftar';
		header('Location:register.php');
		exit();
	}

}

function beli($request)
{
	global $koneksi;

	$product_id = $_GET['id'];
	$user_id = $_SESSION['id'];

	$jumlah = $request['jumlah'];
	$ukuran = $request['ukuran'];
	$harga = $request['harga'];

	$total = $jumlah * $harga;

	$sql = "INSERT INTO pesanan VALUES ('','$product_id','$jumlah','$total','$ukuran','$user_id','2','')";
	mysqli_query($koneksi,$sql);

	header('Location:cart.php');
}



?>