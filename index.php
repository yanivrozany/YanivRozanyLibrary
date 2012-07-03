
	<?
		foreach (glob("php/*.php") as $filename)
		{
		    include $filename;
		}
		error_reporting (E_ALL ^ E_NOTICE);
		$library = new Library($_POST);
		$pageHandler = new pageHandler($library->getPage());
		
		?>
		<!DOCTYPE html>
		<header>
			<link type="text/css" href="<?='http://'.'ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery.ui.all.css'?>" rel="stylesheet">
			<link type="text/css" href="<?='http://'.'ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery.ui.autocomplete.css'?>" rel="stylesheet">
			<script type="text/javascript" src="<?='http://'.'ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js'?>"></script>
			<script type="text/javascript" src="<?='http://'.'ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js'?>"></script>
			<script type="text/javascript" src="/testing/javascript/global.js"></script>
		</header>
		<body>
			<?
				if ($library->getError()) {
					?>
					<div style="border:1px solid red;margin:5px">
						<?=$library->getError()?>
					</div>
					<?
				}
				include 'templates/'.$pageHandler->viewPage();
			?>
		</body>	
		

