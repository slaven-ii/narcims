/****************
 *
 *
 *
 * EXTRA SLIDER 1.1
 *
 *
 *
 http://slider.extralagence.com
 */
(function ($) {
    'use strict';
    /*global console, jQuery, $, window, TweenMax, Draggable */
    var $window = window.$window || $(window),
        extra = window.extra || {};

    $.fn.extraSlider = function (options) {

        var opt = $.extend({
            'auto': false,
            'draggable': false,
            'keyboard': false,
            'margin': 0,
            'navigate': true,
            'paginate': true,
            'paginateContent': '',
            'resizable': true,
            'speed': 0.5,
            'type': 'slide',
            'onInit': null,
            'onMoveStart': null,
            'onMoveEnd': null,
            'onUpdate': null,
            'onUpdateClones': null,
            'onPause': null,
            'onResume': null
        }, options);

        this.each(function () {

            /*********************************** SETUP VARS ***********************************/
            var $this = $(this),
                $wrapper = $('> .wrapper', this),
                $slider = $wrapper.find('> ul'),
                $items = $slider.find('> li'),
                numClones = 0,
                $navigation = $this.find('.navigation'),
                $pagination = $this.find('.pagination'),
                singleWidth = 0,
                singleHeight = 0,
                total = $items.length - 1,
                visible = -1,
                totalWidth = singleWidth,
                currentItem = 0,
                previousItem = total,
                offset = 0,
                i = 0,
            // RESIZE
                resizeEvent,
            // AUTOMATIC
                autoTween,
            // DRAG
                drag,
                reference = 0,
                direction;
            /*********************************** FUNCTIONS ***********************************/
            // adjust the slider position
            function adjustPosition() {
                if (currentItem > total) {
                    // too far on the left (previous)
                    currentItem = 0;
                } else if (currentItem < 0) {
                    // too far on the right (next)
                    currentItem = total;
                }
                var left = -(totalWidth * (currentItem) + (numClones * singleWidth));
                TweenMax.set($slider, {css: {left: left}});
            }
            // get the blocs dimensions
            function getDimension(type) {
                var max = 0,
                    item,
                    current;
                $items.each(function () {
                    item = $(this);
                    current = (type === 'height') ? item.outerHeight(true) : item.outerWidth(true);
                    if (current > max) {
                        max = current;
                    }
                });
                return max;
            }
            // when the first animation is finished
            function endHandler(time, previousItem) {
                // endHandler for slide
                if (opt.type === "slide") {
                    adjustPosition();
                    if (opt.draggable && opt.type === 'slide' && drag !== undefined) {
                        Draggable.get($slider).enable();
                    }
                } else if(opt.type === "fade" && previousItem.length) {
                    TweenMax.set(previousItem, {autoAlpha: 0});
                }

                // set active
                $items.eq(currentItem + numClones).addClass('active');

                // listener
                if (opt.onMoveEnd && time > 0) {
                    opt.onMoveEnd($items.eq(currentItem + numClones), total + 1, $this);
                }
                $this.trigger('moveEnd.extra.slider', [$items.eq(currentItem + numClones), total + 1, $this]);
            }

            /*********************************** GO TO PAGE ***********************************/
            function gotoPage(newPage, time) {

                time = (time !== undefined) ? time : opt.speed;

                var dir = newPage < currentItem ? -1 : 1,
                    realCurrentItem,
                    left;

                $items.removeClass('active');

                if (!TweenMax.isTweening($slider) && !TweenMax.isTweening($items)) {

                    previousItem = currentItem;
                    currentItem = parseInt(newPage, 10);

                    if (opt.type === 'fade') {
                        if (currentItem > total) {
                            currentItem = 0;
                        } else if (currentItem < 0) {
                            currentItem = total;
                        }
                    }

                    realCurrentItem = currentItem;
                    if (realCurrentItem > total) {
                        // too far on the left (previous)
                        realCurrentItem = 0;
                    } else if (realCurrentItem < 0) {
                        // too far on the right (next)
                        realCurrentItem = total;
                    }

                    if (opt.onMoveStart && time > 0) {
                        opt.onMoveStart($items.eq(realCurrentItem + numClones), total + 1, $this);
                    }
                    $this.trigger('moveStart.extra.slider', [$items.eq(realCurrentItem + numClones), total + 1, $this]);

                    if (opt.paginate) {
                        $pagination.find("a").removeClass("active").eq(realCurrentItem).addClass("active");
                    }

                    switch (opt.type) {
                        case "slide":
                            left = -(totalWidth * (currentItem) + (numClones * singleWidth));
                            if(offset !== 0) {
                                if(currentItem > total) {
                                    left += singleWidth * offset;
                                }
                                if(currentItem < 0) {
                                    left -= singleWidth * offset;
                                }
                            }
                            TweenMax.to($slider, time, {css: {left: left}, onComplete: endHandler, onCompleteParams: [time]});
                            break;
                        case "fade":
                            $items.eq(previousItem).css("zIndex", 1);
                            TweenMax.to($items.eq(currentItem).css("zIndex", 2), time, {css: {autoAlpha: 1}, onComplete: endHandler, onCompleteParams: [time, $items.eq(previousItem)]});
                            break;
                    }
                }
            }

            /*********************************** UPDATE ***********************************/
            function update() {

                var newVisible;

                // RESET DIMENSIONS
                $slider.css('width', '');
                $items.css('width', '').css('height', '');
                $wrapper.css('width', '').css('height', '');

                // GET DIMENSIONS
                singleWidth = getDimension('width');
                singleHeight = getDimension('height');

                // MULTIPLE AT A TIME
                totalWidth = singleWidth * visible;
                newVisible = Math.max(1, Math.floor($wrapper.width() / singleWidth));
                if(newVisible !== visible) {
                    visible = newVisible;
                    total = Math.floor(($items.not('.cloned').length - 1) / visible);
                    offset = Math.abs((total + 1) * visible - ($items.not('.cloned').length));
                    if(opt.type == 'slide') {
                        updateClones();
                    }
                    update();
                    return false;
                }

                // SET DIMENSIONS
                $items.css({
                    'width': singleWidth + 'px',
                    'height': singleHeight + 'px'
                });
                $wrapper.css({
                    'width': totalWidth + 'px',
                    'height': singleHeight + 'px'
                });

                // POSITION AND WIDTH
                if(opt.type == 'slide') {
                    adjustPosition();
                    $slider.width(99999);
                }

                // ACTIVE CLASS
                $items.removeClass('active');
                $items.eq(currentItem + numClones).addClass('active');

                // TRIGGER ON UPDATE
                if (opt.onUpdate) {
                    opt.onUpdate($items.eq(currentItem + numClones), total + 1, $this);
                }
                $this.trigger('update.extra.slider', [$items.eq(currentItem + numClones), total + 1, $this]);

            }
            function updateClones() {

                // REMOVE ALL CLONES
                $items.find('.cloned').remove();

                // CLONE BEFORE
                $items.first().before($items.slice(-(visible + opt.margin + offset)).clone(true).addClass('cloned'));

                // CLONE AFTER
                $items.last().after($items.slice(0, visible + opt.margin + offset).clone(true).addClass('cloned'));

                // GET ALL ITEMS (clones included)
                $items = $slider.find('> li');

                // COUNT CLONES
                numClones = $items.filter('.cloned').size() / 2 || 0;

                // TRIGGER ON UPDATE
                if (opt.onUpdateClones) {
                    opt.onUpdateClones($items.eq(currentItem + numClones), total + 1, $this);
                }
                $this.trigger('updateClones.extra.slider', [$items.eq(currentItem + numClones), total + 1, $this]);
            }

            /*********************************** HELPER FUNCTIONS ***********************************/
            function gotoNext(time) {
                time = (time !== undefined) ? time : opt.speed;
                gotoPage(currentItem + 1, time);
            }
            function gotoPrev(time) {
                time = time !== undefined ? time : opt.speed;
                gotoPage(currentItem - 1, time);
            }
            // auto slide
            function autoSlide() {
                autoTween = TweenMax.delayedCall(opt.auto, function () {
                    gotoNext();
                    autoSlide();
                });
            }

            /*********************************** SETUP VARS ***********************************/
            $items.each(function(index, elmt) {
                $(this).data('index', index);
            });
            singleWidth = getDimension('width');
            singleHeight = getDimension('height');

            /*********************************** INITIALIZE ***********************************/
            switch (opt.type) {
                case "slide":
                    // ADD A CLASS TO STYLE IT
                    $this.addClass('extra-slider-slide');
                    break;


                case "fade":
                    // ADD A CLASS TO STYLE IT
                    $this.addClass('extra-slider-fade');

                    // INITIALIZE ALPHA AND ZINDEX
                    $items.each(function (i) {
                        if (i === currentItem) {
                            TweenMax.set($(this), {css: {autoAlpha: 1, zIndex: 2}});
                        } else {
                            TweenMax.set($(this), {css: {autoAlpha: 0, zIndex: 1}});
                        }
                    });
                    break;
            }

            /*********************************** LISTENERS ***********************************/
            $(this).on('update', function () {
                update();
            });
            // Bind next
            $(this).on('next', function (event, time) {
                gotoNext(time);
            });
            // Bind prev
            $(this).on('prev', function (event, time) {
                gotoPrev(time);
            });
            // Bind goto page
            $(this).on('goto', function (event, page, time) {
                time = time !== undefined ? time : opt.speed;
                gotoPage(page, time);
            });
            // on resize
            if (opt.resizable) {
                resizeEvent = extra.resizeEvent !== undefined ? extra.resizeEvent : 'resize';
                $window.on(resizeEvent, function () {
                    update();
                });
            }

            /*********************************** NAVIGATION ***********************************/
            if (opt.navigate) {
                if(!$navigation.length) {
                    $navigation = $('<div class="navigation"><a href="#" class="prev">Previous</a><a href="#" class="next">Next</a></div>').insertAfter($wrapper);
                }
                $('a.prev', $navigation).click(function () {
                    gotoPrev();
                    return false;
                });
                $('a.next', $navigation).click(function () {
                    gotoNext();
                    return false;
                });
            }

            /*********************************** PAGINATION ***********************************/
            if (opt.paginate) {
                if(!$pagination.length) {
                    $pagination = $('<div class="pagination"></div>').insertAfter($wrapper);
                }
                if(opt.paginateContent != '') {
                }
                for (i = 0; i <= total; i += 1) {
                    $("<a>", {'href': '#'}).html(opt.paginateContent !== '' ? opt.paginateContent.replace("%d", (i + 1)) : i + 1).appendTo($pagination);
                }
                $pagination.find("a").removeClass('active').eq(currentItem).addClass('active');
                $('a', $pagination).each(function (i) {
                    $(this).click(function () {
                        if (!$(this).hasClass('active')) {
                            gotoPage(i);
                        }
                        return false;
                    });
                });
            }

            /*********************************** KEYBOARD ***********************************/
            if (opt.keyboard) {
                $window.on('keydown', function (event) {
                    if (event.which === 39) {
                        gotoNext();
                    }
                    if (event.which === 37) {
                        gotoPrev();
                    }
                });
            }

            /*********************************** AUTO ***********************************/
            if (!isNaN(opt.auto) && opt.auto > 0) {
                autoSlide();
                $this.on('mouseenter pause', function () {
                    // listener
                    if (opt.onPause) {
                        opt.onPause($this);
                    }
                    $this.trigger('pause.extra.slider', [$this]);
                    autoTween.pause();
                }).on('mouseleave resume', function () {
                    // listener
                    if (opt.onResume) {
                        opt.onResume($this);
                    }
                    $this.trigger('resume.extra.slider', [$this]);
                    autoTween.resume();
                });
            }

            /*********************************** DRAGGABLE ***********************************/
            if (opt.draggable && opt.type === 'slide') {

                $this.addClass('extra-slider-draggable');

                if (Draggable !== undefined) {
                    drag = Draggable.create($slider, {
                        dragClickables: true,
                        type: 'left',
                        cursor: 'move',
                        onDragStart: function () {
                            $this.addClass('extra-slider-mouse-down');
                            reference = parseFloat($slider.css('left'));
                        },
                        onDragEnd: function () {
                            Draggable.get($slider).disable();
                            direction = ((reference - this.x) > 0) ? -1 : 1;
                            $this.removeClass('extra-slider-mouse-down');
                            if (direction === 1) {
                                gotoPrev();
                            } else {
                                gotoNext();
                            }
                        }
                    });
                } else {
                    console.log('Draggable is not detected. You need to load it to enable drag. More info here : http://www.greensock.com/draggable/');
                }
            }

            /*********************************** FIRST UPDATE ***********************************/
            update();
            $window.load(function () {
                update();
            });

            /*********************************** ON INIT ***********************************/
            // TRIGGER ON INIT
            if (opt.onInit) {
                opt.onInit($items.eq(currentItem + numClones), total + 1, $this);
            }
            $this.trigger('init.extra.slider', [$items.eq(currentItem + numClones), total + 1, $this]);

        });

        return this;

    };
}(jQuery));

/*
 * Lazy Line Painter
 * SVG Stroke animation.
 *
 * https://github.com/camoconnell/lazy-line-painter
 * http://www.camoconnell.com
 *
 * Licensed under the MIT license.
 *
 */

(function($) {

    'use strict';

    var dataKey = 'lazyLinePainter';
    var methods = {

        /**
         * init
         * Public function responsible for caching user defined options,
         * creating svg element and setting dimensions.
         * @public
         * @param  {object} _options user defined options
         */
        init: function(_options) {

            return this.each(function() {

                var $this = $(this);
                var data = $this.data(dataKey);
                $this.addClass('lazy-line');

                // If the plugin hasn't been initialized yet
                if (!data) {

                    // Collect settings, define defaults
                    var options = $.extend({
                        'width': null,
                        'height': null,
                        'strokeWidth': 2,
                        'strokeColor': '#000',
                        'strokeOverColor': null,
                        'strokeCap': 'round',
                        'strokeJoin': 'round',
                        'strokeOpacity': 1,
                        'arrowEnd': 'none',
                        'onComplete': null,
                        'onStart': null,
                        'delay': null,
                        'overrideKey': null,
                        'drawSequential': true,
                        'speedMultiplier': 1,
                        'reverse': false,
                        'responsive': false
                    }, _options);

                    // Set up path information
                    // if overrideKey has been defined - use overrideKey as key within the svgData object.
                    // else - use the elements id as key within the svgData object.
                    var target = options.overrideKey ? options.overrideKey : $this.attr('id').replace('#', '');
                    var w = options.svgData[target].dimensions.width;
                    var h = options.svgData[target].dimensions.height;

                    // target stroke path
                    options.svgData = options.svgData[target].strokepath;

                    // Create svg element and set dimensions
                    if (options.width === null) {
                        options.width = w;
                    }
                    if (options.height === null) {
                        options.height = h;
                    }
                    if (!options.responsive) {
                        $this.css({
                            'width': options.width,
                            'height': options.height
                        });
                    }

                    // create svg
                    var svg = getSVGElement('0 0 ' + w + ' ' + h);
                    options.svg = $(svg);
                    $this.append(options.svg);

                    // cache options
                    $this.data(dataKey, options);
                }
            });
        },


        /**
         * paint
         * Public function responsible for drawing path.
         * @public
         */
        paint: function() {

            return this.each(function() {

                // retrieve data object
                var $this = $(this);
                var data = $this.data(dataKey);

                var init = function() {

                    // Build array of path objects
                    data.paths = [];
                    data.longestDuration = 0;
                    data.playhead = 0;

                    var duration = 0;
                    var i = 0;

                    // find totalDuration,
                    // required before looping paths for setting up reverse options.
                    var totalDuration = 0;
                    for (i = 0; i < data.svgData.length; i++) {
                        duration = data.svgData[i].duration * data.speedMultiplier;
                        totalDuration += duration;
                    }

                    // loop paths
                    // obtain path length, animation duration and animation start time.
                    for (i = 0; i < data.svgData.length; i++) {

                        var path = getPath(data, i);
                        var length = path.getTotalLength();
                        path.style.strokeDasharray = length + ' ' + length;
                        path.style.strokeDashoffset = length;
                        path.style.display = 'block';
                        path.getBoundingClientRect();

                        duration = data.svgData[i].duration * data.speedMultiplier;
                        if (duration > data.longestDuration) {
                            data.longestDuration = duration;
                        }

                        var drawStartTime;
                        if (data.reverse) {
                            totalDuration -= duration;
                            drawStartTime = totalDuration;
                        } else {
                            drawStartTime = data.playhead;
                        }

                        data.paths.push({
                            'duration': duration,
                            'drawStartTime': drawStartTime,
                            'path': path,
                            'length': length
                        });
                        data.playhead += duration;
                    }

                    // begin animation
                    data.totalDuration = (data.drawSequential) ? data.playhead : data.longestDuration;
                    data.rAF = requestAnimationFrame(function(timestamp) {
                        draw(timestamp, data);
                    });

                    // fire onStart callback
                    if (data.onStart !== null) {
                        data.onStart();
                    }
                };

                // if delay isset
                if (data.delay === null) {
                    init();
                } else {
                    setTimeout(init, data.delay);
                }
            });
        },


        /**
         * pauseResume
         * Public function responsible for pausing / resuming path animation.
         * @public
         */
        pauseResume: function() {

            return this.each(function() {

                var data = $(this).data(dataKey);

                if (!data.paused) {
                    data.paused = true;

                    // cancel rAF
                    cancelAnimationFrame(data.rAF);
                } else {
                    data.paused = false;

                    // resume rAF
                    requestAnimationFrame(function(timestamp) {
                        adjustStartTime(timestamp, data);
                    });
                }
            });
        },


        /**
         * erase
         * Public function responsible for clearing path,
         * paint can still be called on the element after it has been erased.
         * @public
         */
        erase: function() {

            return this.each(function() {

                // retrieve data object
                var $this = $(this);
                var data = $this.data(dataKey);

                // reset / cancel rAF
                data.startTime = null;
                data.elapsedTime = null;
                cancelAnimationFrame(data.rAF);

                // empty contents of svg
                data.svg.empty();
            });
        },


        /**
         * destroy
         * Public function responsible for removing lazyline data and element from DOM
         * @public
         */
        destroy: function() {

            return this.each(function() {

                // retrieve / remove data object
                var $this = $(this);
                $this.removeData(dataKey);

                // remove container element
                $this.remove();
            });
        }
    };


    /**
     * adjustStartTime
     * Private function responsible for managing time.
     * @private
     * @param  {number} timestamp identifies current time
     * @param  {object} data      contains options set on init() and paint()
     */
    var adjustStartTime = function(timestamp, data) {
        data.startTime = timestamp - data.elapsedTime;
        requestAnimationFrame(function(timestamp) {
            draw(timestamp, data);
        });
    };


    /**
     * draw
     * Private function responsible for animating paths.
     * Path incrementation is performed using requestAnimationFrame.
     * @private
     * @param  {number} timestamp   identifies current time
     * @param  {object} data        contains options set on init() and paint()
     */
    var draw = function(timestamp, data) {

        // set startTime
        if (!data.startTime) {
            data.startTime = timestamp;
        }

        // set elapsedTime
        data.elapsedTime = timestamp - data.startTime;

        // loop paths
        for (var i = 0; i < data.paths.length; i++) {

            // set pathElapsedTime
            var pathElapsedTime;
            if (data.drawSequential) {
                pathElapsedTime = data.elapsedTime - data.paths[i].drawStartTime;
                if (pathElapsedTime < 0) {
                    pathElapsedTime = 0;
                }
            } else {
                pathElapsedTime = data.elapsedTime;
            }

            // don't redraw paths that are finished or paths that aren't up yet
            if (pathElapsedTime < data.paths[i].duration && pathElapsedTime > 0) {

                var frameLength = pathElapsedTime / data.paths[i].duration * data.paths[i].length;

                // animate path in certain direction, based on data.reverse property
                if (data.reverse || data.svgData[i].reverse) {
                    data.paths[i].path.style.strokeDashoffset = -data.paths[i].length + frameLength;
                } else {
                    data.paths[i].path.style.strokeDashoffset = data.paths[i].length - frameLength;
                }
            } else if (pathElapsedTime > data.paths[i].duration) {
                data.paths[i].path.style.strokeDashoffset = 0;
            }
        }

        // envoke draw function recursively if elapsedTime is less than the totalDuration
        if (data.elapsedTime < data.totalDuration) {
            data.rAF = requestAnimationFrame(function(timestamp) {
                draw(timestamp, data);
            });

            // else envoke onComplete
        } else {
            if (data.onComplete !== null) {
                data.onComplete();
            }
        }
    };


    /**
     * getPath
     * Private function responsible for creating a svg path element,
     * and setting attributes on path.
     * @private
     * @param  {object} data contains options set on init
     * @param  {number} i    path index
     * @return {object} path svg path element
     */
    var getPath = function(data, i) {
        var path = document.createElementNS('http://www.w3.org/2000/svg', 'path');
        var $path = $(path);
        data.svg.append($path);
        $path.attr(getAttributes(data, data.svgData[i]));
        return path;
    };


    /**
     * getAttributes
     * Private function which returns an object of path attributes,
     * selects either global options set on init or specific path option
     * @private
     * @param  {object} data  contains options set on init()
     * @param  {object} value contains specific path options
     * @return {object}       obj of path attributes
     */
    var getAttributes = function(data, value) {
        return {
            'd': value.path,
            'stroke': !value.strokeColor ? data.strokeColor : value.strokeColor,
            'fill-opacity': 0,
            'stroke-opacity': !value.strokeOpacity ? data.strokeOpacity : value.strokeOpacity,
            'stroke-width': !value.strokeWidth ? data.strokeWidth : value.strokeWidth,
            'stroke-linecap': !value.strokeCap ? data.strokeCap : value.strokeCap,
            'stroke-linejoin': !value.strokeJoin ? data.strokeJoin : value.strokeJoin
        };
    };


    /**
     * getSVGElement
     * Private function which returns empty svg element,
     * with specified viewBox aspect ratio.
     * @private
     * @param  {string} viewBox
     * @return {obj}    svg
     */
    var getSVGElement = function(viewBox) {
        var svg = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
        svg.setAttributeNS(null, 'viewBox', viewBox);
        svg.setAttribute('xmlns', 'http://www.w3.org/2000/svg');
        return svg;
    };


    /**
     * lazylinepainter
     * Public function which extends jQuery's prototype object.
     * @public
     * @param  {string}     method  Expects lazylinepainter method name as string.
     * @return {function}           Returns lazylinepainter method.
     */
    $.fn.lazylinepainter = function(method) {
        if (methods[method]) {
            return methods[method].apply(this, Array.prototype.slice.call(arguments, 1));
        } else if (typeof method === 'object' || !method) {
            return methods.init.apply(this, arguments);
        } else {
            console.log('opps - issue finding method');
        }
    };

})(jQuery);


