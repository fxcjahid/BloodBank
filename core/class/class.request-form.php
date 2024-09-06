<?php

	use Request\Request; 
 
	
	/**
	 * Insert new blood request into database
	 * @table: request
	 */

	if(isset($_REQUEST['submit']))
	{
	/**
	 * Get form input values
	 * @var object
	 */
	$request = Request::only([
				'title',
				'details',
				'patientName',
				'patientAge',
				'email',
				'mobile', 
				'gender',
				'country',
				'state',
				'city',
				'group',
				'requireDate',
			]); 

	/**
	 * Insert record into database
	 * @table: request
	 */

	$SQL = "INSERT 
				INTO `request` 
					( 
						`title`,
						`description`,
						`patient_name`,
						`patient_age`,
						`email`,
						`mobile`,
						`gender`,
						`country`,
						`State`,
						`city`,
						`group`,
						`required_date` 
					) 
				VALUES 
					( 
						'$request->title',
						'$request->details',
						'$request->patientName',
						'$request->patientAge',
						'$request->email',
						'$request->mobile',
						'$request->gender',
						'$request->country',
						'$request->state',
						'$request->city',
						'$request->group',
						'$request->requireDate'
					)"; 

	
	if($mysqli->query($SQL))
	{
		/**
		 * set alert message
		 */
		Alert::set(
			"success", 
			"You have successfully to request blood"
		); 
			

		unset($_REQUEST);
		header ("Location: view.php?success");
	}
	else{
		die("Error: " . $SQL . "<br>" . $mysqli->error);
	}
	
	} 