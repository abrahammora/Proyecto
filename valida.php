<?php
	include 'sql.php';
	$sql = new sql();	
	$usuario=$_POST['usuario'];
	$password=$_POST['password'];
	if((strpos($usuario,"'")===true)||(strpos($usuario,"-")===true)||(strpos($usuario,"#")===true)){
		$usuario=' ';		
	}
	$datos=$sql->execute("select * from usuarios where nombre='$usuario'");
	//$datos=execute($sql);
	$aux=0;
	if($usuario!=''){
		while($row=$datos->fetch_object()){
			if($row->apm==$password){
				$aux=1;
			}
		}
	}
	
	if($aux==1){
		session_start();
		$_SESSION['usuario']=$usuario;
		header('location: index.php');
	}else{
		session_start();
		$_SESSION['usuario']='';
		header('location: login.php');
	}
	
?>