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
  		axios.get('http://localhost/Vuejs/SerafinaVue/api/v3.php?action=read')
  		.then(function (response) {
  			if (response.data.error) {
  				app.errorMessage = response.data.message;
  			} else {
  				app.productos = response.data.productos;
  				app.filtrados = response.data.productos;
  			}
  		})
	},
		getAllCategorias: function () {
			axios.get('http://localhost/paginaCrochetera/api/v3.php?action=readCat')
			.then(function (response) {
				console.log(response);
				if (response.data.error) {
					app.errorMessage = response.data.message;
				} else {
					app.categorias = response.data.productos;
				}
			})
		},
    }
});
Vue.config.devtools = true;
