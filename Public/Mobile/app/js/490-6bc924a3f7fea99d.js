"use strict";(self.webpackChunk_N_E=self.webpackChunk_N_E||[]).push([[490],{947:function(e,t,r){r.d(t,{Z:function(){return u}});var n=r(2322),i=r(6577),o=r(8887),a=r(3076),l=r(196),c=r(9482);function s(e,t,r){return t in e?Object.defineProperty(e,t,{value:r,enumerable:!0,configurable:!0,writable:!0}):e[t]=r,e}function u(e){var t=e.content,r=e.type,a=e.bitwise;return(0,n.jsxs)(h,{type:r,children:[(0,n.jsx)(m,{children:(0,n.jsx)(o.f,{ratio:1,children:(0,n.jsx)(i.default,{src:t.image.url,alt:t.image.alt,layout:"fill",objectFit:"cover",objectPosition:"center"})})}),(0,n.jsxs)(f,{children:[(0,n.jsx)(l.D,{html:"h4",level:"h4",margin:"05",color:"gray900",children:t.name}),t.title&&(0,n.jsxs)(l.D,{html:"h6",level:"h5",margin:"1",color:"gray600",children:[t.title," ",a&&" at Bitwise"]}),t.bio&&(0,n.jsx)(c.Z,{content:t.bio})]})]})}var d,f=(0,a.z)("div",{display:"flex",flexDirection:"column",alignItems:"flex-start"}),m=(0,a.z)("div",{width:"auto"}),h=(0,a.z)("div",{display:"flex",variants:{type:{card:(d={flexDirection:"column"},s(d,"".concat(m),{width:"100%"}),s(d,"".concat(f),{marginTop:"2rem"}),d),block:s({alignItems:"flex-start",flexDirection:"row",justifyContent:"flex-start",gap:"1rem"},"".concat(m),{width:"64px",flex:"64px 0 0",overflow:"hidden",borderRadius:"$round"})}}})},3629:function(e,t,r){r.d(t,{Z:function(){return g}});var n=r(4776),i=r.n(n),o=r(2322),a=r(2784),l=r(3176),c=r(3076),s=r(1268),u=r(7870),d=r(1917),f=r(196),m=r(867);function h(e,t,r,n,i,o,a){try{var l=e[o](a),c=l.value}catch(s){return void r(s)}l.done?t(c):Promise.resolve(c).then(n,i)}function p(e){return function(){var t=this,r=arguments;return new Promise((function(n,i){var o=e.apply(t,r);function a(e){h(o,n,i,a,l,"next",e)}function l(e){h(o,n,i,a,l,"throw",e)}a(void 0)}))}}function g(){var e=a.createRef(),t=(0,a.useState)(""),r=t[0],n=t[1],c=(0,a.useState)(),u=c[0],h=c[1],g=(0,a.useState)(!1),x=g[0],j=g[1],w=(0,a.useState)(!1),O=w[0],S=w[1],D=function(){var t=p(i().mark((function t(r){return i().wrap((function(t){for(;;)switch(t.prev=t.next){case 0:r.preventDefault(),e.current.execute();case 2:case"end":return t.stop()}}),t)})));return function(e){return t.apply(this,arguments)}}(),k=function(){var e=p(i().mark((function e(t){return i().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return e.abrupt("return",new Promise(function(){var e=p(i().mark((function e(o,a){var l,c;return i().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:if(t){e.next=2;break}return e.abrupt("return");case 2:return e.prev=2,S(!0),e.next=6,fetch("/api/emailSignup",{method:"POST",body:JSON.stringify({email:r,pageUri:u,captcha:t}),headers:{"Content-Type":"application/json"}});case 6:if(!(l=e.sent).ok){e.next=11;break}S(!1),j(!0),n(""),window.dataLayer=window.dataLayer||[],window.dataLayer.push({event:"gtm_formSubmit",formId:"Stay in the Know"}),e.next=17;break;case 11:return console.log("bad recaptcha and email response"),S(!1),e.next=15,l.json();case 15:throw c=e.sent,new Error(c.message);case 17:e.next=23;break;case 19:e.prev=19,e.t0=e.catch(2),S(!1),alert((null===e.t0||void 0===e.t0?void 0:e.t0.message)||"Something went wrong");case 23:return e.prev=23,console.log("in finally"),e.finish(23);case 26:case"end":return e.stop()}}),e,null,[[2,19,23,26]])})));return function(t,r){return e.apply(this,arguments)}}()));case 1:case"end":return e.stop()}}),e)})));return function(t){return e.apply(this,arguments)}}();return(0,a.useEffect)((function(){h(window.location.href)}),[]),(0,o.jsx)(o.Fragment,{children:x?(0,o.jsxs)(b,{children:[(0,o.jsx)(f.D,{level:"h4",html:"h3",color:"gray900",margin:"05",align:"center",children:"Thank you."}),(0,o.jsx)(f.D,{html:"p",level:"p",color:"gray700",align:"center",children:"We've added you to our research reports and newsletter lists."})]}):(0,o.jsxs)(v,{onSubmit:D,children:[(0,o.jsx)(d.Z,{htmlFor:"email",children:"Email Address"}),(0,o.jsx)(s.Z,{name:"email",id:"email",type:"email",placeholder:"Email Address",required:!0,value:r,onChange:function(e){return n(e.target.value)}}),(0,o.jsx)(l.Z,{ref:e,size:"invisible",sitekey:"6LcSIk8fAAAAAJDwIQvQfZfkaHsUvdndd_qZ9AIf",onErrored:function(e){return console.error("Recaptcha error: ".concat(e))},onChange:k}),(0,o.jsx)(y,{type:"submit",disabled:O,children:O?"Submitting":"Submit"}),(0,o.jsx)(m.Z,{type:"email"})]})})}var v=(0,c.z)(u.Z,{position:"relative"}),y=(0,c.z)("button",{background:"transparent",border:"none",borderRadius:"$roundedSm",color:"$primary",cursor:"pointer",fontFamily:"$paragraph",fontWeight:"500",position:"absolute",padding:"0.5rem 1rem",right:"0.5rem",top:"0.5rem",textTransform:"uppercase",transition:"$transitionBase","&:hover":{background:"$gray300",color:"$brand600"}}),b=(0,c.z)("div",{background:"$gray100",padding:"2rem 1rem",borderRadius:"$roundedSm",width:"100%"})},6564:function(e,t,r){r.d(t,{Z:function(){return W}});var n=r(2322),i=r(2784),o=r(9257),a=r(3866),l=r(3076),c=r(9575),s=r(1816),u=r(2331),d=r(6215),f=r(4540),m=r(7896);const[h,p]=(0,f.b)("AlertDialog",[u.p8]),g=(0,u.p8)(),v=i.forwardRef(((e,t)=>{const{__scopeAlertDialog:r,...n}=e,o=g(r);return i.createElement(u.aV,(0,m.Z)({},o,n,{ref:t}))})),[y,b]=h("AlertDialogContent"),x=i.forwardRef(((e,t)=>{const{__scopeAlertDialog:r,children:n,...o}=e,a=g(r),l=i.useRef(null),f=(0,d.e)(t,l),h=i.useRef(null);return i.createElement(u.jm,{contentName:"AlertDialogContent",titleName:j,docsSlug:"alert-dialog"},i.createElement(y,{scope:r,cancelRef:h},i.createElement(u.VY,(0,m.Z)({role:"alertdialog"},a,o,{ref:f,onOpenAutoFocus:(0,s.M)(o.onOpenAutoFocus,(e=>{var t;e.preventDefault(),null===(t=h.current)||void 0===t||t.focus({preventScroll:!0})})),onPointerDownOutside:e=>e.preventDefault(),onInteractOutside:e=>e.preventDefault()}),i.createElement(c.A4,null,n),!1)))})),j="AlertDialogTitle",w=i.forwardRef(((e,t)=>{const{__scopeAlertDialog:r,...n}=e,o=g(r);return i.createElement(u.x8,(0,m.Z)({},o,n,{ref:t}))})),O=e=>{const{__scopeAlertDialog:t,...r}=e,n=g(t);return i.createElement(u.fC,(0,m.Z)({},n,r,{modal:!0}))},S=e=>{const{__scopeAlertDialog:t,...r}=e,n=g(t);return i.createElement(u.h_,(0,m.Z)({},n,r))},D=v,k=x,_=w;function A(e,t,r){return t in e?Object.defineProperty(e,t,{value:r,enumerable:!0,configurable:!0,writable:!0}):e[t]=r,e}function z(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{},n=Object.keys(r);"function"===typeof Object.getOwnPropertySymbols&&(n=n.concat(Object.getOwnPropertySymbols(r).filter((function(e){return Object.getOwnPropertyDescriptor(r,e).enumerable})))),n.forEach((function(t){A(e,t,r[t])}))}return e}function C(e,t){if(null==e)return{};var r,n,i=function(e,t){if(null==e)return{};var r,n,i={},o=Object.keys(e);for(n=0;n<o.length;n++)r=o[n],t.indexOf(r)>=0||(i[r]=e[r]);return i}(e,t);if(Object.getOwnPropertySymbols){var o=Object.getOwnPropertySymbols(e);for(n=0;n<o.length;n++)r=o[n],t.indexOf(r)>=0||Object.prototype.propertyIsEnumerable.call(e,r)&&(i[r]=e[r])}return i}var I=(0,a.F4)({"0%":{opacity:0},"100%":{opacity:.75}}),P=(0,l.z)(D,{backgroundColor:"$gray900",position:"fixed",inset:0,"@media (prefers-reduced-motion: no-preference)":{animation:"".concat(I," 150ms cubic-bezier(0.16, 1, 0.3, 1) forwards")}}),E=(0,l.z)("div",{display:"flex",flexDirection:"column",position:"fixed",alignItems:"center",top:"0",left:"0",width:"100vw",height:"100vh",backgroundColor:"rgb(0 0 0/.2)",backdropFilter:"blur(2px)",padding:"2rem 1rem 1rem","@md":{padding:"5vh"},"@lg":{justifyContent:"center",padding:"7vh 5vh"},"@xl":{padding:"10vh 8vh"}}),Z=(0,l.z)(k,{background:"linear-gradient(105.53deg, #2C2C2C 0%, #000000 100.38%)",margin:"0 auto",display:"flex",alignItems:"flex-start",justifyContent:"flex-start",minHeight:"0",flexDirection:"column",width:"100%",overflow:"auto",maxWidth:"100rem",padding:"4rem 2rem","&:focus":{outline:"none"},"@lg":{padding:"8vh"},"@xl":{padding:"10vh"}});var $=O,F=function(e){var t=e.children,r=C(e,["children"]);return(0,n.jsxs)(S,{children:[(0,n.jsx)(P,{}),(0,n.jsx)(E,{children:(0,n.jsx)(Z,z({},r,{children:t}))})]})},R=_,L=r(9757),T=r(5385),B=r(8346),N=r(196);function U(e,t){(null==t||t>e.length)&&(t=e.length);for(var r=0,n=new Array(t);r<t;r++)n[r]=e[r];return n}function H(e,t){return function(e){if(Array.isArray(e))return e}(e)||function(e,t){var r=null==e?null:"undefined"!==typeof Symbol&&e[Symbol.iterator]||e["@@iterator"];if(null!=r){var n,i,o=[],a=!0,l=!1;try{for(r=r.call(e);!(a=(n=r.next()).done)&&(o.push(n.value),!t||o.length!==t);a=!0);}catch(c){l=!0,i=c}finally{try{a||null==r.return||r.return()}finally{if(l)throw i}}return o}}(e,t)||function(e,t){if(!e)return;if("string"===typeof e)return U(e,t);var r=Object.prototype.toString.call(e).slice(8,-1);"Object"===r&&e.constructor&&(r=e.constructor.name);if("Map"===r||"Set"===r)return Array.from(r);if("Arguments"===r||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r))return U(e,t)}(e,t)||function(){throw new TypeError("Invalid attempt to destructure non-iterable instance.\\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}function W(e){var t=e.updateAttestation,r=(0,i.useState)(!1),a=(r[0],r[1]),l=H((0,o.Z)(["advisor_modal_accepted"]),3),c=l[0],s=l[1],u=(l[2],(0,i.useState)(!1)),d=u[0],f=u[1],m=(0,i.useState)("true"!==c.advisor_modal_accepted),h=m[0],p=(m[1],function(){a(!0),s("advisor_modal_accepted","true")});return(0,i.useEffect)((function(){f("true"===c.advisor_modal_accepted),t(d)}),[d,t,p]),(0,n.jsxs)(n.Fragment,{children:["true"===c.advisor_modal_accepted&&(0,n.jsx)(q,{children:(0,n.jsxs)(Y,{children:[(0,n.jsx)(N.D,{html:"p",level:"p",color:"gray800",children:"You are viewing the site as a Financial Professional."}),(0,n.jsx)(J,{href:"/",onClick:function(){a(!1),s("advisor_modal_accepted","false")},children:"Click here if you are not a Financial Professional."})]})}),(0,n.jsx)($,{defaultOpen:h,children:(0,n.jsxs)(F,{children:[(0,n.jsx)(M,{children:(0,n.jsx)(B.Z,{color:"light"})}),(0,n.jsx)(N.D,{html:"h2",level:"h2",color:"gray100",margin:"1",children:"Please confirm your investor type to help us deliver the site experience most relevant to you."}),(0,n.jsx)(N.D,{html:"p",level:"p",color:"gray300",margin:"3",children:"I confirm that I am a Financial Professional, resident in the United States, and the following pages may be shown to me under the laws of my jurisdiction. This website is not designed for the general public. The website contains information about the services offered by Bitwise to sophisticated investors in the United States that meet certain suitability and qualification standards, and is designed solely for the use of such investors (including their advisers and representatives)."}),(0,n.jsxs)(Q,{children:[(0,n.jsx)(R,{asChild:!0,children:(0,n.jsx)(L.X,{onCheckedChange:p})}),(0,n.jsx)(V,{children:"Yes, I am a financial professional. I invest on behalf of my client."})]}),(0,n.jsx)(N.D,{html:"h5",level:"h5",color:"gray400",margin:"1",children:"If this does not apply to you:"}),(0,n.jsx)(T.Z,{as:"a",href:"/",size:"md",children:"Return Home"})]})})]})}var q=(0,l.z)("div",{backgroundColor:"$gray100",position:"fixed",top:"0",right:"0",left:"0",margin:"0 auto",zIndex:"$zNavWrapper",width:"100vw",height:"4rem","@md":{height:"2.75rem"}}),Y=(0,l.z)("div",{padding:"0.5rem 0.5rem",flexDirection:"column",display:"flex",justifyContent:"center",alignItems:"center",gap:"0.125rem","@lg":{gap:"0.5rem",flexDirection:"row"}}),J=(0,l.z)("a",{color:"$primary",textDecoration:"underline","@md":{fontSize:"1rem"},"&:hover":{color:"$brand600"}}),M=(0,l.z)("div",{marginBottom:"1rem","@xl":{marginBottom:"1.5rem"}}),Q=(0,l.z)("div",{alignItems:"center",display:"flex",gap:"1rem",marginBottom:"2rem",justifyContent:"flex-start"}),V=(0,l.z)("label",{color:"white",fontFamily:"$heading",fontSize:"1rem",lineHeight:"1.25","@md":{fontSize:"1.5rem"}})},7870:function(e,t,r){r.d(t,{Z:function(){return a}});var n=r(2322);function i(e,t,r){return t in e?Object.defineProperty(e,t,{value:r,enumerable:!0,configurable:!0,writable:!0}):e[t]=r,e}function o(e,t){if(null==e)return{};var r,n,i=function(e,t){if(null==e)return{};var r,n,i={},o=Object.keys(e);for(n=0;n<o.length;n++)r=o[n],t.indexOf(r)>=0||(i[r]=e[r]);return i}(e,t);if(Object.getOwnPropertySymbols){var o=Object.getOwnPropertySymbols(e);for(n=0;n<o.length;n++)r=o[n],t.indexOf(r)>=0||Object.prototype.propertyIsEnumerable.call(e,r)&&(i[r]=e[r])}return i}function a(e){var t=e.children,r=o(e,["children"]);return(0,n.jsx)(l,function(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{},n=Object.keys(r);"function"===typeof Object.getOwnPropertySymbols&&(n=n.concat(Object.getOwnPropertySymbols(r).filter((function(e){return Object.getOwnPropertyDescriptor(r,e).enumerable})))),n.forEach((function(t){i(e,t,r[t])}))}return e}({},r,{children:t}))}var l=(0,r(3076).z)("form",{alignItems:"flex-start",display:"flex",flexDirection:"column",gap:"1rem",width:"100%"})},7145:function(e,t,r){r.d(t,{Z:function(){return s},u:function(){return u}});var n=r(8879),i=r.n(n),o=r(3147),a=r(264),l=r(7338),c=r(7449);function s(e){return i()(e).format("LLL z")}function u(e){return i()(e).format("LL")}i().extend(o),i().extend(c),i().extend(a),i().extend(l)}}]);