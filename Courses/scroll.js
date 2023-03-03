$(document).ready(function(){
    var scrollLink = $('.scroll');

    // Smooth Scrolling
    scrollLink.click(function(e){
        e.preventDefault();
        $('body,html').animate({
            scrollTop: $(this.hash).offset().top
        }, 100 )
    });

    // Active link switching

    $(window).scroll(function(){
        var activeClass = $(this).scrollTop();
        
        scrollLink.each(function(){
            var sectionOffset = $(this.hash).offset().top

            if(sectionOffset <= activeClass){
                $(this).parent().addClass('active');
                $(this).parent().siblings().removeClass('active');
            }
        })
    })
})