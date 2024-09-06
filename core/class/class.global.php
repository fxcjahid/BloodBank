<?php

	/**
	 * Get gender data  
	 * @uses $genders
	 */

	$SQL = "SELECT * FROM `gender` ORDER BY `id` ASC";
				
	$genders = $mysqli->query($SQL);

	
	/**
	 * Get blood group data  
	 * @uses $group
	 */

	$SQL = "SELECT * FROM `groups`";
				
	$group = $mysqli->query($SQL);


	/**
	 * Get city data  
	 * @uses $cities
	 */

	$SQL = "SELECT * FROM `city`";
				
	$cities = $mysqli->query($SQL);


	/**
	 * Get state data  
	 * @uses $states
	 */

	$SQL = "SELECT * FROM `state`";
				
	$states = $mysqli->query($SQL);


	/**
	 * Get country data  
	 * @uses $countries
	 */

	$SQL = "SELECT * FROM `country`";
				
	$countries = $mysqli->query($SQL);


	/**
	 * Get setting data  
	 * @uses $setting
	 */

	$SQL = "SELECT * FROM `setting`";
				
	$setting = $mysqli->query($SQL);