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
var loading = document.getElementById('loading');
var skilltext = document.getElementsByClassName('skilltext');
var worktext = document.getElementsByClassName('worktext');
var moveleft = document.getElementById('moveleft');
var moveleft2 = document.getElementById('moveleft2');
var moveright = document.getElementById('moveright');
var movetop = document.getElementById('movetop');
var bannerText = document.getElementById('bannerText');
window.onload = function () {
  document.querySelector('.wrapper').style.display = "block";
  console.log(window.scrollY);
  if (700 - window.scrollY * 1.5 >= 0) {
    movetop.style.transform = "translate(-50%, ".concat(700 - window.scrollY * 1.5, "px)");
  } else {
    movetop.style.transform = "translate(-50%, 0)";
  }
  bannerText.style.opacity = (1000 - window.scrollY * 3.1) / 1000;
  setTimeout(function () {
    loading.style.opacity = 0;
    setTimeout(function () {
      loading.style.display = 'none';
    }, 300);
  }, 500);
};
var canvas = document.querySelector('#me');
var c = canvas.getContext('2d');
canvas.width = 340;
canvas.height = 340;
c.fillStyle = "#f0f0f0"; /* 這裡是背景顏色的十六進制碼 */
c.fillRect(0, 0, canvas.width, canvas.height);
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
      x: 8,
      y: 25
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
var accordionsList = document.getElementsByClassName('accordions-list');
window.addEventListener('scroll', function (e) {
  if (window.scrollY >= 900) {
    var _loop = function _loop(i) {
      setTimeout(function () {
        accordionsList[i].classList.add('fade-in');
      }, i * 100);
    };
    for (var i = 0; i < accordionsList.length; i++) {
      _loop(i);
    }
  }
  if (window.scrollY >= 1600) {
    document.querySelector('.paper-container').classList.add('fade-in');
  }
  if (window.scrollY >= 2600) {
    document.getElementById('award-title').classList.add('fade-in');
  }
  if (window.scrollY >= 2800) {
    document.querySelector('.awards-list').classList.add('fade-in');
    var _loop2 = function _loop2(_i) {
      setTimeout(function () {
        document.querySelector('.awards-list').querySelectorAll('.item')[_i].classList.add('fade-in');
      }, _i * 100);
    };
    for (var _i = 0; _i < document.querySelector('.awards-list').querySelectorAll('.item').length; _i++) {
      _loop2(_i);
    }
  }
  if (window.scrollY >= 3950) {
    document.querySelector('.work-disclaimer').classList.add('fade-in');
  }
  if (window.scrollY >= 4300) {
    var _loop3 = function _loop3(_i2) {
      setTimeout(function () {
        document.querySelector('.works-list').querySelectorAll('a')[_i2].classList.add('fade-in');
      }, _i2 * 100);
    };
    for (var _i2 = 0; _i2 < document.querySelector('.works-list').querySelectorAll('a').length; _i2++) {
      _loop3(_i2);
    }
  }
  if (window.scrollY > 6100) {
    var _loop4 = function _loop4(_i3) {
      setTimeout(function () {
        document.querySelector('.private-works-list').querySelectorAll('a')[_i3].classList.add('fade-in');
      }, _i3 * 100);
    };
    for (var _i3 = 0; _i3 < document.querySelector('.private-works-list').querySelectorAll('a').length; _i3++) {
      _loop4(_i3);
    }
  }
  if (window.scrollY >= 7500) {
    var _loop5 = function _loop5(_i4) {
      setTimeout(function () {
        document.querySelector('.skills').querySelectorAll('.skill')[_i4].classList.add('fade-in');
      }, _i4 * 10);
    };
    for (var _i4 = 0; _i4 < document.querySelector('.skills').querySelectorAll('.skill').length; _i4++) {
      _loop5(_i4);
    }
  }
  if (window.scrollY >= 8200) {
    document.getElementById('contacts2').querySelector('h2').classList.add('fade-in');
  }
  if (window.scrollY >= 8500) {
    formContainer.classList.add('fade-in');
  }
  moveleft.style.transform = "translateX(-".concat(window.scrollY * 1.5, "px)");
  moveleft2.style.transform = "translateX(-".concat(window.scrollY * 3, "px)");
  moveright.style.transform = "translateX(".concat(window.scrollY * 1.8, "px)");
  bannerText.style.opacity = (1000 - window.scrollY * 3.1) / 1000;
  if (700 - window.scrollY * 1.5 >= 0) {
    movetop.style.transform = "translate(-50%, ".concat(700 - window.scrollY * 1.5, "px)");
  }
  var value = window.scrollY / 4 * 0.8;
  var value2 = window.scrollY / 4 * 0.8;
  for (var _i5 = 0; _i5 < worktext.length; _i5++) {
    worktext[_i5].style.transform = "translateX(-".concat(value, "px)");
  }
  for (var _i6 = 0; _i6 < skilltext.length; _i6++) {
    skilltext[_i6].style.transform = "translateX(-".concat(value2, "px)");
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
var speed5 = document.getElementById('speed5');
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
    thenk.style.top = '50%';
    thenk.style.opacity = 1;
  }, 3900);
});
var header = document.querySelector('header');
window.addEventListener("wheel", handleWheelEvent);
// window.addEventListener('scroll', handleScrollEvent)

function handleWheelEvent(event) {
  if (event.deltaY > 0) {
    if (this.scrollY > 0) {
      header.style.top = "-78px";
    }
  } else if (event.deltaY < 0) {
    header.style.top = "0";
  }
}
/******/ })()
;