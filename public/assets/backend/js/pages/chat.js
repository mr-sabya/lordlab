!function(t){var r={};function a(e){if(r[e])return r[e].exports;var n=r[e]={i:e,l:!1,exports:{}};return t[e].call(n.exports,n,n.exports,a),n.l=!0,n.exports}a.m=t,a.c=r,a.d=function(e,n,t){a.o(e,n)||Object.defineProperty(e,n,{enumerable:!0,get:t})},a.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},a.t=function(n,e){if(1&e&&(n=a(n)),8&e)return n;if(4&e&&"object"==typeof n&&n&&n.__esModule)return n;var t=Object.create(null);if(a.r(t),Object.defineProperty(t,"default",{enumerable:!0,value:n}),2&e&&"string"!=typeof n)for(var r in n)a.d(t,r,function(e){return n[e]}.bind(null,r));return t},a.n=function(e){var n=e&&e.__esModule?function(){return e.default}:function(){return e};return a.d(n,"a",n),n},a.o=function(e,n){return Object.prototype.hasOwnProperty.call(e,n)},a.p="",a(a.s=2)}({"./app/assets/es6/pages/chat.js":function(module,exports){eval("class Chat {\r\n\r\n    static init() {\r\n        $('.conversation .panel-toggle').on('click', () => {\r\n            $('.column-panel').addClass('is-mobile-active')\r\n        })\r\n\r\n        $('.chat-panel .chat-list-row').on('click', () => {\r\n            $('.column-panel').removeClass('is-mobile-active')\r\n        })\r\n    }\r\n}\r\n\r\n$(() => { Chat.init(); });\r\n\r\n\n\n//# sourceURL=webpack:///./app/assets/es6/pages/chat.js?")},2:function(module,exports,__webpack_require__){eval('module.exports = __webpack_require__(/*! C:\\Users\\E\\Desktop\\workspace\\espire\\html\\demo\\app\\assets\\es6\\pages\\chat.js */"./app/assets/es6/pages/chat.js");\n\n\n//# sourceURL=webpack:///multi_./app/assets/es6/pages/chat.js?')}});