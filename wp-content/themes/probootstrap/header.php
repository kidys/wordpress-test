<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ProBootstrap:Sublime &mdash; Free Bootstrap Theme, Free Responsive Bootstrap Website Template</title>
    <meta name="description" content="Free Bootstrap Theme by ProBootstrap.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet"> 
    <link rel="stylesheet" href="/css/styles-merged.css">
    <link rel="stylesheet" href="/css/style.min.css">
    <link rel="stylesheet" href="/css/custom.css">

    <!--[if lt IE 9]>
        <script src="js/vendor/html5shiv.min.js"></script>
        <script src="js/vendor/respond.min.js"></script>
    <![endif]-->

    <?php wp_head(); ?>
</head>
<body>
    <!-- START: header -->
    <header role="banner" class="probootstrap-header">
        <div class="container-fluid">
        <!-- <div class="row"> -->
            <a href="index.html" class="probootstrap-logo">Sublime<span>.</span></a>
            
            <a href="#" class="probootstrap-burger-menu visible-xs" ><i>Menu</i></a>
            <div class="mobile-menu-overlay"></div>
            
            <nav role="navigation" class="probootstrap-nav hidden-xs">
                <ul class="probootstrap-main-nav">
                    <?php if ( has_nav_menu( 'primary' ) ): ?>
                        <?php wp_nav_menu( [
                            'container' => '',
                            'items_wrap' => '%3$s'
                        ] ); ?>
                    <?php endif ?>
                    <li class="probootstrap-cta"><a href="signup.html">Sign up</a></li>                    
                </ul>
                <div class="extra-text visible-xs">
                    <a href="#" class="probootstrap-burger-menu"><i>Menu</i></a>
                    <h5>Social</h5>
                    <ul class="social-buttons">
                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                    <li><a href="#"><i class="icon-instagram2"></i></a></li>
                    </ul>
                    <p><small>&copy; Copyright 2017. All Rights Reserved.</small></p>
                </div>
            </nav>            

            <section class="probootstrap-intro">
            <div class="container">
                <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h1 class="probootstrap-animate">Create cool template, For the better web</h1>
                    <div class="probootstrap-subtitle probootstrap-animate">
                    <h2>A modern type of website template for your new business brought to you by <a href="https://probootstrap.com/" target="_blank">ProBootstrap.com</a></h2>
                    </div>
                    <p class="watch-intro probootstrap-animate"><a href="https://vimeo.com/45830194" class="popup-vimeo">Watch the intro <i class="icon-play2"></i></a></p>
                </div>
                </div>
            </div>
            </section>
        <!-- </div> -->
        </div>      
    </header>
    <!-- END: header -->