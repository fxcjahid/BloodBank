<?php

	use Request\Request; 

	/**
	 * Prevent to view without logged
	 */
	Auth::preventNonAdminLogged();


	/**
	 * get admin info
	 * @relationship : users, gender, groups, city, state, country
	 * @uses $admin
	 */
	 
	$adminID = (int) Session::get('adminID');

	$SQL = "SELECT 
				users.id AS id,
				users.name AS name,
				users.email AS email,
				users.phone AS phone, 
				users.birthday AS birthday,
				users.last_donate AS lastDonate,
				users.available AS available,
				users.gender As genderID,
				gender.name As genderName,
				users.blood AS bloodID,
				groups.name AS bloodName,
				city.id AS cityID,
				city.name AS cityName, 
				state.id AS stateID,
				city.name AS stateName, 
				country.id AS countryID,
				country.name AS countryName,
				users_info.description AS description,
				users_info.address AS address
					FROM 
						`users`,
						`gender`,
						`groups`, 
						`users_info`,
						`city`,
						`state`,
						`country`
					WHERE 
						gender.id=users.gender AND
						groups.id=users.blood AND
						users_info.user_id=users.id AND
						city.id=users_info.city AND
						state.id=users_info.state AND
						country.id=users_info.country AND
						users.id=$adminID";

	$admin = $mysqli->query($SQL);

 	/**
	 * get user data
	 */
	$admin = $admin->fetch_object(); 
 

