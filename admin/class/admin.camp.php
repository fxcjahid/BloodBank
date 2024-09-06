<?php

	use Request\Request; 
	

	/**
	 * Get camps data from database
	 * @relationship : state, city, camp
	 * @uses $camps 
	 */

	$SQL = "SELECT 
				camp.id AS id,
				camp.title AS title,
				camp.organise AS organise,
				camp.description AS description,
				camp.pic AS image, 
				state.name AS state,
				city.name AS city,
				country.name AS country
					from 
						camp,state,city,country
					where 
						camp.state=state.id and 
						camp.city=city.id and
						camp.country=country.id";
		
	$camps = $mysqli->query($SQL);


	/**
	 * Get single camp view
	 * One to many relationship
	 * @relationship : gallary, camp 
	 * @uses $campView
	 */
	
	 if(isset($_GET["id"]))
	 {
		$SQL = "SELECT
					camp.id AS id,
					camp.title AS title,
					camp.organise AS organise,
					camp.description AS description, 
					camp.city As city,
                    camp.state As state,
                    camp.country As country
						from 
							camp 
						where  
							camp.id='" . $_GET["id"]  ."'";
	 
	 
	 	$campView = $mysqli->query($SQL);
	 }


	/**
	 * Camps view with gallery Item
	 * @relationship : gallary, camp 
	 * @uses $campsGallery
	 */
	
	if(isset($_GET["id"]))
	{
		$SQL = "SELECT
					gallary.pic_id AS id, 
					gallary.pic AS image 
						from 
							gallary
						where 
							gallary.camp_id='" . $_GET["id"]  ."'";
	
	
		$campsGallery = $mysqli->query($SQL);
	}


	/**
	 * Create New camps
	 * @table: camps
	 */
		
	if(isset($_REQUEST['new']))
	{ 
		$galleryImages = array();

		/**
		 * Get form input values
		 * @var object
		 */
		$request = Request::only([
					'title',
					'organise', 
					'city',
					'state',
					'country',
					'description',
					'gallery',
				]);   
		print_r($request);
		/**
		 * Update database
		 * @table: camp
		 */
		 
		$SQL = "INSERT 
					INTO `camp`
						(
							`title`,
							`organise`,
							`city`,
							`state`,
							`country`,
							`description`
						)
					VALUES
						(
							'$request->title',
							'$request->organise',
							'$request->city',
							'$request->state',
							'$request->country',
							'$request->description'
						)"; 
		   
		if($mysqli->query($SQL))
		{
			/**
			 * set alert message
			 */
			Alert::set(
				"success", 
				"You have successfully create camp"
			); 
			  
			unset($_REQUEST);
			header ("Location: camp.php?success");
		}
		else{
			die("Error: " . $SQL . "<br>" . $mysqli->error);
		}
		
	} 


	/**
	 * Update/Edit camps
	 * @table: camps
	 */
		
	if(isset($_REQUEST['update']) && isset($_GET["id"]))
	{
		$campID = (int) $_GET["id"];
		$galleryImages = array();

		/**
		 * Get form input values
		 * @var object
		 */
		$request = Request::only([
					'title',
					'organise', 
					'city',
					'state',
					'country',
					'description',
					'gallery',
				]); 
		 
		/**
		 * Prepararied For image upload
		 */
		$image = new Bulletproof\Image($_FILES);
		
		/**
		 * To create a folder name to store the uploaded image
		 */
		$image->setStorage( dirname(__FILE__, 3) . '/storage/camps');
 
		/**
		 * Set file name . If unused, Name will be auto-generated.
		 */
		$image->setName();

		/**
		 * To define a list of allowed image types to upload
		 */ 
		$image->setMime(array('jpeg', 'jpg', 'png', 'webp'));

		/**
		 * To set the min/max image size to upload (in bytes)
		 * min : 5000 (Kilobyte)
		 * Max : 5000000 (Megabyte)
		 */ 
		$image->setSize(10000, 5000000);

		/**
		 * Check if file exit
		 */
		if($image["gallery"])
		{

			Alert::clear(); 
				 
			$upload = $image->upload(); 

			print_r($image["gallery"]);

			if($upload)
			{
			  
				$imageName = $upload->getName() . '.' . $upload->getMime();

				/**
				 * Place image into database
				 */
				$SQL = "INSERT 
							INTO `gallary`
								(
									`camp_id`, 
									`title`, 
									`pic`
								)
							VALUES
								(	
									'$campID',
									'$imageName', 
									'$imageName'
								)";

				//$mysqli->query($SQL); 
 
				array_push(
					$galleryImages,
					$imageName
				); 
			}
			else{  
				/**
				 * set alert message
				 */
				Alert::set(
					"error", 
					$image->getError()
				);  
			} 
		}
				
		/**
		 * Update database
		 * @table: camp
		 */
		 
		$SQL = "UPDATE 
		 			`camp`
					SET
						`title` 		= '$request->title',
						`organise` 		= '$request->organise',
						`city` 			= '$request->city',
						`state` 		= '$request->state',
						`country` 		= '$request->country',
						`description` 	= '$request->description'
					WHERE
						`id` ='" . $_GET["id"]  ."'"; 
		 
		/**
		 * Marge New & old Image ID
		 */
		if(isset($request->gallery))
		{
			foreach ($request->gallery as $key => $image)
			{
				array_push($galleryImages, $image);
			}
		}

		/**
		 * Get current gallery AND new uploaded Image 
		 */ 
		
		if(!empty($galleryImages))
		{  
			/**
			 * Remove exiting gallery Image then added into database with new ones
			 */
			$mysqli->query("DELETE FROM `gallary` WHERE `camp_id`='" . $_GET["id"]  ."'");

			print_r($galleryImages);
			/**
			 * Insert new gallery data
			 */ 
			foreach ($galleryImages as $key => $imageName)
			{
				$SQL = "INSERT 
							INTO `gallary`
								(
									`camp_id`, 
									`title`, 
									`pic`
								)
							VALUES
								(	
									'$campID',
									'$imageName', 
									'$imageName'
								)";

				$mysqli->query($SQL);
			} 
		}

		if($mysqli->query($SQL))
		{
			/**
			 * set alert message
			 */
			Alert::set(
				"success", 
				"You have successfully update camp"
			); 
			  
			unset($_REQUEST);
			header ("Location: camp.php?success");
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
							`camp`
						WHERE 
							`camp`.id='" . $_GET["delete"] . "'"; 

		if($mysqli->query($SQL))
		{
			/**
			 * set alert message
			 */
			Alert::set(
				"success", 
				"The camp has been deleted."
			);  

			unset($_REQUEST);
			header("Location: camp.php?success"); 
		}
	}