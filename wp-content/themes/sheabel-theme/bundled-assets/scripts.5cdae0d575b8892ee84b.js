!function(e){var t={};function n(r){if(t[r])return t[r].exports;var o=t[r]={i:r,l:!1,exports:{}};return e[r].call(o.exports,o,o.exports,n),o.l=!0,o.exports}n.m=e,n.c=t,n.d=function(e,t,r){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:r})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var r=Object.create(null);if(n.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var o in e)n.d(r,o,function(t){return e[t]}.bind(null,o));return r},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="/wp-content/themes/fictional-university-theme/bundled-assets/",n(n.s=1)}([function(e,t,n){},function(e,t,n){"use strict";n.r(t);n(0);new class{constructor(){document.querySelectorAll(".acf-map").forEach(e=>{this.new_map(e)})}new_map(e){var t=e.querySelectorAll(".marker"),n={zoom:16,center:new google.maps.LatLng(0,0),mapTypeId:google.maps.MapTypeId.ROADMAP},r=new google.maps.Map(e,n);r.markers=[];var o=this;t.forEach((function(e){o.add_marker(e,r)})),this.center_map(r)}add_marker(e,t){var n=new google.maps.LatLng(e.getAttribute("data-lat"),e.getAttribute("data-lng")),r=new google.maps.Marker({position:n,map:t});if(t.markers.push(r),e.innerHTML){var o=new google.maps.InfoWindow({content:e.innerHTML});google.maps.event.addListener(r,"click",(function(){o.open(t,r)}))}}center_map(e){var t=new google.maps.LatLngBounds;e.markers.forEach((function(e){var n=new google.maps.LatLng(e.position.lat(),e.position.lng());t.extend(n)})),1==e.markers.length?(e.setCenter(t.getCenter()),e.setZoom(10)):e.fitBounds(t)}}}]);