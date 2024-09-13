<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php wp_head(); ?>
    <meta charset=<?php bloginfo('charset'); ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Unipart Automotive">
    <title><?php wp_title(); ?></title>
</head>
<body <?php body_class(); ?>>
    <header class="container nav-container">
        <div class="row nav-header">
            <div class="col-3">
                <a href=<?php echo site_url(); ?>><img src="<?php echo get_theme_file_uri('images/unipart_logo.png')?>" class="nav-logo" alt="Unipart Logo" /></a>
            </div>
            <nav class="col-8 nav-links">
                <?php 
                wp_nav_menu(array(
                    'theme_location' => 'headerMenu'
                )); ?>
            </nav>
            <div class="col-1 d-flex justify-content-center align-items-center">
                <div class="search-circle d-flex justify-content-center align-items-center"><i class="bi bi-search"></i></div>
            </div>
        </div>
    </header>
