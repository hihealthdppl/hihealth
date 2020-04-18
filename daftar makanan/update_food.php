<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$weight = $_POST['weight'];
$calory = $_POST['calory'];
$units = $_POST['units'];
$jenis = $_POST['jenis'];
 
// update data ke database
$data = mysqli_query($koneksi,"update makanan set food='$nama', berat='$weight', kalori='$calory', satuan='$units', jenis='$jenis' where id='$id'");



// mengalihkan halaman kembali ke index.php

if($data > 0 ){
    echo "
            <script>
            alert('Data berhasil ditambahkan');
            document.location.href='halaman_admin.php';
            </script>
        ";
}



?>