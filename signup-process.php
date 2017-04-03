<?php

	$s_username = $_POST["username"];
	$s_password = $_POST["password"];
	$s_repassword = $_POST["repassword"];

	$s_password = md5($s_password);
	$s_repassword = md5($s_repassword);

	require_once("mysql.php");

	$check = $mysqli->query("SELECT * FROM account WHERE username = '$s_username'");

	
	if ($check->num_rows < 1){

		if($s_password == $s_repassword){

			$result = $mysqli->query("INSERT INTO `account`(`username`, `password`) VALUES ('$s_username', '$s_password')");

			echo "<script>alert('successfully!');</script>";

		} else {

			echo "<script>alert('please check your password again');</script>";

		}


	} else {
		echo "<script>alert('The username already exists!');</script>";
	}

	echo "<script>location.href='signup.php'</script>"

?>