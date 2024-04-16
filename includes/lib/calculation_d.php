<?php
/*
* Calculation Number Dynamic input panel for Admin 
* @includes customizer -> functions.php
* @package Estheticsol
*/

$arg->add_section('calculation', array(
    'title' => 'Calculation',
    'description' => 'Here You can Dynamicaly enter progress details.',
    'priority' => 120,
));

//setting and controls for main services section
// Hour of Work
$arg->add_setting('h_work', array(
    'default' => '8766',
    'type' => 'theme_mod',
));
$arg->add_control('h_work', array(
    'label' => 'Hour of Work',
    'section' => 'calculation',
    'type' => 'number',
    'priority' => 2,
));
// Our Partners
$arg->add_setting('partners', array(
    'default' => '35',
    'type' => 'theme_mod',
));
$arg->add_control('partners', array(
    'label' => 'Our Partners',
    'section' => 'calculation',
    'type' => 'number',
    'priority' => 4,
));
// Award Wins
$arg->add_setting('award', array(
    'default' => '10',
    'type' => 'theme_mod',
));
$arg->add_control('award', array(
    'label' => 'Award wins',
    'section' => 'calculation',
    'type' => 'number',
    'priority' => 6,
));
// Line of Code
$arg->add_setting('code', array(
    'default' => '1000',
    'type' => 'theme_mod',
));
$arg->add_control('code', array(
    'label' => 'Line of Code',
    'section' => 'calculation',
    'type' => 'number',
    'priority' => 8,
));
// Clients
$arg->add_setting('clients', array(
    'default' => '60',
    'type' => 'theme_mod',
));
$arg->add_control('clients', array(
    'label' => 'Clients',
    'section' => 'calculation',
    'type' => 'number',
    'priority' => 10,
));
// Projects
$arg->add_setting('project', array(
    'default' => '70',
    'type' => 'theme_mod',
));
$arg->add_control('project', array(
    'label' => 'Projects',
    'section' => 'calculation',
    'type' => 'number',
    'priority' => 12,
));