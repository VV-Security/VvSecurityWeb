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
		$(".button-collapse").sideNav();
		$(".modal").modal();
		$(".dropdown").dropdown();
		$(".carousel").carousel({
			fullWidth: true,
			duration: 500
		});
		setInterval(function() {
			$(".carousel").carousel("next");
		}, 10000);
	},
	methods: {
		// creación de métodos para funcionalidad, etc...
	}
});
