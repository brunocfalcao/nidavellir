import "./bootstrap";

$(document).ready(function () {
    let fadedIn = false;

    const handleScroll = function () {
        if ($(window).scrollTop() > 100) {
            if (!fadedIn) {
                $(".scroll-to-top, .scrolled-wait-list").fadeIn();
                fadedIn = true;
            }
        } else {
            if (fadedIn) {
                $(".scroll-to-top, .scrolled-wait-list").fadeOut();
                fadedIn = false;
            }
        }
    };

    $(window).scroll(handleScroll);

    handleScroll();

    $(".scroll-to-top").click(function () {
        window.scrollTo(0, 0);
    });

    $(".collapsible").click(function () {
        $(this).toggleClass("collapsed");
        $(this).find("p").stop().slideToggle(200);
    });
});
