<?
	//view handler - in this project i used as templates genterator
	class pageHandler  {
		private  $specificPage;
		function __construct($page = false) {
			$this->specificPage = $page;
		}
		
		
		public function  viewPage() {
			$sessionHandler = new SessionHander();
			if ($this->specificPage) {
				return $this->specificPage;
			} elseif ($sessionHandler->getUser()) {
				return 'search.php';
			} else {
				return 'login.php';
			}
		}
	}
	
?>