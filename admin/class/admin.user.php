<?php
 
	use Request\Request;

	/**
	 * get All user info
	 * @relationship : users, groups
	 * @uses $users
	 */
	   
	$SQL = "SELECT 
				users.id AS id,
				users.name AS name,  
				TIMESTAMPDIFF( YEAR, users.birthday,  CURDATE()) AS age,
				users.last_donate AS lastDonate,
				users.available AS available, 
				groups.name AS blood,
				gender.name As gender 
					FROM 
						`users`, 
						`groups`, 
						`gender`  
					WHERE 
						gender.id=users.gender AND
						groups.id=users.blood";

	$users = $mysqli->query($SQL);


	/**
	 * get user info
	 * @relationship : users, gender, groups, city, state, country
	 * @uses $users
	 */
	
	 if(isset($_GET["uid"]))
	 {
		$SQL = "SELECT 
					users.id AS id,
					users.name AS name,
					users.email AS email,
					users.phone AS phone, 
					users.birthday AS birthday,
					users.last_donate AS lastDonate,
					users.available AS available,
					users.gender As genderID,
					gender.name As genderName,
					users.blood AS bloodID,
					groups.name AS bloodName,
					city.id AS cityID,
					city.name AS cityName, 
					state.id AS stateID,
					city.name AS stateName, 
					country.id AS countryID,
					country.name AS countryName,
					users_info.description AS description,
					users_info.address AS address
						FROM 
							`users` 
								LEFT JOIN 
										`gender`
											ON gender.id=users.gender 
								LEFT JOIN 
										`groups`
											ON groups.id=users.blood 
								LEFT JOIN 
										`users_info`
											ON users_info.user_id=users.id                               
								LEFT JOIN 
										`city`
											ON city.id=users_info.city
								LEFT JOIN 
										`state`
											ON state.id=users_info.state                                    
								LEFT JOIN 
										`country`
											ON city.id=users_info.country
								WHERE 
									users.id='" . $_GET["uid"] . "'"; 

		$users = $mysqli->query($SQL);
	}


	/**
	 * Update user information
	 * @relationship : users, gender, groups, city, state, country
	 * @uses $users
	 */  

	if(isset($_REQUEST['update']))
	{
		print_r($_REQUEST);
		/**
		 * Get form input values
		 * @var object
		 */
		$request = Request::only([
						'name',
						'phone', 
						'gender', 
						'birthday',
						'lastDonate',
						'description',
						'address',
						'city',
						'state',
						'country',
						'available'
					]); 

		/**
		 * Update profile data into database
		 * @table: users, users_info relationship
		 */

		$SQL = "UPDATE 
						`users`
					LEFT JOIN  
						`users_info`
							ON 
							`users_info`.user_id=`users`.id
					SET
						`users`.`name`				= '$request->name',  
						`users`.`phone`				= '$request->phone',
						`users`.`gender`			= '$request->gender', 
						`users`.`birthday`			= '$request->birthday',
						`users`.`last_donate`		= '$request->lastDonate',
						`users`.`available`			= '$request->available',
						`users_info`.`description`	= '$request->description',
						`users_info`.`address`		= '$request->address',
						`users_info`.`city`			= '$request->city',
						`users_info`.`state`		= '$request->state',
						`users_info`.`country`		= '$request->country'
				WHERE 
					users.id='" . $_GET["uid"] . "'"; 

		if($mysqli->query($SQL))
		{
			/**
			 * set alert message
			 */
			Alert::set(
				"success", 
				"{$request->name}'s profile has updated."
			);  

			unset($_REQUEST);
			header("Location: user.php?success"); 
		}
		else{
			die("Error: " . $SQL . "<br>" . $mysqli->error);
		}
	}
   

	/**
	 * Insert new donor registration into database
	 * @table: users
	 */

	if(isset($_REQUEST['new']))
	{
		/**
		 * Get form input values
		* @var object
		*/
		$request = Request::only([
					'name',
					'phone',
					'email',
					'password',
					'gender',
					'blood',
					'birthday',
					'lastDonate',
					'description',
					'city',
					'state',
					'country'
				]);  
			 
		/**
		 * Insert record into database
		* @table: users
		*/ 
 
		$SQL = "INSERT 
					INTO `users` 
						(
							`name`,  
							`email`, 
							`password`,  
							`phone`, 
							`gender`, 
							`blood`, 
							`birthday`, 
							`last_donate` 
						) 
					VALUES 
						(
							'$request->name', 
							'$request->email', 
							'$request->password',   
							'$request->phone', 
							'$request->gender', 
							'$request->blood', 
							'$request->birthday', 
							'$request->lastDonate'
						)";  
	
		if($mysqli->query($SQL))
		{
	
			/**
			 * Inser users info after successfully registration
			*/
			$mysqli->query("INSERT
								INTO `users_info` 
									(
										`user_id`,  
										`description`, 
										`city`,  
										`state`, 
										`country`
									) 
								VALUES 
									(
										'$mysqli->insert_id', 
										'$request->description', 
										'$request->city',   
										'$request->state', 
										'$request->country'
									)"
			);
	
			
			/**
			 * set alert message
			*/
			Alert::set(
				"success", 
				"You have successfully registered as donor"
			); 
				
			
			unset($_REQUEST);
			header("Location: user.php?success");
		}
		else{
			die("Error: " . $SQL . "<br>" . $mysqli->error);
		} 
	} 


	/**
	 * Delete user 
	 * @table: users
	 */  

	 if(isset($_GET['delete']))
	 {
		$SQL = "DELETE FROM 
							`users`
						WHERE 
							`users`.id='" . $_GET["delete"] . "'"; 

		if($mysqli->query($SQL))
		{
			/**
			 * set alert message
			 */
			Alert::set(
				"success", 
				"The user has been deleted."
			);  

			unset($_REQUEST);
			header("Location: user.php?success"); 
		}
	}
  