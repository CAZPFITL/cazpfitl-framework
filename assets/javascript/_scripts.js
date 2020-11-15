(function () {

	// Run only in browsers.
	if (typeof document !== "undefined") {
		/**
		 * Deploy page Scripts
		 */
		deployScripts();
		/**
		 * Load js plugins
		 */
		$.ajax({ url: 'assets/javascript/objects/_plugins.js', dataType: "script"});
	}

})();

//--------------------------------------------------------------------------------------------
function deployScripts() {
	/**
	 * Process all page links to avoid extra processes
	 */
	this.links = document.getElementsByTagName('a');
	for (let i = 0; i < this.links.length; ++i) {
		if(this.links[i].href === ''){
			this.links[i].href = "https://www." + window.location.hostname + "#" + this.links[i].className
		}
	}
	/**
	 * Reload the page on back button or hash change
	 */
	window.onhashchange = function () {
		loadHash();
	}
	/**
	 * 
	 */
	$("body").css({"position":"relative"});
}


function clickToProcess(route) {
	positions = new SettedPositions(positionsArray).navigate(route)
}
//--------------------------------------------------------------------------------------------
