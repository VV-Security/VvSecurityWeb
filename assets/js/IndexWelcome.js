new Vue({
	el: "main",
	data: {
		//datos que recibe desde la pagina.php
	},
	created: function() {
		// metodos que se deben inicializan con la pagina.php
	},
	mounted: function() {
		//importaciones que debe poseer la pagina.php para uso de combobox y chk modal ..
		$(".parallax").parallax();
		$(".carousel").carousel();
		$(".button-collapse").sideNav();
	},
	methods: {
		// creacion de metodos para funcionalidad, etc...
	}
});
