/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!********************************!*\
  !*** ./resources/js/canvas.js ***!
  \********************************/
function _typeof(obj) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (obj) { return typeof obj; } : function (obj) { return obj && "function" == typeof Symbol && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }, _typeof(obj); }
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }
function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, _toPropertyKey(descriptor.key), descriptor); } }
function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }
function _toPropertyKey(arg) { var key = _toPrimitive(arg, "string"); return _typeof(key) === "symbol" ? key : String(key); }
function _toPrimitive(input, hint) { if (_typeof(input) !== "object" || input === null) return input; var prim = input[Symbol.toPrimitive]; if (prim !== undefined) { var res = prim.call(input, hint || "default"); if (_typeof(res) !== "object") return res; throw new TypeError("@@toPrimitive must return a primitive value."); } return (hint === "string" ? String : Number)(input); }
var canvas = document.querySelector('#me');
var c = canvas.getContext('2d');
canvas.width = 340;
canvas.height = 340;
var createPlayer = function createPlayer(imgSrc) {
  var image = new Image();
  image.src = imgSrc;
  return image;
};
var Me = /*#__PURE__*/function () {
  function Me() {
    _classCallCheck(this, Me);
    this.width = 340;
    this.height = 340;
    this.position = {
      x: 0,
      y: 0
    };
    this.image = createPlayer('/images/me.png');
    this.frames = 0;
    this.idx = 0;
    this.currentCropWidth = 7076 / 17;
  }
  _createClass(Me, [{
    key: "draw",
    value: function draw() {
      c.drawImage(this.image, this.currentCropWidth * this.frames, 0, this.currentCropWidth, 417, this.position.x, this.position.y, this.width, this.height);
    }
  }, {
    key: "update",
    value: function update() {
      this.draw();
      this.idx++;
      if (this.idx % 18 === 0) {
        this.frames++;
      }
      if (this.frames > 17) {
        this.frames = 0;
      }
    }
  }]);
  return Me;
}();
var me = new Me();
function animate() {
  window.requestAnimationFrame(animate);
  me.update();
}
animate();
var skilltext = document.getElementsByClassName('skilltext');
var worktext = document.getElementsByClassName('worktext');
window.addEventListener('scroll', function (e) {
  var value = window.scrollY - 2000;
  var value2 = window.scrollY - 5000;
  console.log(value);
  for (var i = 0; i < worktext.length; i++) {
    worktext[i].style.transform = "translateX(-".concat(value * 0.8, "px)");
  }
  for (var _i = 0; _i < skilltext.length; _i++) {
    skilltext[_i].style.transform = "translateX(-".concat(value2 * 0.8, "px)");
  }
});
var send = document.getElementById('send');
var form = document.getElementById('form');
var letter = document.getElementById('letter');
var contentTop = document.getElementById('contentTop');
var letterBottom = document.getElementById('letterBottom');
var letterTop = document.getElementById('letterTop');
var formContainer = document.getElementById('formContainer');
var thenk = document.getElementById('thenk');
var speed1 = document.getElementById('speed1');
var speed2 = document.getElementById('speed2');
var speed3 = document.getElementById('speed3');
var speed4 = document.getElementById('speed4');
send.addEventListener('click', function () {
  form.style.transform = 'translateY(950px)';
  letter.style.paddingTop = '150px';
  form.style.transition = '2s';
  letter.style.transition = '2s';
  setTimeout(function () {
    contentTop.style.display = "flex";
    letterBottom.style.opacity = 0;
    letterBottom.style.transition = '1s';
    letterTop.style.opacity = 0;
    letterTop.style.transition = '1s';
  }, 2000);
  setTimeout(function () {
    formContainer.classList.add('send');
    thenk.style.top = '50%';
    thenk.style.opacity = 1;
  }, 3000);
  setTimeout(function () {
    speed1.style.display = 'block';
    speed2.style.display = 'block';
    speed3.style.display = 'block';
  }, 3700);
  setTimeout(function () {
    speed4.style.display = 'block';
  }, 3800);
  setTimeout(function () {
    speed5.style.display = 'block';
  }, 3900);
});
/******/ })()
;