<?php

function show_content()
{


    $element = include Plugin_Path . 'includes/templates/contentDiv.php';

    $element .= include Plugin_Path . 'includes/templates/renderScript.php';



    return $element;

    

    
};




add_shortcode('3DAnimatedView', 'show_content');