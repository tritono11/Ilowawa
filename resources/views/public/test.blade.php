<!doctype HTML>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">
        <script src="https://aframe.io/releases/0.7.1/aframe.min.js"></script>
        <script src="https://unpkg.com/aframe-physics-system@1.4.0/dist/aframe-physics-system.min.js"></script>
        <script src="//cdn.rawgit.com/donmccurdy/aframe-extras/v3.13.1/dist/aframe-extras.min.js"></script>
        <script type="text/javascript" src="{{ asset('js/aframe-components/scene-loaded.js') }}"></script>
        <script src="https://rawgit.com/feiss/aframe-environment-component/master/dist/aframe-environment-component.min.js"></script>
    </head>
    
    <style>
        .scene{
            opacity:0.0;
            -webkit-transition: all 10.0s ease;
            -moz-transition: all 10.0s ease;
            -o-transition: all 10.0s ease;
            transition: all 10.0s ease;
        }
        
    </style>
    <body style='margin : 0px; overflow: hidden;'>
        <img src="{{ asset('img/loading-paper-boy.png') }}" style="position:absolute; width:100%; height:100%"/>
        <a-scene id="scene" physics stats scene-loaded class="scene">
            <!-- ASSET -->
            <a-assets>
                <a-asset-item id="mymodel" src="{{ asset('/js/aframe-components/aframe/house3/house3.gltf') }}"></a-asset-item>
            </a-assets>
            <!-- CAMERA -->
            <a-entity id="camera-1" position="-32 0 0" rotation="-45 -45 0" camera="userHeight: 10.0" look-controls wasd-controls></a-entity>
           
            <a-entity gltf-model="#mymodel" position="0 0 -10" scale="4 4 4"></a-entity>
            <a-entity gltf-model="#mymodel" position="8 0 -10" scale="4 4 4"></a-entity>
            <a-entity gltf-model="#mymodel" position="-8 0 -10" scale="4 4 4"></a-entity>
            <a-entity gltf-model="#mymodel" position="16 0 -10" scale="4 4 4"></a-entity>
            <a-entity gltf-model="#mymodel" position="-16 0 -10" scale="4 4 4"></a-entity>
            <a-entity gltf-model="#mymodel" position="32 0 -10" scale="4 4 4"></a-entity>
            <a-entity gltf-model="#mymodel" position="-32 0 -10" scale="4 4 4"></a-entity>
            
            <a-plane position="0 0 -4" rotation="-90 0 0" width="10" height="10" color="#7BC8A4" static-body ></a-plane>
            <!-- Env -->
            <a-entity environment="preset: forest"></a-entity>
            <a-sound src="src: url({{ asset('/js/aframe-components/sound/forest.mp3') }})" autoplay="true" position="0 2 5" loop="true"></a-sound>
      </a-scene>  

    </body>
</html>