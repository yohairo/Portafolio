<!DOCTYPE HTML>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="title" content="Yohairo Vargas Melendez" />
<meta name="description" content="Portafolio Web Yohairo Vargas M." />
<meta name="keywords" content="HTML5,CSS3,JavaScript,php,mysql,wordpress,joomla,responsive web desing" />
<meta name="author" content="Yohairo Vargas Melendez" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Yohairo Vargas M -Developer</title>
<script language="javascript" src="js/html5.js"></script>
<script language="javascript" src="js/ie.js"></script>
<link rel="stylesheet" href="css/estilos.css">
<link href='http://fonts.googleapis.com/css?family=Nova+Square' rel='stylesheet' type='text/css'>
</head>
<body onload="document.getElementById('cargando').style. display='none';">
<div id="cargando"><p>&nbsp;</p><p>&nbsp;</p><div class="tira-web" style="margin:auto; display:block;">Cargando</div></div>
<section id="sec-header-top">
    	<div id="header-top-inside">
        <!-- logos top-->
        	<div class="logos-top">
        	<div class="header-top-logo"><img src="img/logo-metal.png" alt="logo"></div>
            <div class="header-top-yohairo"><a href="#"><h1>Yohairo Vargas Melendez</h1></a></div>
            </div>
            <nav>
            <ul>
            	<li><a href="index.html" >Inicio</a></li>
                <li><a href="habilidades.html" >Habilidades</a></li>
                <li><a href="portafolio.html" >Portafolio</a></li>
                <li><a href="contacto.html" class="active">Contacto</a></li>
            </ul>
            </nav>
        </div>
</section>
<section id="sec-header">
	<header>
    	
    </header>
</section>
<section id="sec-article">
	<section id="article-center">
    	<aside>
        	<aside class="aside-1">
            	<div class="css-movil">
                	<div class="movil-inside">
                    	<div class="bocina-movil">
                        </div>
                        <div class="pantalla-movil">
                        <div class="barra-pantalla-movil">
                            Yohairo Vargas Melendez
                            </div>
                        <div class="mensaje-movil">
                            
                            <-- Cuentas --
                            <div id="burbuja">
                            Gmail:
                            <p>&nbsp;</p>
                            yohairo.vargas[arroba]gmail.com
                            <hr class="raya-1">
                            Twitter:
                            <p>&nbsp;</p>
                            <a href="http://twitter.com/#!/yohairo" target="_blank" title="@yohairo">
                            @yohairo
                            </a>
                            </div>
                            <hr class="raya-1">
                            HTML5+CSS3
                              <div class="barra-negra">
                       <span class="barra-azul" style="width: 100%"></span>
                    </div>
                            
                          </div>
                        </div>
                        <div class="boton-movil">
                        	<div class="boton-movil-inside">
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
            <aside class="sombra-lateral">
           <!--aqui esta la sombra lateral-->
            </aside>
        </aside>
        <article>
          <div class="margin">
                <div class="titulo-article"><h2>-Contacto</h2></div><div class="loguito"></div>
                <hr class="raya-1">
        	   <?
//This php file receives the post vars of the contact page and sends it to a email address

//Settings
$email = 'yohairo.vargas@gmail.com';
$subject = '[nombre] Te ha contactado desde tu portafolio';

//Get post variables
$name = $_POST['nombre'];
$from = $_POST['email'];
$message = $_POST['mensaje'];

//Set the headers and send the mail
$subject = str_replace('[nombre]', $name, $subject);
$headers = 'From: '.$name.' <'.$from.'>';
if ( ! mail($email, $subject, $message, $headers))
   {
	   echo"<p>&nbsp;</p><img src='img/advertencia.png' alt='advertencia' class='advertencia'> <div class='advertencia'>Ha Ocurrido un error trate Nuevamente.</div><p>&nbsp;</p><a href='contacto.html'>Volver</a>"; 
   }
   else
   {
	  
    echo"<p>&nbsp;</p><img src='img/enviado.png' alt='advertencia' class='advertencia'> <div class='advertencia'>Mensaje Envido.</div><p>&nbsp;</p>Gracias por escribir lo mas pronto posible tendra su respuesta.";
	}
?>
          </div>       
        </article>
    </section>	
</section>
<section id="sec-footer">
	<footer>
    	<div class="texto-footer">© Copyright Todos los Derechos Reservados. Yohairo Vargas Melendez Cel : 829-983-0333 </div>
        <div class="social">
            	<div class="tw">
                	<a href="http://twitter.com/#!/yohairo" target="_blank" title="@yohairo">
                    
                	</a>
                </div>   
        </div>
    </footer>
</section>
   
	
</body>
</html>
