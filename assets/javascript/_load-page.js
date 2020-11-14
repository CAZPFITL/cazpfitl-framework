// set positions array
let positionsArray;
// load _SettedPositions.class.js class
$.ajax({url: 'assets/javascript/objects/_SettedPositions.class.js',dataType: "script",});

//--------------------------------------------------------------------------------------------

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

//--------------------------------------------------------------------------------------------

loadHash();

//--------------------------------------------------------------------------------------------

