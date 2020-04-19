<?php

// Action form

if (isset($_POST['submit'])) {
    // Input form
    
    $kelamin   = $_POST['kelamin'];
    $tb        = $_POST['tb']/100;
    $bb        = $_POST['bb'];

    /* Rumus BMI adalah:
    BMI = BERAT BADAN / KUADRAT TINGGI BADAN
    */   
    $tbm = $tb*100;
    // Hitung BMI
    $bmi        = $bb / ($tb * $tb);
    
    /*Hitung BB ideal sesuai jenis kelamin dengan rumus broca
    
    notes : tinggi badan dalam cm
    wanita = (tinggi badan - 100 )-(15%*(tinggi badan-100))
    pria = (tinggi badan - 100 )-(10%*(tinggi badan-100))
    */

    if($kelamin=="Perempuan"){
        $bbideal = (($tb*100)-100 )-(0.15*(($tb*100)-100)); 
    }
    else if($kelamin=="Laki-laki"){
        $bbideal = (($tb*100)-100 )-(0.1*(($tb*100)-100));
    }

    if($bmi < 15.5) {
        $hasil= "Anda mengalami anoreksia";
        $hasil2="Berat Badan Anda Seharusnya $bbideal";
    }elseif ($bmi < 18.5 ) {
        $hasil= "Anda mengalami kekurangan gizi";
        $hasil2="Berat Badan Anda Seharusnya $bbideal";
    }elseif ($bmi < 25 ) {
        $hasil= "Anda memiliki berat badan normal dengan";
        $hasil2="Berat Badan Sebesar $bb";
    }elseif ($bmi < 30 ) {
        $hasil= "Anda mengalami overweight";
        $hasil2="Berat Badan Anda Seharusnya $bbideal";
    }elseif ($bmi < 35 ) {
        $hasil= "Anda mengalami obesitas level 1";
        $hasil2="Berat Badan Anda Seharusnya $bbideal";
    }elseif ($bmi < 40 ) {
        $hasil= "Anda mengalami obesitas level 2";
        $hasil2="Berat Badan Anda Seharusnya $bbideal";
    }else {
        $hasil= "Anda mengalami obesitas akut";
        $hasil2="Berat Badan Anda Seharusnya $bbideal";
    }

}
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>medical</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <!-- magnific popup CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- nice select CSS -->
    <link rel="stylesheet" href="css/nice-select.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html"> <img src="img/logo.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-center"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item active">
                                    <a class="nav-link" href="../../user/index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../menu_perhitungan.php">Perhitungan BMI</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../../perhitungan_kalori/menu_perhitungank.php">Perhitungan Kalori</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../../user/edit_profile.php">Edit Profile</a>
                                </li>
                            </ul>
                        </div>
                        <a class="btn_2 d-none d-lg-block" href="../../dashboard/logout.php">Logout</a>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <!-- feature_part start-->
    <section class="feature_part">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section_tittle text-center">
                        <h2>Hasil Perhitungan BMI Mu</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-3 col-sm-12">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="img/icon/feature_1.svg" alt=""></span>
                            <h4>Data Input</h4>
                            <p style="font-size: 22px; font-family:Noto Sans; font-style=normal; font-weight=bold">Jenis Kelamin : <?php echo"$kelamin";?></p>
                            <p style="font-size: 22px; font-family:Noto Sans; font-style=normal; font-weight=bold">Tinggi Badan  : <?php echo"$tb meter atau $tbm cm";?></p>
                            <p style="font-size: 22px; font-family:Noto Sans; font-style=normal; font-weight=bold">Berat Badan   : <?php echo"$bb kg";?></p>
                        </div>
                    </div>
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="img/icon/feature_2.svg" alt=""></span>
                            <h4>BMI Mu Adalah</h4>
                            <p style="font-size: 22px; font-family:Noto Sans; font-style=normal; font-weight=bold"><?php echo"".number_format($bmi);?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                        <div class="single_feature_img">
                            <img src="img/service.png" alt="">
                        </div>
                </div>
                <div class="col-lg-3 col-sm-12">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="img/icon/feature_1.svg" alt=""></span>
                            <h4>Kesimpulan</h4>
                            <p style="font-size: 22px; font-family:Noto Sans; font-style=normal; font-weight=bold"><?php echo"$hasil";?></p>
                            <p style="font-size: 22px; font-family:Noto Sans; font-style=normal; font-weight=bold"><?php echo"$hasil2 kg";?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature_part start-->
   

    <!-- our depertment part start-->
    <section class="our_depertment section_padding">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-xl-12">
                    <div class="depertment_content">
                        <div class="row justify-content-center">
                            <div class="col-xl-8">
                                <h2>Info Kategori Hasil BMI</h2>
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon"><img src="img/icon/feature_2.svg"
                                                    alt=""></span>
                                            <h4>BMI < 15.5</h4>
                                            <p>Mengalami anoreksia</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon"><img src="img/icon/feature_2.svg"
                                                    alt=""></span>
                                            <h4>BMI < 18.5</h4>
                                            <p>Mengalami kekurangan Gizi</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon"><img src="img/icon/feature_2.svg"
                                                    alt=""></span>
                                            <h4>BMI < 25</h4>
                                            <p>Memiliki Berat Badan Yang Normal</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon"><img src="img/icon/feature_2.svg"
                                                    alt=""></span>
                                            <h4>BMI < 30</h4>
                                            <p>Mengalami Overweight</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon"><img src="img/icon/feature_2.svg"
                                                    alt=""></span>
                                            <h4>BMI < 35</h4>
                                            <p>Mengalami Obesitas Level 1</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon"><img src="img/icon/feature_2.svg"
                                                    alt=""></span>
                                            <h4>BMI < 40</h4>
                                            <p>Mengalami Obesitas Level 2</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon"><img src="img/icon/feature_2.svg"
                                                    alt=""></span>
                                            <h4>BMI > 40</h4>
                                            <p>Mengalami Obesitas Akut</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our depertment part end-->
    
    <!-- jquery plugins here-->

    <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- owl carousel js -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <!-- contact js -->
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/contact.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
</body>

</html>