<?php 
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$names   = $_POST['nama'];
$weight  = $_POST['berat'];
$calory = $_POST['kalori'];
$units   = $_POST['unit']

// menginput data ke database

$data = mysqli_query($koneksi, "insert into food values(NULL,'$names','$weight','$calory','$units')");



if ($data) {
    header("location:halaman_admin.php");
}
else{
    echo "Gagal simpan data makanan";
    exit;
}

?>