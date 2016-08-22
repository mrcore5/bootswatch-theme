Vue.component('home', {
	mixins: [
		require('../notify')
	],

	//props: ['user'],

	data() {
		return {
			'user2': 'Matthew2 Reschke2'
		}
	},

	/*methods: {
		notify: function(event) {
			alert('x');
			this.$dispatch('notify');
		}
	},*/

	ready() {
		console.log('app-test component ready user: ' + this.user2);
	}
});
