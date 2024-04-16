<?php
/*
* About Dynamic input panel for Admin 
* @includes customizer -> functions.php
* @package Estheticsol
*/
// About Section in admin customization sidebar

$arg->add_section('about', array(
    'title' => 'About',
    'description' => 'Here you can change the Title, Image and Descriptions of the About.',
    'priority' => 107,
));
// About Title
$arg->add_setting('about_title', array(
    'default' => 'About Us',
    'type' => 'theme_mod',
));
$arg->add_control('about_title', array(
    'label' => 'Title',
    'section' => 'about',
    'type' => 'text',
    'priority' => 3,
));
// About 1st Paragraph
$arg->add_setting('about_1_para', array(
    'default' => __('We are a Tech Savvy Company in this era of globalization where technology, innovation & teamwork will be our driving force to design esthetically equipped solutions for our clients.
    We believe integration & alignment is key to success for every business in today world. Our foundation is build on mutual trust, passion and drive for what we do.','estheticsol'),
    'type' => 'theme_mod'
));
$arg->add_control('about_1_para', array(
    'label' => '1st Paragraph',
    'section' => 'about',
    'type' => 'textarea',
    'priority' => 4,
));
// About 2nd Paragraph
$arg->add_setting('about_2_para', array(
    'default' => __('We do not just design and implement esthetics solutions for our portfolio - We build solutions that satisfy, meet and surpass their desires. We value the client s time and budget - We firmly believe in','estheticsol'),
    'type' => 'theme_mod'
));
$arg->add_control('about_2_para', array(
    'label' => '2nd Paragraph',
    'type' => 'textarea',
    'section' => 'about',
    'priority' => 5,
));
// About sidebar image 
$arg->add_setting('about_image', array(
    'default' => __(get_template_directory_uri().'/assets/img/about-img.jpg'),
    'type' => 'theme_mod'
));
$arg->add_control(new WP_Customize_Image_Control($arg, 'about_image', array(
    'label' => 'Side Image',
    'section' => 'about',
    'priority' => 6,
)));
