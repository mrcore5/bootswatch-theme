// Define components to require
var components = [
	'grid',
	'notify',
	'home'

];

// Require each component in array
_.each(components, function(component) {
	require('../components/' + component + '.js');
});

require('../grid');
require('../notify');
