!function(e){var t={};function n(o){if(t[o])return t[o].exports;var r=t[o]={i:o,l:!1,exports:{}};return e[o].call(r.exports,r,r.exports,n),r.l=!0,r.exports}n.m=e,n.c=t,n.d=function(e,t,o){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:o})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var o=Object.create(null);if(n.r(o),Object.defineProperty(o,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var r in e)n.d(o,r,function(t){return e[t]}.bind(null,r));return o},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="/",n(n.s=0)}({0:function(e,t,n){n("BSPe"),e.exports=n("olAV")},BSPe:function(e,t){function n(e){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:null,n=function(e){return Math.floor(e.getBoundingClientRect().top)};e.preventDefault();var o=t?t.getAttribute("href"):this.getAttribute("href"),r=document.querySelector(o);if(r){var i=n(r);window.scrollBy({top:i,left:0,behavior:"smooth"});var u=setInterval(function(){var e=window.innerHeight+window.pageYOffset>=document.body.offsetHeight-2;(0===n(r)||e)&&(r.tabIndex="-1",r.focus(),window.history.pushState("","",o),clearInterval(u))},250)}}document.querySelectorAll(".scroll").forEach(function(e){return e.onclick=n}),window.addEventListener("scroll",function(e){var t=window.scrollY+300;document.querySelectorAll(".scroll").forEach(function(e){var n=document.querySelector(e.hash);n.offsetTop<=t&&n.offsetTop+n.offsetHeight>t?e.classList.add("site-navigation__link--active"):e.classList.remove("site-navigation__link--active")})})},olAV:function(e,t){}});
//# sourceMappingURL=main.js.map