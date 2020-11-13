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
	$('a').click(function(event) {
		clickToProcess($(this).attr('class'));
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

localStorage.setItem('home', positionsArray[0])
//--------------------------------------------------------------------------------------------