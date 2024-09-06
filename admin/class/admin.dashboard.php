<?php
 
	/**
	 * Get Avaiable Total Donor List By count 
	 * @uses: $donorsList
	 */
  
	$SQL ="SELECT 
				COUNT(id) AS `total` 
				FROM 
					`users`";

	$donorsList = $mysqli->query($SQL);

	
	/**
	 * Get Avaiable Total Blood Request List By count 
	 * @uses: $requestedList
	 */
  
	$SQL ="SELECT 
				COUNT(id) AS `total` 
				FROM 
					`request`";

	$requestedList = $mysqli->query($SQL);


	/**
	 * Get Avaiable Total Camps List By count 
	 * @uses: $campsList
	 */
  
	$SQL ="SELECT 
				COUNT(id) AS `total` 
				FROM 
					`camp`";

	$campsList = $mysqli->query($SQL);