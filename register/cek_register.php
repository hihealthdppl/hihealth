<?php
// koneksi database

include '../koneksi.php';

// menangkap data yang di kirim dari form
$nama    = $_POST['nama'];
$email    = $_POST['email'];
$berat    = $_POST['beratbadan'];
$tinggi = $_POST['tinggibadan'];
$umur = $_POST['umur'];
$username = $_POST['username'];
$password = $_POST['ps'];

// menginput data ke database


$data = mysqli_query($koneksi, "insert into user values(NULL,'$username','$password','$nama','$email','$umur','$berat','$tinggi','')");

if ($data) {
    header("location:../login?pesan=daftarsukses");
} else {
    echo "Gagal Melakukan Registrasi..";
    exit;
}
