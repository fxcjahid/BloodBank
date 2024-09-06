<?php
  
	Auth::preventNonLogged();

	/**
	 * View Donation List
	 * @table : donation
	 * @uses $viewDonations
	 */
	 
	$userID = (int) Session::get('userID');

	$SQL = "SELECT * 
	 			FROM
					`donation`
				WHERE 
					user_id=$userID 
				ORDER BY 
					`donation`.`id` DESC";

	$viewDonations = $mysqli->query($SQL);