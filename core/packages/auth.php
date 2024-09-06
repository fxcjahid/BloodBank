<?php

	/**
	 * check authentication
	 */

class Auth extends Session 
{
	
	/**
	 * check user Login
	 */
    public static function checkUserLogin()
	{
        if (self::get('userLoginExit') == FALSE)
		{
			return false;
        }else{
			return true;
		}
    }


	/**
	 * Redirect to profile page if user loggin
	 */
	public function isUserLogin()
	{
		if (self::get('userLoginExit') == True)
		{
            header("Location: donor/index.php");
        }
	} 

	
	/**
	 * Prevent to view user page without logged
	 */
	public function preventNonLogged()
	{
		if (self::get('userLoginExit') === False)
		{
        	header("Location: ../login.php");
        }
	}
 

	/**
	 * check user Login
	 */
    public static function checkAdminLogin()
	{
        if (self::get('adminLoginExit') == FALSE)
		{
			return false;
        }else{
			return true;
		}
    }
	

	/**
	 * Prevent to view non-admin logged
	 */
	public function preventNonAdminLogged()
	{
		if (self::get('adminLoginExit') === False)
		{
        	header("Location: login.php");
        }
	}


	/**
	 * Redirect to admin page if user loggin
	 */
	public function isAdminLogin()
	{
		if (self::get('adminLoginExit') == True)
		{
            header("Location: index.php");
        }
	} 


	/**
	 * Destroy session
	 */
    public static function destroy() {
        session_destroy();
        session_unset();
    }
}