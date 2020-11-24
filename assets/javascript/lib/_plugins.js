function pluginLoad() {

}

(function () {
	/**
	 * ONLY BROWSERS
	 */
	if (typeof document !== "undefined") {
		/**
		 * LOAD plugins
		 */
		pluginLoad();
		/**
		 * CALL plugins
		 */
		function callPlugins() {
			IDONTEXIST.init();
		}
		callPlugins();
		/**
		 * DEBBUG
		 */
		callPlugins.on('uncaughtException', function(error) {
			console.log(error);
		});
	}
})();
