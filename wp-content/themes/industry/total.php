<?php get_header(); ?>
<body>
	<!-- NAV   -->
	<div class="navbar-fixed sombra">
	  <nav class="navmenu centrar">
	    <div class="nav-wrapper"><a href="#" class="brand-logo logoNav"><img src="../industry/wp-content/themes/industry/img/svg/logoMeatPro.svg" alt=""></a><a href="#" data-activates="mobile" class="button-collapse navW"><i class="material-icons textOran">menu</i></a>
	      <!-- Dropdown Structure-->
	      <ul id="dropdown1" class="dropdown-content">
	        <li><a href="#!">Día Día</a></li>
	        <li class="divider"></li>
	        <li><a href="#!">Fin de semana</a></li>
	      </ul>
	      <!-- icono hamburguesa    -->
	      <ul class="right hide-on-med-and-down">
	        <li><a href="sass.html">Empresa</a></li>
	        <li><a href="badges.html">Industry</a></li>
	        <!-- Dropdown Trigger-->
	        <li><a href="#!" data-activates="dropdown1" class="dropdown-button">Carnivery<i class="material-icons right">arrow_drop_down  </i></a></li>
	        <li><a href="collapsible.html">Contáctenos  </a></li>
	      </ul>
	      <ul id="mobile" class="side-nav">
	        <li><a href="sass.html">Empresa</a></li>
	        <li><a href="badges.html">Industry</a></li>
	        <!-- Dropdown Trigger-->
	        <li class="bold active">
	        	<a class="collapsible-header active waves-effect waves-teal">Carnivery</a>
	        	<div class="collapsible-body", style="display: block;">
	        		<ul>
			            <li><a href="#!">Día Día</a></li>
			            <li class="divider"></li>
			            <li><a href="#!">Fin de semana</a></li>
	        		</ul>	
	        	</div>
	        </li>    
	        <li><a href="#!">Contáctenos</a></li>
	      </ul>
	    </div>
	  </nav>
	</div>
	<!-- cuerpo   -->
	<div class="main-container fpresentacion alfa">
	  <div class="container centrar">
	    <img src="../industry/wp-content/themes/industry/img/logoIndustry.png", id="logoIndustry" class="sombra" />
	    <div class="row center">
	      <p class="col s12">Procesamos, comercializamos y desarrollamos productos cárnicos inocuos de alta calidad, al alcance de todos los segmentos del sector HORECA e industrial en Ecuador</p>
	    </div>
	  </div>
	</div><!-- SECCION LINEAS DE PRODUCTOS-->
	<div class="main-container">
	  <div class="barraNegra centrar">
	    <p>LINEAS DE PRODUCTOS</p>
	  </div>
	  <div class="container sepUp">
	    <div class="row center">
	      <div class="col s12 m6">
	        <div class="col s6 m6 centrar">
	          <img src="../industry/wp-content/themes/industry/img/svg/icoRes.svg", class="icoRes" />
	          <p>Res</p>
	        </div>
	        <div class="col s6 m6">
	          <img src="../industry/wp-content/themes/industry/img/svg/icoCerdo.svg", class="icoCerdo" />
		      <p>Cerdo</p>
	        </div>
	      </div>
	      <div class="col s12 m6">
	        <div class="col s6 m6">
	          <img src="../industry/wp-content/themes/industry/img/svg/icoPollo.svg", class="icoPollo" />
		      <p>Pollo</p>
	        </div>
	        <div class="col s6 m6">
	          <img src="../industry/wp-content/themes/industry/img/svg/icoCharcu.svg", class="icoCharcu" />
		      <p>Charcutería</p>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>
	<div class="main-container">
		<div class="container">
			<div class="row">
				<div class="col m2", id="sideIzq">
					<?php get_sidebar('izq'); ?>
				</div>
				<div class="col m8 cajaW">
					<?php get_sidebar('fichas'); ?>
				</div>
				<div class="col m2">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</div>
	<!-- FOOTER   -->
	<?php get_footer(); ?>
	<!-- JAVA SCRIPT NECESARIOS-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
    <script>
      $(".button-collapse").sideNav();
      $(".dropdown-button").dropdown();
    </script>
</body>
</html>