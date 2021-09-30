new Vue({
	el: "#login",
	data: {
		//datos qiue recibe desde la pagina.php
		rut: "",
		clave: "",
		info: {}
	},
	created: function() {
		// metodos que se deben inicicializan con la pagina.php
	},
	mounted: function() {
		//importaciones que debe poseer la pagina.php para uso de comboboc y chk modal ...
	},
	methods: {
		// creacion de metodos para funcionalidad, etc...
		// window.location.href=res.data.ruta;
		LoginUser: function() {
			url = "http://localhost/VvSecurityWeb/index.php/BEGIN";
			param = new FormData();
			param.append("rut", this.rut);
			param.append("clave", this.clave);
			axios
				.post(url, param)
				.then(res => {
					this.info = res.data;
					if (this.info.ruta == "Usuario") {
						this.Notificacion();
						window.location.href = this.info.ruta;
					} else {
						this.Notificacion();
					}
				})
				.catch(error => {
					console.log(error);
				});
		},
		Notificacion: function() {
			const Toast = Swal.mixin({
				toast: true,
				position: "top-end",
				showConfirmButton: false,
				timer: 5000,
				timerProgressBar: true,
				didOpen: toast => {
					toast.addEventListener("mouseenter", Swal.stopTimer);
					toast.addEventListener("mouseleave", Swal.resumeTimer);
				}
			});

			if (this.info.msg == "Sesion Iniciada") {
				Toast.fire({
					icon: "success",
					title: this.info.msg
				});
			} else if (this.info.msg == "Clave Incorrecta") {
				Toast.fire({
					icon: "error",
					title: this.info.msg
				});
			} else {
				Toast.fire({
					icon: "info",
					title: this.info.msg
				});
			}
		}
	}
});
