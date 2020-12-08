<?php
require_once('./koneksi.php');
require_once('./function/home.php');
if (isset($_GET['pesan'])) {
    if ($_GET['pesan'] == "logout") {
        echo "<script>alert('Logout Berhasil, Anda telah keluar')</script>";
    }
}
?>
<?php require_once('./header/home_header.php') ?>

<body>
    <main>
        <!-- Slider Area Start-->
        <div class="slider-area ">
            <div class="slider-active">
                <div class="single-slider slider-height slider-padding sky-blue d-flex align-items-center">
                    <div class="container">
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-6 col-md-9 ">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInUp" data-delay=".6s">Welcomez, Nice To See You Again</h1>
                                    <?php if (!isset($_SESSION['status'])) {
                                        isNotLogin();
                                    } else {
                                        isLogin($_SESSION['username']);
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="hero__img d-none d-lg-block f-right" data-animation="fadeInRight" data-delay="1s">
                                    <img src="assets/img/bgaa.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider slider-height slider-padding sky-blue d-flex align-items-center">
                    <div class="container">
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-6 col-md-9 ">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInUp" data-delay=".6s">Welcome,<br>Nice To See You Again</h1>
                                    <p data-animation="fadeInUp" data-delay=".8s">Silahkan Melakukan SIGN IN Jika Sudah Mempunyai Akun Atau Silahkan Lakukan SIGN UP Jika Ingin Bergabung Bersama Kami</p>
                                    <!-- Slider btn -->
                                    <div class="slider-btns">
                                        <!-- Hero-btn -->
                                        <a data-animation="fadeInLeft" data-delay="1.0s" href="dokter/login/index.php" class="btn radius-btn">SIGN IN DOKTER</a>
                                        <a data-animation="fadeInLeft" data-delay="1.0s" href="dokter/register/index.php" class="btn radius-btn">SIGN UP DOKTER</a>
                                        <!-- Video Btn -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="hero__img d-none d-lg-block f-right" data-animation="fadeInRight" data-delay="1s">
                                    <img src="assets/img/bgaa.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider Area End -->
        <!-- Services Area Start -->
        <section class="service-area sky-blue section-padding2">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-tittle text-center">
                            <h2>What We Can Do<br>For Your Healthy</h2>
                        </div>
                    </div>
                </div>
                <!-- Section caption -->
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="services-caption text-center mb-30">
                            <div class="service-icon">
                                <span class="flaticon-businessman"></span>
                            </div>
                            <div class="service-cap">
                                <h4><a href="datagabungan/menu_artikel/index.php">Artikel</a></h4>
                                <p>COVID-19</p>
                                <p>Kesehatan</p>
                                <p>Forum Diskusi</p>
                                <p>PODCAST Kesehatan</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="services-caption active text-center mb-30">
                            <div class="service-icon">
                                <span class="flaticon-pay"></span>
                            </div>
                            <div class="service-cap">
                                <h4><a href="datagabungan/menu_referensi/index.php">Referensi</a></h4>
                                <p>Daftar Obat</p>
                                <p>Rumah Sakit</p>
                                <p>Penginapan Sekitar Rumah Sakit</p>
                                <p>Daftar Penyakit</p>
                                <p>Daftar Kalori Kegiatan</p>
                                <p>Daftar Kalori Makanan</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="services-caption text-center mb-30">
                            <div class="service-icon">
                                <span class="flaticon-businessman"></span>
                            </div>
                            <div class="service-cap">
                                <h4><a href="datagabungan/menu_kalkulator/index.php">Kalkulator Kesehatan</a></h4>
                                <p>BMI</p>
                                <p>BMR</p>
                                <p>Wanita</p>
                                <p>Kehamilan</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="services-caption text-center mb-30">
                            <div class="service-icon">
                                <span class="flaticon-plane"></span>
                            </div>
                            <div class="service-cap">
                                <h4><a href="datagabungan/menu_konsultasi/index.php">Konsultasi</a></h4>
                                <p>Analisa Gejala Penyakit</p>
                                <p>Konsultasi Dengan Dokter</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="services-caption text-center mb-30">
                            <div class="service-icon">
                                <span class="flaticon-businessman"></span>
                            </div>
                            <div class="service-cap">
                                <h4><a href="#">User Guide</a></h4>
                                <p>Ketahui Cara Penggunaan Website HiTKHealth Disini !</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="services-caption text-center mb-30">
                            <div class="service-icon">
                                <span class="flaticon-plane"></span>
                            </div>
                            <div class="service-cap">
                                <h4>Thank You</h4>
                                <p>Terimakasih Sudah Meenggunakan Website Kami</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Services Area End -->
        <!-- Our Customer Start -->
        <div class="our-customer section-padd-top30">
            <div class="container-fluid">
                <div class="our-customer-wrapper">
                    <!-- Section Tittle -->
                    <div class="row d-flex justify-content-center">
                        <div class="col-xl-8">
                            <div class="section-tittle text-center">
                                <h2>What Our Customers<br> Have to Say</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="customar-active dot-style d-flex dot-style">
                                <div class="single-customer mb-100">
                                    <div class="what-img">
                                        <img src="assets/img/shape/form_icon.png" alt="">
                                    </div>
                                    <div class="what-cap">
                                        <h4>Jim Rohn</h4>
                                        <p>Jaga tubuhmu. Itulah satu-satunya tempat yang kamu miliki untuk hidup.</p>
                                    </div>
                                </div>

                                <div class="single-customer mb-100">
                                    <div class="what-img">
                                        <img src="assets/img/shape/form_icon.png" alt="">
                                    </div>
                                    <div class="what-cap">
                                        <h4>Raplph Waldo Emerson</h4>
                                        <p>Kesehatan adalah renungan yang pertama dan tidur adalah syarat untuk mendapatkannya.</p>
                                    </div>
                                </div>

                                <div class="single-customer mb-100">
                                    <div class="what-img">
                                        <img src="assets/img/shape/form_icon.png" alt="">
                                    </div>
                                    <div class="what-cap">
                                        <h4><a href="#">Dani Kaizen</a></h4>
                                        <p>Kenikmatan hidup paling nikmat di dunia ini adalah sehat karena apa pun yang kamu miliki di dunia ini tak akan kamu nikmati, jika kamu sakit</p>
                                    </div>
                                </div>

                                <div class="single-customer mb-100">
                                    <div class="what-img">
                                        <img src="assets/img/shape/form_icon.png" alt="">
                                    </div>
                                    <div class="what-cap">
                                        <h4>Denis Waitley</h4>
                                        <p>Waktu dan kesehatan adalah dua aset berharga yang tidak dikenali dan hargai sampai keduanya hilang</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Customer End -->

    </main>
    <?php require('./footer/home_footer.php') ?>