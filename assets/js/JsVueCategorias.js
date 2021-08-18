var URLactual = window.location; URLactual = URLactual.toString();
var Cortar = URLactual.split("/");
var CategoriaUrl = Cortar[6];
var id_categoria = 0;
new Vue({
	el: "#main",
	data: {
    Titulo:CategoriaUrl,
    Url: URLactual,
    Noticias:[]
	},
	created: function() {
		// metodos que se deben inicicializan con la pagina.php
		this.BuscarCategorias();
        
	},
	mounted: function() {
		//importaciones que debe poseer la pagina.php para uso de comboboc y chk modal ...
	},
	methods: {
	BuscarCategorias:function(){
		url="http://localhost/VvSecurityWeb/index.php/BuscarCategorias";
        param = new FormData();
        param.append("Nombre",CategoriaUrl);
		axios.post(url,param)
		.then(res=>{
        this.CargarNoticias(res.data[0]["Id"]);
		})
		.catch(error=>{
			console.log(error);
		});
	},CargarNoticias:function(Id){
        url="http://localhost/VvSecurityWeb/index.php/BuscarNoticias";
        param = new FormData();
        param.append("Categoria_Id",Id);
		axios.post(url,param)
		.then(res=>{
		this.Noticias=res.data;
		})
		.catch(error=>{
			console.log(error);
		});
    }
	}
    
});