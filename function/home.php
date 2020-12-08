<?php 
function isNotLogin(){
    echo "<p data-animation='fadeInUp' data-delay='.5s'>Silahkan Melakukan SIGN IN Terlebih Dahulu Jika Mempunyai
    Akun Atau Silahkan Lakukan SIGN UP Jika Belum Mempunyai Akun Untuk Mengakses Fitur Konsultasi dan Forum</p>
<p data-animation='fadeInUp' data-delay='.5s'>Untuk Dokter, Silahkan Geser Slide Ini Untuk Melakukan SIGN IN / SIGN UP</p>
<!-- Slider btn -->
<div class='slider-btns'>
    <!-- Hero-btn -->
    <a data-animation='fadeInLeft' data-delay='1.0s' href='user/login/index.php' class='btn radius-btn'>SIGN IN USER</a>
    <a data-animation='fadeInLeft' data-delay='1.0s' href='user/register/index.php' class='btn radius-btn'>SIGN UP USER</a>
    <!-- Video Btn -->
</div>";
}

function isLogin($name){
    echo "<a class='btn hero-btn' style='margin-top:20px'>
        <h4>Welcome, $name !</h4> </a>";
}


?>


