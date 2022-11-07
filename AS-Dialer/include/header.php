<!DOCTYPE html>
<html class="html" lang="en-US">

<head>
    <meta charset="UTF-8">
    <script>
    class RocketLazyLoadScripts {
        constructor() {
            this.triggerEvents = ["keydown", "mousedown", "mousemove", "touchmove", "touchstart", "touchend",
                    "wheel"
                ], this.userEventHandler = this._triggerListener.bind(this), this.touchStartHandler = this
                ._onTouchStart.bind(this), this.touchMoveHandler = this._onTouchMove.bind(this), this
                .touchEndHandler = this._onTouchEnd.bind(this), this.clickHandler = this._onClick.bind(this), this
                .interceptedClicks = [], window.addEventListener("pageshow", (e => {
                    this.persisted = e.persisted
                })), window.addEventListener("DOMContentLoaded", (() => {
                    this._preconnect3rdParties()
                })), this.delayedScripts = {
                    normal: [],
                    async: [],
                    defer: []
                }, this.allJQueries = []
        }
        _addUserInteractionListener(e) {
            document.hidden ? e._triggerListener() : (this.triggerEvents.forEach((t => window.addEventListener(t, e
                .userEventHandler, {
                    passive: !0
                }))), window.addEventListener("touchstart", e.touchStartHandler, {
                passive: !0
            }), window.addEventListener("mousedown", e.touchStartHandler), document.addEventListener(
                "visibilitychange", e.userEventHandler))
        }
        _removeUserInteractionListener() {
            this.triggerEvents.forEach((e => window.removeEventListener(e, this.userEventHandler, {
                passive: !0
            }))), document.removeEventListener("visibilitychange", this.userEventHandler)
        }
        _onTouchStart(e) {
            "HTML" !== e.target.tagName && (window.addEventListener("touchend", this.touchEndHandler), window
                .addEventListener("mouseup", this.touchEndHandler), window.addEventListener("touchmove", this
                    .touchMoveHandler, {
                        passive: !0
                    }), window.addEventListener("mousemove", this.touchMoveHandler), e.target.addEventListener(
                    "click", this.clickHandler), this._renameDOMAttribute(e.target, "onclick", "rocket-onclick")
            )
        }
        _onTouchMove(e) {
            window.removeEventListener("touchend", this.touchEndHandler), window.removeEventListener("mouseup", this
                .touchEndHandler), window.removeEventListener("touchmove", this.touchMoveHandler, {
                passive: !0
            }), window.removeEventListener("mousemove", this.touchMoveHandler), e.target.removeEventListener(
                "click", this.clickHandler), this._renameDOMAttribute(e.target, "rocket-onclick", "onclick")
        }
        _onTouchEnd(e) {
            window.removeEventListener("touchend", this.touchEndHandler), window.removeEventListener("mouseup", this
                .touchEndHandler), window.removeEventListener("touchmove", this.touchMoveHandler, {
                passive: !0
            }), window.removeEventListener("mousemove", this.touchMoveHandler)
        }
        _onClick(e) {
            e.target.removeEventListener("click", this.clickHandler), this._renameDOMAttribute(e.target,
                    "rocket-onclick", "onclick"), this.interceptedClicks.push(e), e.preventDefault(), e
                .stopPropagation(), e.stopImmediatePropagation()
        }
        _replayClicks() {
            window.removeEventListener("touchstart", this.touchStartHandler, {
                passive: !0
            }), window.removeEventListener("mousedown", this.touchStartHandler), this.interceptedClicks.forEach(
                (e => {
                    e.target.dispatchEvent(new MouseEvent("click", {
                        view: e.view,
                        bubbles: !0,
                        cancelable: !0
                    }))
                }))
        }
        _renameDOMAttribute(e, t, n) {
            e.hasAttribute && e.hasAttribute(t) && (event.target.setAttribute(n, event.target.getAttribute(t)),
                event.target.removeAttribute(t))
        }
        _triggerListener() {
            this._removeUserInteractionListener(this), "loading" === document.readyState ? document
                .addEventListener("DOMContentLoaded", this._loadEverythingNow.bind(this)) : this
                ._loadEverythingNow()
        }
        _preconnect3rdParties() {
            let e = [];
            document.querySelectorAll("script[type=rocketlazyloadscript]").forEach((t => {
                    if (t.hasAttribute("src")) {
                        const n = new URL(t.html).origin;
                        n !== location.origin && e.push({
                            src: n,
                            crossOrigin: t.crossOrigin || "module" === t.getAttribute(
                                "data-rocket-type")
                        })
                    }
                })), e = [...new Map(e.map((e => [JSON.stringify(e), e]))).values()], this
                ._batchInjectResourceHints(e, "preconnect")
        }
        async _loadEverythingNow() {
            this.lastBreath = Date.now(), this._delayEventListeners(), this._delayJQueryReady(this), this
                ._handleDocumentWrite(), this._registerAllDelayedScripts(), this._preloadAllScripts(), await this
                ._loadScriptsFromList(this.delayedScripts.normal), await this._loadScriptsFromList(this
                    .delayedScripts.defer), await this._loadScriptsFromList(this.delayedScripts.async);
            try {
                await this._triggerDOMContentLoaded(), await this._triggerWindowLoad()
            } catch (e) {}
            window.dispatchEvent(new Event("rocket-allScriptsLoaded")), this._replayClicks()
        }
        _registerAllDelayedScripts() {
            document.querySelectorAll("script[type=rocketlazyloadscript]").forEach((e => {
                e.hasAttribute("src") ? e.hasAttribute("async") && !1 !== e.async ? this.delayedScripts
                    .async.push(e) : e.hasAttribute("defer") && !1 !== e.defer || "module" === e
                    .getAttribute("data-rocket-type") ? this.delayedScripts.defer.push(e) : this
                    .delayedScripts.normal.push(e) : this.delayedScripts.normal.push(e)
            }))
        }
        async _transformScript(e) {
            return await this._littleBreath(), new Promise((t => {
                const n = document.createElement("script");
                [...e.attributes].forEach((e => {
                    let t = e.nodeName;
                    "type" !== t && ("data-rocket-type" === t && (t = "type"), n
                        .setAttribute(t, e.nodeValue))
                })), e.hasAttribute("src") ? (n.addEventListener("load", t), n.addEventListener(
                    "error", t)) : (n.text = e.text, t());
                try {
                    e.parentNode.replaceChild(n, e)
                } catch (e) {
                    t()
                }
            }))
        }
        async _loadScriptsFromList(e) {
            const t = e.shift();
            return t ? (await this._transformScript(t), this._loadScriptsFromList(e)) : Promise.resolve()
        }
        _preloadAllScripts() {
            this._batchInjectResourceHints([...this.delayedScripts.normal, ...this.delayedScripts.defer, ...this
                .delayedScripts.async
            ], "preload")
        }
        _batchInjectResourceHints(e, t) {
            var n = document.createDocumentFragment();
            e.forEach((e => {
                if (e.src) {
                    const i = document.createElement("link");
                    i.href = e.src, i.rel = t, "preconnect" !== t && (i.as = "script"), e
                        .getAttribute && "module" === e.getAttribute("data-rocket-type") && (i
                            .crossOrigin = !0), e.crossOrigin && (i.crossOrigin = e.crossOrigin), n
                        .appendChild(i)
                }
            })), document.head.appendChild(n)
        }
        _delayEventListeners() {
            let e = {};

            function t(t, n) {
                ! function(t) {
                    function n(n) {
                        return e[t].eventsToRewrite.indexOf(n) >= 0 ? "rocket-" + n : n
                    }
                    e[t] || (e[t] = {
                        originalFunctions: {
                            add: t.addEventListener,
                            remove: t.removeEventListener
                        },
                        eventsToRewrite: []
                    }, t.addEventListener = function() {
                        arguments[0] = n(arguments[0]), e[t].originalFunctions.add.apply(t, arguments)
                    }, t.removeEventListener = function() {
                        arguments[0] = n(arguments[0]), e[t].originalFunctions.remove.apply(t, arguments)
                    })
                }(t), e[t].eventsToRewrite.push(n)
            }

            function n(e, t) {
                let n = e[t];
                Object.defineProperty(e, t, {
                    get: () => n || function() {},
                    set(i) {
                        e["rocket" + t] = n = i
                    }
                })
            }
            t(document, "DOMContentLoaded"), t(window, "DOMContentLoaded"), t(window, "load"), t(window,
                "pageshow"), t(document, "readystatechange"), n(document, "onreadystatechange"), n(window,
                "onload"), n(window, "onpageshow")
        }
        _delayJQueryReady(e) {
            let t = window.jQuery;
            Object.defineProperty(window, "jQuery", {
                get: () => t,
                set(n) {
                    if (n && n.fn && !e.allJQueries.includes(n)) {
                        n.fn.ready = n.fn.init.prototype.ready = function(t) {
                            e.domReadyFired ? t.bind(document)(n) : document.addEventListener(
                                "rocket-DOMContentLoaded", (() => t.bind(document)(n)))
                        };
                        const t = n.fn.on;
                        n.fn.on = n.fn.init.prototype.on = function() {
                            if (this[0] === window) {
                                function e(e) {
                                    return e.split(" ").map((e => "load" === e || 0 === e.indexOf(
                                        "load.") ? "rocket-jquery-load" : e)).join(" ")
                                }
                                "string" == typeof arguments[0] || arguments[0] instanceof String ?
                                    arguments[0] = e(arguments[0]) : "object" == typeof arguments[
                                        0] && Object.keys(arguments[0]).forEach((t => {
                                        delete Object.assign(arguments[0], {
                                            [e(t)]: arguments[0][t]
                                        })[t]
                                    }))
                            }
                            return t.apply(this, arguments), this
                        }, e.allJQueries.push(n)
                    }
                    t = n
                }
            })
        }
        async _triggerDOMContentLoaded() {
            this.domReadyFired = !0, await this._littleBreath(), document.dispatchEvent(new Event(
                    "rocket-DOMContentLoaded")), await this._littleBreath(), window.dispatchEvent(new Event(
                    "rocket-DOMContentLoaded")), await this._littleBreath(), document.dispatchEvent(new Event(
                    "rocket-readystatechange")), await this._littleBreath(), document.rocketonreadystatechange &&
                document.rocketonreadystatechange()
        }
        async _triggerWindowLoad() {
            await this._littleBreath(), window.dispatchEvent(new Event("rocket-load")), await this._littleBreath(),
                window.rocketonload && window.rocketonload(), await this._littleBreath(), this.allJQueries.forEach((
                    e => e(window).trigger("rocket-jquery-load"))), await this._littleBreath();
            const e = new Event("rocket-pageshow");
            e.persisted = this.persisted, window.dispatchEvent(e), await this._littleBreath(), window
                .rocketonpageshow && window.rocketonpageshow({
                    persisted: this.persisted
                })
        }
        _handleDocumentWrite() {
            const e = new Map;
            document.write = document.writeln = function(t) {
                const n = document.currentScript,
                    i = document.createRange(),
                    r = n.parentElement;
                let o = e.get(n);
                void 0 === o && (o = n.nextSibling, e.set(n, o));
                const s = document.createDocumentFragment();
                i.setStart(s, 0), s.appendChild(i.createContextualFragment(t)), r.insertBefore(s, o)
            }
        }
        async _littleBreath() {
            Date.now() - this.lastBreath > 45 && (await this._requestAnimFrame(), this.lastBreath = Date.now())
        }
        async _requestAnimFrame() {
            return document.hidden ? new Promise((e => setTimeout(e))) : new Promise((e => requestAnimationFrame(
                e)))
        }
        static run() {
            const e = new RocketLazyLoadScripts;
            e._addUserInteractionListener(e)
        }
    }
    RocketLazyLoadScripts.run();
    </script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dialer360 - Call center dialer | Best Dialer Software &amp; System</title>
    <link rel="preload" as="style"
        href="https://fonts.googleapis.com/css?family=Poppins%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%2C100i%2C200i%2C300i%2C400i%2C500i%2C600i%2C700i%2C800i%2C900i%7CPoppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;subset=latin&amp;display=swap" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Poppins%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%2C100i%2C200i%2C300i%2C400i%2C500i%2C600i%2C700i%2C800i%2C900i%7CPoppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;subset=latin&amp;display=swap"
        media="print" onload="this.media='all'" /><noscript>
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Poppins%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%2C100i%2C200i%2C300i%2C400i%2C500i%2C600i%2C700i%2C800i%2C900i%7CPoppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;subset=latin&amp;display=swap" />
    </noscript>
    <link rel="stylesheet" href="../as-dialer-css/wp-content/cache/min/1/478f1451e00e8c9f173c093238e6eaa6.css"
        media="all" data-minify="1" />
    <link rel="stylesheet" href='../as-dialer-css/wp-content/uploads/elementor/css/style-3.css'>

    <link rel='stylesheet' href='../as-dialer-css/wp-content/uploads/elementor/css/style-1.css' />

    <link rel='stylesheet' id='elementor-post-5-css'
        href='../as-dialer-css/wp-content/uploads/elementor/css/post-562b9.css?ver=1654690571' media='all' />

    <link rel='stylesheet' id='elementor-global-css'
        href='../as-dialer-css/wp-content/uploads/elementor/css/global9dd2.css?ver=1654690591' media='all' />
    <link rel='stylesheet' id='elementor-post-7-css'
        href='../as-dialer-css/wp-content/uploads/elementor/css/post-7b1cc.css?ver=1663069405' media='all' />
    <link rel='stylesheet' id='elementor-post-698-css'
        href='../as-dialer-css/wp-content/uploads/elementor/css/post-6980f4d.css?ver=1663158088' media='all' />
    <link rel='stylesheet' id='elementor-post-71-css'
        href='../as-dialer-css/wp-content/uploads/elementor/css/post-713706.css?ver=1654690593' media='all' />


    <link rel='stylesheet' id='elementor-post-217-css'
        href='../as-dialer-css/wp-content/uploads/elementor/css/post-2176f4d.css?ver=1648653497' media='all' />
    <link rel='stylesheet' id='elementor-post-221-css'
        href='../as-dialer-css/wp-content/uploads/elementor/css/post-221ba7e.css?ver=1661883110' media='all' />
    <link rel='stylesheet' id='elementor-post-358-css'
        href='../as-dialer-css/wp-content/uploads/elementor/css/post-35843ff.css?ver=1661882184' media='all' />
    <link rel='stylesheet' id='elementor-post-9771-css'
        href='../as-dialer-css/wp-content/uploads/elementor/css/post-9771d57e.css?ver=1645550715' media='all' />
    <link rel='stylesheet' id='elementor-post-18242-css'
        href='../as-dialer-css/wp-content/uploads/elementor/css/post-182428070.css?ver=1661799456'
        media='all' />

    <script type="rocketlazyloadscript" src='../as-dialer-css/wp-includes/js/jquery/jquery.minaf6c.js?ver=3.6.0'
        id='jquery-core-js' defer></script>

    <link rel="icon" href="../as-dialer-css/wp-content/uploads/2022/01/logo-black-24.png" sizes="32x32" />
    <link rel="icon" href="../as-dialer-css/wp-content/uploads/2022/01/logo-black-24.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="../as-dialer-css/wp-content/uploads/2022/01/logo-black-24.png" />

</head>

<body
    class="home page-template-default page page-id-7 wp-custom-logo wp-embed-responsive oceanwp-theme dropdown-mobile default-breakpoint content-full-width content-max-width page-header-disabled has-breadcrumbs elementor-default elementor-kit-5 elementor-page elementor-page-7"
    itemscope="itemscope" itemtype="https://schema.org/WebPage">


    <div id="outer-wrap" class="site clr">

        <a class="skip-link screen-reader-text" href="#main">Skip to content</a>


        <div id="wrap" class="clr">



            <header id="site-header" class="clr" data-height="74" role="banner">

                <div data-elementor-type="header" data-elementor-id="698"
                    class="elementor elementor-698 elementor-location-header">
                    <div class="elementor-section-wrap">
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-b4938f2 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="b4938f2" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-eb05307"
                                    data-id="eb05307" data-element_type="column">
                                    <h4 style="margin-top: 10px !important;margin-bottom: 10px !important;">
                                        Info@asdialer.com</h4>
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-0e5b8c6 elementor-widget__width-auto elementor-widget elementor-widget-heading"
                                            data-id="0e5b8c6" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <link rel="stylesheet"
                                                    href='../as-dialer-css/wp-content/uploads/elementor/css/style-4.css'>

                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-894dcb1 elementor-widget__width-auto elementor-widget elementor-widget-button"
                                            data-id="894dcb1" data-element_type="widget"
                                            data-widget_type="button.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-button-wrapper">
                                                    <a href="https://client.dialer360.com/index.php/login"
                                                        target="_blank"
                                                        class="elementor-button-link elementor-button elementor-size-sm"
                                                        role="button">
                                                        <span class="elementor-button-content-wrapper">
                                                            <span
                                                                class="elementor-button-icon elementor-align-icon-left">
                                                                <i aria-hidden="true" class="fas fa-thin fa-user"></i>
                                                            </span>
                                                            <span class="elementor-button-text">Log in</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-18eed70 elementor-widget__width-auto elementor-widget elementor-widget-button"
                                            data-id="18eed70" data-element_type="widget"
                                            data-widget_type="button.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-button-wrapper">
                                                    <a href="https://client.dialer360.com/register.php" target="_blank"
                                                        class="elementor-button-link elementor-button elementor-size-sm"
                                                        role="button">
                                                        <span class="elementor-button-content-wrapper">
                                                            <span
                                                                class="elementor-button-icon elementor-align-icon-left">
                                                                <i aria-hidden="true" class="fas fa-registered"></i>
                                                            </span>
                                                            <span class="elementor-button-text">Log out</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-f98c02e elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="f98c02e" data-element_type="section"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;sticky&quot;:&quot;top&quot;,&quot;sticky_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;sticky_offset&quot;:0,&quot;sticky_effects_offset&quot;:0}">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-ab85fa2"
                                    data-id="ab85fa2" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-2e73975 elementor-widget elementor-widget-theme-site-logo elementor-widget-image"
                                            data-id="2e73975" data-element_type="widget"
                                            data-widget_type="theme-site-logo.default">
                                            <div class="elementor-widget-container">
                                                <a href="index.html">
                                                    <img width="194" height="89"
                                                        src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20194%2089'%3E%3C/svg%3E"
                                                        class="attachment-thumbnail size-thumbnail" alt=""
                                                        data-lazy-src="https://as-dialer-css/wp-content/uploads/2022/01/logo.svg" /><noscript><img
                                                            width="194" height="89"
                                                            src="https://as-dialer-css/wp-content/uploads/2022/01/logo.svg"
                                                            class="attachment-thumbnail size-thumbnail"
                                                            alt="" /></noscript> </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-c3dca84"
                                    data-id="c3dca84" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-30e91d3 elementor-nav-menu__align-right elementor-nav-menu--indicator-none elementor-nav-menu--dropdown-tablet elementor-nav-menu__text-align-aside elementor-nav-menu--toggle elementor-nav-menu--burger elementor-widget elementor-widget-nav-menu"
                                            data-id="30e91d3" data-element_type="widget"
                                            data-settings="{&quot;layout&quot;:&quot;horizontal&quot;,&quot;toggle&quot;:&quot;burger&quot;}"
                                            data-widget_type="nav-menu.default">
                                            <div class="elementor-widget-container">
                                                <nav role="navigation"
                                                    class="elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-horizontal e--pointer-underline e--animation-fade">
                                                    <ul id="menu-1-30e91d3" class="elementor-nav-menu">
                                                        <li
                                                            class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-686">
                                                            <a href="index.html" aria-current="page"
                                                                class="elementor-item elementor-item-active">Home</a>
                                                        </li>
                                                        <li
                                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-669">
                                                            <a href="#"
                                                                class="elementor-item elementor-item-anchor">Features</a>
                                                            <ul class="sub-menu elementor-nav-menu--dropdown">
                                                                <li
                                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-670">
                                                                    <a href="agent-statusboard/index.html"
                                                                        class="elementor-sub-item">Agent Statusboard</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-671">
                                                                    <a href="billing-portal/index.html"
                                                                        class="elementor-sub-item">Cheapest VoIP</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11294">
                                                                    <a href="tps-filtering/index.html"
                                                                        class="elementor-sub-item">TPS/DNC Filtering</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-672">
                                                                    <a href="recording-portal/index.html"
                                                                        class="elementor-sub-item">Recording Portal</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-673">
                                                                    <a href="display-local-callerid/index.html"
                                                                        class="elementor-sub-item">Display local caller
                                                                        id</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-674">
                                                                    <a href="crm/index.html"
                                                                        class="elementor-sub-item">CRM</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-675">
                                                                    <a href="web-phone/index.html"
                                                                        class="elementor-sub-item">Web phone</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-676">
                                                                    <a href="internal-chat/index.html"
                                                                        class="elementor-sub-item">Internal Chat</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-677">
                                                                    <a href="pci-compliance/index.html"
                                                                        class="elementor-sub-item">PCI Compliant</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li
                                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-652">
                                                            <a href="#"
                                                                class="elementor-item elementor-item-anchor">Resources</a>
                                                            <ul class="sub-menu elementor-nav-menu--dropdown">
                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8047">
                                                                    <a href="blog/index.html"
                                                                        class="elementor-sub-item">Blog</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-654">
                                                                    <a href="videos/index.html"
                                                                        class="elementor-sub-item">Videos</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-656">
                                                                    <a href="glossary/index.html"
                                                                        class="elementor-sub-item">Glossary</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16653">
                                                                    <a href="security-and-compliance/index.html"
                                                                        class="elementor-sub-item">Security &#038;
                                                                        Compliance</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-684">
                                                                    <a href="https://aresync.com/"
                                                                        class="elementor-sub-item">Downloads</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8540">
                                                                    <a href="https://aresync.com/"
                                                                        class="elementor-sub-item">Knowledge Base</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li
                                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-644">
                                                            <a href="#"
                                                                class="elementor-item elementor-item-anchor">Products</a>
                                                            <ul class="sub-menu elementor-nav-menu--dropdown">
                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-646">
                                                                    <a href="ringless-voicemail-services/index.html"
                                                                        class="elementor-sub-item">Ringless
                                                                        Voicemail</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-650">
                                                                    <a href="auto-dialer/index.html"
                                                                        class="elementor-sub-item">Auto Dialer<span
                                                                            style="padding-right:23px;"><i
                                                                                class="fa fa-caret-right"></i></span></a>
                                                                    <ul class="sub-menu elementor-nav-menu--dropdown">
                                                                        <li
                                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-647">
                                                                            <a href="predictive-dialer/index.html"
                                                                                class="elementor-sub-item">Predictive
                                                                                Dialer</a>
                                                                        </li>
                                                                        <li
                                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11926">
                                                                            <a href="power-dialer/index.html"
                                                                                class="elementor-sub-item">Power
                                                                                Dialer</a>
                                                                        </li>
                                                                        <li
                                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11994">
                                                                            <a href="progressive-dialer/index.html"
                                                                                class="elementor-sub-item">Progressive
                                                                                Dialer</a>
                                                                        </li>
                                                                        <li
                                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-651">
                                                                            <a href="ai-dialer/index.html"
                                                                                class="elementor-sub-item">Ai Dialer</a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-648">
                                                                    <a href="hosted-pbx-service-solutions/index.html"
                                                                        class="elementor-sub-item">Hosted PBX
                                                                        Services</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-645">
                                                                    <a href="voice-broadcast/index.html"
                                                                        class="elementor-sub-item">Voice
                                                                        Broadcasting</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-649">
                                                                    <a href="click-to-call/index.html"
                                                                        class="elementor-sub-item">Click To Call</a>
                                                                </li>
                                                            </ul>
                                                        </li>

                                                        <li
                                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-658">
                                                            <a href="#" class="elementor-item elementor-item-anchor">Our
                                                                Company</a>
                                                            <ul class="sub-menu elementor-nav-menu--dropdown">
                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-659">
                                                                    <a href="why-dialer360/index.html"
                                                                        class="elementor-sub-item">Why Dialer360</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-663">
                                                                    <a href="reseller/index.html"
                                                                        class="elementor-sub-item">Become a Reseller</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-15753">
                                                                    <a href="clients-review/index.html"
                                                                        class="elementor-sub-item">Clients Review</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li
                                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-680">
                                                            <a href="#"
                                                                class="elementor-item elementor-item-anchor">Pricing</a>
                                                            <ul class="sub-menu elementor-nav-menu--dropdown">
                                                                <li
                                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-681">
                                                                    <a href="pay-as-you-go/index.html"
                                                                        class="elementor-sub-item">Pay As You Go</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-682">
                                                                    <a href="demo-request/index.html"
                                                                        class="elementor-sub-item">Free Demo</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-683">
                                                                    <a href="other-services/index.html"
                                                                        class="elementor-sub-item">Other Services</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li
                                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-664">
                                                            <a href="https://client.dialer360.com/contact.php"
                                                                class="elementor-item elementor-item-anchor-contact">Contact
                                                                Us</a>
                                                        </li>
                                                    </ul>
                                                </nav>
                                                <div class="elementor-menu-toggle" role="button" tabindex="0"
                                                    aria-label="Menu Toggle" aria-expanded="false">
                                                    <i class="eicon-menu-bar" aria-hidden="true"></i>
                                                    <span class="elementor-screen-only">Menu</span>
                                                </div>
                                                <nav class="elementor-nav-menu--dropdown elementor-nav-menu__container"
                                                    role="navigation" aria-hidden="true">
                                                    <ul id="menu-2-30e91d3" class="elementor-nav-menu">
                                                        <li
                                                            class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-686">
                                                            <a href="index.html" aria-current="page"
                                                                class="elementor-item elementor-item-active">Home</a>
                                                        </li>
                                                        <li
                                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-644">
                                                            <a href="#"
                                                                class="elementor-item elementor-item-anchor">Products</a>
                                                            <ul class="sub-menu elementor-nav-menu--dropdown">
                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-646">
                                                                    <a href="ringless-voicemail-services/index.html"
                                                                        class="elementor-sub-item">Ringless
                                                                        Voicemail</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-650">
                                                                    <a href="auto-dialer/index.html"
                                                                        class="elementor-sub-item">Auto Dialer<span
                                                                            style="padding-right:23px;"><i
                                                                                class="fa fa-caret-right"></i></span></a>
                                                                    <ul class="sub-menu elementor-nav-menu--dropdown">
                                                                        <li
                                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-647">
                                                                            <a href="predictive-dialer/index.html"
                                                                                class="elementor-sub-item">Predictive
                                                                                Dialer</a>
                                                                        </li>
                                                                        <li
                                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11926">
                                                                            <a href="power-dialer/index.html"
                                                                                class="elementor-sub-item">Power
                                                                                Dialer</a>
                                                                        </li>
                                                                        <li
                                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11994">
                                                                            <a href="progressive-dialer/index.html"
                                                                                class="elementor-sub-item">Progressive
                                                                                Dialer</a>
                                                                        </li>
                                                                        <li
                                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-651">
                                                                            <a href="ai-dialer/index.html"
                                                                                class="elementor-sub-item">Ai Dialer</a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-648">
                                                                    <a href="hosted-pbx-service-solutions/index.html"
                                                                        class="elementor-sub-item">Hosted PBX
                                                                        Services</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-645">
                                                                    <a href="voice-broadcast/index.html"
                                                                        class="elementor-sub-item">Voice
                                                                        Broadcasting</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-649">
                                                                    <a href="click-to-call/index.html"
                                                                        class="elementor-sub-item">Click To Call</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li
                                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-669">
                                                            <a href="#"
                                                                class="elementor-item elementor-item-anchor">Features</a>
                                                            <ul class="sub-menu elementor-nav-menu--dropdown">
                                                                <li
                                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-670">
                                                                    <a href="agent-statusboard/index.html"
                                                                        class="elementor-sub-item">Agent Statusboard</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-671">
                                                                    <a href="billing-portal/index.html"
                                                                        class="elementor-sub-item">Cheapest VoIP</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11294">
                                                                    <a href="tps-filtering/index.html"
                                                                        class="elementor-sub-item">TPS/DNC Filtering</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-672">
                                                                    <a href="recording-portal/index.html"
                                                                        class="elementor-sub-item">Recording Portal</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-673">
                                                                    <a href="display-local-callerid/index.html"
                                                                        class="elementor-sub-item">Display local caller
                                                                        id</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-674">
                                                                    <a href="crm/index.html"
                                                                        class="elementor-sub-item">CRM</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-675">
                                                                    <a href="web-phone/index.html"
                                                                        class="elementor-sub-item">Web phone</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-676">
                                                                    <a href="internal-chat/index.html"
                                                                        class="elementor-sub-item">Internal Chat</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-677">
                                                                    <a href="pci-compliance/index.html"
                                                                        class="elementor-sub-item">PCI Compliant</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li
                                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-652">
                                                            <a href="#"
                                                                class="elementor-item elementor-item-anchor">Resources</a>
                                                            <ul class="sub-menu elementor-nav-menu--dropdown">
                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8047">
                                                                    <a href="blog/index.html"
                                                                        class="elementor-sub-item">Blog</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-654">
                                                                    <a href="videos/index.html"
                                                                        class="elementor-sub-item">Videos</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-656">
                                                                    <a href="glossary/index.html"
                                                                        class="elementor-sub-item">Glossary</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16653">
                                                                    <a href="security-and-compliance/index.html"
                                                                        class="elementor-sub-item">Security &#038;
                                                                        Compliance</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-684">
                                                                    <a href="https://aresync.com/"
                                                                        class="elementor-sub-item">Downloads</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8540">
                                                                    <a href="https://aresync.com/"
                                                                        class="elementor-sub-item">Knowledge Base</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li
                                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-658">
                                                            <a href="#" class="elementor-item elementor-item-anchor">Our
                                                                Company</a>
                                                            <ul class="sub-menu elementor-nav-menu--dropdown">
                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-659">
                                                                    <a href="why-dialer360/index.html"
                                                                        class="elementor-sub-item">Why Dialer360</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-663">
                                                                    <a href="reseller/index.html"
                                                                        class="elementor-sub-item">Become a Reseller</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-15753">
                                                                    <a href="clients-review/index.html"
                                                                        class="elementor-sub-item">Clients Review</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li
                                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-680">
                                                            <a href="#"
                                                                class="elementor-item elementor-item-anchor">Pricing</a>
                                                            <ul class="sub-menu elementor-nav-menu--dropdown">
                                                                <li
                                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-681">
                                                                    <a href="pay-as-you-go/index.html"
                                                                        class="elementor-sub-item">Pay As You Go</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-682">
                                                                    <a href="demo-request/index.html"
                                                                        class="elementor-sub-item">Free Demo</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-683">
                                                                    <a href="other-services/index.html"
                                                                        class="elementor-sub-item">Other Services</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li
                                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-664">
                                                            <a href="#"
                                                                class="elementor-item elementor-item-anchor">Support</a>
                                                            <ul class="sub-menu elementor-nav-menu--dropdown">
                                                                <li
                                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-665">
                                                                    <a href="https://client.dialer360.com/submitticket.php"
                                                                        class="elementor-sub-item">Submit a Ticket</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-666">
                                                                    <a href="faqs/index.html"
                                                                        class="elementor-sub-item">FAQ</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-667">
                                                                    <a href="https://client.dialer360.com/contact.php"
                                                                        class="elementor-sub-item">Contact Us</a>
                                                                </li>
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