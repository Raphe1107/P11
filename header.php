<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <?php wp_head(); ?>
    
</head>

<body <?php body_class(); ?> class="container">
<?php wp_body_open(); ?>
<header id="header"> 
    <div>
        <a href="<?php echo home_url(); ?>">
        <!-- Ajout logo -->
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo" class="logo">
        </a>
    </div>
    <div class="btn-menu-burger">
        <span></span>
    </div>
    <nav>
        <!-- Menu header -->
        <?php wp_nav_menu ( array ('theme_location' => 'header-menu' ,'menu_class' => 'header-menu','container' => false ) ); ?>
    </nav>
</header>

<?php get_template_part('templates_part/menuburger'); ?>  <!-- Ajout du menu burger --> 