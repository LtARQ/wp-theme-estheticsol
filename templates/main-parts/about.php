<?php
/*
* About Template Part
*
* @package Estheticsol
*/
?>

<div class="container">            
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 wow fadeInDown animated" data-wow-delay=".5s">
            <h2><?php echo get_theme_mod('about_title','About Us'); ?></h2>
            <p><?php echo get_theme_mod('about_1_para','We are a Tech Savvy Company in this era of globalization where technology, innovation & teamwork will be our driving force to design esthetically equipped solutions for our clients.
                We believe integration & alignment is key to success for every business in today world. Our foundation is build on mutual trust, passion and drive for what we do'); ?></p>
            <p><?php echo get_theme_mod('about_2_para','We do not just design and implement esthetics solutions for our portfolio - We build solutions that satisfy, meet and surpass their desires. We value the client s time and budget - We firmly believe in'); ?></p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 wow fadeInRight animated" data-wow-delay=".5s">
            <img src="<?php echo get_theme_mod('about_image', get_template_directory_uri().'/assets/img/about-img.jpg'); ?>"/>               
        </div>     
    </div>
</div> 
