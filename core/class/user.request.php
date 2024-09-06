<?php

	use Request\Request; 

	Auth::preventNonLogged();

	/**
	 * View Requested List
	 * @table : users_request
	 * @uses $viewRequeste
	 */
	  

	$SQL = "SELECT * 
				FROM 
					`users_request` 
				WHERE 
					`received`=$userID 
				ORDER BY 
					`users_request`.`id` DESC";
 
 	$viewRequeste = $mysqli->query($SQL);
	