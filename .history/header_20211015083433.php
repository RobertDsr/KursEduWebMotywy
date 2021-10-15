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

        <script src="https://maps.googleapis.com/maps/api/js?key=<?php echo esc_attr(get_option('ilte_gmap_api_key')); ?>&amp;sensor=true"></script>

    <script src="<?php echo ILOVEEAT_THEME_URL ?>js/jquery-1.9.1.min.js"></script>
    <script src="<?php echo ILOVEEAT_THEME_URL ?>js/jquery.carouFredSel-6.2.0.js"></script>
    <script src="<?php echo ILOVEEAT_THEME_URL ?>js/jquery.jqtransform.js"></script>
    <script src="<?php echo ILOVEEAT_THEME_URL ?>js/slides.jquery.js"></script>
    <script src="<?php echo ILOVEEAT_THEME_URL ?>js/scripts.js"></script>

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

<?php wp_head() ?>

</head>

<body <?php body_class()?>>

    <header>
        <div class="pos-center">
            <h1><a href="<?php echo esc_url(home_url('/')); ?>">lovetoeat.pl</a></h1>

            <nav id="main-nav">
            </nav>
        </div>
    </header>