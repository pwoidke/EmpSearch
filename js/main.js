$('.modalOpen').click(function(){
    $('.modalDialog')
        .css({display:'block'})
        .animate({opacity:"1.0"}, 300);
});

$('.modalDialog, .modalClose').click(function(){
    $('.modalDialog')
        .animate({opacity:"0.0"}, 300, function(){
            $('.modalDialog').css({display:'none'});
        })
});

$('.modalContent').click(function(e){
    e.stopPropagation();
});