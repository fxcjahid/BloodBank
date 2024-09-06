<?php

	use Request\Request;  

	$adminID = (int) Session::get('adminID');

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
					'email',
					'phone', 
					'group',
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
						`users`.`email`				= '$request->email',  
						`users`.`phone`				= '$request->phone',
						`users`.`blood`				= '$request->group', 
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
					`users`.id=$adminID";
  

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
			header("Location: profile.php?success"); 
		}
		else{
			die("Error: " . $SQL . "<br>" . $mysqli->error);
		}

	}