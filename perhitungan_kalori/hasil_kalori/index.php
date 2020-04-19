<?php

// Action Form

if (isset($_POST['hitung'])) {

    //Input Form

    $bb       = $_POST['bb'];
    $tb       = $_POST['tb'];
    $kelamin  = $_POST['kelamin'];
    $umur     = $_POST['umur'];
    $kegiatan = $_POST['kegiatan'];
    $pemakan  = $_POST['pemakan'];

    /* RUMUS BMR 

    BMR Pria = 88.362 + (13.397 x berat badan [kg]) + (4.799 x tinggi badan [cm]) – (5.677 x umur)
    BMR Wanita = 447.593 + (9.247 x berat badan [kg]) + (3.098 x tinggi badan [cm]) – (4.33 x umur)
    
    Level Aktivitas Fisik
    
    Tidak aktif: TEE = BMR x 1.2
    Cukup aktif, berolahraga 1-3 kali/minggu: TEE = BMR x 1.375
    Aktif, berolahraga 3-5 kali/minggu: TEE = BMR x 1.55
    Sangat aktif, berolahraga 6-7 kali/minggu: TEE = BMR x 1.725

    */

    if ($kelamin == "Perempuan") {

        $BMR = 447.593 + (9.247 * $bb) + (3.098 * $tb) - (4.33 * $umur);
        if ($kegiatan == "TidakAktif") {
            $TEE = $BMR * 1.2;
            $TEEc = $TEE * 1000;
        }
        if ($kegiatan == "CukupAktif") {
            $TEE = $BMR * 1.375;
            $TEEc = $TEE * 1000;
        }
        if ($kegiatan == "Aktif") {
            $TEE = $BMR * 1.55;
            $TEEc = $TEE * 1000;
        }
        if ($kegiatan == "SangatAktif") {
            $TEE = $BMR * 1.725;
            $TEEc = $TEE * 1000;
        }

        if ($pemakan == "NonVegetarian") {
            if ($TEE >= 1600 && $TEE < 1800) {
                $hasil = include 'nonvegetarian_p1600.php';
            }
            if ($TEE >= 1800 && $TEE < 2000) {
                $hasil = include 'nonvegetarian_p1800.php';
            }
            if ($TEE >= 2000 && $TEE < 2200) {
                $hasil = include 'nonvegetarian_p2000.php';
            }
            if ($TEE >= 2200 && $TEE < 2600) {
                $hasil = include 'nonvegetarian_p2200.php';
            }
            if ($TEE >= 2600 && $TEE <= 3000) {
                $hasil = include 'nonvegetarian_p2600.php';
            }
        }
        if ($pemakan == "OvoVegetarian") {
            if ($TEE >= 1300 && $TEE < 1600) {
                $hasil = include 'ovovegetarian_p1300.php';
            }
            if ($TEE >= 1600 && $TEE < 1900) {
                $hasil = include 'ovovegetarian_p1600.php';
            }
            if ($TEE >= 1900 && $TEE < 2200) {
                $hasil = include 'ovovegetarian_p1900.php';
            }
            if ($TEE >= 2200 && $TEE < 2700) {
                $hasil = include 'ovovegetarian_p2200.php';
            }
            if ($TEE >= 2700 && $TEE <= 3000) {
                $hasil = include 'ovovegetarian_p2700.php';
            }
        }
        if ($pemakan == "LactoVegetarian") {
            if ($TEE >= 1300 && $TEE < 1600) {
                $hasil = include 'lactoovo_p1300.php';
            }
            if ($TEE >= 1600 && $TEE < 1900) {
                $hasil = include 'lactoovo_p1600.php';
            }
            if ($TEE >= 1900 && $TEE < 2200) {
                $hasil = include 'lactoovo_p1900.php';
            }
            if ($TEE >= 2200 && $TEE < 2700) {
                $hasil = include 'lactoovo_p2200.php';
            }
            if ($TEE >= 2700 && $TEE < 3000) {
                $hasil = include 'lactoovo_p2700.php';
            }
        }
    } else if ($kelamin == "Laki") {
        $BMR = 88.362 + (13.397 * $bb) + (4.799 * $tb) - (5.677 * $umur);

        if ($kegiatan == "TidakAktif") {
            $TEE = $BMR * 1.2;
            $TEEc = $TEE * 1000;
        }
        if ($kegiatan == "CukupAktif") {
            $TEE = $BMR * 1.375;
            $TEEc = $TEE * 1000;
        }
        if ($kegiatan == "Aktif") {
            $TEE = $BMR * 1.55;
            $TEEc = $TEE * 1000;
        }
        if ($kegiatan == "SangatAktif") {
            $TEE = $BMR * 1.725;
            $TEEc = $TEE * 1000;
        }

        if ($pemakan == "NonVegetarian") {
            if ($TEE >= 1600 && $TEE < 1800) {
                $hasil = include 'nonvegetarian_l1600.php';
            }
            if ($TEE >= 1800 && $TEE < 2000) {
                $hasil = include 'nonvegetarian_l1800.php';
            }
            if ($TEE >= 2000 && $TEE < 2200) {
                $hasil = include 'nonvegetarian_l2000.php';
            }
            if ($TEE >= 2200 && $TEE < 2700) {
                $hasil = include 'nonvegetarian_l2400.php';
            }
            if ($TEE >= 2700 && $TEE <= 3100) {
                $hasil = include 'nonvegetarian_l2700.php';
            }
        }
        if ($pemakan == "OvoVegetarian") {
            if ($TEE >= 1300 && $TEE < 1600) {
                $hasil = include 'ovovegetarian_l1300.php';
            }
            if ($TEE >= 1600 && $TEE < 1900) {
                $hasil = include 'ovovegetarian_l1600.php';
            }
            if ($TEE >= 1900 && $TEE < 2200) {
                $hasil = include 'ovovegetarian_l1900.php';
            }
            if ($TEE >= 2200 && $TEE < 2700) {
                $hasil = include 'ovovegetarian_l2200.php';
            }
            if ($TEE >= 2700 && $TEE <= 3000) {
                $hasil = include 'ovovegetarian_l2700.php';
            }
        }
        if ($pemakan == "LactoVegetarian") {
            if ($TEE >= 1300 && $TEE < 1600) {
                $hasil = include 'lactoovo_l1300.php';
            }
            if ($TEE >= 1600 && $TEE < 1900) {
                $hasil = include 'lactoovo_l1600.php';
            }
            if ($TEE >= 1900 && $TEE < 2200) {
                $hasil = include 'lactoovo_l1900.php';
            }
            if ($TEE >= 2200 && $TEE < 2700) {
                $hasil = include 'lactoovo_l2200.php';
            }
            if ($TEE >= 2700 && $TEE < 3000) {
                $hasil = include 'lactoovo_l2700.php';
            }
        }
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
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-center" id="navbarSupportedContent">
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
                        <h2>Hasil Perhitungan Kalori Mu</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-3 col-sm-12">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="img/icon/feature_1.svg" alt=""></span>
                            <h4>Data Input</h4>
                            <p style="font-size: 22px; font-family:Noto Sans; font-style=normal; font-weight=bold">Jenis Kelamin : <?php echo "$kelamin"; ?></p>
                            <p style="font-size: 22px; font-family:Noto Sans; font-style=normal; font-weight=bold">Tinggi Badan : <?php echo "$tb cm"; ?></p>
                            <p style="font-size: 22px; font-family:Noto Sans; font-style=normal; font-weight=bold">Berat Badan : <?php echo "$bb kg"; ?></p>
                            <p style="font-size: 22px; font-family:Noto Sans; font-style=normal; font-weight=bold">Umur : <?php echo "$umur tahun"; ?></p>
                            <p style="font-size: 22px; font-family:Noto Sans; font-style=normal; font-weight=bold">Kegiatan : <?php echo "$kegiatan"; ?></p>
                            <p style="font-size: 22px; font-family:Noto Sans; font-style=normal; font-weight=bold">Jenis Makanan : <?php echo "$pemakan"; ?></p>
                        </div>
                    </div>
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="img/icon/feature_2.svg" alt=""></span>
                            <h4>BMR Mu Adalah</h4>
                            <p style="font-size: 22px; font-family:Noto Sans; font-style=normal; font-weight=bold">Jumlah kalori MINIMAL setiap hari, supaya tubuh organ tubuh Anda bisa berfungsi</p>
                            <p style="font-size: 22px; font-family:Noto Sans; font-style=normal; font-weight=bold"><?php echo "" . number_format($BMR); ?></p>
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
                            <p style="font-size: 22px; font-family:Noto Sans; font-style=normal; font-weight=bold">Jumlah kalori TOTAL yang Anda butuhkan untuk menjalani aktivitas sehari-hari</p>
                            <p style="font-size: 22px; font-family:Noto Sans; font-style=normal; font-weight=bold"><?php echo "" . number_format($TEE);
                                                                                                                    echo " kkal"; ?></p>
                            <p style="font-size: 22px; font-family:Noto Sans; font-style=normal; font-weight=bold"><?php echo "Atau " . number_format($TEEc);
                                                                                                                    echo " kal"; ?></p>
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
                                <h2>Makanan Yang Disarankan</h2>
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon"><img src="img/icon/feature_2.svg" alt=""></span>
                                            <h4>Makan Pagi</h4>
                                            <p style="font-size: 22px; font-family:Noto Sans; font-style=normal; font-weight=bold"><?php
                                                                                                                                    include "lactoovo_l1300.php";
                                                                                                                                    pilih("pagi");
                                                                                                                                    ?></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon"><img src="img/icon/feature_2.svg" alt=""></span>
                                            <h4>Makan Siang</h4>
                                            <p style="font-size: 22px; font-family:Noto Sans; font-style=normal; font-weight=bold"><?php
                                                                                                                                    //include "lactoovo_l1300.php";
                                                                                                                                    pilih("siang");
                                                                                                                                    ?></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon"><img src="img/icon/feature_2.svg" alt=""></span>
                                            <h4>Makan Malam</h4>
                                            <p style="font-size: 22px; font-family:Noto Sans; font-style=normal; font-weight=bold"><?php
                                                                                                                                    //include "lactoovo_l1300.php";
                                                                                                                                    pilih("malam");
                                                                                                                                    ?></p>
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