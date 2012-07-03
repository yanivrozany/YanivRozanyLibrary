<?
	/**
	 * very simple define if the user exists or not
	 * display user details 
	 */
	class User {
		private $userDetails;
		function __construct($username = false,$password = false,$dbHandler = false) {
			if ($username) {
				 $this->userDetails = $dbHandler->getUserDetails($username,$password);
			
			}	
		}
		
		public function exists() {
			if ($this->userDetails['id']) {
				return true;
			} else {
				return false;
			}
		} 
		public function getID(){
			return $this->userDetails['id'];
		}
	}
	
?>