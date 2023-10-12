<?php

/**
 * Plugin Name: 3D Animated View
 * Description: A Plugin to display 3D Models and include animations.
 * Version: 1.0
 * Text Domain: 3D Animated View
 */



 if(!defined('ABSPATH')){
     die('No Access');
 };


 if(!class_exists('AnimatedViewClass')){
        class AnimatedViewClass {


            public function __construct(){

                define('Plugin_Path', plugin_dir_path( __FILE__ ));

                require_once( Plugin_Path . '/vendor/autoload.php');
            }


            public function init()
            {

                include_once Plugin_Path . '/includes/utilities.php';

                include_once Plugin_Path . '/includes/optionsPage.php';

                include_once Plugin_Path . '/includes/content.php';


            }
     

    }

    
    $AnimatedViewClass = new AnimatedViewClass;
    $AnimatedViewClass->init();



}
 
     