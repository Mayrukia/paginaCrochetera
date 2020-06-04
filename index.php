<!DOCTYPE html>
<html>
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
	<!-- Navbar -->
	<!-- Navbar fin -->
	<!-- Slider -->
	<div class="" id="root">
<<<<<<< HEAD
			<div class="container">
				<div class="row">
					<div class="col-md-12">
							<div class="col-md-3">
								<div v-for="producto in productos" class="card">
										<div class="card-title">
											{{producto.nombre}}
										</div>
										<div class="card-body">
										</div>
										<div class="card-footer">
										</div>
								</div>
							</div>
					</div>
=======
		<div class="bg-warning">
			<p class="text-center">sin vuejs</p>
		<div class="bg-success">
			<p class="text-center">Lista de productos</p>
		</div>
		<br>
		<div v-for="productos in filtrados">
			<div class="menu-item">
				<div class="img-prod">
						<div class="icon-img-prod"></div>
						<img class="img-thumbnail" loading="lazy" :src="`images/${productos.id}.jpg`">
>>>>>>> develop
				</div>
			</div>
	</div>

	<!-- Slider fin-->
	<!-- Mi Presentacion -->
	 <!-- ======= inicio mariano ======= -->
    <section id="facts">
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="section-title">Galeria de prodcutos</h3>
          <p class="section-description">txt/img</p>
        </div>
        <div class="row counters">
          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">txt/img</span>
            <p>Prodcutos</p>
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
      </div>
    </section>
    <!-- End mariano -->
	<!-- Mi Presentacion fin-->
	<!-- Show Productos -->
	<!-- Show Productos End-->
	<!-- Redes -->
	<!-- Redes End-->
	<!-- footer -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-6 text-center">
					<p></p>
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
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
<script src="js/app.js"></script>
