<?php
	include_once('config.php');
	session_start();
	session_destroy($con);
	session_unset($_SESSION['id']);
	session_unset($_SESSION['username']);
	header("Location:login.php");
?>