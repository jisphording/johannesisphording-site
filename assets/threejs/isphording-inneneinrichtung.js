// THREE.js - PROJECT: Isphording Inneneinrichtung
// ----- ----- ----- ----- ----- ----- ----- ----- ----- -----
// This is the project specific Three.js code
//
// Built with release 125
//
// When using modular bundling with parcel the browserlist setting has to be set in package.json appropriately!

// TESTING FOR WEBGL
// ----- ----- ----- ----- ----- ----- ----- ----- ----- -----

import { WEBGL } from './libs/WebGL';

if ( WEBGL.isWebGLAvailable() ) {
    // Initiate function or other initializations here
    threejs_project();
    
} else {
	const warning = WEBGL.getWebGLErrorMessage();
    document.getElementById( 'header' ).appendChild( warning );
}

// THE ACTUAL THREE.js PROJECT
// ----- ----- ----- ----- ----- ----- ----- ----- ----- -----
// When the test for webgl is passed the following wrapper function 
// that actually runs the project is called.
//
// Import all needed functionality

import * as THREE from './libs/three.module.js';

import { OrbitControls } from './libs/controls/OrbitControls.js';
import { GLTFLoader } from './libs/loaders/GLTFLoader';
import { RGBELoader } from './libs/loaders/RGBELoader';
import { RoughnessMipmapper } from './libs/utils/RoughnessMipmapper';

function threejs_project() {

    // Make objects "globally" availabe 
    let camera, scene, renderer; 

	init();
	render();

    function init() {

        // DEFINING THE COMPONENTS
        // ----- ----- ----- ----- ----- ----- ----- ----- ----- -----

        // getting the canvas
        let canvas = document.getElementsByClassName('main');
        canvas = canvas[0];

        let aspectratio = 1.78;

        camera = new THREE.PerspectiveCamera( 45, canvas.offsetWidth / ( canvas.offsetWidth / aspectratio ), 0.1, 100 );
        camera.position.set( - 1.8, 0.6, 2.7 );

        scene = new THREE.Scene();

        // LOADING ENVIRONMENT
        // ----- ----- ----- ----- ----- ----- ----- ----- ----- -----
        
        new RGBELoader()
            .setDataType( THREE.UnsignedByteType )
            .setPath( 'isphording-inneneinrichtung/threejs/env/' )
            .load( 'royal_esplanade_1k.hdr', function ( texture ) {

                const envMap = pmremGenerator.fromEquirectangular( texture ).texture;

                scene.background = envMap;
                scene.environment = envMap;

                texture.dispose();
                pmremGenerator.dispose();
                
                // use of RoughnessMipmapper is optional
                const roughnessMipmapper = new RoughnessMipmapper( renderer );

                // LOADING GEOMETRY
                // ----- ----- ----- ----- ----- ----- ----- ----- ----- -----
                const loader = new GLTFLoader().setPath( 'isphording-inneneinrichtung/threejs/DamagedHelmet/' );
                loader.load( 'DamagedHelmet.gltf', function ( gltf ) {

                    gltf.scene.traverse( function ( child ) {

                        if ( child.isMesh ) {

                            // TOFIX RoughnessMipmapper seems to be broken with WebGL 2.0
                            // roughnessMipmapper.generateMipmaps( child.material );

                        }

                    } );

                    scene.add( gltf.scene );

                    roughnessMipmapper.dispose();

                    render();

                } ); // END - RGBELoader

        } ); // END - RGBELoader

        // RENDERER SETTINGS
        // ----- ----- ----- ----- ----- ----- ----- ----- ----- -----

        // renderer settings
        renderer = new THREE.WebGLRenderer( { antialias: true } );
        // renderer.setPixelRatio( window.devicePixelRatio );
        renderer.setSize( canvas.offsetWidth, canvas.offsetWidth / aspectratio );
        renderer.toneMapping = THREE.ACESFilmicToneMapping;
        renderer.toneMappingExposure = 1;
        renderer.outputEncoding = THREE.sRGBEncoding;
        
        const pmremGenerator = new THREE.PMREMGenerator( renderer );
        pmremGenerator.compileEquirectangularShader();

        // INPUT & CONTROLS
        // ----- ----- ----- ----- ----- ----- ----- ----- ----- -----

        const controls = new OrbitControls( camera, renderer.domElement );
        controls.addEventListener( 'change', render ); // use if there is no animation loop
        controls.minDistance = 2;
        controls.maxDistance = 10;
        controls.target.set( 0, 0, - 0.2 );
        controls.update();

        window.addEventListener( 'resize', onWindowResize );

        // ADDING GEOMETRY
        // ----- ----- ----- ----- ----- ----- ----- ----- ----- -----
        const geometry = new THREE.BoxGeometry();
        const material = new THREE.MeshBasicMaterial( { color: 0x00ff00 } );
        const cube = new THREE.Mesh( geometry, material );

        // ADDING EXTRA LIGHTS
        // ----- ----- ----- ----- ----- ----- ----- ----- ----- -----
        // const light = new THREE.HemisphereLight( 0xffffbb, 0x080820, 1 );
        // scene.add( light );

        // APPEND CANVAS
        // ----- ----- ----- ----- ----- ----- ----- ----- ----- -----
        canvas.appendChild( renderer.domElement );

        // resize canvas
        canvas = document.getElementsByTagName("canvas")[0]
        let cheight = 100 / aspectratio;
        canvas.style.width = "100%";
        canvas.style.height = cheight + "%";

    } // END - Init Function

    // ON WINDOW RESIZE
    // ----- ----- ----- ----- ----- ----- ----- ----- ----- -----
    function onWindowResize() {

        camera.aspect = canvas.offsetWidth / ( canvas.offsetWidth / aspectratio );
        camera.updateProjectionMatrix();

        renderer.setSize( canvas.offsetWidth, canvas.offsetWidth / aspectratio );

        render();
    } // END - ON WINDOW RESIZE

    // RENDER LOOP
    // ----- ----- ----- ----- ----- ----- ----- ----- ----- -----
    function render() {
        // requestAnimationFrame( render );
        
        // cube.rotation.x += 0.01;
        // cube.rotation.y += 0.01;

        renderer.render( scene, camera );
    } // END - RENDER LOOP    

} // END - threejs project