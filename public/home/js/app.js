/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./src/xaydung/js/app.js":
/*!*******************************!*\
  !*** ./src/xaydung/js/app.js ***!
  \*******************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(document).ready(function () {
  var navbar = $('#navbar');
  var toggle = $('[data-menu]');
  var close = $('.fa-times');
  toggle.on('click', function (e) {
    e.preventDefault();
    navbar.toggleClass('active');
  });
  close.on('click', function (e) {
    e.preventDefault();
    navbar.toggleClass('active');
  });
  var swiper = new Swiper('.swiper-logo', {
    slidesPerView: 8,
    loop: true,
    spaceBetween: 10,
    autoplay: {
      delay: 5000
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev'
    },
    breakpoints: {
      1025: {
        slidesPerView: 3,
        spaceBetween: 20,
        simulateTouch: true,
        autoplay: {
          delay: 5000
        }
      },
      769: {
        slidesPerView: 3,
        spaceBetween: 20,
        simulateTouch: true,
        autoplay: {
          delay: 5000
        }
      },
      440: {
        slidesPerView: 1,
        spaceBetween: 20,
        simulateTouch: true,
        autoplay: {
          delay: 5000
        }
      }
    }
  });
  var swiper = new Swiper('.swiper-product', {
    slidesPerView: 5,
    spaceBetween: 10,
    loop: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev'
    },
    breakpoints: {
      1025: {
        slidesPerView: 3,
        spaceBetween: 20,
        simulateTouch: true,
        autoplay: {
          delay: 5000
        }
      },
      769: {
        slidesPerView: 3,
        spaceBetween: 20,
        simulateTouch: true,
        autoplay: {
          delay: 5000
        }
      },
      440: {
        slidesPerView: 1,
        spaceBetween: 20,
        simulateTouch: true,
        autoplay: {
          delay: 5000
        }
      }
    }
  });
  var swiper = new Swiper('.swiper-work', {
    slidesPerView: 3,
    spaceBetween: 10,
    pagination: {
      el: '.swiper-pagination',
      clickable: true
    },
    breakpoints: {
      769: {
        slidesPerView: 2,
        spaceBetween: 20,
        autoplay: {
          delay: 5000
        }
      },
      440: {
        slidesPerView: 1,
        spaceBetween: 20,
        autoplay: {
          delay: 5000
        }
      }
    }
  });
  var galleryThumbs = new Swiper('.gallery-thumbs', {
    spaceBetween: 10,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesVisibility: true,
    watchSlidesProgress: true
  });
  var galleryTop = new Swiper('.gallery-top', {
    spaceBetween: 10,
    loop: true,
    autoplay: {
      delay: 5000
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev'
    },
    thumbs: {
      swiper: galleryThumbs
    }
  });
});
$(window).scroll(function () {
  var height = $(window).scrollTop();

  if (height >= 300) {
    $('.scroll-top').addClass('show');
  } else {
    $('.scroll-top').removeClass('show');
  }
});
$(".append").append("This" + height + "is!");

/***/ }),

/***/ "./src/xaydung/sass/app.scss":
/*!***********************************!*\
  !*** ./src/xaydung/sass/app.scss ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*****************************************************************!*\
  !*** multi ./src/xaydung/js/app.js ./src/xaydung/sass/app.scss ***!
  \*****************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /home/kimtrong/learning/projects/Projects1/src/xaydung/js/app.js */"./src/xaydung/js/app.js");
module.exports = __webpack_require__(/*! /home/kimtrong/learning/projects/Projects1/src/xaydung/sass/app.scss */"./src/xaydung/sass/app.scss");


/***/ })

/******/ });