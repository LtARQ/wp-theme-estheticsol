<?php
/*
* Navbar header template part
*
* @package Estheticsol
*/
?>

<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php site_url(); ?>">
                    <img class="elogo" src="<?php echo get_template_directory_uri();?>/assets/img/logo2.png"  alt="Logo">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->

                <!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> -->
                    <?php 
                       
                       wp_nav_menu(
                            array(
                                'theme_location'=>'primary_menu',
                                'container_class' => 'collapse navbar-collapse',
                                'container_id' => 'bs-example-navbar-collapse-1',
                                'menu_class' => 'nav navbar-nav navbar-right',
                                'link_before' => '<span class="page-scroll">',
                                'link_after' => '</span>',
                            ));
                
                    ?>      
                
                
                
                <!-- <ul class="nav navbar-nav navbar-right">
						<li>
                            <a class="page-scroll" href="#home">Home</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#about">About</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#Services">Services</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#Gallery">Gallery</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#blog">Blog</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#contact">Contact</a>
                        </li>
                    </ul> -->
                <!-- </div> -->
                <!-- =============== navbar-collapse =============== -->

            </div>
        </div>
        <!-- =============== container-fluid =============== -->
    </nav>