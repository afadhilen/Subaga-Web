var current_link = 'subaga_group';

$(function(){
    $('#test').scrollToFixed();
    $('.res-nav_click').click(function() {
        $('.main-nav').slideToggle();
        return false;
    });

    $('.Portfolio-box').magnificPopup({
      delegate: 'a',
      type: 'image'
    });
    
    wow = new WOW({
        animateClass: 'animated',
        offset: 100
    });
    wow.init();
});

$(window).on('load', function () {
    
    $('.main-nav li a, .servicelink').bind('click', function(event) {
        var $anchor = $(this);

        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 102
        }, 1500, 'easeInOutExpo');
        /*
        if you don't want to use the easing effects:
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1000);
        */
        if ($(window).width() < 768) {
            $('.main-nav').hide();
        }
        event.preventDefault();
    });
})

$(window).on('load', function () {

    var $container = $('.portfolioContainer'),
        $body = $('body'),
        colW = 375,
        columns = null;


    $container.isotope({
        // disable window resizing
        resizable: true,
        masonry: {
            columnWidth: colW
        }
    });

    $(window).smartresize(function() {
        // check if columns has changed
        var currentColumns = Math.floor(($body.width() - 30) / colW);
        if (currentColumns !== columns) {
            // set new column count
            columns = currentColumns;
            // apply width to container manually, then trigger relayout
            $container.width(columns * colW)
                .isotope('reLayout');
        }

    }).smartresize(); // trigger resize to set container width
    $('.portfolioFilter a').click(function() {
        $('.portfolioFilter .current').removeClass('current');
        $(this).addClass('current');

        var selector = $(this).attr('data-filter');
        $container.isotope({

            filter: selector,
        });
        return false;
    });

});

$(function () {
    var link = $('.switch-menu a');

    link.on('click', function(e){
        e.preventDefault();

        var id = $(this).data('link');

        if(id != current_link){
            if (id != 'subaga_group') {
                $('.header').hide('slow');
                $(window).scrollTop(0);
            } else {
                $('.header').show('slow');
                $(window).scrollTop(0);
            }

            $.ajax({
                url:"/ajax/nav-bar",
                data: {
                    id: id
                },  
                success:function(data) {
                    var link_container = $('.dynamic-nav');
                    var company_name = $('.company-name');
                    var logo = $('.company-logo');

                    //change company name
                    company_name.html(data['name']);

                    //hide, empty, add new one, then show link for nav bar
                    link_container.hide(1500);
                    link_container.empty();

                    //hide, change, then show logo
                    var new_logo = '<img src="img/logo/'+data['logo']+'.png" alt="" style="posistion:relative;">';
                    logo.fadeOut(1600);
                    logo.html(new_logo);
                    logo.fadeIn(1600).delay('slow');

                    $.each(data['link'], function( id, title ) {
                        var new_link = '<li><a href="#'+id+'">'+title+'</a></li>';
                        link_container.append(new_link);
                    }); 

                    $('.main-nav li a').bind('click', function(event) {
                        var $anchor = $(this);

                        $('html, body').stop().animate({
                            scrollTop: $($anchor.attr('href')).offset().top - 102
                        }, 1500, 'easeInOutExpo');
                        if ($(window).width() < 768) {
                            $('.main-nav').hide();
                        }
                        event.preventDefault();
                    });

                    link_container.slideToggle(800);
                },
                error: function(){
                    //handle error
                }
            });

            if (id != 'subaga_group') {
                $('.content-default').slideUp('slow');

                $('.content-dynamic').load('ajax/view?id='+id);

                $('.content-dynamic').hide();
                $('.content-dynamic').slideDown().delay('slow');
                $(window).scrollTop(0);
            } else {
                $('.content-dynamic').slideUp('slow');
                $('.content-default').slideDown('slow').delay('slow');
                $(window).scrollTop(0);
            }

            //change current_link
            current_link = id;
        }

        closeNav();
    }); 
});