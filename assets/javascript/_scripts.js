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
	/**
	 * Read the click and process the class SettedPositions to reload the page
	 */
	$('a').on('click auxclick contextmenu', function (event) {
		/**
		 * Right click
		 */
		if (event.which === 3) {
			if($(this).attr('href') === undefined) {
				if(event.type === 'contextmenu'){
					$(event.target).append('<div id="menu-click"><ul class="menu"><li class="option">Copy</li><li class="option">Copy Link</li><li class="option">Open Link in New Tab</li><li class="option">Open Link in New Window</li><li class="option">Open Link in New Incognito Window</li></ul></div>');
					event.preventDefault();
				}
			}else {
				return
			}
		}

		/**
		 * Middle Click
		 */
		else if (event.which === 2) {
			if ($(this).attr('href') === undefined) {
				window.open(window.location.hostname + "#" + $(this).attr('class'));
			} else {
				event.preventDefault();
				window.open($(this).attr('href'), "_blank");
			}
		}

		/**
		 * Left clivk
		 */
		else if (event.which === 1) {
			if ($(this).attr('href') === undefined) {
				clickToProcess($(this).attr('class'))
			} else {
				event.preventDefault();
				window.location.href = $(this).attr('href');
			}
		}
	});
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
