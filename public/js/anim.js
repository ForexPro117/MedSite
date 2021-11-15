// window.onscroll = function() {
//     const scrolled = window.pageYOffset || document.documentElement.scrollTop;
//     if(scrolled !== 0){
//         document.querySelector('header').style.background = 'rgba(61, 126, 224, 0.95)';
//     }else{
//         document.querySelector('header').style.background = 'rgba(61, 126, 224, 0)';
//     }
// };

window.scroll(function() {
    // действия при скроллинге страницы...
    if ($(this).scrollTop() > 80) {
        $('#1232323').removeClass( "some" ).addClass( "some1" );
    } else {
        $('#1232323').removeClass( "some1" ).addClass( "some" );
    }
});

