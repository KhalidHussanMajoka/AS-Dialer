<!DOCTYPE html>
<html class="html" lang="en-US">
<!-- Mirrored from AS-Dialer/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Oct 2022 07:58:48 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <script>
        if(navigator.userAgent.match(/MSIE|Internet Explorer/i)||navigator.userAgent.match(/Trident\/7\..*?rv:11/i)){var href=document.location.href;if(!href.match(/[?&]nowprocket/)){if(href.indexOf("?")==-1){if(href.indexOf("#")==-1){document.location.href=href+"?nowprocket=1"}else{document.location.href=href.replace("#","?nowprocket=1#")}}else{if(href.indexOf("#")==-1){document.location.href=href+"&nowprocket=1"}else{document.location.href=href.replace("#","&nowprocket=1#")}}}}
    </script>
    <script>
        class RocketLazyLoadScripts{constructor(){this.triggerEvents=["keydown","mousedown","mousemove","touchmove","touchstart","touchend","wheel"],this.userEventHandler=this._triggerListener.bind(this),this.touchStartHandler=this._onTouchStart.bind(this),this.touchMoveHandler=this._onTouchMove.bind(this),this.touchEndHandler=this._onTouchEnd.bind(this),this.clickHandler=this._onClick.bind(this),this.interceptedClicks=[],window.addEventListener("pageshow",(e=>{this.persisted=e.persisted})),window.addEventListener("DOMContentLoaded",(()=>{this._preconnect3rdParties()})),this.delayedScripts={normal:[],async:[],defer:[]},this.allJQueries=[]}_addUserInteractionListener(e){document.hidden?e._triggerListener():(this.triggerEvents.forEach((t=>window.addEventListener(t,e.userEventHandler,{passive:!0}))),window.addEventListener("touchstart",e.touchStartHandler,{passive:!0}),window.addEventListener("mousedown",e.touchStartHandler),document.addEventListener("visibilitychange",e.userEventHandler))}_removeUserInteractionListener(){this.triggerEvents.forEach((e=>window.removeEventListener(e,this.userEventHandler,{passive:!0}))),document.removeEventListener("visibilitychange",this.userEventHandler)}_onTouchStart(e){"HTML"!==e.target.tagName&&(window.addEventListener("touchend",this.touchEndHandler),window.addEventListener("mouseup",this.touchEndHandler),window.addEventListener("touchmove",this.touchMoveHandler,{passive:!0}),window.addEventListener("mousemove",this.touchMoveHandler),e.target.addEventListener("click",this.clickHandler),this._renameDOMAttribute(e.target,"onclick","rocket-onclick"))}_onTouchMove(e){window.removeEventListener("touchend",this.touchEndHandler),window.removeEventListener("mouseup",this.touchEndHandler),window.removeEventListener("touchmove",this.touchMoveHandler,{passive:!0}),window.removeEventListener("mousemove",this.touchMoveHandler),e.target.removeEventListener("click",this.clickHandler),this._renameDOMAttribute(e.target,"rocket-onclick","onclick")}_onTouchEnd(e){window.removeEventListener("touchend",this.touchEndHandler),window.removeEventListener("mouseup",this.touchEndHandler),window.removeEventListener("touchmove",this.touchMoveHandler,{passive:!0}),window.removeEventListener("mousemove",this.touchMoveHandler)}_onClick(e){e.target.removeEventListener("click",this.clickHandler),this._renameDOMAttribute(e.target,"rocket-onclick","onclick"),this.interceptedClicks.push(e),e.preventDefault(),e.stopPropagation(),e.stopImmediatePropagation()}_replayClicks(){window.removeEventListener("touchstart",this.touchStartHandler,{passive:!0}),window.removeEventListener("mousedown",this.touchStartHandler),this.interceptedClicks.forEach((e=>{e.target.dispatchEvent(new MouseEvent("click",{view:e.view,bubbles:!0,cancelable:!0}))}))}_renameDOMAttribute(e,t,n){e.hasAttribute&&e.hasAttribute(t)&&(event.target.setAttribute(n,event.target.getAttribute(t)),event.target.removeAttribute(t))}_triggerListener(){this._removeUserInteractionListener(this),"loading"===document.readyState?document.addEventListener("DOMContentLoaded",this._loadEverythingNow.bind(this)):this._loadEverythingNow()}_preconnect3rdParties(){let e=[];document.querySelectorAll("script[type=rocketlazyloadscript]").forEach((t=>{if(t.hasAttribute("src")){const n=new URL(t.html).origin;n!==location.origin&&e.push({src:n,crossOrigin:t.crossOrigin||"module"===t.getAttribute("data-rocket-type")})}})),e=[...new Map(e.map((e=>[JSON.stringify(e),e]))).values()],this._batchInjectResourceHints(e,"preconnect")}async _loadEverythingNow(){this.lastBreath=Date.now(),this._delayEventListeners(),this._delayJQueryReady(this),this._handleDocumentWrite(),this._registerAllDelayedScripts(),this._preloadAllScripts(),await this._loadScriptsFromList(this.delayedScripts.normal),await this._loadScriptsFromList(this.delayedScripts.defer),await this._loadScriptsFromList(this.delayedScripts.async);try{await this._triggerDOMContentLoaded(),await this._triggerWindowLoad()}catch(e){}window.dispatchEvent(new Event("rocket-allScriptsLoaded")),this._replayClicks()}_registerAllDelayedScripts(){document.querySelectorAll("script[type=rocketlazyloadscript]").forEach((e=>{e.hasAttribute("src")?e.hasAttribute("async")&&!1!==e.async?this.delayedScripts.async.push(e):e.hasAttribute("defer")&&!1!==e.defer||"module"===e.getAttribute("data-rocket-type")?this.delayedScripts.defer.push(e):this.delayedScripts.normal.push(e):this.delayedScripts.normal.push(e)}))}async _transformScript(e){return await this._littleBreath(),new Promise((t=>{const n=document.createElement("script");[...e.attributes].forEach((e=>{let t=e.nodeName;"type"!==t&&("data-rocket-type"===t&&(t="type"),n.setAttribute(t,e.nodeValue))})),e.hasAttribute("src")?(n.addEventListener("load",t),n.addEventListener("error",t)):(n.text=e.text,t());try{e.parentNode.replaceChild(n,e)}catch(e){t()}}))}async _loadScriptsFromList(e){const t=e.shift();return t?(await this._transformScript(t),this._loadScriptsFromList(e)):Promise.resolve()}_preloadAllScripts(){this._batchInjectResourceHints([...this.delayedScripts.normal,...this.delayedScripts.defer,...this.delayedScripts.async],"preload")}_batchInjectResourceHints(e,t){var n=document.createDocumentFragment();e.forEach((e=>{if(e.src){const i=document.createElement("link");i.href=e.src,i.rel=t,"preconnect"!==t&&(i.as="script"),e.getAttribute&&"module"===e.getAttribute("data-rocket-type")&&(i.crossOrigin=!0),e.crossOrigin&&(i.crossOrigin=e.crossOrigin),n.appendChild(i)}})),document.head.appendChild(n)}_delayEventListeners(){let e={};function t(t,n){!function(t){function n(n){return e[t].eventsToRewrite.indexOf(n)>=0?"rocket-"+n:n}e[t]||(e[t]={originalFunctions:{add:t.addEventListener,remove:t.removeEventListener},eventsToRewrite:[]},t.addEventListener=function(){arguments[0]=n(arguments[0]),e[t].originalFunctions.add.apply(t,arguments)},t.removeEventListener=function(){arguments[0]=n(arguments[0]),e[t].originalFunctions.remove.apply(t,arguments)})}(t),e[t].eventsToRewrite.push(n)}function n(e,t){let n=e[t];Object.defineProperty(e,t,{get:()=>n||function(){},set(i){e["rocket"+t]=n=i}})}t(document,"DOMContentLoaded"),t(window,"DOMContentLoaded"),t(window,"load"),t(window,"pageshow"),t(document,"readystatechange"),n(document,"onreadystatechange"),n(window,"onload"),n(window,"onpageshow")}_delayJQueryReady(e){let t=window.jQuery;Object.defineProperty(window,"jQuery",{get:()=>t,set(n){if(n&&n.fn&&!e.allJQueries.includes(n)){n.fn.ready=n.fn.init.prototype.ready=function(t){e.domReadyFired?t.bind(document)(n):document.addEventListener("rocket-DOMContentLoaded",(()=>t.bind(document)(n)))};const t=n.fn.on;n.fn.on=n.fn.init.prototype.on=function(){if(this[0]===window){function e(e){return e.split(" ").map((e=>"load"===e||0===e.indexOf("load.")?"rocket-jquery-load":e)).join(" ")}"string"==typeof arguments[0]||arguments[0]instanceof String?arguments[0]=e(arguments[0]):"object"==typeof arguments[0]&&Object.keys(arguments[0]).forEach((t=>{delete Object.assign(arguments[0],{[e(t)]:arguments[0][t]})[t]}))}return t.apply(this,arguments),this},e.allJQueries.push(n)}t=n}})}async _triggerDOMContentLoaded(){this.domReadyFired=!0,await this._littleBreath(),document.dispatchEvent(new Event("rocket-DOMContentLoaded")),await this._littleBreath(),window.dispatchEvent(new Event("rocket-DOMContentLoaded")),await this._littleBreath(),document.dispatchEvent(new Event("rocket-readystatechange")),await this._littleBreath(),document.rocketonreadystatechange&&document.rocketonreadystatechange()}async _triggerWindowLoad(){await this._littleBreath(),window.dispatchEvent(new Event("rocket-load")),await this._littleBreath(),window.rocketonload&&window.rocketonload(),await this._littleBreath(),this.allJQueries.forEach((e=>e(window).trigger("rocket-jquery-load"))),await this._littleBreath();const e=new Event("rocket-pageshow");e.persisted=this.persisted,window.dispatchEvent(e),await this._littleBreath(),window.rocketonpageshow&&window.rocketonpageshow({persisted:this.persisted})}_handleDocumentWrite(){const e=new Map;document.write=document.writeln=function(t){const n=document.currentScript,i=document.createRange(),r=n.parentElement;let o=e.get(n);void 0===o&&(o=n.nextSibling,e.set(n,o));const s=document.createDocumentFragment();i.setStart(s,0),s.appendChild(i.createContextualFragment(t)),r.insertBefore(s,o)}}async _littleBreath(){Date.now()-this.lastBreath>45&&(await this._requestAnimFrame(),this.lastBreath=Date.now())}async _requestAnimFrame(){return document.hidden?new Promise((e=>setTimeout(e))):new Promise((e=>requestAnimationFrame(e)))}static run(){const e=new RocketLazyLoadScripts;e._addUserInteractionListener(e)}}RocketLazyLoadScripts.run();
    </script>
    <link rel="profile" href="https://gmpg.org/xfn/11"> <!-- Google Tag Manager -->
    <script type="rocketlazyloadscript">(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TPXHHF4');</script> <!-- End Google Tag Manager -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script type="rocketlazyloadscript" async src="https://www.googletagmanager.com/gtag/js?id=UA-71108498-1"></script>
    <script type="rocketlazyloadscript"> window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-71108498-1');
</script>
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- This site is optimized with the Yoast SEO plugin v19.7.1 - https://yoast.com/wordpress/plugins/seo/ -->
    <title>AS-Dialer - Call center dialer | Best Dialer Software &amp; System</title>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css?family=Poppins%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%2C100i%2C200i%2C300i%2C400i%2C500i%2C600i%2C700i%2C800i%2C900i%7CPoppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;subset=latin&amp;display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%2C100i%2C200i%2C300i%2C400i%2C500i%2C600i%2C700i%2C800i%2C900i%7CPoppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;subset=latin&amp;display=swap" media="print" onload="this.media='all'" /><noscript>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%2C100i%2C200i%2C300i%2C400i%2C500i%2C600i%2C700i%2C800i%2C900i%7CPoppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;subset=latin&amp;display=swap" />
    </noscript>
    <link rel="stylesheet" href="../as-dialer-css/wp-content/cache/min/1/478f1451e00e8c9f173c093238e6eaa6.css" media="all" data-minify="1" />
    <meta name="description" content="AS-Dialer is offering the world’s leading call center dialer software &amp; system . Trusted by more than 18000 plus clients. Get Free Trial!" />
    <link rel="canonical" href="index-dialer.php" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="AS-Dialer - Call center dialer | Best Dialer Software &amp; System" />
    <meta property="og:description" content="AS-Dialer is offering the world’s leading call center dialer software &amp; system . Trusted by more than 18000 plus clients. Get Free Trial!" />
    <meta property="og:url" content="index-dialer.php" />
    <meta property="og:site_name" content="AS-Dialer" />
    <meta property="article:publisher" content="https://www.facebook.com/Dialler" />
    <meta property="article:modified_time" content="2022-09-13T11:40:27+00:00" />
    <meta property="og:image" content="../as-dialer-css/wp-content/uploads/2022/02/HOME-PSD1-01-e1646129722533-1024x699.png" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@dialer" />
    <script type="application/ld+json" class="yoast-schema-graph">
        {"@context":"https://schema.org","@graph":[{"@type":"WebPage","@id":"https://AS-Dialer/","url":"https://AS-Dialer/","name":"Dialer360 - Call center dialer | Best Dialer Software & System","isPartOf":{"@id":"https://AS-Dialer/#website"},"about":{"@id":"https://AS-Dialer/#organization"},"primaryImageOfPage":{"@id":"https://AS-Dialer/#primaryimage"},"image":{"@id":"https://AS-Dialer/#primaryimage"},"thumbnailUrl":"https://as-dialer-css/wp-content/uploads/2022/02/HOME-PSD1-01-e1646129722533-1024x699.png","datePublished":"2022-01-10T07:00:51+00:00","dateModified":"2022-09-13T11:40:27+00:00","description":"Dialer360 is offering the world’s leading call center dialer software & system . Trusted by more than 18000 plus clients. Get Free Trial!","breadcrumb":{"@id":"https://AS-Dialer/#breadcrumb"},"inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https://AS-Dialer/"]}]},{"@type":"ImageObject","inLanguage":"en-US","@id":"https://AS-Dialer/#primaryimage","url":"https://AS-Dialer/wp-content/uploads/2022/02/HOME-PSD1-01-e1646129722533.png","contentUrl":"https://AS-Dialer/wp-content/uploads/2022/02/HOME-PSD1-01-e1646129722533.png","width":3195,"height":2182},{"@type":"BreadcrumbList","@id":"https://AS-Dialer/#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"name":"Home"}]},{"@type":"WebSite","@id":"https://AS-Dialer/#website","url":"https://AS-Dialer/","name":"Dialer360","description":"Call Center Software","publisher":{"@id":"https://AS-Dialer/#organization"},"potentialAction":[{"@type":"SearchAction","target":{"@type":"EntryPoint","urlTemplate":"https://AS-Dialer/?s={search_term_string}"},"query-input":"required name=search_term_string"}],"inLanguage":"en-US"},{"@type":"Organization","@id":"https://AS-Dialer/#organization","name":"Dialer360","url":"https://AS-Dialer/","sameAs":["https://www.linkedin.com/company/dialer360/","https://www.youtube.com/channel/UCow_ivYwTDelKx2KjsRAIqQ","https://www.facebook.com/Dialler360","https://twitter.com/dialer360"],"logo":{"@type":"ImageObject","inLanguage":"en-US","@id":"https://AS-Dialer/#/schema/logo/image/","url":"https://as-dialer-css/wp-content/uploads/2022/01/logo.svg","contentUrl":"https://as-dialer-css/wp-content/uploads/2022/01/logo.svg","width":194,"height":89,"caption":"Dialer360"},"image":{"@id":"https://AS-Dialer/#/schema/logo/image/"}}]}
    </script> <!-- / Yoast SEO plugin. -->
    <link rel='dns-prefetch' href='http://www.google.com/' />
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script> 
    <link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
    <link rel='dns-prefetch' href='http://as-dialer-css/' />
    <link href='https://fonts.gstatic.com/' crossorigin rel='preconnect' />
    <link href='https://as-dialer-css/' rel='preconnect' />
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>

    <link rel="alternate" type="application/rss+xml" title="AS-Dialer &raquo; Feed" href="feed/index.php" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="alternate" type="application/rss+xml" title="AS-Dialer &raquo; Comments Feed" href="comments/feed/index.php" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        img.wp-smiley,
        img.emoji {
        	display: inline !important;
        	border: none !important;
        	box-shadow: none !important;
        	height: 1em !important;
        	width: 1em !important;
        	margin: 0 0.07em !important;
        	vertical-align: -0.1em !important;
        	background: none !important;
        	padding: 0 !important;
        }
    </style>
    <style id='wp-block-library-theme-inline-css'>
        .wp-block-audio figcaption{color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-audio figcaption{color:hsla(0,0%,100%,.65)}.wp-block-code{border:1px solid #ccc;border-radius:4px;font-family:Menlo,Consolas,monaco,monospace;padding:.8em 1em}.wp-block-embed figcaption{color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-embed figcaption{color:hsla(0,0%,100%,.65)}.blocks-gallery-caption{color:#555;font-size:13px;text-align:center}.is-dark-theme .blocks-gallery-caption{color:hsla(0,0%,100%,.65)}.wp-block-image figcaption{color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-image figcaption{color:hsla(0,0%,100%,.65)}.wp-block-pullquote{border-top:4px solid;border-bottom:4px solid;margin-bottom:1.75em;color:currentColor}.wp-block-pullquote__citation,.wp-block-pullquote cite,.wp-block-pullquote footer{color:currentColor;text-transform:uppercase;font-size:.8125em;font-style:normal}.wp-block-quote{border-left:.25em solid;margin:0 0 1.75em;padding-left:1em}.wp-block-quote cite,.wp-block-quote footer{color:currentColor;font-size:.8125em;position:relative;font-style:normal}.wp-block-quote.has-text-align-right{border-left:none;border-right:.25em solid;padding-left:0;padding-right:1em}.wp-block-quote.has-text-align-center{border:none;padding-left:0}.wp-block-quote.is-large,.wp-block-quote.is-style-large,.wp-block-quote.is-style-plain{border:none}.wp-block-search .wp-block-search__label{font-weight:700}:where(.wp-block-group.has-background){padding:1.25em 2.375em}.wp-block-separator.has-css-opacity{opacity:.4}.wp-block-separator{border:none;border-bottom:2px solid;margin-left:auto;margin-right:auto}.wp-block-separator.has-alpha-channel-opacity{opacity:1}.wp-block-separator:not(.is-style-wide):not(.is-style-dots){width:100px}.wp-block-separator.has-background:not(.is-style-dots){border-bottom:none;height:1px}.wp-block-separator.has-background:not(.is-style-wide):not(.is-style-dots){height:2px}.wp-block-table thead{border-bottom:3px solid}.wp-block-table tfoot{border-top:3px solid}.wp-block-table td,.wp-block-table th{padding:.5em;border:1px solid;word-break:normal}.wp-block-table figcaption{color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-table figcaption{color:hsla(0,0%,100%,.65)}.wp-block-video figcaption{color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-video figcaption{color:hsla(0,0%,100%,.65)}.wp-block-template-part.has-background{padding:1.25em 2.375em;margin-top:0;margin-bottom:0}
    </style>
    <style id='global-styles-inline-css'>
        body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');--wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');--wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');--wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');--wp--preset--duotone--midnight: url('#wp-duotone-midnight');--wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');--wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');--wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
    </style>

    <style>

.carousel-bg {
  background-color: transparent;
  margin-top: 40px;
  margin-bottom: 40px;
}
/* quote */
.quote-image {
  margin-left: auto;
  margin-right: auto;
  margin-bottom: auto;
  padding-top: 20px;
  width: 80px;
}
/* text-style */
.testimonial-style .testimonial-caption-style {
  font-family: sans-serif;
  font-weight: 400;
  font-size: 24px;
  color: #white;
  line-height: 30px;
  bottom: 40%;
  text-shadow: none;
  top: 10%;
}
.testimonial-style .testimonial-authors {
  font-family: "Roboto";
  font-weight: 700;
  font-size: 20px;
  color: white;
  line-height: 30px;
  margin-top: 40px;
}
/* carousel-height-control */
.testimonial-style .carousel-inner > .item {
//   padding-top: auto;
  padding-bottom: auto;
  height: 380px;
}
/* carousel-left-right-control */
.testimonial-style .carousel-control.left {
  background: none;
  box-shadow: none;
  text-shadow: none;
}
.testimonial-style .carousel-control.right {
  background: none;
  box-shadow: none;
  text-shadow: none;
}
.testimonial-style .carousel-control {
  color: white;
}
.testimonial-style .carousel-control:hover {
  color: white;
  text-decoration: none;
  transition: background-color 1s ease;
}
/* indicators */
.testimonial-style .carousel-indicators .active {
  background-color: white;
  width: 14px;
  height: 14px;
  transition: background 1s cubic-bezier(0.22, 0.61, 0.36, 1);
}
.testimonial-style .carousel-indicators li {
//   border: 2px solid #354052;
  background-color: white;
}
/* Textimonial CSS Code End */
    </style>

       <style>
    .column {
  float: left;
  width: 20.33%;
  margin:20px;
  }

   .row:after {
  content: "";
  display: table;
  clear: both;
  }
    </style>


    <style id='elementor-icons-inline-css'>
        .elementor-add-new-section .elementor-add-templately-promo-button{
                    background-color: #5d4fff;
                    background-image: url(https://as-dialer-css/wp-content/plugins/essential-addons-for-elementor-lite/assets/admin/images/templately/logo-icon.svg);
                    background-repeat: no-repeat;
                    background-position: center center;
                    margin-left: 5px;
                    position: relative;
                    bottom: 5px;
                }
        
        .elementor-add-new-section .elementor-add-templately-promo-button{
                    background-color: #5d4fff;
                    background-image: url(https://as-dialer-css/wp-content/plugins/essential-addons-for-elementor-lite/assets/admin/images/templately/logo-icon.svg);
                    background-repeat: no-repeat;
                    background-position: center center;
                    margin-left: 5px;
                    position: relative;
                    bottom: 5px;
                }
    </style>
    <link rel='stylesheet' id='elementor-post-5-css' href='../as-dialer-css/wp-content/uploads/elementor/css/post-562b9.css?ver=1654690571' media='all' />
    <link rel='stylesheet' id='elementor-global-css' href='../as-dialer-css/wp-content/uploads/elementor/css/global9dd2.css?ver=1654690591' media='all' />
    <link rel='stylesheet' id='elementor-post-7-css' href='../as-dialer-css/wp-content/uploads/elementor/css/post-7b1cc.css?ver=1663069405' media='all' />
    <link rel='stylesheet' id='elementor-post-698-css' href='../as-dialer-css/wp-content/uploads/elementor/css/post-6980f4d.css?ver=1663158088' media='all' />
    <link rel='stylesheet' id='elementor-post-71-css' href='../as-dialer-css/wp-content/uploads/elementor/css/post-713706.css?ver=1654690593' media='all' />
    <link rel='stylesheet' id='elementor-post-217-css' href='../as-dialer-css/wp-content/uploads/elementor/css/post-2176f4d.css?ver=1648653497' media='all' />
    <link rel='stylesheet' id='elementor-post-221-css' href='../as-dialer-css/wp-content/uploads/elementor/css/post-221ba7e.css?ver=1661883110' media='all' />
    <link rel='stylesheet' id='elementor-post-358-css' href='../as-dialer-css/wp-content/uploads/elementor/css/post-35843ff.css?ver=1661882184' media='all' />
    <link rel='stylesheet' id='elementor-post-9771-css' href='../as-dialer-css/wp-content/uploads/elementor/css/post-9771d57e.css?ver=1645550715' media='all' />
    <link rel='stylesheet' id='elementor-post-18242-css' href='../as-dialer-css/wp-content/uploads/elementor/css/post-182428070.css?ver=1661799456' media='all' />
        <link rel='stylesheet' id='elementor-post-5-css' href='../as-dialer-css/wp-content/uploads/elementor/css/post-562b9.css?ver=1654690571' media='all' />
    <link rel='stylesheet' id='elementor-global-css' href='../as-dialer-css/wp-content/uploads/elementor/css/global9dd2.css?ver=1654690591' media='all' />
    <link rel='stylesheet' id='elementor-post-786-css' href='../as-dialer-css/wp-content/uploads/elementor/css/post-78677a4.css?ver=1654708337' media='all' />
    <link rel='stylesheet' id='elementor-post-698-css' href='../as-dialer-css/wp-content/uploads/elementor/css/post-6980f4d.css?ver=1663158088' media='all' />
    <link rel='stylesheet' id='elementor-post-71-css' href='../as-dialer-css/wp-content/uploads/elementor/css/post-713706.css?ver=1654690593' media='all' />
    <link rel='stylesheet' id='elementor-post-217-css' href='../as-dialer-css/wp-content/uploads/elementor/css/post-2176f4d.css?ver=1648653497' media='all' />
    <link rel='stylesheet' id='elementor-post-221-css' href='../as-dialer-css/wp-content/uploads/elementor/css/post-221ba7e.css?ver=1661883110' media='all' />
    <link rel='stylesheet' id='elementor-post-358-css' href='../as-dialer-css/wp-content/uploads/elementor/css/post-35843ff.css?ver=1661882184' media='all' />
    <link rel='stylesheet' id='elementor-post-9771-css' href='../as-dialer-css/wp-content/uploads/elementor/css/post-9771d57e.css?ver=1645550715' media='all' />
    <link rel='stylesheet' id='elementor-post-18242-css' href='../as-dialer-css/wp-content/uploads/elementor/css/post-182428070.css?ver=1661799456' media='all' />
    <link rel='stylesheet' id='elementor-post-5-css' href='../as-dialer-css/wp-content/uploads/elementor/css/post-562b9.css?ver=1654690571' media='all' />
    <link rel='stylesheet' id='elementor-global-css' href='../as-dialer-css/wp-content/uploads/elementor/css/global9dd2.css?ver=1654690591' media='all' />
    <link rel='stylesheet' id='elementor-post-7-css' href='../as-dialer-css/wp-content/uploads/elementor/css/post-7b1cc.css?ver=1663069405' media='all' />
    <link rel='stylesheet' id='elementor-post-698-css' href='../as-dialer-css/wp-content/uploads/elementor/css/post-6980f4d.css?ver=1663158088' media='all' />
    <link rel='stylesheet' id='elementor-post-71-css' href='../as-dialer-css/wp-content/uploads/elementor/css/post-713706.css?ver=1654690593' media='all' />
    <link rel='stylesheet' id='elementor-post-217-css' href='../as-dialer-css/wp-content/uploads/elementor/css/post-2176f4d.css?ver=1648653497' media='all' />
    <link rel='stylesheet' id='elementor-post-221-css' href='../as-dialer-css/wp-content/uploads/elementor/css/post-221ba7e.css?ver=1661883110' media='all' />
    <link rel='stylesheet' id='elementor-post-358-css' href='../as-dialer-css/wp-content/uploads/elementor/css/post-35843ff.css?ver=1661882184' media='all' />
    <link rel='stylesheet' id='elementor-post-9771-css' href='../as-dialer-css/wp-content/uploads/elementor/css/post-9771d57e.css?ver=1645550715' media='all' />
    <link rel='stylesheet' id='elementor-post-18242-css' href='../as-dialer-css/wp-content/uploads/elementor/css/post-182428070.css?ver=1661799456' media='all' />
    <style id='rocket-lazyload-inline-css'>
        .rll-youtube-player{position:relative;padding-bottom:56.23%;height:0;overflow:hidden;max-width:100%;}.rll-youtube-player:focus-within{outline: 2px solid currentColor;outline-offset: 5px;}.rll-youtube-player iframe{position:absolute;top:0;left:0;width:100%;height:100%;z-index:100;background:0 0}.rll-youtube-player img{bottom:0;display:block;left:0;margin:auto;max-width:100%;width:100%;position:absolute;right:0;top:0;border:none;height:auto;-webkit-transition:.4s all;-moz-transition:.4s all;transition:.4s all}.rll-youtube-player img:hover{-webkit-filter:brightness(75%)}.rll-youtube-player .play{height:100%;width:100%;left:0;top:0;position:absolute;background:url(../as-dialer-css/wp-content/plugins/wp-rocket/assets/img/youtube.png) no-repeat center;background-color: transparent !important;cursor:pointer;border:none;}.wp-embed-responsive .wp-has-aspect-ratio .rll-youtube-player{position:absolute;padding-bottom:0;width:100%;height:100%;top:0;bottom:0;left:0;right:0}
    </style>
    <script type="rocketlazyloadscript" src='../as-dialer-css/wp-includes/js/jquery/jquery.minaf6c.js?ver=3.6.0' id='jquery-core-js' defer></script>
    <script type="rocketlazyloadscript" src='../as-dialer-css/wp-includes/js/jquery/jquery-migrate.mind617.js?ver=3.3.2' id='jquery-migrate-js' defer></script>
    <script id='ecs_ajax_load-js-extra'>
        var ecs_ajax_params = {"ajaxurl":"https:\/\/AS-Dialer\/wp-admin\/admin-ajax.php","posts":"{\"error\":\"\",\"m\":\"\",\"p\":\"7\",\"post_parent\":\"\",\"subpost\":\"\",\"subpost_id\":\"\",\"attachment\":\"\",\"attachment_id\":0,\"name\":\"\",\"pagename\":\"\",\"page_id\":\"7\",\"second\":\"\",\"minute\":\"\",\"hour\":\"\",\"day\":0,\"monthnum\":0,\"year\":0,\"w\":0,\"category_name\":\"\",\"tag\":\"\",\"cat\":\"\",\"tag_id\":\"\",\"author\":\"\",\"author_name\":\"\",\"feed\":\"\",\"tb\":\"\",\"paged\":0,\"meta_key\":\"\",\"meta_value\":\"\",\"preview\":\"\",\"s\":\"\",\"sentence\":\"\",\"title\":\"\",\"fields\":\"\",\"menu_order\":\"\",\"embed\":\"\",\"category__in\":[],\"category__not_in\":[],\"category__and\":[],\"post__in\":[],\"post__not_in\":[],\"post_name__in\":[],\"tag__in\":[],\"tag__not_in\":[],\"tag__and\":[],\"tag_slug__in\":[],\"tag_slug__and\":[],\"post_parent__in\":[],\"post_parent__not_in\":[],\"author__in\":[],\"author__not_in\":[],\"ignore_sticky_posts\":false,\"suppress_filters\":false,\"cache_results\":true,\"update_post_term_cache\":true,\"lazy_load_term_meta\":true,\"update_post_meta_cache\":true,\"post_type\":\"\",\"posts_per_page\":10,\"nopaging\":false,\"comments_per_page\":\"50\",\"no_found_rows\":false,\"order\":\"DESC\"}"};
    </script>
    <script type="rocketlazyloadscript" data-minify="1" src='../as-dialer-css/wp-content/cache/min/1/wp-content/plugins/ele-custom-skin/assets/js/ecs_ajax_pagination0d0b.js?ver=1664811103' id='ecs_ajax_load-js' defer></script>
    <script type="rocketlazyloadscript" data-minify="1" src='../as-dialer-css/wp-content/cache/min/1/wp-content/plugins/ele-custom-skin/assets/js/ecs0d0b.js?ver=1664811103' id='ecs-script-js' defer></script>
    <link rel="https://api.w.org/" href="wp-json/index.php" />
    <link rel="alternate" type="application/json" href="wp-json/wp/v2/pages/7.json" />
    <link rel="alternate" type="application/json" href="wp-json/wp/v2/pages/786.json" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://as-dialer-css/wp-includes/wlwmanifest.xml" />
    <meta name="generator" content="WordPress 6.0.2" />
    <link rel='shortlink' href='index-dialer.php' />
    <link rel="alternate" type="application/json+oembed" href="wp-json/oembed/1.0/embed5526.json?url=https%3A%2F%2FAS-Dialer%2F" />
    <link rel="alternate" type="text/xml+oembed" href="wp-json/oembed/1.0/embedab24?url=https%3A%2F%2FAS-Dialer%2F&amp;format=xml" />
    <link rel="icon" href="../as-dialer-css/wp-content/uploads/2022/01/logo-black-24.png" sizes="32x32" />
    <link rel="icon" href="../as-dialer-css/wp-content/uploads/2022/01/logo-black-24.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="../as-dialer-css/wp-content/uploads/2022/01/logo-black-24.png" />
    <meta name="msapplication-TileImage" content="https://as-dialer-css/wp-content/uploads/2022/01/logo-black-24.png" />
    <style id="wp-custom-css">
        .page-header{display:none !important}/*horizontal Tabs*/.elementor-widget-tabs .elementor-tab-desktop-title{padding:13px 13px;background-color:#EFEFEF}/*data togle*/.elementor-tab-title.elementor-active{background-color:#FFCB04 !important}/*progress bar*/.meter{box-sizing:content-box;height:12px;/* Can be anything */position:relative;margin:10px 0 10px 0;/* Just for demo spacing */background:rgb(199,197,197);border-radius:25px;padding:0;box-shadow:inset 0 -1px 1px rgba(255,255,255,0.3)}.meter >span{display:block;height:100%;background-color:rgb(43,194,83);background-image:linear-gradient( center bottom,rgb(43,194,83) 37%,rgb(84,240,84) 69% );box-shadow:inset 0 2px 9px rgba(255,255,255,0.3),inset 0 -2px 6px rgba(253,253,253,0.4);position:relative;overflow:hidden}.meter >span:after,.animate >span >span{content:"";position:absolute;top:0;left:0;bottom:0;right:0;background-image:linear-gradient( -45deg,rgba(255,255,255,0.2) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.2) 50%,rgba(255,255,255,0.2) 75%,transparent 75%,transparent );z-index:1;background-size:50px 50px;animation:move 2s linear infinite;border-top-right-radius:8px;border-bottom-right-radius:8px;border-top-left-radius:20px;border-bottom-left-radius:20px;overflow:hidden}.animate >span:after{display:none}@keyframes move{0%{background-position:0 0}100%{background-position:50px 50px}}.red >span{background-image:linear-gradient(#FF5C5C,#FF5C5C)}.blue >span{background-image:linear-gradient(#8b088b,#8b088b)}.primary >span{background-image:linear-gradient(#5cd1ff,#5cd1ff)}.label{margin-bottom:-20px}/*cf7*/.input-container{display:flex}.input-container2{margin:10px 0}.input-container input,.input-container select{width:98% !important;background-color:white !important}.input-container2 input,.input-container2 select{width:99% !important;background-color:white !important}/* .iconfa{position:absolute;top:28px;padding:12px;color:white;background-color:#FFCB04}*/.btn{background-color:#FFCB04 !important;display:block;width:99%}/* ringless voicemail*/.ringlesstable .elementor-icon-box-title{font-family:"Poppins",Sans-serif;font-size:15px;font-weight:400;border-right:1px groove #DCD4D440;padding:7px 0 7px 30px}.ringlesstable .elementor-widget:not(:last-child){margin-bottom:0}.ringlesstable .elementor-icon{margin-left:30px}/* ringless css end *//* auto dialer */.predictivedialer .eael-tabs-nav>ul{margin-left:0;margin-right:0}.autodialertabs .eael-tabs-nav>ul{margin-left:150px;margin-right:150px}.aidialertabs .eael-tabs-nav>ul{margin-left:130px;margin-right:100px}/* glossory css */.sticky{position:-webkit-sticky;position:sticky;top:15%}@media screen and (max-width:820px){/* auto dialer */.autodialertabs .eael-tabs-nav>ul{margin-left:50px;margin-right:50px}.aidialertabs .eael-tabs-nav>ul{margin-left:50px;margin-right:50px}}#top-bar{padding:0 0 !important}@media screen and (max-width:568px){/* auto dialer */.autodialertabs .eael-tabs-nav>ul{margin-left:0;margin-right:0}.aidialertabs .eael-tabs-nav>ul{margin-left:0;margin-right:0}}#scroll-top{display:none !important}#wpfront-scroll-top-container{bottom:92px !important;right:32px !important}.jTjYNNwDjY4jIRTNMNIjgMOyMWuzGMktheme--light{display:none !important}		
    </style> <!-- OceanWP CSS -->
    <style type="text/css">
        /* Header CSS */#site-header.has-header-media .overlay-header-media{background-color:rgba(0,0,0,0.5)}#site-logo #site-logo-inner a img,#site-header.center-header #site-navigation-wrap .middle-site-logo a img{max-width:252px}#site-header #site-logo #site-logo-inner a img,#site-header.center-header #site-navigation-wrap .middle-site-logo a img{max-height:100px}/* Typography CSS */#site-navigation-wrap .dropdown-menu >li >a,#site-header.full_screen-header .fs-dropdown-menu >li >a,#site-header.top-header #site-navigation-wrap .dropdown-menu >li >a,#site-header.center-header #site-navigation-wrap .dropdown-menu >li >a,#site-header.medium-header #site-navigation-wrap .dropdown-menu >li >a,.oceanwp-mobile-menu-icon a{font-family:Poppins;font-weight:500;font-style:normal;font-size:15px;text-transform:capitalize}.dropdown-menu ul li a.menu-link,#site-header.full_screen-header .fs-dropdown-menu ul.sub-menu li a{font-family:Poppins;font-weight:500;font-style:normal;font-size:15px;text-transform:capitalize}.sidr-class-dropdown-menu li a,a.sidr-class-toggle-sidr-close,#mobile-dropdown ul li a,body #mobile-fullscreen ul li a{font-family:Poppins;font-weight:500;font-style:normal;text-transform:capitalize}
    </style><noscript>
        <style id="rocket-lazyload-nojs-css">
            .rll-youtube-player, [data-lazy-src]{display:none !important;}
        </style>
    </noscript>
</head>

<body class="home page-template-default page page-id-7 wp-custom-logo wp-embed-responsive oceanwp-theme dropdown-mobile default-breakpoint content-full-width content-max-width page-header-disabled has-breadcrumbs elementor-default elementor-kit-5 elementor-page elementor-page-7" itemscope="itemscope" itemtype="https://schema.org/WebPage">
    <!-- Google Tag Manager (noscript) --> <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TPXHHF4" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> <!-- End Google Tag Manager (noscript) --> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-dark-grayscale">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0 0.49803921568627" />
                    <feFuncG type="table" tableValues="0 0.49803921568627" />
                    <feFuncB type="table" tableValues="0 0.49803921568627" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-grayscale">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0 1" />
                    <feFuncG type="table" tableValues="0 1" />
                    <feFuncB type="table" tableValues="0 1" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-purple-yellow">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0.54901960784314 0.98823529411765" />
                    <feFuncG type="table" tableValues="0 1" />
                    <feFuncB type="table" tableValues="0.71764705882353 0.25490196078431" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-blue-red">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0 1" />
                    <feFuncG type="table" tableValues="0 0.27843137254902" />
                    <feFuncB type="table" tableValues="0.5921568627451 0.27843137254902" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-midnight">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0 0" />
                    <feFuncG type="table" tableValues="0 0.64705882352941" />
                    <feFuncB type="table" tableValues="0 1" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-magenta-yellow">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0.78039215686275 1" />
                    <feFuncG type="table" tableValues="0 0.94901960784314" />
                    <feFuncB type="table" tableValues="0.35294117647059 0.47058823529412" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-purple-green">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0.65098039215686 0.40392156862745" />
                    <feFuncG type="table" tableValues="0 1" />
                    <feFuncB type="table" tableValues="0.44705882352941 0.4" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-blue-orange">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0.098039215686275 1" />
                    <feFuncG type="table" tableValues="0 0.66274509803922" />
                    <feFuncB type="table" tableValues="0.84705882352941 0.41960784313725" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg>
    <div id="outer-wrap" class="site clr"> <a class="skip-link screen-reader-text" href="#main">Skip to content</a>
        <div id="wrap" class="clr">
            <header id="site-header" class="clr" data-height="74" itemscope="itemscope" itemtype="https://schema.org/WPHeader" role="banner">
                <div data-elementor-type="header" data-elementor-id="698" class="elementor elementor-698 elementor-location-header">
                    <div class="elementor-section-wrap">
                        <section class="elementor-section elementor-top-section elementor-element elementor-element-b4938f2 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="b4938f2" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-eb05307" data-id="eb05307" data-element_type="column">
                                <h4 style="margin-top: 10px !important;margin-bottom: 10px !important;">
                                        Info@asdialer.com</h4>
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-0e5b8c6 elementor-widget__width-auto elementor-widget elementor-widget-heading" data-id="0e5b8c6" data-element_type="widget" data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <style>
                                                    /*! elementor - v3.6.5 - 27-04-2022 */
                                                    .elementor-heading-title{padding:0;margin:0;line-height:1}.elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a{color:inherit;font-size:inherit;line-height:inherit}.elementor-widget-heading .elementor-heading-title.elementor-size-small{font-size:15px}.elementor-widget-heading .elementor-heading-title.elementor-size-medium{font-size:19px}.elementor-widget-heading .elementor-heading-title.elementor-size-large{font-size:29px}.elementor-widget-heading .elementor-heading-title.elementor-size-xl{font-size:39px}.elementor-widget-heading .elementor-heading-title.elementor-size-xxl{font-size:59px}
                                                </style>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-894dcb1 elementor-widget__width-auto elementor-widget elementor-widget-button" data-id="894dcb1" data-element_type="widget" data-widget_type="button.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-button-wrapper"> <a href="https://client.dialer360.com/index.php/login" target="_blank" class="elementor-button-link elementor-button elementor-size-sm" role="button"> <span class="elementor-button-content-wrapper"> <span class="elementor-button-icon elementor-align-icon-left"> <i aria-hidden="true" class="fa fa-user"></i> </span> <span class="elementor-button-text">Login</span> </span> </a> </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-18eed70 elementor-widget__width-auto elementor-widget elementor-widget-button" data-id="18eed70" data-element_type="widget" data-widget_type="button.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-button-wrapper"> <a href="https://client.dialer360.com/register.php" target="_blank" class="elementor-button-link elementor-button elementor-size-sm" role="button"> <span class="elementor-button-content-wrapper"> <span class="elementor-button-icon elementor-align-icon-left"> <i class="fa-solid fa-right-from-bracket"></i> </span> <span class="elementor-button-text">logout</span> </span> </a> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="elementor-section elementor-top-section elementor-element elementor-element-f98c02e elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="f98c02e" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;sticky&quot;:&quot;top&quot;,&quot;sticky_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;sticky_offset&quot;:0,&quot;sticky_effects_offset&quot;:0}">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-ab85fa2" data-id="ab85fa2" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-2e73975 elementor-widget elementor-widget-theme-site-logo elementor-widget-image" data-id="2e73975" data-element_type="widget" data-widget_type="theme-site-logo.default">
                                            <div class="elementor-widget-container"> <a href="index-dialer.php"> <img width="194" height="89" src="../as-dialer-css/wp-content/uploads/2022/01/as-dialer-logo.png" class="attachment-thumbnail size-thumbnail" alt=""/></a> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-c3dca84" data-id="c3dca84" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-30e91d3 elementor-nav-menu__align-right elementor-nav-menu--indicator-none elementor-nav-menu--dropdown-tablet elementor-nav-menu__text-align-aside elementor-nav-menu--toggle elementor-nav-menu--burger elementor-widget elementor-widget-nav-menu" data-id="30e91d3" data-element_type="widget" data-settings="{&quot;layout&quot;:&quot;horizontal&quot;,&quot;toggle&quot;:&quot;burger&quot;}" data-widget_type="nav-menu.default">
                                            <div class="elementor-widget-container">
                                                <nav role="navigation" class="elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-horizontal e--pointer-underline e--animation-fade">
                                                    <ul id="menu-1-30e91d3" class="elementor-nav-menu">
                                                        <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-686"><a href="index-dialer.php" aria-current="page" class="elementor-item elementor-item-active">Home</a></li>
                                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-644"><a href="#" class="elementor-item elementor-item-anchor">Products</a>
                                                            <ul class="sub-menu elementor-nav-menu--dropdown">
                                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-646"><a href="ringless-voicemail-services/index.php" class="elementor-sub-item">Ringless Voicemail</a></li>
                                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-650"><a href="auto-dialer/index.php" class="elementor-sub-item">Auto Dialer<span style="padding-right:23px;"><i class="fa fa-caret-right"></i></span></a>
                                                                    <ul class="sub-menu elementor-nav-menu--dropdown">
                                                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-647"><a href="predictive-dialer/index.php" class="elementor-sub-item">Predictive Dialer</a></li>
                                                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11926"><a href="power-dialer/index.php" class="elementor-sub-item">Power Dialer</a></li>
                                                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11994"><a href="progressive-dialer/index.php" class="elementor-sub-item">Progressive Dialer</a></li>
                                                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-651"><a href="ai-dialer/index.php" class="elementor-sub-item">Ai Dialer</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-649"><a href="click-to-call/index.php" class="elementor-sub-item">Click To Call</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-669"><a href="#" class="elementor-item elementor-item-anchor">Features</a>
                                                            <ul class="sub-menu elementor-nav-menu--dropdown">
                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-670"><a href="agent-statusboard/index.php" class="elementor-sub-item">Agent Statusboard</a></li>
                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-677"><a href="pci-compliance/index.php" class="elementor-sub-item">PCI Compliant</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-652"><a href="#" class="elementor-item elementor-item-anchor">Resources</a>
                                                            <ul class="sub-menu elementor-nav-menu--dropdown">
                                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8047"><a href="blog/index.php" class="elementor-sub-item">Blog</a></li>
                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-684"><a href="https://downloads.dialer360.com/" class="elementor-sub-item">Downloads</a></li>
                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8540"><a href="https://client.dialer360.com/index.php/knowledgebase" class="elementor-sub-item">Knowledge Base</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-658"><a href="#" class="elementor-item elementor-item-anchor">Our Company</a>
                                                            <ul class="sub-menu elementor-nav-menu--dropdown">
                                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-659"><a href="why-dialer360/index.php" class="elementor-sub-item">Why AS-Dialer</a></li>
                                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-15753"><a href="clients-review/index.php" class="elementor-sub-item">Clients Review</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-680"><a href="#" class="elementor-item elementor-item-anchor">Pricing</a>
                                                            <ul class="sub-menu elementor-nav-menu--dropdown">
                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-681"><a href="pay-as-you-go/index.php" class="elementor-sub-item">Pay As You Go</a></li>
                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-682"><a href="demo-request/index.php" class="elementor-sub-item">Free Demo</a></li>
                                                            </ul>
                                                        </li>
                                                        <li
                                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-664">
                                                            <button style="border:none;border-radius:30px;color:black;"><a href="contact-us.php"
                                                                class="elementor-item elementor-item-anchor-contact">Contact
                                                                Us</a></button>
                                                        </li>
                                                    </ul>
                                                </nav>

                                                
                                                <div class="elementor-menu-toggle" role="button" tabindex="0" aria-label="Menu Toggle" aria-expanded="false"> <i class="eicon-menu-bar" aria-hidden="true"></i> <span class="elementor-screen-only">Menu</span> </div>
                                                <nav class="elementor-nav-menu--dropdown elementor-nav-menu__container" role="navigation" aria-hidden="true">
                                                    <ul id="menu-2-30e91d3" class="elementor-nav-menu">
                                                        <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-686"><a href="index.php" aria-current="page" class="elementor-item elementor-item-active">Home</a></li>
                                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-644"><a href="#" class="elementor-item elementor-item-anchor">Products</a>
                                                            <ul class="sub-menu elementor-nav-menu--dropdown">
                                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-646"><a href="ringless-voicemail-services/index.php" class="elementor-sub-item">Ringless Voicemail</a></li>
                                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-650"><a href="auto-dialer/index.php" class="elementor-sub-item">Auto Dialer<span style="padding-right:23px;"><i class="fa fa-caret-right"></i></span></a>
                                                                    <ul class="sub-menu elementor-nav-menu--dropdown">
                                                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-647"><a href="predictive-dialer/index.php" class="elementor-sub-item">Predictive Dialer</a></li>
                                                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11926"><a href="power-dialer/index.php" class="elementor-sub-item">Power Dialer</a></li>
                                                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11994"><a href="progressive-dialer/index.php" class="elementor-sub-item">Progressive Dialer</a></li>
                                                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-651"><a href="ai-dialer/index.php" class="elementor-sub-item">Ai Dialer</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-648"><a href="hosted-pbx-service-solutions/index.php" class="elementor-sub-item">Hosted PBX Services</a></li>
                                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-645"><a href="voice-broadcast/index.php" class="elementor-sub-item">Voice Broadcasting</a></li>
                                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-649"><a href="click-to-call/index.php" class="elementor-sub-item">Click To Call</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-669"><a href="#" class="elementor-item elementor-item-anchor">Features</a>
                                                            <ul class="sub-menu elementor-nav-menu--dropdown">
                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-670"><a href="agent-statusboard/index.php" class="elementor-sub-item">Agent Statusboard</a></li>
                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-671"><a href="billing-portal/index.php" class="elementor-sub-item">Cheapest VoIP</a></li>
                                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11294"><a href="tps-filtering/index.php" class="elementor-sub-item">TPS/DNC Filtering</a></li>
                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-672"><a href="recording-portal/index.php" class="elementor-sub-item">Recording Portal</a></li>
                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-673"><a href="display-local-callerid/index.php" class="elementor-sub-item">Display local caller id</a></li>
                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-674"><a href="crm/index.php" class="elementor-sub-item">CRM</a></li>
                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-675"><a href="web-phone/index.php" class="elementor-sub-item">Web phone</a></li>
                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-676"><a href="internal-chat/index.php" class="elementor-sub-item">Internal Chat</a></li>
                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-677"><a href="pci-compliance/index.php" class="elementor-sub-item">PCI Compliant</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-652"><a href="#" class="elementor-item elementor-item-anchor">Resources</a>
                                                            <ul class="sub-menu elementor-nav-menu--dropdown">
                                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8047"><a href="blog/index.php" class="elementor-sub-item">Blog</a></li>
                                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-654"><a href="videos/index.php" class="elementor-sub-item">Videos</a></li>
                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-656"><a href="glossary/index.php" class="elementor-sub-item">Glossary</a></li>
                                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16653"><a href="security-and-compliance/index.php" class="elementor-sub-item">Security &#038; Compliance</a></li>
                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-684"><a href="https://downloads.dialer360.com/" class="elementor-sub-item">Downloads</a></li>
                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8540"><a href="https://client.dialer360.com/index.php/knowledgebase" class="elementor-sub-item">Knowledge Base</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-658"><a href="#" class="elementor-item elementor-item-anchor">Our Company</a>
                                                            <ul class="sub-menu elementor-nav-menu--dropdown">
                                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-659"><a href="why-dialer360/index.php" class="elementor-sub-item">Why Dialer360</a></li>
                                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-663"><a href="reseller/index.php" class="elementor-sub-item">Become a Reseller</a></li>
                                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-15753"><a href="clients-review/index.php" class="elementor-sub-item">Clients Review</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-680"><a href="#" class="elementor-item elementor-item-anchor">Pricing</a>
                                                            <ul class="sub-menu elementor-nav-menu--dropdown">
                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-681"><a href="pay-as-you-go/index.php" class="elementor-sub-item">Pay As You Go</a></li>
                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-682"><a href="demo-request/index.php" class="elementor-sub-item">Free Demo</a></li>
                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-683"><a href="other-services/index.php" class="elementor-sub-item">Other Services</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-664"><a href="#" class="elementor-item elementor-item-anchor">Support</a>
                                                            <ul class="sub-menu elementor-nav-menu--dropdown">
                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-665"><a href="https://client.dialer360.com/submitticket.php" class="elementor-sub-item">Submit a Ticket</a></li>
                                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-666"><a href="faqs/index.php" class="elementor-sub-item">FAQ</a></li>
                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-667"><a href="contact-us.php" class="elementor-sub-item">Contact Us</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </header><!-- #site-header -->