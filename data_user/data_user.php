<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>HiHealth</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&display=swap" rel="stylesheet" />
    <link href="fontawesome/css/all.min.css" rel="stylesheet" />
    <link href="css/tooplate-chilling-cafe.css" rel="stylesheet" />
<!--
Tooplate 2118 Chilling Cafe
https://www.tooplate.com/view/2118-chilling-cafe
-->
  </head>
  <body>
    <div class="tm-container">
      <div class="tm-main-content">
        <!-- Talk to us -->
        <section class="tm-section tm-section-small">
          <h2 class="tm-section-header">NAVIGATION BAR</h2>
          <p class="tm-mb-0">
          </p>
            <div>
              <ul id="navigation">
                <li><a href="../admin/index.php">HOME</a></li>
                <li><a href="data_user.php">DAFTAR USER</a></li>
                <li><a href="../daftar makanan/index.php">DAFTAR KALORI MAKANAN</a></li>
                <li><a href="../dashboard/logout.php">LOGOUT</a></li>
              </ul>
            </div>
        </section>
      </div>
  </div>
    <div class="tm-container">
      <div class="tm-text-white tm-page-header-container">
        <i class="fas fa-mug-hot fa-2x tm-page-icon"></i>
        <h1 class="tm-page-header">Daftar User Website HiHealth </h1>
      </div>
      <div class="tm-main-content"> 
        <div id="tm-intro-img" style="min-height: 0.0;"></div>

        <!-- Food Menu -->

        
          <section class="tm-section">
            <h2 class="tm-section-header"></h2>
            <div class="tm-responsive-table">
            <table>
              <tr class="tm-tr-header">
                <th>NO</th>
                <th>USERNAME</th>
			    <th>NAMA</th>
			    <th>EMAIL</th>
                <th>UMUR</th>
                <th>BERAT BADAN</th>
                <th>TINGGI BADAN</th>
			    <th> OPTION </th>
              </tr>
            <?php
		        include '../koneksi.php';
		        $no = 1;
		        $data = mysqli_query($koneksi, "select * from user");
		        while ($d = mysqli_fetch_array($data)) {
                    if($d['username'] != "admin"){
            ?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['username']; ?></td>
				<td><?php echo $d['Nama']; ?></td>
				<td><?php echo $d['email']; ?></td>
                <td><?php echo $d['umur']; ?></td>
                <td><?php echo $d['beratbadan']; ?></td>
                <td><?php echo $d['tinggibadan']; ?></td>
				<td>
					<a href="hapus_user.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
		<?php
		}}
		?>
            </table>
          </div>
        </section>
        <hr />
      </div>
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