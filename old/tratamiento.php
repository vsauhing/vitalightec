<!DOCTYPE html>
<html lang="es-ES">

	<head>
		<title>Tratamiento | VitaLight</title>
		
		<script src="/js/jquery.js"></script>
		<link href="/css/style.css" rel="stylesheet">
		
		<script>
			$(document).ready(function() {				
				$('.ItemSelector').on('click', function() {
					var selected=$(this).data('select');
					$('.SelectorActive').removeClass('SelectorActive');
					$(this).addClass('SelectorActive');
					
					$( '.ServiceActive' ).fadeOut( 200, function() {
						$('.'+selected).fadeIn(200);
						$('.ServiceActive').removeClass('ServiceActive');
						$('.'+selected).addClass('ServiceActive');
					});
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
					<a href="/">Inicio</a>
					<a href="/nosotros" >Nosotros</a>
					<a href="/tratamiento" class="selected">Tratamiento</a>
					<a href="/contactos" >Contactos</a>
				</div>
				<div style="clear:both;"></div>				
			</div>
		</div>
		
		<div id="Content">
			<div class="Container">
				<div class="ServiceBlock ServicesSelector ">
					<div class="ItemSelector SelectorActive" data-select="Tratamiento">
						<img src="/images/tratamiento1.jpg">
					</div>
					<div class="ItemSelector" data-select="Preguntas">
						<img src="/images/tratamiento2.jpg">
					</div>					
				</div>
				<div class="ServiceBlock ServiceItems">
				
					<div class="ServiceItem ServiceActive Tratamiento">
						<div class="TratamientoInfo">
							<div class="Title">La Auriculoterapia</div>
							<div class="Description">
								<p>La <strong>Auriculoterapia</strong> es una técnica de medicina tradicional china similar a la acupuntura que equilibra diversas funciones del organismo a través de puntos de presion aplicados sobre la oreja. Por medio de esta terapia se disminuye el estrés, la ansiedad y el apetito</p>
								<p>El material que se usa son balines electromagnetizados con el proceso ACCUTHERM fabricados en acero inoxidable totalmente inocuo y desechable, no penetran en la piel, se cambian en cada consulta, no producen dolor ni molestia alguna.</p>
								<p>El objetivo es mantener a la persona relajada y equilibrada en sus funciones digestivas y metabólicas, es decir, con una disposición para llevar una dieta.</p>
							</div>
						</div>
						<div class="TratamientoInfo">
							<div class="Title">Menús de Alimentación</div>
							<div class="Description">
								<p>Están diseñadas para llevarse facilmente y se cambian o adaptan periódicamente para no afectar su salud y buena nutrición, a la vez que se baja de peso. No son dietas rigurosas, no exigen las dificultades de pesar los alimentos o limitan la comida dejándole con hambre. La parte más importante del tratamiento está en cada paciente y la voluntad que empeñe para lograr su objetivo. Solo se logra bajar de peso siguiendo adecuadamente las guías de alimentación.</p>
								<p>La <strong>Auriculoterapia</strong> más los <strong>Menús de Alimentación</strong>  le permitirán perder entre <span class="Highlight">12 a 15 libras</span> por mes; sin embargo, el peso adecuado y el tiempo para llegar a él dependen de varios factores: sobrepeso, edad, estatura, metabolismo, estado de salud, actividad física, entre otras. A medida que se acerque al peso ideal, el proceso se torna más lento.</p>
							</div>
						</div>
					</div>
					
					<div class="ServiceItem Preguntas" style="display:none;">
						<div class="TratamientoInfo">
							<div class="Title">¿Qué incluye el tratamiento?</div>
							<div class="Description">
								<p>El tratamiento incluye 4 consultas, cada una semanalmente, en donde se evalua nutricionalmente al paciente, se colocan puntos de presion en la oreja y se le entrega el menú de alimentación correspondiente, el mismo que es modificado en cada consulta dependiendo de la evolución del paciente.</p>
							</div>
						</div>	
						<div class="TratamientoInfo">
							<div class="Title">¿Quiénes pueden realizar el tratamiento?</div>
							<div class="Description">
								<p>Hombres y mujeres de cualquier edad a partir de los 7 años, excluyendo mujeres embarazadas.</p>
							</div>
						</div>	
						<div class="TratamientoInfo">
							<div class="Title">¿Conservaré mi nuevo peso?</div>
							<div class="Description">
								<p>Por supuesto, ya que el tratamiento no tiene ningún efecto secundario o de rebote. Luego del tratamiento es recomendable mantener una alimentación balanceada y procurar alguna actividad física para mantenerse completamente saludable. </p>
							</div>
						</div>	
						<div class="TratamientoInfo">
							<div class="Title">¿Qué recomendaciones seguir durante el tratamiento?</div>
							<div class="Description">
								<p>Proporcione toda la información sobre sus antecedentes y estado de salud para personalizar los menús de alimentación. Se debe indicar en cada consulta dudas sobre el tratamiento ya que es muy importante que se comprenda las indicaciones dadas por la nutricionista. Evite mojar los puntos con agua muy caliente, frotarlos con esponja o toalla cuando se bañe. </p>
							</div>
						</div>				
					</div>
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