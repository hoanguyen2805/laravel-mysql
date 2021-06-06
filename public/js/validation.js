/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/validation.js":
/*!************************************!*\
  !*** ./resources/js/validation.js ***!
  \************************************/
/***/ (() => {

$().ready(function () {
  /**
   *
   * Hoa
   * Created at 06-06-2021 19h00
   * Validate login form
   *
   */
  $("#login-form").validate({
    onfocusout: false,
    onkeyup: false,
    onclick: false,
    rules: {
      "username": {
        required: true
      },
      "password": {
        required: true
      }
    },
    messages: {
      "username": {
        required: "The username field is required."
      },
      "password": {
        required: "The password field is required."
      }
    },
    highlight: function highlight(element) {
      $(element).addClass('input--error');
    },
    unhighlight: function unhighlight(element) {
      $(element).removeClass('input--error');
    }
  });
  /**
   *
   * Hoa
   * Created at 06-06-2021 19h30
   * validate send email form (forgot password)
   *
   */

  $("#send-email-form").validate({
    onfocusout: false,
    onkeyup: false,
    onclick: false,
    rules: {
      "email": {
        required: true
      }
    },
    messages: {
      "email": {
        required: "The email field is required."
      }
    },
    highlight: function highlight(element) {
      $(element).addClass('input--error');
    },
    unhighlight: function unhighlight(element) {
      $(element).removeClass('input--error');
    }
  });
  /**
   *
   * Hoa
   * Created at 06-06-2021 20h00
   * Validate register form
   *
   */

  $("#register-form").validate({
    onfocusout: false,
    onkeyup: false,
    onclick: false,
    rules: {
      "name": {
        required: true,
        minlength: 4,
        maxlength: 255
      },
      "email": {
        required: true,
        maxlength: 255
      },
      "username": {
        required: true,
        minlength: 4,
        maxlength: 255
      },
      "password": {
        required: true,
        minlength: 8,
        maxlength: 20
      },
      "password_confirmation": {
        required: true,
        equalTo: "#password"
      },
      "birth_day": {
        required: true
      },
      "avatar": {
        required: true,
        extension: "jpg,jpeg,png",
        filesize: 2048000
      }
    },
    messages: {
      "name": {
        required: "The name field is required."
      },
      "email": {
        required: "The email field is required."
      },
      "username": {
        required: "The username field is required."
      },
      "password": {
        required: "The password field is required."
      },
      "password_confirmation": {
        required: "The password confirmation field is required.",
        equalTo: "Password and password confirmation must be same"
      },
      "birth_day": {
        required: "The birth day field is required."
      },
      "avatar": {
        required: "The avatar field is required.",
        extension: "The avatar must be an image.",
        filesize: " file size must be less than 2048KB."
      }
    },
    highlight: function highlight(element) {
      $(element).addClass('input--error');
    },
    unhighlight: function unhighlight(element) {
      $(element).removeClass('input--error');
    },
    submitHandler: function submitHandler(form) {
      form.submit();
    }
  });
  /**
   *
   * Hoa
   * Created at 06-06-2021 20h40
   * handle file size
   *
   */

  $.validator.addMethod('filesize', function (value, element, arg) {
    if (element.files[0].size <= arg) {
      return true;
    } else {
      return false;
    }
  });
  /**
   *
   * Hoa
   * Created at 06-06-2021 21h00
   * validate reset password form
   *
   */

  $("#reset-form").validate({
    onfocusout: false,
    onkeyup: false,
    onclick: false,
    rules: {
      "email": {
        required: true,
        maxlength: 255
      },
      "password": {
        required: true,
        minlength: 8,
        maxlength: 20
      },
      "password_confirmation": {
        required: true,
        equalTo: "#password"
      }
    },
    messages: {
      "email": {
        required: "The email field is required."
      },
      "password": {
        required: "The password field is required."
      },
      "password_confirmation": {
        required: "The password confirmation field is required.",
        equalTo: "Password and password confirmation must be same"
      }
    },
    highlight: function highlight(element) {
      $(element).addClass('input--error');
    },
    unhighlight: function unhighlight(element) {
      $(element).removeClass('input--error');
    },
    submitHandler: function submitHandler(form) {
      form.submit();
    }
  });
  /**
   *
   * Hoa
   * Created at 06-06-2021 21h20
   * validate add product form
   *
   */

  $("#add-product-form").validate({
    onfocusout: false,
    onkeyup: false,
    onclick: false,
    rules: {
      "name": {
        required: true,
        minlength: 4,
        maxlength: 255
      },
      "price": {
        required: true,
        min: 0,
        max: 2147483647
      },
      "category": {
        required: true
      },
      "image": {
        required: true,
        extension: "jpg,jpeg,png",
        filesize: 2048000
      }
    },
    messages: {
      "name": {
        required: "The name field is required."
      },
      "price": {
        required: "The price field is required."
      },
      "category": {
        required: "The category field is required."
      },
      "image": {
        required: "The image field is required.",
        extension: "The image must be an image.",
        filesize: " file size must be less than 2048KB."
      }
    },
    highlight: function highlight(element) {
      $(element).addClass('input--error');
    },
    unhighlight: function unhighlight(element) {
      $(element).removeClass('input--error');
    },
    submitHandler: function submitHandler(form) {
      form.submit();
    }
  });
  /**
   *
   * Hoa
   * Created at 06-06-2021 22h00
   * validate update product form
   *
   */
}); // The avatar must not be greater than 2048 kilobytes.

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