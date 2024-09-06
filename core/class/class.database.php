<?php

	/**
	 * Database connection
	 * Object Oriented style
	 * @link : https://www.w3schools.com/php/func_mysqli_connect.asp
	 * @host
	 * @username
	 * @password
	 * @dbname 
	 */ 
	
	$mysqli = new mysqli(
			$db['host'],
			$db['username'],
			$db['password'],
			$db['dbname']
		);

	// Check connection
	if ($mysqli->connect_errno)
	{
		echo "Failed to connect to MySQL: " . $mysqli->connect_error;
		exit();
	}