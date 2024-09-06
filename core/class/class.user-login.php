<?php

	use Request\Request; 
 
	
	/**
	 * Verified user credential details
	 * @param $email
	 * @param $password
	 */

	 if(isset($_REQUEST['submit']))
	 {

		/**
		 * Get form input values
		 * @var object
		 */
		$request = Request::only([
					'email',
					'pass' 
				]); 

		
		/**
		 * get matched data
		 */
		$SQL = "SELECT 
						id,
						email,
						password 
					FROM 
						`users` 
					WHERE 
						email='$request->email'"; 

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
			if(verifiedHash($request->pass, $credential->password))
			{

				/**
				 * set session
				 */
				Session::set("userLoginExit", "true"); 
				Session::set("userID", $credential->id); 
				  
				unset($_REQUEST); 
				header("Location: donor/index.php");
			
			}
			else{

				/**
				 * set alert message
				 */
				Alert::set(
					"info",
					"Email & password was incorrect :("
				); 
				
				unset($_REQUEST); 
				header("Location: login.php?info");

			}
		}
		else{

			/**
			 * set alert message
			 */
			Alert::set(
				"info",
				"Invalid user credentials :("
			); 
			
			unset($_REQUEST); 
			header("Location: login.php?info");

			/**
			 * SQL error
			 */
			if($mysqli->error)
			{
				die("Error: " . $SQL . "<br>" . $mysqli->error);
			}
			
		}
		
	 }  