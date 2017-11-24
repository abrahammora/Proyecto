<?php
	session_start();
	$aux = $_SESSION['usuario'];
	
	if(isset($_SESSION['usuario'])){
		if($aux == ''){
			header('location: login.php');
			exit();
		}
	}else{
		header('location: login.php');
		exit();
	}
?>