<?php  
	session_start();
	
	$_SESSION["positions"] = $positions;
	
	ini_set('display_errors', 1);

	foreach (glob('assets/php/includes/*.static.php') as $filename) { 
		include $filename;
	}

	printCanvas();
?>


