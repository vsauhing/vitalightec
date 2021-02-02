<!DOCTYPE html>
<html lang="es-ES">

	<head>
		<title>VitaLight - Centro Médico Nutricional | Auriculoterapia + Menús de Alimentación</title>
		
		<script src="/js/jquery.js"></script>
		<script src="/js/NivoSlider/jquery.nivo.slider.js"></script>
		
		<link href="/css/style.css" rel="stylesheet">
		<link href="/js/NivoSlider/nivo-slider.css" rel="stylesheet" media="screen">
		<link href="/js/NivoSlider/themes/default/default.css" rel="stylesheet" media="screen">
		
		<script>
			$(document).ready(function() {
				
				$('#slider').nivoSlider({
					effect: 'boxRandom', 
					pauseTime: 8000,  
					pauseOnHover: false,
					controlNav: false,					
				});
				
			});
		</script>
		
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-42958761-2', 'auto');
			ga('send', 'pageview');

		</script>
	</head>


	<body>
		<div id="Header">
			<div class="Container">
				<img class="Logo" src="/images/logo.png"/>
				<div class="Phone">
					<span>042 084 047</span>
					<span>099 654 7042</span>
				</div>
				<div class="NavMenu">
					<a href="" class="selected">Inicio</a>
					<a href="/nosotros" >Nosotros</a>
					<a href="/tratamiento">Tratamiento</a>
					<a href="/contactos" >Contactos</a>
				</div>
				<div style="clear:both;"></div>				
			</div>
		</div>
		
		<div id="Content">
			<div class="Container">
				<div class="SliderWrapper theme-default" >
					<div id="slider" class="nivoSlider" >
						<a href="/tratamiento">
							<img src="/images/banner1.jpg" title="" />
						</a>
						<a href="/nosotros">
							<img src="/images/banner2.jpg" title="" />
						</a>
						<a href="/contactos">
							<img src="/images/banner3.jpg" title="" />
						</a>
					</div>
				</div>
				<div class="HomeBlocks">
					<a href="/nosotros" class="HomeBlock">
						<img src="/images/home1.jpg" />
						<div class="Title">Conozca sobre Nosotros</div>
					</a>
					<a href="/tratamiento"  class="HomeBlock">
						<img src="/images/home2.jpg" />
						<div class="Title">Nuestro Tratamiento</div>
					</a>
					<a href="/contactos" class="HomeBlock">
						<img src="/images/home3.jpg" />
						<div class="Title">Contáctenos</div>
					</a>
				</div>				
				<div style="clear:both;"></div>	
			</div>
		</div>
		
		<div id="Footer">
			<div class="Container">
				<div class="Blocks">
					<div class="Block">
						<div class="Title">Contactos</div>
						<div class="Description">
							<strong>Teléfono:</strong> 042 084 047<br>
							<strong>Celular:</strong> 099 654 7042<br>
							<strong>Email:</strong> vitalight_@hotmail.com
						</div>
					</div>
					<div class="Block BlockMiddle">
						<a href="https://www.facebook.com/VitalightEc" target="_blank">
						<img class="FooterLogo" src="/images/logo.png"/>
						<div class="Social"><img src="/images/facebook.png"/>Síganos en @VitalightEc</div>
						</a>
					</div>
					<div class="Block">
						<div class="Title">Encuéntranos</div>
						<div class="Description">
							<strong>C.C. Policentro - Planta Alta Local 4A</strong><br>
							<strong>Lunes a Viernes:	</strong>10:00 - 13:30 | 15:00 - 20:00<br>
							<strong>Sábado:	</strong>11:00 - 16:00
						</div>						
					</div>
					<div style="clear:both;"></div>	
				</div>
				
				<div class="FooterCopyright">
					<span class="Text">Copyright &#169; <?php echo date("Y"); ?> - <strong>VitaLight</strong> | Guayaquil - Ecuador</span>
					<div class="WebAndMkt">
						<a href="http://webmastech.com/" target="_blank">
							<span>Desarrollado por</span>
							<img src="/images/FooterWMT.png">
						</a>
					</div>
				</div>
				<div style="clear:both;"></div>	
			</div>
		</div>

	</body>

</html>