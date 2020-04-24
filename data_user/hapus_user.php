<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
$data = mysqli_query($koneksi,"delete from user where id='$id'");
 
// mengalihkan halaman kembali ke index.php

if ($data) {
    echo "
            <script>
            alert('Data berhasil dihapus');
            document.location.href='data_user.php';
            </script>
        ";
}
else{
    echo "
        <script>
        alert('Gagal Hapus Data');
        </script>";
    exit;
}
?>