<?php $RootUrl='https://vitalightec.com'; ?>

<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- SEO TAGS -->
        <title><?php echo $SeoTitle; ?></title>
        <meta name="description" content="<?php echo $SeoDescription; ?>" />
        <meta property="og:title" content="<?php echo $SeoTitle; ?>" />
        <meta property="og:description" content="<?php echo $SeoDescription; ?>" />
        <meta property="og:site_name" content="Vitalight Ecuador" />
        <meta property="og:image" content="<?php echo $RootUrl; ?>/img/vitalightseo.jpg" />
        <meta name="twitter:title" content="<?php echo $SeoTitle; ?>" />
        <meta name="twitter:description" content="<?php echo $SeoDescription; ?>" />
        <meta name="twitter:image" content="<?php echo $RootUrl; ?>/img/vitalightseo.jpg" />        

        <!-- JS LIBRARIES -->
        <script src="<?php echo $RootUrl; ?>/js/jquery.min.js"></script>

        <script src="<?php echo $RootUrl; ?>/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="<?php echo $RootUrl; ?>/css/bootstrap.css" >
        <link rel="stylesheet" href="<?php echo $RootUrl; ?>/css/bootstrap-theme.css" >
        
        <link rel="stylesheet" href="<?php echo $RootUrl; ?>/css/font-awesome.css" >
        
        <link rel="stylesheet" href="<?php echo $RootUrl; ?>/css/style.css" >
        <link rel="stylesheet" href="<?php echo $RootUrl; ?>/css/WmtStyles.css" >
        
        <script type="text/javascript" src="<?php echo $RootUrl; ?>/js/slick/slick.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo $RootUrl; ?>/js/slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo $RootUrl; ?>/js/slick/slick-theme.css"/>


        <script>jQuery.noConflict(); var $=jQuery;</script>

        <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.12';
        fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
        
        <script>jQuery.noConflict(); var $=jQuery;</script>
    </head>
    <body>
        <div id="fb-root"></div>
        <nav class="navbar navbar-default navbar-inverse" data-spy="affix" data-offset-top="1"  >
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo $RootUrl; ?>">
                        <img src="<?php echo $RootUrl; ?>/img/logo.png" />
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo $RootUrl; ?>/" >Inicio</a></li>
                        <li><a href="<?php echo $RootUrl; ?>/nosotros">Nosotros</a></li>
                        <li><a href="<?php echo $RootUrl; ?>/tratamiento">Tratamiento</a></li>
                        <li><a href="<?php echo $RootUrl; ?>/preguntas">Preguntas</a></li>
                        <li><a href="<?php echo $RootUrl; ?>/contactos">Contactos</a></li>
                    </ul>
                </div>  
            </div>
        </nav>
        <div style="clear:both;"></div>
        <div id="content" class="site-content">