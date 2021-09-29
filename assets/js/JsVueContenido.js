var URLactual = window.location;
URLactual = URLactual.toString();
var Cortar = URLactual.split("/");
var Contenido_Url = Cortar[7];
var Titulo = Contenido_Url.replaceAll("_", " ");
new Vue({
	el: "#Conte",
	data: {
		Url: URLactual,
		Contenido: []
	},
	created: function() {
		// metodos que se deben inicicializan con la pagina.php
		this.CargarNoticias_Titulo(Titulo);
	},
	mounted: function() {
		//importaciones que debe poseer la pagina.php para uso de comboboc y chk modal ...
	},
	methods: {
		CargarNoticias_Titulo: function(Titulo) {
			url = "http://localhost/VvSecurityWeb/index.php/BuscarNoticias_Titulo";
			param = new FormData();
			param.append("Titulo", Titulo);
			axios
				.post(url, param)
				.then(res => {
					this.Contenido = res.data;
				})
				.catch(error => {
					console.log(error);
				});
		}
	}
});
