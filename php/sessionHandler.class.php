<?
	/**
	 * create session variables 
	 * registered user is saved in session - this class handle it 
	 */
	class SessionHander {
		
		function __construct() {
			session_start();
		}
		
		/*\
		 * set user id for the current session
		 */
		public function setUser($userId) {
			    $_SESSION['userId'] = $userId;
		}
		/**
		 * return user id if registerd 
		 */
		public function getUser() {
		    return $_SESSION['userId'] ?: false;
		}
	}
	
?>