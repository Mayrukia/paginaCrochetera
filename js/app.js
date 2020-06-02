var app = new Vue({

	el: "#root",
	data: {
        algo: "algo"
    },

    mounted: function () {
        console.log(this.algo);
	},

	methods: {

    }
});
Vue.config.devtools = true;