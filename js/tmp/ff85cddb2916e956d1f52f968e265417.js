if(window.console&&window.console.log){
window.console.log('Closure Compiler Stats:\n-----------------------\nOriginal Size: 22819\nOriginal Gzip Size: 7191\nCompressed Size: 21959\nCompressed Gzip Size: 7019\nCompile Time: 0\nGenerated: 2014/02/28 04:28:57 MST');
}

CLOSURE_NO_DEPS=true;function close_menu(){document.getElementById("settings").style.display="none",document.getElementById("overlay").style.display="none"}function close_bar(e){document.getElementById("notifications").style.display="none",e.style.display="none"}function setting_menu(){document.getElementById("settings").style.display="block",document.getElementById("overlay").style.display="block"}
function mast_head(e){"up"==e.className?(e.className="down",document.getElementById("banner").style.display="block"):"down"==e.className?(e.className="up",document.getElementById("banner").style.display="none"):("down"==e.className,document.getElementById("banner").style.display="block")}function ShowLogin(e){e.parentNode.removeChild(e),document.getElementById("g_login").style.visibility="visible"}
function parse_theme(e){for(var t=document.getElementById("select").length,n=0;t>n;n++)document.getElementById("select").options[n].value==e&&(document.getElementById("select").selectedIndex=n,selectTheme(),ThemeCookie(e))}function getCookie(e){var t,n,r,i=document.cookie.split(";");for(t=0;t<i.length;t++)if(n=i[t].substr(0,i[t].indexOf("=")),r=i[t].substr(i[t].indexOf("=")+1),n=n.replace(/^\s|\s+$/g,""),n==e)return unescape(r)}
function ThemeCookie(e){var t=getCookie("codeTheme");document.cookie=null!=t&&""!=t?"codeTheme ="+e+";path=/":"codeTheme ="+e+";path=/"}function str_obf(e){var t="";for(var n=0;n<e.length;n++){var r=e.charCodeAt(n).toString(16);if(r.length==1)r="0"+r;t+=""+r}return t}
function notifications(){var e=document.getElementById("notifications");var o=document.getElementById("notification_overlay");if(e.style.display=="block"){e.style.display="none";o.style.display="none"}else{e.style.display="block";o.style.display="block"}return true}function q(){alertify.log("Insufficient privileges","error",2E3);return false}
!function(a,b){var c,d=a.document;c=function(){var c,e,f,g,h,i,j,k,l,m,n,o,p,q={},r={},s=!1,t={ENTER:13,ESC:27,SPACE:32},u=[];return r={buttons:{holder:'<nav class="alertify-buttons">{{buttons}}</nav>',submit:'<button type="submit" class="alertify-button alertify-button-ok" id="alertify-ok">{{ok}}</button>',ok:'<button class="alertify-button alertify-button-ok" id="alertify-ok">{{ok}}</button>',cancel:'<button class="alertify-button alertify-button-cancel" id="alertify-cancel">{{cancel}}</button>'},
input:'<div class="alertify-text-wrapper"><input type="text" class="alertify-text" id="alertify-text"></div>',message:'<p class="alertify-message">{{message}}</p>',log:'<article class="alertify-log{{class}}">{{message}}</article>'},p=function(){var a,c,e=!1,f=d.createElement("fakeelement"),g={WebkitTransition:"webkitTransitionEnd",MozTransition:"transitionend",OTransition:"otransitionend",transition:"transitionend"};for(a in g)if(f.style[a]!==b){c=g[a],e=!0;break}return{type:c,supported:e}},c=function(a){return d.getElementById(a)},
q={labels:{ok:"OK",cancel:"Cancel"},delay:5E3,buttonReverse:!1,buttonFocus:"ok",transition:b,addListeners:function(a){var b,c,i,j,k,l="undefined"!=typeof f,m="undefined"!=typeof e,n="undefined"!=typeof o,p="",q=this;b=function(b){return"undefined"!=typeof b.preventDefault&&b.preventDefault(),i(b),"undefined"!=typeof o&&(p=o.value),"function"==typeof a&&("undefined"!=typeof o?a(!0,p):a(!0)),!1},c=function(b){return"undefined"!=typeof b.preventDefault&&b.preventDefault(),i(b),"function"==typeof a&&
a(!1),!1},i=function(){q.hide(),q.unbind(d.body,"keyup",j),q.unbind(g,"focus",k),l&&q.unbind(f,"click",b),m&&q.unbind(e,"click",c)},j=function(a){var d=a.keyCode;(d===t.SPACE&&!n||n&&d===t.ENTER)&&b(a),d===t.ESC&&(m&&c(a))},k=function(){n?o.focus():!m||q.buttonReverse?f.focus():e.focus()},this.bind(g,"focus",k),this.bind(h,"focus",k),l&&this.bind(f,"click",b),m&&this.bind(e,"click",c),this.bind(d.body,"keyup",j),this.transition.supported||this.setFocus()},bind:function(a,b,c){"function"==typeof a.addEventListener?
a.addEventListener(b,c,!1):a.attachEvent&&a.attachEvent("on"+b,c)},handleErrors:function(){if("undefined"!=typeof a.onerror){var b=this;return a.onerror=function(a,c,d){b.error("["+a+" on line "+d+" of "+c+"]",0)},!0}return!1},appendButtons:function(a,b){return this.buttonReverse?b+a:a+b},build:function(a){var b="",c=a.type,d=a.message,e=a.cssClass||"";switch(b+='<div class="alertify-dialog">',b+='<a id="alertify-resetFocusBack" class="alertify-resetFocus" href="#">Reset Focus</a>',"none"===q.buttonFocus&&
(b+='<a href="#" id="alertify-noneFocus" class="alertify-hidden"></a>'),"prompt"===c&&(b+='<div id="alertify-form">'),b+='<article class="alertify-inner">',b+=r.message.replace("{{message}}",d),"prompt"===c&&(b+=r.input),b+=r.buttons.holder,b+="</article>","prompt"===c&&(b+="</div>"),b+='<a id="alertify-resetFocus" class="alertify-resetFocus" href="#">Reset Focus</a>',b+="</div>",c){case "confirm":b=b.replace("{{buttons}}",this.appendButtons(r.buttons.cancel,r.buttons.ok)),b=b.replace("{{ok}}",this.labels.ok).replace("{{cancel}}",
this.labels.cancel);break;case "prompt":b=b.replace("{{buttons}}",this.appendButtons(r.buttons.cancel,r.buttons.submit)),b=b.replace("{{ok}}",this.labels.ok).replace("{{cancel}}",this.labels.cancel);break;case "alert":b=b.replace("{{buttons}}",r.buttons.ok),b=b.replace("{{ok}}",this.labels.ok)}return l.className="alertify alertify-"+c+" "+e,k.className="alertify-cover",b},close:function(a,b){var c,d,e=b&&!isNaN(b)?+b:this.delay,f=this;this.bind(a,"click",function(){c(a)}),d=function(a){a.stopPropagation(),
f.unbind(this,f.transition.type,d),m.removeChild(this),m.hasChildNodes()||(m.className+=" alertify-logs-hidden")},c=function(a){"undefined"!=typeof a&&(a.parentNode===m&&(f.transition.supported?(f.bind(a,f.transition.type,d),a.className+=" alertify-log-hide"):(m.removeChild(a),m.hasChildNodes()||(m.className+=" alertify-logs-hidden"))))},0!==b&&setTimeout(function(){c(a)},e)},dialog:function(a,b,c,e,f){j=d.activeElement;var g=function(){m&&(null!==m.scrollTop&&(k&&null!==k.scrollTop))||g()};if("string"!=
typeof a)throw new Error("message must be a string");if("string"!=typeof b)throw new Error("type must be a string");if("undefined"!=typeof c&&"function"!=typeof c)throw new Error("fn must be a function");return this.init(),g(),u.push({type:b,message:a,callback:c,placeholder:e,cssClass:f}),s||this.setup(),this},extend:function(a){if("string"!=typeof a)throw new Error("extend method must have exactly one paramter");return function(b,c){return this.log(b,a,c),this}},hide:function(){var a,b=this;u.splice(0,
1),u.length>0?this.setup(!0):(s=!1,a=function(c){c.stopPropagation(),b.unbind(l,b.transition.type,a)},this.transition.supported?(this.bind(l,this.transition.type,a),l.className="alertify alertify-hide alertify-hidden"):l.className="alertify alertify-hide alertify-hidden alertify-isHidden",k.className="alertify-cover alertify-cover-hidden",j.focus())},init:function(){d.createElement("nav"),d.createElement("article"),d.createElement("section"),null==c("alertify-cover")&&(k=d.createElement("div"),k.setAttribute("id",
"alertify-cover"),k.className="alertify-cover alertify-cover-hidden",d.body.appendChild(k)),null==c("alertify")&&(s=!1,u=[],l=d.createElement("section"),l.setAttribute("id","alertify"),l.className="alertify alertify-hidden",d.body.appendChild(l)),null==c("alertify-logs")&&(m=d.createElement("section"),m.setAttribute("id","alertify-logs"),m.className="alertify-logs alertify-logs-hidden",d.body.appendChild(m)),d.body.setAttribute("tabindex","0"),this.transition=p()},log:function(a,b,c){var d=function(){m&&
null!==m.scrollTop||d()};return this.init(),d(),m.className="alertify-logs",this.notify(a,b,c),this},notify:function(a,b,c){var e=d.createElement("article");e.className="alertify-log"+("string"==typeof b&&""!==b?" alertify-log-"+b:""),e.innerHTML=a,m.appendChild(e),setTimeout(function(){e.className=e.className+" alertify-log-show"},50),this.close(e,c)},set:function(a){var b;if("object"!=typeof a&&a instanceof Array)throw new Error("args must be an object");for(b in a)a.hasOwnProperty(b)&&(this[b]=
a[b])},setFocus:function(){o?(o.focus(),o.select()):i.focus()},setup:function(a){var d,j=u[0],k=this;s=!0,d=function(a){a.stopPropagation(),k.setFocus(),k.unbind(l,k.transition.type,d)},this.transition.supported&&(!a&&this.bind(l,this.transition.type,d)),l.innerHTML=this.build(j),g=c("alertify-resetFocus"),h=c("alertify-resetFocusBack"),f=c("alertify-ok")||b,e=c("alertify-cancel")||b,i="cancel"===q.buttonFocus?e:"none"===q.buttonFocus?c("alertify-noneFocus"):f,o=c("alertify-text")||b,n=c("alertify-form")||
b,"string"==typeof j.placeholder&&(""!==j.placeholder&&(o.value=j.placeholder)),a&&this.setFocus(),this.addListeners(j.callback)},unbind:function(a,b,c){"function"==typeof a.removeEventListener?a.removeEventListener(b,c,!1):a.detachEvent&&a.detachEvent("on"+b,c)}},{alert:function(a,b,c){return q.dialog(a,"alert",b,"",c),this},confirm:function(a,b,c){return q.dialog(a,"confirm",b,"",c),this},extend:q.extend,init:q.init,log:function(a,b,c){return q.log(a,b,c),this},prompt:function(a,b,c,d){return q.dialog(a,
"prompt",b,c,d),this},success:function(a,b){return q.log(a,"success",b),this},error:function(a,b){return q.log(a,"error",b),this},set:function(a){q.set(a)},labels:q.labels,debug:q.handleErrors}},"function"==typeof define?define([],function(){return new c}):"undefined"==typeof a.alertify&&(a.alertify=new c)}(this);function formhash(e,t){var n=document.createElement("input");e.appendChild(n);n.name="p";n.type="hidden";n.value=hex_sha512(t.value);t.value="";e.submit()}CLOSURE_NO_DEPS=true;
function close_menu(){document.getElementById("settings").style.display="none",document.getElementById("overlay").style.display="none"}function close_bar(e){document.getElementById("notifications").style.display="none",e.style.display="none"}function setting_menu(){document.getElementById("settings").style.display="block",document.getElementById("overlay").style.display="block"}
function mast_head(e){"up"==e.className?(e.className="down",document.getElementById("banner").style.display="block"):"down"==e.className?(e.className="up",document.getElementById("banner").style.display="none"):("down"==e.className,document.getElementById("banner").style.display="block")}function ShowLogin(e){e.parentNode.removeChild(e),document.getElementById("g_login").style.visibility="visible"}
function parse_theme(e){for(var t=document.getElementById("select").length,n=0;t>n;n++)document.getElementById("select").options[n].value==e&&(document.getElementById("select").selectedIndex=n,selectTheme(),ThemeCookie(e))}function getCookie(e){var t,n,r,i=document.cookie.split(";");for(t=0;t<i.length;t++)if(n=i[t].substr(0,i[t].indexOf("=")),r=i[t].substr(i[t].indexOf("=")+1),n=n.replace(/^\s|\s+$/g,""),n==e)return unescape(r)}
function ThemeCookie(e){var t=getCookie("codeTheme");document.cookie=null!=t&&""!=t?"codeTheme ="+e+";path=/":"codeTheme ="+e+";path=/"}function str_obf(e){var t="";for(var n=0;n<e.length;n++){var r=e.charCodeAt(n).toString(16);if(r.length==1)r="0"+r;t+=""+r}return t}
function notifications(){var e=document.getElementById("notifications");var o=document.getElementById("notification_overlay");if(e.style.display=="block"){e.style.display="none";o.style.display="none"}else{e.style.display="block";o.style.display="block"}return true}function q(){alertify.log("Insufficient privileges","error",2E3);return false}function hex_sha512(a){return rstr2hex(rstr_sha512(str2rstr_utf8(a)))}function b64_sha512(a){return rstr2b64(rstr_sha512(str2rstr_utf8(a)))}
function any_sha512(a,b){return rstr2any(rstr_sha512(str2rstr_utf8(a)),b)}function hex_hmac_sha512(a,b){return rstr2hex(rstr_hmac_sha512(str2rstr_utf8(a),str2rstr_utf8(b)))}function b64_hmac_sha512(a,b){return rstr2b64(rstr_hmac_sha512(str2rstr_utf8(a),str2rstr_utf8(b)))}function any_hmac_sha512(a,b,c){return rstr2any(rstr_hmac_sha512(str2rstr_utf8(a),str2rstr_utf8(b)),c)}
function sha512_vm_test(){return"ddaf35a193617abacc417349ae20413112e6fa4e89a97ea20a9eeee64b55d39a2192992a274fc1a836ba3c23a3feebbd454d4423643ce80e2a9ac94fa54ca49f"==hex_sha512("abc").toLowerCase()}function rstr_sha512(a){return binb2rstr(binb_sha512(rstr2binb(a),8*a.length))}
function rstr_hmac_sha512(a,b){var c=rstr2binb(a);c.length>32&&(c=binb_sha512(c,8*a.length));for(var d=Array(32),e=Array(32),f=0;32>f;f++)d[f]=909522486^c[f],e[f]=1549556828^c[f];var g=binb_sha512(d.concat(rstr2binb(b)),1024+8*b.length);return binb2rstr(binb_sha512(e.concat(g),1536))}function rstr2hex(a){try{}catch(b){hexcase=0}for(var e,c=hexcase?"0123456789ABCDEF":"0123456789abcdef",d="",f=0;f<a.length;f++)e=a.charCodeAt(f),d+=c.charAt(15&e>>>4)+c.charAt(15&e);return d}
function rstr2b64(a){try{}catch(b){b64pad=""}for(var c="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/",d="",e=a.length,f=0;e>f;f+=3)for(var g=a.charCodeAt(f)<<16|(e>f+1?a.charCodeAt(f+1)<<8:0)|(e>f+2?a.charCodeAt(f+2):0),h=0;4>h;h++)d+=8*f+6*h>8*a.length?b64pad:c.charAt(63&g>>>6*(3-h));return d}
function rstr2any(a,b){var d,e,f,g,h,c=b.length,i=Array(Math.ceil(a.length/2));for(d=0;d<i.length;d++)i[d]=a.charCodeAt(2*d)<<8|a.charCodeAt(2*d+1);var j=Math.ceil(8*a.length/(Math.log(b.length)/Math.log(2))),k=Array(j);for(e=0;j>e;e++){for(h=Array(),g=0,d=0;d<i.length;d++)g=(g<<16)+i[d],f=Math.floor(g/c),g-=f*c,(h.length>0||f>0)&&(h[h.length]=f);k[e]=g,i=h}var l="";for(d=k.length-1;d>=0;d--)l+=b.charAt(k[d]);return l}
function str2rstr_utf8(a){for(var d,e,b="",c=-1;++c<a.length;)d=a.charCodeAt(c),e=c+1<a.length?a.charCodeAt(c+1):0,d>=55296&&(56319>=d&&(e>=56320&&(57343>=e&&(d=65536+((1023&d)<<10)+(1023&e),c++)))),127>=d?b+=String.fromCharCode(d):2047>=d?b+=String.fromCharCode(192|31&d>>>6,128|63&d):65535>=d?b+=String.fromCharCode(224|15&d>>>12,128|63&d>>>6,128|63&d):2097151>=d&&(b+=String.fromCharCode(240|7&d>>>18,128|63&d>>>12,128|63&d>>>6,128|63&d));return b}
function str2rstr_utf16le(a){for(var b="",c=0;c<a.length;c++)b+=String.fromCharCode(255&a.charCodeAt(c),255&a.charCodeAt(c)>>>8);return b}function str2rstr_utf16be(a){for(var b="",c=0;c<a.length;c++)b+=String.fromCharCode(255&a.charCodeAt(c)>>>8,255&a.charCodeAt(c));return b}function rstr2binb(a){for(var b=Array(a.length>>2),c=0;c<b.length;c++)b[c]=0;for(var c=0;c<8*a.length;c+=8)b[c>>5]|=(255&a.charCodeAt(c/8))<<24-c%32;return b}
function binb2rstr(a){for(var b="",c=0;c<32*a.length;c+=8)b+=String.fromCharCode(255&a[c>>5]>>>24-c%32);return b}
function binb_sha512(a,b){void 0==sha512_k&&(sha512_k=new Array(new int64(1116352408,-685199838),new int64(1899447441,602891725),new int64(-1245643825,-330482897),new int64(-373957723,-2121671748),new int64(961987163,-213338824),new int64(1508970993,-1241133031),new int64(-1841331548,-1357295717),new int64(-1424204075,-630357736),new int64(-670586216,-1560083902),new int64(310598401,1164996542),new int64(607225278,1323610764),new int64(1426881987,-704662302),new int64(1925078388,-226784913),new int64(-2132889090,
991336113),new int64(-1680079193,633803317),new int64(-1046744716,-815192428),new int64(-459576895,-1628353838),new int64(-272742522,944711139),new int64(264347078,-1953704523),new int64(604807628,2007800933),new int64(770255983,1495990901),new int64(1249150122,1856431235),new int64(1555081692,-1119749164),new int64(1996064986,-2096016459),new int64(-1740746414,-295247957),new int64(-1473132947,766784016),new int64(-1341970488,-1728372417),new int64(-1084653625,-1091629340),new int64(-958395405,1034457026),
new int64(-710438585,-1828018395),new int64(113926993,-536640913),new int64(338241895,168717936),new int64(666307205,1188179964),new int64(773529912,1546045734),new int64(1294757372,1522805485),new int64(1396182291,-1651133473),new int64(1695183700,-1951439906),new int64(1986661051,1014477480),new int64(-2117940946,1206759142),new int64(-1838011259,344077627),new int64(-1564481375,1290863460),new int64(-1474664885,-1136513023),new int64(-1035236496,-789014639),new int64(-949202525,106217008),new int64(-778901479,
-688958952),new int64(-694614492,1432725776),new int64(-200395387,1467031594),new int64(275423344,851169720),new int64(430227734,-1194143544),new int64(506948616,1363258195),new int64(659060556,-544281703),new int64(883997877,-509917016),new int64(958139571,-976659869),new int64(1322822218,-482243893),new int64(1537002063,2003034995),new int64(1747873779,-692930397),new int64(1955562222,1575990012),new int64(2024104815,1125592928),new int64(-2067236844,-1578062990),new int64(-1933114872,442776044),
new int64(-1866530822,593698344),new int64(-1538233109,-561857047),new int64(-1090935817,-1295615723),new int64(-965641998,-479046869),new int64(-903397682,-366583396),new int64(-779700025,566280711),new int64(-354779690,-840897762),new int64(-176337025,-294727304),new int64(116418474,1914138554),new int64(174292421,-1563912026),new int64(289380356,-1090974290),new int64(460393269,320620315),new int64(685471733,587496836),new int64(852142971,1086792851),new int64(1017036298,365543100),new int64(1126000580,
-1676669620),new int64(1288033470,-885112138),new int64(1501505948,-60457430),new int64(1607167915,987167468),new int64(1816402316,1246189591)));var u,v,c=new Array(new int64(1779033703,-205731576),new int64(-1150833019,-2067093701),new int64(1013904242,-23791573),new int64(-1521486534,1595750129),new int64(1359893119,-1377402159),new int64(-1694144372,725511199),new int64(528734635,-79577749),new int64(1541459225,327033209)),d=new int64(0,0),e=new int64(0,0),f=new int64(0,0),g=new int64(0,0),h=new int64(0,
0),i=new int64(0,0),j=new int64(0,0),k=new int64(0,0),l=new int64(0,0),m=new int64(0,0),n=new int64(0,0),o=new int64(0,0),p=new int64(0,0),q=new int64(0,0),r=new int64(0,0),s=new int64(0,0),t=new int64(0,0),w=new Array(80);for(v=0;80>v;v++)w[v]=new int64(0,0);for(a[b>>5]|=128<<24-(31&b),a[(b+128>>10<<5)+31]=b,v=0;v<a.length;v+=32){for(int64copy(f,c[0]),int64copy(g,c[1]),int64copy(h,c[2]),int64copy(i,c[3]),int64copy(j,c[4]),int64copy(k,c[5]),int64copy(l,c[6]),int64copy(m,c[7]),u=0;16>u;u++)w[u].h=
a[v+2*u],w[u].l=a[v+2*u+1];for(u=16;80>u;u++)int64rrot(r,w[u-2],19),int64revrrot(s,w[u-2],29),int64shr(t,w[u-2],6),o.l=r.l^s.l^t.l,o.h=r.h^s.h^t.h,int64rrot(r,w[u-15],1),int64rrot(s,w[u-15],8),int64shr(t,w[u-15],7),n.l=r.l^s.l^t.l,n.h=r.h^s.h^t.h,int64add4(w[u],o,w[u-7],n,w[u-16]);for(u=0;80>u;u++)p.l=j.l&k.l^~j.l&l.l,p.h=j.h&k.h^~j.h&l.h,int64rrot(r,j,14),int64rrot(s,j,18),int64revrrot(t,j,9),o.l=r.l^s.l^t.l,o.h=r.h^s.h^t.h,int64rrot(r,f,28),int64revrrot(s,f,2),int64revrrot(t,f,7),n.l=r.l^s.l^t.l,
n.h=r.h^s.h^t.h,q.l=f.l&g.l^f.l&h.l^g.l&h.l,q.h=f.h&g.h^f.h&h.h^g.h&h.h,int64add5(d,m,o,p,sha512_k[u],w[u]),int64add(e,n,q),int64copy(m,l),int64copy(l,k),int64copy(k,j),int64add(j,i,d),int64copy(i,h),int64copy(h,g),int64copy(g,f),int64add(f,d,e);int64add(c[0],c[0],f),int64add(c[1],c[1],g),int64add(c[2],c[2],h),int64add(c[3],c[3],i),int64add(c[4],c[4],j),int64add(c[5],c[5],k),int64add(c[6],c[6],l),int64add(c[7],c[7],m)}var x=new Array(16);for(v=0;8>v;v++)x[2*v]=c[v].h,x[2*v+1]=c[v].l;return x}
function int64(a,b){this.h=a,this.l=b}function int64copy(a,b){a.h=b.h,a.l=b.l}function int64rrot(a,b,c){a.l=b.l>>>c|b.h<<32-c,a.h=b.h>>>c|b.l<<32-c}function int64revrrot(a,b,c){a.l=b.h>>>c|b.l<<32-c,a.h=b.l>>>c|b.h<<32-c}function int64shr(a,b,c){a.l=b.l>>>c|b.h<<32-c,a.h=b.h>>>c}function int64add(a,b,c){var d=(65535&b.l)+(65535&c.l),e=(b.l>>>16)+(c.l>>>16)+(d>>>16),f=(65535&b.h)+(65535&c.h)+(e>>>16),g=(b.h>>>16)+(c.h>>>16)+(f>>>16);a.l=65535&d|e<<16,a.h=65535&f|g<<16}
function int64add4(a,b,c,d,e){var f=(65535&b.l)+(65535&c.l)+(65535&d.l)+(65535&e.l),g=(b.l>>>16)+(c.l>>>16)+(d.l>>>16)+(e.l>>>16)+(f>>>16),h=(65535&b.h)+(65535&c.h)+(65535&d.h)+(65535&e.h)+(g>>>16),i=(b.h>>>16)+(c.h>>>16)+(d.h>>>16)+(e.h>>>16)+(h>>>16);a.l=65535&f|g<<16,a.h=65535&h|i<<16}
function int64add5(a,b,c,d,e,f){var g=(65535&b.l)+(65535&c.l)+(65535&d.l)+(65535&e.l)+(65535&f.l),h=(b.l>>>16)+(c.l>>>16)+(d.l>>>16)+(e.l>>>16)+(f.l>>>16)+(g>>>16),i=(65535&b.h)+(65535&c.h)+(65535&d.h)+(65535&e.h)+(65535&f.h)+(h>>>16),j=(b.h>>>16)+(c.h>>>16)+(d.h>>>16)+(e.h>>>16)+(f.h>>>16)+(i>>>16);a.l=65535&g|h<<16,a.h=65535&i|j<<16}var hexcase=0,b64pad="",sha512_k;
(function($){$.fn.aToolTip=function(options){var defaults={closeTipBtn:"aToolTipCloseBtn",toolTipId:"aToolTip",fixed:false,clickIt:false,inSpeed:200,outSpeed:100,tipContent:"",toolTipClass:"defaultTheme",xOffset:5,yOffset:5,onShow:null,onHide:null},settings=$.extend({},defaults,options);return this.each(function(){var obj=$(this);if(obj.attr("title"))var tipContent=obj.attr("title");else var tipContent=settings.tipContent;var buildaToolTip=function(){$("body").append("<div id='"+settings.toolTipId+
"' class='"+settings.toolTipClass+"'><p class='aToolTipContent'>"+tipContent+"</p></div>");if(tipContent&&settings.clickIt)$("#"+settings.toolTipId+" p.aToolTipContent").append("<a id='"+settings.closeTipBtn+"' href='#' alt='close'>close</a>")},positionaToolTip=function(){$("#"+settings.toolTipId).css({top:obj.offset().top-$("#"+settings.toolTipId).outerHeight()-settings.yOffset+"px",left:obj.offset().left+obj.outerWidth()+settings.xOffset+"px"}).stop().fadeIn(settings.inSpeed,function(){if($.isFunction(settings.onShow))settings.onShow(obj)})},
removeaToolTip=function(){$("#"+settings.toolTipId).stop().fadeOut(settings.outSpeed,function(){$(this).remove();if($.isFunction(settings.onHide))settings.onHide(obj)})};if(tipContent&&!settings.clickIt)obj.hover(function(){$("#"+settings.toolTipId).remove();obj.attr({title:""});buildaToolTip();positionaToolTip()},function(){removeaToolTip()});if(tipContent&&settings.clickIt)obj.click(function(el){$("#"+settings.toolTipId).remove();obj.attr({title:""});buildaToolTip();positionaToolTip();$("#"+settings.closeTipBtn).click(function(){removeaToolTip();
return false});return false});if(!settings.fixed&&!settings.clickIt)obj.mousemove(function(el){$("#"+settings.toolTipId).css({top:el.pageY-$("#"+settings.toolTipId).outerHeight()-settings.yOffset,left:el.pageX+settings.xOffset})})})}})(jQuery); 
