<?php
/*
* Footer Dynamic input panel for Admin 
* @includes customizer -> functions.php
* @package Estheticsol
*/

//Customization of Footer Area Panel
$arg->add_panel('footer_area', array(
    'title' => 'Footer Area',
    'description' => 'Select any one Footer Side and dynamically edit it.',
    'priority' => 110,
));
// Footer Right Section
$arg->add_section('footer_right', array(
    'title' => 'Footer Right',
    'description' => 'Here you can change the text of the Footer right side.',
    'priority' => 2,
    'panel' => 'footer_area',
));
// Footer Left Section
$arg->add_section('footer_left', array(
    'title' => 'Footer Left',
    'description' => 'Here you can change the title and tag of the Footer left side.',
    'priority' => 4,
    'panel' => 'footer_area',
));

//setting and controls for Right Footer  section
// City & Country
$arg->add_setting('city_contry', array(
    'default' => 'Lahore, Pakistan',
    'type' => 'theme_mod',
));
$arg->add_control('city_contry', array(
    'label' => 'City, Country',
    'section' => 'footer_right',
    'type' => 'text',
    'priority' => 3,
));
// Address
$arg->add_setting('address', array(
    'default' => '786, Management House, Johar Town,',
    'type' => 'theme_mod',
));
$arg->add_control('address', array(
    'label' => 'Address',
    'section' => 'footer_right',
    'type' => 'textarea',
    'priority' => 4,
));
// Tel:
$arg->add_setting('tel', array(
    'default' => '+92 345-5678910',
    'type' => 'theme_mod',
));
$arg->add_control('tel', array(
    'label' => 'Tel:',
    'section' => 'footer_right',
    'type' => 'text',
    'priority' => 5,
));
// Mob:
$arg->add_setting('mob', array(
    'default' => '+92 345-5678910',
    'type' => 'theme_mod',
));
$arg->add_control('mob', array(
    'label' => 'Mobile:',
    'section' => 'footer_right',
    'type' => 'text',
    'priority' => 10,
));
// Email
$arg->add_setting('email', array(
    'default' => 'info@estheticsol.com',
    'type' => 'theme_mod',
));
$arg->add_control('email', array(
    'label' => 'E-mail:',
    'section' => 'footer_right',
    'type' => 'text',
    'priority' => 15,
));


//setting and controls for Left Footer  section
// FB Link
$arg->add_setting('fb_link', array(
    'default' => 'index.html#',
    'type' => 'theme_mod',
));
$arg->add_control('fb_link', array(
    'label' => 'FaceBook Link',
    'section' => 'footer_left',
    'type' => 'text',
    'priority' => 4,
));
// Twitter Link
$arg->add_setting('twitter_link', array(
    'default' => 'index.html#',
    'type' => 'theme_mod',
));
$arg->add_control('twitter_link', array(
    'label' => 'Twitter Link',
    'section' => 'footer_left',
    'type' => 'text',
    'priority' => 6,
));
// Youtube Link
$arg->add_setting('yt_link', array(
    'default' => 'index.html#',
    'type' => 'theme_mod',
));
$arg->add_control('yt_link', array(
    'label' => 'Youtube Link',
    'section' => 'footer_left',
    'type' => 'text',
    'priority' => 8,
));
// Linkedin Link
$arg->add_setting('linkedin_link', array(
    'default' => 'index.html#',
    'type' => 'theme_mod',
));
$arg->add_control('linkedin_link', array(
    'label' => 'LinkedIn Link',
    'section' => 'footer_left',
    'type' => 'text',
    'priority' => 10,
));
// Instagram Link
$arg->add_setting('insta_link', array(
    'default' => 'index.html#',
    'type' => 'theme_mod',
));
$arg->add_control('insta_link', array(
    'label' => 'InstaGram Link',
    'section' => 'footer_left',
    'type' => 'text',
    'priority' => 12,
));