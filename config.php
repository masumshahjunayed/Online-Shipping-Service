<?php
	SESSION_START();
	error_reporting(0);
	$host = "localhost";
	$user = "root";
	$password = "";
	$db = "masum";
	
	//Database Connection ======
	$con = MYSQLI_CONNECT($host,$user,$password,$db) or die("Connection Error!");
	
	$GLOBALS['conn'] = $con;

	//====== Sigle Data ======
	function data($tbl,$conditioin,$values){
	 global $conn;
	 $q = $conn->QUERY("SELECT * from $tbl $conditioin limit 1");
	 $datas = mysqli_fetch_array($q);
	 return $datas[$values];	 
	}
?>