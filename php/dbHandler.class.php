<?
	/**
	 * this is the only class that work on  DB
	 * handle all request from library
	 */
	class DBHandler {
		
		function __construct($argument = fase) {
			$con = mysql_connect('localhost',"root",false);
			if (!$con) {
				die('Could not connect: ' . mysql_error());
			}
			$db_selected = mysql_select_db('library', $con);
			if (!$db_selected) {
				die ('Can\'t use foo : ' . mysql_error());
			}
		}
		
		private function setSQL($queryString) {
			$results = mysql_query($queryString);
			return $results;
			
		}
		
		//  function defined if the query is found in the tables
		// 	this function is for 1 row results 
		private function checkExsits($queryString) {
			$data = $this->setSQL($queryString);
			$rows = mysql_fetch_array($data);
			if ($rows[0]) {
				return $rows[0];
			} else {
				return false;
			}
		}
		
		//return rows of books matching this query 
		// if no query selected returns all books
		public function searchBooks($query) {
			
			$queryString = "SELECT * FROM `books`";
			if ($query) {
				$queryString .=" WHERE `title` like '%$query%' OR `authorName` like '%$query%'";
			}
			$data = $this->setSQL($queryString);
			if ($data) {
				return $this->getAllRowsFromBooksTable($data);
			} else {
				return false;
			}
		}
		
		// return only the relevent params for display
		private function getAllRowsFromBooksTable($data) {
			$rows = array();
			while($row = mysql_fetch_array($data)){
				 $rows[] = $row['title']. " - ". $row['authorName'];
			}
			return $rows;
		}
		
		//will return false on failer
		public function getUserDetails($username,$password) {
			return $this->checkExsits("SELECT * FROM `users` WHERE `password`='$password' AND `username`='$username'");
		}
	}
	
?>