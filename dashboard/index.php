<!-- cek apakah sudah login -->
<?php
session_start();
if ($_SESSION['status'] != "login") {
	header("location:../login");
}
?>

<!DOCTYPE html>
<html>

<head>
	<title>HiHealth</title>
</head>

<body>
	<h2>Welcome</h2>
	<h4>Welcome, <?php echo $_SESSION['username']; ?>! You're successfull to login !</h4>
	<br />
	<br />
	<table>
		<td><a href="logout.php">LOGOUT</a></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td><a href="menu_perhitungan.php">MENU PERHITUNGAN BMI</a></td>
		<td><a href="menu_kalori.php">MENU PERHITUNGAN KALORI MAKANAN</a>
		<td>
	</table>
</body>

</html>