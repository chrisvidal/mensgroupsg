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

/***/ "./source/_assets/js/main.js":
/*!***********************************!*\
  !*** ./source/_assets/js/main.js ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("// Vanilla JavaScript Scroll to Anchor\n// @ https://perishablepress.com/vanilla-javascript-scroll-anchor/\n(function () {\n  scrollTo();\n  window.addEventListener(\"scroll\", function (event) {\n    var fromTop = window.scrollY + 300;\n    var links = document.querySelectorAll('.scroll');\n    links.forEach(function (link) {\n      var section = document.querySelector(link.hash);\n\n      if (section.offsetTop <= fromTop && section.offsetTop + section.offsetHeight > fromTop) {\n        link.classList.add(\"site-navigation__link--active\");\n      } else {\n        link.classList.remove(\"site-navigation__link--active\");\n      }\n    });\n  });\n})();\n\nfunction scrollTo() {\n  var links = document.querySelectorAll('.scroll');\n  links.forEach(function (each) {\n    return each.onclick = scrollAnchors;\n  });\n}\n\nfunction scrollAnchors(e) {\n  var respond = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : null;\n\n  var distanceToTop = function distanceToTop(el) {\n    return Math.floor(el.getBoundingClientRect().top);\n  };\n\n  e.preventDefault();\n  var targetID = respond ? respond.getAttribute('href') : this.getAttribute('href');\n  var targetAnchor = document.querySelector(targetID);\n  if (!targetAnchor) return;\n  var originalTop = distanceToTop(targetAnchor);\n  var link = this;\n  window.scrollBy({\n    top: originalTop,\n    left: 0,\n    behavior: 'smooth'\n  });\n  var checkIfDone = setInterval(function () {\n    var atBottom = window.innerHeight + window.pageYOffset >= document.body.offsetHeight - 2;\n\n    if (distanceToTop(targetAnchor) === 0 || atBottom) {\n      targetAnchor.tabIndex = '-1';\n      targetAnchor.focus();\n      window.history.pushState('', '', targetID);\n      clearInterval(checkIfDone);\n    }\n  }, 250);\n}//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9zb3VyY2UvX2Fzc2V0cy9qcy9tYWluLmpzPzA1MjMiXSwibmFtZXMiOlsic2Nyb2xsVG8iLCJ3aW5kb3ciLCJhZGRFdmVudExpc3RlbmVyIiwiZXZlbnQiLCJmcm9tVG9wIiwic2Nyb2xsWSIsImxpbmtzIiwiZG9jdW1lbnQiLCJxdWVyeVNlbGVjdG9yQWxsIiwiZm9yRWFjaCIsImxpbmsiLCJzZWN0aW9uIiwicXVlcnlTZWxlY3RvciIsImhhc2giLCJvZmZzZXRUb3AiLCJvZmZzZXRIZWlnaHQiLCJjbGFzc0xpc3QiLCJhZGQiLCJyZW1vdmUiLCJlYWNoIiwib25jbGljayIsInNjcm9sbEFuY2hvcnMiLCJlIiwicmVzcG9uZCIsImRpc3RhbmNlVG9Ub3AiLCJlbCIsIk1hdGgiLCJmbG9vciIsImdldEJvdW5kaW5nQ2xpZW50UmVjdCIsInRvcCIsInByZXZlbnREZWZhdWx0IiwidGFyZ2V0SUQiLCJnZXRBdHRyaWJ1dGUiLCJ0YXJnZXRBbmNob3IiLCJvcmlnaW5hbFRvcCIsInNjcm9sbEJ5IiwibGVmdCIsImJlaGF2aW9yIiwiY2hlY2tJZkRvbmUiLCJzZXRJbnRlcnZhbCIsImF0Qm90dG9tIiwiaW5uZXJIZWlnaHQiLCJwYWdlWU9mZnNldCIsImJvZHkiLCJ0YWJJbmRleCIsImZvY3VzIiwiaGlzdG9yeSIsInB1c2hTdGF0ZSIsImNsZWFySW50ZXJ2YWwiXSwibWFwcGluZ3MiOiJBQUFBO0FBQ0E7QUFFQSxDQUFDLFlBQVc7QUFDUkEsVUFBUTtBQUdSQyxRQUFNLENBQUNDLGdCQUFQLENBQXdCLFFBQXhCLEVBQWtDLFVBQUFDLEtBQUssRUFBSTtBQUN6QyxRQUFJQyxPQUFPLEdBQUdILE1BQU0sQ0FBQ0ksT0FBUCxHQUFpQixHQUEvQjtBQUVBLFFBQU1DLEtBQUssR0FBR0MsUUFBUSxDQUFDQyxnQkFBVCxDQUEwQixTQUExQixDQUFkO0FBRUFGLFNBQUssQ0FBQ0csT0FBTixDQUFjLFVBQUFDLElBQUksRUFBSTtBQUNwQixVQUFJQyxPQUFPLEdBQUdKLFFBQVEsQ0FBQ0ssYUFBVCxDQUF1QkYsSUFBSSxDQUFDRyxJQUE1QixDQUFkOztBQUVBLFVBQ0VGLE9BQU8sQ0FBQ0csU0FBUixJQUFxQlYsT0FBckIsSUFDQU8sT0FBTyxDQUFDRyxTQUFSLEdBQW9CSCxPQUFPLENBQUNJLFlBQTVCLEdBQTJDWCxPQUY3QyxFQUdFO0FBQ0FNLFlBQUksQ0FBQ00sU0FBTCxDQUFlQyxHQUFmLENBQW1CLCtCQUFuQjtBQUNELE9BTEQsTUFLTztBQUNMUCxZQUFJLENBQUNNLFNBQUwsQ0FBZUUsTUFBZixDQUFzQiwrQkFBdEI7QUFDRDtBQUNGLEtBWEQ7QUFZRCxHQWpCRDtBQW1CSCxDQXZCRDs7QUF5QkEsU0FBU2xCLFFBQVQsR0FBb0I7QUFDaEIsTUFBTU0sS0FBSyxHQUFHQyxRQUFRLENBQUNDLGdCQUFULENBQTBCLFNBQTFCLENBQWQ7QUFDQUYsT0FBSyxDQUFDRyxPQUFOLENBQWMsVUFBQVUsSUFBSTtBQUFBLFdBQUtBLElBQUksQ0FBQ0MsT0FBTCxHQUFlQyxhQUFwQjtBQUFBLEdBQWxCO0FBQ0g7O0FBRUQsU0FBU0EsYUFBVCxDQUF1QkMsQ0FBdkIsRUFBMEM7QUFBQSxNQUFoQkMsT0FBZ0IsdUVBQU4sSUFBTTs7QUFDdEMsTUFBTUMsYUFBYSxHQUFHLFNBQWhCQSxhQUFnQixDQUFBQyxFQUFFO0FBQUEsV0FBSUMsSUFBSSxDQUFDQyxLQUFMLENBQVdGLEVBQUUsQ0FBQ0cscUJBQUgsR0FBMkJDLEdBQXRDLENBQUo7QUFBQSxHQUF4Qjs7QUFDQVAsR0FBQyxDQUFDUSxjQUFGO0FBQ0EsTUFBSUMsUUFBUSxHQUFJUixPQUFELEdBQVlBLE9BQU8sQ0FBQ1MsWUFBUixDQUFxQixNQUFyQixDQUFaLEdBQTJDLEtBQUtBLFlBQUwsQ0FBa0IsTUFBbEIsQ0FBMUQ7QUFDQSxNQUFNQyxZQUFZLEdBQUcxQixRQUFRLENBQUNLLGFBQVQsQ0FBdUJtQixRQUF2QixDQUFyQjtBQUNBLE1BQUksQ0FBQ0UsWUFBTCxFQUFtQjtBQUNuQixNQUFNQyxXQUFXLEdBQUdWLGFBQWEsQ0FBQ1MsWUFBRCxDQUFqQztBQUNBLE1BQUl2QixJQUFJLEdBQUcsSUFBWDtBQUNBVCxRQUFNLENBQUNrQyxRQUFQLENBQWdCO0FBQUVOLE9BQUcsRUFBRUssV0FBUDtBQUFvQkUsUUFBSSxFQUFFLENBQTFCO0FBQTZCQyxZQUFRLEVBQUU7QUFBdkMsR0FBaEI7QUFDQSxNQUFNQyxXQUFXLEdBQUdDLFdBQVcsQ0FBQyxZQUFXO0FBQ3ZDLFFBQU1DLFFBQVEsR0FBR3ZDLE1BQU0sQ0FBQ3dDLFdBQVAsR0FBcUJ4QyxNQUFNLENBQUN5QyxXQUE1QixJQUEyQ25DLFFBQVEsQ0FBQ29DLElBQVQsQ0FBYzVCLFlBQWQsR0FBNkIsQ0FBekY7O0FBQ0EsUUFBSVMsYUFBYSxDQUFDUyxZQUFELENBQWIsS0FBZ0MsQ0FBaEMsSUFBcUNPLFFBQXpDLEVBQW1EO0FBQy9DUCxrQkFBWSxDQUFDVyxRQUFiLEdBQXdCLElBQXhCO0FBQ0FYLGtCQUFZLENBQUNZLEtBQWI7QUFDQTVDLFlBQU0sQ0FBQzZDLE9BQVAsQ0FBZUMsU0FBZixDQUF5QixFQUF6QixFQUE2QixFQUE3QixFQUFpQ2hCLFFBQWpDO0FBQ0FpQixtQkFBYSxDQUFDVixXQUFELENBQWI7QUFDSDtBQUNKLEdBUjhCLEVBUTVCLEdBUjRCLENBQS9CO0FBU0giLCJmaWxlIjoiLi9zb3VyY2UvX2Fzc2V0cy9qcy9tYWluLmpzLmpzIiwic291cmNlc0NvbnRlbnQiOlsiLy8gVmFuaWxsYSBKYXZhU2NyaXB0IFNjcm9sbCB0byBBbmNob3Jcbi8vIEAgaHR0cHM6Ly9wZXJpc2hhYmxlcHJlc3MuY29tL3ZhbmlsbGEtamF2YXNjcmlwdC1zY3JvbGwtYW5jaG9yL1xuXG4oZnVuY3Rpb24oKSB7XG4gICAgc2Nyb2xsVG8oKTtcblxuXG4gICAgd2luZG93LmFkZEV2ZW50TGlzdGVuZXIoXCJzY3JvbGxcIiwgZXZlbnQgPT4ge1xuICAgICAgbGV0IGZyb21Ub3AgPSB3aW5kb3cuc2Nyb2xsWSArIDMwMDtcblxuICAgICAgY29uc3QgbGlua3MgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKCcuc2Nyb2xsJyk7XG5cbiAgICAgIGxpbmtzLmZvckVhY2gobGluayA9PiB7XG4gICAgICAgIGxldCBzZWN0aW9uID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcihsaW5rLmhhc2gpO1xuXG4gICAgICAgIGlmIChcbiAgICAgICAgICBzZWN0aW9uLm9mZnNldFRvcCA8PSBmcm9tVG9wICYmXG4gICAgICAgICAgc2VjdGlvbi5vZmZzZXRUb3AgKyBzZWN0aW9uLm9mZnNldEhlaWdodCA+IGZyb21Ub3BcbiAgICAgICAgKSB7XG4gICAgICAgICAgbGluay5jbGFzc0xpc3QuYWRkKFwic2l0ZS1uYXZpZ2F0aW9uX19saW5rLS1hY3RpdmVcIik7XG4gICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgbGluay5jbGFzc0xpc3QucmVtb3ZlKFwic2l0ZS1uYXZpZ2F0aW9uX19saW5rLS1hY3RpdmVcIik7XG4gICAgICAgIH1cbiAgICAgIH0pO1xuICAgIH0pO1xuXG59KSgpO1xuXG5mdW5jdGlvbiBzY3JvbGxUbygpIHtcbiAgICBjb25zdCBsaW5rcyA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoJy5zY3JvbGwnKTtcbiAgICBsaW5rcy5mb3JFYWNoKGVhY2ggPT4gKGVhY2gub25jbGljayA9IHNjcm9sbEFuY2hvcnMpKTtcbn1cblxuZnVuY3Rpb24gc2Nyb2xsQW5jaG9ycyhlLCByZXNwb25kID0gbnVsbCkge1xuICAgIGNvbnN0IGRpc3RhbmNlVG9Ub3AgPSBlbCA9PiBNYXRoLmZsb29yKGVsLmdldEJvdW5kaW5nQ2xpZW50UmVjdCgpLnRvcCk7XG4gICAgZS5wcmV2ZW50RGVmYXVsdCgpO1xuICAgIHZhciB0YXJnZXRJRCA9IChyZXNwb25kKSA/IHJlc3BvbmQuZ2V0QXR0cmlidXRlKCdocmVmJykgOiB0aGlzLmdldEF0dHJpYnV0ZSgnaHJlZicpO1xuICAgIGNvbnN0IHRhcmdldEFuY2hvciA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IodGFyZ2V0SUQpO1xuICAgIGlmICghdGFyZ2V0QW5jaG9yKSByZXR1cm47XG4gICAgY29uc3Qgb3JpZ2luYWxUb3AgPSBkaXN0YW5jZVRvVG9wKHRhcmdldEFuY2hvcik7XG4gICAgdmFyIGxpbmsgPSB0aGlzO1xuICAgIHdpbmRvdy5zY3JvbGxCeSh7IHRvcDogb3JpZ2luYWxUb3AsIGxlZnQ6IDAsIGJlaGF2aW9yOiAnc21vb3RoJyB9KTtcbiAgICBjb25zdCBjaGVja0lmRG9uZSA9IHNldEludGVydmFsKGZ1bmN0aW9uKCkge1xuICAgICAgICBjb25zdCBhdEJvdHRvbSA9IHdpbmRvdy5pbm5lckhlaWdodCArIHdpbmRvdy5wYWdlWU9mZnNldCA+PSBkb2N1bWVudC5ib2R5Lm9mZnNldEhlaWdodCAtIDI7XG4gICAgICAgIGlmIChkaXN0YW5jZVRvVG9wKHRhcmdldEFuY2hvcikgPT09IDAgfHwgYXRCb3R0b20pIHtcbiAgICAgICAgICAgIHRhcmdldEFuY2hvci50YWJJbmRleCA9ICctMSc7XG4gICAgICAgICAgICB0YXJnZXRBbmNob3IuZm9jdXMoKTtcbiAgICAgICAgICAgIHdpbmRvdy5oaXN0b3J5LnB1c2hTdGF0ZSgnJywgJycsIHRhcmdldElEKTtcbiAgICAgICAgICAgIGNsZWFySW50ZXJ2YWwoY2hlY2tJZkRvbmUpO1xuICAgICAgICB9XG4gICAgfSwgMjUwKTtcbn1cbiJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./source/_assets/js/main.js\n");

/***/ }),

/***/ "./source/_assets/sass/main.scss":
/*!***************************************!*\
  !*** ./source/_assets/sass/main.scss ***!
  \***************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("// removed by extract-text-webpack-plugin//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9zb3VyY2UvX2Fzc2V0cy9zYXNzL21haW4uc2Nzcz80MDdkIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUFBIiwiZmlsZSI6Ii4vc291cmNlL19hc3NldHMvc2Fzcy9tYWluLnNjc3MuanMiLCJzb3VyY2VzQ29udGVudCI6WyIvLyByZW1vdmVkIGJ5IGV4dHJhY3QtdGV4dC13ZWJwYWNrLXBsdWdpbiJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./source/_assets/sass/main.scss\n");

/***/ }),

/***/ 0:
/*!*************************************************************************!*\
  !*** multi ./source/_assets/js/main.js ./source/_assets/sass/main.scss ***!
  \*************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /Users/christophevidal/Sites/mensgroupsg.info/source/_assets/js/main.js */"./source/_assets/js/main.js");
module.exports = __webpack_require__(/*! /Users/christophevidal/Sites/mensgroupsg.info/source/_assets/sass/main.scss */"./source/_assets/sass/main.scss");


/***/ })

/******/ });