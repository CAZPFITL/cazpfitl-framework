/**
 * DECLARE all href from the page
 */
function declareUrls() {
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
			/**
			 * Clean the class name to have only the first class name to the href declarations
			 */
			this.link = this.links[i].className
			this.link = this.link.replace(/(?<=^\w+)(\s.*)/g, '');
			/**
			 * HREF page declarations
			 */
			if (this.islocalHost === true) {
				this.links[i].href = "#" + this.link
			}else {
				this.links[i].href = "https://www." + window.location.hostname + "#" + this.link
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

function loadHash() {
	this.home = localStorage.getItem('home')
	//URL READING
	this.hashReaded = location.hash.substring(1);
	// validate if the # its empty in the url
	if (this.hashReaded === '' || this.hashReaded === null) {this.position = this.home}
	// set position
	else {this.position = this.hashReaded}

	// if position its on, lets go
	if (this.position != '' || this.position == null) {
		$(".site-wrapper-response").load("assets/php/target.php", {
			hash_position : position
		}, function() {});
	};
};

loadHash();