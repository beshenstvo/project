var scroll = document.documentElement.scrollTop;
console.log(scroll)
if(scroll > 0){
    $('.header__menu').css({
        'background-color': 'black'
    })
}else if(scroll <= 2){
    $('.header__menu').css({
        'background-color': 'transparent'
    })
}
$( window ).scroll(function() {
    console.log($( window ).scrollTop() );
    if($( window ).scrollTop() > 0){
        $('.header__menu').css({
            'background-color': 'black'
        })
    }else if($( window ).scrollTop() <= 2){
        $('.header__menu').css({
            'background-color': 'transparent'
        })
    }
  });