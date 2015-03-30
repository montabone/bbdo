<?php 
/*
include("conexion.php");
include("birthday.php");
*/
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="BBDO es una agencia de publicidad integrada internacional con más de 30 años de experiencia en el mercado." name="description"/>
    <title>BBDO</title>
    <!-- Favicon -->
    <link rel="icon" type="img/gif" href="img/logo_title.gif">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="css/ticker-style.css" />
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<link rel="stylesheet" type="text/css" href="css/docs.min.css">
	<script src="js/modernizr.custom.js"></script>
	<style type="text/css">
	#footer-bbdo{
		background-color: #222;
	}
	</style>




</head>
<body>
<!-- Barra de navegación -->

<div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a href="../" class="navbar-brand"><img src="img/logo_bbdo.png"></a>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav">
            <li>
              <a href=""></span>INICIO</a>
            </li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="tic">TECNOLOGÍA INFORMACIÓN<span class="caret"></span></a>
              <ul class="dropdown-menu" aria-labelledby="themes">
                <li><a href="../default/">Documentación</a></li>
                <!--
                <li class="divider"></li>
                <li><a href="../cerulean/">Cerulean</a></li>
                <li><a href="../cosmo/">Cosmo</a></li>-->
                
              </ul>
            </li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="recursos_humanos">RECURSOS HUMANOS <span class="caret"></span></a>
              <ul class="dropdown-menu" aria-labelledby="recursos_humanos">
                <li><a href="#">Organigrama</a></li>
                <li><a href="#">Directorio telefónico</a></li>
                <!--
                <li class="divider"></li>
                <li><a href="./variables.less">variables.less</a></li>
                <li><a href="./bootswatch.less">bootswatch.less</a></li>
                <li class="divider"></li>
                <li><a href="./_variables.scss">_variables.scss</a></li>
                <li><a href="./_bootswatch.scss">_bootswatch.scss</a></li>-->
              </ul>
            </li>
            <li class="dropdown">
            	<a class="dropdown-toggle" data-toggle="dropdown" href="#">AVISOS <span class="caret"></span></a>
            	<ul class="dropdown-menu" aria-labelledby="avisos">
            		<li><a href="#">Lista de avisos</a></li>
            		<li><a href="#">Añadir nuevo aviso</a></li>
            	</ul>
            </li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">INICIAR SESIÓN</a></li>
          </ul>

        </div>
      </div>
    </div>


<!-- Contenedor principal -->
<div class="container">
	<div class="page-header" id="banner">
        <div class="row">
          <div class="col-lg-12">
            <h1 align="center">BIENVENIDO AL PORTAL DE BBDO</h1>
          </div>
        </div>
      </div>
      <!-- Cumpleaños 
    <div id="ticker">
      <ul id="js-news" class="js-hidden">
    	<li class="news-item"><a href="#">This is the 1st latest news item.</a></li>
    	<li class="news-item"><a href="#">This is the 2nd latest news item.</a></li>
    	<li class="news-item"><a href="#">This is the 3rd latest news item.</a></li>
    	<li class="news-item"><a href="#">This is the 4th latest news item.</a></li>
	  </ul>
	</div>
      Fin cumpleaños -->
    <!-- Avisos principales -->
    <h3>Avisos principales</h3>
    	<ul class="grid effect-1" id="grid">
				<li><a href="http://drbl.in/fQdt"><img src="images/12.png"></a></li>
				<li><a href="http://drbl.in/fHaa"><img src="images/13.png"></a></li>
				<li><a href="http://drbl.in/gXMo"><img src="images/10.png"></a></li>
				<li><a href="http://drbl.in/gXMn"><img src="images/11.png"></a></li>
				<li><a href="http://drbl.in/fzYo"><img src="images/2.jpg"></a></li>
	 	</ul>
	 	<a href="#" class="pull-right">Ver más...></a>

    <!-- Fin Avisos -->
</div><!-- Fin contenedor principal -->

<!-- footer -->

<footer class="bs-docs-footer" role="contentinfo" id="footer-bbdo">
  <div class="container">
        
    <ul class="bs-docs-footer-links muted">
      <li><strong>Direcci&oacute;n</strong></li>
      <li>&middot;</li>
      <li><a href="https://www.google.cl/maps?ion=1&espv=2&um=1&ie=UTF-8&q=bbdo+chile&fb=1&gl=cl&hq=bbdo+chile&cid=6215630081372560816&sa=X&ei=UWQZVZ2yDcygNt-Wg-AB&ved=0CCYQrwswAA" target="_ blank" >Del Valle 787, Huechuraba, Región Metropolitana</a></li>
      <li>&middot;</li>
      <li><strong>Tel&eacute;fono</strong></li>
      <li>&middot;</li>
      <li>2(2) 2751 4100</li>
    </ul>
  </div>

</footer>

<!-- fin footer -->


	<!-- Javascript -->
	<script src="js/jquery-1.10.2.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootswatch.js"></script>
	<script src="js/jquery.ticker.js" type="text/javascript"></script>
	<script src="js/site.js" type="text/javascript"></script>
	<script type="text/javascript">
    $(function () {
        $('#js-news').ticker();
    });
	</script>

	<script src="js/masonry.pkgd.min.js"></script>
		<script src="js/imagesloaded.js"></script>
		<script src="js/classie.js"></script>
		<script src="js/AnimOnScroll.js"></script>
		<script>
			new AnimOnScroll( document.getElementById( 'grid' ), {
				minDuration : 0.4,
				maxDuration : 0.7,
				viewportFactor : 0.2
			} );
		</script>
	
</body>
</html>