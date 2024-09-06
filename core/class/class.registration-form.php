<?php

	use Request\Request;
	use Database\DB;
  
	
	/**
	 * Insert new donor registration into database
	 * @table: users
	 */

	if(isset($_REQUEST['submit']))
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
		header("Location: registration.php?success");
	}
	else{
		die("Error: " . $SQL . "<br>" . $mysqli->error);
	}
	
	} 