<?php

	use Request\Request;

	/**
	 * Get Country List 
	 * @uses $countries
	 */

	$SQL = "SELECT * FROM 
					`country`";
		
	$countries  = $mysqli->query($SQL);


	/**
	 * Add New country
	 * @table: country
	 */ 
	if(isset($_REQUEST['new']))
	{ 
		/**
		 * Get form input values
		* @var object
		*/
		$request = Request::only([ 
					'title',   
				]);  

		/**
		 * Insert database
		 * @table: country
		 */ 
		$SQL = "INSERT 
					INTO `country`
						(
							`name`  
						)
					VALUES
						(
							'$request->title' 
						)"; 
		
		if($mysqli->query($SQL))
		{
			/**
			 * set alert message
			 */
			Alert::set(
				"success", 
				"You have successfully added country"
			); 
			
			unset($_REQUEST);
			header ("Location: country.php?success");
		}
		else{
			die("Error: " . $SQL . "<br>" . $mysqli->error);
		}
		
	} 


	/**
	 * Update/Edit country
	 * @table: country
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
				]);  

		/**
		 * Update database
		* @table: country
		*/ 
		$SQL = "UPDATE 
					`country`
					SET
						`name` 		= '$request->title'   
					WHERE
						`id`=$request->id"; 
		
		if($mysqli->query($SQL))
		{
			/**
			 * set alert message
			*/
			Alert::set(
				"success", 
				"You have successfully update country"
			); 
			
			unset($_REQUEST);
			header ("Location: country.php");
		}
		else{
			die("Error: " . $SQL . "<br>" . $mysqli->error);
		}
		
	} 
 
	 
	/**
	 * Delete country 
	 * @table: country
	 */  
	if(isset($_GET['delete']))
	{
		$SQL = "DELETE FROM 
							`country`
						WHERE 
							`country`.id='" . $_GET["delete"] . "'"; 

		if($mysqli->query($SQL))
		{
			/**
			 * set alert message
			*/
			Alert::set(
				"success", 
				"The country has been deleted."
			);  

			unset($_REQUEST);
			header("Location: country.php?success"); 
		}
	}