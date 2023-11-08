
(function ($){
    $(document).ready(function() {
        $('.toggle-nav').click(function(e) {
            e.preventDefault();
            $('.nav-block, .toggle-nav').toggleClass('open');
            return false;
        });

        $('.nav-block .menu-menu-container li').each(function() {
            $(this).width( $(this).width() +10);
        });


        $('.nav-block .menu-menu-container li a').click(function() {
            $('.nav-block li a').removeClass('active');
            $(this).addClass('active');
            $('.nav-block, .toggle-nav').removeClass('open');
        });

        let hash = window.location.hash;
        let $a = false;
        if (hash) {
            $a = $('.nav-block li a[href="' + hash + '"]');
        } else {
            $a = $('.nav-block li a').first();
        }

        $a.trigger('click');

        $(window).scroll(function() {
            if ($(this).scrollTop() > 0) {
                $('.header-wrapper').addClass('header-anime');
            } else {
                $('.header-wrapper').removeClass('header-anime');
            }
        })



        $('.slider-main .slider').slick({
            dots: false,
            autoplay: true,
            speed: 3000,
            slidesToShow: 4,
            infinite: false,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        adaptiveHeight: true,
                        dots: true,
                        centerMode: false,
                        mobileFirst: true,
                        arrows: false
                    }
                },
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                    }
                },
            ]
        });

        $('.blog-slider .slider').slick({
            dots: false,
            autoplay: true,
            speed: 3000,
            slidesToShow: 3,
            infinite: false,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        adaptiveHeight: true,
                        dots: true,
                        centerMode: false,
                        mobileFirst: true,
                        arrows: false
                    }
                },
            ]
        });
    });

})(jQuery);