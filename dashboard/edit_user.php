<!DOCTYPE html>
<html>

<head>
	<title>HiHealth</title>
</head>

<body>

	<h2>DATA MAHASISWA</h2>
	<br />
	<a href="index.php">KEMBALI</a>
	<br />
	<br />
	<h3>MENU EDIT PROFILE</h3>

	<?php
	include '../koneksi.php';
	//Mengambil id user dengan mengecek session
	session_start();
	$usernamesesi = $_SESSION['username'];
	$data = mysqli_query($koneksi, "select * from user where username = '$usernamesesi'");
	//$id = $_GET['id'];

	while ($d = mysqli_fetch_array($data)) {
	?>
		<form method="post" action="update.php">
			<table>
				<tr>
					<td>Nama</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="nama" value="<?php echo $d['Nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>Username</td>
					<td><input type="text" name="usernames" value="<?php echo $d['username']; ?>"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="text" name="ps" value="<?php echo $d['sandi']; ?>"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="emails" value="<?php echo $d['email']; ?>"></td>
				</tr>
				<tr>
					<td>Tinggi Badan</td>
					<td><input type="number" name="tb" value="<?php echo $d['tinggibadan']; ?>"></td>
				</tr>
				<tr>
					<td>Berat Badan</td>
					<td><input type="number" name="bb" value="<?php echo $d['beratbadan']; ?>"></td>
				</tr>
				<tr>
					<td>Umur</td>
					<td><input type="number" name="ages" value="<?php echo $d['umur']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>
			</table>
		</form>
	<?php
	}
	?>

</body>

</html>