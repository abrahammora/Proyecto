<?php

	include 'usuarios.php';
	
	$objeto = new usuario();
	$tipo = isset($_REQUEST['tipo'])?$_REQUEST['tipo']:'-1';
	$id = isset($_REQUEST['id'])?$_REQUEST['id']:'-1';
	$nombre=isset($_REQUEST['nombre'])?$_REQUEST['nombre']:'';
	$app=isset($_REQUEST['app'])?$_REQUEST['app']:'';
	$apm=isset($_REQUEST['apm'])?$_REQUEST['apm']:'';
	$fnac=isset($_REQUEST['fnac'])?$_REQUEST['fnac']:'';
	$salario=isset($_REQUEST['salario'])?$_REQUEST['salario']:'0';
	
	if($tipo==1){
		$objeto->muestra_usuarios();
	}else if($tipo==2){
		$objeto->updateUsuario($id,$nombre,$app,$apm,$fnac,$salario);
		$objeto->muestra_usuarios();
		
	}else if($tipo==3){
		$objeto->deleteUsuario($id);
		$objeto->muestra_usuarios();		
	}else if($tipo==4){
		$objeto->updateFormulario($id);
		
	}else if($tipo==5){
		$objeto->addFormulario();		
	}else if($tipo==6){
		$objeto->addusuario($nombre,$app,$apm,$fnac,$salario);
		$objeto->muestra_usuarios();
	}
	
?>