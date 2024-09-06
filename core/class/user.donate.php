<?php

	use Request\Request; 

	Auth::preventNonLogged();
  

	/**
	 * Insert user new blood donate
	 */
	
	if(isset($_REQUEST['donate']))
	{
		/**
		 * Get form input values
		 * @var object
		 */
		$request = Request::only([
					'name',
					'unit', 
					'description', 
					'donateDate'
				]); 

		/**
		 * Insert record into database
		 * @table: donation
		 */
		 
 
		$SQL = "INSERT 
					INTO `donation` 
						(
							`user_id`,
							`name`,  
							`units`, 
							`description`,  
							`donate_date`  
						) 
					VALUES 
						(
							 $userID,
							'$request->name', 
							'$request->unit', 
							'$request->description',   
							'$request->donateDate' 
						)";
	 
		if($mysqli->query($SQL))
		{
			/**
			 * set alert message
			 */
			Alert::set(
				"success", 
				"You have succesful add new donate."
			); 
			 
			unset($_REQUEST);
			header("Location: donation.php?success"); 
		}
		else{
			die("Error: " . $SQL . "<br>" . $mysqli->error);
		}

	}