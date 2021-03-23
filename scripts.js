$(document).ready(function(){
    $('#icon').click(function(){
        $('ul').toggleClass('show');
    })
  
    
});


$(document).on('click','ul li',function(){
    $(this).addClass('active').siblings().removeClass('active')
  });


$(document).ready(function(){
    var scrollink = $('.scroll');
    //Smooth scrolling
    // scrollink.click(function(e){
    //     e.preventDefault();
    //     $('body,html').animate({
    //         scrollTop:$(this.hash).offset().top
    //     },1000);
    // })
    //Active link switching
$(window).scroll(function(){
    var scrollbarLocation=$(this).scrollTop();
    scrollink.each(function(){
        var sectionOffset = $(this.hash).offset().top;
        if(sectionOffset<=scrollbarLocation){
            console.log(scrollbarLocation);
            $(this).parent().addClass('active');
            $(this).parent().siblings().removeClass('active');    
        }
    })
})
})
