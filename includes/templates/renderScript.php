


<?php


$modelUrl = get_plugin_options('model');
$xRotSpeed = get_plugin_options('x_rotation_speed');
$yRotSpeed = get_plugin_options('y_rotation_speed');
$zRotSpeed = get_plugin_options('z_rotation_speed');

$xPosition = get_plugin_options('x_position');
$yPosition = get_plugin_options('y_position');
$zPosition = get_plugin_options('z_position');

$xScale = get_plugin_options('x_scale');
$yScale = get_plugin_options('y_scale');
$zScale = get_plugin_options('z_scale');


$widthValue = get_plugin_options('width_value');

$widthMesurement = get_plugin_options('width_mesurement');

$heightValue = get_plugin_options('height_value');








return 

"<script src='https://cdn.jsdelivr.net/npm/three@0.122.0/build/three.js'></script>
<script src='https://cdn.jsdelivr.net/npm/three@0.122.0/examples/js/loaders/GLTFLoader.js'></script>

<script>





var camera, scene, renderer;
var model;

const contentDiv = document.getElementById('contentDiv');

console.log(contentDiv.parentElement.parentElement.offsetWidth);


const containerWidth = '$widthMesurement' == '%' ? (contentDiv.parentElement.offsetWidth / 100) * parseInt('$widthValue') : parseInt('$widthValue');

const containerHeight =  parseInt('$heightValue');


init();
animate();

function init() {


camera = new THREE.PerspectiveCamera( 45, containerWidth / containerHeight, 1, 1000 );
camera.position.z = 1.5;


scene = new THREE.Scene();


var light = new THREE.PointLight(0xFFFFFF, 5, 5000);
light.position.set(10,0,25);
scene.add( light );

var light2 = new THREE.AmbientLight(0xB1B1B1, 0.2)
scene.add( light2 );



var loader = new THREE.GLTFLoader();
loader.load( '$modelUrl', function ( gltf) {

    model = gltf.scene;

    model.scale.set($xScale,$yScale,$zScale);


    model.position.x = $xPosition;
    model.position.y = $yPosition;
    model.position.z = $zPosition;

    scene.add( model );

    console.log(model);

    console.log(containerWidth, containerHeight);

    renderer = new THREE.WebGLRenderer( { antialias: true, alpha:true } );
    renderer.setSize( containerWidth, containerHeight);
    renderer.render( scene, camera );


    contentDiv.appendChild( renderer.domElement ); 
    
});

}


function animate() {

    requestAnimationFrame( animate );

    if(model){

    model.rotation.x += $xRotSpeed;
    model.rotation.y += $yRotSpeed;
    model.rotation.z += $zRotSpeed;

    renderer.render( scene, camera );

    }



}



</script>"


?>