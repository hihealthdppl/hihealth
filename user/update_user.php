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

$cekdulu= "select * from user where username='$un'"; 
$prosescek= mysqli_query($koneksi, $cekdulu);



if (mysqli_num_rows($prosescek)>0){
    echo "<script>alert('username sudah ada yang menggunakan')</script>";
}
else{

    if((ctype_alpha($un)) && ($passwords!=NULL) && ($un!=NULL) && ($height!=NULL) 
    && ($weight!=NULL)&& ($age!=NULL) && ($mail!=NULL) && ($names!=NULL)){
    
    
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
        }
        else{
            echo "
            <script>
            alert('Data Masih ada yang kosong / username tidak boleh mengandung spasi dan angka');
            document.location.href='edit_profile.php';
            </script>
            ";
        }

    }
    else{
        echo "<script>alert('username sudah ada yang menggunakan');
        document.location.href='edit_profile.php';
        </script>";

    }
}

?>