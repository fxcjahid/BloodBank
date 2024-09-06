<?php 

	/**
	 * Get Avaiable Blood Group count By Blood Group for statistics
	 * One to One relationship
	 * @relationship: groups, users
	 * @uses: $bloodGroup
	 */

	$SQL ="SELECT  
				groups.id,
				groups.name,
				COUNT(groups.name) as count
					FROM 
						groups,users
					WHERE 
						groups.id=users.blood
					GROUP BY 
						groups.name";

	$bloodGroup = $mysqli->query($SQL);