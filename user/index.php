<!-- cek apakah sudah login -->
<?php
session_start();
if ($_SESSION['status'] != "login") {
	header("location:../login");
}
?>


<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>HiHealth </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

		<!-- CSS here -->
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/flaticon.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/slick.css">
            <link rel="stylesheet" href="assets/css/nice-select.css">
            <link rel="stylesheet" href="assets/css/style.css">
   </head>

   <body>
       
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logoo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    <header>
        <!-- Header Start -->
       <div class="header-area header-transparrent ">
            <div class="main-header header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-1">
                            <div class="logo">
                                <a href="index.html"><img src="assets/img/logo/logoo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-8">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav> 
                                    <ul id="navigation">    
                                        <li><a href="../perhitungan_bmi/menu_perhitungan.php">Perhitungan BMI</a></li>
                                        <li><a href="../perhitungan_kalori/menu_perhitungank.php">Perhitungan Kalori</a></li>
                                        <li><a href="#">Daftar Makanan dan Kalori</a></li>
                                        <li><a href="edit_profile.php">Edit Profile</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>             
                        <div class="col-xl-2 col-lg-2 col-md-3">
                            <div class="header-right-btn f-right d-none d-lg-block">
                                <a href="../dashboard/logout.php" class="btn header-btn">Log Out</a>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
       </div>
        <!-- Header End -->
    </header>

    <main>

        <!-- Slider Area Start-->
        <div class="slider-area ">
            <div class="slider-active">
                <div class="single-slider slider-height d-flex align-items-center" data-background="assets/img/hero/h1_hero.png">
                    <div class="container">
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-7 col-md-9 ">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInLeft" data-delay=".4s">We Care<br> About Your Healthy</h1>
                                    <p data-animation="fadeInLeft" data-delay=".6s"></p>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn" data-animation="fadeInLeft" data-delay=".8s">
                                        <a class="btn hero-btn"><h4>Welcome, <?php echo $_SESSION['username']; ?>!</h4></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="hero__img d-none d-lg-block" data-animation="fadeInRight" data-delay="1s">
                                    <img src="assets/img/hero/doctor.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider slider-height d-flex align-items-center" data-background="assets/img/hero/h1_hero.png">
                    <div class="container">
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-7 col-md-9 ">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInLeft" data-delay=".4s">We Collect<br> High Quality Leads</h1>
                                    <p data-animation="fadeInLeft" data-delay=".6s">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravi.</p>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn" data-animation="fadeInLeft" data-delay=".8s">
                                        <a href="industries.html" class="btn hero-btn">Contact Us</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="hero__img d-none d-lg-block" data-animation="fadeInRight" data-delay="1s">
                                    <img src="assets/img/hero/hero_right.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider Area End-->
        <!-- What We do start-->
        <div class="what-we-do we-padding">
            <div class="container">
                <!-- Section-tittle -->
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-tittle text-center">
                            <h2>What We Will Do For Your Healthy​</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-do text-center mb-30">
                            <div class="do-icon">
                                <span  class="flaticon-tasks"></span>
                            </div>
                            <div class="do-caption">
                                <h4>BMR (Bassal Metabolic) </h4>
                                <p>BMR adalah kebutuhan kalori yang tubuh Anda butuhkan untuk melakukan aktivitas basalnya. BMR bisa digunakan untuk menghitung kalori yang anda butuhkan setiap harinya loh.</p>
                                <p>Yuk Buruan Cek BMR dan Kebutuhan Kalori Mu Setiap Harinya Sekarang Juga !</p>
                            </div>
                            <div class="do-btn">
                                <a href="../perhitungan_kalori/menu_perhitungank.php"><i class="ti-arrow-right"></i> ayo hitung</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-do active text-center mb-30">
                            <div class="do-icon">
                                <span  class="flaticon-social-media-marketing"></span>
                            </div>
                            <div class="do-caption">
                                <h4>BMI ( Body Mass Index )</h4>
                                <p>BMI merupakan teknik untuk menghitung index berat badan, sehingga dapat diketahui kategori tubuh kita apakah tergolong kurus, normal dan obesitas (kegemukan).</p>
                                <p>Yuk Buruan Cek BMI Mu Sekarang Juga Untuk Mengetahui Berat Badan Ideal Mu !</p>
                            </div>
                            <div class="do-btn">
                                <a href="../perhitungan_bmi/menu_perhitungan.php"><i class="ti-arrow-right"></i> ayo hitung</a>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-4 col-md-6">
                        <div class="single-do text-center mb-30">
                            <div class="do-icon">
                                <span  class="flaticon-project"></span>
                            </div>
                            <div class="do-caption">
                                <h4>Kalori Makanan</h4>
                                <p>Apakah kamu tahu setiap kita makan makanan tentunya harus memenuhi asupan kalori yang dibutuhkan kita setiap harinya</p>
                                <p>Yuk Buruan Cek Daftar Makanan Beserta Kalorinya Disini !</p>
                            </div>
                            <div class="do-btn">
                                <a href="../dashboard/data_food.php"><i class="ti-arrow-right"></i> ayo lihat</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- What We do End-->
        
        <!-- Visit Stuffs Start -->
        <div class="visit-area fix visite-padding">
            <div class="container">
                <!-- Section-tittle -->
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 pr-0">
                        <div class="section-tittle text-center">
                            <h2>Tips and Tricks !</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid p-0">
                <div class="row ">
                    <div class="col-lg-3 col-md-4">
                        <div class="single-visited mb-30">
                            <div class="visited-img">
                                <img src="assets/img/visit/visit_1s.jpg" alt="">
                            </div>
                            <div class="visited-cap">
                                <h3>Istirahat Yang Cukup</h3>
                                <p> 7-8 jam setiap hari ( dewasa )</p>
                            </div>
                        </div>
                    </div> 
                     <div class="col-lg-3 col-md-4">
                        <div class="single-visited mb-30">
                            <div class="visited-img">
                                <img src="assets/img/visit/visit_2s.jpg" alt="">
                            </div>
                            <div class="visited-cap">
                                <h3>Olahraga</h3>
                                <p>Menciptakan tubuh yang sehat</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="single-visited mb-30">
                            <div class="visited-img">
                                <img src="assets/img/visit/visit_3s.jpg" alt="">
                            </div>
                            <div class="visited-cap">
                                <h3>Menjaga Kebersihan</h3>
                                <p>Baik lingkungan maupun pribadi</p>
                            </div>
                        </div>
                    </div> 
                    <div class="col-lg-3 col-md-4">
                        <div class="single-visited mb-30">
                            <div class="visited-img">
                                <img src="assets/img/visit/visit_4s.jpg" alt="">
                            </div>
                            <div class="visited-cap">
                                <h3>Makanan Bergizi</a></h3>
                                <p>Mengandung unsur 4 sehat 5 sempurna.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Visit Stuffs Start -->
         <!-- Testimonial Start -->
         <div class="testimonial-area">
            <div class="container">
               <div class="testimonial-main">
                    <!-- Section-tittle -->
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-5  col-md-8 pr-0">
                            <div class="section-tittle text-center">
                                <h2>Yuk Lihat Dulu</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                            <div class="col-lg-10 col-md-9">
                                <div class="h1-testimonial-active">
                                    <!-- Single Testimonial -->
                                    <div class="single-testimonial text-center">
                                        <div class="testimonial-caption ">
                                            <div class="testimonial-top-cap">
                                                <p>Jaga tubuhmu. Itulah satu-satunya tempat yang kamu miliki untuk hidup.</p>
                                            </div>
                                            <!-- founder -->
                                            <div class="testimonial-founder d-flex align-items-center justify-content-center">
                                                <div class="founder-img">
                                                    <img src="assets/img/testmonial/testimonials.png" alt="">
                                                </div>
                                            <div class="founder-text">
                                                <span>Jim Rohn</span>
                                            </div>
                                            </div>
                                        </div>
                                    </div><!-- Single Testimonial -->
                                    <div class="single-testimonial text-center">
                                        <div class="testimonial-caption ">
                                            <div class="testimonial-top-cap">
                                                <p>Kesehatan adalah renungan yang pertama dan tidur adalah syarat untuk mendapatkannya.</p>
                                            </div>
                                            <!-- founder -->
                                            <div class="testimonial-founder d-flex align-items-center justify-content-center">
                                                <div class="founder-img">
                                                    <img src="assets/img/testmonial/testimonials.png" alt="">
                                                </div>
                                            <div class="founder-text">
                                                <span>Raplph Waldo Emerson</span>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
               </div>
            </div>
        </div>
        <!-- Testimonial End -->

        <!-- Tips Triks Start -->
        <div class="tips-triks-area tips-padding">
            <div class="container">
                 <!-- Section-tittle -->
                 <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 col-md-8 pr-0">
                        <div class="section-tittle text-center">
                            <h2>Website Ini Dibuat Oleh</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-tips mb-50">
                            <div class="tips-img">
                                <img src="assets/img/tips/tips_1.png" alt="">
                            </div>
                            <div class="tips-caption">
                                <h4>Jabal Rachmah</h4>
                                <span><h5>1103184016</h5></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-tips mb-50">
                            <div class="tips-img">
                                <img src="assets/img/tips/tips_2.png" alt="">
                            </div>
                            <div class="tips-caption">
                                <h4>Dian Rezky Wulandari</h4>
                                <span><h5>1103184022</h5></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-tips mb-50">
                            <div class="tips-img">
                                <img src="assets/img/tips/tips_3.png" alt="">
                            </div>
                            <div class="tips-caption">
                                <h4>Mohammad Naudfal Nabil Abdillah</h4>
                                <span><h5>1103184062</h5></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-tips mb-50">
                            <div class="tips-img">
                                <img src="assets/img/tips/tips_4.png" alt="">
                            </div>
                            <div class="tips-caption">
                                <h4>Denda Rania Ratu Kelanswara</h4>
                                <span><h5>1103184072</h5></span>
                            </div>
                        </div>
                    </div>
                     <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-tips mb-50">
                            <div class="tips-img">
                                <img src="assets/img/tips/tips_5.png" alt="">
                            </div>
                            <div class="tips-caption">
                                <h4>Damas Adiyanto</h4>
                                <span><h5>1103184117</h5></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Tips Triks End -->
         <!-- have-project Start-->
         <div class="have-project">
            <div class="container">
                <div class="haveAproject"  data-background="assets/img/team/have.jpg">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-7 col-lg-9 col-md-12">
                            <div class="wantToWork-caption">
                                <h2>Butuh Bantuan Untuk Menjalankan Website ?</h2>
                                <p>Kami akan membantu anda untuk memaksimalkan penggunaan website ini. Kalian bisa mendownload buku panduan berbentuk pdf dengan klik tombol ini</p>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-3 col-md-12">
                           <div class="wantToWork-btn f-right">
                                <a href="#" class="btn btn-ans">Download disini</a>
                           </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- have-project End -->

   
	<!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/slick.min.js"></script>
        <!-- Date Picker -->
        <script src="./assets/js/gijgo.min.js"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="./assets/js/wow.min.js"></script>
		<script src="./assets/js/animated.headline.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="./assets/js/jquery.scrollUp.min.js"></script>
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>
        
        <!-- contact js -->
        <script src="./assets/js/contact.js"></script>
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="./assets/js/plugins.js"></script>
        <script src="./assets/js/main.js"></script>
        
    </body>
</html>