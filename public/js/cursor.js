/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!********************************!*\
  !*** ./resources/js/cursor.js ***!
  \********************************/
var cursorRounded = document.querySelector('#custom-cursor-rounded');
var cursorPointed = document.querySelector('#custom-cursor-pointed');
var cursorNoted = document.querySelector('#custom-cursor-noted');
function isMobileDevice() {
  var mobileDevice = ['Android', 'webOS', 'iPhone', 'iPad', 'iPod', 'BlackBerry', 'Windows Phone'];
  var isMobileDevice = mobileDevice.some(function (e) {
    return navigator.userAgent.match(e);
  });
  return isMobileDevice;
}
if (isMobileDevice()) {
  cursorRounded.style.display = "none";
}
var moveCursor = function moveCursor(e) {
  var mouseY = e.clientY;
  var mouseX = e.clientX;
  cursorRounded.style.transform = "translate3d(".concat(mouseX, "px, ").concat(mouseY, "px, 0)");
  cursorPointed.style.transform = "translate3d(".concat(mouseX, "px, ").concat(mouseY, "px, 0)");
  cursorNoted.style.transform = "translate3d(".concat(mouseX, "px, ").concat(mouseY, "px, 0)");
};
var moveNot = function moveNot() {
  cursorRounded.style.display = "none";
  cursorPointed.style.display = "none";
  cursorNoted.style.display = "block";
};
var movePoint = function movePoint() {
  cursorNoted.style.display = "none";
  cursorRounded.style.display = "none";
  cursorPointed.style.display = "block";
};
var moveDefault = function moveDefault() {
  cursorNoted.style.display = "none";
  cursorRounded.style.display = "block";
  cursorPointed.style.display = "none";
};
var alink = document.querySelectorAll('a');
var btn = document.querySelectorAll('button');
var cursorDefault = document.querySelectorAll('.cursor-pointed');
var input = document.querySelectorAll('input');
var textarea = document.querySelectorAll('textarea');
var cursorNot = document.querySelectorAll('.cursor-not');
for (var i = 0; i < alink.length; i++) {
  alink[i].addEventListener('mouseover', movePoint);
  alink[i].addEventListener('mouseout', moveDefault);
}
for (var _i = 0; _i < cursorDefault.length; _i++) {
  cursorDefault[_i].addEventListener('mouseover', movePoint);
  cursorDefault[_i].addEventListener('mouseout', moveDefault);
}
for (var _i2 = 0; _i2 < input.length; _i2++) {
  input[_i2].addEventListener('mouseover', movePoint);
  input[_i2].addEventListener('mouseout', moveDefault);
}
for (var _i3 = 0; _i3 < textarea.length; _i3++) {
  textarea[_i3].addEventListener('mouseover', movePoint);
  textarea[_i3].addEventListener('mouseout', moveDefault);
}
for (var _i4 = 0; _i4 < btn.length; _i4++) {
  btn[_i4].addEventListener('mouseover', movePoint);
  btn[_i4].addEventListener('mouseout', moveDefault);
}
for (var _i5 = 0; _i5 < cursorNot.length; _i5++) {
  cursorNot[_i5].addEventListener('mouseover', moveNot);
  cursorNot[_i5].addEventListener('mouseout', moveDefault);
}
window.addEventListener('mousemove', moveCursor);
/******/ })()
;