<!DOCTYPE html>
<html lang="en">
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #808080;
  color: white;
}
</style>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>HiTKHealth</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&display=swap" rel="stylesheet" />
    <link href="fontawesome/css/all.min.css" rel="stylesheet" />
    <link href="css/tooplate-chilling-cafe.css" rel="stylesheet" />
<!--
Tooplate 2118 Chilling Cafe
https://www.tooplate.com/view/2118-chilling-cafe
-->
  </head>
  <body>
  <div class="topnav">
  <a class="active" href="../../dashboard/">Home</a>
  <a href="../kalori_kegiatan/">Daftar Kalori Kegiatan</a>
  <a href="../user/data_user.php">Daftar User</a>
  <a href="../dokter/data_dokter.php">Daftar Dokter</a>
  <a href="../obat/">Daftar Obat</a>
  <a href="../penyakit/">Daftar Penyakit</a>
  <a href="../../logout.php">Logout</a>
</div>

    <div class="tm-container">
      <div class="tm-main-content">
        
      </div>
  </div>
    <div class="tm-container">
      <div class="tm-text-white tm-page-header-container">
        <i class="fas fa-mug-hot fa-2x tm-page-icon"></i>
        <h1 class="tm-page-header">Daftar Kalori Setiap Makanan dan Minuman </h1>
      </div>
      <div class="tm-main-content"> 
        <div id="tm-intro-img"></div>

        <!-- Food Menu -->

        
          <section class="tm-section">
            <h2 class="tm-section-header">Makanan</h2>
            <div class="tm-responsive-table">
            <table>
              <tr class="tm-tr-header">
                <th> NO </th>
			          <th> NAMA MAKANAN </th>
                <th> BERAT </th>
                <th> KALORI </th>
                <th> UNIT </th>
			          <th> OPTION </th>
              </tr>
              <?php
                include '../../../koneksi.php';
                $no=1;
		            $data = mysqli_query($koneksi, "select * from makanan");
		            while ($d = mysqli_fetch_array($data)) {
                  if($d['jenis'] == "makanan"){
		          ?>
              <tr>
                <td><?php echo $no++; ?></>
                <td><?php echo $d['food']; ?></td>
				        <td><?php echo $d['berat']; ?></td>
				        <td><?php echo $d['kalori']; ?></td>
                <td><?php echo $d['satuan']; ?></td>
				        <td>
					          <a href="hapus_food.php?id=<?php echo $d['id']; ?>">HAPUS</a>
                    <a href="edit_food/index.php?id=<?php echo $d['id']; ?>">EDIT</a>
                </td>
              </tr>
              <?php
            }}?>
            </table>
          </div>
        </section>

        <!-- Drink Menu -->
        <section class="tm-section">
            <h2 class="tm-section-header">Minuman</h2>
            <div class="tm-responsive-table">
            <table>
              <tr class="tm-tr-header">
                <th> NO </th>
			          <th> NAMA MAKANAN </th>
                <th> BERAT </th>
                <th> KALORI </th>
                <th> UNIT </th>
			          <th> OPTION </th>
              </tr>
              <?php
                include '../../../koneksi.php';
                $no=1;
		            $data = mysqli_query($koneksi, "select * from makanan");
		            while ($d = mysqli_fetch_array($data)) {
                  if($d['jenis'] == "minuman"){
		          ?>
              <tr>
                <td><?php echo $no++; ?></>
                <td><?php echo $d['food']; ?></td>
				        <td><?php echo $d['berat']; ?></td>
				        <td><?php echo $d['kalori']; ?></td>
                <td><?php echo $d['satuan']; ?></td>
				        <td>
					          <a href="hapus_food.php?id=<?php echo $d['id']; ?>">HAPUS</a>
                    <a href="edit_food/index.php?id=<?php echo $d['id']; ?>">EDIT</a>
                </td>
              </tr>
              <?php
            }}?>
            </table>
          </div>
        </section>

        <hr />
      </div>

      <footer>
        <p class="tm-text-white tm-footer-text" style="font-size: 40px; font-family:Noto Sans; font-style=normal; font-weight=bold">
          INGIN MENAMBAHKAN DATA MAKANAN ? KLIK DISINI
          <p class="tm-text-white tm-footer-text" style="font-size: 40px; font-family:Noto Sans; font-style=normal; font-weight=bold"><a href="tambah_food/index.php" class="tm-footer-link">Tambah Data Makanan</a></p>
        </p>
      </footer>      

    </div>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script>
      $(function() {
        // Adjust intro image height based on width.
        $(window).resize(function() {
          var img = $("#tm-intro-img");
          var imgWidth = img.width();

          // 640x425 ratio
          var imgHeight = (imgWidth * 425) / 640;

          if (imgHeight < 300) {
            imgHeight = 300;
          }

          img.css("min-height", imgHeight + "px");
        });
      });
    </script>
  </body>
</html>