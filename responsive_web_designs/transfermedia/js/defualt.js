// scroll down
$(document).ready(function () {

    var getHash = window.location.hash;
    console.log(getHash)
    if(getHash != ''){
        var $target = $(getHash+'_section');
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top
        }, 900, 'swing');
    }
   
    $('.goto').on('click', function (e) {
        var _this = $(this);
        var target = _this.attr('href');
        var $target = $(target+'_section');
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top
        }, 900, 'swing');
    });

    if($('.lazy').length){
        $('.lazy').lazy();
    }

    var scrollTop = $(".scrollTop");
    $(window).scroll(function () {
        var topPos = $(this).scrollTop();
        if (topPos > 100) {
            $(scrollTop).css("opacity", "1");

        } else {
            $(scrollTop).css("opacity", "0");
        }
    });

    $(scrollTop).click(function () {
        $('html, body').animate({
            scrollTop: 0
        }, 800);
        return false;
    });

    $('.menu_icon_span').on('click', function () {
        var _this = $(this);
        var _target = $('.nav_bar');
        if (_this.hasClass('active')) {
            _this.removeClass('active');
            _target.removeClass('open');
        } else {
            _target.addClass('open');
            _this.addClass('active');
        }
    })

    $('.colse_menu_icon_span').on('click', function () {
        closemenu()
    });

    if($('#banner_anim').length){
        init();
        animate();
    }
});

// animation
var group;
var container;
var particlesData = [];
var camera, scene, renderer;
var positions, colors;
var particles;
var pointCloud;
var particlePositions;
var linesMesh;
var maxParticleCount = 400;
var particleCount = 200;
var r = 800;
var rHalf = r / 2;
var effectController = {
    showDots: true,
    showLines: true,
    minDistance: 150,
    limitConnections: false,
    maxConnections: 20,
    particleCount: 500
};

var banner = document.getElementById('banner_anim');
if(banner){
    var bannerwidth = banner.clientWidth;
    var bannerHeight = banner.clientHeight + (window.innerWidth > 901 ? 300 : window.innerWidth > 1261 ? 200 : window.innerWidth > 769 ? 0 : 0);
}

    
function closemenu() {
    $('.menu_icon_span').removeClass('active');
    $('.nav_bar').removeClass('open');
}
function init() {
    container = document.getElementById('banner_anim');
    camera = new THREE.PerspectiveCamera(45, bannerwidth / bannerHeight, 1, 4000);
    camera.position.z = 1750;
    scene = new THREE.Scene();
    scene.background = new THREE.Color(0xffffff);
    group = new THREE.Group();
    scene.add(group);
    var segments = maxParticleCount * maxParticleCount;
    positions = new Float32Array(segments * 3);
    colors = new Float32Array(segments * 3);
    var pMaterial = new THREE.PointsMaterial({
        color: 0x808080,
        size: 3,
        blending: THREE.SubtractiveBlending,
        transparent: true,
        sizeAttenuation: false
    });
    particles = new THREE.BufferGeometry();
    particlePositions = new Float32Array(maxParticleCount * 3);

    for (var i = 0; i < maxParticleCount; i++) {
        var x = Math.random() * r - r / 2;
        var y = Math.random() * r - r / 2;
        var z = Math.random() * r - r / 2;
        particlePositions[i * 3] = x;
        particlePositions[i * 3 + 1] = y;
        particlePositions[i * 3 + 2] = z; // add it to the geometry

        particlesData.push({
            velocity: new THREE.Vector3(-1 + Math.random() * 2, -1 + Math.random() * 2, -1 + Math.random() * 2),
            numConnections: 0
        });
    }

    particles.setDrawRange(0, particleCount);
    particles.setAttribute('position', new THREE.BufferAttribute(particlePositions, 3).setUsage(THREE.DynamicDrawUsage)); // create the particle system

    pointCloud = new THREE.Points(particles, pMaterial);
    group.add(pointCloud);
    var geometry = new THREE.BufferGeometry();
    geometry.setAttribute('position', new THREE.BufferAttribute(positions, 3).setUsage(THREE.DynamicDrawUsage));
    geometry.setAttribute('color', new THREE.BufferAttribute(colors, 3).setUsage(THREE.DynamicDrawUsage));
    geometry.computeBoundingSphere();
    geometry.setDrawRange(0, 0);
    var material = new THREE.LineBasicMaterial({
        color: 0x808080,
        vertexColors: true,
        blending: THREE.SubtractiveBlending,
        transparent: true
    });
    linesMesh = new THREE.LineSegments(geometry, material);
    group.add(linesMesh); //

    renderer = new THREE.WebGLRenderer({
        antialias: true
    });
    renderer.setPixelRatio(window.devicePixelRatio);
    renderer.setSize(bannerwidth, bannerHeight);
    renderer.outputEncoding = THREE.sRGBEncoding;
    container.appendChild(renderer.domElement); //

    window.addEventListener('resize', onWindowResize);
}
function onWindowResize() {
    camera.aspect = bannerwidth / bannerHeight;
    camera.updateProjectionMatrix();
    renderer.setSize(bannerwidth, bannerHeight);
}
function animate() {
    var vertexpos = 0;
    var colorpos = 0;
    var numConnected = 0;

    for (var i = 0; i < particleCount; i++) {
        particlesData[i].numConnections = 0;
    }

    for (var _i = 0; _i < particleCount; _i++) {
        // get the particle
        var particleData = particlesData[_i];
        particlePositions[_i * 3] += particleData.velocity.x;
        particlePositions[_i * 3 + 1] += particleData.velocity.y;
        particlePositions[_i * 3 + 2] += particleData.velocity.z;
        if (particlePositions[_i * 3 + 1] < -rHalf || particlePositions[_i * 3 + 1] > rHalf) particleData.velocity.y = -particleData.velocity.y;
        if (particlePositions[_i * 3] < -rHalf || particlePositions[_i * 3] > rHalf) particleData.velocity.x = -particleData.velocity.x;
        if (particlePositions[_i * 3 + 2] < -rHalf || particlePositions[_i * 3 + 2] > rHalf) particleData.velocity.z = -particleData.velocity.z;
        if (effectController.limitConnections && particleData.numConnections >= effectController.maxConnections) continue; // Check collision

        for (var j = _i + 1; j < particleCount; j++) {
            var particleDataB = particlesData[j];
            if (effectController.limitConnections && particleDataB.numConnections >= effectController.maxConnections) continue;
            var dx = particlePositions[_i * 3] - particlePositions[j * 3];
            var dy = particlePositions[_i * 3 + 1] - particlePositions[j * 3 + 1];
            var dz = particlePositions[_i * 3 + 2] - particlePositions[j * 3 + 2];
            var dist = Math.sqrt(dx * dx + dy * dy + dz * dz);

            if (dist < effectController.minDistance) {
                particleData.numConnections++;
                particleDataB.numConnections++;
                var alpha = 1.0 - dist / effectController.minDistance;
                positions[vertexpos++] = particlePositions[_i * 3];
                positions[vertexpos++] = particlePositions[_i * 3 + 1];
                positions[vertexpos++] = particlePositions[_i * 3 + 2];
                positions[vertexpos++] = particlePositions[j * 3];
                positions[vertexpos++] = particlePositions[j * 3 + 1];
                positions[vertexpos++] = particlePositions[j * 3 + 2];
                colors[colorpos++] = alpha;
                colors[colorpos++] = alpha;
                colors[colorpos++] = alpha;
                colors[colorpos++] = alpha;
                colors[colorpos++] = alpha;
                colors[colorpos++] = alpha;
                numConnected++;
            }
        }
    }

    linesMesh.geometry.setDrawRange(0, numConnected * 2);
    linesMesh.geometry.attributes.position.needsUpdate = true;
    linesMesh.geometry.attributes.color.needsUpdate = true;
    pointCloud.geometry.attributes.position.needsUpdate = true;
    requestAnimationFrame(animate);
    render();
}
function render() {
    var time = Date.now() * 0.001; //group.rotation.y = time * 0.1;

    renderer.render(scene, camera);
}
