<?php

	/**
	 * Core BuitIn function
	 */

	/**
	 * Make Hash password
	 * @param password
	 * @return hash password
	 */
	function makeHash(string $password)
	{
		/**
		 * Hash a new password for storing in the database.
		 * The function automatically generates a cryptographically safe salt.
		 */ 

		return password_hash($password, PASSWORD_BCRYPT);

	}

	/**
	 * Matchd current exiting hashed password
	 * @param new password
	 * @param hash password
	 * @return boolean
	 */
	function verifiedHash(string $password, string $hash)
	{
		/**
		 * matches the stored hash.
		 */
		
		return password_verify($password, $hash);
	}

	/**
	 * Masking Email
	 * @var string email
	 */
	function maskEmail($email)
	{ 
		$char_shown = 3;
	
		$mail_parts = explode("@", $email);
		$username = $mail_parts[0];
		$len = strlen( $username );
	
		if( $len <= $char_shown ){
			return implode("@", $mail_parts );  
		}
	
		//Logic: show asterisk in middle, but also show the last character before @
		$mail_parts[0] = substr( $username, 0 , $char_shown )
			. str_repeat("*", $len - $char_shown - 1 )
			. substr( $username, $len - $char_shown + 2 , 1  )
			;
	
		return implode("@", $mail_parts );
	}

	/**
	 * get birthday age
	 * @var date
	 */
	function age($date)
	{ 
		$date = (int) $date;
		$age = date('Y') - $date; 

		if (date('md') < date('md', strtotime($date)))
		{ 
			return $age - 1; 
		} 
	   return $age; 
	} 


	/**
	 * Time Elapsed 
	 * @var time
	 */
	function timeElapsed($datetime, $full = false)
	{
		$now = new DateTime;
		$ago = new DateTime($datetime);
		$diff = $now->diff($ago);
	
		$diff->w = floor($diff->d / 7);
		$diff->d -= $diff->w * 7;
	
		$string = array(
			'y' => 'year',
			'm' => 'month',
			'w' => 'week',
			'd' => 'day',
			'h' => 'hour',
			'i' => 'minute',
			's' => 'second',
		);

		foreach ($string as $k => &$v)
		{
			if ($diff->$k) {
				$v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
			} else {
				unset($string[$k]);
			}
		}
	
		if (!$full) $string = array_slice($string, 0, 1);
		
		return $string ? implode(', ', $string) . ' ago' : 'just now';
	}