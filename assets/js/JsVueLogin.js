new Vue({
	el: "#login",
	data: {
		//datos qiue recibe desde la pagina.php
		rut: "",
		clave: "",
		rsp: "",
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
					// alert(this.info.msg);
					if (this.info.ruta == "Usuario") {
						window.location.href = res.data.ruta;
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
				timer: 3000,
				timerProgressBar: true,
				didOpen: toast => {
					toast.addEventListener("mouseenter", Swal.stopTimer);
					toast.addEventListener("mouseleave", Swal.resumeTimer);
				}
			});

			Toast.fire({
				icon: "warning",
				title: this.info.msg
			});
		}
	}
});
