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
		$(".slider").slider();
		$(".carousel.carousel-slider").carousel({ duration: 100 });
		$(".carousel").carousel("next");
		$(".carousel").carousel("next", 2);
	},
	methods: {
		// creacion de metodos para funcionalidad, etc...
	}
});
