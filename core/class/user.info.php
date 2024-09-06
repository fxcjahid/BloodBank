<?php

	use Request\Request; 

	Auth::preventNonLogged();

	/**
	 * get user info
	 * @relationship : users, gender, groups, city, state, country
	 * @uses $users
	 */
	 
	$userID = (int) Session::get('userID');

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
						`users`,
						`gender`,
						`groups`, 
						`users_info`,
						`city`,
						`state`,
						`country`
					WHERE 
						gender.id=users.gender AND
						groups.id=users.blood AND
						users_info.user_id=users.id AND
						city.id=users_info.city AND
						state.id=users_info.state AND
						country.id=users_info.country AND
						users.id=$userID";

	$users = $mysqli->query($SQL);

 	/**
	 * get user data
	 */
	$user = $users->fetch_object(); 
 

	/**
	 * Update user profile
	 */
	if(isset($_REQUEST['update']))
	{ 
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
					`users`.id=$userID";
  

		if($mysqli->query($SQL))
		{
			/**
			 * set alert message
			 */
			Alert::set(
				"success", 
				"Your profile was updated."
			); 
			 
			unset($_REQUEST);
			header("Location: index.php?success"); 
		}
		else{
			die("Error: " . $SQL . "<br>" . $mysqli->error);
		}

	}