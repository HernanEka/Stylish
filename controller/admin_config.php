<?php  

include 'koneksi.php';

public function login($request)
{
	$email = $request['email'];
	$password = $request['password'];

	$sql = "SELECT * FROM users WHERE email = '$email' ";
	$select = mysqli_query($koneksi,$sql);

	$data = mysqli_fetch_assoc($select);

	if ($email == 'admin@admin.com') {
		
		if ($password == $data['password']) {
			
			$_SESSION['name'] = $data['nama'];
			$_SESSION['email'] = $data['email'];

			header('Location:../admin');
			exit()
		}

	}
}

?>