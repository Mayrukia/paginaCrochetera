<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
<link rel="stylesheet" href="css/styles.css">
<!-- carpeta de img    /img -->
<head>
	<title></title>
</head>
<body>
 <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">
      <div id="logo" class="pull-left">
        <a href="#hero"><img src="assets/img/logo.png" alt=""></a>
        <!-- Uncomment below if you prefer to use a text logo -->
        <!--<h1><a href="#hero">Regna</a></h1>-->
      </div>
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Home</a></li>
          <li><a href="#about">Sobre nosotros</a></li>
          <li><a href="#services">Servicios</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#team">Equipo</a></li>
          <li class="menu-has-children"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="menu-has-children"><a href="#">Drop Down 2</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contactos</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- End Header -->
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <h1>Bienvenidos a la pagina Crochetera </h1>
      <h2> agregar descripcion</h2>
      <a href="#about" class="btn-get-started">Empezar</a>
    </div>
  </section>
  <!-- End Hero Section -->
	<!-- Navbar fin -->
	<!-- Slider -->
	<!-- Slider fin-->
	<!-- Mi Presentacion -->
	 <!-- ======= inicio mariano ======= -->
    <section id="facts">
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="section-title">Galeria de productos</h3>
          <p class="section-description">txt/img</p>
        </div>
        <div class="row counters">
          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">txt/img</span>
            <p>Productos</p>
          </div>
          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">txt img</span>
            <p>Categoria</p>
          </div>
          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">txt img</span>
            <p>Colores</p>
          </div>
          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">txt img</span>
            <p>Trabajadores/as</p>
          </div>
        </div>
    <!-- End mariano -->
	<!-- Mi Presentacion fin-->
	<!-- Show Productos -->
	<div class="" id="root">
    <div class="container
        <p class="text-center text-dark display-4">Lista de categorias</p>
        <div class="justify-content-center text-center">
          <p v-for="categoria in categorias" class="btn btn-success text-center p-2 m-2">{{categoria.nombre}}</p>

      </div>
		<div class="">
			<p class="text-center text-dark display-4">Lista de productos</p>
		</div>
		<div v-for="producto in filtrados" class="col-lg-3 col-6 text-center">
      <div class="card">
        <div class="card-title">{{producto.nombre}}</div>
        <div class="card-img"><img class="img-thumbnail" loading="lazy" :src="`images/${producto.id}.jpg`"></div>
        <div class="card-footer">Precio ${{producto.precio}}</div>
      </div>
		</div>
	</div>
 </div>
    </section>
	<!-- Show Productos End-->
	<!-- Redes -->
	<!-- Redes End-->
	<!-- footer -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-6 text-center">
					<p></p>
				<div class="col-6 text-center bg-drak">
				</div>
			</div>
		</div>
	</footer>
	<!-- footer fin-->
</body>
<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="js/app.js"></script>
</html>
