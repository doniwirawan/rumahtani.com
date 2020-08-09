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

$('.about-read-more').click(function(){
    $('.hidden-tentang').show(500);
})
$('.misi-read-more').click(function () {
    $('.hidden-misi').show(500);
})
$('.sdg-read-more').click(function () {
    $('.hidden-img').show(500);
    // alert('hello')
})