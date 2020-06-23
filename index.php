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
  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">
      <div id="logo" class="pull-left">
<!--        <a href="#hero"><img src="./img/web/logo.png" width="200px" height="100px"></a>
 -->        <!-- Uncomment below if you prefer to use a text logo -->
        	<h1><a class="text-capitalize border-bottom text-danger" href="#hero">Todo Crocheting</a></h1>
      </div>
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Home</a></li>
          <li><a href="#about">Ofertas</a></li>
          <li class="menu-has-children"><a href="#team">Categorias</a>
            <ul>
              <li v-for="item in categorias"><a href="#">{{item.nombre}}</a></li>
              <li class="menu-has-children"><a href="#">Drop Down 2</a>
                <ul>
                  <li v-for="subitem in categorias"><a href="#">{{subitem.nombre}}</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#contact">Favoritos</a></li>
          <li><a href="#services">Mis Compras</a></li>
        </ul>
      </nav>
   <!-- #nav-menu-container -->
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
    <div class="" v-for="cat in categorias">
        <div class="item" v-bind:style="{ backgroundImage: 'url(./img/Accesorios/' + cat.id + '.jpg)' }">
        	<div class="textos"><h2 class="mb-5 ">{{cat.nombre}}</h2>
        		<button class="btn btn-success mt-5" type="button" name="button">Ver</button>
        	</div>
        </div>
        </div>
    </div>
</section>

<!-- Fin Show Categorías -->
<!-- Show Productos -->
<!-- Show Productos End-->
<!-- Redes -->
<!-- Redes End-->
<!-- footer -->

<div class="container">
	<div class=" bg-secondary">
		<h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, qui, quia! Accusamus facilis corporis, nihil, exercitationem similique vero tenetur itaque, expedita tempore sunt assumenda! Totam dolore provident tempora quas perferendis!</h1>
	</div>
</div>

<!-- footer fin-->
<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="js/app.js"></script>
</div>
</body>
</html>
