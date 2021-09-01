new Vue({
	el: "#Recientes",
	data: {
        Recientes:[],
        Contador:0
	},
	created: function() {
		// metodos que se deben inicicializan con la pagina.php
		this.cargarCategorias();
	},
	mounted: function() {
		//importaciones que debe poseer la pagina.php para uso de comboboc y chk modal ...
	},
	methods: {
	cargarCategorias:function(){
		url="http://localhost/VvSecurityWeb/index.php/Recientes";
		axios.post(url)
		.then(res=>{
		this.Recientes=res.data;
		})
		.catch(error=>{
			console.log(error);
		});
	}
	}, computed: {
		Borrar() {
		  return this.Recientes.filter((r, index) => index != 0);
		},
	  }
});