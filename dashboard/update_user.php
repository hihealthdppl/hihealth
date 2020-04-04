<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$id         = $_POST['id'];
$names       = $_POST['nama'];
$un         = $_POST['usernames'];
$passwords  = $_POST['ps'];
$mail       = $_POST['emails'];
$height     = $_POST['tb'];
$weight     = $_POST['bb'];
$age        = $_POST['ages'];


// update data ke database
mysqli_query($koneksi,"update user set 
    username='$un',
    sandi='$passwords',
    nama='$names',
    email='$mail',
    umur='$age',
    beratbadan='$weight',
    tinggibadan='$height',
    where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>