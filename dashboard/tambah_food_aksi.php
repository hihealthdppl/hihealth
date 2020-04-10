<?php 
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$names   = $_POST['nama'];
$weight  = $_POST['berat'];
$calory = $_POST['kalori'];
$units   = $_POST['unit'];

// menginput data ke database

$data = mysqli_query($koneksi, "insert into makanan values(NULL,'$names','$weight','$calory','$units')");



if ($data) {
    echo "
            <script>
            alert('Data berhasil ditambahkan');
            document.location.href='halaman_admin.php';
            </script>
        ";
}
else{
    echo "
        <script>
        alert('Gagal simpan data makanan');
        </script>";
    exit;
}

?>