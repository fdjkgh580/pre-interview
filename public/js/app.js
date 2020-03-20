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
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _svg__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./svg */ "./resources/js/svg.js");
/* harmony import */ var _svg__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_svg__WEBPACK_IMPORTED_MODULE_0__);
// img to svg
 // index blog arrow btn

var blogCard = document.querySelector(".iw_blog-item-card-container");
var blogPrevBtn = document.querySelector(".iw_for-blog .iw_prevBtn");
var blogNextBtn = document.querySelector(".iw_for-blog .iw_nextBtn");

function moveEnd() {
  blogCard.style.transform = "translateX(calc((-100% + 740px) / 2))";
}

function moveFront() {
  blogCard.style.transform = "translateX(calc((100% - 740px) / 2 + 10px))";
}

blogNextBtn && blogNextBtn.addEventListener("click", moveEnd);
blogPrevBtn && blogPrevBtn.addEventListener("click", moveFront); // index hot-item-card : OwlCarousel2 https://owlcarousel2.github.io/OwlCarousel2/

$(document).ready(function () {
  $("#item2").owlCarousel({
    loop: true,
    margin: 10,
    nav: true
  });
  $("#item1").owlCarousel({
    loop: true,
    margin: 10,
    nav: true
  });
});
$(document).ready(function () {
  $("#owl-school-img").owlCarousel({
    center: true,
    items: 6,
    loop: true,
    margin: 0,
    nav: false,
    dots: false,
    autoplay: true,
    responsive: {
      // breakpoint from 0 ~ 479
      0: {
        items: 1
      },
      // breakpoint from 481 ~ 739
      480: {
        items: 3,
        center: true,
        stagePadding: 50
      },
      // breakpoint from 740 up
      740: {
        items: 6,
        // stagePadding: 50,
        center: true // loop: true,
        // startPosition: 0

      },
      1100: {
        stagePadding: 0
      }
    }
  });
  var parentDOM = document.getElementById("hotItem");
  var owlCarouselActive = parentDOM.getElementsByClassName("owl-item active");
  var first = owlCarouselActive[0]; //get first item

  var last = owlCarouselActive[owlCarouselActive.length - 1]; //get last item

  console.log(first); // first.style.opacity = 0.2;
  // last.style.opacity = 0.2;

  var owl = $(".owl-card-item").owlCarousel({
    items: 3,
    nav: false,
    margin: 8,
    loop: true,
    dots: false,
    responsive: {
      0: {
        items: 1
      },
      480: {
        items: 1,
        stagePadding: 50,
        startPosition: 0
      },
      740: {
        items: 2,
        stagePadding: 50,
        center: false,
        startPosition: 0
      },
      1100: {
        item: 3
      }
    }
  });
  jQuery(".hotItemNextBtn").click(function () {
    owl.trigger("next.owl.carousel");
  }); // Go to the previous item

  jQuery(".hotItemPrevBtn").click(function () {
    // With optional speed parameter
    // Parameters has to be in square bracket '[]'
    owl.trigger("prev.owl.carousel", [300]);
  });
  var owlHotList = $("#owl-hot-list").owlCarousel({
    items: 1,
    nav: false,
    margin: 0,
    loop: true,
    dots: false
  });
  jQuery(".hotListNextBtn").click(function () {
    owlHotList.trigger("next.owl.carousel");
  }); // Go to the previous item

  jQuery(".hotListPrevBtn").click(function () {
    owlHotList.trigger("prev.owl.carousel", [300]);
  });
});

/***/ }),

/***/ "./resources/js/svg.js":
/*!*****************************!*\
  !*** ./resources/js/svg.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports) {

/**
 * Replace all SVG images with inline SVG
 */
jQuery('img.svg').each(function () {
  var $img = jQuery(this);
  var imgID = $img.attr('id');
  var imgClass = $img.attr('class');
  var imgURL = $img.attr('src');
  jQuery.get(imgURL, function (data) {
    // Get the SVG tag, ignore the rest
    var $svg = jQuery(data).find('svg'); // Add replaced image's ID to the new SVG

    if (typeof imgID !== 'undefined') {
      $svg = $svg.attr('id', imgID);
    } // Add replaced image's classes to the new SVG


    if (typeof imgClass !== 'undefined') {
      $svg = $svg.attr('class', imgClass + ' replaced-svg');
    } // Remove any invalid XML tags as per http://validator.w3.org


    $svg = $svg.removeAttr('xmlns:a'); // Replace image with new SVG

    $img.replaceWith($svg);
  }, 'xml');
});

/***/ }),

/***/ 1:
/*!***********************************!*\
  !*** multi ./resources/js/app.js ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /Users/jovilee/Desktop/0-pi-work/interview/www/resources/js/app.js */"./resources/js/app.js");


/***/ })

/******/ });