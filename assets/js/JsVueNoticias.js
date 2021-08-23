new Vue({
	el: "#NavCat",
	data: {
	categorias:[]
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
		url="http://localhost/VvSecurityWeb/index.php/Categoria";
		axios.post(url)
		.then(res=>{
		this.categorias=res.data;
		})
		.catch(error=>{
			console.log(error);
		});
	}
	}
});