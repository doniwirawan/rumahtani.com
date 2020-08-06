$('#showAside').click(function(){
    $('.sidenav').show();
    $('.onclickshow').show();
    $('.main').css("filter", "blur(5px)");
    $('.navbar-lg-hidden').css("filter", "blur(5px)");
})
$('.onclickshow').click(function () {
    $('.sidenav').hide();
    $('.onclickshow').hide();
    $('.main').css("filter", "blur(0)");
    $('.navbar-lg-hidden').css("filter", "blur(0)");

})