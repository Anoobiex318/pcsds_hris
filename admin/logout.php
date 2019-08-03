<?php
session_start();
session_destroy();
	
	if (isset($_COOKIE["admin_user"]) AND isset($_COOKIE["admin_pass"])){
		setcookie("admin_user", '', time() - (3600));
		setcookie("admin_pass", '', time() - (3600));
	}

	

	header('location:../index.php');

?>