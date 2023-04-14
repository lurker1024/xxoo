(self.webpackChunk_N_E=self.webpackChunk_N_E||[]).push([[717],{9933:function(e,t,n){"use strict";n.d(t,{fC:function(){return _},aV:function(){return I},xz:function(){return j},VY:function(){return E}});var r=n(6074),o=n(8947),i=n(2130),u=n(3597),a=n(4540),c=n(1816),s=n(2784),l=n(7896);const[f,d]=(0,a.b)("Tabs",[o.Pc]),p=(0,o.Pc)(),[h,m]=f("Tabs"),v=s.forwardRef(((e,t)=>{const{__scopeTabs:n,value:o,onValueChange:a,defaultValue:c,orientation:f="horizontal",dir:d="ltr",activationMode:p="automatic",...m}=e,[v,y]=(0,u.T)({prop:o,onChange:a,defaultProp:c});return s.createElement(h,{scope:n,baseId:(0,r.M)(),value:v,onValueChange:y,orientation:f,dir:d,activationMode:p},s.createElement(i.W.div,(0,l.Z)({"data-orientation":f},m,{ref:t})))})),y=s.forwardRef(((e,t)=>{const{__scopeTabs:n,loop:r=!0,...u}=e,a=m("TabsList",n),c=p(n);return s.createElement(o.fC,(0,l.Z)({asChild:!0},c,{orientation:a.orientation,dir:a.dir,loop:r}),s.createElement(i.W.div,(0,l.Z)({role:"tablist","aria-orientation":a.orientation,dir:a.dir},u,{ref:t})))})),b=s.forwardRef(((e,t)=>{const{__scopeTabs:n,value:r,disabled:u=!1,...a}=e,f=m("TabsTrigger",n),d=p(n),h=w(f.baseId,r),v=T(f.baseId,r),y=r===f.value;return s.createElement(o.ck,(0,l.Z)({asChild:!0},d,{focusable:!u,active:y}),s.createElement(i.W.button,(0,l.Z)({type:"button",role:"tab","aria-selected":y,"aria-controls":v,"data-state":y?"active":"inactive","data-disabled":u?"":void 0,disabled:u,id:h},a,{ref:t,onMouseDown:(0,c.M)(e.onMouseDown,(e=>{u||0!==e.button||!1!==e.ctrlKey?e.preventDefault():f.onValueChange(r)})),onKeyDown:(0,c.M)(e.onKeyDown,(e=>{[" ","Enter"].includes(e.key)&&f.onValueChange(r)})),onFocus:(0,c.M)(e.onFocus,(()=>{const e="manual"!==f.activationMode;y||u||!e||f.onValueChange(r)}))})))})),g=s.forwardRef(((e,t)=>{const{__scopeTabs:n,value:r,children:o,...u}=e,a=m("TabsContent",n),c=w(a.baseId,r),f=T(a.baseId,r),d=r===a.value;return s.createElement(i.W.div,(0,l.Z)({"data-state":d?"active":"inactive","data-orientation":a.orientation,role:"tabpanel","aria-labelledby":c,hidden:!d,id:f,tabIndex:0},u,{ref:t}),d&&o)}));function w(e,t){return`${e}-trigger-${t}`}function T(e,t){return`${e}-content-${t}`}const _=v,I=y,j=b,E=g},2603:function(e){e.exports=function(e){function t(r){if(n[r])return n[r].exports;var o=n[r]={i:r,l:!1,exports:{}};return e[r].call(o.exports,o,o.exports,t),o.l=!0,o.exports}var n={};return t.m=e,t.c=n,t.i=function(e){return e},t.d=function(e,n,r){t.o(e,n)||Object.defineProperty(e,n,{configurable:!1,enumerable:!0,get:r})},t.n=function(e){var n=e&&e.__esModule?function(){return e.default}:function(){return e};return t.d(n,"a",n),n},t.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},t.p="",t(t.s=3)}([function(e,t){var n;n=function(){return this}();try{n=n||Function("return this")()||(0,eval)("this")}catch(e){"object"==typeof window&&(n=window)}e.exports=n},function(e,t,n){(function(t){!function(n){function r(){}function o(e,t){return function(){e.apply(t,arguments)}}function i(e){if(!(this instanceof i))throw new TypeError("Promises must be constructed via new");if("function"!=typeof e)throw new TypeError("not a function");this._state=0,this._handled=!1,this._value=void 0,this._deferreds=[],f(e,this)}function u(e,t){for(;3===e._state;)e=e._value;0!==e._state?(e._handled=!0,i._immediateFn((function(){var n=1===e._state?t.onFulfilled:t.onRejected;if(null!==n){var r;try{r=n(e._value)}catch(e){return void c(t.promise,e)}a(t.promise,r)}else(1===e._state?a:c)(t.promise,e._value)}))):e._deferreds.push(t)}function a(e,t){try{if(t===e)throw new TypeError("A promise cannot be resolved with itself.");if(t&&("object"==typeof t||"function"==typeof t)){var n=t.then;if(t instanceof i)return e._state=3,e._value=t,void s(e);if("function"==typeof n)return void f(o(n,t),e)}e._state=1,e._value=t,s(e)}catch(t){c(e,t)}}function c(e,t){e._state=2,e._value=t,s(e)}function s(e){2===e._state&&0===e._deferreds.length&&i._immediateFn((function(){e._handled||i._unhandledRejectionFn(e._value)}));for(var t=0,n=e._deferreds.length;t<n;t++)u(e,e._deferreds[t]);e._deferreds=null}function l(e,t,n){this.onFulfilled="function"==typeof e?e:null,this.onRejected="function"==typeof t?t:null,this.promise=n}function f(e,t){var n=!1;try{e((function(e){n||(n=!0,a(t,e))}),(function(e){n||(n=!0,c(t,e))}))}catch(e){if(n)return;n=!0,c(t,e)}}var d=setTimeout;i.prototype.catch=function(e){return this.then(null,e)},i.prototype.then=function(e,t){var n=new this.constructor(r);return u(this,new l(e,t,n)),n},i.all=function(e){return new i((function(t,n){function r(e,u){try{if(u&&("object"==typeof u||"function"==typeof u)){var a=u.then;if("function"==typeof a)return void a.call(u,(function(t){r(e,t)}),n)}o[e]=u,0==--i&&t(o)}catch(e){n(e)}}if(!e||void 0===e.length)throw new TypeError("Promise.all accepts an array");var o=Array.prototype.slice.call(e);if(0===o.length)return t([]);for(var i=o.length,u=0;u<o.length;u++)r(u,o[u])}))},i.resolve=function(e){return e&&"object"==typeof e&&e.constructor===i?e:new i((function(t){t(e)}))},i.reject=function(e){return new i((function(t,n){n(e)}))},i.race=function(e){return new i((function(t,n){for(var r=0,o=e.length;r<o;r++)e[r].then(t,n)}))},i._immediateFn="function"==typeof t&&function(e){t(e)}||function(e){d(e,0)},i._unhandledRejectionFn=function(e){"undefined"!=typeof console&&console&&console.warn("Possible Unhandled Promise Rejection:",e)},i._setImmediateFn=function(e){i._immediateFn=e},i._setUnhandledRejectionFn=function(e){i._unhandledRejectionFn=e},void 0!==e&&e.exports?e.exports=i:n.Promise||(n.Promise=i)}(this)}).call(t,n(8).setImmediate)},function(e,t,n){"use strict";function r(e){if(null===e||void 0===e)throw new TypeError("Object.assign cannot be called with null or undefined");return Object(e)}var o=Object.getOwnPropertySymbols,i=Object.prototype.hasOwnProperty,u=Object.prototype.propertyIsEnumerable;e.exports=function(){try{if(!Object.assign)return!1;var e=new String("abc");if(e[5]="de","5"===Object.getOwnPropertyNames(e)[0])return!1;for(var t={},n=0;n<10;n++)t["_"+String.fromCharCode(n)]=n;if("0123456789"!==Object.getOwnPropertyNames(t).map((function(e){return t[e]})).join(""))return!1;var r={};return"abcdefghijklmnopqrst".split("").forEach((function(e){r[e]=e})),"abcdefghijklmnopqrst"===Object.keys(Object.assign({},r)).join("")}catch(e){return!1}}()?Object.assign:function(e,t){for(var n,a,c=r(e),s=1;s<arguments.length;s++){for(var l in n=Object(arguments[s]))i.call(n,l)&&(c[l]=n[l]);if(o){a=o(n);for(var f=0;f<a.length;f++)u.call(n,a[f])&&(c[a[f]]=n[a[f]])}}return c}},function(e,t,n){"use strict";function r(e,t){return t.replace(/\[h\](.+?)\[\/h\]/g,(function(t,n){var r=document.createElement("div");return r.innerHTML=e,r.children[0].innerText=n,r.children[0].outerHTML}))}function o(e){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:"production";this.apiToken=e,this.environment=t}var i=n(5),u=(n(2),"undefined"!=typeof window&&window.Promise||n(1));o.prototype={search:function(e,t){t=Object.assign({highlightWith:'<strong class="highlight"></strong>',locale:null},t);var n="https://site-api.datocms.com/search-results?";n+="q="+encodeURIComponent(e),n+="&environment="+encodeURIComponent(this.environment),t.locale&&(n+="&locale="+encodeURIComponent(t.locale)),t.offset&&(n+="&offset="+encodeURIComponent(t.offset)),t.limit&&(n+="&limit="+encodeURIComponent(t.limit));var o={url:n,headers:{Authorization:"API-Token "+this.apiToken,Accept:"application/json"}},a=r.bind(null,t.highlightWith);return new u((function(e,t){i.ajax(o,(function(n,r){if(401!==n){var o=JSON.parse(r),i=o.data.map((function(e){var t=e.attributes.highlight;return{url:e.attributes.url,title:t.title?a(t.title[0]):e.attributes.title,body:t.body?"..."+t.body.map((function(e){return a(e.trim())})).join("...")+"...":e.attributes.body_excerpt,raw:{title:e.attributes.title,body:e.attributes.body_excerpt}}}));e({results:i,total:o.meta.total_count})}else t(new Error("[DatoCMS Site Search] Invalid API token: make sure the API token exists and has the proper permissions!"))}))}))}},e.exports=o},,function(e,t,n){(function(e){function n(t){return t&&e.XDomainRequest&&!/MSIE 1/.test(navigator.userAgent)?new XDomainRequest:e.XMLHttpRequest?new XMLHttpRequest:void 0}function r(e,t,n){e[t]=e[t]||n}var o=["responseType","withCredentials","timeout","onprogress"];t.ajax=function(t,i){function u(e,t){return function(){l||(i(void 0===f.status?e:f.status,0===f.status?"Error":f.response||f.responseText||t,f),l=!0)}}var a=t.headers||{},c=t.body,s=t.method||(c?"POST":"GET"),l=!1,f=n(t.cors);f.open(s,t.url,!0);var d=f.onload=u(200);f.onreadystatechange=function(){4===f.readyState&&d()},f.onerror=u(null,"Error"),f.ontimeout=u(null,"Timeout"),f.onabort=u(null,"Abort"),c&&(r(a,"X-Requested-With","XMLHttpRequest"),e.FormData&&c instanceof e.FormData||r(a,"Content-Type","application/x-www-form-urlencoded"));for(var p=0,h=o.length;p<h;p++)void 0!==t[m=o[p]]&&(f[m]=t[m]);for(var m in a)f.setRequestHeader(m,a[m]);return f.send(c),f}}).call(t,n(0))},function(e,t){function n(){throw new Error("setTimeout has not been defined")}function r(){throw new Error("clearTimeout has not been defined")}function o(e){if(l===setTimeout)return setTimeout(e,0);if((l===n||!l)&&setTimeout)return l=setTimeout,setTimeout(e,0);try{return l(e,0)}catch(t){try{return l.call(null,e,0)}catch(t){return l.call(this,e,0)}}}function i(e){if(f===clearTimeout)return clearTimeout(e);if((f===r||!f)&&clearTimeout)return f=clearTimeout,clearTimeout(e);try{return f(e)}catch(t){try{return f.call(null,e)}catch(t){return f.call(this,e)}}}function u(){m&&p&&(m=!1,p.length?h=p.concat(h):v=-1,h.length&&a())}function a(){if(!m){var e=o(u);m=!0;for(var t=h.length;t;){for(p=h,h=[];++v<t;)p&&p[v].run();v=-1,t=h.length}p=null,m=!1,i(e)}}function c(e,t){this.fun=e,this.array=t}function s(){}var l,f,d=e.exports={};!function(){try{l="function"==typeof setTimeout?setTimeout:n}catch(e){l=n}try{f="function"==typeof clearTimeout?clearTimeout:r}catch(e){f=r}}();var p,h=[],m=!1,v=-1;d.nextTick=function(e){var t=new Array(arguments.length-1);if(arguments.length>1)for(var n=1;n<arguments.length;n++)t[n-1]=arguments[n];h.push(new c(e,t)),1!==h.length||m||o(a)},c.prototype.run=function(){this.fun.apply(null,this.array)},d.title="browser",d.browser=!0,d.env={},d.argv=[],d.version="",d.versions={},d.on=s,d.addListener=s,d.once=s,d.off=s,d.removeListener=s,d.removeAllListeners=s,d.emit=s,d.prependListener=s,d.prependOnceListener=s,d.listeners=function(e){return[]},d.binding=function(e){throw new Error("process.binding is not supported")},d.cwd=function(){return"/"},d.chdir=function(e){throw new Error("process.chdir is not supported")},d.umask=function(){return 0}},function(e,t,n){(function(e,t){!function(e,n){"use strict";function r(e){"function"!=typeof e&&(e=new Function(""+e));for(var t=new Array(arguments.length-1),n=0;n<t.length;n++)t[n]=arguments[n+1];var r={callback:e,args:t};return s[c]=r,a(c),c++}function o(e){delete s[e]}function i(e){var t=e.callback,r=e.args;switch(r.length){case 0:t();break;case 1:t(r[0]);break;case 2:t(r[0],r[1]);break;case 3:t(r[0],r[1],r[2]);break;default:t.apply(n,r)}}function u(e){if(l)setTimeout(u,0,e);else{var t=s[e];if(t){l=!0;try{i(t)}finally{o(e),l=!1}}}}if(!e.setImmediate){var a,c=1,s={},l=!1,f=e.document,d=Object.getPrototypeOf&&Object.getPrototypeOf(e);d=d&&d.setTimeout?d:e,"[object process]"==={}.toString.call(e.process)?a=function(e){t.nextTick((function(){u(e)}))}:function(){if(e.postMessage&&!e.importScripts){var t=!0,n=e.onmessage;return e.onmessage=function(){t=!1},e.postMessage("","*"),e.onmessage=n,t}}()?function(){var t="setImmediate$"+Math.random()+"$",n=function(n){n.source===e&&"string"==typeof n.data&&0===n.data.indexOf(t)&&u(+n.data.slice(t.length))};e.addEventListener?e.addEventListener("message",n,!1):e.attachEvent("onmessage",n),a=function(n){e.postMessage(t+n,"*")}}():e.MessageChannel?function(){var e=new MessageChannel;e.port1.onmessage=function(e){u(e.data)},a=function(t){e.port2.postMessage(t)}}():f&&"onreadystatechange"in f.createElement("script")?function(){var e=f.documentElement;a=function(t){var n=f.createElement("script");n.onreadystatechange=function(){u(t),n.onreadystatechange=null,e.removeChild(n),n=null},e.appendChild(n)}}():a=function(e){setTimeout(u,0,e)},d.setImmediate=r,d.clearImmediate=o}}("undefined"==typeof self?void 0===e?this:e:self)}).call(t,n(0),n(6))},function(e,t,n){(function(e){function r(e,t){this._id=e,this._clearFn=t}var o=void 0!==e&&e||"undefined"!=typeof self&&self||window,i=Function.prototype.apply;t.setTimeout=function(){return new r(i.call(setTimeout,o,arguments),clearTimeout)},t.setInterval=function(){return new r(i.call(setInterval,o,arguments),clearInterval)},t.clearTimeout=t.clearInterval=function(e){e&&e.close()},r.prototype.unref=r.prototype.ref=function(){},r.prototype.close=function(){this._clearFn.call(o,this._id)},t.enroll=function(e,t){clearTimeout(e._idleTimeoutId),e._idleTimeout=t},t.unenroll=function(e){clearTimeout(e._idleTimeoutId),e._idleTimeout=-1},t._unrefActive=t.active=function(e){clearTimeout(e._idleTimeoutId);var t=e._idleTimeout;t>=0&&(e._idleTimeoutId=setTimeout((function(){e._onTimeout&&e._onTimeout()}),t))},n(7),t.setImmediate="undefined"!=typeof self&&self.setImmediate||void 0!==e&&e.setImmediate||this&&this.setImmediate,t.clearImmediate="undefined"!=typeof self&&self.clearImmediate||void 0!==e&&e.clearImmediate||this&&this.clearImmediate}).call(t,n(0))}])},1519:function(e,t,n){"use strict";n.d(t,{Z:function(){return u}});var r=n(2784);function o(e,t){return e===t}function i(e){return"function"===typeof e?function(){return e}:e}function u(e,t,n){var u=n&&n.equalityFn||o,a=function(e){var t=(0,r.useState)(i(e)),n=t[0],o=t[1];return[n,(0,r.useCallback)((function(e){return o(i(e))}),[])]}(e),c=a[0],s=a[1],l=function(e,t,n){var o=this,i=(0,r.useRef)(null),u=(0,r.useRef)(0),a=(0,r.useRef)(null),c=(0,r.useRef)([]),s=(0,r.useRef)(),l=(0,r.useRef)(),f=(0,r.useRef)(e),d=(0,r.useRef)(!0);f.current=e;var p=!t&&0!==t&&"undefined"!==typeof window;if("function"!==typeof e)throw new TypeError("Expected a function");t=+t||0;var h=!!(n=n||{}).leading,m=!("trailing"in n)||!!n.trailing,v="maxWait"in n,y=v?Math.max(+n.maxWait||0,t):null;(0,r.useEffect)((function(){return d.current=!0,function(){d.current=!1}}),[]);var b=(0,r.useMemo)((function(){var e=function(e){var t=c.current,n=s.current;return c.current=s.current=null,u.current=e,l.current=f.current.apply(n,t)},n=function(e,t){p&&cancelAnimationFrame(a.current),a.current=p?requestAnimationFrame(e):setTimeout(e,t)},r=function(e){if(!d.current)return!1;var n=e-i.current,r=e-u.current;return!i.current||n>=t||n<0||v&&r>=y},b=function(t){return a.current=null,m&&c.current?e(t):(c.current=s.current=null,l.current)},g=function(){var e=Date.now();if(r(e))return b(e);if(d.current){var o=e-i.current,a=e-u.current,c=t-o,s=v?Math.min(c,y-a):c;n(g,s)}},w=function(){for(var f=[],p=0;p<arguments.length;p++)f[p]=arguments[p];var m=Date.now(),y=r(m);if(c.current=f,s.current=o,i.current=m,y){if(!a.current&&d.current)return u.current=i.current,n(g,t),h?e(i.current):l.current;if(v)return n(g,t),e(i.current)}return a.current||n(g,t),l.current};return w.cancel=function(){a.current&&(p?cancelAnimationFrame(a.current):clearTimeout(a.current)),u.current=0,c.current=i.current=s.current=a.current=null},w.isPending=function(){return!!a.current},w.flush=function(){return a.current?b(Date.now()):l.current},w}),[h,v,t,y,m,p]);return b}((0,r.useCallback)((function(e){return s(e)}),[s]),t,n),f=(0,r.useRef)(e);return u(f.current,e)||(l(e),f.current=e),[c,l]}}}]);