<?php

	use Request\Request; 
  
	/**
	 * Get Avaiable Blood Donor
	 * One to Many relationship BY LEFT JOIN
	 * @relationship: users, groups, gender
	 * @uses: $donors
	 */

	/**
	 * Check is rules is exits
	*/ 

	/**
	 * Set empty variable for prevent error / notic
	 */
	$rules = '';
	$groupID = '';
	$genderID = '';
	$cityID = '';

	if(isset($_GET['group']))
	{
		$groupID = (int) $_GET['group'];
		
		$rules .= ' AND groups.id='. $groupID;
	} 

	if(isset($_GET['gender']))
	{
		$genderID = (int) $_GET['gender'];
		
		$rules .= ' AND gender.id='. $genderID;
	} 

	if(isset($_GET['city']))
	{
		$cityID = (int) $_GET['city'];
		
		$rules .= ' AND city.id='. $cityID;
	} 

	$SQL ="SELECT 
				users.id AS id,
				users.name AS name,
				users.email AS email,
				users.phone AS phone, 
				users.last_donate AS last_donate,
				city.name AS city,
				groups.name AS blood,
				gender.name AS gender,
				COUNT(donation.user_id) AS total
					
					FROM users
						LEFT JOIN donation 
								ON users.id=donation.user_id 
						LEFT JOIN groups 
								ON groups.id=users.blood
						LEFT JOIN users_info
								ON users_info.user_id=users.id
						LEFT JOIN gender 
								ON gender.id=users.gender 
						LEFT JOIN city
								ON city.id=users_info.city

						WHERE users.available=1 {$rules}

				GROUP BY users.id
				ORDER BY users.id  DESC";
		
		

	$donors = $mysqli->query($SQL);
	$donorCount = $donors->num_rows;
 