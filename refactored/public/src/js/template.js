module.exports = new Vue({
	el: "#app",
	data: {
		title: "News and Comments",
		open: "############ NEWS ",
		close: " ############",
		show: false,
		hide: true,
		comment: "Comment ",
		nav: ['Home', 'About', 'Contacts'],
		drop: ['AddNews', 'AddCommentToNews', 'Help', 'Log Out']
	},
	methods: {
		toggle: function(){
			this.show = !this.show;
			this.hide = !this.hide;
		},
		coverClass: function(){
			return {
					 show: this.show,
				 	 hide: this.hide
				 	};
		},
		greet: function(){
			return 'Good Day!';
		}
	}
});