var Categorias = new Vue({

	el: "#header",
	data: {
        errorMessage: "",
        successMessage: "",
        categoria: [],
        algo: "algo"
    },

    mounted: function () {
        console.log("running");
		this.getAllCategoria();
	},

	methods: {
		getAllCategoria: function () {
            axios.get('http://localhost/paginaCrochetera/api/categorias.api.php?action=read')
            .then(function (response) {
                console.log(response.data.categoria);
                if (response.data.error) {
                    Categorias.errorMessage = response.data.message;
                } else {
                    Categorias.categoria = response.data.categoria;
                }
            })
        },
    }
});
Vue.config.devtools = true;
