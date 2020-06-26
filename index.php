<!DOCTYPE html>
<html>
<head>
<title>Todo Crocheting</title>
<!-- Vendor CSS Files -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/vendor/venobox/venobox.css">
<!-- Template Main CSS File -->
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/style2.css">
<!-- carpeta de img    /img -->

</head>
<body>
<div id="root">
<section id="categorias" class="contenedor">
    <div class="" v-for="cat in categorias">
        <div class="item" v-bind:style="{ backgroundImage: 'url(./img/Web/' + cat.id + '.jpg)' }">
        	<div class="textos"><h2 class="mb-5 ">{{cat.nombre}}</h2>
        		<button class="btn btn-success mt-5" type="button" name="button">Consultar</button>
        	</div>
        </div>
    </div>
</section>
</div>
<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="js/app.js"></script>
</body>
</html>
