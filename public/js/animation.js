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
function myFunction() {
  var x = document.getElementById("my-top-nav");

  if (x.className === "top-bar__menu") {
    x.className += " responsive";
  } else {
    x.className = "top-bar__menu";
  }
}
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
/**
 *
 * Hoa
 * Created at 30-05-2021
 * show modal img
 *
 */

var modal = document.getElementById("myModalImg");
var modalImg = document.getElementById("img_modal");
modalImg.addEventListener('click', function () {
  modal.style.display = "block";
  modalImg.src = e.src;
});

function showModalImg(e) {} // Get the <span> element that closes the modal


var close = document.getElementsByClassName("close-img")[0]; // When the user clicks on <span> (x), close the modal

close.onclick = function () {
  modal.style.display = "none";
};
/******/ })()
;