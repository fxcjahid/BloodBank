<?php

	use Request\Request; 
	
	/**
	 * Get Avaiable Blood Donors count By Blood Group for statistics
	 * One to One relationship
	 * @relationship: groups, users
	 * @uses: $donorsStatistics
	 */

	$userID = (int) Session::get('userID');

	$SQL ="SELECT  
				groups.id,
				groups.name,
				COUNT(groups.name) as count
					FROM 
						groups,users
					WHERE 
						groups.id=users.blood
					GROUP BY 
						groups.name";

	$donorsStatistics = $mysqli->query($SQL);
	

	/**
	 * Get Avaiable Blood Donor
	 * One to Many relationship BY LEFT JOIN
	 * @relationship: users, groups, gender
	 * @uses: $donors
	 */

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

						WHERE users.available=1

				GROUP BY users.id
				ORDER BY users.id  DESC";

	$donors = $mysqli->query($SQL);
	

	/**
	 * Get Single Donar details for Avaiable Blood
	 * One to Many relationship BY LEFT JOIN
	 * @relationship: users, groups, gender
	 * @uses: $donorView
	 */
	if(isset($_GET["did"]))
	{
		$SQL ="SELECT 
					users.id AS id,
					users.name AS name,
					users.email AS email,
					users.phone AS phone, 
					users.last_donate AS last_donate,
					users.birthday AS birthday,
					groups.name AS blood,
					gender.name AS gender,
					users_info.description AS description,
					users_info.religion AS religion,
					users_info.address AS address,
					city.name AS city,
					state.name AS state,
					country.name AS country,
					COUNT(donation.user_id) AS total
						
						FROM users
							LEFT JOIN donation 
									ON users.id=donation.user_id 
							LEFT JOIN groups 
									ON groups.id=users.blood
							LEFT JOIN gender 
									ON gender.id=users.gender  
							LEFT JOIN users_info
                            		ON users_info.user_id=users.id
							LEFT JOIN city
									ON city.id=users_info.city
							LEFT JOIN state
									ON state.id=users_info.state
							LEFT JOIN country
									ON country.id=users_info.country

							WHERE 
								users.available=1 AND
								users.id='" . $_GET["did"] . "'";

		$donorView = $mysqli->query($SQL);
	}
	

	/**
	 * Insert new blood request into users profile
	 * User will received request.
	 * @table: users_request
	 */

	if(isset($_REQUEST['submit']))
	 {

		/**
		 * Before insert check if user not logged
		 * Redirect to Log In page if not logged
		 */
		if(Auth::checkUserLogin()==False)
		{
			/**
			 * set alert message
			 */
			Alert::set(
				"info", 
				"Please log in to continue your request."
			); 
			 
			unset($_REQUEST);
			header("Location: login.php?info"); 
			exit();
		}


		/**
		 * Get form input values
		 * @var object
		 */
		$request = Request::only([
					'user',
					'name',
					'phone',
					'message' 
				]); 
   
		/**
		 * Insert record into database
		 * @table: users_request
		 */
					
		$SQL = "INSERT 
		 			INTO `users_request` 
						( 
							`user_id`,
							`name`,
							`phone`, 
							`message`,
							`received` 
						) 
					VALUES 
						( 
							'$userID',
							'$request->name',
							'$request->phone',
							'$request->message',
							'$request->user' 
						)"; 

		
		if($mysqli->query($SQL))
		{
			/**
			 * set alert message
			 */
			Alert::set(
				"success", 
				"You have success to requested donor"
			); 
			 

			unset($_REQUEST);
			header ("Location: donors.php?success");
		}
		else{
			die("Error: " . $SQL . "<br>" . $mysqli->error);
		}
		
	}  