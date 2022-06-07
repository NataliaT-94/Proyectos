

<!DOCTYPE html>
<html>
	<head>
		<title>WebLog Fiat</title>
		<meta name="description" content="WebLog Fiat"/>
		<meta name="keywords" content="weblog, bog, Fiat, diseño, multimedia"/>
		<meta http-equiv="refresh" content="500"/>
		<link rel="stylesheet" type="text/css" href=".../css/all.min.css">
		<link rel="stylesheet" type="text/css" href="../css/stilos.css">
	</head>
	<body>
		<div id="cajaHeader"></div>
		<div id="Princial">
			<header>
				<div id="logo">
				
				</div>
				<h1>FIAT</h1>
				<h2> Automotores</h2>
				<nav>
					<ul>
						<li>
							<a href="index.html">
								<i class="fa-solid fa-bars-staggered fa-2xl"></i>
								<br>Inicio</br>
							</a>
						</li>
						<li>
							<a href="noticias.html">
								<i class="fa-solid fa-globe fa-2xl"></i>
								<br>Noticias</br>
							</a>
						</li>
						<li>
							<a href="sobreFiat.html">
								<i class="fa-solid fa-car icono fa-2xl"></i>
								<br>Sobre Fiat</br>
							</a>
						</li>
						<li>
							<a href="contacto.html">
								<i class="fa-solid fa-comment fa-2xl"></i>
								<br>Contacto</br>
							</a>
						</li>
					</ul>
				</nav>
			</header>
			<div id="contenido">
                <?php
                    // Recibo las variables de formulario

                    $nombre = $_POST['nombre'];
                    $mail = $_POST['email'];
                    $mensaje = $_POST['mensaje'];

                    //Te muestro las variables

                    echo "<h3>El mensaje que escribiste es:</h3> ";
                    echo "<br />";
                    echo "<p>Nombre: ";
                    echo $nombre;
                    echo "<br />";
                    echo "Email: ";
                    echo $mail;
                    echo "<br />";
                    echo "Mensaje: ";
                    echo $mensaje;
                    echo "</p>"

                    //Envio un mail
                    /*
                    $aquien = "natt137@hotmail.com";
                    $asunto = "has  recibido un correo del blog";
                    $mensajemail = $nombre." con el email ".$mail." te ha enviado un mensaje que dice ".$mensaje ;

                    if(mail($aquien, $asunto, $mensaje)){
                        echo "Tu email se ha enviado correctamente";
                    }else{
                        echo "El envio del mail ha fallado";
                    };
                    */

                 ?>
				
			</div>
			<footer>
				<h6>
					<div class="vcard">
						<div><span class="name">Fiat</span> - <span class="coutry-name">Argentina</span></div>
						<div>
							<span class="tel">+59 11 459-954</span> - <span class="email">fiatoficial@fiat.com</span>
						</div>
					</div>
				</h6>
				<script type="text/javascript">
					if (localStorage.pagecount) {localStorage.pagecount = Number(localStorage.pagecount) + 1 ;
					} else {
						localStorage.pagecount = 1 ;
					}
					document.write("Has visitado esta pagina " + localStorage.pagecount + " veces");

				</script>
				<script type="text/javascript">
					if (sessionStorage.pagecount) {sessionStorage.pagecount = Number(sessionStorage.pagecount) + 1 ;
					} else {
						sessionStorage.pagecount = 1 ;
					}
					document.write("En esta sesion, has visitado esta pagina " + sessionStorage.pagecount + " veces");

				</script>
			</footer>
		</div>
	</body>
</html>
