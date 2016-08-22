// This is vue GUTS..but not actually a component

//var notify = Vue.extend({
//export default function notify() {
module.exports = {
//Vue.component('notify', {

 	//template: '<div v-show="ok">Notify Text: {{ ok }}</div>',
	//props: ['user'],

	data() {
		return {
			'ok': false
		}
	},


	// define methods under the `methods` object
	methods: {
		notify: function (event) {
			// `this` inside methods point to the Vue instance
			this.ok = 'asdf';
			//alert('notify here ' + this.ok);
			$.growl({ title: "Growl", message: "The kitten is awake!" });
			// `event` is the native DOM event
			//alert(event.target.tagName)

		}
	},

//});
}
