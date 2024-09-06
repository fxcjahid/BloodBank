<?php

declare(strict_types=1);

/**
 * Requests handler.
 */

namespace Request;

class Request
{
	/**
	 * Get only selected value
	 * @var array
	 * @return object
	 */
	public function only(array $array)
	{  
		$filters = array_intersect_key(self::SQL(),
					array_fill_keys($array, null)
				);

		/**
		 * Make Hash password
		 */
	    if(isset($_REQUEST['password'])){
			$filters['password'] = makeHash($_REQUEST['password']);
		} 

		/**
		 * Return as object
		 * @return object
		 */
		return (object) $filters;
	}

	private static function SQL()
	{ 
		return $_REQUEST;
	}
}