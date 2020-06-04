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
	},

	methods: {
        getAllProductos: function () {
			axios.get('http://localhost/paginaCrochetera/api/v1.php?action=read')
			.then(function (response) {
				console.log(response);
				if (response.data.error) {
					app.errorMessage = response.data.message;
				} else {
					app.productos = response.data.productos;
					app.filtrados = response.data.productos;
				}
			})
		},
    }
});
Vue.config.devtools = true;
