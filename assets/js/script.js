function confirmClick(src) { 
    if ($(this).attr('title')) {
        var question = 'Are you sure you want to ' + $(this).attr('title').toLowerCase() + '?';
    } else {
        var question = 'Are you sure you want to do this action?';
    }
    if ( confirm( question ) ) {
        document.location = src;
    } else {
        return false;
    }
}

$(function(){
    $("#sys_slide_home").owlCarousel({
        items:1,
        loop:true,
        nav:false,
        autoplayTimeout:3000,
        dots:true,
        margin:10,
        autoplay:true,
        responsive:{
            767:{
                mergeFit:true
            },
            1024:{
                mergeFit:false
            },
            480:{
                mergeFit:true
            },
            320:{
                mergeFit:true
            }
        }
    });
    $('#hot_slide_home').owlCarousel({
        items:6,
        loop:true,
        nav:true,
        dots:false,
        margin:10,
        merge:true,
        autoplay:true,
        autoWidth:true,
        responsive:{
            767:{
                mergeFit:true,
                items:4
            },
            979:{
                mergeFit:false,
                items:6
            },
            480:{
                mergeFit:true,
                items:3
            },
            320:{
                mergeFit:true,
                items:3
            },
            0:{
                mergeFit:true,
                items:3
            }
        }
    });

    $('.video_bl').owlCarousel({
        items:6,
        loop:true,
        nav:true,
        dots:false,
        margin:10,
        merge:true,
        autoplay:true,
        autoWidth:true,
        responsive:{
            767:{
                mergeFit:true,
                items:4
            },
            979:{
                mergeFit:false,
                items:6
            },
            480:{
                mergeFit:true,
                items:3
            },
            320:{
                mergeFit:true,
                items:3
            },
            0:{
                mergeFit:true,
                items:3
            }
        }
    });

    $('.video_bl2').owlCarousel({
        items:6,
        loop:true,
        nav:true,
        autoplayTimeout:4000,
        dots:false,
        margin:10,
        merge:true,
        autoplay:true,
        responsive:{
            767:{
                mergeFit:true,
                items:5
            },
            1100:{
                mergeFit:false,
                items:6
            },
            1400:{
                mergeFit:false,
                items:7
            },
            480:{
                mergeFit:true,
                items:4
            },
            320:{
                mergeFit:true,
                items:3
            },
            0:{
                mergeFit:true,
                items:3
            }
        }
    });

    new mlPushMenu( document.getElementById( 'mp-menu' ), document.getElementById( 'trigger' ), {
        type : 'cover'
    } );
});


