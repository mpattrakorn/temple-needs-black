<?php

	
	session_start();
	$username = $_POST["username"];
	$password = $_POST["password"];


	$password = md5($password);
	$password = substr($password,0, 20);


	require_once("mysql.php");

	$result = $mysqli->query("SELECT * FROM account WHERE username = '$username' ");

	if($result->num_rows > 0){

		$account = $result->fetch_assoc();

		if($password == $account["password"]){
			echo "<script>alert('sucessfully login');</script>";
			$_SESSION["login_user"] = $username;
			session_write_close();
		}
		else{
			echo "<script>alert('username or password is incorrect');</script>";
		}
	}else{
		echo "<script>alert('username or password is incorrect');</script>";
	}

 
	echo "<script>location.href='index.php'</script>";


?>