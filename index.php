<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="css/styles.css">
<!-- carpeta de img    /img -->
<head>
	<title></title>
</head>
<body>
	<!-- Navbar -->
	<!-- Navbar fin -->


	<!-- Slider -->
	<!-- Slider fin-->


	<!-- Mi Presentacion -->
	<!-- Mi Presentacion fin-->

	<!-- Show Productos -->
	<div class="" id="root">
		<div class="bg-warning">
			<p class="text-center">sin vuejs</p>
			{{filtrados
		<div class="bg-success">
			<p class="text-center">Lista de productos</p>
		</div>
		<br>
		<div v-for="producto in filtrados">
			<div class="menu-item">
				<div class="img-prod">
						<div class="icon-img-prod"></div>
						<img class="img-thumbnail" loading="lazy" :src="`images/${producto.id}.jpg`">
				</div>
				<div class="nom-prod">{{producto.nombre}}</div>
				<div class="precio-prod">${{producto.precio}}</div>
			</div>
		</div>
	</div>

	<!-- Show Productos End-->


	<!-- Redes -->
	<!-- Redes End-->

	<!-- footer -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-6 text-center bg-drak">

				</div>
			</div>
		</div>
	</footer>
	<!-- footer fin-->
</body>
<!-- JS, Popper.js, and jQuery -->
<script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
<script src="js/app.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</html>
