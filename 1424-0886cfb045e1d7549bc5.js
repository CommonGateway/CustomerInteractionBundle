"use strict";(self.webpackChunkproduct_website_template=self.webpackChunkproduct_website_template||[]).push([[1424,4111],{94111:function(t,e,n){function r(t){var e,n,i="";if("string"==typeof t||"number"==typeof t)i+=t;else if("object"==typeof t)if(Array.isArray(t))for(e=0;e<t.length;e++)t[e]&&(n=r(t[e]))&&(i&&(i+=" "),i+=n);else for(e in t)t[e]&&(i&&(i+=" "),i+=e);return i}function i(){for(var t,e,n=0,i="";n<arguments.length;)(t=arguments[n++])&&(e=r(t))&&(i&&(i+=" "),i+=e);return i}n.d(e,{c:function(){return i}})},11424:function(t,e,n){n.r(e),n.d(e,{utrecht_pagination:function(){return a}});var r=n(43616),i=n(94111);const a=class{constructor(t){(0,r.r)(this,t),this.links=void 0,this.next=void 0,this.prev=void 0,this.currentIndex=void 0}render(){const{currentIndex:t}=this,e="string"==typeof this.links?JSON.parse(this.links):null,n="string"==typeof this.next?JSON.parse(this.next):null,a="string"==typeof this.prev?JSON.parse(this.next):null,o=t=>{let{disabled:e=!1,href:n="",rel:a=null,textContent:o="",title:l=""}=t;return e?(0,r.h)("span",{class:(0,i.c)("utrecht-pagination__relative-link",e&&"utrecht-pagination__relative-link--disabled","next"===a&&"utrecht-pagination__relative-link--next","prev"===a&&"utrecht-pagination__relative-link--prev"),"aria-label":l||null},o):(0,r.h)("a",{href:n,class:(0,i.c)("utrecht-pagination__relative-link",e&&"utrecht-pagination__relative-link--disabled","next"===a&&"utrecht-pagination__relative-link--next","prev"===a&&"utrecht-pagination__relative-link--prev"),rel:a,"aria-label":l||null},o)};return(0,r.h)("nav",{class:"utrecht-pagination"},(0,r.h)("span",{class:"utrecht-pagination__before"},a?o(Object.assign(Object.assign({},a),{rel:"prev",textContent:"Vorige"})):""),(0,r.h)("span",{role:"group",class:"utrecht-pagination__pages"},e.sort(((t,e)=>t.index===e.index?0:t.index>e.index?1:-1)).map(((e,n)=>{const r="number"==typeof e.index?e.index:n;return Object.assign({index:r,current:"number"==typeof t&&r===t,rel:"number"==typeof t?r===t+1?"next":r===t-1?"prev":null:null,textContent:e.index||r},e)})).map((t=>(t=>{let{current:e=!1,href:n="",rel:a=null,textContent:o=""}=t;return(0,r.h)("a",{class:(0,i.c)("utrecht-pagination__page-link",e&&"utrecht-pagination__page-link--current"),href:n,"aria-current":e?"true":null,rel:a},o)})(t)))),(0,r.h)("span",{class:"utrecht-pagination__before"},n?o(Object.assign(Object.assign({},n),{rel:"next",textContent:"Volgende"})):""))}};a.style=".utrecht-pagination__page-link:focus,.utrecht-pagination__relative-link:focus{--_utrecht-focus-ring-box-shadow:0 0 0 var(--utrecht-focus-outline-width, 0)\n    var(--utrecht-focus-inverse-outline-color, transparent);box-shadow:var(--_utrecht-focus-ring-box-shadow);outline-color:var(--utrecht-focus-outline-color, revert);outline-offset:var(--utrecht-focus-outline-offset, revert);outline-style:var(--utrecht-focus-outline-style, revert);outline-width:var(--utrecht-focus-outline-width, revert)}.utrecht-pagination__page-link:focus:not(:focus-visible),.utrecht-pagination__relative-link:focus:not(:focus-visible){box-shadow:none;outline-style:revert}.utrecht-pagination{font-family:var(--utrecht-pagination-font-family, var(--utrecht-document-font-family));font-size:var(--utrecht-pagination-font-size, var(--utrecht-document-font-family));margin-block-end:calc(var(--utrecht-space-around, 0) * var(--utrecht-pagination-margin-block-end, 0));margin-block-start:calc(var(--utrecht-space-around, 0) * var(--utrecht-pagination-margin-block-start, 0))}.utrecht-pagination--distanced{--utrecht-space-around:1}.utrecht-pagination__relative-link{background-color:var(--utrecht-pagination-relative-link-background-color);border-color:var(--utrecht-pagination-relative-link-border-color);border-radius:var(--utrecht-pagination-relative-link-border-radius);border-style:solid;border-width:var(--utrecht-pagination-relative-link-border-width, 0);color:var(--utrecht-pagination-relative-link-color);display:inline-block;font-weight:var(--utrecht-pagination-relative-link-font-weight);padding-block-end:var(--utrecht-pagination-relative-link-padding-block-end);padding-block-start:var(--utrecht-pagination-relative-link-padding-block-start);padding-inline-end:var(--utrecht-pagination-relative-link-padding-inline-end);padding-inline-start:var(--utrecht-pagination-relative-link-padding-inline-start);text-decoration:var(--utrecht-pagination-relative-link-text-decoration);text-transform:var(--utrecht-pagination-relative-link-text-transform)}.utrecht-pagination__relative-link--next{margin-inline-start:var(--utrecht-pagination-relative-link-distanced-margin-inline-start)}.utrecht-pagination__relative-link--prev{margin-inline-end:var(--utrecht-pagination-relative-link-distanced-margin-inline-end)}.utrecht-pagination__relative-link--disabled{background-color:var(--utrecht-pagination-relative-link-disabled-background-color, var(--utrecht-pagination-relative-link-background-color));color:var(--utrecht-pagination-relative-link-disabled-color, var(--utrecht-pagination-relative-link-color))}.utrecht-pagination__relative-link--hover,.utrecht-pagination__relative-link:hover{background-color:var(--utrecht-pagination-relative-link-hover-background-color, var(--utrecht-pagination-relative-link-background-color));border-color:var(--utrecht-pagination-relative-link-hover-border-color, var(--utrecht-pagination-relative-link-border-color));color:var(--utrecht-pagination-relative-link-hover-color, var(--utrecht-pagination-relative-link-color))}.utrecht-pagination__page-link{background-color:var(--utrecht-pagination-page-link-background-color);border-color:var(--utrecht-pagination-page-link-border-color, 0);border-radius:var(--utrecht-pagination-page-link-border-radius);border-style:solid;border-width:var(--utrecht-pagination-page-link-border-width);color:var(--utrecht-pagination-page-link-color);display:inline-block;font-weight:var(--utrecht-pagination-page-link-font-weight);padding-block-end:var(--utrecht-pagination-page-link-padding-block-end);padding-block-start:var(--utrecht-pagination-page-link-padding-block-start);padding-inline-end:var(--utrecht-pagination-page-link-padding-inline-end);padding-inline-start:var(--utrecht-pagination-page-link-padding-inline-start);text-decoration:var(--utrecht-pagination-page-link-text-decoration)}.utrecht-pagination__page-link--current{--utrecht-pagination-page-link-background-color:var(--utrecht-pagination-page-link-current-background-color);--utrecht-pagination-page-link-border-color:var(--utrecht-pagination-page-link-current-border-color);--utrecht-pagination-page-link-color:var(--utrecht-pagination-page-link-current-color)}.utrecht-pagination__page-link~.utrecht-pagination__page-link{margin-inline-start:var(--utrecht-pagination-page-link-distanced-margin-inline-start)}.utrecht-pagination__page-link--hover,.utrecht-pagination__page-link:hover{background-color:var(--utrecht-pagination-page-link-hover-background-color, var(--utrecht-pagination-page-link-background-color));border-color:var(--utrecht-pagination-page-link-hover-border-color, var(--utrecht-pagination-page-link-border-color));color:var(--utrecht-pagination-page-link-hover-color, var(--utrecht-pagination-page-link-color))}.utrecht-pagination__page-link:focus,.utrecht-pagination__relative-link:focus{--_utrecht-focus-ring-box-shadow:0 0 0 var(--utrecht-focus-outline-width, 0)\n    var(--utrecht-focus-inverse-outline-color, transparent);box-shadow:var(--_utrecht-focus-ring-box-shadow);outline-color:var(--utrecht-focus-outline-color, revert);outline-offset:var(--utrecht-focus-outline-offset, revert);outline-style:var(--utrecht-focus-outline-style, revert);outline-width:var(--utrecht-focus-outline-width, revert)}.utrecht-pagination__page-link:focus:not(:focus-visible),.utrecht-pagination__relative-link:focus:not(:focus-visible){box-shadow:none;outline-style:revert}:host{display:block}:host([hidden]){display:none !important}"}}]);
//# sourceMappingURL=1424-0886cfb045e1d7549bc5.js.map