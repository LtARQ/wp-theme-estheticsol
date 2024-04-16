<?php
/*
* Services Dynamic input panel for Admin 
* @includes customizer -> functions.php
* @package Estheticsol
*/

//Customization of Services Area Panel
$arg->add_panel('services', array(
    'title' => 'Services Area',
    'description' => 'Select any one Service and dynamically edit it.',
    'priority' => 110,
));
// Service section 1 for main service
$arg->add_section('service_main', array(
    'title' => 'Main Service',
    'description' => 'Here you can change the title, description and image of the First Service.',
    'priority' => 2,
    'panel' => 'services',
));
// Service section 2 for 1st service
$arg->add_section('service_1', array(
    'title' => 'First Service',
    'description' => 'Here you can change the title and tag of the First Service.',
    'priority' => 2,
    'panel' => 'services',
));
// Service section 3 for 2nd service
$arg->add_section('service_2', array(
    'title' => 'Second Service',
    'description' => 'Here you can change the title and tag of the Second Service.',
    'priority' => 3,
    'panel' => 'services',
));
// Service section 4 for 3rd service
$arg->add_section('service_3', array(
    'title' => 'Third Service',
    'description' => 'Here you can change the title and tag of the Third Service.',
    'priority' => 4,
    'panel' => 'services',
));
// Service section 5 for 4th service
$arg->add_section('service_4', array(
    'title' => 'Forth Service',
    'description' => 'Here you can change the title and tag of the Forth Service.',
    'priority' => 4,
    'panel' => 'services',
));

//setting and controls for main services section
// service Title
$arg->add_setting('service_main_title', array(
    'default' => 'Services',
    'type' => 'theme_mod',
));
$arg->add_control('service_main_title', array(
    'label' => 'Title',
    'section' => 'service_main',
    'type' => 'text',
    'priority' => 3,
));
// service 1st Paragraph
$arg->add_setting('service_main_1_para', array(
    'default' => __('We are a Tech Savvy Company in this era of globalization where technology, innovation & teamwork will be our driving force to design esthetically equipped solutions for our clients.
    We believe integration & alignment is key to success for every business in today world. Our foundation is build on mutual trust, passion and drive for what we do.','estheticsol'),
    'type' => 'theme_mod'
));
$arg->add_control('service_main_1_para', array(
    'label' => '1st Paragraph',
    'section' => 'service_main',
    'type' => 'textarea',
    'priority' => 4,
));
// service 2nd Paragraph
$arg->add_setting('service_main_2_para', array(
    'default' => __('We do not just design and implement esthetics solutions for our portfolio - We build solutions that satisfy, meet and surpass their desires. We value the client s time and budget - We firmly believe in','estheticsol'),
    'type' => 'theme_mod'
));
$arg->add_control('service_main_2_para', array(
    'label' => '2nd Paragraph',
    'type' => 'textarea',
    'section' => 'service_main',
    'priority' => 5,
));
// service sidebar image 
$arg->add_setting('service_main_image', array(
    'default' => __(get_template_directory_uri().'/assets/img/services-img.jpg'),
    'type' => 'theme_mod'
));
$arg->add_control(new WP_Customize_Image_Control($arg, 'service_main_image', array(
    'label' => 'Side Image',
    'section' => 'service_main',
    'priority' => 6,
)));

// setting and controls for 1st services section
// service 1 sidebar image 
$arg->add_setting('service_1_image', array(
    'default' => '',
    'type' => 'theme_mod'
));
$arg->add_control(new WP_Customize_Image_Control($arg, 'service_1_image', array(
    'label' => 'Side Image',
    'section' => 'service_1',
    'priority' => 2,
)));
// service 1 Title
$arg->add_setting('service_1_title', array(
    'default' => 'Services',
    'type' => 'theme_mod',
));
$arg->add_control('service_1_title', array(
    'label' => 'Title',
    'section' => 'service_1',
    'type' => 'text',
    'priority' => 3,
));
// service 1 sub Title
$arg->add_setting('service_1_sub_title', array(
    'default' => 'sorem ipsum',
    'type' => 'theme_mod',
));
$arg->add_control('service_1_sub_title', array(
    'label' => 'Sub Title',
    'section' => 'service_1',
    'type' => 'text',
    'priority' => 4,
));
// service 1 Description 
$arg->add_setting('service_1_des', array(
    'default' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit. Vestibulum ac vehicula leo dulam nullam rhoncus tortor at dignissim vehicula.',
    'type' => 'theme_mod',
));
$arg->add_control('service_1_des', array(
    'label' => 'Title',
    'section' => 'service_1',
    'type' => 'textarea',
    'priority' => 5,
));


// setting and controls for 2st services section
// service 2 sidebar image 
$arg->add_setting('service_2_image', array(
    'default' => '',
    'type' => 'theme_mod'
));
$arg->add_control(new WP_Customize_Image_Control($arg, 'service_2_image', array(
    'label' => 'Side Image',
    'section' => 'service_2',
    'priority' => 2,
)));
// service 2 Title
$arg->add_setting('service_2_title', array(
    'default' => 'Services',
    'type' => 'theme_mod',
));
$arg->add_control('service_2_title', array(
    'label' => 'Title',
    'section' => 'service_2',
    'type' => 'text',
    'priority' => 3,
));
// service 2 sub Title
$arg->add_setting('service_2_sub_title', array(
    'default' => 'sorem ipsum',
    'type' => 'theme_mod',
));
$arg->add_control('service_2_sub_title', array(
    'label' => 'Sub Title',
    'section' => 'service_2',
    'type' => 'text',
    'priority' => 4,
));
// service 2 Description 
$arg->add_setting('service_2_des', array(
    'default' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit. Vestibulum ac vehicula leo dulam nullam rhoncus tortor at dignissim vehicula.',
    'type' => 'theme_mod',
));
$arg->add_control('service_2_des', array(
    'label' => 'Title',
    'section' => 'service_2',
    'type' => 'textarea',
    'priority' => 5,
));


// setting and controls for 3rd services section
// service 3 sidebar image 
$arg->add_setting('service_3_image', array(
    'default' => '',
    'type' => 'theme_mod'
));
$arg->add_control(new WP_Customize_Image_Control($arg, 'service_3_image', array(
    'label' => 'Side Image',
    'section' => 'service_3',
    'priority' => 2,
)));
// service 3 Title
$arg->add_setting('service_3_title', array(
    'default' => 'Services',
    'type' => 'theme_mod',
));
$arg->add_control('service_3_title', array(
    'label' => 'Title',
    'section' => 'service_3',
    'type' => 'text',
    'priority' => 3,
));
// service 3 sub Title
$arg->add_setting('service_3_sub_title', array(
    'default' => 'sorem ipsum',
    'type' => 'theme_mod',
));
$arg->add_control('service_3_sub_title', array(
    'label' => 'Sub Title',
    'section' => 'service_3',
    'type' => 'text',
    'priority' => 4,
));
// service 3 Description 
$arg->add_setting('service_3_des', array(
    'default' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit. Vestibulum ac vehicula leo dulam nullam rhoncus tortor at dignissim vehicula.',
    'type' => 'theme_mod',
));
$arg->add_control('service_3_des', array(
    'label' => 'Title',
    'section' => 'service_3',
    'type' => 'textarea',
    'priority' => 5,
));


// setting and controls for 4th services section
// service 4 sidebar image 
$arg->add_setting('service_4_image', array(
    'default' => '',
    'type' => 'theme_mod'
));
$arg->add_control(new WP_Customize_Image_Control($arg, 'service_4_image', array(
    'label' => 'Side Image',
    'section' => 'service_4',
    'priority' => 2,
)));
// service 4 Title
$arg->add_setting('service_4_title', array(
    'default' => 'Services',
    'type' => 'theme_mod',
));
$arg->add_control('service_4_title', array(
    'label' => 'Title',
    'section' => 'service_4',
    'type' => 'text',
    'priority' => 3,
));
// service 4 sub Title
$arg->add_setting('service_4_sub_title', array(
    'default' => 'Services',
    'type' => 'theme_mod',
));
$arg->add_control('service_4_sub_title', array(
    'label' => 'Sub Title',
    'section' => 'service_4',
    'type' => 'text',
    'priority' => 4,
));
// service 4 Description 
$arg->add_setting('service_4_des', array(
    'default' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit. Vestibulum ac vehicula leo dulam nullam rhoncus tortor at dignissim vehicula.',
    'type' => 'theme_mod',
));
$arg->add_control('service_4_des', array(
    'label' => 'Title',
    'section' => 'service_4',
    'type' => 'textarea',
    'priority' => 5,
));

