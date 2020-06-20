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
          <li><a href="productos.php">Productos</a></li>
          <li class="menu-has-children"><a href="#team">Equipo</a>
            <ul>
              <li v-for="item in categoria"><a href="#">{{item.nombre}}</a></li>
              <li class="menu-has-children"><a href="#">Drop Down 2</a>
                <ul>
                  <li v-for="subitem in subcategoria"><a href="#">{{subitem.nombre}}</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="menu-has-children"><a href="">Categorías</a>
            <ul>
              <li v-for="item in categoria"><a href="#">{{item.nombre}}</a></li>
              <li class="menu-has-children"><a href="#">Drop Down 2</a>
                <ul>
                  <li v-for="subitem in subcategoria"><a href="#">{{subitem.nombre}}</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#contact">Contactos</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header>
  <!-- End Header -->

	<!-- Navbar fin -->

	<!-- Slider -->
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <h1>Bienvenidos a la pagina Crochetera </h1>
      <h2>volve</h2>
      <a href="#galeria" class="btn-get-started">Empezar</a>
    </div>
  </section>
  <!-- End Hero Section -->
	<!-- Slider fin-->

	<!-- Mi Presentacion -->
	
	<!-- Mi Presentacion fin-->


  <!-- Show Categorías -->

  <section id="categorias" class="contenedor">
      <div class="item"><div class="textos"><h2>Item 1</h2><h3>Descripción de la categoría</h3></div></div>
      <div class="item"><div class="textos"><h2>Item 2</h2><h3>Descripción de la categoría</h3></div></div>
      <div class="item"><div class="textos"><h2>Item 3</h2><h3>Descripción de la categoría</h3></div></div>
      <div class="item"><div class="textos"><h2>Item 4</h2><h3>Descripción de la categoría</h3></div></div>
      <div class="item"><div class="textos"><h2>Item 5</h2><h3>Descripción de la categoría</h3></div></div>
      <div class="item"><div class="textos"><h2>Item 6</h2><h3>Descripción de la categoría</h3></div></div>
  </section>


  <!-- Fin Show Categorías -->

	<!-- Show Productos -->
  <section>
  <div class="" id="root">
    <div class="container">
      <div class="row" v-for="categoria in categorias">
        <p class="btn btn-success">
        {{categoria.nombre}}
        </p>
      </div>
    </div>
    <div class="row counters p-4">
      <div class="col-lg-3 col-6 text-center">
        <div v-for="producto in filtrados" class="card bg-dark">
          <div class="card-title">{{producto.nombre}}</div>
          <img :src="`img/${producto.id}.jpg`" alt="" height="60">
          <div class="card-footer">Precio {{producto.precio}}</div>
        </div>
      </div>
    </div>
  </div>
  </section>
	<!-- Show Productos End-->
	<!-- Redes -->
	<!-- Redes End-->
	<!-- footer -->
	<footer id="footer">
			<div class="row bg-dark">
          <p class="text-center">Contáctanos!</p>
			</div>
	</footer>
	<!-- footer fin-->
  <!-- JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script src="js/app.js"></script>
  <script src="js/categorias.vue.js"></script>
</body>
</html>