$(function(){
    $(document).scroll(function () {
        if ($(window).scrollTop() <= 150) {
            $(".menu").css("padding", "60px 0 0 0");
        } else {
            $(".menu").css("padding", "0 0 0 0");
        }
    });
});