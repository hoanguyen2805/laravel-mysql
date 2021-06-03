/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!***********************************!*\
  !*** ./resources/js/animation.js ***!
  \***********************************/
/**
 *
 * Hoa
 * Created at 17-05-2021
 * click menu responsive
 *
 */
$(document).ready(function () {
  $("#menu").click(function () {
    var x = document.getElementById("my-top-nav");

    if (x.className === "top-bar__menu") {
      x.className += " responsive";
    } else {
      x.className = "top-bar__menu";
    }
  });
});
/**
 *
 * Hoa
 * Created at 19-05-2021
 * Preview Image - update product
 *
 */

function PreviewImage(id) {
  var oFReader = new FileReader();
  oFReader.readAsDataURL(document.getElementById("image-".concat(id)).files[0]);

  oFReader.onload = function (oFREvent) {
    document.getElementById("upload-preview-".concat(id)).src = oFREvent.target.result;
  };
}

;
/******/ })()
;