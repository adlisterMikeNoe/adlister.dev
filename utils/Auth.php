<?php
require_once 'Logger.php';
class Auth
{
	public static $password = '$2y$10$SLjwBwdOVvnMgWxvTI4Gb.YVcmDlPTpQystHMO2Kfyi/DS8rgA0Fm';

	public function __construct() {}
	public static function attempt($user_name, $password)
	{
		if (password_verify($password, self::$password ) && $user_name == 'guest' ) 
		{
		
			$_SESSION['LOGGED_IN_USER'] = $user_name;
			$user = new Log();
			$user->logInfo("user $user_name logged in");

	 
		}else{
			$user = new Log();
			$user->logError("User $user_name failed to log in!");
		
			}

		
			// return $message

		// static function logError($message)
		// {
		// 	$this->logMessage('[Error]', $message);
	}

		public static function user($user_name)
		{
			return !isset($_SESSION['LOGGED_IN_USER']);
		}

		public static function check()
		{
			return isset($_SESSION['LOGGED_IN_USER']) ? true : false;
		}
		
		public static function logout()
		{
			$_SESSION = array();

			if (ini_get("session.use_cookies")) {
	        $params = session_get_cookie_params();
	        setcookie(session_name(), '', time() - 42000,
	            $params["path"], $params["domain"],
	            $params["secure"], $params["httponly"]
	        	);
	    	}
			// header('Location: login.php');
	    }
	    // session_destroy();

	}
?>