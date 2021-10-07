<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>" />

    <?php if (is_search()) : ?>
        <meta name="robots" content="noindex, nofolow" />
    <?php endif; ?>

    <title>LoveToEat Home Page</title>


    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/common.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/screen.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jqtransform.css">


    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

    <script src="<?php echo ILOVEEAT_THEME_URL ?>js/jquery-1.9.1.min.js"></script>
    <script src="<?php echo ILOVEEAT_THEME_URL ?>js/jquery.carouFredSel-6.2.0.js"></script>
    <script src="<?php echo ILOVEEAT_THEME_URL ?>js/jquery.jqtransform.js"></script>
    <script src="<?php echo ILOVEEAT_THEME_URL ?>js/slides.jquery.js"></script>
    <script src="<?php echo ILOVEEAT_THEME_URL ?>js/scripts.js"></script>

<link rel="ping"

</head>

<body>

    <header>
        <div class="pos-center">
            <h1><a href="#">lovetoeat.pl</a></h1>

            <nav id="main-nav">
                <div>
                    <ul class="menu">
                        <li>
                            <a href="#">Przepisy</a>
                            <ul class="sub-menu">
                                <li><a href="#" title="lunch">Obiad i kolacja</a></li>
                                <li><a href="#" title="breakfast">Śniadanie</a></li>
                                <li><a href="#" title="snacks">Przekąski</a></li>
                                <li><a href="#" title="desserts">Desery</a></li>
                                <li><a href="#" title="drinks">Drinki i Napoje</a></li>
                                <li><a href="#" title="all">Wszystkie</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Restauracje</a></li>
                        <li><a href="#">Food Fight</a></li>
                        <li class="current-menu-item"><a href="#">Blog</a></li>
                        <li><a href="#">Kontakt</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>