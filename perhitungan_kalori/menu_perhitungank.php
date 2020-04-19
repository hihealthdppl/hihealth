<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Hitung BMI HiHealth</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	    	<a class="navbar-brand"><span>HiHealth</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item active"><a href="../user/index.php" class="nav-link">Home</a></li>
	        	<li class="nav-item"><a href="../perhitungan_bmi/menu_perhitungan.php" class="nav-link">Perhitungan BMI</a></li>
	        	<li class="nav-item"><a href="menu_perhitungank.php" class="nav-link">Perhitungan Kalori</a></li>
	        	<li class="nav-item"><a href="../dashboard/data_food.php" class="nav-link">Daftar Kalori Makanan</a></li>
	          <li class="nav-item"><a href="../user/edit_profile.php" class="nav-link">Edit Profile</a></li>
	          <li class="nav-item"><a href="../dashboard/logout.php" class="nav-link">Logout</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <div class="hero-wrap js-fullheight" style="background-image: url('images/bg_1s.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate">
          	<h2 class="subheading">Ketahui kalori yang dibutuhkan oleh tubuhmu sekrang juga</h2>
          	<h1 class="mb-4">Ayo Hitung Kalori Mu!</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-book ftco-no-pt ftco-no-pb">
    	<div class="container">
	    	<div class="row justify-content-end">
	    		<div class="col-lg-4">
						<form method="POST" action="hasil_kalori/index.php" class="appointment-form">
							<h3 class="mb-3">Calculator Perhitungan Kalori</h3>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
			    					<input type="text" name="bb" class="form-control" placeholder="Berat Badan">
			    				</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
			    					<input type="text" name="umur" class="form-control" placeholder="Umur">
			    				</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
			    					<input type="text" name="tb" class="form-control" placeholder="Tinggi Badan">
			    				</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
			    					<div class="form-field">
	          					<div class="select-wrap">
	                      <div class="icon"><span class="fa fa-chevron-down"></span></div>
	                      <select name="kelamin" class="form-control">
	                        <option value="Laki-laki">Laki-laki</option>
	                        <option value="Perempuan">Perempuan</option>
	                      </select>
	                    </div>
			              </div>
			    				</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
			    					<div class="form-field">
	          					<div class="select-wrap">
	                      <div class="icon"><span class="fa fa-chevron-down"></span></div>
	                      <select name="kegiatan" class="form-control">
	                      	<option value="TidakAktif">Tidak Aktif</option>
	                        <option value="CukupAktif">Cukup Aktif (Olahraga 1-3 kali/minggu)</option>
							<option value="Aktif">Aktif (Olahraga 3-5 kali/minggu)n</option>
							<option value="SangatAktif">Sangat Aktif (Olahraga 6-7 kali/minggu)</option>
	                      </select>
	                    </div>
			              </div>
			    				</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
			    					<div class="form-field">
	          					<div class="select-wrap">
	                      <div class="icon"><span class="fa fa-chevron-down"></span></div>
	                      <select name="pemakan" class="form-control">
						  <option value="LactoVegetarian">Lacto Vegetarian (Tidak makan daging,ikan,unggas dan telur namun masih mengonsumsi produk yang dihasilkan dari susu)</option>
                        <option value="OvoVegetarian">Ovo Vegetarian (Tidak mengonsumsi daging,ikan,unggas dan produk susu, namun masih memperbolehkan konsumsi telur)</option>
                        <option value="NonVegetarian">Non Vegetarian</option>
	                      </select>
	                    </div>
			              </div>
			    				</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
			            	<input type="submit" name="hitung" value="Hitung Kalori" class="btn btn-primary py-3 px-4">
							
						</div>
								</div>
							</div>
						
	    			</form>
	    		</div>
	    	</div>
	    </div>
    </section>
   
    <section class="ftco-section ftco-services">
    		<div class="row">
          <div class="col-md-4 d-flex services align-self-stretch px-4 ftco-animate">
            <div class="d-block services-wrap text-center">
              <div class="img" style="background-image: url(images/s1s.jpg);"></div>
              <div class="media-body py-4 px-3">
                <h3 class="heading">Perhitungan BMI</h3>
                <p>Yuk ketahui Berat Badan Idealmu Dengan Hitung BMI Sekarang Juga !</p>
                <p><a href="../perhitungan_bmi/menu_perhitungan.php" class="btn btn-primary">Ayo Hitung</a></p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex services align-self-stretch px-4 ftco-animate">
            <div class="d-block services-wrap text-center">
              <div class="img" style="background-image: url(images/s2s.jpg);"></div>
              <div class="media-body py-4 px-3">
                <h3 class="heading">Daftar Kalori Makanan dan Minuman</h3>
                <p>Yuk Kita Lihat Jumlah Kalori Yang Ada Di Makanan dan Minuman Kita Setiap Hari !</p>
                <p><a href="#" class="btn btn-primary">Ayo Lihat</a></p>
              </div>
            </div>    
          </div>
          <div class="col-md-4 d-flex services align-self-stretch px-4 ftco-animate">
            <div class="d-block services-wrap text-center">
              <div class="img" style="background-image: url(images/s3ss.jpg);"></div>
              <div class="media-body py-4 px-3">
                <h3 class="heading">Edit Profile</h3>
                <p>Yuk Edit Profile Kalian Agar Data Kalian Terupdate !</p>
                <p><a href="../user/edit_profile.php" class="btn btn-primary">Yuk Update</a></p>
              </div>
            </div>      
          </div>
        </div>
    	</div>
	</section>
	
    <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2>What People Say About Health</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
							<div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image: url(images/person_1s.png)">
                  </div>
                  <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="fa fa-quote-left"></i>
                    </span>
                    <p>Untuk menikmati cahaya kesehatan yang baik, Anda harus berolahraga.</p>
                    <p class="name">Gene Tunney</p>
                    <span class="position">Irish American professional boxer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image: url(images/person_2s.png)">
                  </div>
                  <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="fa fa-quote-left"></i>
                    </span>
                    <p>Kesehatan yang baik bukanlah sesuatu yang dapat kita beli. Namun, sesuatu yang dapat menjadi tabungan yang sangat berharga.</p>
                    <p class="name">Anne Wilson Schaef</p>
                    <span class="position">internationally known author, speaker, consultant, and seminar leader</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image: url(images/ss.png)">
                  </div>
                  <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="fa fa-quote-left"></i>
                    </span>
                    <p>Kesehatan dan keceriaan secara alami melahirkan satu sama lain.</p>
                    <p class="name">Joseph Addison</p>
                    <span class="position">English essayist, poet, playwright and politician</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image: url(images/person_4s.png)">
                  </div>
                  <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="fa fa-quote-left"></i>
                    </span>
                    <p>Jika engkau mencintai dirimu, engkau tak akan merusak kesehatan jiwa dan ragamu dengan kebiasaan buruk</p>
                    <p class="name">Mario Teguh</p>
                    <span class="position">Motivator in Indonesia</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image: url(images/person_5s.png)">
                  </div>
                  <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="fa fa-quote-left"></i>
                    </span>
                    <p>Makan dengan sehat, tidur dengan baik, bernapas dengan dalam, bergerak dengan harmoni</p>
                    <p class="name">Jean Pierre Barral</p>
                    <span class="position">a Physical Therapist.</span>
                  </div>
                </div>
              </div>
						</div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-6 wrap-about">
						<div class="img img-2 mb-4" style="background-image: url(images/abouts.jpg);">
						</div>
					</div>
					<div class="col-md-6 wrap-about ftco-animate">
	          <div class="heading-section">
	          	<div class="pl-md-5">
		            <h2 class="mb-2">Tips and Tricks</h2>
	            </div>
	          </div>
	          <div class="pl-md-5">
							<p>Kita akan memberikan beberapa tips untuk anda mengenai kesehatan</p>
							<div class="row">
		            <div class="services-2 col-lg-6 d-flex w-100">
		              <div class="icon d-flex justify-content-center align-items-center">
		            		<span class="flaticon-diet"></span>
		              </div>
		              <div class="media-body pl-3">
		                <h3 class="heading">4 Sehat 5 Sempurna</h3>
		                <p>Mulailah konsumsi makanan yang mengandung unsur 4 sehat 5 sempurna</p>
		              </div>
		            </div> 
		            <div class="services-2 col-lg-6 d-flex w-100">
		              <div class="icon d-flex justify-content-center align-items-center">
		            		<span class="flaticon-workout"></span>
		              </div>
		              <div class="media-body pl-3">
		                <h3 class="heading">Istirahat Yang Cukup</h3>
		                <p>Orang dewasa membutuhkan 7-8 jam untuk tidur sehingga menciptakan tubuh yang sehat</p>
		              </div>
		            </div>
		            <div class="services-2 col-lg-6 d-flex w-100">
		              <div class="icon d-flex justify-content-center align-items-center">
		            		<span class="flaticon-diet-1"></span>
		              </div>
		              <div class="media-body pl-3">
		                <h3 class="heading">Makan Yang Teratur</h3>
		                <p>Kita Dianjurkan Makan 3x Sehari Agar Tubuh Tidak Kekurangan Nutrisi</p>
		              </div>
		            </div>      
		            <div class="services-2 col-lg-6 d-flex w-100">
		              <div class="icon d-flex justify-content-center align-items-center">
		            		<span class="flaticon-first"></span>
		              </div>
		              <div class="media-body pl-3">
		                <h3 class="heading">Olahraga Teratur</h3>
		                <p>Untuk Membuat Tubuh Mu Tetap Segar dan Fit, Jangan Lupa Berolahraga</p>
		              </div>
		            </div>
		            </div>
		          </div>  
						</div>
					</div>
				</div>
			</div>
		</section>
	
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>


    
  </body>
</html>