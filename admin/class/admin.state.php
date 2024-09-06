<?php

	use Request\Request;

	/**
	 * Get State List
	 * @relationship : state, country
	 * @uses $states 
	 */

	$SQL = "SELECT
				state.id AS id,
				state.name AS state, 
				country.id AS countryID, 
				country.name AS country 
					FROM  
						`state`,
						`country`
					WHERE 
						state.country=country.id";
		
	$states  = $mysqli->query($SQL);
 

	/**
	 * Add New State
	 * @table: state
	 */ 
	if(isset($_REQUEST['new']))
	{ 
		/**
		 * Get form input values
		* @var object
		*/
		$request = Request::only([ 
					'title',   
					'country'
				]);  

		/**
		 * Insert database
		* @table: state
		*/ 
		$SQL = "INSERT 
					INTO `state`
						(
							`name`, 
							`country`
						)
					VALUES
						(
							'$request->title', 
							'$request->country' 
						)"; 
		
		if($mysqli->query($SQL))
		{
			/**
			 * set alert message
			*/
			Alert::set(
				"success", 
				"You have successfully added state"
			); 
			
			unset($_REQUEST);
			header ("Location: state.php?success");
		}
		else{
			die("Error: " . $SQL . "<br>" . $mysqli->error);
		}
		
	} 	

	/**
	 * Update/Edit state
	 * @table: state
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
					'country'
				]);  

		/**
		 * Update database
		* @table: state
		*/ 
		$SQL = "UPDATE 
					`state`
					SET
						`name` 		= '$request->title',  
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
				"You have successfully update state"
			); 
			
			unset($_REQUEST);
			header ("Location: state.php");
		}
		else{
			die("Error: " . $SQL . "<br>" . $mysqli->error);
		}
		
	} 
 
	 
	/**
	 * Delete state 
	* @table: state
	*/  
	if(isset($_GET['delete']))
	{
		$SQL = "DELETE FROM 
							`state`
						WHERE 
							`state`.id='" . $_GET["delete"] . "'"; 

		if($mysqli->query($SQL))
		{
			/**
			 * set alert message
			*/
			Alert::set(
				"success", 
				"The state has been deleted."
			);  

			unset($_REQUEST);
			header("Location: state.php?success"); 
		}
	}