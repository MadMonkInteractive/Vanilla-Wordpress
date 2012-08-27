var c = {
	'log': function(mixed) {
		if (window.console && window.console.log) console.log(mixed); 
	}
}

var App = {
	'init': function() {
		c.log('App loaded');
	}
}

$(document).ready(function() {
	App.init();
});