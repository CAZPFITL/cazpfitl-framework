<?php 
	//OBJECT
	//SHARED
	//DECLARE - PAGE ASSETS
	//-----------------------------------------------

	/**
	 * PRINT THE PHP CANVAS
	 **/ 
	function printCanvas() {
		
		include ("shared/header.dontmissthis.php");

		echo '            
		<div class="site-wrapper-response"></div>
		<script src="assets/javascript/_load-page.js"></script>';

	}

	/**
	 * PHP HANDLING IN PAGES FOLDER
	 **/ 
	function insertShared($target,$from) {
		if ($from === 'shared') {
			include ("shared/$target.php");
		}
		elseif ($from === 'pages') {
			include ("../../shared/$target.php");
		}
	}

	/**
	 * PHP HANDLING IN target.php
	 **/ 
	function insertPage($target) {
		include ("../../pages/$target.php");
	}

	/**
	 * PHP objects Handling in anyplace
	 **/ 
	function insertObject($target) {
		include ("../../objects/$target.php");
	}

	/**
	 * PRINTING THE VIEW
	 **/ 
	function hashUpload($view) {
		echo "	
				<script>
					window.location.hash = '",$view,"';
					window.location.href = window.location.href.replace('index.php', '');
				</script>";
	}

?>