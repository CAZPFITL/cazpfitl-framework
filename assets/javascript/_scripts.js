(function () {

	// Run only in browsers.
	if (typeof document !== "undefined") {
		declarePageCalls();
		// load js objects
		$.ajax({ url: 'assets/javascript/objects/_plugins.js', dataType: "script"});
	}
	
})();

//--------------------------------------------------------------------------------------------
function declarePageCalls() {
	const LOCAL_DOMAINS = ["localhost", "127.0.0.1", "test"];
	/**
	 * Process all page links to avoid extra processes
	 */
	this.links = document.getElementsByTagName('a');
	this.hostReaded = window.location.hostname
	this.islocalHost = false
	/**
	 * LOCALHOST validation
	 */
	for (let a = 0; a < LOCAL_DOMAINS.length; a++) {
		if(this.hostReaded.includes(LOCAL_DOMAINS[a])===true){
			this.islocalHost = true
		}
	}
	/**
	 * links insertion
	 */
	for (let i = 0; i < this.links.length; ++i) {
		if(this.links[i].href === ''){
			if (this.islocalHost === true) {
				this.links[i].href = window.location.hostname + "#" + this.links[i].className
			}else {
				this.links[i].href = "https://www." + window.location.hostname + "#" + this.links[i].className
			}
		}
	}

	/**
	 * Reload the page on back button or hash change
	 */
	window.onhashchange = function () {
		loadHash();
	}
}


function clickToProcess(route) {
	positions = new SettedPositions(positionsArray).navigate(route)
}
//--------------------------------------------------------------------------------------------
