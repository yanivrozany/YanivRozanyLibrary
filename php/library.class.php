<?
	/**
	 * handle all relevant tasks
	 * work with DB and Session calsses
	 */
	class Library {
		private $dbHandler;
		private $sessionHandler;
		private $page;
		private $errorString;
		private $bookResults;
		
		//while constracting this class the page is set and also the search results
		function __construct($params = false) {
			$this->dbHandler = new DBHandler();
			$this->sessionHandler = new SessionHander();
			
			if ($this->sessionHandler->getUser()) {
				$this->page = 'search.php';
				$this->searchResults($params['query']);
			} elseif ($params['action'] == 'login') {
				$this->login($params);
			} 
				
		}
		
		//relevant getters
		public function getPage(){
			return $this->page;
		}
		public function getError(){
			return $this->errorString;
		}	
		
		public function getResults() {
			return $this->booksResults;
		}
		
		
		//login already registered user.and saving session
		private function login($params) {
			$user = new User($params['username'],$params['password'],$this->dbHandler);
			if ($user->exists()) {
				$this->sessionHandler->setUser($user->getID());
				$this->searchResults();
				$this->page = 'search.php';
			} else {
				$this->errorString = 'Login Failed';
			}
		}
		
		
		
		//ask the DB for results 
		private function searchResults($query = false) {
			$this->booksResults = $this->dbHandler->searchBooks($query);
		}
	}
	
?>