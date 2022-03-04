<!DOCTYPE HTML>
<!--
	Hyperspace by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>unidad 1</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<a href="index.html" class="title">UNIDAD 1</a>
				<nav>
					<ul>
						<li><a href="{{route('index')}}">Inicio</a></li>
						<li><a href="{{route('generic')}}" class="active">Generic</a></li>
						<li><a href="{{route('elements')}}">Elements</a></li>
					</ul>
				</nav>
			</header>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<section id="main" class="wrapper">
						<div class="inner">
							<h1 class="major">Unidad 1 - Cliente Servidor</h1>
							<span class="image fit"><img src="images/pic07.jpg" alt="" /></span>
							<h2 class="major">Reconocer los conceptos de sistems de información</h2>
							<p>Un sistema de información tiene como principal objetivo la gestión, y administración de los datos e información que lo componen.</p>
							<h2 class="major">Reconocer la evolución de los sistemas de información</h2>
							<h3>Procesamiento de datos  ( 1 9 5 0 - 1 9 6 0 )</h3>
							<p>Los componentes del sistema de información permiten una serie de procesos que consisten en: la entrada de los datos, la gestión y el procesamiento de estos, el almacenamiento y la salida para todos aquellos interesados que deseen tener acceso a este tipo de información.</p>
							<span class="image" aling="center"><img src="images/pic08.jpg" alt="" /></span>
							<h3>Informes de Gestión ( 1 9 6 0 - 1 9 7 0 )</h3>
							<p>Los componentes del sistema de información permiten una serie de procesos que consisten en: la entrada de los datos, la gestión y el procesamiento de estos, el almacenamiento y la salida para todos aquellos interesados que deseen tener acceso a este tipo de información.</p>
							<h3>Apoyo a las Decisiones ( 1 9 7 0 - 1 9 8 0 )</h3>
							<p>Soporte ad-hoc interactivo para el proceso de toma de decisiones Ayuda a los gerentes senior</p>
							<h3>Apoyo Ejecutivo ( 1 9 8 0 - 1 9 9 0 )</h3>
							<p>Proporcione información interna y externa relevante para los objetivos estratégicos de la organización Ayuda a los ejecutivos.</p>
							<h3>Apoyo a la Gestión de la Calidad ( 1 9 9 0 - 2 0 0 0 )</h3>
							<p>Apoya la creación, organización y diseminación del conocimiento empresarial Ayuda disponible para toda la empresa.</p>
							<h3>E-BUSINESS ( 2 0 0 0 - 2 0 1 0 )</h3>
							<P>Mayor conectividad, mayor nivel de integración en todas las aplicaciones Ayuda al comercio electrónico global.</P>
							

							<h2>CONCEPTOS DE CLIENTE SERVIDOR</h2>

							<h3>¿qué es un cliente?</h3>
							<P>El cliente es un computador pequeño con una estructura al igual a la que tenemos en nuestras oficinas u hogares la cual accede a un servidor o a los servicios del mismo a través de Internet o una red interna.</P>
							<h3>¿qué es un servidor?</h3>
							<P>El servidor es una computadora que tiene una gran capacidad que le permite almacenar gran cantidad de diversos de archivos, o correr varias aplicaciones en simultaneo para así nosotros los clientes poder acceder los servicios.</P>
							
							<h3> Definir los sistemas de computadoras centrales y dedicadas </h3>
							<h4>central</h4>
							<p>Es una computadora grande, potente y costosa, usada principalmente para el procesamiento de una gran cantidad de datos </p>
							<h4>dedicada</h4>
							<p>Es un equipo informático físico que destina todos sus recursos a proporcionar información y atender las peticiones de otro ordenador (cliente) que ha contratado sus servicios</p>
							
							<h2>Definición de los sistemas de conexión libre y a través de redes</h2>
							<h3>¿Qué es conexión libre?</h3>
							<p>Conexión libre Estas computadoras de escritorio se conectan a las computadoras de servicio empleando software que permite la emulación de algún tipo de terminal.</p>
							<h3>¿Qué es una conexión a través de redes?</h3>
							<p>designa la conexión entre un equipo informático (en el sentido ETD, es decir, un ordenador, una impresora, etc.) y una red informática.</p>
							<h3>Sistemas con arquitectura Cliente/Servidor</h3>	
							<p>La arquitectura cliente-servidor es un modelo de diseño de software en el que las tareas se reparten entre los proveedores de recursos o servicios, llamados servidores, y los demandantes, llamados clientes</p>
							<h3>Reconocer protocolos de comunicación de red</h3>
							<p>Tipos de protocolos de red Los protocolos para la transmisión de datos en internet más importantes son TCP e IP. De manera conjunta podemos enlazar los dispositivos que acceden a la red, algunos otros protocolos de comunicación asociados a internet son POP, SMTP y HTTP. Existen varios tipos de protocolos de red:</p>
							<h4>Protocolos de comunicación de red</h4>
							<p>protocolos de comunicación de paquetes básicos como TCP / IP y HTTP.</p>
							<h4>Protocolos de seguridad de red</h4>
							<p>implementan la seguridad en las comunicaciones de red entre servidores, incluye HTTPS, SSL y SFTP.</p>
							<h4>Protocolos de Gestión de datos</h4>
							<p>proporcionan mantenimiento y gobierno de red, incluyen SNMP e ICMP.</p>
							<p>❖ Clasificar los sistemas de información de acuerdo a su arquitectura.</p>
							<h4>TIPOS DE ARQUITECTURA CLIENTE/SERVIDOR</h4>
							<p>Dentro de la arquitectura cliente servidor existen tres tipos en donde hablaremos brevemente de cómo funciona cada uno de ellos.</p>
							<h4>Arquitectura de dos capas</h4>
							<p>Esta se utiliza para describir los sistemas cliente servidor en donde el cliente solicita recursos y el servidor responde directamente a la solicitud con sus propios recursos.</p>
							<h4>Arquitectura de tres capas</h4>
							<p>La capa del medio es denominada software intermedio cuya tarea es proporcionar los recursos solicitados pero que requiere de otro servidor para hacerlo. La última capa es el servidor de datosque proporciona al servidor de aplicaciones los datos necesarios para poder procesar y generar el servicio que solicito el cliente en un principio.</p>
							<h4>Arquitectura de N capas</h4>
							<p>Por consiguiente, la arquitectura en tres niveles es potencialmente una arquitectura en N capas ya que, así como está contemplado en tres niveles como el caso anterior puede estar compuesto por N servidores donde cada uno de ellos brindan su servicio específico.</p>
							<h4>Reconocer los componentes del modelo Cliente/Servidor.</h4>
							<p>se identifican cinco componentes que permitan articular dicha arquitectura, considerando que toda aplicación de un sistema de información está caracterizada por lo siguiente:
									Presentación/Captación de la información
									, Procesos
									, Almacenamiento de la información
									, Puestos de trabajo
									, Comunicaciones
							</p>

							<h4>Definir concepto de programa maestro</h4>
							<p>es un documento donde organizamos una serie de pautas con determinados objetivos e hitos que queremos conseguir y que conllevan una planificación a largo plazo.</p>


						</div>
					</section>
					

			</div>
			<div id="wrapper">

				<!-- Main -->
					<section id="main" class="wrapper">
						<div class="inner">
							
							<h2 class="major">Explicar los procesos y tareas del programa maestro</p>
							<h3>proceso</h3>
							<p>Es un conjunto de tareas que se deben realizar en orden para lograr un objetivo.</p>
							<p>El Plan maestro permite optimizar el proceso de fabricación y adquisición de productos, reduciendo el inventario necesario y con él, los costes. El PMP se encuentra en las últimas etapas del plan general de la planificación y tiene una visión a corto plazo de cara al producto.
								<ul>
									<li>Etapa 1. Diseñar el PMP</li>
									<li>Etapa 2. Desarrollar el PMP</li>
									<li>Etapa 3. Controlar el PMP</li>
								</ul>
								<ul><p>Tareas del programa maestro</p>
									<li>1. Abrir un puerto local bien conocido al cual pueda acceder los clientes.</li>
									<li>2. Esperar las peticiones de los clientes.</li>
									<li>3. Elegir un puerto local para las peticiones que llegan en informar al cliente del nuevo puerto, (innecesario en la mayoría de los casos).</li>
									<li>4. Iniciar un programa esclavo o proceso hijo que atienda la petición en el puerto local, (el esclavo cuando termina de manejar una petición no se queda esperando por otras).</li>
									<li>5. Volver a la espera de peticiones mientras los esclavos, en forma concurrente, se ocupan de las anteriores peticiones.</li>
								</ul>
							</p>
							<h3>Describir los tipos de servidores</h3>
							<h4>Servidor con estados</h4>
							<p>Es un host que conserva todas las configuraciones y los VIB instalados incluso después de reiniciarlo.</p>
							<h4>Servidor sin estados</h4>
							<p>se refiere a los casos en que estos están aislados. No se almacena información sobre las operaciones anteriores ni se hace referencia a ellas.</p>
							<h4>Servidores concurrentes</h4>
							<p>Un servidor concurrente atiende a varios clientes al mismo tiempo.</p>
							<h3>Reconocer las características de la arquitectura Cliente/Servidor</h3>
								<ul>
								<li>Combinación de un cliente que interactúa con el usuario, y un servidor que interactúa con los recursos a compartir. El proceso del cliente proporciona la interfaz entre el usuario y el resto del sistema.</li>
								<li>Existe una clara distinción de funciones basadas en el concepto de “servicio”, que se establece entre clientes y servidores.</li>
								<li>La relación establecida puede ser de muchos a uno, en la que un servidor puede dar servicio a muchos clientes, regulando su acceso a los recursos compartidos.</li>
								<li>La plataforma de hardware y el sistema operativo del cliente y del servidor no son siempre los mismos.</li>
								<li>La escalabilidad vertical permite mejorar las características del servidor o çagregar múltiples servidores.</li>

								</ul>

							<h3>Identificar las ventajas y desventajas de la arquitectura Cliente/Servidor.</h3>
							<h4>Ventajas</h4>
							<ul>
								<li>Facilita la integración entre sistemas diferentes y comparte información, permitiendo por ejemplo que las máquinas ya existentes puedan ser utilizadas, pero utilizando interfaces más amigables el usuario.</li>
								<li>Al favorecer el uso de interfaces gráficas interactivas, los sistemas construidos bajo este esquema tienen una mayor y más intuitiva con el usuario.</li>
								<li>La estructura inherentemente modular facilita además la integración de nuevas tecnologías y el crecimiento de la infraestructura computacional</li>
								
							</ul>
							<h4>Desventajas</h4>
							<ol>
								<li>Cuenta con muy escasas herramientas para la administración y ajuste del desempeño de los sistemas</li>
								<li>Hay que tener estrategias para el manejo de errores y para mantener la consistencia de los datos.</li>
								<li>El mantenimiento de los sistemas es más difícil pues implica la interacción de diferentes partes de hardware y de software, distribuidas por distintos proveedores, lo cual dificulta el diagnóstico de fallas.</li>
								<li>El desempeño (performance), problemas de este estilo pueden presentarse por congestión en la red, dificultad de tráfico de datos, etc.</li>


							</ol>
							<h3>Definir el concepto de cómputo en la nube.</h3>
							<P>Es el uso de una red de servidores remotos conectados a internet para almacenar, administrar y procesar datos, servidores, bases de datos, redes y software.</P>

							<h3>Definir los conceptos de Infraestructura as a Service (IAAS), Platform as a Service (PAAS), Software as a Service (SAAS).</h3>
							<p>
								<ul>
									<li>Infraestructura as a Service (IAAS) es una infraestructura que se puede utilizar para la creación de aplicaciones y servicios en la nube.</li>
									<li>Platform as a Service (PAAS) es una infraestructura que se puede utilizar para la creación de aplicaciones y servicios en la nube.</li>
									<li>Software as a Service (SAAS) es una infraestructura que se puede utilizar para la creación de aplicaciones y servicios en la nube.</li>
								</ul>
							</p>
						</div>
					</section>

			

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