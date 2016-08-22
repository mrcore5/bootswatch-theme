Vue.component('grid', {
	template: '#grid-template',
	mixins: [
		require('../grid')
	],

	ready() {
		console.log('grid component ready');
	},
});
