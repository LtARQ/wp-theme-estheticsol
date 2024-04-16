<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <meta name="author" content="<?php bloginfo( 'author' ); ?>">
    
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <!-- =============== Preloader =============== -->
    <?php get_template_part( 'templates/header-parts/preloader' ); ?>
    <!-- =============== nav =============== -->
    <?php get_template_part( 'templates/header-parts/topnav' ); ?>
    <!-- =============== header =============== -->
    <header id="home" class="header">
		<!-- =============== container =============== -->
        <div class="container">
            <div class="header-content row">
            <!-- =============== container =============== -->
                <?php get_template_part('templates/header-parts/carousel'); ?>
            </div>    
        </div>
		<!-- =============== container end =============== -->
    </header>