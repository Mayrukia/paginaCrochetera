var app = new Vue({

	el: "#root",
	data: {
    errorMessage: "",
		successMessage: "",
		productos: [],
		filtrados:[],
    },

    mounted: function () {
        console.log("running");
        this.getAllProductos();
				this.getAllCategorias();
	},

	methods: {
		getAllProductos: function () {
  		axios.get('http://localhost/paginaCrochetera/api/v3.php?action=read')
  		.then(function (response) {
  			if (response.data.error) {
  				app.errorMessage = response.data.message;
  			} else {
  				app.productos = response.data.productos;
  				app.filtrados = response.data.productos;
  			}
  		})
	},

  	addProducto: function () {
  		var formData = app.toFormData(app.newProd);
  		axios.post('http://localhost/paginaCrochetera/api/v1.php?action=create', formData)
  		.then(function (response) {
  			app.newProd = {nombre: "", precio: "", categoria: "", descripcion: ""};
  			if (response.data.error) {
  				app.errorMessage = response.data.message;
  			} else {
  				app.successMessage = response.data.message;
  				app.getAllProductos();
  			}
  		});
  	},

  	updateProducto: function () {
  		var formData = app.toFormData(app.clickedProd);
  		axios.post('http://localhost/paginaCrochetera/api/v1.php?action=update', formData)
  		.then(function (response) {
  			app.clickedProd = {};
  			if (response.data.error) {
  				app.errorMessage = response.data.message;
  			} else {
  				app.successMessage = response.data.message;
  				app.getAllProductos();
  			}
  		});
  	},

  	deleteProducto: function () {
  		var formData = app.toFormData(app.clickedProd);
  		axios.post('http://localhost/paginaCrochetera/api/v1.php?action=delete', formData)
  		.then(function (response) {
  			app.clickedProd = {};
  			if (response.data.error) {
  				app.errorMessage = response.data.message;
  			} else {
  				app.successMessage = response.data.message;
  				app.getAllProductos();
  			}
  		})
  	},

  	selectProducto(prod) {
  		app.clickedProd = prod;
  	},


  	toFormData: function (obj) {
  		var form_data = new FormData();
  		for (var key in obj) {
  			form_data.append(key, obj[key]);
  		}
  		return form_data;
  	},

  	clearMessage: function (argument) {
  		app.errorMessage   = "";
  		app.successMessage = "";
	  },


	// CATEGORIAS

	getAllCategorias: function () {
		axios.get('http://localhost/paginaCrochetera/api/v1.php?action=readcat')
		.then(function (response) {
			if (response.data.error) {
				app.errorMessage = response.data.message;
			} else {
				app.categorias = response.data.categorias;
			}
		})
	},

	selectCategoria(id) {
		// axios.get('http://localhost/Vuejs/SerafinaVue/api/v1.php?action=readxcat&cat='+id)
		// .then(function (response) {
		// 	if (response.data.error) {
		// 		app.errorMessage = response.data.message;
		// 	} else {
		// 		app.productos = response.data.productos;
		// 	}
		// })
		this.filtrados = this.productos.filter(prods => prods.categoria === id)
	},
	LoginIn: function (index) {
        this.showAdmin = true;
        this.showLogin = false
	},

	}
});
