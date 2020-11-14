<?php 
	/**
	 * session start - this ables the SESSION Variables usage since this page is loaded via JQuery.
	 **/ 
	session_start();
	
	/**
	 * this allows the user to use any php function/object/shared on the page
	 **/
	foreach (glob('includes/*.static.php') as $filename) { 
		include $filename; 
	}
	
	/**
	 * SET POSITIONS
	 **/ 
	$positions = $_SESSION["positions"];
	$notFound = 0;

	/**
	 * POSITION TRANSFER TO JAVASCRIPT
	 **/ 
	echo '<script>positionsArray = ',json_encode($positions),';</script>';
	
	/**
	 * LOAD VALIDATION
	 **/ 
	if(!empty($_POST['hash_position'])){ $_SESSION["position"] = $_POST['hash_position']; }
	else {
		$_SESSION["position"] = $_SESSION["positions"][0];
	}

	/**	
	 * Proces the page called
	 */
	for ($i=0; $i < sizeof($positions); $i++) { 
		//set file position
		//if exist in the array
		if ($_SESSION["position"] === $positions[$i]){
			$filename = "../../pages/$positions[$i].php";
			if (file_exists($filename)) {
				$notFound++;
				hashUpload($_SESSION["position"]);
				include($filename);
			}else {
				$notFound++;
				hashUpload($_SESSION["position"]);
				insertPage('file-missing.dontmissthis');
			}
		}
	}
	
	/**
	 * Send 404 in case of not founding the seached hash or page
	 */
	if ($notFound === 0) {
		hashUpload($_SESSION["position"]);
		insertPage("404.dontmissthis");
	}
	
?>
<script>$.ajax({url: 'assets/javascript/_scripts.js',dataType: "script"});</script>

