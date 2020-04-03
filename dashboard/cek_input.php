<?php 
// koneksi database
include 'koneksis.php';
 
// menangkap data yang di kirim dari form
	$names	= $_POST['nama'];
	$emails	= $_POST['email'];
    $weight	= $_POST['beratbadan'];
    $height = $_POST['tinggibadan'];
    $age = $_POST['umur'];
    $usernames = $_POST['username'];
    $passwords = $_POST['ps'];


// menginput data ke database
$data = mysqli_query($koneksi,"insert into user values(NULL,'$names','$emails','$weight','$height','$age','$usernames','$passwords')");
 

if ($data) {
    header("location:index.php");
     }
    else{
        echo "Gagal simpan data anggota";
        exit;
    }
 
?>