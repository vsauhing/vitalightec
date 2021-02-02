<?php 
$SeoTitle='Nosotros | Vitalight Ecuador';
$SeoDescription='Nos especializamos en el tratamiento de la obesidad y control de peso. Sistema 100% natural e inofensivo, sin  medicamentos, ni prácticas que dejen efectos posteriores o que pongan en riesgo su salud conservando la mayoría de sus habitos alimenticios.';
?>

<?php include_once('header.php'); ?>
<div  class="content SmFont">
    <div class="col-lg-offset-1 col-lg-4 col-sm-5 ">
        <div class="DoctorItem ">
            <div class="ProfilePhoto">
                <img src="<?php echo $RootUrl; ?>/img/nosotros1.jpg">
            </div>
            <div class="Nombre MdFont">Ana María Mendoza S.</div>
            <div class="Curriculum centerData">
                <p>Licenciada en <b>Dietética y Nutrición</b>, Universidad de Guayaquil año 2002.</p>
                <p><b>Auriculoterapeuta</b> con experiencia en control de peso y obesidad desde el año 2003.</p>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-sm-7">
        <div class="NosotrosInfo justifyData">
            <p><b class="TxtColor1">VitaLight</b> es un centro especializado en el tratamiento de la obesidad y control de peso.</p>Promueve un sistema <b class="TxtColor1">100% natural</b> e inofensivo, sin ninguna clase de medicamentos, ni prácticas que dejen efectos posteriores o que pongan en riesgo su salud conservando la mayoría de sus habitos alimenticios.
        </div>
        <div class="justifyData">
            <p>Se debe tener en cuenta que la principal razón para bajar de peso deber ser la salud y no la estética. El objetivo del tratamiento es llegar a un <b>peso adecuado y alcanzable</b> que haga al paciente sentirse y verse bien.</p>
            <p>El programa está diseñado para perder entre <b class="TxtColor1">12 a 15 libras por mes</b> ; sin embargo, el peso adecuado y el tiempo para llegar a él dependen de varios factores: sobrepeso, edad, estatura, metabolismo, estado de salud, actividad física, entre otras.</p>
            <p>A medida que se acerque al peso ideal, el proceso se torna más lento.</p>
            <p>Conjuntamente con el tratamiento se puede auxiliar en otros padecimientos, algunos de ellos asociados al sobrepeso, pero siempre de forma complementaria al tratamiento médico que esté llevando.</p>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<script> 
    $(document).ready(function() {
        $( '.nav li:nth-child(2) a' ).addClass('selected');
    });
</script>
<?php include_once('footer.php'); ?>