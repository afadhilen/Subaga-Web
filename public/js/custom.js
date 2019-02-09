var current_link = 'sbg_group';

function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}

function initScrollAnimation(id) {
    $('.main-nav li a, .servicelink').bind('click', function(event) {
        var anchor = $(this).attr('href')

        if (id != 'sbg_group') {
            anchor = '.content-dynamic ' + anchor;
        }

        $('html, body').stop().animate({
            scrollTop: $(anchor).offset().top - 102
        }, 1500, 'easeInOutExpo');
        if ($(window).width() < 768) {
            $('.main-nav').hide();
        }
        event.preventDefault();
    });
}

function initPortfolio() {
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
}

$(function(){
    $('#navbar').scrollToFixed();

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
    initScrollAnimation(current_link);
    initPortfolio();
})

$(function () {
    var link = $('.switch-menu a');

    link.on('click', function(e){
        e.preventDefault();

        var id = $(this).data('link');

        if(id != current_link){
            if (id != 'sbg_group') {
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
                    link_container.toggle('slide', 2000);
                    // link_container.hide(2000);
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

                    initScrollAnimation(id);

                    link_container.toggle('slide', 2000);
                    // link_container.slideToggle(1000);
                },
                error: function(){
                    //handle error
                }
            });

            if (id != 'sbg_group') {
                $('.content-default').slideUp('slow');

                $('.content-dynamic').load('ajax/view?id='+id, function(){
                    initPortfolio();
                });
                $('.content-dynamic').hide();
                $('.content-dynamic').slideDown().delay('slow');

                $(window).scrollTop(0);
            } else {
                //detach first, so it wont be sticky
                $('#navbar').trigger('detach.ScrollToFixed');
                $('#navbar').scrollToFixed();

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