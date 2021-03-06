/**
 * @Author: GurjarsPro
 * @Date: 2019-04-11 17:39:27
 * @Last Modified by: krishna_gujjjar
 * @Last Modified time: 2019-04-29 12:48:48
 */

/** Remove Banner from Document */
if (document.querySelector('div>a>img')) {
    document.onreadystatechange = () => {
        if (document.readyState === 'interactive') {
            let el = document.querySelector('[alt="www.000webhost.com"]').parentNode.parentNode;
            el.parentNode.removeChild(el);
        }
    }
}

/*! jQuery Migrate v3.0.0 | (c) jQuery Foundation and other contributors | jquery.org/license */
"undefined" == typeof jQuery.migrateMute && (jQuery.migrateMute = !0),
    function (a, b) {
        "use strict";

        function c(c) {
            var d = b.console;
            e[c] || (e[c] = !0, a.migrateWarnings.push(c), d && d.warn && !a.migrateMute && (d.warn("JQMIGRATE: " + c), a.migrateTrace && d.trace && d.trace()))
        }

        function d(a, b, d, e) {
            Object.defineProperty(a, b, {
                configurable: !0,
                enumerable: !0,
                get: function () {
                    return c(e), d
                }
            })
        }
        a.migrateVersion = "3.0.0",
            function () {
                var c = b.console && b.console.log && function () {
                        // b.console.log.apply(b.console, arguments)
                    },
                    d = /^[12]\./;
                c && (a && !d.test(a.fn.jquery) || c("JQMIGRATE: jQuery 3.0.0+ REQUIRED"), a.migrateWarnings && c("JQMIGRATE: Migrate plugin loaded multiple times"), c("JQMIGRATE: Migrate is installed" + (a.migrateMute ? "" : " with logging active") + ", version " + a.migrateVersion))
            }();
        var e = {};
        a.migrateWarnings = [], void 0 === a.migrateTrace && (a.migrateTrace = !0), a.migrateReset = function () {
            e = {}, a.migrateWarnings.length = 0
        }, "BackCompat" === document.compatMode && c("jQuery is not compatible with Quirks Mode");
        var f = a.fn.init,
            g = a.isNumeric,
            h = a.find,
            i = /\[(\s*[-\w]+\s*)([~|^$*]?=)\s*([-\w#]*?#[-\w#]*)\s*\]/,
            j = /\[(\s*[-\w]+\s*)([~|^$*]?=)\s*([-\w#]*?#[-\w#]*)\s*\]/g;
        a.fn.init = function (a) {
            var b = Array.prototype.slice.call(arguments);
            return "string" == typeof a && "#" === a && (c("jQuery( '#' ) is not a valid selector"), b[0] = []), f.apply(this, b)
        }, a.fn.init.prototype = a.fn, a.find = function (a) {
            var b = Array.prototype.slice.call(arguments);
            if ("string" == typeof a && i.test(a)) try {
                document.querySelector(a)
            } catch (d) {
                a = a.replace(j, function (a, b, c, d) {
                    return "[" + b + c + '"' + d + '"]'
                });
                try {
                    document.querySelector(a), c("Attribute selector with '#' must be quoted: " + b[0]), b[0] = a
                } catch (e) {
                    c("Attribute selector with '#' was not fixed: " + b[0])
                }
            }
            return h.apply(this, b)
        };
        var k;
        for (k in h) Object.prototype.hasOwnProperty.call(h, k) && (a.find[k] = h[k]);
        a.fn.size = function () {
            return c("jQuery.fn.size() is deprecated; use the .length property"), this.length
        }, a.parseJSON = function () {
            return c("jQuery.parseJSON is deprecated; use JSON.parse"), JSON.parse.apply(null, arguments)
        }, a.isNumeric = function (b) {
            function d(b) {
                var c = b && b.toString();
                return !a.isArray(b) && c - parseFloat(c) + 1 >= 0
            }
            var e = g(b),
                f = d(b);
            return e !== f && c("jQuery.isNumeric() should not be called on constructed objects"), f
        }, d(a, "unique", a.uniqueSort, "jQuery.unique is deprecated, use jQuery.uniqueSort"), d(a.expr, "filters", a.expr.pseudos, "jQuery.expr.filters is now jQuery.expr.pseudos"), d(a.expr, ":", a.expr.pseudos, 'jQuery.expr[":"] is now jQuery.expr.pseudos');
        var l = a.ajax;
        a.ajax = function () {
            var a = l.apply(this, arguments);
            return a.promise && (d(a, "success", a.done, "jQXHR.success is deprecated and removed"), d(a, "error", a.fail, "jQXHR.error is deprecated and removed"), d(a, "complete", a.always, "jQXHR.complete is deprecated and removed")), a
        };
        var m = a.fn.removeAttr,
            n = a.fn.toggleClass,
            o = /\S+/g;
        a.fn.removeAttr = function (b) {
            var d = this;
            return a.each(b.match(o), function (b, e) {
                a.expr.match.bool.test(e) && (c("jQuery.fn.removeAttr no longer sets boolean properties: " + e), d.prop(e, !1))
            }), m.apply(this, arguments)
        }, a.fn.toggleClass = function (b) {
            return void 0 !== b && "boolean" != typeof b ? n.apply(this, arguments) : (c("jQuery.fn.toggleClass( boolean ) is deprecated"), this.each(function () {
                var c = this.getAttribute && this.getAttribute("class") || "";
                c && a.data(this, "__className__", c), this.setAttribute && this.setAttribute("class", c || b === !1 ? "" : a.data(this, "__className__") || "")
            }))
        };
        var p = !1;
        a.swap && a.each(["height", "width", "reliableMarginRight"], function (b, c) {
            var d = a.cssHooks[c] && a.cssHooks[c].get;
            d && (a.cssHooks[c].get = function () {
                var a;
                return p = !0, a = d.apply(this, arguments), p = !1, a
            })
        }), a.swap = function (a, b, d, e) {
            var f, g, h = {};
            p || c("jQuery.swap() is undocumented and deprecated");
            for (g in b) h[g] = a.style[g], a.style[g] = b[g];
            f = d.apply(a, e || []);
            for (g in b) a.style[g] = h[g];
            return f
        };
        var q = a.data;
        a.data = function (b, d, e) {
            var f;
            return d && d !== a.camelCase(d) && (f = a.hasData(b) && q.call(this, b), f && d in f) ? (c("jQuery.data() always sets/gets camelCased names: " + d), arguments.length > 2 && (f[d] = e), f[d]) : q.apply(this, arguments)
        };
        var r = a.Tween.prototype.run;
        a.Tween.prototype.run = function (b) {
            a.easing[this.easing].length > 1 && (c('easing function "jQuery.easing.' + this.easing.toString() + '" should use only first argument'), a.easing[this.easing] = a.easing[this.easing].bind(a.easing, b, this.options.duration * b, 0, 1, this.options.duration)), r.apply(this, arguments)
        };
        var s = a.fn.load,
            t = a.event.fix;
        a.event.props = [], a.event.fixHooks = {}, a.event.fix = function (b) {
            var d, e = b.type,
                f = this.fixHooks[e],
                g = a.event.props;
            if (g.length)
                for (c("jQuery.event.props are deprecated and removed: " + g.join()); g.length;) a.event.addProp(g.pop());
            if (f && !f._migrated_ && (f._migrated_ = !0, c("jQuery.event.fixHooks are deprecated and removed: " + e), (g = f.props) && g.length))
                for (; g.length;) a.event.addProp(g.pop());
            return d = t.call(this, b), f && f.filter ? f.filter(d, b) : d
        }, a.each(["load", "unload", "error"], function (b, d) {
            a.fn[d] = function () {
                var a = Array.prototype.slice.call(arguments, 0);
                return "load" === d && "string" == typeof a[0] ? s.apply(this, a) : (c("jQuery.fn." + d + "() is deprecated"), a.splice(0, 0, d), arguments.length ? this.on.apply(this, a) : (this.triggerHandler.apply(this, a), this))
            }
        }), a(function () {
            a(document).triggerHandler("ready")
        }), a.event.special.ready = {
            setup: function () {
                this === document && c("'ready' event is deprecated")
            }
        }, a.fn.extend({
            bind: function (a, b, d) {
                return c("jQuery.fn.bind() is deprecated"), this.on(a, null, b, d)
            },
            unbind: function (a, b) {
                return c("jQuery.fn.unbind() is deprecated"), this.off(a, null, b)
            },
            delegate: function (a, b, d, e) {
                return c("jQuery.fn.delegate() is deprecated"), this.on(b, a, d, e)
            },
            undelegate: function (a, b, d) {
                return c("jQuery.fn.undelegate() is deprecated"), 1 === arguments.length ? this.off(a, "**") : this.off(b, a || "**", d)
            }
        });
        var u = a.fn.offset;
        a.fn.offset = function () {
            var b, d = this[0],
                e = {
                    top: 0,
                    left: 0
                };
            return d && d.nodeType ? (b = (d.ownerDocument || document).documentElement, a.contains(b, d) ? u.apply(this, arguments) : (c("jQuery.fn.offset() requires an element connected to a document"), e)) : (c("jQuery.fn.offset() requires a valid DOM element"), e)
        };
        var v = a.param;
        a.param = function (b, d) {
            var e = a.ajaxSettings && a.ajaxSettings.traditional;
            return void 0 === d && e && (c("jQuery.param() no longer uses jQuery.ajaxSettings.traditional"), d = e), v.call(this, b, d)
        };
        var w = a.fn.andSelf || a.fn.addBack;
        a.fn.andSelf = function () {
            return c("jQuery.fn.andSelf() replaced by jQuery.fn.addBack()"), w.apply(this, arguments)
        };
        var x = a.Deferred,
            y = [
                ["resolve", "done", a.Callbacks("once memory"), a.Callbacks("once memory"), "resolved"],
                ["reject", "fail", a.Callbacks("once memory"), a.Callbacks("once memory"), "rejected"],
                ["notify", "progress", a.Callbacks("memory"), a.Callbacks("memory")]
            ];
        a.Deferred = function (b) {
            var d = x(),
                e = d.promise();
            return d.pipe = e.pipe = function () {
                var b = arguments;
                return c("deferred.pipe() is deprecated"), a.Deferred(function (c) {
                    a.each(y, function (f, g) {
                        var h = a.isFunction(b[f]) && b[f];
                        d[g[1]](function () {
                            var b = h && h.apply(this, arguments);
                            b && a.isFunction(b.promise) ? b.promise().done(c.resolve).fail(c.reject).progress(c.notify) : c[g[0] + "With"](this === e ? c.promise() : this, h ? [b] : arguments)
                        })
                    }), b = null
                }).promise()
            }, b && b.call(d, d), d
        }
    }(jQuery, window);

($ => {
    'use strict';

    var $window = $(window);

    // :: Preloader Active Code
    $window.on('load', () => {
        $('#preloader').fadeOut('slow', () => {
            $(this).remove();
        });
    });

    // :: Sticky Active Code
    if ($window.width() > 767) {
        if ($.fn.sticky) {
            $('#stickyHeader').sticky({
                topSpacing: 0
            });
        }
    }

    // :: Tooltip Active Code
    $('[data-toggle="tooltip"]').tooltip()

    // :: Nicescroll Active Code
    if ($.fn.niceScroll) {
        $('body, textarea').niceScroll({
            cursorcolor: 'var(--primary)',
            cursorborder: 'none',
            cursorwidth: '8px',
            background: 'transperent'
        });
    }

    // :: Nice Select Active Code
    if ($.fn.niceSelect) {
        $('select').niceSelect();
    }

    // :: Owl Carousel Active Code
    if ($.fn.owlCarousel) {
        var welcomeSlide = $('.hero-slides');
        $('.hero-slides').owlCarousel({
            items: 1,
            margin: 0,
            loop: true,
            dots: true,
            autoplay: false,
            autoplayTimeout: 5000,
            smartSpeed: 1000
        });

        welcomeSlide.on('translate.owl.carousel', () => {
            var slideLayer = $('[data-animation]');
            slideLayer.each(() => {
                var anim_name = $(this).data('animation');
                $(this).removeClass('animated ' + anim_name).css('opacity', '0');
            });
        });

        welcomeSlide.on('translated.owl.carousel', () => {
            var slideLayer = welcomeSlide.find('.owl-item.active').find('[data-animation]');
            slideLayer.each(() => {
                var anim_name = $(this).data('animation');
                $(this).addClass('animated ' + anim_name).css('opacity', '1');
            });
        });

        $("[data-delay]").each(() => {
            var anim_del = $(this).data('delay');
            $(this).css('animation-delay', anim_del);
        });

        $("[data-duration]").each(() => {
            var anim_dur = $(this).data('duration');
            $(this).css('animation-duration', anim_dur);
        });

        $('.testimonials-slider').owlCarousel({
            items: 1,
            margin: 0,
            loop: true,
            nav: true,
            navText: ['<i class="fill-danger" data-feather="arrow-left"></i>', '<i class="fill-danger" data-feather="arrow-right"></i>'],
            dots: true,
            autoplay: true,
            autoplayTimeout: 5000,
            smartSpeed: 1000
        });

        $('.greeneye-gallery-area').owlCarousel({
            items: 4,
            margin: 0,
            loop: true,
            autoplay: true,
            autoplayTimeout: 5000,
            smartSpeed: 1000,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2
                },
                992: {
                    items: 3
                },
                1200: {
                    items: 4
                }
            }
        });
    }

    // :: Magnific Popup Active Code
    if ($.fn.magnificPopup) {
        $('.gallery-img').magnificPopup({
            type: 'image'
        });
        $('.popup-video').magnificPopup({
            disableOn: 700,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,
            fixedContentPos: false
        });
    }

    // :: MatchHeight Active Code
    if ($.fn.matchHeight) {
        $('.equalize').matchHeight({
            byRow: true,
            property: 'height'
        });
    }

    // :: CounterUp Active Code
    if ($.fn.counterUp) {
        $('.counter').counterUp({
            delay: 10,
            time: 2000
        });
    }

    // :: PreventDefault a Click
    $("a[href='#']").on('click', function ($) {
        $.preventDefault();
    });

    // :: wow Active Code
    if ($window.width() > 767) {
        new WOW().init();
    }



    //-------------------------------------------------------------------------------
    //                          Appointment Code Starts
    //-------------------------------------------------------------------------------

    const validString = /^[A-z ]+$/;
    const validNumbers = /^[0-9{10}]+$/;
    const validOTPs = /^[0-9{6}]+$/;
    const validREFs = /^[REF{3}]+[0-9{6}]+$/;

    /** Login User For Check status */
    if ($(document).attr('title').search('Check Status') != -1) {

        /** ureF Input */
        $('#ureF').on('input', () => {
            $('.form-control').css('margin-bottom', '30px');
            $('.help-block').remove();
            validREF('#ureF');
        });

        /** unumbeR Input */
        $('#unumbeR').on('input', () => {
            $('.form-control').css('margin-bottom', '30px');
            $('.help-block').remove();
            checkValid(validNumbers, '#unumbeR', 9, 11, 'Mobile Number');
        });

        /** Click on CheckStatus */
        $('#gReeneyeUser').click(e => {
            e.preventDefault();

            $('.help-block').remove(); // Remove Helper Text
            /** Check Form not Empty */
            if (validREF('#ureF') && checkValid(validNumbers, '#unumbeR', 9, 11, 'Mobile Number')) {
                let myForm;
                console.log(myForm = getFormData($('#gReeneyeUserForm')));

                ajaxLoading('#gReeneyeUserForm'); // Show Loader
                $.ajax({
                    type: "POST",
                    url: $('#gReeneyeUserForm').attr('action'),
                    cache: false,
                    data: {
                        getForm: "CheckStatus",
                        formData: myForm
                    },
                    success: response => {
                        $('#gReeneyeUserForm').html(response); // Show Time
                    }
                });

            } else {
                console.log('Empty Form');
            }
        });

        /** Click on btnDelete */
        $('#gReeneyeUserForm').on('click', '.btnDelete', () => {
            let delID;
            delID = $('.btnDelete').attr('id');

            ajaxLoading('#gReeneyeUserForm');
            $.ajax({
                type: "POST",
                url: $('#gReeneyeUserForm').attr('action'),
                cache: false,
                data: {
                    getForm: 'btnDelete',
                    formData: delID
                },
                success: response => {
                    $('#gReeneyeUserForm').html(response);
                }
            });
        });
    }

    /** Book Appointment */
    if ($(document).attr('title').search('Book Appointment') !== -1) {

        /** Get Date on Page Load */
        getDate();

        /** Create Date Container */
        let btnDate;

        /** Create Time Container */
        let btnTime;

        /** Click btnDate, Get ID of btn */
        $("#appointment").on('click', '.btnDate', e => {
            if (checkValid(validString, '#pnamE', 2, 30, 'Name') && checkValid(validNumbers, '#pnuM', 9, 11, 'Mobile Number') && checkValid(validString, '#pgeN', 3, 7, 'Gender')) {
                btnDate = e.target.id; // Set Selected btn ID
                // console.log('clicked ' + btnDate);
            }
        });

        /** Click btnTime, Get ID of btn */
        $("#appointment").on('click', '.btnTime', e => {
            if (checkValid(validString, '#pnamE', 2, 30, 'Name') && checkValid(validNumbers, '#pnuM', 9, 11, 'Mobile Number') && checkValid(validString, '#pgeN', 3, 7, 'Gender')) {
                btnTime = e.target.id; // Set Selected btn ID
                // console.log('clicked ' + btnTime);
            }
        });

        /** Click on btnDate */
        $('#appointment').on('click', '.btnDate', () => {
            $('.help-block').remove();
            checkValid(validString, '#pnamE', 2, 30, 'Name');
            checkValid(validNumbers, '#pnuM', 9, 11, 'Mobile Number');
            checkValid(validString, '#pgeN', 3, 7, 'Gender');

            /** Check Form not Empty */
            if (checkValidRegEx(validString, '#pnamE') && checkValidRegEx(validNumbers, '#pnuM') && checkValidRegEx(validString, '#pgeN') && typeof (btnDate) != "undefined" && btnDate !== null && btnDate !== '') {

                ajaxLoading('#appointment'); // Show Loader
                $.ajax({
                    type: "POST",
                    url: $('#gReeneyeForm').attr('action'),
                    cache: false,
                    data: {
                        getForm: "Time",
                        formDate: btnDate
                    },
                    success: response => {
                        $('#appointment').html(response); // Show Time
                    }
                });

                /** Click on btnTime */
                $('#appointment').on('click', '.btnTime', () => {
                    $('.help-block').remove();
                    checkValid(validString, '#pnamE', 2, 30, 'Name');
                    checkValid(validNumbers, '#pnuM', 9, 11, 'Mobile Number');
                    checkValid(validString, '#pgeN', 3, 7, 'Gender');

                    if (checkValidRegEx(validString, '#pnamE') && checkValidRegEx(validNumbers, '#pnuM') && checkValidRegEx(validString, '#pgeN') && typeof (btnDate) != "undefined" && btnDate !== null && btnDate !== '' && typeof (btnTime) != "undefined" && btnTime !== null && btnTime !== '') {

                        ajaxLoading('#appointment'); // Show Loader
                        $.ajax({
                            type: "POST",
                            url: $('#gReeneyeForm').attr('action'),
                            cache: false,
                            data: {
                                getForm: "Set",
                                formDate: btnDate,
                                formTime: btnTime
                            },
                            success: response => {
                                $('#appointment').html(response); // Show Confirm & Cancel
                            }
                        });

                        /** Cancel Button is Clicked */
                        $('#appointment').on('click', '.btnCancel', () => {
                            btnDate = ''; // Empty Date Value
                            btnTime = ''; // Empty Time Value
                            getDate();
                        });

                    } else {
                        console.log('empty form');
                    }
                });

            } else {
                console.log('Empty Form');
            }
        });


        /** Pname Typing */
        // $('#pnamE').keyup(() => {
        //     $('.form-control').css('margin-bottom', '30px');
        //     $('.help-block').remove();
        //     validInput('#pnamE');
        // });

        /** Pname Input */
        $('#pnamE').on('input', () => {
            $('.form-control').css('margin-bottom', '30px');
            $('.help-block').remove();
            $('.help-block').remove();
            checkValid(validString, '#pnamE', 2, 30, 'Name');
        });

        /** pnumber Input */
        $('#pnuM').on('input', () => {
            $('.form-control').css('margin-bottom', '30px');
            $('.help-block').remove();
            checkValid(validNumbers, '#pnuM', 9, 11, 'Mobile Number');
        });

        /** Click On pGender */
        $('.nice-select').click(() => {
            $('.form-control').css('margin-bottom', '30px');
            $('.help-block').remove();
            checkValid(validString, '#pgeN', 3, 7, 'Gender');
        });

        /** Click On btnSet */
        $('#appointment').on('click', '.btnSet', e => {
            e.preventDefault();

            $('.help-block').remove(); // Remove Help Block Class
            checkValid(validString, '#pnamE', 2, 30, 'Name');
            checkValid(validNumbers, '#pnuM', 9, 11, 'Mobile Number');
            checkValid(validString, '#pgeN', 3, 7, 'Gender');

            if (checkValidRegEx(validString, '#pnamE') && checkValidRegEx(validNumbers, '#pnuM') && checkValidRegEx(validString, '#pgeN') && typeof (btnDate) != "undefined" && btnDate !== null && btnDate !== '' && typeof (btnTime) != "undefined" && btnTime !== null && btnTime !== '') {
                genrateOTP();
            }
        });

        let successOTP;

        /** Input #otp */
        $('#otp').on('input', () => {
            $('.form-control').css('margin-bottom', '30px');
            $('.help-block').remove();
            checkValid(validOTPs, '#otp', 5, 7, 'OTP');
        });

        /** Click on Verify */
        $('.btnVerify').click(e => {
            e.preventDefault();

            $('.help-block').remove();
            checkValid(validOTPs, '#otp', 5, 7, 'OTP');

            let otpValue;
            otpValue = $('#otp').val();

            if (checkValidRegEx(validOTPs, '#otp') && checkValidRegEx(validString, '#pnamE') && checkValidRegEx(validNumbers, '#pnuM') && checkValidRegEx(validString, '#pgeN') && typeof (btnDate) != "undefined" && btnDate !== null && btnDate !== '' && typeof (btnTime) != "undefined" && btnTime !== null && btnTime !== '' && otpValue !== '') {

                ajaxLoading('#appointment');
                $.ajax({
                    type: "POST",
                    url: $('#gReeneyeForm').attr('action'),
                    cache: false,
                    data: {
                        getForm: "CheckOTP",
                        formData: getFormData($('#gReeneyeForm')),
                        formDate: btnDate,
                        formTime: btnTime,
                        getOTP: otpValue
                    },
                    success: response => {
                        // console.log('OTP is Checking ' + response);
                        successOTP = '7894540547';
                        $('#messageModal').modal('toggle');
                        $('#pnamE').val('');
                        $('#pnuM').val('');
                        $('#pgeN').val('');
                        btnDate = '';
                        btnTime = '';
                        $('#gReeneyeForm').html(response);
                    }
                });
            }
        });

        /** Cancel Button on Modal is Clicked */
        $('.btnClose').click(e => {
            e.preventDefault();
            $('#pnamE').val('');
            $('#pnuM').val('');
            $('#pgeN').val('');
            btnDate = ''; // Empty Date Value
            btnTime = ''; // Empty Time Value
            getDate();
        });

        /** Click on Submit */
        $('#gReeneyeBook').click(e => {
            e.preventDefault();
            $('.help-block').remove(); // Remove Helper Text
            checkValid(validString, '#pnamE', 2, 30, 'Name');
            checkValid(validNumbers, '#pnuM', 9, 11, 'Mobile Number');
            checkValid(validString, '#pgeN', 3, 7, 'Gender');

            if (checkValidRegEx(validString, '#pnamE') && checkValidRegEx(validNumbers, '#pnuM') && checkValidRegEx(validString, '#pgeN')) {

                validBTN(btnDate, '.btnDate');
                if (typeof (btnDate) != "undefined" && btnDate !== null && btnDate !== '') {

                    validBTN(btnTime, '.btnTime');
                    if (typeof (btnTime) != "undefined" && btnTime !== null && btnTime !== '') {
                        genrateOTP();
                        if (typeof (successOTP) != "undefined") {
                            $('#pnamE').val('');
                            $('#pnuM').val('');
                            $('#pgeN').val('');
                            btnDate = '';
                            btnTime = '';
                            console.log('Form Submit');
                        }
                    }
                } else {
                    console.log('Empty Form');
                }
            }
        });

        /** Show Number on Message */
        $("#messageModal").on("show.bs.modal", () => {
            $('#messageModal').find('#yourNum').html('+91 ' + $('#pnuM').val());
        });

        /** Genrating OTP & Send SMS */
        function genrateOTP() {
            $('#messageModal').modal({
                backdrop: 'static',
                keyboard: false
            });

            $('.help-block').remove(); // Remove Helper Text
            checkValid(validString, '#pnamE', 2, 30, 'Name');
            checkValid(validNumbers, '#pnuM', 9, 11, 'Mobile Number');
            checkValid(validString, '#pgeN', 3, 7, 'Gender');

            if (checkValidRegEx(validString, '#pnamE') && checkValidRegEx(validNumbers, '#pnuM') && checkValidRegEx(validString, '#pgeN')) {

                validBTN(btnDate, '.btnDate');
                if (typeof (btnDate) != "undefined" && btnDate !== null && btnDate !== '') {

                    validBTN(btnTime, '.btnTime');
                    if (typeof (btnTime) != "undefined" && btnTime !== null && btnTime !== '') {

                        ajaxLoading('#appointment');
                        $.ajax({
                            type: "POST",
                            url: $('#gReeneyeForm').attr('action'),
                            data: {
                                getForm: "OTP",
                                formData: getFormData($('#gReeneyeForm')),
                                formDate: btnDate,
                                formTime: btnTime
                            },
                            cache: false,
                            success: response => {
                                console.log(response);
                            }
                        });
                    }
                } else {
                    console.log('Empty Form');
                }
            }
        }

        /** Show Date Buttons */
        function getDate() {

            ajaxLoading('#appointment'); // Show Loader
            $.ajax({
                type: "POST",
                url: $('#gReeneyeForm').attr('action'),
                cache: false,
                data: {
                    getForm: "Date"
                },
                success: response => {
                    $('#appointment').html(response);
                }
            });
        }
    }

    /** `ajaxLoading Function`
     *
     * Add Pure CSSBase Loading Animation in HTML */
    function ajaxLoading(Target) {
        $(Target).html('<div id="ajaxLoading" class="ajaxLoader"></div>');
    }


    //----------------------------------------------------------------------------
    //                            Validating Functions
    //----------------------------------------------------------------------------

    /** `validBTN Function`
     *
     * Btn Clicked or Not */
    function validBTN(btnID, btnClass) {
        if (typeof (btnID) != "undefined" && btnID !== null && btnID !== '') {
            $(btnClass).css('margin-bottom', '30px');
            $('#formBooking').removeClass('error').addClass('validate');
            return true;
        } else {
            $(btnClass).css('margin-bottom', '10px');
            $('#formBooking').removeClass('validate').addClass('error');
            $('#formBooking').append('<p class="help-block text-danger">* Please Select Appointment Date.</p>'); // Add Helper Text
            return false;
        }
    }

    /** `checkValid Function`
     *
     * Input Field is Not Empty and It's Valid RegEx. */
    function checkValid(RegEx, inputID, MinLimit, MaxLimit, Msg) {
        if (validInput(inputID)) {
            if (RegEx.test($(inputID).val()) && $(inputID).val().length > MinLimit && $(inputID).val().length < MaxLimit) {
                $(inputID).css('margin-bottom', '30px');
                $(inputID).closest('.form-group').removeClass('error').addClass('validate');
                return true;
            } else {
                $(inputID).css('margin-bottom', '10px');
                $(inputID).closest('.form-group').removeClass('validate').addClass('error').append('<span class="help-block">* ' +
                    "Don't Be Kidding, Tell me Your Valid " + Msg + "." + '</span>'); // Add Helper Text
                return false;
            }
        }
    }

    /** Check Test Value */
    function checkValidRegEx(RegEx, inputID) {
        if (RegEx.test($(inputID).val()) && $(inputID).val() !== '' && $(inputID).val() !== null) {
            return true;
        } else {
            return false;
        }
    }

    // /** Valid OTP */
    // function validOTP(inputID) {
    //     if (/^[0-9]+$/.test($(inputID).val()) && $(inputID).val().length == 6) {
    //         $(inputID).css('margin-bottom', '30px');
    //         $(inputID).closest('.form-group').removeClass('error').addClass('validate');
    //         return true;
    //     } else {
    //         $(inputID).css('margin-bottom', '10px');
    //         $(inputID).closest('.form-group').removeClass('validate').addClass('error').append('<span class="help-block">* ' +
    //             "Don't Be Kidding, Tell me Your Valid OTP." + '</span>'); // Add Helper Text
    //         return false;
    //     }
    // }

    // /** `validName Function`
    //  *
    //  * Check Input Field is Valid String With WhiteSpace */
    // function validName(inputID) {
    //     if (validInput(inputID)) {
    //         if (/^[A-z ]+$/.test($(inputID).val()) && $(inputID).val().length > 2) {
    //             $(inputID).css('margin-bottom', '30px');
    //             $(inputID).closest('.form-group').removeClass('error').addClass('validate');
    //             return true;
    //         } else {
    //             $(inputID).css('margin-bottom', '10px');
    //             $(inputID).closest('.form-group').removeClass('validate').addClass('error').append('<span class="help-block">* ' +
    //                 "Don't Be Kidding, Tell me Your Name." + '</span>'); // Add Helper Text
    //             return false;
    //         }
    //     }
    // }



    // /** Check Test Number */
    // function checkValidNum(inputID) {
    //     if (/^[0-9]+$/.test($(inputID).val()) && $(inputID).val().length == 10 && $(inputID).val() !== '' && $(inputID).val() !== null) {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }

    /** Valid Refference */
    function validREF(inputID) {
        if (validInput(inputID)) {
            if (validREFs.test($(inputID).val()) && $(inputID).val().length === 9) {
                $(inputID).css('margin-bottom', '30px');
                $(inputID).closest('.form-group').removeClass('error').addClass('validate');
                return true;
            } else {
                $(inputID).css('margin-bottom', '10px');
                $(inputID).closest('.form-group').removeClass('validate').addClass('error').append('<span class="help-block">* ' +
                    "Look Like You Forgot Your Refference ID, " + '<p class="help-block">* ' + "It's Like '" + '<span class="font-weight-bold text-success">REF123456</span>' + "'</p></span>"); // Add Helper Text
                return false;
            }
        }
    }

    /** Getting Form Data & Store in Array */
    function getFormData($form) {
        const formData = $form.serializeArray();
        let FormValues = {};
        $.map(formData, Value => {
            FormValues[Value['name']] = Value['value'];
        });
        return FormValues;
    }

    /** Validate Form */
    function validInput(inputID) {
        if ($(inputID).val() !== '' && $(inputID).val() !== null) {
            $(inputID).css('margin-bottom', '30px');
            $(inputID).closest('.form-group').removeClass('error').addClass('validate');
            return true;
        } else {
            $(inputID).css('margin-bottom', '10px');
            $(inputID).closest('.form-group').removeClass('validate').addClass('error').append('<span class="help-block">* ' + $(inputID).attr('data-require-msg') + '</span>'); // Add Helper Text
            return false;
        }
    }

})(jQuery);