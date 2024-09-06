<?php

	/**
	 * Get Blood Request count By Blood Group
	 * One to One relationship
	 * @relationship: groups, request
	 * @uses: $reuestStatistics
	 */

	$SQL ="SELECT  
				groups.id,
				groups.name,
				COUNT(request.group) as count
					FROM 
						request,groups
					WHERE 
						groups.id=request.group
					GROUP BY 
						request.group";

	$reuestStatistics = $mysqli->query($SQL);

  
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
				
					groups.name AS blood,
					gender.name AS gender,
					city.name AS city,
					state.name AS state,
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
	 * Camps view with gallery Item
	 * @relationship : gallary, camp 
	 * @uses $campsGallery
	 */ 

	if(isset($_GET["cid"]))
	{
		$SQL = "select 
					camp.camp_id AS id,
					camp.camp_title AS title,
					camp.organised_by AS organise,
					camp.detail AS description,
					camp.pic AS image,
					state.state_name AS state,
					city.city_name AS city,
					city.pin_code AS pin_code,
					city.district AS district 
						from 
							camp,state,city 
						where 
							camp.state=state.state_id and 
							camp.city=city.city_id and
							camp.camp_id='" . $_GET["cid"] ."'";
							
		$campsOnly = $mysqli->query($SQL);
	}
 