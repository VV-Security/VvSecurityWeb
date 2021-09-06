new Vue({
	el: "#datos",
	data: {
		Id: "",
		Rut: "",
		Primero: "",
		Segundo: "",
		Paterno: "",
		Materno: "",
		Email: "",
		Clave: "",
		Clave2: "",
		Tipo: "",
		Departamento_Id: "",
		Departamentos: [],
		Usuarios: [],
		InfoModal: [],
		msg: {}
	},
	created: function() {
		// metodos que se deben inicicializan con la pagina.php
		this.CargarUsuarios();
		this.CargarDeptos();
	},
	mounted: function() {
		//importaciones que debe poseer la pagina.php para uso de comboboc y chk modal ...
	},
	methods: {
		CargarDeptos: function() {
			url = "http://localhost/VvSecurityWeb/index.php/DP";
			axios
				.post(url)
				.then(res => {
					this.Departamentos = res.data;
				})
				.catch(error => {
					console.log(error);
				});
		},
		CargarUsuarios: function() {
			url = "http://localhost/VvSecurityWeb/index.php/userJoinDepto";
			axios
				.post(url)
				.then(res => {
					this.Usuarios = res.data;
				})
				.catch(error => {
					console.log(error);
				});
		},
		DatosModal: function(U) {
			this.InfoModal = U;
		},

		Modificar: function() {
			url = "http://localhost/VvSecurityWeb/index.php/updateUser";
			param = new FormData();
			param.append("id", this.InfoModal.Id);
			param.append("rut", this.InfoModal.Rut);
			param.append("primero", this.InfoModal.Primero);
			param.append("segundo", this.InfoModal.Segundo);
			param.append("paterno", this.InfoModal.Paterno);
			param.append("materno", this.InfoModal.Materno);
			param.append("mail", this.InfoModal.Mail);
			param.append("clave", this.InfoModal.Clave);
			param.append("estado", this.InfoModal.estado);
			param.append("depto_id", this.InfoModal.Departamento_Id);

			axios
				.post(url, param)
				.then(res => {
					this.msg = res.data;
					bootbox.alert("¡" + this.msg.msg + "!");
				})
				.catch(error => {
					console.log(error);
				});
			this.CargarUsuarios();
		},
		eliminar: function(U) {
			bootbox.confirm({
				message: "Esta seguro que quiere eliminar al usuario de rut: " + U.Rut,
				buttons: {
					confirm: {
						label: "si",
						className: "btn-success"
					},
					cancel: {
						label: "No",
						className: "btn-danger"
					}
				},
				callback: function(result) {
					if (result) {
						url = "http://localhost/VvSecurityWeb/index.php/deleteUser";
						param = new FormData();
						param.append("id", U.Id);
						axios
							.post(url, param)
							.then(res => {
								o = res.data;
								bootbox.alert("¡" + o.value + "!");
								this.CargarUsuarios();
							})
							.catch(error => {
								console.log(error);
							});
					}
				}
			});
		}
	}
});

new Vue({
	el: "#Agregar",
	data: {
		Rut: "",
		Primero: "",
		Segundo: "",
		Paterno: "",
		Materno: "",
		Email: "",
		Clave: "",
		Clave2: "",
		Tipo: -1,
		msg: {},
		Departamento_Id: -1,
		Departamentos: []
	},
	created: function() {
		// metodos que se deben inicicializan con la pagina.php
		this.CargarDeptos();
	},
	mounted: function() {
		//importaciones que debe poseer la pagina.php para uso de comboboc y chk modal ...
	},
	methods: {
		CargarDeptos: function() {
			url = "http://localhost/VvSecurityWeb/index.php/DP";
			axios
				.post(url)
				.then(res => {
					this.Departamentos = res.data;
				})
				.catch(error => {
					console.log(error);
				});
		},
		Insertar: function() {
			url = "http://localhost/VvSecurityWeb/index.php/insertUser";
			param = new FormData();
			param.append("rut", this.Rut);
			param.append("primero", this.Primero);
			param.append("segundo", this.Segundo);
			param.append("paterno", this.Paterno);
			param.append("materno", this.Materno);
			param.append("mail", this.Email);
			param.append("clave", this.Clave);
			param.append("estado", this.Tipo);
			param.append("depto_id", this.Departamento_Id);

			axios
				.post(url, param)
				.then(response => {
					this.msg = response.data;
					bootbox.alert("¡" + this.msg.msg + "!");
				})
				.catch(error => {
					console.log(error);
				});
		}
	}
});
