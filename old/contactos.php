<!DOCTYPE html>
<html lang="es-ES">

	<head>
		<title>Contactos | VitaLight</title>
		
		<script src="/js/jquery.js"></script>
		<link href="/css/style.css" rel="stylesheet">
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
					<a href="/tratamiento">Tratamiento</a>
					<a href="/contactos"  class="selected">Contactos</a>
				</div>
				<div style="clear:both;"></div>				
			</div>
		</div>
		
		<div id="Content">
			<div class="Container">
				<div class="ContactBlock ContactBlockMain">
					<p>Gracias por preferirnos, si desea más información sobre nuestro tratamiento llene el formulario a continuación para poder contactarnos con usted.</p>
					<?php		
						$name=""; $email=""; $phone=""; $message="";	
						if ($_SERVER['REQUEST_METHOD'] != 'POST')     /* display the contact form */
					{ 	?>
					<?php	} 
						else  
						{				
							$name=$_POST['name']; $email=$_POST['email']; $phone=$_POST['phone']; $message=$_POST['message'];
							
							if (($name=="")||($email=="")||($message==""))
							{
								echo '<span class="Error">Por favor, llene todos los campos con asterisco antes de enviar el formulario.</span>';
							}
							else
							{							
								$from="De: ".$name."<".$email.">";
								$subject="VitaLight Formulario: ".$name;
								$fullmessage='<html>
								<head>
								  <title>'.$subject.'</title>
								</head>
								<body>
								
								<p>Ha recibido un nuevo mensaje del sitio web www.vitalightec.com.</p><br>
								<strong>Nombre</strong>: '.$name.'<br>
								<strong>Email</strong>: '.$email.'<br>
								<strong>Teléfono</strong>: -- '.$phone.' --<br>
								<strong>Mensaje</strong>: <br><br>
								'.$message.'<br><br>-------------------------------------
								
								</body></html>';
								// To send HTML mail, the Content-type header must be set
								$headers  = 'MIME-Version: 1.0' . "\r\n";
								$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
								
								mail("vitalight_@hotmail.com", $subject, $fullmessage, $headers);
								echo '<span class="Success">¡Su formulario ha sido enviado! Pronto nos pondremos en contacto con usted.</span>';
								$name=""; $email=""; $phone=""; $message="";	
							}
					}  ?>
				
					<form  action="" method="POST" class="ContactForm" enctype="multipart/form-data">
						Nombre <span class="required">*</span>:<br>
						<input name="name" type="text" value="<?php echo $name; ?>" /><br>
						Correo Electrónico <span class="required">*</span>:<br>
						<input name="email" type="email" value="<?php echo $email; ?>" /><br>
						Teléfono de Contacto:<br>
						<input name="phone" type="text" value="<?php echo $phone; ?>" /><br>
						Mensaje <span class="required">*</span>:<br>
						<textarea name="message" rows="7" cols="30"><?php echo $message; ?></textarea><br>
						<input class="BtnSubmit" type="submit" value="Enviar Formulario"/>
					</form>
				</div>
				<div class="ContactBlock ContactBlockLeft">
					<img src="/images/contactos1.jpg">
					
					<div class="ContactInfo">
						<div class="Title">Horarios de Atención</div>
						<strong class="Direccion" >Centro Comercial Policentro,<br> Planta Alta, Local 4A (junto a Fybeca)</strong>
						<strong>Lunes a Viernes:	</strong>10:00 - 13:30 | 15:00 - 20:00<br>
						<strong>Sábado:	</strong>11:00 - 16:00<br>
					</div>
					<div class="ContactInfo">
						<div class="Title">Contáctenos</div>
						<strong>Teléfono:</strong> 042 084 047<br>
						<strong>Celular:</strong> 099 654 7042<br>
						<strong>Email:</strong> vitalight_@hotmail.com<br>
						<strong>Facebook:</strong> <a href="https://www.facebook.com/VitalightEc" target="_blank">@VitalightEc</a><br>
						
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