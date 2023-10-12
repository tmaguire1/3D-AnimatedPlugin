<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;


add_action('after_setup_theme', 'load_cabon_fields');

add_action('carbon_fields_register_fields', 'create_options_page');


function load_cabon_fields()

{
    
    \Carbon_Fields\Carbon_Fields::boot();
}


function create_options_page(){


    Container::make( 'theme_options', __( '3D Animated View Options' ) )
    ->add_fields( array(


        Field::make( 'separator', 'rotation', __( 'Rotation Speed' ) ),


        Field::make( 'text', 'x_rotation_speed', __( 'X Rotation Speed' ) )
        ->set_attribute('type', 'number')
        ->set_attribute('step', '0.01')
        ->set_default_value( 0.01 ),

        Field::make( 'text', 'y_rotation_speed', __( 'Y Rotation Speed' ) )
        ->set_attribute('type', 'number')
        ->set_attribute('step', '0.01')
        ->set_default_value( 0.01 ),

        Field::make( 'text', 'z_rotation_speed', __( 'Z Rotation Speed' ) )
        ->set_attribute('type', 'number')
        ->set_attribute('step', '0.01')
        ->set_default_value( 0.01 ),

        Field::make( 'separator', 'scale', __( 'Model Scale' ) ),


        Field::make( 'text', 'x_scale', __( 'X Model Scale' ) )
        ->set_attribute('type', 'number')
        ->set_attribute('step', '0.01')
        ->set_default_value( 0.1 ),
        

        Field::make( 'text', 'y_scale', __( 'Y Model Scale' ) )
        ->set_attribute('type', 'number')
        ->set_attribute('step', '0.01')
        ->set_default_value( 0.1 ),

        Field::make( 'text', 'z_scale', __( 'Z Model Scale' ) )
        ->set_attribute('type', 'number')
        ->set_attribute('step', '0.01')
        ->set_default_value( 0.1 ),


        Field::make( 'separator', 'position', __( 'Model Position' ) ),


        Field::make( 'text', 'x_position', __( 'X Model Position' ) )
        ->set_attribute('type', 'number')
        ->set_attribute('step', '0.01')
        ->set_default_value( 0 ),
        

        Field::make( 'text', 'y_position', __( 'Y Model Position' ) )
        ->set_attribute('type', 'number')
        ->set_attribute('step', '0.01')
        ->set_default_value( 0 ),

        Field::make( 'text', 'z_position', __( 'Z Model Position' ) )
        ->set_attribute('type', 'number')
        ->set_attribute('step', '0.01')
        ->set_default_value( 0 ),
        
        Field::make( 'separator', 'container_width', __( 'Container Width' ) ),

        Field::make( 'text', 'width_value', __( 'Width' ) )
        ->set_attribute('type', 'number')
        ->set_attribute('step', '1')
        ->set_default_value( 50 ),

        Field::make( 'radio', 'width_mesurement', __( '% or px' ) )
	        ->set_options( array(
                '%' => '%',
                'px' => 'px',
               
	) ),


    Field::make( 'separator', 'height', __( 'Container Height' ) ),

    Field::make( 'text', 'height_value', __( 'Height' ) )
    ->set_attribute('type', 'number')
    ->set_attribute('step', '1')
    ->set_default_value( 500 ),

    Field::make( 'radio', 'height_mesurement', __( '% or px' ) )
        ->set_options( array(
            
            'px' => 'px',
           
) ),


    Field::make( 'separator', 'model_file', __( 'Model File' ) ),
            
            


        Field::make( 'file', 'model', __( '3D Model' ) )
            ->set_value_type( 'url' ),
    ) );
}