<?php
/*
* Customization of complete site includes here
*
* @package Estheticsol
*/

function estsol_customization($arg){

    // @include carousel dynamic display
    require_once 'lib/carousel_d.php';
    // @include About dynamic display
    require_once 'lib/about_d.php';
    // @include Services dynamic display
    require_once 'lib/services_d.php';
    // @include Footer dynamic display
    require_once 'lib/footer_d.php';
    // @include Calculation/ Progress bar
    require_once 'lib/calculation_d.php';
}

add_action('customize_register', 'estsol_customization');