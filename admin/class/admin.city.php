<?php

	use Request\Request;

	/**
	 * Get city List
	 * @relationship : city, state, country
	 * @uses $cites 
	 */

	$SQL = "SELECT
				city.id AS id,
				city.id AS cityID,
				city.name AS city,
				state.id AS stateID,
				state.name AS state,
				country.id AS countryID, 
				country.name AS country 
					FROM 
						`city`,
						`state`,
						`country`
					WHERE
						city.state=state.id AND
						city.country=country.id";
		
	$cites  = $mysqli->query($SQL);

	
	/**
	 * Add New City
	 * @table: city
	 */
		
	if(isset($_REQUEST['new']))
	{ 
		/**
		 * Get form input values
		* @var object
		*/
		$request = Request::only([ 
					'title',
					'state',  
					'country'
				]);  

		/**
		 * Insert database
		* @table: city
		*/ 
		$SQL = "INSERT 
					INTO `city`
						(
							`name`,
							`state`,
							`country`
						)
					VALUES
						(
							'$request->title',
							'$request->state',
							'$request->country' 
						)"; 
		  
		if($mysqli->query($SQL))
		{
			/**
			 * set alert message
			*/
			Alert::set(
				"success", 
				"You have successfully added city"
			); 
			
			unset($_REQUEST);
			header ("Location: city.php?success");
		}
		else{
			die("Error: " . $SQL . "<br>" . $mysqli->error);
		}
		 
	} 

	
	/**
	 * Update/Edit city
	 * @table: city
	 */
		
	if(isset($_REQUEST['update']))
	{ 
		/**
		 * Get form input values
		* @var object
		*/
		$request = Request::only([
					'id',
					'title',
					'state',  
					'country'
				]);  

		/**
		 * Update database
		* @table: city
		*/ 
		$SQL = "UPDATE 
					`city`
					SET
						`name` 		= '$request->title',  
						`state`		= '$request->state',
						`country`	= '$request->country' 
					WHERE
						`id`=$request->id"; 
		  
		if($mysqli->query($SQL))
		{
			/**
			 * set alert message
			*/
			Alert::set(
				"success", 
				"You have successfully update city"
			); 
			
			unset($_REQUEST);
			header ("Location: city.php");
		}
		else{
			die("Error: " . $SQL . "<br>" . $mysqli->error);
		}
		 
	} 

	
	/**
	 * Delete city 
	 * @table: city
	 */  

	if(isset($_GET['delete']))
	{
		$SQL = "DELETE FROM 
							`city`
						WHERE 
							`city`.id='" . $_GET["delete"] . "'"; 

		if($mysqli->query($SQL))
		{
			/**
			 * set alert message
			 */
			Alert::set(
				"success", 
				"The city has been deleted."
			);  

			unset($_REQUEST);
			header("Location: city.php?success"); 
		}
	}