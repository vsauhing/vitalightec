<?php 
$SeoTitle='Vitalight Ecuador | Centro Médico Nutricional, Auriculoterapia Guayaquil, Guias Alimentación';
$SeoDescription='En Vitalight ayudamos a nuestros pacientes a mejorar su estilo de vida con nuestro tratamiento 100% natural que se basa en la Auriculoterapia y una guía nutricional personalizada.';
?>

<?php include_once('header.php'); ?>
    <div class="BgBanner" >
        <!--div class="Slogan LgFont centerData">Testimonios VitaLight</div>
        <div class="clearfix"></div-->
        <div class="SlickBanner">
            <div>
                <img src="<?php echo $RootUrl; ?>/img/testimonio1.jpg"/>
            </div>
            <div>
                <img src="<?php echo $RootUrl; ?>/img/testimonio2.jpg"/>
            </div>
            <div>
                <img src="<?php echo $RootUrl; ?>/img/testimonio3.jpg"/>
            </div>
            <div>
                <img src="<?php echo $RootUrl; ?>/img/testimonio4.jpg"/>
            </div>
            <div>
                <img src="<?php echo $RootUrl; ?>/img/testimonio5.jpg"/>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
    <div class="content SmFont">
        <div class="col-lg-offset-1 col-lg-10 centerData">
            <div class="SubTitle LgFont">Vitalight</div>
            <p>En <b>Vitalight</b>, nuestra misión consiste en ayudar a nuestros pacientes a <b>mejorar su estilo de vida</b>, brindando un <b class="TxtColor1">tratamiento 100% natural</b> junto con una guía nutricional personalizada para que así puedan <b>cumplir sus objetivos</b> de verse y sentirse bien.</p>
            <div class="HomeLinks">
                <div class="col-md-4 col-sm-6 ">
                    <div class="MdFont centerData SubTitle">Nosotros</div>
                    <a href="/nosotros">
                        <img src="<?php echo $RootUrl; ?>/img/home1.jpg"/>
                    </a>         
                </div>
                <div class="col-md-4 col-sm-6 ">
                    <div class="MdFont centerData SubTitle">tratamiento</div>
                    <a href="/tratamiento">
                        <img src="<?php echo $RootUrl; ?>/img/home2.jpg"/>
                    </a>
                </div>
                <div class="col-md-offset-0 col-md-4 col-sm-offset-3 col-sm-6 ">
                    <div class="MdFont centerData SubTitle">Preguntas</div> 
                    <a href="/preguntas">
                        <img src="<?php echo $RootUrl; ?>/img/home3.jpg"/>
                    </a>               
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
<script> 
    $(document).ready(function() {
        $( '.nav li:nth-child(1) a' ).addClass('selected');
			
        $('.SlickBanner').slick({
            autoplay:true,
            arrows:false,
            dots: false,
            centerMode: true,
            centerPadding: '60px',
            waitForAnimate: false,
            swipeToSlide: true,	
            infinite: true,	
            focusOnSelect: true,	
            slidesToShow: 3,
            pauseOnHover:false, 
            pauseOnFocus:false,
            responsive: [{
                    breakpoint: 1140,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '50px',
                        slidesToShow: 3
                    }
                },{
                    breakpoint: 840,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '0px',
                        slidesToShow: 3
                    }
                },{
                    breakpoint: 700,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '100px',
                        slidesToShow: 1
                    }
                }, {
                    breakpoint: 550,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '50px',
                        slidesToShow: 1
                    }
                }, {
                    breakpoint: 400,
                    settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '25px',
                    slidesToShow: 1
                }
            }]
        });
    });
</script>
<?php include_once('footer.php'); ?>