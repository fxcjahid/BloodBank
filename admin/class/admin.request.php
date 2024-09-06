<?php

	use Request\Request; 
 
	/**
	 * Get blood request data from database
	 * One to many relationship
	 * @relationship : request, groups, gender, city, state, country
	 * @uses $RequestView
	 */

	$SQL = "SELECT 
				request.id AS id,
				request.title AS title,
				request.description AS description,
				request.patient_name AS patientName,
				request.patient_age AS patientAge,
				request.email AS email,
				request.mobile AS mobile,
				request.required_date As required_date,
                request.create_date AS create_date,
			
				groups.name AS blood,
				gender.name AS gender,
				city.name AS city,
				State.name AS State,
				country.name AS country
					FROM 
						request,
						groups,
						gender, 
						city,
						State,
						country 
					WHERE  
						groups.id=request.group AND
						gender.id=request.gender AND 
						city.id=request.city AND
						State.id=request.State AND
						country.id=request.country
					ORDER BY 
						request.id DESC";
				
	$RequestView = $mysqli->query($SQL);

	/**
	 * Get single request view
	 * One to many relationship
	 * @relationship : request, groups, gender, city, state, country
	 * @uses $singleView
	 */
	
	if(isset($_GET["rid"]))
	{
		$SQL = "SELECT 
					request.id AS id,
					request.title AS title,
					request.description AS description,
					request.patient_name AS patientName,
					request.patient_age AS patientAge,
					request.email AS email,
					request.mobile AS mobile,
					request.required_date As required_date,
					request.create_date AS create_date,
				 
					groups.id AS bloodID,
					groups.name AS blood,
					gender.id AS genderID,
					gender.name AS gender,
					city.id AS cityID,
					city.name AS city,
					state.id AS stateID,
					state.name AS state,
					country.id AS countryID,
					country.name AS country
						FROM 
							request,
							groups,
							gender, 
							city,
							state,
							country
 
						WHERE  
							groups.id=request.group AND
							gender.id=request.gender AND 
							city.id=request.city AND
							state.id=request.state AND
							country.id=request.country AND
							request.id='" . $_GET["rid"] . "'";
	
	 
		$singleView = $mysqli->query($SQL);
	}	


	/**
	 * Update blood request into database
	 * @table: request
	 */ 

	if(isset($_REQUEST['update']))
	{
		/**
		 * Get form input values
		 * @var object
		 */
		$request = Request::only([
					'title',
					'description',
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

		$SQL = "UPDATE
					`request` 
					SET
						`title`				= '$request->title',
						`description`		= '$request->description',
						`patient_name`		= '$request->patientName',
						`patient_age`		= '$request->patientAge',
						`email`				= '$request->email',
						`mobile`			= '$request->mobile',
						`gender`			= '$request->gender',
						`country`			= '$request->country',
						`state`				= '$request->state',
						`city`				= '$request->city',
						`group`				= '$request->group',
						`required_date`  	= '$request->requireDate'
					WHERE
						`id`='" . $_GET["rid"] . "'"; 

		
		if($mysqli->query($SQL))
		{
			/**
			 * set alert message
			 */
			Alert::set(
				"success", 
				"You have successfully to update request blood"
			); 
			 

			unset($_REQUEST);
			header ("Location: request.php?success");
		}
		else{
			die("Error: " . $SQL . "<br>" . $mysqli->error);
		}
		
	}
	
	
	/**
	 * Insert new blood request into database
	 * @table: request
	 */

	if(isset($_REQUEST['new']))
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
				"You have successfully to create request blood"
			); 
				

			unset($_REQUEST);
			header ("Location: request.php?success");
		}
		else{
			die("Error: " . $SQL . "<br>" . $mysqli->error);
		} 
	} 


	/**
	 * Delete camps 
	 * @table: camps
	 */  

	if(isset($_GET['delete']))
	{
		$SQL = "DELETE FROM 
							`request`
						WHERE 
							`request`.id='" . $_GET["delete"] . "'"; 

		if($mysqli->query($SQL))
		{
			/**
			 * set alert message
			*/
			Alert::set(
				"success", 
				"The blood request has been deleted."
			);  

			unset($_REQUEST);
			header("Location: request.php?success"); 
		}
	}