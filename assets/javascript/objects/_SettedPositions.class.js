//THIS OBJECT GIVES THE LINK DIRECTION FUNCTIONALITY, BEEING ABLE TO LOAD ONLY PAGES SETTED IN THE PHP SECTION.
//IF THE LINK SETTED TRY TO REACH SOME PAGE NOT SETTED IN THE TARGE.PHP FILE, IT WILL BE REDIRECTED TO THE 404 PAGE
//---------------------
class SettedPositions {

	constructor(array) {
		// this brings the attays to the table to validate.
		this.positions = array;
	}

	callResponse(page) {
		// process the response and redirect the page to the selected one
		$(".site-wrapper-response").load("assets/php/target.php", {
			hash_position : page
		}, function() {});
	}

	processResponse(beta) {
		// process the link you got from the class name of the html tag
		this.link = beta;
		// clean any other class from the input
		this.link = this.link.replace(/(?<=^\w+)(\s.*)/g, '');
		//call response
		this.callResponse(this.link)
	}

	navigate(alpha) {
		// recieve a click response
		this.processResponse(alpha);
	}

}
