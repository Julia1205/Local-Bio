<?php
	session_start();
	
	/****** DISPATCHER ******/
	// inclure la classe smarty
	require("smarty/Smarty.class.php");
    

	include("Controllers/controller.php");
	$strAction	= $_GET['action']??'index';
	$strCtrl	= $_GET['ctrl']??'articles';
	
	if (file_exists("Controllers/".$strCtrl."_controller.php")){
		include("Controllers/".$strCtrl."_controller.php");
		
		$strClassName = ucfirst($strCtrl)."Ctrl";
		if (class_exists($strClassName)){
			$objCtrl = new $strClassName;
			if (method_exists($objCtrl, $strAction)){
				$objCtrl->$strAction();
			}else{
				echo "404";
			}
		}else{
			echo "404";
		}
	}else{
		echo "404";
	}
	

