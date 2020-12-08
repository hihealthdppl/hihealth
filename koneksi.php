<?php
session_start();
//Membuat koneksi database
$koneksi = mysqli_connect("localhost", "root", "", "hitkheal_tubesdpplnew");

// Check connection
if (mysqli_connect_errno()) {
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
