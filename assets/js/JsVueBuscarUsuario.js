new Vue({
	el: "#datos",
	data: {
    Usuarios:[],
	Id:'',
	Rut:'',
	Primero:'',
	Segundo:'',
	Paterno:'',
	Materno:'',
	Email:'',
	Clave:'',
	Departamento_Id:''
	},
	created: function() {
		// metodos que se deben inicicializan con la pagina.php
		this.CargarUsuarios();
	},
	mounted: function() {
		//importaciones que debe poseer la pagina.php para uso de comboboc y chk modal ...
	},
	methods: {
CargarUsuarios:function(){
        url="http://localhost/VvSecurityWeb/index.php/User";
        axios.post(url)
		.then(res=>{
		this.Usuarios=res.data;
		})
		.catch(error=>{
			console.log(error);
		});
    },

	Modificar:function(U){

		this.Rut=U.Rut;
		this.Primero=U.Primero;
		this.Segundo=U.Segundo;
		this.Paterno=U.Paterno;
		this.Materno=U.Materno;
		this.Email=U.Mail;
		this.Clave=U.Clave;
		this.Departamento_Id=U.Departamento_Id;


		url="http://localhost/VvSecurityWeb/index.php/updateUser";
		param = new FormData();
		param.append("id",U.Id);
		param.append("rut",this.Rut);
		param.append("primero",this.Primero);
		param.append("segundo",this.Segundo);
		param.append("paterno",this.Paterno);
		param.append("materno",this.Materno);
		param.append("mail",this.Email);
		param.append("clave",this.Clave);
		param.append("estado",U.estado);
		param.append("depto_id",this.Departamento_Id);
		axios.post(url,param)
		.then(res=>{
			o = res.data;
			M.toast({html:o.value});
		this.CargarUsuarios();
		})
		.catch(error=>{
			console.log(error);
		});
	},
	eliminar:function(U){
		bootbox.confirm({
			message: "Esta seguro que quiere eliminar al usuario de rut: "+U.Rut,
			buttons: {
				confirm: {
					label: 'si',
					className: 'btn-success'
				},
				cancel: {
					label: 'No',
					className: 'btn-danger'
				}
			},
			callback: function (result) {
				if(result){
					url="http://localhost/VvSecurityWeb/index.php/deleteUser";
					param = new FormData();
					param.append("id",U.Id);
					axios.post(url,param)
					.then(res=>{
						o = res.data;
						M.toast({html:o.value});
					this.CargarUsuarios();
					})
					.catch(error=>{
						console.log(error);
					});
				}
			}
		});
	}
	}

});

new Vue(
	{
	el: "#Agregar",
	data: {
		Rut:'',
		Primero:'',
		Segundo:'',
		Paterno:'',
		Materno:'',
		Email:'',
		Clave:'',
		Departamento_Id:''
	},
	created: function() {
		// metodos que se deben inicicializan con la pagina.php

	},
	mounted: function() {
		//importaciones que debe poseer la pagina.php para uso de comboboc y chk modal ...
	},
	methods: {
		Insertar:function(){
			url="http://localhost/VvSecurityWeb/index.php/insertUser";
					param = new FormData();
					param.append("rut",this.Rut);
					param.append("primero",this.Primero);
					param.append("segundo",this.Segundo);
					param.append("paterno",this.Paterno);
					param.append("materno",this.Materno);
					param.append("mail",this.Email);
					param.append("clave",this.Clave);
					param.append("estado",0);
					param.append("depto_id",this.Departamento_Id);
					axios.post(url,param)
					.then(res=>{
						o = res.data;
						Console.log(o.value);
					this.CargarUsuarios();
					})
					.catch(error=>{
						console.log(error);
					});
		}
	}
}

);
