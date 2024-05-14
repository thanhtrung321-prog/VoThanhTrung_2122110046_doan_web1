<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="theme-color" content="#1b74e7">
    <link rel="canonical" href="https://ls9hau5DE8hi.net/">
    <meta name="revisit-after" content="2 days">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="robots" content="noodp,index,follow">
    <meta name="description" content="">
    <title>Dola Pharmacy </title>
    <meta name="keywords" content="Cập nhật sau">


    <meta property="og:type" content="website">
    <meta property="og:title" content="Dola Pharmacy">
    <meta property="og:image" content="../theme/100/491/197/themes/917410/assets/f54U63VgI1TN.png">
    <meta property="og:image:secure_url" content="../theme/100/491/197/themes/917410/assets/f54U63VgI1TN.png">

    <meta property="og:description" content="">
    <meta property="og:url" content="https://ls9hau5DE8hi.net/">
    <meta property="og:site_name" content="Dola Pharmacy">
    <link rel="icon" href="theme/100/491/197/themes/917410/assets/Ng6OqRGrogzq.png" type="image/x-icon">
    <link rel="preload" as="script" href="theme/100/491/197/themes/917410/assets/jquery.js?1710378282026">
    <script src="theme/100/491/197/themes/917410/assets/3G4ydJ4KCSDq.js" type="text/javascript"></script>
    <link rel="preload" as="script" href="theme/100/491/197/themes/917410/assets/swiper.js?1710378282026">
    <script src="theme/100/491/197/themes/917410/assets/4UiZWPW6B5Mg.js" type="text/javascript"></script>
    <link rel="preload" as="script" href="theme/100/491/197/themes/917410/assets/lazy.js?1710378282026">
    <script src="theme/100/491/197/themes/917410/assets/LqmCdMEnUazz.js" type="text/javascript"></script>
    <script>
        //notify js
        ! function(t) {
            "function" == typeof define && define.amd ? define(["jquery"], t) : t("object" == typeof exports ? require("jquery") : jQuery)
        }(function(t) {
            function s(s) {
                var e = !1;
                return t('[data-notify="container"]').each(function(i, n) {
                    var a = t(n),
                        o = a.find('[data-notify="title"]').text().trim(),
                        r = a.find('[data-notify="message"]').html().trim(),
                        l = o === t("<div>" + s.settings.content.title + "</div>").html().trim(),
                        d = r === t("<div>" + s.settings.content.message + "</div>").html().trim(),
                        g = a.hasClass("alert-" + s.settings.type);
                    return l && d && g && (e = !0), !e
                }), e
            }

            function e(e, n, a) {
                var o = {
                    content: {
                        message: "object" == typeof n ? n.message : n,
                        title: n.title ? n.title : "",
                        icon: n.icon ? n.icon : "",
                        url: n.url ? n.url : "#",
                        target: n.target ? n.target : "-"
                    }
                };
                a = t.extend(!0, {}, o, a), this.settings = t.extend(!0, {}, i, a), this._defaults = i, "-" === this.settings.content.target && (this.settings.content.target = this.settings.url_target), this.animations = {
                    start: "webkitAnimationStart oanimationstart MSAnimationStart animationstart",
                    end: "webkitAnimationEnd oanimationend MSAnimationEnd animationend"
                }, "number" == typeof this.settings.offset && (this.settings.offset = {
                    x: this.settings.offset,
                    y: this.settings.offset
                }), (this.settings.allow_duplicates || !this.settings.allow_duplicates && !s(this)) && this.init()
            }
            var i = {
                element: "body",
                position: null,
                type: "info",
                allow_dismiss: !0,
                allow_duplicates: !0,
                newest_on_top: !1,
                showProgressbar: !1,
                placement: {
                    from: "top",
                    align: "right"
                },
                offset: 20,
                spacing: 10,
                z_index: 1031,
                delay: 5e3,
                timer: 1e3,
                url_target: "_blank",
                mouse_over: null,
                animate: {
                    enter: "animated fadeInDown",
                    exit: "animated fadeOutUp"
                },
                onShow: null,
                onShown: null,
                onClose: null,
                onClosed: null,
                icon_type: "class",
                template: '<div data-notify="container" class="col-xs-11 col-sm-4 alert alert-{0}" role="alert"><button type="button" aria-hidden="true" class="close" data-notify="dismiss">&times;</button><span data-notify="icon"></span> <span data-notify="title">{1}</span> <span data-notify="message">{2}</span><div class="progress" data-notify="progressbar"><div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div></div><a href="{3}" target="{4}" data-notify="url"></a></div>'
            };
            String.format = function() {
                for (var t = arguments[0], s = 1; s < arguments.length; s++) t = t.replace(RegExp("\\{" + (s - 1) + "\\}", "gm"), arguments[s]);
                return t
            }, t.extend(e.prototype, {
                init: function() {
                    var t = this;
                    this.buildNotify(), this.settings.content.icon && this.setIcon(), "#" != this.settings.content.url && this.styleURL(), this.styleDismiss(), this.placement(), this.bind(), this.notify = {
                        $ele: this.$ele,
                        update: function(s, e) {
                            var i = {};
                            "string" == typeof s ? i[s] = e : i = s;
                            for (var n in i) switch (n) {
                                case "type":
                                    this.$ele.removeClass("alert-" + t.settings.type), this.$ele.find('[data-notify="progressbar"] > .progress-bar').removeClass("progress-bar-" + t.settings.type), t.settings.type = i[n], this.$ele.addClass("alert-" + i[n]).find('[data-notify="progressbar"] > .progress-bar').addClass("progress-bar-" + i[n]);
                                    break;
                                case "icon":
                                    var a = this.$ele.find('[data-notify="icon"]');
                                    "class" === t.settings.icon_type.toLowerCase() ? a.removeClass(t.settings.content.icon).addClass(i[n]) : (a.is("img") || a.find("img"), a.attr("src", i[n]));
                                    break;
                                case "progress":
                                    var o = t.settings.delay - t.settings.delay * (i[n] / 100);
                                    this.$ele.data("notify-delay", o), this.$ele.find('[data-notify="progressbar"] > div').attr("aria-valuenow", i[n]).css("width", i[n] + "%");
                                    break;
                                case "url":
                                    this.$ele.find('[data-notify="url"]').attr("href", i[n]);
                                    break;
                                case "target":
                                    this.$ele.find('[data-notify="url"]').attr("target", i[n]);
                                    break;
                                default:
                                    this.$ele.find('[data-notify="' + n + '"]').html(i[n])
                            }
                            var r = this.$ele.outerHeight() + parseInt(t.settings.spacing) + parseInt(t.settings.offset.y);
                            t.reposition(r)
                        },
                        close: function() {
                            t.close()
                        }
                    }
                },
                buildNotify: function() {
                    var s = this.settings.content;
                    this.$ele = t(String.format(this.settings.template, this.settings.type, s.title, s.message, s.url, s.target)), this.$ele.attr("data-notify-position", this.settings.placement.from + "-" + this.settings.placement.align), this.settings.allow_dismiss || this.$ele.find('[data-notify="dismiss"]').css("display", "none"), (this.settings.delay > 0 || this.settings.showProgressbar) && this.settings.showProgressbar || this.$ele.find('[data-notify="progressbar"]').remove()
                },
                setIcon: function() {
                    "class" === this.settings.icon_type.toLowerCase() ? this.$ele.find('[data-notify="icon"]').addClass(this.settings.content.icon) : this.$ele.find('[data-notify="icon"]').is("img") ? this.$ele.find('[data-notify="icon"]').attr("src", this.settings.content.icon) : this.$ele.find('[data-notify="icon"]').append('<img src="' + this.settings.content.icon + '" alt="Notify Icon" />')
                },
                styleDismiss: function() {
                    this.$ele.find('[data-notify="dismiss"]').css({
                        position: "absolute",
                        right: "10px",
                        top: "5px",
                        zIndex: this.settings.z_index + 2
                    })
                },
                styleURL: function() {
                    this.$ele.find('[data-notify="url"]').css({
                        backgroundImage: "url(data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7)",
                        height: "100%",
                        left: 0,
                        position: "absolute",
                        top: 0,
                        width: "100%",
                        zIndex: this.settings.z_index + 1
                    })
                },
                placement: function() {
                    var s = this,
                        e = this.settings.offset.y,
                        i = {
                            display: "inline-block",
                            margin: "0px auto",
                            position: this.settings.position ? this.settings.position : "body" === this.settings.element ? "fixed" : "absolute",
                            transition: "all .5s ease-in-out",
                            zIndex: this.settings.z_index
                        },
                        n = !1,
                        a = this.settings;
                    switch (t('[data-notify-position="' + this.settings.placement.from + "-" + this.settings.placement.align + '"]:not([data-closing="true"])').each(function() {
                            e = Math.max(e, parseInt(t(this).css(a.placement.from)) + parseInt(t(this).outerHeight()) + parseInt(a.spacing))
                        }), this.settings.newest_on_top === !0 && (e = this.settings.offset.y), i[this.settings.placement.from] = e + "px", this.settings.placement.align) {
                        case "left":
                        case "right":
                            i[this.settings.placement.align] = this.settings.offset.x + "px";
                            break;
                        case "center":
                            i.left = 0, i.right = 0
                    }
                    this.$ele.css(i).addClass(this.settings.animate.enter), t.each(["webkit-", "moz-", "o-", "ms-", ""], function(t, e) {
                        s.$ele[0].style[e + "AnimationIterationCount"] = 1
                    }), t(this.settings.element).append(this.$ele), this.settings.newest_on_top === !0 && (e = parseInt(e) + parseInt(this.settings.spacing) + this.$ele.outerHeight(), this.reposition(e)), t.isFunction(s.settings.onShow) && s.settings.onShow.call(this.$ele), this.$ele.one(this.animations.start, function() {
                        n = !0
                    }).one(this.animations.end, function() {
                        t.isFunction(s.settings.onShown) && s.settings.onShown.call(this)
                    }), setTimeout(function() {
                        n || t.isFunction(s.settings.onShown) && s.settings.onShown.call(this)
                    }, 600)
                },
                bind: function() {
                    var s = this;
                    if (this.$ele.find('[data-notify="dismiss"]').on("click", function() {
                            s.close()
                        }), this.$ele.mouseover(function() {
                            t(this).data("data-hover", "true")
                        }).mouseout(function() {
                            t(this).data("data-hover", "false")
                        }), this.$ele.data("data-hover", "false"), this.settings.delay > 0) {
                        s.$ele.data("notify-delay", s.settings.delay);
                        var e = setInterval(function() {
                            var t = parseInt(s.$ele.data("notify-delay")) - s.settings.timer;
                            if ("false" === s.$ele.data("data-hover") && "pause" === s.settings.mouse_over || "pause" != s.settings.mouse_over) {
                                var i = (s.settings.delay - t) / s.settings.delay * 100;
                                s.$ele.data("notify-delay", t), s.$ele.find('[data-notify="progressbar"] > div').attr("aria-valuenow", i).css("width", i + "%")
                            }
                            t > -s.settings.timer || (clearInterval(e), s.close())
                        }, s.settings.timer)
                    }
                },
                close: function() {
                    var s = this,
                        e = parseInt(this.$ele.css(this.settings.placement.from)),
                        i = !1;
                    this.$ele.data("closing", "true").addClass(this.settings.animate.exit), s.reposition(e), t.isFunction(s.settings.onClose) && s.settings.onClose.call(this.$ele), this.$ele.one(this.animations.start, function() {
                        i = !0
                    }).one(this.animations.end, function() {
                        t(this).remove(), t.isFunction(s.settings.onClosed) && s.settings.onClosed.call(this)
                    }), setTimeout(function() {
                        i || (s.$ele.remove(), s.settings.onClosed && s.settings.onClosed(s.$ele))
                    }, 600)
                },
                reposition: function(s) {
                    var e = this,
                        i = '[data-notify-position="' + this.settings.placement.from + "-" + this.settings.placement.align + '"]:not([data-closing="true"])',
                        n = this.$ele.nextAll(i);
                    this.settings.newest_on_top === !0 && (n = this.$ele.prevAll(i)), n.each(function() {
                        t(this).css(e.settings.placement.from, s), s = parseInt(s) + parseInt(e.settings.spacing) + t(this).outerHeight()
                    })
                }
            }), t.notify = function(t, s) {
                var i = new e(this, t, s);
                return i.notify
            }, t.notifyDefaults = function(s) {
                return i = t.extend(!0, {}, i, s)
            }, t.notifyClose = function(s) {
                void 0 === s || "all" === s ? t("[data-notify]").find('[data-notify="dismiss"]').trigger("click") : t('[data-notify-position="' + s + '"]').find('[data-notify="dismiss"]').trigger("click")
            }
        });
        //cookie
        ! function(e) {
            var n;
            if ("function" == typeof define && define.amd && (define(e), n = !0), "object" == typeof exports && (module.exports = e(), n = !0), !n) {
                var t = window.Cookies,
                    o = window.Cookies = e();
                o.noConflict = function() {
                    return window.Cookies = t, o
                }
            }
        }(function() {
            function e() {
                for (var e = 0, n = {}; e < arguments.length; e++) {
                    var t = arguments[e];
                    for (var o in t) n[o] = t[o]
                }
                return n
            }

            function n(e) {
                return e.replace(/(%[0-9A-Z]{2})+/g, decodeURIComponent)
            }
            return function t(o) {
                function r() {}

                function i(n, t, i) {
                    if ("undefined" != typeof document) {
                        "number" == typeof(i = e({
                            path: "/"
                        }, r.defaults, i)).expires && (i.expires = new Date(1 * new Date + 864e5 * i.expires)), i.expires = i.expires ? i.expires.toUTCString() : "";
                        try {
                            var c = JSON.stringify(t);
                            /^[\{\[]/.test(c) && (t = c)
                        } catch (e) {}
                        t = o.write ? o.write(t, n) : encodeURIComponent(String(t)).replace(/%(23|24|26|2B|3A|3C|3E|3D|2F|3F|40|5B|5D|5E|60|7B|7D|7C)/g, decodeURIComponent), n = encodeURIComponent(String(n)).replace(/%(23|24|26|2B|5E|60|7C)/g, decodeURIComponent).replace(/[\(\)]/g, escape);
                        var f = "";
                        for (var u in i) i[u] && (f += "; " + u, !0 !== i[u] && (f += "=" + i[u].split(";")[0]));
                        return document.cookie = n + "=" + t + f
                    }
                }

                function c(e, t) {
                    if ("undefined" != typeof document) {
                        for (var r = {}, i = document.cookie ? document.cookie.split("; ") : [], c = 0; c < i.length; c++) {
                            var f = i[c].split("="),
                                u = f.slice(1).join("=");
                            t || '"' !== u.charAt(0) || (u = u.slice(1, -1));
                            try {
                                var a = n(f[0]);
                                if (u = (o.read || o)(u, a) || n(u), t) try {
                                    u = JSON.parse(u)
                                } catch (e) {}
                                if (r[a] = u, e === a) break
                            } catch (e) {}
                        }
                        return e ? r[e] : r
                    }
                }
                return r.set = i, r.get = function(e) {
                    return c(e, !1)
                }, r.getJSON = function(e) {
                    return c(e, !0)
                }, r.remove = function(n, t) {
                    i(n, "", e(t, {
                        expires: -1
                    }))
                }, r.defaults = {}, r.withConverter = t, r
            }(function() {})
        });
    </script>
    <link rel="preload" as="style" type="text/css" href="theme/100/491/197/themes/917410/assets/main.scss.css?1710378282026">
    <link rel="preload" as="style" type="text/css" href="theme/100/491/197/themes/917410/assets/index.scss.css?1710378282026">
    <link rel="preload" as="style" type="text/css" href="theme/100/491/197/themes/917410/assets/bootstrap-4-3-min.css?1710378282026">
    <link rel="preload" as="style" type="text/css" href="theme/100/491/197/themes/917410/assets/swiper.scss.css?1710378282026">
    <link rel="stylesheet" href="theme/100/491/197/themes/917410/assets/kuUbReWSDahx.css">
    <link href="theme/100/491/197/themes/917410/assets/5B6L2u04CkD1.css" rel="stylesheet" type="text/css" media="all">

    <link href="theme/100/491/197/themes/917410/assets/nfQcnWVaRbX7.css" rel="stylesheet" type="text/css" media="all">

    <link href="theme/100/491/197/themes/917410/assets/kwI0Tjze7D8v.css" rel="stylesheet" type="text/css" media="all">


    <link rel="preload" as="style" type="text/css" href="theme/100/491/197/themes/917410/assets/quickviews_popup_cart.scss.css?1710378282026">
    <link href="theme/100/491/197/themes/917410/assets/bF5tvQ6IzGeU.css" rel="stylesheet" type="text/css" media="all">

















    <style>
        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap');
    </style>
    <script>
        var Bizweb = Bizweb || {};
        Bizweb.store = 'ls9hau5DE8hi.net';
        Bizweb.id = 491197;
        Bizweb.theme = {
            "id": 917410,
            "name": "Dola Pharmacy - view",
            "role": "main"
        };
        Bizweb.template = 'index';
        if (!Bizweb.fbEventId) Bizweb.fbEventId = 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
            var r = Math.random() * 16 | 0,
                v = c == 'x' ? r : (r & 0x3 | 0x8);
            return v.toString(16);
        });
    </script>
    <script>
        (function() {
            function asyncLoad() {
                var urls = [];
                for (var i = 0; i < urls.length; i++) {
                    var s = document.createElement('script');
                    s.type = 'text/javascript';
                    s.async = true;
                    s.src = urls[i];
                    var x = document.getElementsByTagName('script')[0];
                    x.parentNode.insertBefore(s, x);
                }
            };
            window.attachEvent ? window.attachEvent('onload', asyncLoad) : window.addEventListener('load', asyncLoad, false);
        })();
    </script>


    <script>
        window.BizwebAnalytics = window.BizwebAnalytics || {};
        window.BizwebAnalytics.meta = window.BizwebAnalytics.meta || {};
        window.BizwebAnalytics.meta.currency = 'VND';
        window.BizwebAnalytics.tracking_url = '/s';

        var meta = {};


        for (var attr in meta) {
            window.BizwebAnalytics.meta[attr] = meta[attr];
        }
    </script>


    <script src="dist/js/stats.min_v%3D96f2ff2.js"></script>
















</head>

<body>
    <div class="opacity_menu"></div>
    

    <header class="header">
        <div class="container" style="position: relative;">
            <div class="topbar">
                <div class="row">
                    <div class="col-lg-6 top-bar-left">
                        <div class="topbar-text">
                            <div class="text-slider swiper-container">
                                <div class="swiper-wrapper">



                                    <div class="swiper-slide"> Chào mừng bạn đến với cửa hàng Dola Pharmacy!
                                    </div>


                                    <div class="swiper-slide"> Rất nhiều ưu đãi và chương trình khuyến mãi đang chờ đợi bạn
                                    </div>


                                    <div class="swiper-slide"> Ưu đãi lớn dành cho thành viên mới
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 top-bar-right">
                        <ul>


                            <li>
                                <a href="/account/register" title="Đăng ký">
                                    Đăng ký
                                </a>
                            </li>
                            <li>
                                <a href="/account/login" title="Đăng nhập">
                                    Đăng nhập
                                </a>
                            </li>

                            <li class="hotine">
                                Hotline đặt hàng:
                                <a title="1900 6750" href="tel:19006750"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"></path>
                                    </svg>
                                    1900 6750</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row row-header align-items-center">
                <div class="menu-bar d-lg-none d-flex">
                    <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="bars" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-bars fa-w-14">
                        <path fill="#ffffff" d="M436 124H12c-6.627 0-12-5.373-12-12V80c0-6.627 5.373-12 12-12h424c6.627 0 12 5.373 12 12v32c0 6.627-5.373 12-12 12zm0 160H12c-6.627 0-12-5.373-12-12v-32c0-6.627 5.373-12 12-12h424c6.627 0 12 5.373 12 12v32c0 6.627-5.373 12-12 12zm0 160H12c-6.627 0-12-5.373-12-12v-32c0-6.627 5.373-12 12-12h424c6.627 0 12 5.373 12 12v32c0 6.627-5.373 12-12 12z" class=""></path>
                    </svg>
                </div>
                <div class="col-lg-2 col-12">
                    <a href="/" class="logo" title="Logo">
                        <img width="220" height="27" src="theme/100/491/197/themes/917410/assets/f54U63VgI1TN.png" alt="Dola Pharmacy">
                    </a>
                </div>
                <div class="col-lg-2 col-12 vertical-menu-category">
                    <div class="title d-none d-md-flex">
                        <span class="menu-icon">
                            <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="bars" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-bars fa-w-14">
                                <path fill="#ffffff" d="M436 124H12c-6.627 0-12-5.373-12-12V80c0-6.627 5.373-12 12-12h424c6.627 0 12 5.373 12 12v32c0 6.627-5.373 12-12 12zm0 160H12c-6.627 0-12-5.373-12-12v-32c0-6.627 5.373-12 12-12h424c6.627 0 12 5.373 12 12v32c0 6.627-5.373 12-12 12zm0 160H12c-6.627 0-12-5.373-12-12v-32c0-6.627 5.373-12 12-12h424c6.627 0 12 5.373 12 12v32c0 6.627-5.373 12-12 12z" class=""></path>
                            </svg>
                        </span>
                        <span class="vertical-heading-text">Danh mục</span>
                    </div>
                    <div class="menu-vertical">
                        <ul>



                            <li class="nav-item active">

                                <a class="a-img" href="javascript:void(0)" title="Dược phẩm">
                                    Dược phẩm

                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
                                    </svg>

                                </a>

                                <div class="product-thumb">
                                    <div class="row row-fix">


                                        <div class="col-lg-3 col-md-6 item col-fix">
                                            <a class="image_thumb scale_hover" href="/thuoc-khong-ke-don " title="Thuốc không kê đơn ">
                                                <div class="image">
                                                    <img width="234" height="234" class="lazyload image1" src="theme/100/491/197/themes/917410/assets/HwtW9Wq2HFaj.png" data-src="theme/thumb/large/100/491/197/collections/thuoc-ko-ke-don.png?v=1689578709147" alt="Thuốc không kê đơn">
                                                </div>
                                                <span class="line-clamp line-clamp-2">Thuốc không kê đơn </span>
                                            </a>
                                        </div>






                                    </div>
                                </div>

                            </li>
                            <li class="nav-item ">

                                <a class="a-img" href="javascript:void(0)" title="Chăm sóc sức khỏe">
                                    Chăm sóc sức khỏe

                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
                                    </svg>

                                </a>

                                <div class="product-thumb">
                                    <div class="row row-fix">


                                        <div class="col-lg-3 col-md-6 item col-fix">
                                            <a class="image_thumb scale_hover" href="/thuc-pham-dinh-duong " title="Thực phẩm dinh dưỡng ">
                                                <div class="image">
                                                    <img width="234" height="234" class="lazyload image1" src="theme/100/491/197/themes/917410/assets/HwtW9Wq2HFaj.png" data-src="theme/thumb/large/100/491/197/collections/2-04thuc-pham-dinh-duong-2-04-nu.png?v=1689578208010" alt="Thực phẩm dinh dưỡng">
                                                </div>
                                                <span class="line-clamp line-clamp-2">Thực phẩm dinh dưỡng </span>
                                            </a>
                                        </div>



                                        <div class="col-lg-3 col-md-6 item col-fix">
                                            <a class="image_thumb scale_hover" href="/dung-cu-so-cuu " title="Dụng cụ sơ cứu ">
                                                <div class="image">
                                                    <img width="234" height="234" class="lazyload image1" src="theme/100/491/197/themes/917410/assets/HwtW9Wq2HFaj.png" data-src="theme/thumb/large/100/491/197/collections/2-06-dung-cu-so-cuu-2-06-first-a.png?v=1689578216407" alt="Dụng cụ sơ cứu">
                                                </div>
                                                <span class="line-clamp line-clamp-2">Dụng cụ sơ cứu </span>
                                            </a>
                                        </div>



                                        <div class="col-lg-3 col-md-6 item col-fix">
                                            <a class="image_thumb scale_hover" href="/cham-soc-mat-tai-mui " title="Chăm sóc Mắt/Tai/Mũi ">
                                                <div class="image">
                                                    <img width="234" height="234" class="lazyload image1" src="theme/100/491/197/themes/917410/assets/HwtW9Wq2HFaj.png" data-src="theme/thumb/large/100/491/197/collections/2-08-cham-soc-mattaimui-2-08-for.png?v=1689578236933" alt="Chăm sóc Mắt/Tai/Mũi">
                                                </div>
                                                <span class="line-clamp line-clamp-2">Chăm sóc Mắt/Tai/Mũi </span>
                                            </a>
                                        </div>



                                        <div class="col-lg-3 col-md-6 item col-fix">
                                            <a class="image_thumb scale_hover" href="/cham-soc-chan " title="Chăm sóc chân ">
                                                <div class="image">
                                                    <img width="234" height="234" class="lazyload image1" src="theme/100/491/197/themes/917410/assets/HwtW9Wq2HFaj.png" data-src="theme/thumb/large/100/491/197/collections/2-09-cham-soc-chan-2-09-foot-car.png?v=1689578245430" alt="Chăm sóc chân">
                                                </div>
                                                <span class="line-clamp line-clamp-2">Chăm sóc chân </span>
                                            </a>
                                        </div>



                                        <div class="col-lg-3 col-md-6 item col-fix">
                                            <a class="image_thumb scale_hover" href="/khau-trang-y-te " title="Khẩu trang y tế ">
                                                <div class="image">
                                                    <img width="234" height="234" class="lazyload image1" src="theme/100/491/197/themes/917410/assets/HwtW9Wq2HFaj.png" data-src="theme/thumb/large/100/491/197/collections/2-10-khau-trang-y-te-2-10-medica.png?v=1689578251383" alt="Khẩu trang y tế">
                                                </div>
                                                <span class="line-clamp line-clamp-2">Khẩu trang y tế </span>
                                            </a>
                                        </div>



                                        <div class="col-lg-3 col-md-6 item col-fix">
                                            <a class="image_thumb scale_hover" href="/chong-muoi " title="Chống muỗi ">
                                                <div class="image">
                                                    <img width="234" height="234" class="lazyload image1" src="theme/100/491/197/themes/917410/assets/HwtW9Wq2HFaj.png" data-src="theme/thumb/large/100/491/197/collections/2-11.png?v=1689578259093" alt="Chống muỗi">
                                                </div>
                                                <span class="line-clamp line-clamp-2">Chống muỗi </span>
                                            </a>
                                        </div>



                                        <div class="col-lg-3 col-md-6 item col-fix">
                                            <a class="image_thumb scale_hover" href="/dau-tram-dau-xoa-bop " title="Dầu tràm, dầu xoa bóp ">
                                                <div class="image">
                                                    <img width="234" height="234" class="lazyload image1" src="theme/100/491/197/themes/917410/assets/HwtW9Wq2HFaj.png" data-src="theme/thumb/large/100/491/197/collections/2-12.png?v=1689578264370" alt="Dầu tràm, dầu xoa bóp">
                                                </div>
                                                <span class="line-clamp line-clamp-2">Dầu tràm, dầu xoa bóp </span>
                                            </a>
                                        </div>






                                    </div>
                                </div>

                            </li>
                            <li class="nav-item ">

                                <a class="a-img" href="javascript:void(0)" title="Chăm sóc cá nhân">
                                    Chăm sóc cá nhân

                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
                                    </svg>

                                </a>

                                <div class="product-thumb">
                                    <div class="row row-fix">


                                        <div class="col-lg-3 col-md-6 item col-fix">
                                            <a class="image_thumb scale_hover" href="/san-pham-phong-tam " title="Sản phẩm phòng tắm ">
                                                <div class="image">
                                                    <img width="234" height="234" class="lazyload image1" src="theme/100/491/197/themes/917410/assets/HwtW9Wq2HFaj.png" data-src="theme/thumb/large/100/491/197/collections/3-02-san-pham-phong-tam-3-02-bat.png?v=1689752458667" alt="Sản phẩm phòng tắm">
                                                </div>
                                                <span class="line-clamp line-clamp-2">Sản phẩm phòng tắm </span>
                                            </a>
                                        </div>



                                        <div class="col-lg-3 col-md-6 item col-fix">
                                            <a class="image_thumb scale_hover" href="/san-pham-khu-mui " title="Sản phẩm khử mùi ">
                                                <div class="image">
                                                    <img width="234" height="234" class="lazyload image1" src="theme/100/491/197/themes/917410/assets/HwtW9Wq2HFaj.png" data-src="theme/thumb/large/100/491/197/collections/3-04-san-pham-khu-mui-3-04-deodo.png?v=1689752472677" alt="Sản phẩm khử mùi">
                                                </div>
                                                <span class="line-clamp line-clamp-2">Sản phẩm khử mùi </span>
                                            </a>
                                        </div>



                                        <div class="col-lg-3 col-md-6 item col-fix">
                                            <a class="image_thumb scale_hover" href="/cham-soc-toc " title="Chăm sóc tóc ">
                                                <div class="image">
                                                    <img width="234" height="234" class="lazyload image1" src="theme/100/491/197/themes/917410/assets/HwtW9Wq2HFaj.png" data-src="theme/thumb/large/100/491/197/collections/3-05-cham-soc-toc-3-05-hair-care.png?v=1689752482167" alt="Chăm sóc tóc">
                                                </div>
                                                <span class="line-clamp line-clamp-2">Chăm sóc tóc </span>
                                            </a>
                                        </div>



                                        <div class="col-lg-3 col-md-6 item col-fix">
                                            <a class="image_thumb scale_hover" href="/ve-sinh-phu-nu " title="Vệ sinh phụ nữ ">
                                                <div class="image">
                                                    <img width="234" height="234" class="lazyload image1" src="theme/100/491/197/themes/917410/assets/HwtW9Wq2HFaj.png" data-src="theme/thumb/large/100/491/197/collections/3-06-ve-sinh-phu-nu-3-06-feminin.png?v=1689752493330" alt="Vệ sinh phụ nữ">
                                                </div>
                                                <span class="line-clamp line-clamp-2">Vệ sinh phụ nữ </span>
                                            </a>
                                        </div>



                                        <div class="col-lg-3 col-md-6 item col-fix">
                                            <a class="image_thumb scale_hover" href="/cham-soc-nam-gioi " title="Chăm sóc nam giới ">
                                                <div class="image">
                                                    <img width="234" height="234" class="lazyload image1" src="theme/100/491/197/themes/917410/assets/HwtW9Wq2HFaj.png" data-src="theme/thumb/large/100/491/197/collections/3-07-cham-soc-nam-gioi-3-07-men.png?v=1689752508260" alt="Chăm sóc nam giới">
                                                </div>
                                                <span class="line-clamp line-clamp-2">Chăm sóc nam giới </span>
                                            </a>
                                        </div>



                                        <div class="col-lg-3 col-md-6 item col-fix">
                                            <a class="image_thumb scale_hover" href="/cham-soc-rang-mieng " title="Chăm sóc răng miệng ">
                                                <div class="image">
                                                    <img width="234" height="234" class="lazyload image1" src="theme/100/491/197/themes/917410/assets/HwtW9Wq2HFaj.png" data-src="theme/thumb/large/100/491/197/collections/3-08-cham-soc-rang-mieng-3-08-or.png?v=1689752522323" alt="Chăm sóc răng miệng">
                                                </div>
                                                <span class="line-clamp line-clamp-2">Chăm sóc răng miệng </span>
                                            </a>
                                        </div>



                                        <div class="col-lg-3 col-md-6 item col-fix">
                                            <a class="image_thumb scale_hover" href="/cham-soc-co-the " title="Chăm sóc cơ thể ">
                                                <div class="image">
                                                    <img width="234" height="234" class="lazyload image1" src="theme/100/491/197/themes/917410/assets/HwtW9Wq2HFaj.png" data-src="theme/thumb/large/100/491/197/collections/3-03-cham-soc-co-the-3-03-body-c.png?v=1689752531787" alt="Chăm sóc cơ thể">
                                                </div>
                                                <span class="line-clamp line-clamp-2">Chăm sóc cơ thể </span>
                                            </a>
                                        </div>






                                    </div>
                                </div>

                            </li>
                            <li class="nav-item ">

                                <a class="a-img" href="javascript:void(0)" title="Sản phẩm tiện lợi">
                                    Sản phẩm tiện lợi

                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
                                    </svg>

                                </a>

                                <div class="product-thumb">
                                    <div class="row row-fix">


                                        <div class="col-lg-3 col-md-6 item col-fix">
                                            <a class="image_thumb scale_hover" href="/hang-tong-hop " title="Hàng tổng hợp ">
                                                <div class="image">
                                                    <img width="234" height="234" class="lazyload image1" src="theme/100/491/197/themes/917410/assets/HwtW9Wq2HFaj.png" data-src="theme/thumb/large/100/491/197/collections/5-01-hang-tong-hop-5-01-general.png?v=1689752668633" alt="Hàng tổng hợp">
                                                </div>
                                                <span class="line-clamp line-clamp-2">Hàng tổng hợp </span>
                                            </a>
                                        </div>



                                        <div class="col-lg-3 col-md-6 item col-fix">
                                            <a class="image_thumb scale_hover" href="/hang-bach-hoa " title="Hàng bách hóa ">
                                                <div class="image">
                                                    <img width="234" height="234" class="lazyload image1" src="theme/100/491/197/themes/917410/assets/HwtW9Wq2HFaj.png" data-src="theme/thumb/large/100/491/197/collections/hang-bach-hoa.png?v=1689752683827" alt="Hàng bách hóa">
                                                </div>
                                                <span class="line-clamp line-clamp-2">Hàng bách hóa </span>
                                            </a>
                                        </div>






                                    </div>
                                </div>

                            </li>
                            <li class="nav-item ">

                                <a class="a-img" href="javascript:void(0)" title="Thực phẩm chức năng">
                                    Thực phẩm chức năng

                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
                                    </svg>

                                </a>

                                <div class="product-thumb">
                                    <div class="row row-fix">


                                        <div class="col-lg-3 col-md-6 item col-fix">
                                            <a class="image_thumb scale_hover" href="/tpcn-nhom-da-day " title="TPCN Nhóm dạ dày ">
                                                <div class="image">
                                                    <img width="234" height="234" class="lazyload image1" src="theme/100/491/197/themes/917410/assets/HwtW9Wq2HFaj.png" data-src="theme/thumb/large/100/491/197/collections/6-01-6-01-tpcn-nhom-tieu-hoa-6-0.png?v=1689752792587" alt="TPCN Nhóm dạ dày">
                                                </div>
                                                <span class="line-clamp line-clamp-2">TPCN Nhóm dạ dày </span>
                                            </a>
                                        </div>



                                        <div class="col-lg-3 col-md-6 item col-fix">
                                            <a class="image_thumb scale_hover" href="/tpcn-nhom-tim-mach " title="TPCN Nhóm tim mạch ">
                                                <div class="image">
                                                    <img width="234" height="234" class="lazyload image1" src="theme/100/491/197/themes/917410/assets/HwtW9Wq2HFaj.png" data-src="theme/thumb/large/100/491/197/collections/6-02-6-02-tpcn-nhom-tim-mach-h.png?v=1689752808353" alt="TPCN Nhóm tim mạch">
                                                </div>
                                                <span class="line-clamp line-clamp-2">TPCN Nhóm tim mạch </span>
                                            </a>
                                        </div>



                                        <div class="col-lg-3 col-md-6 item col-fix">
                                            <a class="image_thumb scale_hover" href="/tpcn-nhom-duong-huyet " title="TPCN Nhóm đường huyết ">
                                                <div class="image">
                                                    <img width="234" height="234" class="lazyload image1" src="theme/100/491/197/themes/917410/assets/HwtW9Wq2HFaj.png" data-src="theme/thumb/large/100/491/197/collections/6-02-03-6-02-03-tpcn-nhom-duong.png?v=1689752822873" alt="TPCN Nhóm đường huyết">
                                                </div>
                                                <span class="line-clamp line-clamp-2">TPCN Nhóm đường huyết </span>
                                            </a>
                                        </div>



                                        <div class="col-lg-3 col-md-6 item col-fix">
                                            <a class="image_thumb scale_hover" href="/tpcn-nhom-ho-hap " title="TPCN Nhóm hô hấp ">
                                                <div class="image">
                                                    <img width="234" height="234" class="lazyload image1" src="theme/100/491/197/themes/917410/assets/HwtW9Wq2HFaj.png" data-src="theme/thumb/large/100/491/197/collections/6-03-6-03-tpcn-nhom-ho-hap-6-03.png?v=1689752838697" alt="TPCN Nhóm hô hấp">
                                                </div>
                                                <span class="line-clamp line-clamp-2">TPCN Nhóm hô hấp </span>
                                            </a>
                                        </div>



                                        <div class="col-lg-3 col-md-6 item col-fix">
                                            <a class="image_thumb scale_hover" href="/tpcn-nhom-than-kinh " title="TPCN Nhóm thần kinh ">
                                                <div class="image">
                                                    <img width="234" height="234" class="lazyload image1" src="theme/100/491/197/themes/917410/assets/HwtW9Wq2HFaj.png" data-src="theme/thumb/large/100/491/197/collections/6-04-6-04-tpcn-nhom-than-kinh-6.png?v=1689752853887" alt="TPCN Nhóm thần kinh">
                                                </div>
                                                <span class="line-clamp line-clamp-2">TPCN Nhóm thần kinh </span>
                                            </a>
                                        </div>



                                        <div class="col-lg-3 col-md-6 item col-fix">
                                            <a class="image_thumb scale_hover" href="/tpcn-nhom-co-xuong-khop " title="TPCN Nhóm cơ xương khớp ">
                                                <div class="image">
                                                    <img width="234" height="234" class="lazyload image1" src="theme/100/491/197/themes/917410/assets/HwtW9Wq2HFaj.png" data-src="theme/thumb/large/100/491/197/collections/6-05-6-05-tpcn-nhom-co-xuong-kh.png?v=1689752900983" alt="TPCN Nhóm cơ xương khớp">
                                                </div>
                                                <span class="line-clamp line-clamp-2">TPCN Nhóm cơ xương khớp </span>
                                            </a>
                                        </div>



                                        <div class="col-lg-3 col-md-6 item col-fix">
                                            <a class="image_thumb scale_hover" href="/tpcn-giam-can " title="TPCN Giảm cân ">
                                                <div class="image">
                                                    <img width="234" height="234" class="lazyload image1" src="theme/100/491/197/themes/917410/assets/HwtW9Wq2HFaj.png" data-src="theme/thumb/large/100/491/197/collections/6-06-6-06-tpcn-giam-can-6-06-vms.png?v=1689752885840" alt="TPCN Giảm cân">
                                                </div>
                                                <span class="line-clamp line-clamp-2">TPCN Giảm cân </span>
                                            </a>
                                        </div>



                                        <div class="col-lg-3 col-md-6 item col-fix">
                                            <a class="image_thumb scale_hover" href="/tpcn-cham-soc-sac-dep " title="TPCN Chăm sóc sắc đẹp ">
                                                <div class="image">
                                                    <img width="234" height="234" class="lazyload image1" src="theme/100/491/197/themes/917410/assets/HwtW9Wq2HFaj.png" data-src="theme/thumb/large/100/491/197/collections/6-17.png?v=1689752918623" alt="TPCN Chăm sóc sắc đẹp">
                                                </div>
                                                <span class="line-clamp line-clamp-2">TPCN Chăm sóc sắc đẹp </span>
                                            </a>
                                        </div>



                                        <div class="col-lg-3 col-md-6 item col-fix">
                                            <a class="image_thumb scale_hover" href="/tpcn-cham-soc-suc-khoe-nam-va-nu " title="TPCN Chăm sóc sức khỏe nam và nữ ">
                                                <div class="image">
                                                    <img width="234" height="234" class="lazyload image1" src="theme/100/491/197/themes/917410/assets/HwtW9Wq2HFaj.png" data-src="theme/thumb/large/100/491/197/collections/6-08-6-08-tpcn-cham-soc-suc-khoe.png?v=1689752932640" alt="TPCN Chăm sóc sức khỏe nam và nữ">
                                                </div>
                                                <span class="line-clamp line-clamp-2">TPCN Chăm sóc sức khỏe nam và nữ </span>
                                            </a>
                                        </div>



                                        <div class="col-lg-3 col-md-6 item col-fix">
                                            <a class="image_thumb scale_hover" href="/tpcn-nhom-mat-tai-mui " title="TPCN Nhóm Mắt/Tai/Mũi ">
                                                <div class="image">
                                                    <img width="234" height="234" class="lazyload image1" src="theme/100/491/197/themes/917410/assets/HwtW9Wq2HFaj.png" data-src="theme/thumb/large/100/491/197/collections/6-09-6-09-tpcn-nhom-mattaimui-6.png?v=1689752966183" alt="TPCN Nhóm Mắt/Tai/Mũi">
                                                </div>
                                                <span class="line-clamp line-clamp-2">TPCN Nhóm Mắt/Tai/Mũi </span>
                                            </a>
                                        </div>



                                        <div class="col-lg-3 col-md-6 item col-fix">
                                            <a class="image_thumb scale_hover" href="/tpcn-vitamin-tong-hop-va-khoang-chat " title="TPCN Vitamin tổng hợp và khoáng chất ">
                                                <div class="image">
                                                    <img width="234" height="234" class="lazyload image1" src="theme/100/491/197/themes/917410/assets/HwtW9Wq2HFaj.png" data-src="theme/thumb/large/100/491/197/collections/6-10-6-10-tpcn-vitamin-tong-hop.png?v=1689752984740" alt="TPCN Vitamin tổng hợp và khoáng chất">
                                                </div>
                                                <span class="line-clamp line-clamp-2">TPCN Vitamin tổng hợp và khoáng chất </span>
                                            </a>
                                        </div>



                                        <div class="col-lg-3 col-md-6 item col-fix">
                                            <a class="image_thumb scale_hover" href="/tpcn-cham-soc-toc " title="TPCN Chăm sóc tóc ">
                                                <div class="image">
                                                    <img width="234" height="234" class="lazyload image1" src="theme/100/491/197/themes/917410/assets/HwtW9Wq2HFaj.png" data-src="theme/thumb/large/100/491/197/collections/6-11.png?v=1689753004467" alt="TPCN Chăm sóc tóc">
                                                </div>
                                                <span class="line-clamp line-clamp-2">TPCN Chăm sóc tóc </span>
                                            </a>
                                        </div>



                                        <div class="col-lg-3 col-md-6 item col-fix">
                                            <a class="image_thumb scale_hover" href="/tpcn-nhom-khac " title="TPCN Nhóm khác ">
                                                <div class="image">
                                                    <img width="234" height="234" class="lazyload image1" src="theme/100/491/197/themes/917410/assets/HwtW9Wq2HFaj.png" data-src="theme/thumb/large/100/491/197/collections/6-14-6-14-tpcn-nhom-khac-6-14-vm.png?v=1689753019280" alt="TPCN Nhóm khác">
                                                </div>
                                                <span class="line-clamp line-clamp-2">TPCN Nhóm khác </span>
                                            </a>
                                        </div>



                                        <div class="col-lg-3 col-md-6 item col-fix">
                                            <a class="image_thumb scale_hover" href="/tpcn-cho-gan " title="TPCN cho gan ">
                                                <div class="image">
                                                    <img width="234" height="234" class="lazyload image1" src="theme/100/491/197/themes/917410/assets/HwtW9Wq2HFaj.png" data-src="theme/thumb/large/100/491/197/collections/6-15-6-15-tpcn-cho-gan-6-15-vms.png?v=1689753034390" alt="TPCN cho gan">
                                                </div>
                                                <span class="line-clamp line-clamp-2">TPCN cho gan </span>
                                            </a>
                                        </div>






                                    </div>
                                </div>

                            </li>
                            <li class="nav-item ">

                                <a class="a-img" href="javascript:void(0)" title="Mẹ và Bé">
                                    Mẹ và Bé

                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
                                    </svg>

                                </a>

                                <div class="product-thumb">
                                    <div class="row row-fix">


                                        <div class="col-lg-3 col-md-6 item col-fix">
                                            <a class="image_thumb scale_hover" href="/cham-soc-em-be " title="Chăm sóc em bé ">
                                                <div class="image">
                                                    <img width="234" height="234" class="lazyload image1" src="theme/100/491/197/themes/917410/assets/HwtW9Wq2HFaj.png" data-src="theme/thumb/large/100/491/197/collections/photo-2021-08-23-21-10-35-8080.png?v=1689753224853" alt="Chăm sóc em bé">
                                                </div>
                                                <span class="line-clamp line-clamp-2">Chăm sóc em bé </span>
                                            </a>
                                        </div>



                                        <div class="col-lg-3 col-md-6 item col-fix">
                                            <a class="image_thumb scale_hover" href="/tpcn-danh-cho-tre-em " title="TPCN dành cho trẻ em ">
                                                <div class="image">
                                                    <img width="234" height="234" class="lazyload image1" src="theme/100/491/197/themes/917410/assets/HwtW9Wq2HFaj.png" data-src="theme/thumb/large/100/491/197/collections/6-12-6-12-tpcn-danh-cho-tre-em-6.png?v=1689753243720" alt="TPCN dành cho trẻ em">
                                                </div>
                                                <span class="line-clamp line-clamp-2">TPCN dành cho trẻ em </span>
                                            </a>
                                        </div>



                                        <div class="col-lg-3 col-md-6 item col-fix">
                                            <a class="image_thumb scale_hover" href="/san-pham-danh-cho-me " title="Sản phẩm dành cho mẹ ">
                                                <div class="image">
                                                    <img width="234" height="234" class="lazyload image1" src="theme/100/491/197/themes/917410/assets/HwtW9Wq2HFaj.png" data-src="theme/thumb/large/100/491/197/collections/photo-2021-08-23-21-08-20.png?v=1689753260510" alt="Sản phẩm dành cho mẹ">
                                                </div>
                                                <span class="line-clamp line-clamp-2">Sản phẩm dành cho mẹ </span>
                                            </a>
                                        </div>



                                        <div class="col-lg-3 col-md-6 item col-fix">
                                            <a class="image_thumb scale_hover" href="/tpcn-danh-cho-phu-nu-mang-thai " title="TPCN dành cho phụ nữ mang thai ">
                                                <div class="image">
                                                    <img width="234" height="234" class="lazyload image1" src="theme/100/491/197/themes/917410/assets/HwtW9Wq2HFaj.png" data-src="theme/thumb/large/100/491/197/collections/6-16.png?v=1689753275223" alt="TPCN dành cho phụ nữ mang thai">
                                                </div>
                                                <span class="line-clamp line-clamp-2">TPCN dành cho phụ nữ mang thai </span>
                                            </a>
                                        </div>






                                    </div>
                                </div>

                            </li>
                            <li class="nav-item ">

                                <a class="a-img" href="javascript:void(0)" title="Chăm sóc sắc đẹp">
                                    Chăm sóc sắc đẹp

                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
                                    </svg>

                                </a>

                                <div class="product-thumb">
                                    <div class="row row-fix">


                                        <div class="col-lg-3 col-md-6 item col-fix">
                                            <a class="image_thumb scale_hover" href="/cham-soc-mat " title="Chăm sóc mặt ">
                                                <div class="image">
                                                    <img width="234" height="234" class="lazyload image1" src="theme/100/491/197/themes/917410/assets/HwtW9Wq2HFaj.png" data-src="theme/thumb/large/100/491/197/collections/4-01-cham-soc-mat-4-01-face-care.png?v=1689753314850" alt="Chăm sóc mặt">
                                                </div>
                                                <span class="line-clamp line-clamp-2">Chăm sóc mặt </span>
                                            </a>
                                        </div>



                                        <div class="col-lg-3 col-md-6 item col-fix">
                                            <a class="image_thumb scale_hover" href="/san-pham-chong-nang " title="Sản phẩm chống nắng ">
                                                <div class="image">
                                                    <img width="234" height="234" class="lazyload image1" src="theme/100/491/197/themes/917410/assets/HwtW9Wq2HFaj.png" data-src="theme/thumb/large/100/491/197/collections/4-02-san-pham-chong-nang-4-02-su.png?v=1689753330087" alt="Sản phẩm chống nắng">
                                                </div>
                                                <span class="line-clamp line-clamp-2">Sản phẩm chống nắng </span>
                                            </a>
                                        </div>



                                        <div class="col-lg-3 col-md-6 item col-fix">
                                            <a class="image_thumb scale_hover" href="/dung-cu-lam-dep " title="Dụng cụ làm đẹp ">
                                                <div class="image">
                                                    <img width="234" height="234" class="lazyload image1" src="theme/100/491/197/themes/917410/assets/HwtW9Wq2HFaj.png" data-src="theme/thumb/large/100/491/197/collections/4-03-dung-cu-lam-dep-4-03-beauty.png?v=1689753344660" alt="Dụng cụ làm đẹp">
                                                </div>
                                                <span class="line-clamp line-clamp-2">Dụng cụ làm đẹp </span>
                                            </a>
                                        </div>



                                        <div class="col-lg-3 col-md-6 item col-fix">
                                            <a class="image_thumb scale_hover" href="/duoc-my-pham " title="Dược - Mỹ Phẩm ">
                                                <div class="image">
                                                    <img width="234" height="234" class="lazyload image1" src="theme/100/491/197/themes/917410/assets/HwtW9Wq2HFaj.png" data-src="theme/thumb/large/100/491/197/collections/2-01-duoc-my-pham-2-01-dermo-ski.png?v=1689753360680" alt="Dược - Mỹ Phẩm">
                                                </div>
                                                <span class="line-clamp line-clamp-2">Dược - Mỹ Phẩm </span>
                                            </a>
                                        </div>






                                    </div>
                                </div>

                            </li>
                            <li class="nav-item ">

                                <a class="a-img" href="javascript:void(0)" title="Thiết bị y tế">
                                    Thiết bị y tế

                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
                                    </svg>

                                </a>

                                <div class="product-thumb">
                                    <div class="row row-fix">


                                        <div class="col-lg-3 col-md-6 item col-fix">
                                            <a class="image_thumb scale_hover" href="/nhiet-ke " title="Nhiệt kế ">
                                                <div class="image">
                                                    <img width="234" height="234" class="lazyload image1" src="theme/100/491/197/themes/917410/assets/HwtW9Wq2HFaj.png" data-src="theme/thumb/large/100/491/197/collections/2-05-01-nhiet-ke-2-05-01-thermom.png?v=1689753404357" alt="Nhiệt kế">
                                                </div>
                                                <span class="line-clamp line-clamp-2">Nhiệt kế </span>
                                            </a>
                                        </div>



                                        <div class="col-lg-3 col-md-6 item col-fix">
                                            <a class="image_thumb scale_hover" href="/may-do-huyet-ap " title="Máy đo huyết áp ">
                                                <div class="image">
                                                    <img width="234" height="234" class="lazyload image1" src="theme/100/491/197/themes/917410/assets/HwtW9Wq2HFaj.png" data-src="theme/thumb/large/100/491/197/collections/2-05-02-may-do-huyet-ap-2-05-02.png?v=1689753419040" alt="Máy đo huyết áp">
                                                </div>
                                                <span class="line-clamp line-clamp-2">Máy đo huyết áp </span>
                                            </a>
                                        </div>



                                        <div class="col-lg-3 col-md-6 item col-fix">
                                            <a class="image_thumb scale_hover" href="/may-do-duong-huyet " title="Máy đo đường huyết ">
                                                <div class="image">
                                                    <img width="234" height="234" class="lazyload image1" src="theme/100/491/197/themes/917410/assets/HwtW9Wq2HFaj.png" data-src="theme/thumb/large/100/491/197/collections/2-05-03-may-do-duong-huyet-2-05.png?v=1689753438950" alt="Máy đo đường huyết">
                                                </div>
                                                <span class="line-clamp line-clamp-2">Máy đo đường huyết </span>
                                            </a>
                                        </div>



                                        <div class="col-lg-3 col-md-6 item col-fix">
                                            <a class="image_thumb scale_hover" href="/may-xong-khi-dung " title="Máy xông khí dung ">
                                                <div class="image">
                                                    <img width="234" height="234" class="lazyload image1" src="theme/100/491/197/themes/917410/assets/HwtW9Wq2HFaj.png" data-src="theme/thumb/large/100/491/197/collections/2-05-04-may-xong-khi-dung-2-05-0.png?v=1689753461663" alt="Máy xông khí dung">
                                                </div>
                                                <span class="line-clamp line-clamp-2">Máy xông khí dung </span>
                                            </a>
                                        </div>



                                        <div class="col-lg-3 col-md-6 item col-fix">
                                            <a class="image_thumb scale_hover" href="/thiet-bi-y-te-khac " title="Thiết bị y tế khác ">
                                                <div class="image">
                                                    <img width="234" height="234" class="lazyload image1" src="theme/100/491/197/themes/917410/assets/HwtW9Wq2HFaj.png" data-src="theme/thumb/large/100/491/197/collections/2-05-05-thiet-bi-y-te-khac-2-05.png?v=1689753477067" alt="Thiết bị y tế khác">
                                                </div>
                                                <span class="line-clamp line-clamp-2">Thiết bị y tế khác </span>
                                            </a>
                                        </div>



                                        <div class="col-lg-3 col-md-6 item col-fix">
                                            <a class="image_thumb scale_hover" href="/dung-cu-kiem-tra " title="Dụng cụ kiểm tra ">
                                                <div class="image">
                                                    <img width="234" height="234" class="lazyload image1" src="theme/100/491/197/themes/917410/assets/HwtW9Wq2HFaj.png" data-src="theme/thumb/large/100/491/197/collections/cat-dung-cu-kiem-tra.png?v=1689753495487" alt="Dụng cụ kiểm tra">
                                                </div>
                                                <span class="line-clamp line-clamp-2">Dụng cụ kiểm tra </span>
                                            </a>
                                        </div>






                                    </div>
                                </div>

                            </li>
                            <li class="nav-item ">

                                <a class="a-img" href="/khuyen-mai-hot" title="Khuyến mãi HOT">
                                    Khuyến mãi HOT

                                </a>

                                <div class="product-thumb">
                                    <div class="row row-fix">





                                    </div>
                                </div>

                            </li>
                        </ul>
                    </div>

                </div>
                <div class="col-lg-5 col-12">
                    <div class="search-header">
                        <div class="search-smart">
                            <form action="/search" method="get" class="header-search-form input-group search-bar" role="search">
                                <input type="text" name="query" required="" class="input-group-field auto-search search-auto form-control" placeholder="Nhập tên sản phẩm..." autocomplete="off">
                                <input type="hidden" name="type" value="product">
                                <button type="submit" class="btn icon-fallback-text" aria-label="Tìm kiếm" title="Tìm kiếm">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <path fill="#fff" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"></path>
                                    </svg> </button>

                                <div class="search-suggest">
                                    <ul class="smart-search-title">
                                        <li data-tab="#tab-search-1" class="active"><a href="javascript:void(0)" title="Sản phẩm">Sản phẩm</a></li>
                                        <li data-tab="#tab-search-2"><a href="javascript:void(0)" title="Tin tức">Tin tức</a></li>
                                    </ul>
                                    <div class="list-search-suggest">
                                        <div class="list-search list-search-style active" id="tab-search-1">
                                        </div>
                                        <div class="list-search2 list-search-style" id="tab-search-2">
                                        </div>
                                    </div>

                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-2 header-control">
                    <ul class="ul-control">
                        <li class="header-wishlist d-lg-flex d-none">
                            <a title="Hệ thống cửa hàng" href="/he-thong-cua-hang" class="button-wishlist icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                    <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"></path>
                                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                                </svg>
                                <span class="count">8</span>
                            </a>

                        </li>


                        <li class="header-wishlist d-lg-flex d-none">
                            <a title="Sản phẩm yêu thích" href="/san-pham-yeu-thich" class="button-wishlist icon">
                                <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 40 40">
                                    <defs></defs>
                                    <path class="cls-1" d="M20,38.38a2.14,2.14,0,0,1-1.4-.53c-1.41-1.24-2.78-2.4-4-3.43a73.47,73.47,0,0,1-8.72-8.2,13.06,13.06,0,0,1-3.5-8.59,11,11,0,0,1,2.8-7.54,9.53,9.53,0,0,1,7-3.08h.11a8.94,8.94,0,0,1,5.52,1.92A11,11,0,0,1,20,11.18,12.13,12.13,0,0,1,22.2,8.93,8.89,8.89,0,0,1,27.71,7h.11a9.53,9.53,0,0,1,7,3.08,11,11,0,0,1,2.8,7.54,13.06,13.06,0,0,1-3.5,8.59,73.53,73.53,0,0,1-8.73,8.19c-1.2,1-2.57,2.2-4,3.44a2.14,2.14,0,0,1-1.4.53ZM12.19,9.19a7.35,7.35,0,0,0-5.41,2.37,8.84,8.84,0,0,0-2.22,6.06,10.89,10.89,0,0,0,3,7.21A73.66,73.66,0,0,0,16,32.75c1.2,1,2.55,2.18,4,3.41l4-3.41a72.9,72.9,0,0,0,8.46-7.92,10.89,10.89,0,0,0,3-7.21,8.84,8.84,0,0,0-2.22-6.06,7.35,7.35,0,0,0-5.41-2.37,6.8,6.8,0,0,0-4.28,1.46,9.8,9.8,0,0,0-2.36,2.73A1.37,1.37,0,0,1,20,14a1.41,1.41,0,0,1-.7-.19,1.51,1.51,0,0,1-.47-.47,9.8,9.8,0,0,0-2.36-2.73,6.8,6.8,0,0,0-4.2-1.46Z"></path>
                                </svg>
                                <span class="count js-wishlist-count js-wishlist-count-mobile">0</span>
                            </a>

                        </li>
                        <li class="header-blog d-lg-flex d-none">
                            <a title="Thông báo mới" href="tin-tuc" class="button-wishlist icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
                                    <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"></path>
                                </svg>
                                <span class="count">5</span>
                            </a>
                            <div class="blog-header">

                                <div class="block-blog">

                                    <div class="item-blog-header">
                                        <div class="block-thumb">

                                            <a class="thumb" href="/tre-em-sau-tiem-vac-xin-bao-lau-thi-sot" title="Trẻ em sau tiêm vắc xin bao lâu thì sốt?">
                                                <img width="402" height="272" class="lazyload" src="theme/100/491/197/themes/917410/assets/HwtW9Wq2HFaj.png" data-src="theme/thumb/small/100/491/197/articles/18.png?v=1689668697240" alt="Trẻ em sau tiêm vắc xin bao lâu thì sốt?">
                                            </a>


                                        </div>
                                        <div class="block-content">
                                            <h3>
                                                <a class="line-clamp line-clamp-2" href="/tre-em-sau-tiem-vac-xin-bao-lau-thi-sot" title="Trẻ em sau tiêm vắc xin bao lâu thì sốt?">Trẻ em sau tiêm vắc xin bao lâu thì sốt?</a>
                                            </h3>
                                            <div class="time-post">
                                                18
                                                <span>Tháng 07</span>

                                            </div>

                                        </div>
                                    </div>

                                    <div class="item-blog-header">
                                        <div class="block-thumb">

                                            <a class="thumb" href="/co-can-xet-nghiem-truoc-khi-di-tiem-hpv-hay-khong" title="Có cần xét nghiệm trước khi đi tiêm HPV hay không?">
                                                <img width="402" height="272" class="lazyload" src="theme/100/491/197/themes/917410/assets/HwtW9Wq2HFaj.png" data-src="theme/thumb/small/100/491/197/articles/17.png?v=1689668642660" alt="Có cần xét nghiệm trước khi đi tiêm HPV hay không?">
                                            </a>


                                        </div>
                                        <div class="block-content">
                                            <h3>
                                                <a class="line-clamp line-clamp-2" href="/co-can-xet-nghiem-truoc-khi-di-tiem-hpv-hay-khong" title="Có cần xét nghiệm trước khi đi tiêm HPV hay không?">Có cần xét nghiệm trước khi đi tiêm HPV hay không?</a>
                                            </h3>
                                            <div class="time-post">
                                                18
                                                <span>Tháng 07</span>

                                            </div>

                                        </div>
                                    </div>

                                    <div class="item-blog-header">
                                        <div class="block-thumb">

                                            <a class="thumb" href="/truoc-va-sau-khi-tiem-vac-xin-cu-an-gi-nen-an-gi" title="Trước và sau khi tiêm vắc xin cử ăn gì, nên ăn gì?">
                                                <img width="402" height="272" class="lazyload" src="theme/100/491/197/themes/917410/assets/HwtW9Wq2HFaj.png" data-src="theme/thumb/small/100/491/197/articles/16.png?v=1689668593487" alt="Trước và sau khi tiêm vắc xin cử ăn gì, nên ăn gì?">
                                            </a>


                                        </div>
                                        <div class="block-content">
                                            <h3>
                                                <a class="line-clamp line-clamp-2" href="/truoc-va-sau-khi-tiem-vac-xin-cu-an-gi-nen-an-gi" title="Trước và sau khi tiêm vắc xin cử ăn gì, nên ăn gì?">Trước và sau khi tiêm vắc xin cử ăn gì, nên ăn gì?</a>
                                            </h3>
                                            <div class="time-post">
                                                18
                                                <span>Tháng 07</span>

                                            </div>

                                        </div>
                                    </div>

                                    <div class="item-blog-header">
                                        <div class="block-thumb">

                                            <a class="thumb" href="/tham-khao-cac-loai-thuoc-tri-lac-dong-tien-hieu-qua" title="Tham khảo các loại thuốc trị lác đồng tiền hiệu quả">
                                                <img width="402" height="272" class="lazyload" src="theme/100/491/197/themes/917410/assets/HwtW9Wq2HFaj.png" data-src="theme/thumb/small/100/491/197/articles/15.png?v=1689668537703" alt="Tham khảo các loại thuốc trị lác đồng tiền hiệu quả">
                                            </a>


                                        </div>
                                        <div class="block-content">
                                            <h3>
                                                <a class="line-clamp line-clamp-2" href="/tham-khao-cac-loai-thuoc-tri-lac-dong-tien-hieu-qua" title="Tham khảo các loại thuốc trị lác đồng tiền hiệu quả">Tham khảo các loại thuốc trị lác đồng tiền hiệu quả</a>
                                            </h3>
                                            <div class="time-post">
                                                18
                                                <span>Tháng 07</span>

                                            </div>

                                        </div>
                                    </div>

                                    <div class="item-blog-header">
                                        <div class="block-thumb">

                                            <a class="thumb" href="/nguoi-bi-u-tuyen-giap-co-uong-duoc-collagen-khong" title="Người bị u tuyến giáp có uống được collagen không?">
                                                <img width="402" height="272" class="lazyload" src="theme/100/491/197/themes/917410/assets/HwtW9Wq2HFaj.png" data-src="theme/thumb/small/100/491/197/articles/14.png?v=1689668449273" alt="Người bị u tuyến giáp có uống được collagen không?">
                                            </a>


                                        </div>
                                        <div class="block-content">
                                            <h3>
                                                <a class="line-clamp line-clamp-2" href="/nguoi-bi-u-tuyen-giap-co-uong-duoc-collagen-khong" title="Người bị u tuyến giáp có uống được collagen không?">Người bị u tuyến giáp có uống được collagen không?</a>
                                            </h3>
                                            <div class="time-post">
                                                18
                                                <span>Tháng 07</span>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="see-more">
                                    <a href="tin-tuc" title="Xem tất cả">Xem tất cả</a>
                                </div>
                            </div>

                        </li>
                        <li class="header-cart block-cart">
                            <a href="/cart" class="icon" title="Giỏ hàng">
                                <span class="d-none d-lg-block">Giỏ hàng</span>
                                <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 40 40">
                                    <defs></defs>
                                    <g id="ic-cart">
                                        <path id="shopping-bag" class="cls-1" d="M35.91,36.17,33.24,10.75a1,1,0,0,0-1-.94h-5V8.67a6.47,6.47,0,1,0-12.93,0V9.81h-5a1.05,1.05,0,0,0-1,.94L5.52,36.17a1,1,0,0,0,.93,1.15H34.87a1,1,0,0,0,1.05-1A.41.41,0,0,0,35.91,36.17ZM16.35,8.67a4.38,4.38,0,1,1,8.75,0V9.81H16.35ZM7.73,35.24l2.45-23.33h4.07v2.3a1,1,0,0,0,1,1.09,1,1,0,0,0,1.09-1V11.91H25.1v2.3a1,1,0,0,0,1,1.09,1,1,0,0,0,1.09-1V11.91h4.07l2.45,23.33Z"></path>
                                    </g>
                                </svg>
                                <span class="count count_item_pr">0</span>
                            </a>
                            <div class="top-cart-content">
                                <div class="CartHeaderContainer">
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>

            </div>
            <div class="header-menu">
                <div class="header-menu-des">
                    <nav class="header-nav">
                        <ul class="item_big">
                            <li>
                                <a class="logo-sitenav d-lg-none d-block" href="/" title="Logo">
                                    <img width="172" height="50" src="theme/100/491/197/themes/917410/assets/f54U63VgI1TN.png" alt="Dola Pharmacy">
                                </a>
                            </li>
                            <li class="d-lg-none d-block account-mb">
                                <ul>


                                    <li>
                                        <a href="/account/register" title="Đăng ký">
                                            Đăng ký
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/account/login" title="Đăng nhập">
                                            Đăng nhập
                                        </a>
                                    </li>

                                </ul>
                            </li>
                            <li class="d-block d-lg-none title-danhmuc"><span>Menu chính</span></li>




                            <li class="nav-item active  ">
                                <a class="a-img" href="/" title="Trang chủ">
                                    Trang chủ
                                </a>
                            </li>



                            <li class="nav-item  ">
                                <a class="a-img" href="/gioi-thieu" title="Giới thiệu">
                                    Giới thiệu
                                </a>
                            </li>








                            <li class="nav-item   has-mega ">
                                <a class="a-img caret-down" href="/collections/all" title="Sản phẩm">
                                    Sản phẩm
                                </a>
                                <i class="fa fa-caret-down"></i>


                                <div class="mega-content d-lg-block d-none">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <ul class="level0">


                                                <li class="level1 parent item fix-navs" data-title="Dược phẩm" data-link="/duoc-pham">
                                                    <a class="hmega" href="/duoc-pham" title="Dược phẩm">Dược phẩm</a>
                                                    <ul class="level1">

                                                        <li class="level2">
                                                            <a href="/thuoc-khong-ke-don" title="Thuốc không kê đơn">Thuốc không kê đơn</a>
                                                        </li>

                                                    </ul>
                                                </li>



                                                <li class="level1 parent item fix-navs" data-title="Chăm sóc sức khỏe" data-link="/cham-soc-suc-khoe">
                                                    <a class="hmega" href="/cham-soc-suc-khoe" title="Chăm sóc sức khỏe">Chăm sóc sức khỏe</a>
                                                    <ul class="level1">

                                                        <li class="level2">
                                                            <a href="/thuc-pham-dinh-duong" title="Thực phẩm dinh dưỡng">Thực phẩm dinh dưỡng</a>
                                                        </li>

                                                        <li class="level2">
                                                            <a href="/dung-cu-so-cuu" title="Dụng cụ sơ cứu">Dụng cụ sơ cứu</a>
                                                        </li>

                                                        <li class="level2">
                                                            <a href="/cham-soc-mat-tai-mui" title="Chăm sóc Mắt/Tai/Mũi">Chăm sóc Mắt/Tai/Mũi</a>
                                                        </li>

                                                        <li class="level2">
                                                            <a href="/cham-soc-chan" title="Chăm sóc chân">Chăm sóc chân</a>
                                                        </li>

                                                        <li class="level2">
                                                            <a href="/khau-trang-y-te" title="Khẩu trang y tế">Khẩu trang y tế</a>
                                                        </li>

                                                        <li class="level2">
                                                            <a href="/chong-muoi" title="Chống muỗi">Chống muỗi</a>
                                                        </li>

                                                        <li class="level2">
                                                            <a href="/dau-tram-dau-xoa-bop" title="Dầu tràm, dầu xoa bóp">Dầu tràm, dầu xoa bóp</a>
                                                        </li>

                                                    </ul>
                                                </li>



                                                <li class="level1 parent item fix-navs" data-title="Chăm sóc cá nhân" data-link="/cham-soc-ca-nhan">
                                                    <a class="hmega" href="/cham-soc-ca-nhan" title="Chăm sóc cá nhân">Chăm sóc cá nhân</a>
                                                    <ul class="level1">

                                                        <li class="level2">
                                                            <a href="/san-pham-phong-tam" title="Sản phẩm phòng tắm">Sản phẩm phòng tắm</a>
                                                        </li>

                                                        <li class="level2">
                                                            <a href="/san-pham-khu-mui" title="Sản phẩm khử mùi">Sản phẩm khử mùi</a>
                                                        </li>

                                                        <li class="level2">
                                                            <a href="/cham-soc-toc" title="Chăm sóc tóc">Chăm sóc tóc</a>
                                                        </li>

                                                        <li class="level2">
                                                            <a href="/ve-sinh-phu-nu" title="Vệ sinh phụ nữ">Vệ sinh phụ nữ</a>
                                                        </li>

                                                        <li class="level2">
                                                            <a href="/cham-soc-nam-gioi" title="Chăm sóc nam giới">Chăm sóc nam giới</a>
                                                        </li>

                                                        <li class="level2">
                                                            <a href="/cham-soc-rang-mieng" title="Chăm sóc răng miệng">Chăm sóc răng miệng</a>
                                                        </li>

                                                        <li class="level2">
                                                            <a href="/cham-soc-co-the" title="Chăm sóc cơ thể">Chăm sóc cơ thể</a>
                                                        </li>

                                                    </ul>
                                                </li>



                                                <li class="level1 parent item fix-navs" data-title="Sản phẩm tiện lợi" data-link="/san-pham-tien-loi">
                                                    <a class="hmega" href="/san-pham-tien-loi" title="Sản phẩm tiện lợi">Sản phẩm tiện lợi</a>
                                                    <ul class="level1">

                                                        <li class="level2">
                                                            <a href="/hang-tong-hop" title="Hàng tổng hợp">Hàng tổng hợp</a>
                                                        </li>

                                                        <li class="level2">
                                                            <a href="/hang-bach-hoa" title="Hàng bách hóa">Hàng bách hóa</a>
                                                        </li>

                                                    </ul>
                                                </li>



                                                <li class="level1 parent item fix-navs" data-title="Thực phẩm chức năng" data-link="/thuc-pham-chuc-nang">
                                                    <a class="hmega" href="/thuc-pham-chuc-nang" title="Thực phẩm chức năng">Thực phẩm chức năng</a>
                                                    <ul class="level1">

                                                        <li class="level2">
                                                            <a href="/tpcn-nhom-da-day" title="TPCN Nhóm dạ dày">TPCN Nhóm dạ dày</a>
                                                        </li>

                                                        <li class="level2">
                                                            <a href="/tpcn-nhom-tim-mach" title="TPCN Nhóm tim mạch">TPCN Nhóm tim mạch</a>
                                                        </li>

                                                        <li class="level2">
                                                            <a href="/tpcn-nhom-duong-huyet" title="TPCN Nhóm đường huyết">TPCN Nhóm đường huyết</a>
                                                        </li>

                                                        <li class="level2">
                                                            <a href="/tpcn-nhom-ho-hap" title="TPCN Nhóm hô hấp">TPCN Nhóm hô hấp</a>
                                                        </li>

                                                        <li class="level2">
                                                            <a href="/tpcn-nhom-than-kinh" title="TPCN Nhóm thần kinh">TPCN Nhóm thần kinh</a>
                                                        </li>

                                                        <li class="level2">
                                                            <a href="/tpcn-nhom-co-xuong-khop" title="TPCN Nhóm cơ xương khớp">TPCN Nhóm cơ xương khớp</a>
                                                        </li>

                                                        <li class="level2">
                                                            <a href="/tpcn-giam-can" title="TPCN Giảm cân">TPCN Giảm cân</a>
                                                        </li>

                                                        <li class="level2">
                                                            <a href="/tpcn-cham-soc-sac-dep" title="TPCN Chăm sóc sắc đẹp">TPCN Chăm sóc sắc đẹp</a>
                                                        </li>

                                                        <li class="level2">
                                                            <a href="/tpcn-cham-soc-suc-khoe-nam-va-nu" title="TPCN Chăm sóc sức khỏe nam và nữ">TPCN Chăm sóc sức khỏe nam và nữ</a>
                                                        </li>

                                                        <li class="level2">
                                                            <a href="/tpcn-nhom-mat-tai-mui" title="TPCN Nhóm Mắt/Tai/Mũi">TPCN Nhóm Mắt/Tai/Mũi</a>
                                                        </li>

                                                        <li class="level2">
                                                            <a href="/tpcn-vitamin-tong-hop-va-khoang-chat" title="TPCN Vitamin tổng hợp và khoáng chất">TPCN Vitamin tổng hợp và khoáng chất</a>
                                                        </li>

                                                        <li class="level2">
                                                            <a href="/tpcn-cham-soc-toc" title="TPCN Chăm sóc tóc">TPCN Chăm sóc tóc</a>
                                                        </li>

                                                        <li class="level2">
                                                            <a href="/tpcn-nhom-khac" title="TPCN Nhóm khác">TPCN Nhóm khác</a>
                                                        </li>

                                                        <li class="level2">
                                                            <a href="/tpcn-cho-gan" title="TPCN cho gan">TPCN cho gan</a>
                                                        </li>

                                                    </ul>
                                                </li>



                                                <li class="level1 parent item fix-navs" data-title="Mẹ và Bé" data-link="/me-va-be">
                                                    <a class="hmega" href="/me-va-be" title="Mẹ và Bé">Mẹ và Bé</a>
                                                    <ul class="level1">

                                                        <li class="level2">
                                                            <a href="/cham-soc-em-be" title="Chăm sóc em bé">Chăm sóc em bé</a>
                                                        </li>

                                                        <li class="level2">
                                                            <a href="/tpcn-danh-cho-tre-em" title="TPCN dành cho trẻ em">TPCN dành cho trẻ em</a>
                                                        </li>

                                                        <li class="level2">
                                                            <a href="/san-pham-danh-cho-me" title="Sản phẩm dành cho mẹ">Sản phẩm dành cho mẹ</a>
                                                        </li>

                                                        <li class="level2">
                                                            <a href="/tpcn-danh-cho-phu-nu-mang-thai" title="TPCN dành cho phụ nữ mang thai">TPCN dành cho phụ nữ mang thai</a>
                                                        </li>

                                                    </ul>
                                                </li>



                                                <li class="level1 parent item fix-navs" data-title="Chăm sóc sắc đẹp" data-link="/cham-soc-sac-dep">
                                                    <a class="hmega" href="/cham-soc-sac-dep" title="Chăm sóc sắc đẹp">Chăm sóc sắc đẹp</a>
                                                    <ul class="level1">

                                                        <li class="level2">
                                                            <a href="/cham-soc-mat" title="Chăm sóc mặt">Chăm sóc mặt</a>
                                                        </li>

                                                        <li class="level2">
                                                            <a href="/san-pham-chong-nang" title="Sản phẩm chống nắng">Sản phẩm chống nắng</a>
                                                        </li>

                                                        <li class="level2">
                                                            <a href="/dung-cu-lam-dep" title="Dụng cụ làm đẹp">Dụng cụ làm đẹp</a>
                                                        </li>

                                                        <li class="level2">
                                                            <a href="/duoc-my-pham" title="Dược - Mỹ Phẩm">Dược - Mỹ Phẩm</a>
                                                        </li>

                                                    </ul>
                                                </li>



                                                <li class="level1 parent item fix-navs" data-title="Thiết bị y tế" data-link="/thiet-bi-y-te">
                                                    <a class="hmega" href="/thiet-bi-y-te" title="Thiết bị y tế">Thiết bị y tế</a>
                                                    <ul class="level1">

                                                        <li class="level2">
                                                            <a href="/nhiet-ke" title="Nhiệt kế">Nhiệt kế</a>
                                                        </li>

                                                        <li class="level2">
                                                            <a href="/may-do-huyet-ap" title="Máy đo huyết áp">Máy đo huyết áp</a>
                                                        </li>

                                                        <li class="level2">
                                                            <a href="/may-do-duong-huyet" title="Máy đo đường huyết">Máy đo đường huyết</a>
                                                        </li>

                                                        <li class="level2">
                                                            <a href="/may-xong-khi-dung" title="Máy xông khí dung">Máy xông khí dung</a>
                                                        </li>

                                                        <li class="level2">
                                                            <a href="/thiet-bi-y-te-khac" title="Thiết bị y tế khác">Thiết bị y tế khác</a>
                                                        </li>

                                                        <li class="level2">
                                                            <a href="/dung-cu-kiem-tra" title="Dụng cụ kiểm tra">Dụng cụ kiểm tra</a>
                                                        </li>

                                                    </ul>
                                                </li>



                                                <li class="level1 parent item">
                                                    <a class="hmega" href="/khuyen-mai-hot" title="Khuyến mãi HOT">Khuyến mãi HOT</a>
                                                </li>


                                            </ul>

                                        </div>

                                    </div>
                                </div>
                                <ul class="item_small d-lg-none d-block">
                                    <li>
                                        <a class="caret-down" href="/duoc-pham" title="Dược phẩm">
                                            Dược phẩm
                                        </a>
                                        <i class="fa fa-caret-down"></i>
                                        <ul>
                                            <li>
                                                <a href="/thuoc-khong-ke-don" title="Thuốc không kê đơn" class="a3">Thuốc không kê đơn</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="caret-down" href="/cham-soc-suc-khoe" title="Chăm sóc sức khỏe">
                                            Chăm sóc sức khỏe
                                        </a>
                                        <i class="fa fa-caret-down"></i>
                                        <ul>
                                            <li>
                                                <a href="/thuc-pham-dinh-duong" title="Thực phẩm dinh dưỡng" class="a3">Thực phẩm dinh dưỡng</a>
                                            </li>
                                            <li>
                                                <a href="/dung-cu-so-cuu" title="Dụng cụ sơ cứu" class="a3">Dụng cụ sơ cứu</a>
                                            </li>
                                            <li>
                                                <a href="/cham-soc-mat-tai-mui" title="Chăm sóc Mắt/Tai/Mũi" class="a3">Chăm sóc Mắt/Tai/Mũi</a>
                                            </li>
                                            <li>
                                                <a href="/cham-soc-chan" title="Chăm sóc chân" class="a3">Chăm sóc chân</a>
                                            </li>
                                            <li>
                                                <a href="/khau-trang-y-te" title="Khẩu trang y tế" class="a3">Khẩu trang y tế</a>
                                            </li>
                                            <li>
                                                <a href="/chong-muoi" title="Chống muỗi" class="a3">Chống muỗi</a>
                                            </li>
                                            <li>
                                                <a href="/dau-tram-dau-xoa-bop" title="Dầu tràm, dầu xoa bóp" class="a3">Dầu tràm, dầu xoa bóp</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="caret-down" href="/cham-soc-ca-nhan" title="Chăm sóc cá nhân">
                                            Chăm sóc cá nhân
                                        </a>
                                        <i class="fa fa-caret-down"></i>
                                        <ul>
                                            <li>
                                                <a href="/san-pham-phong-tam" title="Sản phẩm phòng tắm" class="a3">Sản phẩm phòng tắm</a>
                                            </li>
                                            <li>
                                                <a href="/san-pham-khu-mui" title="Sản phẩm khử mùi" class="a3">Sản phẩm khử mùi</a>
                                            </li>
                                            <li>
                                                <a href="/cham-soc-toc" title="Chăm sóc tóc" class="a3">Chăm sóc tóc</a>
                                            </li>
                                            <li>
                                                <a href="/ve-sinh-phu-nu" title="Vệ sinh phụ nữ" class="a3">Vệ sinh phụ nữ</a>
                                            </li>
                                            <li>
                                                <a href="/cham-soc-nam-gioi" title="Chăm sóc nam giới" class="a3">Chăm sóc nam giới</a>
                                            </li>
                                            <li>
                                                <a href="/cham-soc-rang-mieng" title="Chăm sóc răng miệng" class="a3">Chăm sóc răng miệng</a>
                                            </li>
                                            <li>
                                                <a href="/cham-soc-co-the" title="Chăm sóc cơ thể" class="a3">Chăm sóc cơ thể</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="caret-down" href="/san-pham-tien-loi" title="Sản phẩm tiện lợi">
                                            Sản phẩm tiện lợi
                                        </a>
                                        <i class="fa fa-caret-down"></i>
                                        <ul>
                                            <li>
                                                <a href="/hang-tong-hop" title="Hàng tổng hợp" class="a3">Hàng tổng hợp</a>
                                            </li>
                                            <li>
                                                <a href="/hang-bach-hoa" title="Hàng bách hóa" class="a3">Hàng bách hóa</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="caret-down" href="/thuc-pham-chuc-nang" title="Thực phẩm chức năng">
                                            Thực phẩm chức năng
                                        </a>
                                        <i class="fa fa-caret-down"></i>
                                        <ul>
                                            <li>
                                                <a href="/tpcn-nhom-da-day" title="TPCN Nhóm dạ dày" class="a3">TPCN Nhóm dạ dày</a>
                                            </li>
                                            <li>
                                                <a href="/tpcn-nhom-tim-mach" title="TPCN Nhóm tim mạch" class="a3">TPCN Nhóm tim mạch</a>
                                            </li>
                                            <li>
                                                <a href="/tpcn-nhom-duong-huyet" title="TPCN Nhóm đường huyết" class="a3">TPCN Nhóm đường huyết</a>
                                            </li>
                                            <li>
                                                <a href="/tpcn-nhom-ho-hap" title="TPCN Nhóm hô hấp" class="a3">TPCN Nhóm hô hấp</a>
                                            </li>
                                            <li>
                                                <a href="/tpcn-nhom-than-kinh" title="TPCN Nhóm thần kinh" class="a3">TPCN Nhóm thần kinh</a>
                                            </li>
                                            <li>
                                                <a href="/tpcn-nhom-co-xuong-khop" title="TPCN Nhóm cơ xương khớp" class="a3">TPCN Nhóm cơ xương khớp</a>
                                            </li>
                                            <li>
                                                <a href="/tpcn-giam-can" title="TPCN Giảm cân" class="a3">TPCN Giảm cân</a>
                                            </li>
                                            <li>
                                                <a href="/tpcn-cham-soc-sac-dep" title="TPCN Chăm sóc sắc đẹp" class="a3">TPCN Chăm sóc sắc đẹp</a>
                                            </li>
                                            <li>
                                                <a href="/tpcn-cham-soc-suc-khoe-nam-va-nu" title="TPCN Chăm sóc sức khỏe nam và nữ" class="a3">TPCN Chăm sóc sức khỏe nam và nữ</a>
                                            </li>
                                            <li>
                                                <a href="/tpcn-nhom-mat-tai-mui" title="TPCN Nhóm Mắt/Tai/Mũi" class="a3">TPCN Nhóm Mắt/Tai/Mũi</a>
                                            </li>
                                            <li>
                                                <a href="/tpcn-vitamin-tong-hop-va-khoang-chat" title="TPCN Vitamin tổng hợp và khoáng chất" class="a3">TPCN Vitamin tổng hợp và khoáng chất</a>
                                            </li>
                                            <li>
                                                <a href="/tpcn-cham-soc-toc" title="TPCN Chăm sóc tóc" class="a3">TPCN Chăm sóc tóc</a>
                                            </li>
                                            <li>
                                                <a href="/tpcn-nhom-khac" title="TPCN Nhóm khác" class="a3">TPCN Nhóm khác</a>
                                            </li>
                                            <li>
                                                <a href="/tpcn-cho-gan" title="TPCN cho gan" class="a3">TPCN cho gan</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="caret-down" href="/me-va-be" title="Mẹ và Bé">
                                            Mẹ và Bé
                                        </a>
                                        <i class="fa fa-caret-down"></i>
                                        <ul>
                                            <li>
                                                <a href="/cham-soc-em-be" title="Chăm sóc em bé" class="a3">Chăm sóc em bé</a>
                                            </li>
                                            <li>
                                                <a href="/tpcn-danh-cho-tre-em" title="TPCN dành cho trẻ em" class="a3">TPCN dành cho trẻ em</a>
                                            </li>
                                            <li>
                                                <a href="/san-pham-danh-cho-me" title="Sản phẩm dành cho mẹ" class="a3">Sản phẩm dành cho mẹ</a>
                                            </li>
                                            <li>
                                                <a href="/tpcn-danh-cho-phu-nu-mang-thai" title="TPCN dành cho phụ nữ mang thai" class="a3">TPCN dành cho phụ nữ mang thai</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="caret-down" href="/cham-soc-sac-dep" title="Chăm sóc sắc đẹp">
                                            Chăm sóc sắc đẹp
                                        </a>
                                        <i class="fa fa-caret-down"></i>
                                        <ul>
                                            <li>
                                                <a href="/cham-soc-mat" title="Chăm sóc mặt" class="a3">Chăm sóc mặt</a>
                                            </li>
                                            <li>
                                                <a href="/san-pham-chong-nang" title="Sản phẩm chống nắng" class="a3">Sản phẩm chống nắng</a>
                                            </li>
                                            <li>
                                                <a href="/dung-cu-lam-dep" title="Dụng cụ làm đẹp" class="a3">Dụng cụ làm đẹp</a>
                                            </li>
                                            <li>
                                                <a href="/duoc-my-pham" title="Dược - Mỹ Phẩm" class="a3">Dược - Mỹ Phẩm</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="caret-down" href="/thiet-bi-y-te" title="Thiết bị y tế">
                                            Thiết bị y tế
                                        </a>
                                        <i class="fa fa-caret-down"></i>
                                        <ul>
                                            <li>
                                                <a href="/nhiet-ke" title="Nhiệt kế" class="a3">Nhiệt kế</a>
                                            </li>
                                            <li>
                                                <a href="/may-do-huyet-ap" title="Máy đo huyết áp" class="a3">Máy đo huyết áp</a>
                                            </li>
                                            <li>
                                                <a href="/may-do-duong-huyet" title="Máy đo đường huyết" class="a3">Máy đo đường huyết</a>
                                            </li>
                                            <li>
                                                <a href="/may-xong-khi-dung" title="Máy xông khí dung" class="a3">Máy xông khí dung</a>
                                            </li>
                                            <li>
                                                <a href="/thiet-bi-y-te-khac" title="Thiết bị y tế khác" class="a3">Thiết bị y tế khác</a>
                                            </li>
                                            <li>
                                                <a href="/dung-cu-kiem-tra" title="Dụng cụ kiểm tra" class="a3">Dụng cụ kiểm tra</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="" href="/khuyen-mai-hot" title="Khuyến mãi HOT">
                                            Khuyến mãi HOT
                                        </a>
                                    </li>
                                </ul>

                            </li>



                            <li class="nav-item  ">
                                <a class="a-img" href="/san-pham-khuyen-mai" title="Sản phẩm khuyến mãi">
                                    Sản phẩm khuyến mãi
                                </a>
                            </li>




                            <li class="nav-item   ">
                                <a class="a-img caret-down" href="/tin-tuc" title="Tin tức">
                                    Tin tức
                                </a>
                                <i class="fa fa-caret-down"></i>


                                <ul class="item_small">
                                    <li>
                                        <a class="" href="/goc-dinh-duong" title="Góc dinh dưỡng">
                                            Góc dinh dưỡng
                                        </a>
                                    </li>
                                    <li>
                                        <a class="" href="/goc-khoe-dep" title="Góc khỏe đẹp">
                                            Góc khỏe đẹp
                                        </a>
                                    </li>
                                </ul>

                            </li>



                            <li class="nav-item  ">
                                <a class="a-img" href="/video" title="Video">
                                    Video
                                </a>
                            </li>



                            <li class="nav-item  ">
                                <a class="a-img" href="/cau-hoi-thuong-gap" title="Câu hỏi thường gặp">
                                    Câu hỏi thường gặp
                                </a>
                            </li>



                            <li class="nav-item  ">
                                <a class="a-img" href="/lien-he" title="Liên hệ">
                                    Liên hệ
                                </a>
                            </li>
                            <li class="d-lg-none d-block item-mb">
                                <a href="/he-thong-cua-hang" title="Hệ thống cửa hàng">
                                    Hệ thống cửa hàng
                                </a>

                                <a href="/san-pham-yeu-thich" title="Sản phẩm Yêu thích">
                                    Sản phẩm yêu thích
                                </a>
                            </li>

                        </ul>
                    </nav>

                    <div class="control-menu d-none">
                        <a href="#" id="prev"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                <path fill="#fff" d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 278.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"></path>
                            </svg></a>
                        <a href="#" id="next"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                <path fill="#fff" d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"></path>
                            </svg></a>
                    </div>

                </div>

            </div>
        </div>
    </header>