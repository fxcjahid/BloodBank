<?php

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
	 * Camps view with gallery Item
	 * @relationship : gallary, camp 
	 * @uses $campsGallery
	 */
	
	if(isset($_GET["cid"]))
	{
		$SQL = "SELECT
					camp.id AS id,
					camp.title AS title,
					camp.organise AS organise,
					camp.description AS description, 
					gallary.pic AS image 
						from 
							gallary,camp 
						where 
							gallary.camp_id=camp.id and 
							gallary.camp_id='" . $_GET["cid"]  ."'";
	
	
		$campsGallery = $mysqli->query($SQL);
	}

	/**
	 * Camps view with gallery Item
	 * @relationship : gallary, camp 
	 * @uses $campsGallery
	 */ 

	if(isset($_GET["cid"]))
	{
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
							camp.country=country.id and
							camp.id='" . $_GET["cid"] ."'";
							
		$campsOnly = $mysqli->query($SQL);
	}
 