<?php

	// session_start();

	// include 'models/dbAbstractModel.php';
	// include 'models/UserModel.php';
	include 'lib/lib.php';
	include 'env.php';

	$_ROUTE = explode("/", $_GET["section"]);

	// router
	if($_ROUTE[0]!=""){
		$section = $_ROUTE[0];

		if(!file_exists("controllers/{$section}Controller.php")){
			$section = "error404";
		}

	}else{
		$section = "landing";
	}



	// Sesion iniciada
	// if(isset($_SESSION[APP_NAME])){

	// 	if($section=='landing' || $section=='error404' || $section=='panel' || $section=='detalle'){
	// 		$section='panel';
	// 	}

	// }else{ // Sesion no iniciada
	// 	if($section=='panel' || $section=='logout'){
	// 		$section='landing';
	// 	}
	// }

	
	include "controllers/{$section}Controller.php";




 ?>
