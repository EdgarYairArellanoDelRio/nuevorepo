<!DOCTYPE HTML>
<!--
	Hyperspace by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>unidad 2</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<a href="index.html" class="title">Unidad 2</a>
				<nav>
					<ul>
						<li><a href="{{route('index')}}">inicio</a></li>
						<li><a href="{{route('generic2')}}" class="active">Generic</a></li>
						
					</ul>
				</nav>
			</header>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<section id="main" class="wrapper">
						<div class="inner">
							<h1 class="major">Unidad 2 - cliente servidor</h1>
							<span class="image fit"><img src="images/pic09.png" alt="" /></span>
							<h3>REPRESENTACION DISCTRIBUIDA</h3>  
                            <p>Es la comunicación que tiene el usuario con el servidor, por medio del cliente que funciona como puente.</p>
                            <p>El cliente se encarga de formatear los datos que recibe para poder interactuar con el usuario. Dentro del servidor está la lógica de la aplicación y la BD.</p>
                            <h3>LOGICA DISTRIBUIDA</h3>
                            <p>Es un proceso en el que el cargado de interactuar con el usuario y de realizar funciones triviales es el cliente. </p>
                            <h3>BASES DE DATOS DISTRIBUIDAS</h3>
                            <p>En esta parte el usuario se encarga de realizar diferentes acciones: </p>
                            <lu>

                                    <li>Interactuar con el usuario</li>
                                    <li>Ejecutar la aplicacion</li>
                                    <li>Conocer la forma en la que está conectada la red</li>

                            </lu>
                            <h3>ACCESO DE DATOS REMOTOS</h3>
                            <p>La tecnología que permite que dispositivos que no se encuentran dentro del mismo entorno, puedan acceder al servidor por medio de una red virtual.</p>
                            <h3>LÓGICA DE ACCESO</h3>
                            <p>Es la línea de defensa con la que cuentan los sistemas para prevenir que ingresen a la información personas que no estén autorizadas, haciendo uso de la identificación y autentificación.</p>
                            <h3>PRESENTACIÓN</h3>
                            <p>Tambien es llamada "capa web", es la que se encarga de presentarle el sistema al usuario, le comunica la información y captura la información que introduce.</p>
                            <h3>PROCESO DE DISEÑO DE LOGICA DE ACCESO A DATOS</h3>
                            <p>Es la fase en la que diseñan las tablas,filas,columnas y relaciones que llevará la BD, pa ello se deben seguirlos siguientes principios:</p>
                            <ul>
                                <li>Organización de las tablas</li>
                                <li>Diseño dellaves primarias y secundarias</li>
                                <li>Diseño de relaciones entre tablas</li>
                                <li>Normalización que cumpla estandares industriales </li>
                                <ol>
                                    <li>Primera forma normal</li>
                                    <li>Segunda forma normal</li>
                                    <li>Tercera forma normal</li>
                            </ol>
                                
                            </ul>
                            <h3>PROCESO DE DISEÑO DE LOGICA DE PRESENTACIÓN</h3>
                            <p>Se deben de tener en cuenta los siguientes aspectos</p>
                            <ol>
                                <li>Parte visual</li>
                                <ul>
                                    <li>Debe de existir consistencia</li>
                                    <li>Usar correctamente los tipos de letras</li>
                                    <li>Tener buena gramática</li>
                                    <li>Aplicar el significado de los colores</li>
                                    <li>Debe ser accesible para todo tipo de personas</li>
                                    <li>Contener información fiable</li>
                                </ul>
                                <li>Parte funcional</li>
                                <ul>
                                    <li>Facilidad para navegar</li>
                                    <li>Diseño ergonómico</li>
                                    <li>Contener herramientas de ayuda</li>
                                    <li>Operaciones rápidas</li>
                                    
                            </ol>
                           <h3>PROCESO DE DISEÑO DE LOGICA DE NEGOCIO</h3>
                           <p>Se procesa la informacion que se obtuvo en el proceso de presentación por medio de un conjunto de reglas. se pueden realizar acciones como añadir, suprimir o modificar los datos.</p>
                            <h3>PROCESO DE DESARROLLO DE LOGICA DE ACCESO A DATOS</h3>
                            <p>Se puede contar con uno o dos gestores de BD que pueden almacenar, recibir solicitudes de almacenaje o recuperar datos. Dentro del proceso existen funciones como:</p>
                            <ul>
                                <li>Almacenar datos</li>
                                <li>Recuperar datos</li>
                                <li>Eliminar datos</li>
                                <li>Modificar datos</li>
                                <li>Consultar datos</li>
                            </ul>

                            <h3>PROCESO DE DESARROLLO DE LOGICA DE PRESENTACIÓN</h3>
                            <ol>
                                <li>Formatear los datos (traducir dos tipos de códigos, binario y ASCCI)</li>
                                <li>Cifrar los datos</li>
                                <li>Comprimir los datos</li>
                                <li>Definir la estructura de los datos por transmitir</li>
                                
                            </ol>
                            <h3>PROCESO DE DESARROLLO DE LOGICA DE NEGOCIO</h3>
                            <p>Los componentes deben de funcionar de manera independiente a los repositorios de datos. Se proporcionan funciones y operaciones de encapsulan la lógica. Para ello de debe:</p>
                            <ol>
                                <li>Permitir que la interfaz mande a llamar el proceso</li>
                                <li>Validar las entradas y las salidas</li>
                                <li>Mandar a llamar a la informacion que se tiene en el acceso a datos y asi poder obtener o actualizar los datos.</li>
                            </ol>
                            <h3>NIVEL</h3>
                            <P>Es la repartición de roles dentro de un grupo de máquinas, clientes y uno o varios servidores.</P>
                            <h3>PROCESO DE PLANIFICACIÓN DE DOS CAPAS</h3>
                            <P>En esta capa solo se utiliza un cliente y un servidor, el cliente absorve los servicios de un servidor el cual:</P>
                            <ul>
                                <li>Sirve de datos</li>
                                <li>Sirve de lógica</li>
                                <li>Sirve de información al cliente</li>
                            </ul>

                            <h3>PROCESO DE PLANIFICACIÓN DE TRES CAPAS</h3>
                            <P>En este proceso se absorben los recursos del Midelware, que funciona como intermediario con otro equipo de almacenamiento y se encarga de la parte lógica.</P>



						</div>
					</section>

			</div>

		<!-- Footer -->
			<footer id="footer" class="wrapper alt">
				<div class="inner">
					<ul class="menu">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>