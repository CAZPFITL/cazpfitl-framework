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
	$position = $_SESSION["positions"];
	$xax = 0;

	/**
	 * POSITION TRANSFER TO JAVASCRIPT
	 **/ 
	echo '<script>positionsArray = ',json_encode($position),';</script>';
	
	/**
	 * LOAD VALIDATION
	 **/ 
	if(!empty($_POST['hash_position'])){ $_SESSION["position"] = $_POST['hash_position']; }

	/**
	 * hash set at the load 
	 */
	viewPrint($_SESSION["position"]);

	/**
	 * Proces the page called
	 */
	for ($i=0; $i < sizeof($position); $i++) { 

		$filename = "../../pages/$position[$i].php";
		//if exist in the array
		if ($_SESSION["position"] === $position[$i]){
			//if the file exist
			if (file_exists($filename)) {
				$xax++;
				insertPage($position[$i]);
			}else {
				$xax++;
				insertPage('file-missing.dontmissthis');
			}
		}
	}

	/**
	 * Send 404 in case of not founding the seached hash or page
	 */
	if ($xax === 0) {
		insertPage("404.dontmissthis");
	}
	
?>
<script>$.ajax({url: 'assets/javascript/_scripts.js',dataType: "script"});</script>

