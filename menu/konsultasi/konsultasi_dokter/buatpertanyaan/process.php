<?php 
    require_once("../../../../koneksi.php");
    if(!isset($_SESSION['username']) && $_SESSION['privilege'] == 'user'){
        echo "<script>alert('Anda harus login');</script>";
        echo "<meta http-equiv='refresh' content='1;url=../login.php'>";
    }
    
    $fk = $_SESSION['username'];
    $nama = $koneksi->query("SELECT Nama FROM user where username='$fk'");
    $title = $_GET['title'];
    $time_now = date("Y/m/d");
    $hour = date('H:i');
    $post_content = $_GET['detail'];
    if(strlen($post_content)>20) {$len = 20;}
    else {$len = strlen($post_content);}
    $post_excert = substr($post_content,0,$len);
    $query = "INSERT INTO konsultasi (judul,kategori,username,time_entry,hour,post_content,post_excerpt,nama)
                VALUES('$title','NONE','$fk','$time_now','$hour','$post_content','$post_excert','$nama') ";
    if($koneksi->query($query)){
        echo "<meta http-equiv='refresh' content='1;url=../index.php'>";
    }
    
?>