$(document).ready(function(){
    $('#nav-list li a').click(function(){
        $('li a').removeClass("active");
        $(this).addClass("active");
    });
});

$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        425:{
            items:2
        },
        600:{
            items:3
        },
        800:{
            items:4
        },
        1000:{
            items:5
        }
    }
})

$(document).ready(function(){
    var scrollink = $('.scroll');

    //Smooth scrolling
    scrollink.click(function(e){
        e.preventDefault();
        $('body,html').animate({
            scrollTop:$(this.hash).offset().top
        },1000);
    })
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

