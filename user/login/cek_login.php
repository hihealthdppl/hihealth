<?php

require_once "../../koneksi.php";
// menangkap data yang dikirim dari form

$username = $_POST['username'];
$password = $_POST['password'];


// mengaktifkan session php



// menyeleksi data admin dengan username dan password yang sesuai


if((ctype_alpha($username))&&($username!=NULL)&&($password!=NULL)){

	$data = mysqli_query($koneksi, "select * from user where username='$username' and sandi='$password'");
	if ($data) {
		$fetch = mysqli_fetch_assoc($data);
		// cek jika user login sebagai admin
		if (($fetch['privilege'] == "admin")) {
			// buat session login dan username
			$_SESSION['username'] = $username;
			$_SESSION['status'] = "login";
			$_SESSION['level'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:/HIHEALTH/");
		} 
		else {
			$_SESSION['username'] = $username;
			$_SESSION['status'] = "login";
			$_SESSION['level'] = $fetch['privilege'];
			header("location: /HIHEALTH/");
		}
	}
	else{
		header("location:.?pesan=gagal");
	}
}
else{
	header("location:.?pesan=gagal2");
}
?>

