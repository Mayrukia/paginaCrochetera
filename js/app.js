var app = new Vue({

el: "#root",
data: {
	showingaddModal: false,
	showingeditModal: false,
	showingdeleteModal: false,
	showLogin:true,
	showAdmin:false,
	errorMessage: "",
	successMessage: "",
	productos: [],
	filtrados:[],
	newProd: {nombre: "", precio: "", categoria: "", descripcion: ""},
	clickedProd: {},
	categorias: [],
	carrito: [],
},

mounted: function () {
	this.getAllProductos();
	this.getAllCategorias();
},

methods: {

	addCarProd: function (prod) {
		if (this.carrito.includes(prod)) {
		  this.pos = this.carrito.indexOf(prod);
		  prod.cant = prod.cant+1;
		  this.carrito.splice(this.pos, 1,prod);
		}else{
		  prod.cant = 1;
		  this.carrito.push(prod);
		}
	},

	sumarCarrito: function (prod) {
		this.pos = this.carrito.indexOf(prod);
		prod.cant = prod.cant+1;
		this.carrito.splice(this.pos, 1,prod);
	},

	restarCarrito: function (prod) {
		this.pos = this.carrito.indexOf(prod);
		if ((prod.cant - 1) != 0) {
			prod.cant = prod.cant-1;
			this.carrito.splice(this.pos, 1,prod);
		}
	},

	deleteCarProd: function (index) {
        this.carrito.splice(index, 1);
	},

  	getAllProductos: function () {
  		axios.get('http://localhost/paginaCrochetera/api/v1.php?action=read')
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
