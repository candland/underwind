parcelRequire=function(e,r,t,n){var i,o="function"==typeof parcelRequire&&parcelRequire,u="function"==typeof require&&require;function f(t,n){if(!r[t]){if(!e[t]){var i="function"==typeof parcelRequire&&parcelRequire;if(!n&&i)return i(t,!0);if(o)return o(t,!0);if(u&&"string"==typeof t)return u(t);var c=new Error("Cannot find module '"+t+"'");throw c.code="MODULE_NOT_FOUND",c}p.resolve=function(r){return e[t][1][r]||r},p.cache={};var l=r[t]=new f.Module(t);e[t][0].call(l.exports,p,l,l.exports,this)}return r[t].exports;function p(e){return f(p.resolve(e))}}f.isParcelRequire=!0,f.Module=function(e){this.id=e,this.bundle=f,this.exports={}},f.modules=e,f.cache=r,f.parent=o,f.register=function(r,t){e[r]=[function(e,r){r.exports=t},{}]};for(var c=0;c<t.length;c++)try{f(t[c])}catch(e){i||(i=e)}if(t.length){var l=f(t[t.length-1]);"object"==typeof exports&&"undefined"!=typeof module?module.exports=l:"function"==typeof define&&define.amd?define(function(){return l}):n&&(this[n]=l)}if(parcelRequire=f,i)throw i;return f}({"qr+2":[function(require,module,exports) {
!function(){var e,a,t,s,n,i;if((e=document.getElementById("site-navigation"))&&void 0!==(a=e.getElementsByTagName("button")[0]))if(void 0!==(t=e.getElementsByTagName("ul")[0])){for(t.setAttribute("aria-expanded","false"),-1===t.className.indexOf("nav-menu")&&(t.className+=" nav-menu"),a.onclick=function(){-1!==e.className.indexOf("toggled")?(e.className=e.className.replace(" toggled",""),a.setAttribute("aria-expanded","false"),t.setAttribute("aria-expanded","false")):(e.className+=" toggled",a.setAttribute("aria-expanded","true"),t.setAttribute("aria-expanded","true"))},n=0,i=(s=t.getElementsByTagName("a")).length;n<i;n++)s[n].addEventListener("focus",l,!0),s[n].addEventListener("blur",l,!0);!function(e){var a,t,s=e.querySelectorAll(".menu-item-has-children > a, .page_item_has_children > a");if("ontouchstart"in window)for(a=function(e){var a,t=this.parentNode;if(t.classList.contains("focus"))t.classList.remove("focus");else{for(e.preventDefault(),a=0;a<t.parentNode.children.length;++a)t!==t.parentNode.children[a]&&t.parentNode.children[a].classList.remove("focus");t.classList.add("focus")}},t=0;t<s.length;++t)s[t].addEventListener("touchstart",a,!1)}(e)}else a.style.display="none";function l(){for(var e=this;-1===e.className.indexOf("nav-menu");)"li"===e.tagName.toLowerCase()&&(-1!==e.className.indexOf("focus")?e.className=e.className.replace(" focus",""):e.className+=" focus"),e=e.parentElement}}();
},{}],"fAw6":[function(require,module,exports) {
/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
},{}],"QvaY":[function(require,module,exports) {
"use strict";var e=r(require("./navigation.js")),i=r(require("./skip-link-focus-fix.js"));function r(e){return e&&e.__esModule?e:{default:e}}
},{"./navigation.js":"qr+2","./skip-link-focus-fix.js":"fAw6"}]},{},["QvaY"], null)
//# sourceMappingURL=/js/index.js.map