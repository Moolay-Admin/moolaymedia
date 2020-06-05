$(document).ready(function() {
    if ($(window).width() > 768) {
        
        /*BLOB2*/
    
        let speedSlider = 13,
            spikesSlider = 0.7,
            processingSlider = 0.8;
    
        let $canvas = $('#blob4 canvas'),
            canvas = $canvas[0],
            renderer = new THREE.WebGLRenderer({
                canvas: canvas,
                context: canvas.getContext('webgl2'),
                antialias: true,
                alpha: true
            }),
            simplex = new SimplexNoise();
    
        renderer.setSize($canvas.width(), $canvas.height());
        renderer.setPixelRatio(window.devicePixelRatio || 1);
    
        let scene = new THREE.Scene();
            camera = new THREE.PerspectiveCamera(45, $canvas.width() / $canvas.height(), 1, 1000);
    
        camera.position.z = 4;
    
        let geometry = new THREE.SphereGeometry(.8, 128, 128);
    
        let material = new THREE.MeshPhongMaterial({
            color: 0x2c2b2c,
            shininess: 80
        });
    
        let lightTop = new THREE.DirectionalLight(0xFFFFFF, 1);
        lightTop.position.set(0, 500, 200);
        lightTop.castShadow = true;
        scene.add(lightTop);
    
        let lightBottom = new THREE.DirectionalLight(0xFFFFFF, .5);
        lightBottom.position.set(0, -500, 400);
        lightBottom.castShadow = true;
        scene.add(lightBottom);
    
        let ambientLight = new THREE.AmbientLight(0x798296);
        scene.add(ambientLight);
    
        let sphere = new THREE.Mesh(geometry, material);
    
        scene.add(sphere);
    
        let update = () => {
    
            let time = performance.now() * 0.00001 * speedSlider * Math.pow(processingSlider, 3),
                spikes = spikesSlider * processingSlider;
    
            for(let i = 0; i < sphere.geometry.vertices.length; i++) {
                let p = sphere.geometry.vertices[i];
                p.normalize().multiplyScalar(1 + 0.3 * simplex.noise3D(p.x * spikes, p.y * spikes, p.z * spikes + time));
            }
    
            sphere.geometry.computeVertexNormals();
            sphere.geometry.normalsNeedUpdate = true;
            sphere.geometry.verticesNeedUpdate = true;
    
        }
    
        function animate() {
            update();
            renderer.render(scene, camera);
            requestAnimationFrame(animate);
        }
    
        requestAnimationFrame(animate);
        
        /*BLOB3*/
        
        let speedSlider3 = 13,
            spikesSlider3 = 0.8,
            processingSlider3 = 0.9;
    
        let $canvas3 = $('#blob3 canvas'),
            canvas3 = $canvas3[0],
            renderer3 = new THREE.WebGLRenderer({
                canvas: canvas3,
                context: canvas3.getContext('webgl2'),
                antialias: true,
                alpha: true
            }),
            simplex3 = new SimplexNoise();
    
        renderer3.setSize($canvas3.width(), $canvas3.height());
        renderer3.setPixelRatio(window.devicePixelRatio || 1);
    
        let scene3 = new THREE.Scene();
            camera = new THREE.PerspectiveCamera(45, $canvas3.width() / $canvas3.height(), 1, 1000);
    
        camera.position.z = 4;
    
        let geometry3 = new THREE.SphereGeometry(.8, 128, 128);
    
        let material3 = new THREE.MeshPhongMaterial({
            color: 0x2c2b2c,
            shininess: 80
        });
    
        let lightTop3 = new THREE.DirectionalLight(0xFFFFFF, 1);
        lightTop3.position.set(0, 500, 200);
        lightTop3.castShadow = true;
        scene3.add(lightTop3);
    
        let lightBottom3 = new THREE.DirectionalLight(0xFFFFFF, .5);
        lightBottom3.position.set(0, -500, 400);
        lightBottom3.castShadow = true;
        scene3.add(lightBottom3);
    
        let ambientLight3 = new THREE.AmbientLight(0x798296);
        scene3.add(ambientLight3);
    
        let sphere3 = new THREE.Mesh(geometry3, material3);
    
        scene3.add(sphere3);
    
        let update3 = () => {
    
            let time = performance.now() * 0.00001 * speedSlider3 * Math.pow(processingSlider3, 3),
                spikes = spikesSlider3 * processingSlider3;
    
            for(let i = 0; i < sphere3.geometry.vertices.length; i++) {
                let p = sphere3.geometry.vertices[i];
                p.normalize().multiplyScalar(1 + 0.3 * simplex3.noise3D(p.x * spikes, p.y * spikes, p.z * spikes + time));
            }
    
            sphere3.geometry.computeVertexNormals();
            sphere3.geometry.normalsNeedUpdate = true;
            sphere3.geometry.verticesNeedUpdate = true;
    
        }
    
        function animate3() {
            update3();
            renderer3.render(scene3, camera);
            requestAnimationFrame(animate3);
        }
    
        requestAnimationFrame(animate3);
    }
});