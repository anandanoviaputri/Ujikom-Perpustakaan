<?php
	//koneksi database
	include..'/koneksi/koneksi.php';

	//menangkap data yang dikirim dari form
	$nis = $_POST['nis'];
	$namalengkap = $_POST['nama lengkap'];
	$email = $_POST['email'];
	$alamat = $_POST['alamat'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$level = $_POST['level'];

	//menginput data ke database
	mysqli query($koneksi,"INSERT into user nis,nama lengkap,email,alamat )
	value('$nis','$')");

	//menangkap data yang dikirim dari form
	header<"locstion:../index.php">
	?>
 