// Various modules and utilities
window._ = require('underscore');

// Jquery
if (window.$ === undefined || window.jQuery === undefined) {
	window.$ = window.jQuery = require('jquery');
}

// Twitter bootstrap
require('bootstrap/dist/js/npm');

// Vue.js
if (window.Vue === undefined) {
	window.Vue = require('vue');
}

// Datatables
require('datatables/media/js/jquery.dataTables');
require('datatables-bootstrap3-plugin/media/js/datatables-bootstrap3');

// Jquery.growl (not working??)
require('jquery.growl/javascripts/jquery.growl');

// Jquery.hotkeys
require('jquery.hotkeys/jquery.hotkeys');
