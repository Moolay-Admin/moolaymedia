$(document).ready(function() {
    if ($(window).width() > 768) {
       let speedSlider2 = 13,
            spikesSlider2 = 0.8,
            processingSlider2 = 0.9;
    
        let $canvas2 = $('#blob1 canvas'),
            canvas2 = $canvas2[0],
            renderer2 = new THREE.WebGLRenderer({
                canvas: canvas2,
                context: canvas2.getContext('webgl2'),
                antialias: true,
                alpha: true
            }),
            simplex2 = new SimplexNoise();
    
        renderer2.setSize($canvas2.width(), $canvas2.height());
        renderer2.setPixelRatio(window.devicePixelRatio || 1);
    
        let scene2 = new THREE.Scene();
            camera = new THREE.PerspectiveCamera(45, $canvas2.width() / $canvas2.height(), 1, 1000);
    
        camera.position.z = 4;
    
        let geometry2 = new THREE.SphereGeometry(.8, 128, 128);
    
        let material2 = new THREE.MeshPhongMaterial({
            color: 0x2c2b2c,
            shininess: 80
        });
    
        let lightTop2 = new THREE.DirectionalLight(0xFFFFFF, 1);
        lightTop2.position.set(0, 500, 200);
        lightTop2.castShadow = true;
        scene2.add(lightTop2);
    
        let lightBottom2 = new THREE.DirectionalLight(0xFFFFFF, .5);
        lightBottom2.position.set(0, -500, 400);
        lightBottom2.castShadow = true;
        scene2.add(lightBottom2);
    
        let ambientLight2 = new THREE.AmbientLight(0x798296);
        scene2.add(ambientLight2);
    
        let sphere2 = new THREE.Mesh(geometry2, material2);
    
        scene2.add(sphere2);
    
        let update2 = () => {
    
            let time = performance.now() * 0.00001 * speedSlider2 * Math.pow(processingSlider2, 3),
                spikes = spikesSlider2 * processingSlider2;
    
            for(let i = 0; i < sphere2.geometry.vertices.length; i++) {
                let p = sphere2.geometry.vertices[i];
                p.normalize().multiplyScalar(1 + 0.3 * simplex2.noise3D(p.x * spikes, p.y * spikes, p.z * spikes + time));
            }
    
            sphere2.geometry.computeVertexNormals();
            sphere2.geometry.normalsNeedUpdate = true;
            sphere2.geometry.verticesNeedUpdate = true;
    
        }
    
        function animate2() {
            update2();
            renderer2.render(scene2, camera);
            requestAnimationFrame(animate2);
        }
    
        requestAnimationFrame(animate2);
        
        
        
        
        /*BLOB2*/
    
        let speedSlider = 13,
            spikesSlider = 0.7,
            processingSlider = 0.8;
    
        let $canvas = $('#blob2 canvas'),
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
        
        /*BLOB4*/
        
        let speedSlider4 = 13,
            spikesSlider4 = 0.8,
            processingSlider4 = 0.9;
    
        let $canvas4 = $('#blob4 canvas'),
            canvas4 = $canvas4[0],
            renderer4 = new THREE.WebGLRenderer({
                canvas: canvas4,
                context: canvas4.getContext('webgl2'),
                antialias: true,
                alpha: true
            }),
            simplex4 = new SimplexNoise();
    
        renderer4.setSize($canvas4.width(), $canvas4.height());
        renderer4.setPixelRatio(window.devicePixelRatio || 1);
    
        let scene4 = new THREE.Scene();
            camera = new THREE.PerspectiveCamera(45, $canvas4.width() / $canvas4.height(), 1, 1000);
    
        camera.position.z = 4;
    
        let geometry4 = new THREE.SphereGeometry(.8, 128, 128);
    
        let material4 = new THREE.MeshPhongMaterial({
            color: 0x2c2b2c,
            shininess: 80
        });
    
        let lightTop4 = new THREE.DirectionalLight(0xFFFFFF, 1);
        lightTop4.position.set(0, 500, 200);
        lightTop4.castShadow = true;
        scene4.add(lightTop4);
    
        let lightBottom4 = new THREE.DirectionalLight(0xFFFFFF, .5);
        lightBottom4.position.set(0, -500, 400);
        lightBottom4.castShadow = true;
        scene4.add(lightBottom4);
    
        let ambientLight4 = new THREE.AmbientLight(0x798296);
        scene4.add(ambientLight4);
    
        let sphere4 = new THREE.Mesh(geometry4, material4);
    
        scene4.add(sphere4);
    
        let update4 = () => {
    
            let time = performance.now() * 0.00001 * speedSlider4 * Math.pow(processingSlider4, 3),
                spikes = spikesSlider4 * processingSlider4;
    
            for(let i = 0; i < sphere4.geometry.vertices.length; i++) {
                let p = sphere4.geometry.vertices[i];
                p.normalize().multiplyScalar(1 + 0.3 * simplex4.noise3D(p.x * spikes, p.y * spikes, p.z * spikes + time));
            }
    
            sphere4.geometry.computeVertexNormals();
            sphere4.geometry.normalsNeedUpdate = true;
            sphere4.geometry.verticesNeedUpdate = true;
    
        }
    
        function animate4() {
            update4();
            renderer4.render(scene4, camera);
            requestAnimationFrame(animate4);
        }
    
        requestAnimationFrame(animate4);
    }
    
});

        /*TYPEWRITE EFFECT*/
        
var TxtType = function(el, toRotate, period) {
    this.toRotate = toRotate;
    this.el = el;
    this.loopNum = 0;
    this.period = parseInt(period, 10) || 2000;
    this.txt = '';
    this.tick();
    this.isDeleting = false;
};

TxtType.prototype.tick = function() {
    var i = this.loopNum % this.toRotate.length;
    var fullTxt = this.toRotate[i];

    if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    this.el.innerHTML = '<span class="wrap-text">'+this.txt+'</span>';

    var that = this;
    var delta = 100 - Math.random() * 100;

    if (this.isDeleting) { delta /= 2; }

    if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
    } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
    }

    setTimeout(function() {
    that.tick();
    }, delta);
};

window.onload = function() {
    var elements = document.getElementsByClassName('typewrite');
    for (var i=0; i<elements.length; i++) {
        var toRotate = elements[i].getAttribute('data-type');
        var period = elements[i].getAttribute('data-period');
        if (toRotate) {
          new TxtType(elements[i], JSON.parse(toRotate), period);
        }
    }
};