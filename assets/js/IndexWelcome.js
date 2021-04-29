new Vue({
	el: "main",
	data: {
		//datos que recibe desde la pagina.php
	},
	created: function() {
		// metodos que se deben inicializan con la pagina.php
		this.RotarCarousel();
	},
	mounted: function() {
		//importaciones que debe poseer la pagina.php para uso de combobox y chk modal ..
		$(".parallax").parallax();
		$(".button-collapse").sideNav();
		$(".modal").modal();
		$(".dropdown-button").dropdown({
			inDuration: 300,
			outDuration: 225,
			hover: true, // Activate on hover
			gutter: 0, // Spacing from edge
			belowOrigin: true, // Displays dropdown below the button
			alignment: "left", // Displays dropdown with edge aligned to the left of button
			stopPropagation: true // Stops event propagation
		});
		$(".carousel").carousel({
			fullWidth: true,
			duration: 500
		});
		setInterval(function() {
			$(".carousel").carousel("next");
		}, 8000);
	},
	methods: {
		// creación de métodos para funcionalidad, etc...
	}
});
