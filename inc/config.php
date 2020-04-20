<?php 


	// if there is no constant defined called __CONFIG__, do not load this file.
	if(!defined('__CONFIG__'))
	{
		EXIT('You do not have a config file');
	}

	//config below

	//include the db file
	include_once "classes/DB.php";

	$con = DB::getConnection();
	

?>