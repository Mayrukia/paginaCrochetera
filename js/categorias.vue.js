var Categorias = new Vue({

	el: "#app-categorias",
	data: {
        errorMessage: "",
        successMessage: "",
        categorias: [],
    },

    mounted: function () {
        console.log("running");
		this.getAllCategorias();
	},

	methods: {
		getAllCategorias: function () {
            axios.get('http://localhost/paginaCrochetera/api/v1.php?action=readCat')
            .then(function (response) {
                console.log(response);
                if (response.data.error) {
                    app.errorMessage = response.data.message;
                } else {
                    app.categorias = response.data.categorias;
                }
            })
        },
    }
});
Vue.config.devtools = true;
