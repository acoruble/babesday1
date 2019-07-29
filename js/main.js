$(function() {
  "use strict";


    $(window).scroll(changeActive());

    if(screen.width < 480){
        $.instagramFeed({
            'username': 'babesdayfr',
            'container': "#instagram-feed-babesday",
            'display_profile': false,
            'display_biography': false,
            'display_gallery': true,
            'get_raw_json': false,
            'callback': null,
            'styling': true,
            'items': 8,
            'items_per_row': 2,
            'margin': 0
        });
    }
    if(screen.width > 480) {
        $.instagramFeed({
            'username': 'babesdayfr',
            'container': "#instagram-feed-babesday",
            'display_profile': false,
            'display_biography': false,
            'display_gallery': true,
            'get_raw_json': false,
            'callback': null,
            'styling': true,
            'items': 15,
            'items_per_row':4,
            'margin': 0
        });
    }

    $('.carousel.slide').carousel().swipeCarousel();


    var owl = $('.owl-carousel');

    $('.owl-carousel.contact-carousel').owlCarousel({
        loop:false,
        margin:10,
        dots:false,
        nav:false,
        responsiveClass:true,
        items:1
    });

    $('.owl-carousel.header-carousel').owlCarousel({
        loop:true,
        margin:10,
        dots:false,
        nav:false,
        responsiveClass:true,
        items:1
    });

  var nav_offset_top = $('.header_banner').height();

    $(".close-alert").click(function(e){
        $(this).parent().remove();
        e.preventDefault();
    });


    /*-------------------------------------------------------------------------------
	  Navbar 
	-------------------------------------------------------------------------------*/

	//* Navbar Fixed  
    function navbarFixed(){
        if ( $('.header_area').length ){ 
            $(window).scroll(function() {
                var scroll = $(window).scrollTop();   
                if (scroll >= nav_offset_top ) {
                    $(".header_area").addClass("navbar_fixed");
                } else {
                    $(".header_area").removeClass("navbar_fixed");
                }
            });
        };
    };
    navbarFixed();


    $('a.smooth-link[href*="#"]')
    // Remove links that don't actually link to anything
        .not('[href="#"]')
        .not('[href="#0"]')
        .click(function(event) {
            if($(this).hasClass('300')){var offsetLess = 300;}
            else if($(this).hasClass('100')){var offsetLess = 100;}
            else if($(this).hasClass('60')){var offsetLess = 60;}
            else {offsetLess = 0;}
            // On-page links
            if (
                location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
                &&
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
                        scrollTop: target.offset().top - offsetLess
                    }, 1000, function() {
                        // Callback after animation
                        // Must change focus!
                        var $target = $(target);
                        $target.focus();
                        // if ($target.is(":focus")) { // Checking if the target was focused
                        //     return false;
                        // } else {
                        //     $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                        //     $target.focus(); // Set focus again
                        // };
                    });
                }
            }
        });

    
    $('#first_loc').on('click',function () {
        owl.trigger('prev.owl.carousel', [300]);
        $('#second_loc').removeClass('active');
        $(this).addClass('active');
    });

    $('#second_loc').on('click',function () {
        owl.trigger('next.owl.carousel', [300]);
        $('#first_loc').removeClass('active');
        $(this).addClass('active');
    });

    $('#first_loc').keydown(function(e){
        //enter key
        if(e.which === 13){
            owl.trigger('prev.owl.carousel', [300]);
            $('#second_loc').removeClass('active');
            $(this).addClass('active');
        }
        //right arrow
        if(e.which === 39){
            $('#second_loc').focus();
        }

    });

    $('#second_loc').keydown(function(e){
        //enter key
        if(e.which === 13){
            owl.trigger('next.owl.carousel', [300]);
            $('#first_loc').removeClass('active');
            $(this).addClass('active');
        }
        //left arrow
        if(e.which === 37){
            $('#first_loc').focus();
        }
    });

    function changeActive() {
        // Cache selectors
        var lastId,
            topMenu = $(".menu_nav"),
            topMenuHeight = topMenu.outerHeight()+150,
            // All list items
            menuItems = topMenu.find('a[href*="#"]'),
            // Anchors corresponding to menu items
            scrollItems = menuItems.map(function () {
                var item = $($(this).attr("href"));
                if (item.length) {
                    return item;
                }
            });


// Bind to scroll
        $(window).scroll(function () {
            // Get container scroll position
            var fromTop = $(this).scrollTop() + topMenuHeight;

            // Get id of current scroll item
            var cur = scrollItems.map(function () {
                if ($(this).offset().top < fromTop)
                    return this;
            });
            // Get the id of the current element
            cur = cur[cur.length - 1];
            var id = cur && cur.length ? cur[0].id : "";

            if (lastId !== id) {
                lastId = id;
                // Set/remove active class
                menuItems
                    .parent().removeClass("active")
                    .end().filter("[href='#" + id + "']").parent().addClass("active");
            }
        });

    }



});


