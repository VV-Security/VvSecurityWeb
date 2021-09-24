var vm = new Vue({
	el: "#usuarios",
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
		Tipo: -1,
		Departamento_Id: -1,
		msg: {},
		ValidacionRut: "",
		ValidacionPrimero: "",
		ValidacionSegundo: "",
		ValidacionPaterno: "",
		ValidacionMaterno: "",
		ValidacionMail: "",
		ValidacionClave: "",
		ValidacionClave2: "",
		ValidacionTipo: "",
		ValidacionDepartamentos: "",
		ArrayTipo: [
			{ valor: 0, Tipo: "Admin" },
			{ valor: 1, Tipo: "Basico" },
			{ valor: 2, Tipo: "Intermedio" },
			{ valor: 3, Tipo: "Avanzado" },
			{ valor: 4, Tipo: "Inactivo" }
		],
		Departamentos: [],
		Usuarios: [],
		InfoModal: []
	},
	created: function() {
		// metodos que se deben inicializan con la pagina.php
		this.CargarUsuarios();
		this.CargarDeptos();
	},
	mounted: function() {
		//importaciones que debe poseer la pagina.php para uso de combobox y chk modal ...
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
			//alert("AAAAAAAAAA");
			//url = "http://localhost/VvSecurityWeb/index.php/User";
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
			param.append("clave", this.InfoModal.Clave3);
			param.append("estado", this.InfoModal.Estado);
			param.append("depto_id", this.InfoModal.Id_Departamento);

			axios
				.post(url, param)
				.then(res => {
					this.msg = res.data;
					bootbox.alert("" + this.msg.msg);
					this.CargarUsuarios();
				})
				.catch(error => {
					console.log(error);
				});
		},
		Eliminar: function(U) {
			var alerta = confirm(
				"¿Confirmar eliminacion de " +
					U.Primero +
					" " +
					U.Paterno +
					" - " +
					U.Rut +
					"?"
			);
			if (alerta) {
				url = "http://localhost/VvSecurityWeb/index.php/deleteUser";
				param = new FormData();
				param.append("id", U.Id_User);
				axios
					.post(url, param)
					.then(res => {
						this.msg = res.data;
						bootbox.alert("" + this.msg.msg);
						this.CargarUsuarios;
					})
					.catch(error => {
						console.log(error);
					});
			} else {
				bootbox.alert("No Eliminado");
			}
		},
		Insertar: function() {
			if (
				this.ValidacionRut == "" &&
				this.ValidacionPrimero == "" &&
				this.ValidacionSegundo == "" &&
				this.ValidacionPaterno == "" &&
				this.ValidacionMaterno == "" &&
				this.ValidacionMail == "" &&
				(this.ValidacionClave == "Débil!" ||
					this.ValidacionClave == "Media!" ||
					this.ValidacionClave == "Fuerte!") &&
				this.ValidacionClave2 == "" &&
				this.ValidacionTipo == "" &&
				this.Tipo != -1 &&
				this.ValidacionDepartamentos == "" &&
				this.Departamento_Id != -1
			) {
				if (
					this.Rut == "" ||
					this.Primero == "" ||
					this.Segundo == "" ||
					this.Paterno == "" ||
					this.Materno == "" ||
					this.Email == "" ||
					this.Clave == "" ||
					this.Clave2 == ""
				) {
					this.rut();
					this.mail();
					this.primero();
					this.segundo();
					this.paterno();
					this.materno();
					this.clave();
					this.tipo();
					this.departamento();
				} else {
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
						.then(res => {
							this.msg = res.data;
							bootbox.alert("" + this.msg.msg);
							this.CargarUsuarios();
							this.limpiarInputs();
						})
						.catch(error => {
							console.log(error);
						});
					$("#Agregar").modal("toggle");
				}
			} else {
				this.rut();
				this.mail();
				this.primero();
				this.segundo();
				this.paterno();
				this.materno();
				this.clave();
				this.tipo();
				this.departamento();
			}
		},
		validaRut: function(rutCompleto) {
			if (!/^[0-9]+[-|‐]{1}[0-9kK]{1}$/.test(rutCompleto)) return false;
			var tmp = rutCompleto.split("-");
			var digv = tmp[1];
			var rut = tmp[0];
			if (digv == "K") digv = "k";
			return this.dv(rut) == digv;
		},
		dv: function(T) {
			var M = 0,
				S = 1;
			for (; T; T = Math.floor(T / 10))
				S = (S + (T % 10) * (9 - (M++ % 6))) % 11;
			return S ? S - 1 : "k";
		},
		validarMail: function(Mail) {
			emailRegex = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
			//Se muestra un texto a modo de ejemplo, luego va a ser un icono
			if (emailRegex.test(Mail)) {
				return true;
			} else {
				return false;
			}
		},
		SeguridadClave: function(clave) {
			strongRegex = new RegExp(
				"^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$",
				"g"
			);
			mediumRegex = new RegExp(
				"^(?=.{7,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$",
				"g"
			);
			enoughRegex = new RegExp("(?=.{6,}).*", "g");
			if (false == enoughRegex.test(clave)) {
				this.ValidacionClave = "Más caracteres";
			} else if (strongRegex.test(clave)) {
				this.ValidacionClave = "Fuerte!";
			} else if (mediumRegex.test(clave)) {
				this.ValidacionClave = "Media!";
			} else {
				this.ValidacionClave = "Débil!";
			}
		},
		rut: function() {
			if (this.validaRut(this.Rut)) {
				this.ValidacionRut = "";
			} else {
				this.ValidacionRut = "Rut inválido";
			}
		},
		mail: function() {
			if (this.validarMail(this.Email)) {
				this.ValidacionMail = "";
			} else {
				this.ValidacionMail = "Mail inválido";
			}
		},
		primero: function() {
			if (this.Primero == "") {
				this.ValidacionPrimero = "Ingrese un Nombre porfavor";
			} else {
				this.ValidacionPrimero = "";
			}
		},
		segundo: function() {
			if (this.Segundo == "") {
				this.ValidacionSegundo = "Ingrese un Nombre por favor";
			} else {
				this.ValidacionSegundo = "";
			}
		},
		paterno: function() {
			if (this.Paterno == "") {
				this.ValidacionPaterno = "Ingrese un Apellido por favor";
			} else {
				this.ValidacionPaterno = "";
			}
		},
		materno: function() {
			if (this.Materno == "") {
				this.ValidacionMaterno = "Ingrese un Apellido por favor";
			} else {
				this.ValidacionMaterno = "";
			}
		},
		clave: function() {
			this.SeguridadClave(this.Clave);
		},
		clave2: function() {
			if (this.Clave == this.Clave2) {
				this.ValidacionClave2 = "";
			} else {
				this.ValidacionClave2 = "Las Contraseñas no coinciden!";
			}
		},
		tipo: function() {
			if (this.Tipo == -1) {
				this.ValidacionTipo = "Selecciona un Perfil!";
			} else {
				this.ValidacionTipo = "";
			}
		},
		departamento: function() {
			if (this.Departamento_Id == -1) {
				this.ValidacionDepartamentos = "Selecciona un Departamento!";
			} else {
				this.ValidacionDepartamentos = "";
			}
		},
		limpiarInputs: function() {
			this.Rut = "";
			this.Primero = "";
			this.Segundo = "";
			this.Paterno = "";
			this.Materno = "";
			this.Email = "";
			this.Clave = "";
			this.Clave2 = "";
			this.Tipo = -1;
			this.Departamento_Id = -1;
			this.CargarUsuarios();
		},
		notificacion: function() {
			bootbox.alert("" + this.msg.msg);
		}
	}
});
