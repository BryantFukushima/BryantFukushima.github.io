$(document).ready(function () {
    $("a").on('click', function (event) {
        if (this.hash !== "" && this.hash !== "#home") {
            var hash = this.hash;
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800);
            $('.navbar__check').prop('checked', false);
        } else if (this.hash === "#home") {
            $('html, body').animate({
                scrollTop: 0
            }, 800);
            $('.navbar__check').prop('checked', false);
        }
    })

});

$('.navbar__bg').click(function () {
    $('.navbar__check').prop('checked', false);
});

var $class;

function scrollView($class) {
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();

    var elemTop = $class.offset().top;
    var elemBottom = elemTop + $class.height();

    return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
}

$(window).scroll(function() {

        if (scrollView($('#pure-text'))){
            $('#pure-text').addClass("project-text-ani");
            $('#pure-img').addClass("project-img-ani");
        }
        if (scrollView($('#surf-text'))){
            $('#surf-text').addClass("project-text-ani");
            $('#surf-img').addClass("project-img-ani-left");
        }
        if (scrollView($('#gif-text'))){
            $('#gif-text').addClass("project-text-ani");
            $('#gif-img').addClass("project-img-ani")
        }
        if (scrollView($('#about-dev'))){
            $('#about-dev').addClass("about-dev-ani")
        }
        if (scrollView($('#about-des'))){
            $('#about-des').addClass("about-des-ani")
        }
        
})
