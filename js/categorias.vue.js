var Categorias = new Vue({

	el: "#header",
	data: {
        errorMessage: "",
        successMessage: "",
        categoria: [],
        subcategoria: [],
    },

    mounted: function () {
        console.log("running");
		this.getAllCategoria();
		this.getAllSubcategoria();
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
        getAllSubcategoria: function () {
            axios.get('http://localhost/paginaCrochetera/api/categorias.api.php?action=readsub')
            .then(function (response) {
                console.log(response.data.categoria);
                if (response.data.error) {
                    Categorias.errorMessage = response.data.message;
                } else {
                    Categorias.subcategoria = response.data.subcategoria;
                }
            })
        },
    }
});
Vue.config.devtools = true;
