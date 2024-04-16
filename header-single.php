<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <!-- =============== Preloader =============== -->
    <?php get_template_part( 'templates/header-parts/preloader' ); ?>
    <!-- =============== nav =============== -->
    <?php get_template_part( 'templates/header-parts/topnav' ); ?>
    <!-- =============== header =============== -->
    <header id="home" class="blog-header">
		<!-- =============== container =============== -->
        <div class="container">
            <div class="header-content row">
				<h1>Blog </h1>
			</div>
        </div>
		<!-- =============== container end =============== -->
    </header>
    