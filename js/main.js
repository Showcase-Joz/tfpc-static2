$(window).load(function() {
    $('#status').fadeOut();
    $('#preloader').delay(350).fadeOut('slow');
    $('body').delay(350).css({
        'overflow': 'visible'
    });







    // Flexslider settings
    $('#post-slider').flexslider({
        // Primary Controls
        controlNav: false, //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
        directionNav: true, //Boolean: Create navigation for previous/next navigation? (true/false)
        prevText: "Previous", //String: Set the text for the "previous" directionNav item
        nextText: "Next", //String: Set the text for the "next" directionNav item

        // Secondary Navigation
        keyboard: true, //Boolean: Allow slider navigating via keyboard left/right keys
        multipleKeyboard: false, //{NEW} Boolean: Allow keyboard navigation to affect multiple sliders. Default behavior cuts out keyboard navigation with more than one slider present.
        mousewheel: false, //{UPDATED} Boolean: Requires jquery.mousewheel.js (https://github.com/brandonaaron/jquery-mousewheel) - Allows slider navigating via mousewheel
        pausePlay: false, //Boolean: Create pause/play dynamic element
        pauseText: 'Pause', //String: Set the text for the "pause" pausePlay item
        playText: 'Play', //String: Set the text for the "play" pausePlay item

        // Special properties
        controlsContainer: "", //{UPDATED} Selector: USE CLASS SELECTOR. Declare which container the navigation elements should be appended too. Default container is the FlexSlider element. Example use would be ".flexslider-container". Property is ignored if given element is not found.
        manualControls: "", //Selector: Declare custom control navigation. Examples would be ".flex-control-nav li" or "#tabs-nav li img", etc. The number of elements in your controlNav should match the number of slides/tabs.
        sync: "", //{NEW} Selector: Mirror the actions performed on this slider with another slider. Use with care.
        asNavFor: "", //{NEW} Selector: Internal property exposed for turning the slider into a thumbnail navigation for another slider
    });

    $('#main-slider').flexslider({
        namespace: "flex-", //{NEW} String: Prefix string attached to the class of every element generated by the plugin
        selector: ".slides > li", //{NEW} Selector: Must match a simple pattern. '{container} > {slide}' -- Ignore pattern at your own peril
        animation: "fade", //String: Select your animation type, "fade" or "slide"
        easing: "swing", //{NEW} String: Determines the easing method used in jQuery transitions. jQuery easing plugin is supported!
        direction: "horizontal", //String: Select the sliding direction, "horizontal" or "vertical"
        reverse: false, //{NEW} Boolean: Reverse the animation direction
        animationLoop: true, //Boolean: Should the animation loop? If false, directionNav will received "disable" classes at either end
        smoothHeight: false, //{NEW} Boolean: Allow height of the slider to animate smoothly in horizontal mode
        startAt: 0, //Integer: The slide that the slider should start on. Array notation (0 = first slide)
        slideshow: true, //Boolean: Animate slider automatically
        slideshowSpeed: 7000, //Integer: Set the speed of the slideshow cycling, in milliseconds
        animationSpeed: 600, //Integer: Set the speed of animations, in milliseconds
        initDelay: 0, //{NEW} Integer: Set an initialization delay, in milliseconds
        randomize: false, //Boolean: Randomize slide order

        // Usability features
        pauseOnAction: true, //Boolean: Pause the slideshow when interacting with control elements, highly recommended.
        pauseOnHover: false, //Boolean: Pause the slideshow when hovering over slider, then resume when no longer hovering
        useCSS: true, //{NEW} Boolean: Slider will use CSS3 transitions if available
        touch: true, //{NEW} Boolean: Allow touch swipe navigation of the slider on touch-enabled devices
        video: false, //{NEW} Boolean: If using video in the slider, will prevent CSS3 3D Transforms to avoid graphical glitches

        // Primary Controls
        controlNav: true, //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
        directionNav: true, //Boolean: Create navigation for previous/next navigation? (true/false)
        prevText: "Previous", //String: Set the text for the "previous" directionNav item
        nextText: "Next", //String: Set the text for the "next" directionNav item

        // Secondary Navigation
        keyboard: true, //Boolean: Allow slider navigating via keyboard left/right keys
        multipleKeyboard: false, //{NEW} Boolean: Allow keyboard navigation to affect multiple sliders. Default behavior cuts out keyboard navigation with more than one slider present.
        mousewheel: false, //{UPDATED} Boolean: Requires jquery.mousewheel.js (https://github.com/brandonaaron/jquery-mousewheel) - Allows slider navigating via mousewheel
        pausePlay: false, //Boolean: Create pause/play dynamic element
        pauseText: 'Pause', //String: Set the text for the "pause" pausePlay item
        playText: 'Play', //String: Set the text for the "play" pausePlay item

        // Special properties
        controlsContainer: "", //{UPDATED} Selector: USE CLASS SELECTOR. Declare which container the navigation elements should be appended too. Default container is the FlexSlider element. Example use would be ".flexslider-container". Property is ignored if given element is not found.
        manualControls: "", //Selector: Declare custom control navigation. Examples would be ".flex-control-nav li" or "#tabs-nav li img", etc. The number of elements in your controlNav should match the number of slides/tabs.
        sync: "", //{NEW} Selector: Mirror the actions performed on this slider with another slider. Use with care.
        asNavFor: "", //{NEW} Selector: Internal property exposed for turning the slider into a thumbnail navigation for another slider
    });


    /*Clients Slider*/
    if ($('#partner-slider').length) {
        var owlPartner = $("#partner-slider");
        owlPartner.owlCarousel({
            autoPlay: 5000,
            loop: true,
            autoWidth: true,
            items: 4,
            stagePadding: 50,
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            768: {
                items: 3
            }
        });
    }

    // OWL Custom Navigation Events
    $(".partner-slider .next").click(function() {
        owlPartner.trigger('owl.next');
    });
    $(".partner-slider .prev").click(function() {
        owlPartner.trigger('owl.prev');
    });


    // tooltip
    $('[data-toggle="tooltip"]').tooltip();

    // set copyright year date
    var currentYear = (new Date).getFullYear(); { $('.year').text(currentYear); }


    //scroll to top
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('.scrollBtn').fadeIn();
        } else {
            $('.scrollBtn').fadeOut();
        }
    });
    $('.scrollBtn').click(function() {
        $("html, body").animate({ scrollTop: 0 }, 1000);
        return false;
    });

    // init WOW
    var wow = new WOW({
        mobile: false, // trigger animations on mobile devices (default is true)
        live: true, // act on asynchronously loaded content (default is true)
    });
    wow.init();

});




/*global jQuery:false */
jQuery(document).ready(function($) {
    "use strict";

    // Select all links with hashes
    $('a[href*="#"]')
        // Remove links that don't actually link to anything
        .not('[href="#"]')
        .not('[href="#0"]')
        .click(function(event) {
            // On-page links
            if (
                location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
                location.hostname == this.hostname
            ) {
                // Figure out element to scroll to
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                // Does a scroll target exist?
                if (target.length) {
                    // Only prevent default if animation is actually gonna happen
                    event.preventDefault();
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000, function() {
                        // Callback after animation
                        // Must change focus!
                        var $target = $(target);
                        $target.focus();
                        if ($target.is(":focus")) { // Checking if the target was focused
                            return false;
                        } else {
                            $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                            $target.focus(); // Set focus again
                        }
                    });
                }
            }
        });

    // set cookie variable in memory
    var accessabilityCookie = sessionStorage.getItem("accessibility-menu")
    console.log(sessionStorage.getItem("accessibility-menu"));

    // check to see if cookie exixts and set .accessability-bound to reflect state
    if (accessabilityCookie === null || (window.sessionStorage && window.sessionStorage.getItem('accessability-state') === 'down')) {
        $('.accessability-bound').slideDown();
        $('#show-accessability').attr('data-click-state', 0);
        // sessionStorage.setItem("accessibility-menu","down");
        console.log('awesome, new user. pull menu down');

    } else if (accessabilityCookie === 'down') {
        $('#show-accessability').attr('data-click-state', 0);
        // sessionStorage.setItem("accessibility-menu","down");
        $('.accessability-bound').removeClass('bounceInDown');
        $('.accessability-bound').show();
        $('.accessibility-info').addClass('shine');
        console.log('old user, already pulled menu down');
        console.log(accessabilityCookie + ' test');

    } else {
        $('#show-accessability').attr('data-click-state', 1);
        $('#show-accessability').find('i').toggleClass('fa-universal-access fa-wheelchair');
        $('.accessability-bound').slideToggle();
        $('.accessability-bound').removeAttr("style");
        // sessionStorage.setItem("accessibility-menu","up");
        console.log('up awesome');
        console.log(accessabilityCookie + ' test');
    }



    // toggle accessibiliy content adding cookie state
    $('#show-accessability').on('click', function() {

      // is data-click-state down? set it to up and update .accessability-bound to show this
      if ($(this).attr('data-click-state') == 0) {
          $(this).attr('data-click-state', 1);
          $('#show-accessability').find('i').toggleClass('fa-wheelchair fa-universal-access');
          $('.accessability-bound').slideUp();
          sessionStorage.setItem("accessibility-menu", "up");
          console.log('up');
      } 
      // is data-click-state up? set it to down and update .accessability-bound to show this
      else if ($(this).attr('data-click-state') == 1) {
          $(this).attr('data-click-state', 0);
          $('#show-accessability').find('i').toggleClass('fa-universal-access fa-wheelchair');
          $('.accessability-bound').slideDown();
          $('.accessability-bound').removeAttr("style");
          sessionStorage.setItem("accessibility-menu", "down");
          console.log('down this');
      }
    });

});
// on event onclick
noevent = function(e) {
    e.preventDefault();
};
//history back button action
    function goBack() {
        window.history.back();
    }