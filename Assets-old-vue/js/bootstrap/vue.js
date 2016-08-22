var app = new Vue({
	el: 'body',

	data: {
		user: "mreschke",

		searchQuery: '',
		gridColumns: ['name', 'power'],
		gridData: [
			{ name: 'Chuck Norris', power: Infinity },
			{ name: 'Bruce Lee', power: 9000 },
			{ name: 'Jackie Chan', power: 7000 },
			{ name: 'Jet Li', power: 8000 }
		]
	},

	ready() {
		console.log('Application ready');
	},

	/*events: {
		'notify': function () {
			// `this` in event callbacks are automatically bound
			// to the instance that registered it
			//this.messages.push(msg)
			alert('this is an event handler, notify');

		}
	},*/

});
