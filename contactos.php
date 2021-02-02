<?php 
$SeoTitle='Contáctenos | Vitalight Ecuador';
$SeoDescription='Conozca nuestra Ubicación, nuestros Horarios de Atención, nuestras Redes Sociales y demás formas de comunicarse con nosotros.';
?>

<?php include_once('header.php'); ?>
    <div class="BgContact Parallax" >
        <div class="XlFont centerData SectionTitle">Contáctenos</div>
        <div class="col-md-offset-2 col-md-8 centerData MdFont">
            <p>Conozca nuestra Ubicación, nuestros Horarios de Atención, nuestras Redes Sociales y demás formas de comunicarse con nosotros.</p>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
    <div id="Contactos" class="content SmFont">
        <div class="col-lg-offset-1 col-lg-5 col-md-7 col-sm-6 ">
            <div class="LgFont leftData SubTitle">Déjenos su mensaje</div>
            <?php
                $name=""; $email=""; $phone=""; $message="";	
                if ($_SERVER['REQUEST_METHOD'] != 'POST') { } 
                else{
                    $name=$_POST['name']; $email=$_POST['email']; $phone=$_POST['phone']; $message=$_POST['message'];
                
                    if (($name=="")||($email=="")||($message=="")) {
                        echo '<div class="XsFont centerData alert alert-danger">Por favor, llene todos los campos con asterisco antes de enviar el formulario.</div>';
                    }
                    else{
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
                        
                        mail("vitalight_@hotmail.com, victor.rai28@gmail.com", $subject, $fullmessage, $headers);
                        echo '<div class="XsFont alert alert-success">¡Su formulario ha sido enviado! Pronto nos pondremos en contacto con usted.</div>';
                        $name=""; $email=""; $phone=""; $message="";	
                    }
                }  
            ?>
            <form  action="" method="POST" class="ContactForm" enctype="multipart/form-data">
                Nombre <span class="TxtColor1">*</span><br>
                <input name="name" type="text" value="<?php echo $name; ?>" /><br>
                Correo Electrónico <span class="TxtColor1">*</span><br>
                <input name="email" type="email" value="<?php echo $email; ?>" /><br>
                Teléfono de Contacto:<br>
                <input name="phone" type="text" value="<?php echo $phone; ?>" /><br>
                Mensaje <span class="TxtColor1">*</span><br>
                <textarea name="message" rows="3"><?php echo $message; ?></textarea><br>
                <input class="BtnSubmit" type="submit" value="Enviar"/>
            </form>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-6 ">
            <div class="LgFont leftData SubTitle">Visítenos</div>
            <div class="ContactInfo leftData">
                <img style="border: 3px ridge #af0505; margin-bottom: 10px; display:block; width:100%; max-width:500px;" src="<?php echo $RootUrl; ?>/img/vitamap.jpg"/>
                <strong><span class="fa fa-map-marker"> </span> C.C Las Vitrinas | Local 40</strong><br>
                <a href="tel:+59342280888"><strong><span class="fa fa-phone-square"></span> </strong>(04) 2280 888</a><br>
                
                <a href="mailto:vitalight_@hotmail.com?subject=Vitalight%20Website&bcc=info@webmastech.com"><strong><span class="fa fa-envelope"></span></strong> vitalight_@hotmail.com</a><br>
                <strong><span class="fa fa-calendar"></span> Lun - Vie </strong> 10:00 - 13:30 | 15:00 - 20:00<br>
                <strong><span class="fa fa-calendar"> </span> Sábados </strong> 11:00 - 16:00
            </div>
            <div class="clearfix"></div>
            <!--div class="LgFont leftData SubTitle">REDES SOCIALES</div>
            <div class="ContactInfo SocialIcons leftData">
                <a href="https://www.facebook.com/VitalightEc/"target="_blank"><spam class="fa fa-facebook"></spam></a>
                <a href="https://www.instagram.com/vitalight.ec/"target="_blank"><spam class="fa fa-instagram"></spam></a>
                <a href="https://api.whatsapp.com/send?phone=593996547042" target="_blank"><span class="fa fa-whatsapp"></span></a>
            </div-->
        </div>
        <div class="clearfix"></div>
    </div>
    <script> 
    $(document).ready(function() {
        $( '.nav li:nth-child(5) a' ).addClass('selected');
    });
</script>
<?php include_once('footer.php'); ?>