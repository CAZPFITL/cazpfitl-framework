(function () {

	// Run only in browsers.
	if (typeof document !== "undefined") {
		declarePageCalls();
		// load js objects
		$.ajax({url: 'assets/javascript/objects/_plugins.js',dataType: "script",});
	}

})();

//--------------------------------------------------------------------------------------------

function declarePageCalls() {
	/**
	 * Read the click and process the class SettedPositions to reload the page
	 */
	$('a').on('click auxclick contextmenu', function(event) {
		//prevent a tag link default action 
		event.preventDefault();
		/**
		 * Only if a href attribute it's setted i a html tag it will take that a url as target, otherwhise will send to class
		 */
		if ($(this).attr('href') === undefined) {
			clickToProcess($(this).attr('class'))
		}else{
			window.location.href = $(this).attr('href');			
		}
	});
	/**
	 * Reload the page on back button or hash change
	 */
	window.onhashchange = function() {
		loadHash();
	}
}
function clickToProcess(route) {
	positions = new SettedPositions(positionsArray).navigate(route)
}
//--------------------------------------------------------------------------------------------
