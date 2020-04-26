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
$level      = $_POST['levels'];
$ans        = $_POST['jawab'];



$cekdulu= "select * from user where username='$un'"; 
$prosescek= mysqli_query($koneksi, $cekdulu);


if ((mysqli_num_rows($prosescek)>0)&&(($ans=="ya")||($ans=="Ya"))){
   echo "
        <script>
        alert('Data tidak berhasil diubah. username sudah ada yang menggunakan.');
        document.location.href='edit_profile.php';
        </script>
        ";
}
else{
    
    if((ctype_alpha($un)) && ($passwords!=NULL) && ($un!=NULL) && ($names!=NULL)
    && ($mail!=NULL)&& ($height!=NULL) && ($weight!=NULL) && ($age!=NULL)&& ($ans!=NULL)){
    
    //update session

    session_start();
    $_SESSION['username']= $un;
    
    // update data ke database
    
    
    $check = mysqli_query($koneksi,"update user set 
    username='$un',
    sandi='$passwords',
    nama='$names',
    email='$mail',
    umur='$age',
    beratbadan='$weight',
    tinggibadan='$height',
    level='$level'
    where id='$id'");

    // mengalihkan halaman kembali ke index.php

    if($check > 0){
        echo "
            <script>
            alert('Data berhasil diubah');
            document.location.href='index.php';
            </script>
        ";
    }}
    else{
        echo "
        <script>
        alert('Data tidak berhasil diubah. username tidak boleh mengandung angka dan spasi atau data masih ada yang kosong');
        document.location.href='edit_profile.php';
        </script>
        ";
    }
}
?>