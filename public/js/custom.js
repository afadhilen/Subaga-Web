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

        $.ajax({
            url:"/api/nav-bar",
            data: {
                id: id
            },  
            success:function(data) {
                var container = $('.dynamic-nav');
                var company_name = $('.company-name');
                var logo = $('.company-logo');
                
                company_name.html(data['name']);
                                 
                var new_logo = '<a class="btn"><img src="img/small-logo.png" alt=""></a>';
                logo.fadeOut('slow');
                logo.html(new_logo);
                logo.fadeIn('slow');

                container.hide('slow');
                container.empty().delay('slow');

                $.each(data['link'], function( id, title ) {
                    var new_link = '<li><a href="#'+id+'">'+title+'</a></li>';
                    container.append(new_link);
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

                container.show('slow');
                closeNav();
            }
        });

    }); 
});