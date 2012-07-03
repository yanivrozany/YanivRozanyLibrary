<form name="search" method="POST">
	Search Query: <br>
	<input type="text" name="query" value="<?=$_POST['query']?>" />
</form>
<?
	$rows = $library->getResults();

	if ($rows[0]) {
		foreach($rows as $row) {
			 echo '<div>'.$row.'</div>';
			
		}
	}
?>