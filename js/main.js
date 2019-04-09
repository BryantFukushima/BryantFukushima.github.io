$(document).ready(function() {
    $("a").on("click", function(event) {
        if (this.hash !== "" && this.hash !== "#Home") {
            var hash = this.hash;
            $("html, body").animate(
                {
                    scrollTop: $(hash).offset().top
                },
                800
            );
            $(".navbar__check").prop("checked", false);
        } else if (this.hash === "#Home") {
            $("html, body").animate(
                {
                    scrollTop: 0
                },
                800
            );
            $(".navbar__check").prop("checked", false);
        }
    });
});

$(".navbar__bg").click(function() {
    $(".navbar__check").prop("checked", false);
});

function scrollInView($class) {
    let viewTop = $(window).scrollTop();
    let viewBottom = viewTop + $(window).height();

    let elemTop = $class.offset().top;
    let elemBottom = elemTop + $class.height();

    return (elemTop >= viewTop && elemTop <= viewBottom) || (elemBottom <= viewBottom && elemBottom >= viewTop);

}

$(window).scroll(function() {
    switch(true) {
        case scrollInView($('#pure')) : 
            $('#pure').addClass("fadeIn-ani");
            break;
        case scrollInView($('#apex')) : 
            $('#apex').addClass("fadeIn-ani");
            break;
        case scrollInView($('#surfscraper')) : 
            $('#surfscraper').addClass("fadeIn-ani");
            break;
        case scrollInView($('#giftastic')) : 
            $('#giftastic').addClass("fadeIn-ani");
            break;

    }
})