var _extends = Object.assign || function (target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i]; for (var key in source) { if (Object.prototype.hasOwnProperty.call(source, key)) { target[key] = source[key]; } } } return target; };

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

var _class2, _temp, _initialiseProps;

function _toConsumableArray(arr) { if (Array.isArray(arr)) { for (var i = 0, arr2 = Array(arr.length); i < arr.length; i++) { arr2[i] = arr[i]; } return arr2; } else { return Array.from(arr); } }

function _possibleConstructorReturn(self, call) { if (!self) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return call && (typeof call === "object" || typeof call === "function") ? call : self; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function, not " + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

// Ported from Stefan Gustavson's java implementation
// http://staffwww.itn.liu.se/~stegu/simplexnoise/simplexnoise.pdf
// Read Stefan's excellent paper for details on how this code works.
//
// Sean McCullough banksean@gmail.com

/**
 * You can pass in a random number generator object if you like.
 * It is assumed to have a random() method.
 */
var ClassicalNoise = function ClassicalNoise(r) {
    // Classic Perlin noise in 3D, for comparison 
    if (r == undefined) r = Math;
    this.grad3 = [[1, 1, 0], [-1, 1, 0], [1, -1, 0], [-1, -1, 0], [1, 0, 1], [-1, 0, 1], [1, 0, -1], [-1, 0, -1], [0, 1, 1], [0, -1, 1], [0, 1, -1], [0, -1, -1]];
    this.p = [];
    for (var i = 0; i < 256; i++) {
        this.p[i] = Math.floor(r.random() * 256);
    }
    // To remove the need for index wrapping, double the permutation table length 
    this.perm = [];
    for (var i = 0; i < 512; i++) {
        this.perm[i] = this.p[i & 255];
    }
};

ClassicalNoise.prototype.dot = function (g, x, y, z) {
    return g[0] * x + g[1] * y + g[2] * z;
};

ClassicalNoise.prototype.mix = function (a, b, t) {
    return (1.0 - t) * a + t * b;
};

ClassicalNoise.prototype.fade = function (t) {
    return t * t * t * (t * (t * 6.0 - 15.0) + 10.0);
};

// Classic Perlin noise, 3D version 
ClassicalNoise.prototype.noise = function (x, y, z) {
    // Find unit grid cell containing point 
    var X = Math.floor(x);
    var Y = Math.floor(y);
    var Z = Math.floor(z);

    // Get relative xyz coordinates of point within that cell 
    x = x - X;
    y = y - Y;
    z = z - Z;

    // Wrap the integer cells at 255 (smaller integer period can be introduced here) 
    X = X & 255;
    Y = Y & 255;
    Z = Z & 255;

    // Calculate a set of eight hashed gradient indices 
    var gi000 = this.perm[X + this.perm[Y + this.perm[Z]]] % 12;
    var gi001 = this.perm[X + this.perm[Y + this.perm[Z + 1]]] % 12;
    var gi010 = this.perm[X + this.perm[Y + 1 + this.perm[Z]]] % 12;
    var gi011 = this.perm[X + this.perm[Y + 1 + this.perm[Z + 1]]] % 12;
    var gi100 = this.perm[X + 1 + this.perm[Y + this.perm[Z]]] % 12;
    var gi101 = this.perm[X + 1 + this.perm[Y + this.perm[Z + 1]]] % 12;
    var gi110 = this.perm[X + 1 + this.perm[Y + 1 + this.perm[Z]]] % 12;
    var gi111 = this.perm[X + 1 + this.perm[Y + 1 + this.perm[Z + 1]]] % 12;

    // The gradients of each corner are now: 
    // g000 = grad3[gi000]; 
    // g001 = grad3[gi001]; 
    // g010 = grad3[gi010]; 
    // g011 = grad3[gi011]; 
    // g100 = grad3[gi100]; 
    // g101 = grad3[gi101]; 
    // g110 = grad3[gi110]; 
    // g111 = grad3[gi111]; 
    // Calculate noise contributions from each of the eight corners 
    var n000 = this.dot(this.grad3[gi000], x, y, z);
    var n100 = this.dot(this.grad3[gi100], x - 1, y, z);
    var n010 = this.dot(this.grad3[gi010], x, y - 1, z);
    var n110 = this.dot(this.grad3[gi110], x - 1, y - 1, z);
    var n001 = this.dot(this.grad3[gi001], x, y, z - 1);
    var n101 = this.dot(this.grad3[gi101], x - 1, y, z - 1);
    var n011 = this.dot(this.grad3[gi011], x, y - 1, z - 1);
    var n111 = this.dot(this.grad3[gi111], x - 1, y - 1, z - 1);
    // Compute the fade curve value for each of x, y, z 
    var u = this.fade(x);
    var v = this.fade(y);
    var w = this.fade(z);
    // Interpolate along x the contributions from each of the corners 
    var nx00 = this.mix(n000, n100, u);
    var nx01 = this.mix(n001, n101, u);
    var nx10 = this.mix(n010, n110, u);
    var nx11 = this.mix(n011, n111, u);
    // Interpolate the four results along y 
    var nxy0 = this.mix(nx00, nx10, v);
    var nxy1 = this.mix(nx01, nx11, v);
    // Interpolate the two last results along z 
    var nxyz = this.mix(nxy0, nxy1, w);

    return nxyz;
};

;
//*‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡/
// Utils
//*‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡*/


function cycle(value, total) {
    return (value % total + total) % total;
}

function lerp(start, end, amt) {
    return (1 - amt) * start + amt * end;
}

function scaleBetween(unscaledNum, minAllowed, maxAllowed, min, max) {
    return (maxAllowed - minAllowed) * (unscaledNum - min) / (max - min) + minAllowed;
}

function movePointAtAngle(point, angle, distance) {
    return {
        x: point.x + Math.cos(angle) * distance,
        y: point.y + Math.sin(angle) * distance
    };
}

//*‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡/
// Element
//*‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡*/

var Element = function Element() {
    var _this = this;

    _classCallCheck(this, Element);

    this.dpr = 1;

    this.toValue = function (value) {
        return value * _this.dpr;
    };

    this.draw = function () {};

    this.update = function () {};
};

//*‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡/
// Wave
//*‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡*/

var Wave = (_temp = _class2 = function (_Element) {
    _inherits(Wave, _Element);

    function Wave(pointAmount, p1, p2) {
        _classCallCheck(this, Wave);

        var _this2 = _possibleConstructorReturn(this, (Wave.__proto__ || Object.getPrototypeOf(Wave)).call(this));

        _initialiseProps.call(_this2);

        _this2.p1 = p1;
        _this2.p2 = p2;

        var dx = p2.x - p1.x;
        var dy = p2.y - p1.y;

        var vx = dx / (pointAmount - 1);
        var vy = dy / (pointAmount - 1);

        _this2.vertices = new Array(pointAmount).fill(null).map(function (p, i) {
            return {
                x: p1.x + vx * i,
                y: p1.y + vy * i
            };
        });
        return _this2;
    }

    return Wave;
}(Element), _initialiseProps = function _initialiseProps() {
    var _this3 = this;

    this.draw = function (_ref) {
        var ctx = _ref.ctx;

        ctx.lineCap = 'round';
        ctx.lineWidth = _this3.toValue(2);
        ctx.strokeStyle = '#ccc';

        ctx.beginPath();
        ctx.moveTo(_this3.vertices[0].x, _this3.vertices[0].y);

        for (var k = 0; k < _this3.vertices.length - 1; k++) {
            var p1 = _this3.vertices[k];
            var p2 = _this3.vertices[k + 1];

            var cpx = (p1.x + p2.x) / 2;
            var cpy = (p1.y + p2.y) / 2;

            // ctx.fillStyle = 'white';
            // ctx.fillRect(p1.x, p1.y, 10, 10);

            if (k === _this3.vertices.length - 2) {
                ctx.quadraticCurveTo(p1.x, p1.y, p2.x, p2.y);
            } else {
                ctx.quadraticCurveTo(p1.x, p1.y, cpx, cpy);
            }
        }

        ctx.stroke();
    };

    this.update = function (_ref2) {
        var tick = _ref2.tick;

        var l = _this3.vertices.length;
        var r = 1 / l;
        _this3.vertices = _this3.vertices.map(function (p, i) {
            return {
                x: p.x,
                y: p.y + _this3.toValue(Math.sin(tick / 10 + i))
            };
        });
    };
}, _temp);

//*‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡/
// Gate
//*‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡*/

var Gate = function (_Element2) {
    _inherits(Gate, _Element2);

    function Gate(_ref3) {
        var radius = _ref3.radius,
            amount = _ref3.amount;

        _classCallCheck(this, Gate);

        var _this4 = _possibleConstructorReturn(this, (Gate.__proto__ || Object.getPrototypeOf(Gate)).call(this));

        _this4.reset = function () {
            _this4.setValues();
            _this4.setupWaves();
        };

        _this4.draw = function (canvas) {
            _this4.drawBg(canvas);

            canvas.ctx.save();
            canvas.ctx.beginPath();
            canvas.ctx.arc(_this4.hw, _this4.hh, _this4.radius, 0, 2 * Math.PI);
            canvas.ctx.clip();

            _this4.waves.map(function (wave) {
                wave.draw(canvas);
                wave.update(canvas);
            });

            canvas.ctx.restore();
        };

        _this4.amount = amount;
        _this4.radius = _this4.toValue(radius);
        _this4.diameter = _this4.radius * 2;

        _this4.setValues();
        _this4.setupWaves();
        return _this4;
    }

    _createClass(Gate, [{
        key: 'setValues',
        value: function setValues() {
            this.w = this.toValue(window.innerWidth);
            this.h = this.toValue(window.innerHeight);
            this.hw = this.w / 2;
            this.hh = this.h / 2;
        }
    }, {
        key: 'setupWaves',
        value: function setupWaves() {
            // Gate dims
            this.px = this.hw - this.radius;
            this.py = this.hh - this.radius;
            this.pw = this.diameter;
            this.ph = this.diameter;
            this.waves = [];

            var extend = 2;

            for (var i = -extend; i < this.amount + extend; i++) {
                var dy = this.ph / this.amount * i;
                var p1 = {
                    x: this.px,
                    y: this.py + dy
                };
                var p2 = {
                    x: this.px + this.pw,
                    y: this.py + dy
                };
                this.waves.push(new Wave(10, p1, p2));
            }
        }
    }, {
        key: 'drawBg',
        value: function drawBg(canvas) {
            canvas.ctx.beginPath();

            var gradient = canvas.ctx.createLinearGradient(this.px, this.py, this.px, this.py + this.diameter);
            gradient.addColorStop(0, '#000');
            gradient.addColorStop(1, '#000');

            var wobble = this.toValue(Math.sin(canvas.tick / 20) * 1);
            var offset = this.toValue(1);

            canvas.ctx.arc(this.hw, this.hh, this.radius + offset + wobble, 0, 2 * Math.PI);
            canvas.ctx.fillStyle = gradient;
            canvas.ctx.fill();
        }
    }]);

    return Gate;
}(Element);

//*‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡/
// Ring
//*‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡*/

var Ring = function (_Element3) {
    _inherits(Ring, _Element3);

    function Ring(_ref4) {
        var radius = _ref4.radius,
            pointAmount = _ref4.pointAmount,
            speed = _ref4.speed,
            decay = _ref4.decay,
            acceleration = _ref4.acceleration,
            wobble = _ref4.wobble,
            warp = _ref4.warp;

        _classCallCheck(this, Ring);

        var _this5 = _possibleConstructorReturn(this, (Ring.__proto__ || Object.getPrototypeOf(Ring)).call(this));

        _this5.draw = function (_ref5) {
            var ctx = _ref5.ctx;
            var p = _this5.points,
                v = _this5.toValue;


            ctx.lineWidth = _this5.lineWidth;
            ctx.strokeStyle = _this5.stroke;
            ctx.beginPath();
            ctx.moveTo((p[cycle(-1, p.length)].x + p[0].x) / 2, (p[cycle(-1, p.length)].y + p[0].y) / 2);

            for (var i = 0; i < p.length; i++) {
                ctx.quadraticCurveTo(p[i].x, p[i].y, (p[i].x + p[cycle(i + 1, p.length)].x) / 2, (p[i].y + p[cycle(i + 1, p.length)].y) / 2);
            }

            ctx.closePath();

            ctx.globalCompositeOperation = 'normal';
            ctx.stroke();
            ctx.globalCompositeOperation = 'normal';
        };

        _this5.update = function (_ref6) {
            var tick = _ref6.tick;

            _this5.speed *= _this5.acceleration;

            _this5.points = _this5.points.map(function (p, i) {
                var wobbleAmount = Math.sin(tick / 20 + i * _this5.radOff) * _this5.wobble;
                var warpAmount = Math.cos(tick / 200) * _this5.warp;

                var _movePointAtAngle = movePointAtAngle(p, p.radian, _this5.speed),
                    x = _movePointAtAngle.x,
                    y = _movePointAtAngle.y;

                return _extends({}, p, {
                    x: x + wobbleAmount - warpAmount,
                    y: y - wobbleAmount + warpAmount
                });
            });

            if (!_this5.dead) {
                --_this5.decay;
                if (_this5.decay === 0) {
                    _this5.dead = true;
                }
            }
        };

        _this5.points = [];

        _this5.radius = radius * circleRadiusMin;

        _this5.w = _this5.toValue(window.innerWidth);
        _this5.h = _this5.toValue(window.innerHeight);
        _this5.hw = _this5.w / 2;
        _this5.hh = _this5.h / 2;
        _this5.speed = _this5.toValue(speed / 2);
        _this5.decay = decay;
        _this5.acceleration = acceleration;
        _this5.lineWidth = _this5.toValue(0.5 + onClickLineThickness);
        _this5.warp = _this5.toValue(warp);
        _this5.wobble = _this5.toValue((wobble + onClickWobble) / 5);
        _this5.radOff = 1 * Math.PI / pointAmount;

        _this5.opacityStroke = 1;
        _this5.opacityFill = 0;
        _this5.opacityDecay = 0 / _this5.decay;

        _this5.center = {
            x: spawnX,
            y: spawnY
        };

        for (var i = 0; i < pointAmount; i++) {
            var radian = Math.PI * 2 / pointAmount * i;
            var x = _this5.center.x + _this5.radius * Math.cos(radian);
            var y = _this5.center.y + _this5.radius * Math.sin(radian);

            _this5.points.push({
                x: x,
                y: y,
                radian: radian
            });
        }
        return _this5;
    }

    _createClass(Ring, [{
        key: 'stroke',
        get: function get() {
            this.opacityStroke -= this.opacityDecay;
            //  const r = Math.floor(170 + this.decay);
            var r = Math.floor(230 + Math.sin(this.decay / 10) * 10);
            var g = Math.floor(70 + Math.sin(this.decay / 5) * 40);
            var b = Math.floor(30 + Math.sin(this.decay / 5) * 40);

            // return `rgba(${r}, ${g}, ${b}, ${this.opacityStroke})`;
            return 'rgba(' + r + ',0,0,' + this.opacityStroke + ')';
            //
            // return `rgba(0,0,0,1)`;
        }
    }]);

    return Ring;
}(Element);

//*‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡/
// Portal
//*‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡*/

var Portal = function () {
    function Portal(time, ringConfig) {
        var _this6 = this;

        _classCallCheck(this, Portal);

        this.reset = function () {
            _this6.rings = [];
        };

        this.draw = function () {};

        this.update = function (_ref7) {
            var ctx = _ref7.ctx,
                tick = _ref7.tick;

            if (tick % _this6.time === 0) {
                _this6.addRing();
            }
            // filter dead while drawing and updating
            _this6.rings = _this6.rings.filter(function (ring) {
                ring.draw({ ctx: ctx, tick: tick });
                ring.update({ ctx: ctx, tick: tick });
                return ring.dead !== true;
            });
        };

        this.time = time;
        this.ringConfig = ringConfig;
        this.rings = [new Ring(this.ringConfig)];
    }

    _createClass(Portal, [{
        key: 'addRing',
        value: function addRing() {
            this.rings.push(new Ring(this.ringConfig));
        }
    }]);

    return Portal;
}();

//*‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡/
// Background
//*‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡*/

var Background = function (_Element4) {
    _inherits(Background, _Element4);

    function Background() {
        var _ref8;

        var _temp2, _this7, _ret;

        _classCallCheck(this, Background);

        for (var _len = arguments.length, args = Array(_len), _key = 0; _key < _len; _key++) {
            args[_key] = arguments[_key];
        }

        return _ret = (_temp2 = (_this7 = _possibleConstructorReturn(this, (_ref8 = Background.__proto__ || Object.getPrototypeOf(Background)).call.apply(_ref8, [this].concat(args))), _this7), _this7.draw = function (_ref9) {
            var ctx = _ref9.ctx,
                canvas = _ref9.canvas;


            var w = canvas.width;
            var h = canvas.height;

            // const gradient1 = ctx.createLinearGradient(0, 0, 0, h);
            // gradient1.addColorStop(0, '#aa5eed');
            // gradient1.addColorStop(1, '#b7f7ed');
            // ctx.fillStyle = gradient1;
            // ctx.fillRect(0, 0, w, h);

            var gradient2 = ctx.createRadialGradient(w / 2, h / 2, 0, w / 2, h / 2, w);
            gradient2.addColorStop(1, '#4747fd');
            gradient2.addColorStop(0, '#4747fd');
            ctx.fillStyle = BackgroundColor;
            ctx.fillRect(0, 0, w, h);
            // ctx.globalCompositeOperation = 'source-over';
        }, _temp2), _possibleConstructorReturn(_this7, _ret);
    }

    return Background;
}(Element);
//*‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡/
// Canvas
//*‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡*/

var Canvas = function () {
    function Canvas() {
        var _this8 = this;

        var elements = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : [];

        _classCallCheck(this, Canvas);

        this.setCanvasSize = function () {
            _this8.canvas.width = window.innerWidth * _this8.dpr;
            _this8.canvas.height = window.innerHeight * _this8.dpr;
            _this8.canvas.style.width = window.innerWidth + 'px';
            _this8.canvas.style.height = window.innerHeight + 'px';
        };

        this.render = function () {
            _this8.draw();
            _this8.update();
            ++_this8.tick;
            window.requestAnimationFrame(_this8.render);
        };

        // setup a canvas
        this.canvas = document.getElementById('canvas');
        this.dpr = 1;
        this.ctx = this.canvas.getContext('2d');
        this.ctx.scale(this.dpr, this.dpr);
        // stores
        this.elements = elements;
        this.tick = 0;
        this.mouse = { x: 0, y: 0 };
        // run
        this.setCanvasSize();
        this.setupListeners();
    }

    _createClass(Canvas, [{
        key: 'setupListeners',
        value: function setupListeners() {
            window.addEventListener('resize', this.setCanvasSize);
            window.addEventListener('mousemove', this.setPointer);
        }

        // setPointer = ({ clientX, clientY }) => {
        //    const x = clientX;
        //    const y = clientY;
        //   this.mouse = { x, y };
        // }

    }, {
        key: 'addElement',
        value: function addElement(newElement) {
            this.elements = [].concat(_toConsumableArray(this.elements), [newElement]);
            return this.elements.length - 1;
        }
    }, {
        key: 'removeElement',
        value: function removeElement(deleteIndex) {
            this.elements = this.elements.filter(function (el, i) {
                return i !== deleteIndex;
            });
            return this.elements;
        }
    }, {
        key: 'update',
        value: function update() {
            var _this9 = this;

            this.elements.map(function (_ref10) {
                var update = _ref10.update;
                return update(_this9);
            });
        }
    }, {
        key: 'draw',
        value: function draw() {
            var _this10 = this;

            this.elements.map(function (_ref11) {
                var draw = _ref11.draw;
                return draw(_this10);
            });
        }
    }]);

    return Canvas;
}();

var canvas = new Canvas([new Background(), new Portal(1, {
    radius: 1,
    pointAmount: 6,
    speed: 0.25,
    decay: 500,
    acceleration: 1.02,
    wobble: 0.5,
    warp: 0.5
})]);

canvas.render();

//*‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡/
// Mouse and Touch Handlers
//*‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡*/

var TitleCanvas = document.getElementById("canvas");
var dragX = 1;
var dragY = 1;
var midX = window.innerWidth / 2;
var midY = window.innerHeight / 2;
var spawnX = window.innerWidth / 2;
var spawnY = window.innerHeight / 2;
var movedelay = 0.03;

window.onmousemove = function logMouseMove(e) {
    e = event || window.event;
    mouseX = e.pageX;
    mouseY = e.pageY;
};

// Set up touch events for mobile, etc
TitleCanvas.addEventListener("touchstart", function (e) {
    // Do something on touchstart
    circleRadiusMax = 500;
    onClickWobbleMax = 25;
    onClickLineThicknessMax = 0.5;
    onClickDecay = 0.002;
    movedelay = 1;
}, false);

TitleCanvas.addEventListener("touchend", function (e) {
    // Do something on touchend
    circleRadiusMax = 0;
    onClickWobbleMax = 0;
    onClickLineThicknessMax = 0;
    onClickDecay = 0.02;
    movedelay = 0.03;
}, false);

TitleCanvas.addEventListener("touchmove", function (e) {
    // Do something on touchmove
    mouseX = e.changedTouches[0].pageX;
    mouseY = e.changedTouches[0].pageY;
}, false);

TitleCanvas.addEventListener("mouseenter", function () {
    this.iid = setInterval(move, 25);
});
TitleCanvas.addEventListener("mouseleave", function () {
    this.iid && clearInterval(this.iid);
});

function move() {
    spawnX = lerp(spawnX, mouseX, movedelay);
    spawnY = lerp(spawnY, mouseY, movedelay);
};

//*‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡/
// Interaction on Click
//*‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡*/

var MouseDownInterval = setInterval(OnMouseDown, 10);

var circleRadiusMin = 0;
var circleRadiusMax = 0;

var onClickWobble = 0;
var onClickWobbleMin = 0;
var onClickWobbleMax = 0;

var onClickLineThickness = 0;
var onClickLineThicknessMax = 0;

var BackgroundColor = "rgb(0,0,255)";

var onClickDecay = 0.002;

TitleCanvas.addEventListener("mousedown", function () {
    this.iid = setInterval(OnMouseDown, 25);
});
TitleCanvas.addEventListener("mouseup", function () {
    this.iid && clearInterval(this.iid);
});

function OnMouseDown() {
    circleRadiusMin = lerp(circleRadiusMin, circleRadiusMax, onClickDecay);
    onClickWobble = lerp(onClickWobble, onClickWobbleMax, onClickDecay);
    onClickLineThickness = lerp(onClickLineThickness, onClickLineThicknessMax, onClickDecay);
};

window.onmousedown = function MouseDown(e) {
    circleRadiusMax = 500;
    onClickWobbleMax = 25;
    onClickLineThicknessMax = 0.5;
    onClickDecay = 0.002;
};

window.onmouseup = function MouseUp(e) {
    circleRadiusMax = 0;
    onClickWobbleMax = 0;

    onClickLineThicknessMax = 0;
    onClickDecay = 0.02;
};

//*‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡/
// Interaction on Mic
//*‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡*/

var isMobile = false; //initiate as false

// device detection

if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0, 4))) {
    isMobile = true;
};

if (isMobile = false) {

    var Recording = function Recording(cb) {
        var recorder = null;
        var recording = true;
        var audioInput = null;
        var volume = null;
        var audioContext = null;
        var callback = cb;
        navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia;
        if (navigator.getUserMedia) {
            navigator.getUserMedia({ audio: true }, function (e) {
                //success
                var AudioContext = window.AudioContext || window.webkitAudioContext;
                audioContext = new AudioContext();
                volume = audioContext.createGain(); // creates a gain node
                audioInput = audioContext.createMediaStreamSource(e); // creates an audio node from the mic stream
                audioInput.connect(volume); // connect the stream to the gain node
                recorder = audioContext.createScriptProcessor(2048, 1, 1);
                recorder.onaudioprocess = function (e) {
                    if (!recording) return;
                    var left = e.inputBuffer.getChannelData(0);
                    //var right = e.inputBuffer.getChannelData(1);
                    callback(new Float32Array(left));
                };
                volume.connect(recorder); // connect the recorder
                recorder.connect(audioContext.destination);
            }, function (e) {
                //failure
                alert("Error capturing audio.");
            });
        } else {
            alert("getUserMedia not supported in this browser.");
        }
    };
};
var lastClap = new Date().getTime();
function detectClap(data) {
    var t = new Date().getTime();
    if (t - lastClap < 200) return false; // TWEAK HERE
    var zeroCrossings = 0,
        highAmp = 0;
    for (var i = 1; i < data.length; i++) {
        if (Math.abs(data[i]) > 0.25) highAmp++; // TWEAK HERE
        if (data[i] > 0 && data[i - 1] < 0 || data[i] < 0 && data[i - 1] > 0) zeroCrossings++;
    }
    if (highAmp > 30 && zeroCrossings > 30) {
        // TWEAK HERE
        //console.log(highAmp+' / '+zeroCrossings);
        lastClap = t;
        return true;
    }
    return false;
}
var rec = new Recording(function (data) {
    if (detectClap(data)) {
        console.log("clap!");
        BackgroundColor = "rgb(" + Math.random() * 255 + "," + Math.random() * 255 + "," + Math.random() * 255 + ")";
        onClickWobble = lerp(onClickWobble, 5, 0.05);
    }
});