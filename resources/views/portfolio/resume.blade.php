@extends('layout.main')
@section('styles')
    <style>


        /* #Canvas Element Circular charts
        ================================================== */
        canvas, video {display: inline-block;}


        .stats-container {
            margin: 0;
            padding: 0;
            list-style: none;
            text-align: center;
            padding-bottom: 0px;
        }

        .stats-container li {
            display: inline-block;
            margin: 0 4% 5px;
            position: relative;
        }

        .circular-stat {
            position: relative;
        }

        .circular-stat .digit-label {
            color:  orange;
            font-family: "Noto Sans", "Helvetica Neue", Helvetica, arial, sans-serif;
            font-size: 3.2em;
            text-align: center;
            display: inline-block;
            position: absolute;
            top: 11.5%;
            width: 75%;
            left: 12.5%;
            padding: 30px 0 0 30px;
            text-shadow:-1px 1px 0px #fff
            white-space: nowrap;
            overflow: hidden;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            -o-box-sizing: border-box;
            -ms-box-sizing: border-box;
            box-sizing: border-box;
        }

        .circular-stat .text-label {
            font-family:"Noto Sans", "Helvetica Neue", Helvetica, arial, sans-serif;
            color: #333;
            font-size: 18px;
            top: 50%;
            left: 21.875%;
            width: 56.25%;
            padding-top: 6px;
            display: inline-block;
            position: absolute;
            text-align: center;
            border-top: 1px solid #999;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            -o-box-sizing: border-box;
            -ms-box-sizing: border-box;
            box-sizing: border-box;
        }

        span.text-title {
            color:  #444;
            font-family: "Noto Sans", "Helvetica Neue", Helvetica, arial, sans-serif;
            text-align: center;
            letter-spacing: -1px;
            font-size: 1.3em;
            font-weight: 400;
            text-shadow: -1px 1px 0px #FFF;
            padding: 30px 10px 0 0px;
            margin-top: 240px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            z-index: 99999;
            display: block;
            text-shadow: -1px 1px 0px #fff;
        }

        span.text-dates{
            font-size: 1.5em;
            font-family: "Noto Sans", "Helvetica Neue", Helvetica, arial, sans-serif;
            color: #999;
            text-shadow: -1px 1px 0px #fff;
        }

        @media only screen and (min-width: 1010px) {
            .stats-container li {margin: 0 2% 5px;}
        }
        @media only screen and (max-width: 1009px) {
            .stats-container li {margin: 0 -.2em 5px;}
        }

        /* Timeline*/
        #timeline .timeline-item:after, #timeline .timeline-item:before {
            content: '';
            display: block;
            width: 100%;
            clear: both;
        }

        *, *:before, *:after {
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
        }
        #timeline {
            width: 100%;
            margin: 30px auto;
            position: relative;
            padding: 0 10px;
            -webkit-transition: all 0.4s ease;
            -moz-transition: all 0.4s ease;
            -ms-transition: all 0.4s ease;
            transition: all 0.4s ease;
        }
        #timeline:before {
            content: "";
            width: 3px;
            height: 100%;
            background: orange;
            left: 50%;
            top: 0;
            position: absolute;
        }
        #timeline:after {
            content: "";
            clear: both;
            display: table;
            width: 100%;
        }
        #timeline .timeline-item {
            margin-bottom: 50px;
            position: relative;
        }
        #timeline .timeline-item .timeline-icon {
            background: orange;
            width: 50px;
            height: 50px;
            position: absolute;
            top: 0;
            left: 50%;
            overflow: hidden;
            margin-left: -23px;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            -ms-border-radius: 50%;
            border-radius: 50%;
        }
        #timeline .timeline-item .timeline-icon svg {
            position: relative;
            top: 14px;
            left: 14px;
        }
        #timeline .timeline-item .timeline-content {
            width: 45%;
            background: #fff;
            padding: 20px;
            -webkit-box-shadow: 0 3px 0 rgba(0, 0, 0, 0.1);
            -moz-box-shadow: 0 3px 0 rgba(0, 0, 0, 0.1);
            -ms-box-shadow: 0 3px 0 rgba(0, 0, 0, 0.1);
            box-shadow: 0 3px 0 rgba(0, 0, 0, 0.1);
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            -ms-border-radius: 5px;
            border-radius: 5px;
            -webkit-transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
            -ms-transition: all 0.3s ease;
            transition: all 0.3s ease;
        }

        #timeline .timeline-item .timeline-content h4 {
            padding: 15px;
            background: #29b6f6;
            color: #fff;
            margin: -20px -20px 0 -20px;
            font-weight: 300;
            -webkit-border-radius: 3px 3px 0 0;
            -moz-border-radius: 3px 3px 0 0;
            -ms-border-radius: 3px 3px 0 0;
            border-radius: 3px 3px 0 0;
            font-size: 16px;
        }
        #timeline .timeline-item .timeline-content:before {
            content: '';
            position: absolute;
            left: 45%;
            top: 20px;
            width: 0;
            height: 0;
            border-top: 7px solid transparent;
            border-bottom: 7px solid transparent;
            border-left: 7px solid #29b6f6;
        }
        #timeline .timeline-item .timeline-content.right {
            float: right;
        }
        #timeline .timeline-item .timeline-content.right:before {
            content: '';
            right: 45%;
            left: inherit;
            border-left: 0;
            border-right: 7px solid #29b6f6;
        }


        @media screen and (max-width: 768px) {
            #timeline {
                margin: 30px;
                padding: 0px;
                width: 90%;
            }
            #timeline:before {
                left: 0;
            }
            #timeline .timeline-item .timeline-content {
                width: 90%;
                float: right;
            }
            #timeline .timeline-item .timeline-content:before, #timeline .timeline-item .timeline-content.right:before {
                left: 10%;
                margin-left: -6px;
                border-left: 0;
                border-right: 7px solid #29b6f6;
            }
            #timeline .timeline-item .timeline-icon {
                left: 0;
            }
        }
    </style>
@stop
@section('content')
    <section class="root-sec  home-wrap">
        <div class="container">
            <div class="row">
                <div class="clearfix resume-inner">
                    <div class="col-sm-12 col-md-12">
                        <div class="resume">
                            <h3 class="skills-subtitle">Habilidades</h3>
                            <div class="row">
                                <div class="col-sm-12 col-md-3">
                                    <p>
                                        Backend Skills
                                    </p>
                                    <div class="chip waves-effect waves-light light-blue lighten-1">
                                        Laravel
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-3">
                                    <ul class="graphs stats-container centered biggie">
                                        <li class="animated"
                                            data-provide="circular"
                                            data-fill-color="orange"
                                            data-percent="true"
                                            data-initial-value="25"
                                            data-max-value="100"
                                            data-label="PHP + Laravel"
                                            data-title="Backend"
                                            {{--data-dates="2011 - Present"--}}
                                            style="width: 245px; height: 245px;">
                                        </li>

                                        {{--<li class="animated"--}}
                                        {{--data-provide="circular"--}}
                                        {{--data-fill-color="orange"--}}
                                        {{--data-percent="true"--}}
                                        {{--data-initial-value="15"--}}
                                        {{--data-max-value="100"--}}
                                        {{--data-label="JS, Bootstrap"--}}
                                        {{--data-title="Point Park University"--}}
                                        {{--data-dates="2012 - Present"--}}
                                        {{--style="width: 272px; height: 272px;">--}}
                                        {{--</li>--}}
                                    </ul>
                                </div>
                                <div class="col-sm-12 col-md-3">
                                    <ul class="graphs stats-container centered biggie">
                                        <li class="animated"
                                            data-provide="circular"
                                            data-fill-color="orange"
                                            data-percent="true"
                                            data-initial-value="50"
                                            data-max-value="100"
                                            data-label="HTML, CSS, JS"
                                            data-title="Frontend"
                                            {{--data-dates="2005 - 2010"--}}
                                            style="width: 245px; height: 245px;">
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-sm-12 col-md-3">
                                    <p>
                                        Frontend Skills
                                    </p>
                                    <div class="chip blue waves-effect waves-light">
                                        JS
                                    </div>
                                    <div class="chip waves-effect waves-light">
                                        Vuejs
                                    </div>
                                    <div class="chip waves-effect waves-light light-blue lighten-1">
                                        Bootstrap
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> {{-- end Skills Section --}}

    <section class="root-sec  grey lighten-5  home-wrap">
        <div class="container">
            <div class="row"></div>
                <div class="clearfix resume-inner">
                    <div class="col-sm-12 col-md-12">
                        <div class="cv">
                            <h3 class="skills-subtitle">Experiencia</h3>
                            <div id="timeline">
                                <div class="timeline-item">
                                    <div class="timeline-icon">
                                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                 width="21px" height="20px" viewBox="0 0 21 20" enable-background="new 0 0 21 20" xml:space="preserve">
                                                <path fill="#FFFFFF" d="M19.998,6.766l-5.759-0.544c-0.362-0.032-0.676-0.264-0.822-0.61l-2.064-4.999
                                                    c-0.329-0.825-1.5-0.825-1.83,0L7.476,5.611c-0.132,0.346-0.462,0.578-0.824,0.61L0.894,6.766C0.035,6.848-0.312,7.921,0.333,8.499
                                                    l4.338,3.811c0.279,0.246,0.395,0.609,0.314,0.975l-1.304,5.345c-0.199,0.842,0.708,1.534,1.468,1.089l4.801-2.822
                                                    c0.313-0.181,0.695-0.181,1.006,0l4.803,2.822c0.759,0.445,1.666-0.23,1.468-1.089l-1.288-5.345
                                                    c-0.081-0.365,0.035-0.729,0.313-0.975l4.34-3.811C21.219,7.921,20.855,6.848,19.998,6.766z"/>
                                        </svg>
                                    </div>
                                    <div class="timeline-content">
                                        <h4>LOREM IPSUM DOLOR</h4>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Atque, facilis quo maiores magnam modi ab libero praesentium blanditiis.
                                        </p>

                                    </div>
                                </div>

                                <div class="timeline-item">
                                    <div class="timeline-icon">
                                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                                                 width="21px" height="20px" viewBox="0 0 21 20" enable-background="new 0 0 21 20" xml:space="preserve">
                                            <g>
                                                <path fill="#FFFFFF" d="M17.92,3.065l-1.669-2.302c-0.336-0.464-0.87-0.75-1.479-0.755C14.732,0.008,7.653,0,7.653,0v5.6
                                                    c0,0.096-0.047,0.185-0.127,0.237c-0.081,0.052-0.181,0.06-0.268,0.02l-1.413-0.64C5.773,5.183,5.69,5.183,5.617,5.215l-1.489,0.65
                                                    c-0.087,0.038-0.19,0.029-0.271-0.023c-0.079-0.052-0.13-0.141-0.13-0.235V0H2.191C1.655,0,1.233,0.434,1.233,0.97
                                                    c0,0,0.025,15.952,0.031,15.993c0.084,0.509,0.379,0.962,0.811,1.242l2.334,1.528C4.671,19.905,4.974,20,5.286,20h10.307
                                                    c1.452,0,2.634-1.189,2.634-2.64V4.007C18.227,3.666,18.12,3.339,17.92,3.065z M16.42,17.36c0,0.464-0.361,0.833-0.827,0.833H5.341
                                                    l-1.675-1.089h10.341c0.537,0,0.953-0.44,0.953-0.979V2.039l1.459,2.027V17.36L16.42,17.36z"/>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="timeline-content right">
                                        <h4>LOREM IPSUM DOLOR</h4>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, facilis quo. Maiores magnam modi ab libero praesentium blanditiis consequatur aspernatur accusantium maxime molestiae sunt ipsa.
                                        </p>

                                    </div>
                                </div>

                                <div class="timeline-item">
                                    <div class="timeline-icon">
                                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                             width="21px" height="20px" viewBox="0 0 21 20" enable-background="new 0 0 21 20" xml:space="preserve">
                                            <path fill="#FFFFFF" d="M19.998,6.766l-5.759-0.544c-0.362-0.032-0.676-0.264-0.822-0.61l-2.064-4.999
                                                c-0.329-0.825-1.5-0.825-1.83,0L7.476,5.611c-0.132,0.346-0.462,0.578-0.824,0.61L0.894,6.766C0.035,6.848-0.312,7.921,0.333,8.499
                                                l4.338,3.811c0.279,0.246,0.395,0.609,0.314,0.975l-1.304,5.345c-0.199,0.842,0.708,1.534,1.468,1.089l4.801-2.822
                                                c0.313-0.181,0.695-0.181,1.006,0l4.803,2.822c0.759,0.445,1.666-0.23,1.468-1.089l-1.288-5.345
                                                c-0.081-0.365,0.035-0.729,0.313-0.975l4.34-3.811C21.219,7.921,20.855,6.848,19.998,6.766z"/>
                                        </svg>
                                    </div>
                                    <div class="timeline-content">
                                        <h4>LOREM IPSUM DOLOR</h4>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, facilis quo. Maiores magnam modi ab libero praesentium blanditiis consequatur aspernatur accusantium maxime molestiae sunt ipsa.
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>
@stop

@section('scripts')
    <script>
        (function(c, e, l, j) {
            var d = function(a, b) {
                arguments.length && this.init(a, b);
            };
            d.CANVAS_NAMES = [ "back", "fill", "front" ];
            var i = d, f;
            f = l.createElement("canvas");
            f.getContext ? (f = f.getContext("2d"), f = (e.devicePixelRatio || 1) / (f.webkitBackingStorePixelRatio || f.mozBackingStorePixelRatio || f.msBackingStorePixelRatio || f.oBackingStorePixelRatio || f.backingStorePixelRatio || 1)) : f = 1;
            i.PIXEL_RATIO = f;
            i = [ "ms", "moz", "webkit", "o" ];
            for (f = 0; f < i.length && !e.requestAnimationFrame; f++) e.requestAnimationFrame = e[i[f] + "RequestAnimationFrame"], e.cancelAnimationFrame = e[i[f] + "CancelAnimationFrame"] || e[i[f] + "CancelRequestAnimationFrame"];
            e.requestAnimationFrame || (e.requestAnimationFrame = function(a) {
                return e.setTimeout(function() {
                    a();
                }, 16);
            });
            e.cancelAnimationFrame || (e.cancelAnimationFrame = function(a) {
                clearTimeout(a);
            });
            var q = function(a) {
                arguments.length && this.init(a);
            };
            q.prototype = {
                attributes: {
                    onLoop: null,
                    afterStop: null,
                    afterStopRequest: null,
                    params: {},
                    owner: null
                },
                init: function(a) {
                    this.options = c.extend({}, this.attributes, a);
                    this.animationHandle = null;
                    this.loops = 0;
                    this.stopRequested = !1;
                },
                start: function() {
                    var a = this;
                    this.animationHandle = e.requestAnimationFrame(function() {
                        a.options.onLoop.apply(a.options.owner, [ a._getThreadInfo() ]) && a._loop();
                    });
                },
                _getThreadInfo: function() {
                    return {
                        loops: ++this.loops,
                        params: this.options.params,
                        stopRequested: this.stopped
                    };
                },
                _kill: function() {
                    this.animationHandle && e.cancelAnimationFrame(this.animationHandle);
                    c.isFunction(this.options.afterStop) && this.options.afterStop.call(this.options.owner);
                    c.isFunction(this.options.afterStopRequest) && this.options.afterStopRequest.call(this.options.owner);
                },
                _loop: function() {
                    var a = this;
                    this.animationHandle = e.requestAnimationFrame(function() {
                        a.options.onLoop.apply(a.options.owner, [ a._getThreadInfo() ]) ? a._loop() : a._kill();
                    });
                },
                stop: function(a) {
                    this.stopped = !0;
                    this.options.afterStopRequest = a;
                }
            };
            d.prototype = {
                defaults: {
                    initialValue: 0,
                    maxValue: 100,
                    label: "",

                    labelClassName: "text-label",
                    title: "",

                    titleClassName: "text-title",
                    dates: "",
                    datesClassName: "text-dates",

                    percent: !1,
                    decimals: 0,
                    digitClassName: "digit-label",
                    format: null,
                    duration: 4e3,
                    fillColor: "#eeeeee",
                    wrapperClassName: "circular-stat",
                    outerThickness: 8,
                    fillThickness: 10
                },
                init: function(a, b) {
                    this.element = c(a);
                    this.options = c.extend({}, this.defaults, b, this.element.data());
                    this.attributes = {};
                    this.labels = {};
                    this.canvases = {};
                    this.activeAnimationThread = null;
                    this._parseOptions();
                    if (this.canvases = this._build()) this._drawBackside(this.canvases.back), this._drawFrontside(this.canvases.front), this.labels = this._attachLabels(), this._updateVal(0), this.animate(this.options.initialValue, !1);
                    return this;
                },
                _parseOptions: function() {
                    var a = Math.max(this.element.width(), this.element.height()) / 2, b = this.options.outerThickness;
                    this.attributes = c.extend({}, this.attributes, {
                        currentValue: 0,
                        radius: {
                            back: a,
                            fill: a - b,
                            front: a - b - this.options.fillThickness
                        }
                    });
                },
                _createCanvas: function(a, b) {
                    if (0 === a || 0 === b) return console.log("Invalid canvas dimensions"), !1;
                    var g = l.createElement("canvas");
                    g.width = a * d.PIXEL_RATIO;
                    g.height = b * d.PIXEL_RATIO;
                    1 < d.PIXEL_RATIO && (g.style.width = a + "px", g.style.height = b + "px");
                    if (!g.getContext) if ("undefined" !== typeof G_vmlCanvasManager) G_vmlCanvasManager.initElement(g); else return console.log("Your browser does not support HTML5 Canvas, or excanvas is missing on IE"), !1;
                    return g;
                },
                _attachLabels: function() {
                    var a = c("<span></span>").addClass(this.options.digitClassName), b = c("<span></span>").addClass(this.options.labelClassName).text(this.options.label),  z = c("<span></span>").addClass(this.options.titleClassName).text(this.options.title), y = c("<span></span>").addClass(this.options.datesClassName).text(this.options.dates);;

                    this.element.append([ a, b, z, y ]);
                    return {
                        digit: a,
                        text: b,
                        text: z,
                        text: y
                    };
                },
                _build: function() {
                    for (var a = {}, b, g = 2 * this.attributes.radius.back, m = 0; m < d.CANVAS_NAMES.length; ++m) {
                        if (!(b = this._createCanvas(g, g))) return !1;
                        b.style.position = "absolute";
                        b.style.top = 0;
                        b.style.left = 0;
                        b.className = d.CANVAS_NAMES[m];
                        a[d.CANVAS_NAMES[m]] = b;
                    }
                    this.element.addClass(this.options.wrapperClassName).append(c.map(a, function(a) {
                        return a;
                    }));
                    return a;
                },
                _drawBackside: function(a) {
                    var b = this.attributes.radius.back, g = this.attributes.radius.fill, a = a.getContext("2d"), c = a.createLinearGradient(0, 0, 0, 2 * b);
                    c.addColorStop(0, "#d5d5d5");
                    c.addColorStop(1, "#ffffff");
                    1 < d.PIXEL_RATIO && a.scale(d.PIXEL_RATIO, d.PIXEL_RATIO);
                    this._drawCircle(a, b, b, b);
                    a.fillStyle = c;
                    a.fill();
                    this._drawCircle(a, b, b, g);
                    a.fillStyle = "#eeeeee";
                    a.fill();
                },
                _drawFrontside: function(a) {
                    var b = this.attributes.radius.back, c = this.attributes.radius.front, a = a.getContext("2d");
                    1 < d.PIXEL_RATIO && a.scale(d.PIXEL_RATIO, d.PIXEL_RATIO);
                    this._drawCircle(a, b, b, c);
                    a.shadowColor = "rgba(0, 0, 0, 0.3)";
                    a.shadowBlur = 3;
                    a.shadowOffsetY = 1;
                    a.fillStyle = "#ffffff";
                    a.fill();
                },
                _drawCircle: function(a, b, c, d) {
                    a.beginPath();
                    a.arc(b, c, d, 0, 2 * Math.PI, !1);
                    a.closePath();
                },
                _updateVal: function(a, b, d) {
                    c.isNumeric(a) && c.isNumeric(b) && c.isNumeric(d) ? (d = (d - b) * a, a = Math.max(0, Math.min(b + 100 * d / this.options.maxValue, 100)), b = Math.max(0, Math.min(b + d, this.options.maxValue))) : (a = Math.min(this.attributes.currentValue / this.options.maxValue, 100), b = Math.min(this.attributes.currentValue, this.options.maxValue));
                    this.labels.digit[0].innerHTML = (c.isFunction(this.options.format) ? this.options.format : function(a, b, c) {
                        return this.options.percent ? a.toFixed(this.options.decimals) + "%" : b.toFixed(this.options.decimals) + "/" + c.toFixed(this.options.decimals);
                    }).apply(this, [ a, b, this.options.maxValue ]);
                },
                _redraw: function() {
                    var a = this.canvases.fill, b = a.getContext("2d"), c = this.attributes.radius.back, f = this.attributes.radius.fill, e = 2 * (this.attributes.currentValue / this.options.maxValue) * Math.PI;
                    b.fillStyle = this.options.fillColor;
                    b.clearRect(0, 0, a.width, a.height);
                    0 !== e && (b.save(), 1 < d.PIXEL_RATIO && b.scale(d.PIXEL_RATIO, d.PIXEL_RATIO), b.translate(c, c), b.rotate(-Math.PI / 2), b.beginPath(), b.arc(0, 0, f, 0, e, !1), b.lineTo(0, 0), b.closePath(), b.fill(), b.restore());
                    this._updateVal();
                },
                animate: function(a, b) {
                    function f(b) {
                        1 === b.loops && (j = (new Date).getTime(), r = 2 * (a / this.options.maxValue) * Math.PI, p = 2 * (this.attributes.currentValue / this.options.maxValue) * Math.PI);
                        var c = Math.min(((new Date).getTime() - j) / this.options.duration, 1), e = p + (r - p) * c;
                        h.clearRect(0, 0, n.width, n.height);
                        0 !== e && (h.save(), 1 < d.PIXEL_RATIO && h.scale(d.PIXEL_RATIO, d.PIXEL_RATIO), h.translate(i, i), h.rotate(-Math.PI / 2), h.beginPath(), h.arc(0, 0, l, 0, e, !1), h.lineTo(0, 0), h.closePath(), h.fill(), h.restore());
                        k._updateVal(c, k.attributes.currentValue, a);
                        return b.stopRequested || 1 <= c ? (k.attributes.currentValue += (a - k.attributes.currentValue) * c, !1) : !0;
                    }
                    function e(a) {
                        c(this).queue("circular", function(a) {
                            (this.activeAnimationThread = new q({
                                onLoop: function() {
                                    return f.apply(this, arguments);
                                },
                                afterStop: function() {
                                    a();
                                    0 === c(this).queue("circular").length && (this.activeAnimationThread = null);
                                },
                                owner: this
                            })).start();
                        });
                        a && c(this).dequeue("circular");
                    }
                    if (c.isNumeric(a) && !(0 > a || a > this.options.maxValue)) {
                        var k = this, n = this.canvases.fill, h = n.getContext("2d"), i = this.attributes.radius.back, l = this.attributes.radius.fill, j, r, p;
                        h.fillStyle = this.options.fillColor;
                        !b && this.activeAnimationThread ? (c(this).clearQueue("circular"), this.activeAnimationThread.stop(function() {
                            e.apply(this, [ !0 ]);
                        })) : e.apply(this, [ !this.activeAnimationThread ]);
                    }
                },
                option: function(a, b) {
                    if (0 === arguments.length) return c.extend({}, this.options);
                    if ("string" === typeof a) {
                        if (b === j) return this.options[a];
                        switch (a) {
                            case "label":
                                this.options[a] = b;
                                this.labels.text.html(b);
                                break;
                            case "maxValue":
                                this.options.percent || (this.attributes.currentValue = Math.max(Math.min(this.attributes.currentValue, b), 0), this.options[a] = b, this._redraw());
                                break;
                            case "percent":
                                b && (this.options.maxValue = 100, this.attributes.currentValue = Math.max(Math.min(this.attributes.currentValue, 100), 0));
                            case "format":
                            case "decimals":
                            case "fillColor":
                            case "duration":
                                this.options[a] = b, this._redraw();
                        }
                    }
                    return this;
                }
            };
            d.defaults = d.prototype.defaults;
            c.fn.CircularStat = function(a) {
                var b = "string" === typeof a, e = Array.prototype.slice.call(arguments, 1), f = this;
                if (b && "_" === a.charAt(0)) return f;
                b ? this.each(function() {
                    var b = c.data(this, "circular-stat"), d = b && c.isFunction(b[a]) ? b[a].apply(b, e) : b;
                    if (d !== b && d !== j) return f = d, !1;
                }) : this.each(function() {
                    c.data(this, "circular-stat") || c.data(this, "circular-stat", new d(this, a));
                });
                return f;
            };
            c(function() {
                c('[data-provide="circular"]').each(function() {
                    var a = c(this);
                    a.CircularStat(a.data());
                });
            });
        })(jQuery, window, document);
    </script>
@stop