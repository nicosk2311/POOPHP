<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Localizar Oficinas</title>
<link rel="stylesheet" type="text/css" href="css/Style.css"  />
<link rel="stylesheet" type="text/css" href="css/aviso.css"  />
<?php
	include("php/conn.php");
	include("php/funciones.php");
	$oficina = array();
	$q = "SELECT * FROM direcciones WHERE tipo='oficina' LIMIT 0,5";
	$r = mysqli_query($link, $q);
	while($obj = mysqli_fetch_object($r)){
		array_push($oficina, $obj);
	}
?>
</head>

<body>
<header>
  <div class="encabezado">
		<div class="encabezado01">
        	<ul class="menu01" >
                <li><a href="callCenter.php">Call Center</a></li>
                <li><a href="contacto.php">Contacto</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="index.php">Home</a></li>
            </ul>
		</div>
   		<div class="encabezado02">
			<div class="companias">
                <img class="imagen" src="img/compania01.png" width="183" height="30" alt="compañia 1" />
                <img class="imagen" src="img/compania02.png" width="72" height="30" alt="compañia 2" />
                <a href="ofertas.php" class="texto">OFERTAS ESPECIALES</a>
           	</div>  
            <div class="bolsa">
                <div class="titulo">Compras</div>
                <div class="imagen">
                	<div class="numero">0</div>
                    <div class="texto">Finalizar Compra</div>
               </div>
           	</div>
            <div class="telefonica"></div> 
    	</div>
	<div class="encabezado03">
    		<div class="Menu">
                <ul class="Menu" >
                    <li><a href="pintura.php">Pinturas</a></li>
                    <li><a href="pintura.php">Alfarería</a></li>
                    <li><a href="pintura.php">Esculturas</a></li>
                    <li><a href="pintura.php">Viajes a Grecia</a></li>
                </ul>
            </div>
            <div class="Search">
            	<div class="texto">Buscar...</div>
                <div class="Button"><a HREF="#"></a></div>
            </div>
   	  </div>
	</div>
</header>

<section>
<!-------- 	CONTENT --------->
<article>
	<div id="co-caja">
    <div id="co-titulo"><h1>Localizar Oficinas</h1></div>
    <div id="av-texto">
    	<?php
		print "<br>";
		print "<table>";
		for($i=0; $i<count($oficina); $i++){
			print "<tr><td>Oficina: ".utf8_encode($oficina[$i]->nombre)."</td></tr>";
			print "<tr><td>".utf8_encode($oficina[$i]->direccion)."</td></tr>";
			print "<tr><td>".$oficina[$i]->telefono."</td></tr>";
			print "<tr><td><a href='#' class='mapa' data-num='".($i+1)."'>Mapa</a></td></tr>";
			print "<tr><td>&nbsp;</td></tr>";
		}
		print "</table>";
		?>
  	</div>
  </div>
</article>
</section>
<!-------- FOOTER ------------>
<footer>
	<div class="pie">
        <div class="pie01">
            <div class="columna">
            	<div class="columnaTitulo">Siguenos</div>
                <ul class="Menu" >
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Foursquere</a></li>
                    <li><a href="#">Google+</a></li>
                </ul>
            </div>
            <div class="columna">
            	<div class="columnaTitulo">Quienes somos</div>
                <ul class="Menu" >
                    <li><a href="empresa.php">Nuestra Empresa</a></li>
                    <li><a href="equipo.php">Equipo de Trabajo</a></li>
                    <li><a href="socios.php">Paises Socios</a></li>
                    <li><a href="afiliadas.php">Empresas Afiliadas</a></li>
                    <li><a href="aviso.php">Política de Privacidad</a></li>
                </ul>
            </div>
            <div class="columna">
            	<div class="columnaTitulo">Servicios</div>
                <ul class="Menu" >
                    <li><a href="soporte.php">Soporte</a></li>
                    <li><a href="informacion.php">Información</a></li>
                    <li><a href="politicas.php">Politicas Devolución</a></li>
                    <li><a href="fqa.php">FQA</a></li>
                    <li><a href="contacto.php">Envíanos un mail</a></li>
                </ul>
            </div>
            <div class="columna">
            	<div class="columnaTitulo">Localizar</div>
                <ul class="Menu" >
                    <li><a href="tiendas.php">Localizar tiendas</a></li>
                    <li><a href="oficinas.php">Localizar oficinas</a></li>
                    <li><a href="callCenter.php">Localizar Call Center</a></li>
                </ul>
            </div>
             <div class="columna">
            	<img src="img/logo.png" width="153" height="52" alt="logo"  align="right"/> </div>
      		</div>
        <div class="pie02">
        </div>
	 </div>
</footer>
</body>
</html>
