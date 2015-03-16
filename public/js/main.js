$(document).ready(function(){
	$('.content').css('min-height', $(window).height());
	$(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('#top').fadeIn();
        } else {
            $('#top').fadeOut();
        }
    });
    
    //Click event to scroll to top
    $('#top').click(function(){
        $('html, body').animate({scrollTop : 0},800);
        return false;
    });
});

scroll_navigation();


/*------------------------------------------------NEWS SINGLE START----------------------------------------------------------*/
$('body').on('mouseover', '.news_single', function(){
    $(this).children('.custom_hover').show();
    $(this).children('.custom_hover').animate({
        width: '100%'
    }, 300);
}).on('mouseleave', '.news_single', function(){
    $(this).children('.custom_hover').animate({
        width: '0%',
    }, 150);
    $(this).children('.custom_hover').slideUp(100);
});
/*--------------------------------------------------NEWS SINGLE END------------------------------------------------------------*/





/*--------------------------------------------------------------------------FUNCTIONS------------------------------------------------------------------------------*/
var scroll_orientation = true;
function scroll_navigation() {
    $(window).bind('scroll', function () {
        var navHeight = $(window).height() - ($(window).height() - 204);
        if (($(window).scrollTop() > navHeight) && scroll_orientation) {
            $('.main-navigation').css({ 'position': 'fixed', 'top': 0});
            $('.main-navigation').animate({
                height: 53,
                'line-height': 53
            });
            scroll_orientation = false;
        }
        else if(($(window).scrollTop() <= navHeight) && !scroll_orientation && $(window).width() >= 768){
            $('.main-navigation').css({ 'position': 'relative', 'top': 0});
            $('.main-navigation').animate({
                height: 100,
                'line-height': 100
            });
            scroll_orientation = true;
        }
    });
};