"use strict";




document.querySelectorAll('a[href^="#"').forEach(link => {

    link.addEventListener('click', function(e) {
        e.preventDefault();

        let href = this.getAttribute('href').substring(1);

        const scrollTarget = document.getElementById(href);

        const topOffset = document.querySelector('.scroll').offsetHeight;
        // const topOffset = 0; // если не нужен отступ сверху
        const elementPosition = scrollTarget.getBoundingClientRect().top;
        const offsetPosition = elementPosition - topOffset;

        window.scrollBy({
            top: offsetPosition,
            behavior: 'smooth'
        });
    });
});



(function () {
    // Global variables
    var userAgent = navigator.userAgent.toLowerCase(),
        initialDate = new Date(),
        butOneBrony = document.getElementById('butOneBr'),
        $document = $( document ),
        $window = $( window ),
        $html = $( "html" ),
        $body = $( "body" ),

        isDesktop = $html.hasClass( "desktop" ),
        isIE = userAgent.indexOf( "msie" ) !== -1 ? parseInt( userAgent.split( "msie" )[ 1 ], 10 ) : userAgent.indexOf( "trident" ) !== -1 ? 11 : userAgent.indexOf( "edge" ) !== -1 ? 12 : false,
        isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test( navigator.userAgent ),
        windowReady = false,
        isNoviBuilder = false,
        loaderTimeoutId,
        plugins = {
            bootstrapTooltip:        $( "[data-toggle='tooltip']" ),
            bootstrapModalDialog:    $( '.modal' ),
            bootstrapTabs:           $( ".tabs-custom" ),
            rdNavbar:                $( ".rd-navbar" ),
            materialParallax:        $( ".parallax-container" ),
            maps:                    $( '.google-map-container' ),
            rdMailForm:              $( ".rd-mailform" ),
            rdInputLabel:            $( ".form-label" ),
            regula:                  $( "[data-constraints]" ),
            selectFilter:            $( "select" ),
            stepper:                 $( "input[type='number']" ),
            wow:                     $( ".wow" ),
            owl:                     $( ".owl-carousel" ),
            swiper:                  $( ".swiper-slider" ),
            search:                  $( ".rd-search" ),
            searchResults:           $( '.rd-search-results' ),
            statefulButton:          $( '.btn-stateful' ),
            isotope:                 $( '.isotope-wrap' ),
            radio:                   $( "input[type='radio']" ),
            checkbox:                $( "input[type='checkbox']" ),
            customToggle:            $( "[data-custom-toggle]" ),
            circleProgress:          $( ".progress-bar-circle" ),
            dateCountdown:           $( '.DateCountdown' ),
            preloader:               $( ".preloader" ),
            captcha:                 $( '.recaptcha' ),

            mailchimp:               $( '.mailchimp-mailform' ),
            campaignMonitor:         $( '.campaign-mailform' ),
            copyrightYear:           $( ".copyright-year" ),
            counter:                 document.querySelectorAll( '.counter' ),
            progressLinear:          document.querySelectorAll( '.progress-linear' ),
            progressCircle:          document.querySelectorAll( '.progress-circle' ),
            countdown:               document.querySelectorAll( '.countdown' )
        };

    /**
     * @desc Check the element was been scrolled into the view
     * @param {object} elem - jQuery object
     * @return {boolean}
     */
    function isScrolledIntoView ( elem ) {
        if ( isNoviBuilder ) return true;
        return elem.offset().top + elem.outerHeight() >= $window.scrollTop() && elem.offset().top <= $window.scrollTop() + $window.height();
    }

    /**
     * @desc Calls a function when element has been scrolled into the view
     * @param {object} element - jQuery object
     * @param {function} func - init function
     */
    function lazyInit ( element, func ) {
        var scrollHandler = function () {
            if ( (!element.hasClass( 'lazy-loaded' ) && (isScrolledIntoView( element ))) ) {
                func.call();
                element.addClass( 'lazy-loaded' );
            }
        };

        scrollHandler();
        $window.on( 'scroll', scrollHandler );
    }

    $window.on( 'load', function () {
        // Page loader & Page transition


        // Counter
        if ( plugins.counter ) {
            for ( var i = 0; i < plugins.counter.length; i++ ) {
                var
                    node = plugins.counter[i],
                    counter = aCounter({
                        node: node,
                        duration: node.getAttribute( 'data-duration' ) || 1000
                    }),
                    scrollHandler = (function() {
                        if ( Util.inViewport( this ) && !this.classList.contains( 'animated-first' ) ) {
                            this.counter.run();
                            this.classList.add( 'animated-first' );
                        }
                    }).bind( node ),
                    blurHandler = (function() {
                        this.counter.params.to = parseInt( this.textContent, 10 );
                        this.counter.run();
                    }).bind( node );

                scrollHandler();
                window.addEventListener( 'scroll', scrollHandler );
                node.addEventListener( 'blur', blurHandler );
            }
        }




        // Isotope
        if ( plugins.isotope.length ) {
            for ( var i = 0; i < plugins.isotope.length; i++ ) {
                var
                    wrap = plugins.isotope[ i ],
                    filterHandler = function ( event ) {
                        event.preventDefault();
                        for ( var n = 0; n < this.isoGroup.filters.length; n++ ) this.isoGroup.filters[ n ].classList.remove( 'active' );
                        this.classList.add( 'active' );
                        this.isoGroup.isotope.arrange( { filter: this.getAttribute( "data-isotope-filter" ) !== '*' ? '[data-filter*="' + this.getAttribute( "data-isotope-filter" ) + '"]' : '*' } );
                    },
                    resizeHandler = function () {
                        this.isoGroup.isotope.layout();
                    };

                wrap.isoGroup = {};
                wrap.isoGroup.filters = wrap.querySelectorAll( '[data-isotope-filter]' );
                wrap.isoGroup.node = wrap.querySelector( '.isotope' );
                wrap.isoGroup.layout = wrap.isoGroup.node.getAttribute( 'data-isotope-layout' ) ? wrap.isoGroup.node.getAttribute( 'data-isotope-layout' ) : 'masonry';
                wrap.isoGroup.isotope = new Isotope( wrap.isoGroup.node, {
                    itemSelector: '.isotope-item',
                    layoutMode: wrap.isoGroup.layout,
                    filter: '*',
                    columnWidth: ( function() {
                        if ( wrap.isoGroup.node.hasAttribute('data-column-class') ) return wrap.isoGroup.node.getAttribute('data-column-class');
                        if ( wrap.isoGroup.node.hasAttribute('data-column-width') ) return parseFloat( wrap.isoGroup.node.getAttribute('data-column-width') );
                    }() )
                } );

                for ( var n = 0; n < wrap.isoGroup.filters.length; n++ ) {
                    var filter = wrap.isoGroup.filters[ n ];
                    filter.isoGroup = wrap.isoGroup;
                    filter.addEventListener( 'click', filterHandler );
                }

                window.addEventListener( 'resize', resizeHandler.bind( wrap ) );
            }
        }
    } );

    // Initialize scripts that require a finished document
    $( function () {
        isNoviBuilder = window.xMode;

        /**
         * @desc Calculate the height of swiper slider basing on data attr
         * @param {object} object - slider jQuery object
         * @param {string} attr - attribute name
         * @return {number} slider height
         */
        function getSwiperHeight ( object, attr ) {
            var val = object.attr( "data-" + attr ),
                dim;

            if ( !val ) {
                return undefined;
            }

            dim = val.match( /(px)|(%)|(vh)|(vw)$/i );

            if ( dim.length ) {
                switch ( dim[ 0 ] ) {
                    case "px":
                        return parseFloat( val );
                    case "vh":
                        return $window.height() * (parseFloat( val ) / 100);
                    case "vw":
                        return $window.width() * (parseFloat( val ) / 100);
                    case "%":
                        return object.width() * (parseFloat( val ) / 100);
                }
            } else {
                return undefined;
            }
        }

        /** ЧТОБЫ ДВИГАЛАСЬ АНИМАЦИЯ ФОТО И НАДПИСЕЙ
         * @desc Toggle swiper videos on active slides
         * @param {object} swiper - swiper slider
         */
        function toggleSwiperInnerVideos ( swiper ) {
            var prevSlide = $( swiper.slides[ swiper.previousIndex ] ),
                nextSlide = $( swiper.slides[ swiper.activeIndex ] ),
                videos,
                videoItems = prevSlide.find( "video" );

            for ( var i = 0; i < videoItems.length; i++ ) {
                videoItems[ i ].pause();
            }

            videos = nextSlide.find( "video" );
            if ( videos.length ) {
                videos.get( 0 ).play();
            }
        }

        /**
         * @desc Toggle swiper animations on active slides
         * @param {object} swiper - swiper slider
         */
        function toggleSwiperCaptionAnimation ( swiper ) {
            var prevSlide = $( swiper.container ).find( "[data-caption-animate]" ),
                nextSlide = $( swiper.slides[ swiper.activeIndex ] ).find( "[data-caption-animate]" ),
                delay,
                duration,
                nextSlideItem,
                prevSlideItem;

            for ( var i = 0; i < prevSlide.length; i++ ) {
                prevSlideItem = $( prevSlide[ i ] );

                prevSlideItem.removeClass( "animated" )
                    .removeClass( prevSlideItem.attr( "data-caption-animate" ) )
                    .addClass( "not-animated" );
            }


            var tempFunction = function ( nextSlideItem, duration ) {
                return function () {
                    nextSlideItem
                        .removeClass( "not-animated" )
                        .addClass( nextSlideItem.attr( "data-caption-animate" ) )
                        .addClass( "animated" );
                    if ( duration ) {
                        nextSlideItem.css( 'animation-duration', duration + 'ms' );
                    }
                };
            };

            for ( var i = 0; i < nextSlide.length; i++ ) {
                nextSlideItem = $( nextSlide[ i ] );
                delay = nextSlideItem.attr( "data-caption-delay" );
                duration = nextSlideItem.attr( 'data-caption-duration' );
                if ( !isNoviBuilder ) {
                    if ( delay ) {
                        setTimeout( tempFunction( nextSlideItem, duration ), parseInt( delay, 10 ) );
                    } else {
                        tempFunction( nextSlideItem, duration );
                    }

                } else {
                    nextSlideItem.removeClass( "not-animated" )
                }
            }
        }


        /**
         * @desc Initialize Bootstrap tooltip with required placement
         * @param {string} tooltipPlacement
         */
        function initBootstrapTooltip ( tooltipPlacement )
        {
            plugins.bootstrapTooltip.tooltip( 'dispose' );

            if ( window.innerWidth < 576 ) {
                plugins.bootstrapTooltip.tooltip( { placement: 'bottom' } );
            } else {
                plugins.bootstrapTooltip.tooltip( { placement: tooltipPlacement } );
            }
        }



        // WOW
        if ( $html.hasClass( "wow-animation" ) && plugins.wow.length && !isNoviBuilder && isDesktop ) {
            new WOW().init();
        }

    } );
}());
