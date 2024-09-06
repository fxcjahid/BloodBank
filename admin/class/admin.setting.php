<?php

	use Request\Request;

	/**
	 * Get setting 
	 * @uses $settings
	 */

	$SQL = "SELECT * FROM `setting`";
		
	$settings  = $mysqli->query($SQL);

	/**
	 * Update/Edit setting
	 * @table: setting
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
					'email',
					'address'
				]);  

		/**
		 * Update database
		* @table: setting
		*/ 
		$SQL = "UPDATE 
					`setting`
					SET
						`site_name`	= '$request->name',  
						`phone`		= '$request->phone',  
						`email`		= '$request->email',  
						`address`	= '$request->address'"; 
		
		if($mysqli->query($SQL))
		{
			/**
			 * set alert message
			*/
			Alert::set(
				"success", 
				"You have successfully setting"
			); 
			
			unset($_REQUEST);
			header ("Location: setting.php");
		}
		else{
			die("Error: " . $SQL . "<br>" . $mysqli->error);
		}
		
	}  