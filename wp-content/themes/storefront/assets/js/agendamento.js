(function() {
    this.Calendly = {}
}).call(this), Calendly.domReady = function(e) {
        var t = !1,
            n = function() {
                document.addEventListener ? (document.removeEventListener("DOMContentLoaded", o), window.removeEventListener("load", o)) : (document.detachEvent("onreadystatechange", o), window.detachEvent("onload", o))
            },
            o = function() {
                t || !document.addEventListener && "load" !== event.type && "complete" !== document.readyState || (t = !0, n(), e())
            };
        if ("complete" === document.readyState) e();
        else if (document.addEventListener) document.addEventListener("DOMContentLoaded", o), window.addEventListener("load", o);
        else {
            document.attachEvent("onreadystatechange", o), window.attachEvent("onload", o);
            var i = !1;
            try {
                i = null == window.frameElement && document.documentElement
            } catch (l) {}
            i && i.doScroll && ! function r() {
                if (!t) {
                    try {
                        i.doScroll("left")
                    } catch (o) {
                        return setTimeout(r, 50)
                    }
                    t = !0, n(), e()
                }
            }()
        }
    },
    function() {
        Calendly.initInlineWidgets = function() {
            return Calendly.domReady(function() {
                return Calendly.createInlineWidgets()
            })
        }, Calendly.initBadgeWidget = function(e) {
            return Calendly.domReady(function() {
                return Calendly.createBadgeWidget(e)
            })
        }, Calendly.createInlineWidgets = function() {
            var e, t, n, o, i;
            for (t = document.querySelectorAll(".calendly-inline-widget"), i = [], n = 0, o = t.length; o > n; n++) e = t[n], e.getAttribute("data-processed") ? i.push(void 0) : (e.setAttribute("data-processed", !0), i.push(new Calendly.Iframe(e, !0)));
            return i
        }, Calendly.createBadgeWidget = function(e) {
            return this.destroyBadgeWiget(), Calendly.badgeWidget = new Calendly.BadgeWidget({
                color: e.color,
                text: e.text,
                branding: e.branding,
                onClick: function() {
                    return Calendly.showPopupWidget(e.url)
                }
            })
        }, Calendly.destroyBadgeWiget = function() {
            return Calendly.badgeWidget ? (Calendly.badgeWidget.destroy(), delete Calendly.badgeWidget) : void 0
        }, Calendly.showPopupWidget = function(e) {
            return this.closePopupWidget(), Calendly.popupWidget = new Calendly.PopupWidget(e, function() {
                return delete Calendly.popupWidget
            }), Calendly.popupWidget.show()
        }, Calendly.closePopupWidget = function() {
            return Calendly.popupWidget ? Calendly.popupWidget.close() : void 0
        }
    }.call(this),
    function() {
        Calendly.Iframe = function() {
            function e(e, t) {
                this.parent = e, this.inlineStyles = null != t ? t : !1, this.build(), this.inject()
            }
            return e.prototype.isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent), e.prototype.build = function() {
                return this.node = document.createElement("iframe"), this.node.src = this.getSource(), this.node.width = "100%", this.node.height = "100%", this.node.frameBorder = "0"
            }, e.prototype.inject = function() {
                return this.format(), this.parent.appendChild(this.buildSpinner()), this.parent.appendChild(this.node)
            }, e.prototype.getSource = function() {
                return this.parent.getAttribute("data-url")
            }, e.prototype.format = function() {
                return this.isMobile ? this.formatMobile() : this.formatDesktop()
            }, e.prototype.formatDesktop = function() {
                return this.inlineStyles ? this.parent.setAttribute("style", "position: relative;" + this.parent.getAttribute("style")) : void 0
            }, e.prototype.formatMobile = function() {
                return this.inlineStyles ? this.parent.setAttribute("style", "position: relative;overflow-y:auto;-webkit-overflow-scrolling:touch;" + this.parent.getAttribute("style")) : this.parent.className += " mobile"
            }, e.prototype.buildSpinner = function() {
                var e;
                return e = document.createElement("div"), e.className = "spinner", e.appendChild(this.buildBounce(1)), e.appendChild(this.buildBounce(2)), e.appendChild(this.buildBounce(3)), e
            }, e.prototype.buildBounce = function(e) {
                var t;
                return t = document.createElement("div"), t.className = "bounce" + e, t
            }, e
        }()
    }.call(this), Calendly.initInlineWidgets();