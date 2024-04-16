<?php
/*
* Carousel Dynamic input panel for Admin 
* @includes functions.php
* @package Estheticsol
*/
// Carousel Panal in admin customization sidebar
$arg->add_panel('estsol_carousel', array(
    'title' => 'Top Slides',
    'description' => 'Select any slide here and edit it here dynamicly.',
    'priority' => 105,
));
// Service section 1
$arg->add_section('carousel_1', array(
    'title' => 'First Carousel',
    'description' => 'Here you can change the title and tag of the First Carousel.',
    'priority' => 2,
    'panel' => 'estsol_carousel',
));
// Service section 2
$arg->add_section('carousel_2', array(
    'title' => 'Second Carousel',
    'description' => 'Here you can change the title and tag of the Second Carousel.',
    'priority' => 3,
    'panel' => 'estsol_carousel',
));
// Service section 3
$arg->add_section('carousel_3', array(
    'title' => 'Third Carousel',
    'description' => 'Here you can change the title and tag of the Third Carousel.',
    'priority' => 4,
    'panel' => 'estsol_carousel',
));
// Sitting and controls of Carousel section 1
// main heading
$arg->add_setting('carousel_1_heading', array(
    'default' => 'LETS YOUR <span>IDEAS</span> SOAR <br/>WITH WINGS',
    'type' => 'theme_mod'
));
$arg->add_control('carousel_1_heading', array(
    'label' => 'Main Heading',
    'section' => 'carousel_1',
    'type' => 'textarea',
    'priority' => 3,
));
// sub heading
$arg->add_setting('carousel_1_sub_heading', array(
    'default' => __('<span>ON-TIME STRATEGY</span>','estheticsol'),
    'type' => 'theme_mod'
));
$arg->add_control('carousel_1_sub_heading', array(
    'label' => 'Sub Heading',
    'section' => 'carousel_1',
    'type' => 'text',
    'priority' => 3,
));
//  Description
$arg->add_setting('carousel_1_des', array(
    'default' => 'We help you define your objective & develop a realistic strategy with you',
    'type' => 'theme_mod'
));
$arg->add_control('carousel_1_des', array(
    'label' => 'Main Text',
    'type' => 'textarea',
    'section' => 'carousel_1',
    'priority' => 4,
));
// Sitting and controls of Carousel section 2
// main heading
$arg->add_setting('carousel_2_heading', array(
    'default' => 'OUR <span>SUCCESS</span> DEPENDS <span>ON</span> <br/>OUR <span>CLIENTS </span>SUCCESS ',
    'type' => 'theme_mod'
));
$arg->add_control('carousel_2_heading', array(
    'label' => 'Main Heading',
    'section' => 'carousel_2',
    'type' => 'textarea',
    'priority' => 3,
));
// sub heading
$arg->add_setting('carousel_2_sub_heading', array(
    'default' => '<span>ON-</span>TIME<span> STRATEGY</span>  ',
    'type' => 'theme_mod'
));
$arg->add_control('carousel_2_sub_heading', array(
    'label' => 'Sub Heading',
    'section' => 'carousel_2',
    'type' => 'text',
    'priority' => 3,
));
//  Description
$arg->add_setting('carousel_2_des', array(
    'default' => 'We help you define your objective & develop a realistic strategy with you',
    'type' => 'theme_mod'
));
$arg->add_control('carousel_2_des', array(
    'label' => 'Main Text',
    'type' => 'textarea',
    'section' => 'carousel_2',
    'priority' => 4,
));
// Sitting and controls of Carousel section 3
// main heading
$arg->add_setting('carousel_3_heading', array(
    'default' => 'DELIVERING AN <span>UNRIVALLED</span>  <br/>EXPERIENCE',
    'type' => 'theme_mod'
));
$arg->add_control('carousel_3_heading', array(
    'label' => 'Main Heading',
    'section' => 'carousel_3',
    'type' => 'textarea',
    'priority' => 3,
));
// sub heading
$arg->add_setting('carousel_3_sub_heading', array(
    'default' => 'FOR YOUR WEBSITE',
    'type' => 'theme_mod'
));
$arg->add_control('carousel_3_sub_heading', array(
    'label' => 'Sub Heading',
    'section' => 'carousel_3',
    'type' => 'text',
    'priority' => 3,
));
//  Description
$arg->add_setting('carousel_3_des', array(
    'default' => 'We help you define your objective & develop a realistic strategy with you',
    'type' => 'theme_mod'
));
$arg->add_control('carousel_3_des', array(
    'label' => 'Main Text',
    'type' => 'textarea',
    'section' => 'carousel_3',
    'priority' => 4,
));