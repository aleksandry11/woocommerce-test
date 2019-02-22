(function($){
    $(document).ready(function() {
        $(".owl-carousel").owlCarousel({
            items: 1,
            dots: true,
            loop: true,
            autoplay: true,
            autoplayTimeOut: 6000,
            animateIn: "fadeIn",
            autoplayHoverPause: true,
            animateOut: "fadeOut",
            mouseDrag: false,
            nav: true,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"]
        });
    
        $(".owl-carousel").mouseenter(function() {
            $(".owl-prev").animate({
                left: "20px",
                transition: "0s"
            }, 300,()=> {
                $(".owl-prev").css({
                    transition: "0.3s"
                })
            }).stop(true, true);
    
            $(".owl-next").animate({
                right: "20px",
                transition: "0s"
            }, 300,()=> {
                $(".owl-next").css({
                    transition: "0.3s"
                })
            }).stop(true, true);
        })
        $(".owl-carousel").mouseleave(function() {
            $(".owl-prev").animate({
                left: "-60px",
                transition: "0s"
            }, 300);
            $(".owl-next").animate({
                right: "-60px",
                transition: "0s"
            }, 300);
        })
    });
})(jQuery);
