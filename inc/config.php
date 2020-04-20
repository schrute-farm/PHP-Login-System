<?php 


	// if there is no constant defined called __CONFIG__, do not load this file.
	if(!defined('__CONFIG__'))
	{
		EXIT('You do not have a config file');
	}

	//config below
	//allow errors
	error_reporting(-1);
	ini_set('display_errors', 'On');

	//include the db file
	include_once "classes/DB.php";
	include_once "classes/filter.php";

	$con = DB::getConnection();
	

?>