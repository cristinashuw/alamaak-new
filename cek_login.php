<?php

	include "koneksi.php";
	$email = $_POST['email'];
	$password = $_POST['password'];
	$password = md5($password);

	if (empty($email)){
		echo "<script>alert('Email belum diisi')</script>";
		echo "<meta http-equiv='refresh' content='1 url=login.php'>";
	} else 
		
	if (empty($password)){
		echo "<script>alert('Password belum diisi')</script>";
		echo "<meta http-equiv='refresh' content='1 url=login.php'>";
	} 
	
	
	else{
			
		session_start();

		$login = mysqli_query($connect, "select * from `users` where email='$email' and password='$password'");
			
		if (mysqli_num_rows($login) > 0){
			$data = mysqli_fetch_assoc($login); 
			$_SESSION['email'] = $email;
			$_SESSION['nama'] = $data['customer_name'];
			$_SESSION['phone'] = $data['phone'];
			header("location:alamaak-deadline/index.php");
		} 
		else{

			echo "<script>alert('Email atau Password salah')</script>";

			echo "<meta http-equiv='refresh' content='1 url=login.php'>";
		}
		// echo $email.$password;
		// echo mysqli_num_rows($login);
	}

?>