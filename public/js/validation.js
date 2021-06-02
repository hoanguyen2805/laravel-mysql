/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/validation.js":
/*!************************************!*\
  !*** ./resources/js/validation.js ***!
  \************************************/
/***/ (() => {

/**
 *
 * Hoa
 * Created at 21-04-2021 08h:40
 * Validate for Form Sign Up
 *
 */
function validateFormSignUp() {
  var fullName = document.forms["my_form"]["full_name"].value.trim();
  var email = document.forms["my_form"]["email"].value.trim();
  var username = document.forms["my_form"]["username"].value.trim();
  var password = document.forms["my_form"]["password"].value.trim();
  var confirmPassword = document.forms["my_form"]["confirm_password"].value.trim();
  var birth = document.forms["my_form"]["birth_day"].value.trim();
  var avatar = document.forms["my_form"]["avatar"].value.trim();
  var regex = /^[A-Za-z0-9]+(?:[ _-][A-Za-z0-9]+)*$/;
  var check = true;
  var errName = document.getElementById("err-sign-up-name");
  var errEmail = document.getElementById("err-sign-up-email");
  var errUsername = document.getElementById("err-sign-up-username");
  var errBirthday = document.getElementById("err-sign-up-birth-day");
  var errAvatar = document.getElementById("err-sign-up-avatar");
  var errPassword = document.getElementById("err-sign-up-password");
  var errConfirmPassword = document.getElementById("err-sign-up-password-confirm"); // Full name

  if (fullName == "" || fullName == null) {
    errName.style.display = "block";
    errName.innerText = "Full Name is required!";
    document.forms["my_form"]["full_name"].style.border = "1px solid red";
    check = false;
  } else if (fullName.length < 4 || fullName.length > 255) {
    errName.style.display = "block";
    errName.innerText = "Please input the full name between 4 and 255 characters!";
    document.forms["my_form"]["full_name"].style.border = "1px solid red";
    check = false;
  } else {
    errName.style.display = "none";
    document.forms["my_form"]["full_name"].style.border = "0";
  } // Email


  if (email == "" || email == null) {
    errEmail.style.display = "block";
    errEmail.innerText = "Email is required!";
    document.forms["my_form"]["email"].style.border = "1px solid red";
    check = false;
  } else if (email.length < 5 || email.length > 32) {
    errEmail.style.display = "block";
    errEmail.innerText = "Please input the email between 5 and 32 characters!";
    document.forms["my_form"]["email"].style.border = "1px solid red";
    check = false;
  } else {
    errEmail.style.display = "none";
    document.forms["my_form"]["email"].style.border = "0";
  } // Username


  if (username == "" || username == null) {
    errUsername.style.display = "block";
    errUsername.innerText = "Username is required!";
    document.forms["my_form"]["username"].style.border = "1px solid red";
    check = false;
  } else if (!regex.test(username) && username != "") {
    errUsername.style.display = "block";
    errUsername.innerText = "Please do not enter following special characters in the username field";
    document.forms["my_form"]["username"].style.border = "1px solid red";
    check = false;
  } else if (username.length < 4 || username.length > 255) {
    errUsername.style.display = "block";
    errUsername.innerText = "Please input the username between 4 and 255 characters!";
    document.forms["my_form"]["username"].style.border = "1px solid red";
    check = false;
  } else {
    errUsername.style.display = "none";
    document.forms["my_form"]["username"].style.border = "0";
  } // Password


  if (password == "" || password == null) {
    errPassword.style.display = "block";
    errPassword.innerText = "Password is required!";
    document.forms["my_form"]["password"].style.border = "1px solid red";
    check = false;
  } else if (password.length < 4 || password.length > 20) {
    errPassword.style.display = "block";
    errPassword.innerText = "Please input the password between 4 and 20 characters!";
    document.forms["my_form"]["password"].style.border = "1px solid red";
    check = false;
  } else {
    errPassword.style.display = "none";
    document.forms["my_form"]["password"].style.border = "0";
  }

  if (confirmPassword == "" && confirmPassword == password) {
    errConfirmPassword.style.display = "block";
    errConfirmPassword.innerText = "Confirm password is required!";
    document.forms["my_form"]["confirm_password"].style.border = "1px solid red";
    check = false;
  } else if (password != confirmPassword) {
    errConfirmPassword.style.display = "block";
    errConfirmPassword.innerText = "password and confirm password must be match!";
    document.forms["my_form"]["confirm_password"].style.border = "1px solid red";
    check = false;
  } else {
    errConfirmPassword.style.display = "none";
    document.forms["my_form"]["confirm_password"].style.border = "0";
  } // Birthday


  if (birth == "" || birth == null) {
    errBirthday.style.display = "block";
    document.forms["my_form"]["birth_day"].style.border = "1px solid red";
    check = false;
  } else {
    errBirthday.style.display = "none";
    document.forms["my_form"]["birth_day"].style.border = "0";
  } // Avatar


  if (avatar == "" || avatar == null) {
    errAvatar.style.display = "block";
    document.forms["my_form"]["avatar"].style.border = "1px solid red";
    check = false;
  } else {
    errAvatar.style.display = "none";
    document.forms["my_form"]["avatar"].style.border = "0";
  }

  if (check == false) {
    return check;
  }
}
/**
 *
 * Hoa
 * Created at 21-04-2021 17h:05
 * Validate for Form Sign in
 *
 */


function validateFormLogin() {
  var username = document.forms["login_form"]["username"].value.trim();
  var password = document.forms["login_form"]["password"].value.trim();
  var check = true;

  if (username == "" || username == null) {
    document.getElementById("err-login-username").style.display = "block";
    document.forms["login_form"]["username"].style.borderColor = "red";
    check = false;
  } else {
    document.getElementById("err-login-username").style.display = "none";
    document.forms["login_form"]["username"].style.borderColor = "#eee";
  }

  if (password == "" || username == null) {
    document.getElementById("err-login-password").style.display = "block";
    document.forms["login_form"]["password"].style.borderColor = "red";
    check = false;
  } else {
    document.getElementById("err-login-password").style.display = "none";
    document.forms["login_form"]["password"].style.borderColor = "#eee";
  }

  if (check == false) {
    return false;
  }
}
/**
 *
 * Hoa
 * Created at 22-04-2021 14h:10
 * Validate for Form Forgot Password - send email
 *
 */


function validateFormForgotPassword() {
  var email = document.forms["forgot_form"]["email"].value.trim();
  var check = true;

  if (email == "" || email == null) {
    document.getElementById("err-email-forgot").style.display = "block";
    document.forms["forgot_form"]["email"].style.borderColor = "red";
    check = false;
  } else {
    document.getElementById("err-email-forgot").style.display = "none";
  }

  if (check == false) {
    return check;
  }
}
/**
 *
 * Hoa
 * Created at 23-04-2021 10h:05
 * Validate for Form Reset Password
 *
 */


function validateFormResetPassword() {
  var password = document.forms["reset_form"]["password"].value.trim();
  var confirmPassword = document.forms["reset_form"]["password_confirm"].value.trim();
  var errPasswordReset = document.getElementById("err-password-reset");
  var errConfirmPasswordReset = document.getElementById("err-password-reset-confirm");
  var check = true;

  if (password == "" || password == null) {
    errPasswordReset.style.display = "block";
    errPasswordReset.innerText = "Password is required";
    document.forms["reset_form"]["password"].style.borderColor = "red";
    check = false;
  } else if (password.length < 4 || password.length > 20) {
    errPasswordReset.style.display = "block";
    errPasswordReset.innerText = "Please input the password between 4 and 20 characters!";
    document.forms["reset_form"]["password"].style.borderColor = "red";
    check = false;
  } else {
    errPasswordReset.style.display = "none";
    document.forms["reset_form"]["password"].style.borderColor = "#eee";
  }

  if (confirmPassword == "" && confirmPassword == password) {
    errConfirmPasswordReset.style.display = "block";
    errConfirmPasswordReset.innerText = "Confirm password is required!";
    document.forms["reset_form"]["password_confirm"].style.borderColor = "red";
    check = false;
  } else if (password != confirmPassword) {
    errConfirmPasswordReset.style.display = "block";
    errConfirmPasswordReset.innerText = "password and confirm password must be match!";
    document.forms["reset_form"]["password_confirm"].style.borderColor = "red";
    check = false;
  } else {
    errConfirmPasswordReset.style.display = "none";
    document.forms["reset_form"]["password_confirm"].style.borderColor = "#eee";
  }

  if (check == false) {
    return check;
  }
}
/**
 *
 * Hoa
 * Created at 26-04-2021 10h00
 * validate for form add product
 *
 */


function validateFormAddProduct() {
  var name = document.forms["form_add_product"]["name"].value.trim();
  var price = document.forms["form_add_product"]["price"].value.trim();
  var img = document.forms["form_add_product"]["image"].value;
  var errName = document.getElementById("err-name-add-product");
  var errPrice = document.getElementById("err-price-add-product");
  var errImg = document.getElementById("err-image-add-product");
  var check = true;

  if (name == "" || name == null) {
    errName.style.display = "block";
    errName.innerText = "Name is required!";
    document.forms["form_add_product"]["name"].style.border = "1px solid red";
    check = false;
  } else if (name.length < 4 || name.length > 255) {
    errName.style.display = "block";
    errName.innerText = "Please input the Name between 4 and 255 characters!";
    document.forms["form_add_product"]["name"].style.border = "1px solid red";
    check = false;
  } else {
    errName.style.display = "none";
    document.forms["form_add_product"]["name"].style.border = "0";
  }

  if (isNaN(price) || price == "") {
    errPrice.style.display = "block";
    errPrice.innerText = "Price not valid!";
    document.forms["form_add_product"]["price"].style.border = "1px solid red";
    check = false;
  } else if (price > 2147483647 || price < 0) {
    errPrice.style.display = "block";
    errPrice.innerText = "Please input the Price between >= 0 and <= 2147483647";
    document.forms["form_add_product"]["price"].style.border = "1px solid red";
    check = false;
  } else {
    errPrice.style.display = "none";
    document.forms["form_add_product"]["price"].style.border = "0";
  }

  if (img == "" || img == null) {
    errImg.style.display = "block";
    document.forms["form_add_product"]["image"].style.border = "1px solid red";
    check = false;
  } else {
    errImg.style.display = "none";
    document.forms["form_add_product"]["image"].style.border = "0";
  }

  if (check == false) {
    return check;
  }
}
/**
 *
 * Hoa
 * Created at 27-04-2021 15h00
 * validate for form update product
 *
 */


function validateFormUpdateProduct(id) {
  var name = document.forms["form_update_product_" + id]["name"].value.trim();
  var price = document.forms["form_update_product_" + id]["price"].value.trim();
  var errName = document.getElementById("err-name-update-product-" + id);
  var errPrice = document.getElementById("err-price-update-product-" + id);
  var check = true;

  if (name == "" || name == null) {
    errName.style.display = "block";
    errName.innerText = "Name is required!";
    document.forms["form_update_product_" + id]["name"].style.border = "1px solid red";
    check = false;
  } else if (name.length < 4 || name.length > 255) {
    errName.style.display = "block";
    errName.innerText = "Please input the Name between 4 and 255 characters!";
    document.forms["form_update_product_" + id]["name"].style.border = "1px solid red";
    check = false;
  } else {
    errName.style.display = "none";
    document.forms["form_update_product_" + id]["name"].style.border = "0";
  }

  if (isNaN(price) || price == "") {
    errPrice.style.display = "block";
    errPrice.innerText = "Price not valid!";
    document.forms["form_update_product_" + id]["price"].style.border = "1px solid red";
    check = false;
  } else if (price > 2147483647 || price < 0) {
    errPrice.style.display = "block";
    errPrice.innerText = "Please input the Price between >= 0 and <= 2147483647";
    document.forms["form_update_product_" + id]["price"].style.border = "1px solid red";
    check = false;
  } else {
    errPrice.style.display = "none";
    document.forms["form_update_product_" + id]["price"].style.border = "0";
  }

  if (check == false) {
    return check;
  }
}

/***/ }),

/***/ "./resources/css/reset.css":
/*!*********************************!*\
  !*** ./resources/css/reset.css ***!
  \*********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./resources/css/responsive.css":
/*!**************************************!*\
  !*** ./resources/css/responsive.css ***!
  \**************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./resources/css/style.css":
/*!*********************************!*\
  !*** ./resources/css/style.css ***!
  \*********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					result = fn();
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/js/validation": 0,
/******/ 			"css/style": 0,
/******/ 			"css/responsive": 0,
/******/ 			"css/reset": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			for(moduleId in moreModules) {
/******/ 				if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 					__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 				}
/******/ 			}
/******/ 			if(runtime) var result = runtime(__webpack_require__);
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkIds[i]] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunk"] = self["webpackChunk"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["css/style","css/responsive","css/reset"], () => (__webpack_require__("./resources/js/validation.js")))
/******/ 	__webpack_require__.O(undefined, ["css/style","css/responsive","css/reset"], () => (__webpack_require__("./resources/css/reset.css")))
/******/ 	__webpack_require__.O(undefined, ["css/style","css/responsive","css/reset"], () => (__webpack_require__("./resources/css/responsive.css")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["css/style","css/responsive","css/reset"], () => (__webpack_require__("./resources/css/style.css")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;