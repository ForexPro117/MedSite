window.onscroll = function() {
    const scrolled = window.pageYOffset || document.documentElement.scrollTop;
    if(scrolled !== 0){
        document.querySelector('header').style.background = 'rgba(61, 126, 224, 0.95)';
    }else{
        document.querySelector('header').style.background = 'rgba(61, 126, 224, 0)';
    }
};



