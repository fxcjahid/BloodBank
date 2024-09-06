<?php

	use Request\Request; 
  

	/**
	 * Update admin password
	 */
	
	if(isset($_REQUEST['updatePassowrd']))
	{
		/**
		 * Get form input values
		 * @var object
		 */
		$request = Request::only([
					'currentPassword',
					'password',  
				]); 
	
		/**
		 * Check Password
		 * @table: users
		 */ 
		$SQL = "SELECT 
						id, 
						password
					FROM 
						`users`
					WHERE 
						id=$adminID";


		$credential = $mysqli->query($SQL);

		
		if($credential->num_rows)
		{
			/**
			 * Fetch user data
			 */
			$credential = $credential->fetch_object();
 
			/**
			 * Match current password
			 */   
			if(verifiedHash($request->currentPassword, $credential->password))
			{
				
				/**
				 * Update new password if current password is matched
				 */  
				$SQL = "UPDATE `users` 
							SET 
								`password`='$request->password'
							WHERE 
								id=$adminID";

				$mysqli->query($SQL);
				 

				/**
				 * set alert message
				 */
				Alert::set(
					"success",
					"Your password has changed"
				); 
				   
				header("Location: password.php?success");
			
			}
			else{

				/**
				 * set alert message
				 */
				Alert::set(
					"error",
					"Your password is incorrect"
				); 
				 
				header("Location: password.php?error"); 
			}
		}
		else{
			die("Error: " . $SQL . "<br>" . $mysqli->error);
		}

	}
	 