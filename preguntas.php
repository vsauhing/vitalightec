<?php 
$SeoTitle='Preguntas Frecuentes | Vitalight Ecuador';
$SeoDescription='El tratamiento incluye 4 consultas, cada una semanalmente, en donde se evalua nutricionalmente al paciente, se colocan puntos de presion en la oreja y se le entrega el menú de alimentación correspondiente.';
?>

<?php include_once('header.php'); ?>
    <div class="BgPreguntas Parallax" >
        <div class="XlFont centerData SectionTitle">Preguntas Frecuentes</div>
        <div class="col-md-offset-2 col-md-8 centerData MdFont">
            <p>¿Tiene alguna inquietud o pregunta sobre nuestro Tratamiento? <br> Conozca las preguntas frecuentes y ¡anímese a cambiar su salud!</p>
        </div>
        <div style="clear:both;"></div>
    </div>
    <div style="clear:both;"></div>
    <div class="justifyData content">
        <div class="col-md-4 col-sm-6 ">
            <div class="PreguntaItem">
                <div class="SubTitle">¿Qué incluye el tratamiento?</div>
                <p>El tratamiento incluye <b class="TxtColor1">4 consultas</b>, cada una semanalmente, en donde se evalua nutricionalmente al paciente, se colocan <b>puntos de presion en la oreja</b> y se le entrega el <b>menú de alimentación</b> correspondiente, el mismo que es modificado en cada consulta dependiendo de la evolución del paciente.</p>
            </div>
            <div class="PreguntaItem">
                <div class="SubTitle">¿Cuánto dura el tratamiento?</div>
                <img class="ImgPreg" src="<?php echo $RootUrl; ?>/img/preg1.jpg"/>
                <p>La duración del tratamiento depende de las libras que usted quiera bajar, en promedio se baja de <b class="TxtColor1">12 a 15 libras por mes</b> dependiendo del metabolismo de cada persona.</p>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 ">
            <div class="PreguntaItem">
                <div class="SubTitle">¿Quiénes pueden realizar el tratamiento?</div>
                <p>Hombres y mujeres de cualquier edad <b>a partir de los 7 años</b>, excluyendo mujeres embarazadas.</p>
            </div>            
            <div class="PreguntaItem">
                <div class="SubTitle">¿Cuáles son los beneficios del tratamiento?</div>
                <img class="ImgPreg" src="<?php echo $RootUrl; ?>/img/preg2.jpg"/>
                <p>Ayuda a controlar la ansiedad, Mejora su sistema digestivo, Brinda estados de saciedad a las horas de alimentación más críticas, Regula la ingesta compulsiva de alimentos, Disminuye el estrés, mejorando el estado de ánimo.</p>
            </div>
            <div class="PreguntaItem">
                <div class="SubTitle">¿Cuántas libras puedo bajar?</div>
                <p>Debemos de conocer su caso en particular y estar concientes de que la principal razón para bajar de peso es la salud y no la estética. Lo importante es llegar a un peso adecuado y alcanzable que nos haga sentir y vernos bien. El programa está diseñado para perder entre <b class="TxtColor1"> 12 a 15 libras por mes</b>.</p>
            </div>
        </div>
        <div class="col-md-offset-0 col-md-4 col-sm-offset-2 col-sm-8">
            <div class="PreguntaItem">
                <div class="SubTitle">¿Conservaré mi nuevo peso?</div>
                <p>Por supuesto, ya que el tratamiento no tiene ningún efecto secundario o de rebote. Luego del tratamiento es recomendable mantener una alimentación balanceada y procurar alguna actividad física para mantenerse completamente saludable.</p>
            </div>
            <div class="PreguntaItem">
                <div class="SubTitle">¿Qué recomendaciones seguir durante el tratamiento?</div>
                <img class="ImgPreg" src="<?php echo $RootUrl; ?>/img/preg3.jpg"/>
                <p>Proporcione toda la información sobre sus antecedentes y estado de salud para personalizar los menús de alimentación. Se debe indicar en cada consulta dudas sobre el tratamiento ya que es muy importante que se comprenda las indicaciones dadas por la nutricionista. Evite mojar los puntos con agua muy caliente, frotarlos con esponja o toalla cuando se bañe.</p>
            </div>
        </div>
        <div style="clear:both;"></div>
    </div>
    <div style="clear:both;"></div>
    <script> 
    $(document).ready(function() {
        $( '.nav li:nth-child(4) a' ).addClass('selected');
    });
</script>
<?php include_once('footer.php'); ?>