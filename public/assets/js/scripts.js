
function ShowVideo() {
    menu_minus = new Image();
    menu_minus.src = "../image/img7.jpg";
    // console.log(document.getElementsByTagName('a')[0].attributes)
    var x = document.getElementById('toggleVideo').getAttribute("aria-expanded");
    if (x == "true")
    {
        document.getElementById("first").style.backgroundImage = 'url(' + menu_minus.src + ')';

    } else {
        document.getElementsByTagName("header")[0].style.backgroundImage = 'none';
    }
    // if (document.getElementById("toggleVideo").style.aria-expanded =i "false") {
    //     document.getElementById("first").style.backgroundImage = 'url(' + menu_minus.src + ')';
    //
    //
    // }else
    // if (document.getElementById("toggleVideo").style.aria-expanded = "true") {
    //
    //     // document.getElementsByTagName("header")[0].style.background = "#18191b";
    //     document.getElementsByTagName("header")[0].style.backgroundImage = 'none';
    //
    // }
   // else if (document.getElementById("toggleVideo").style.toggleVideo = "false") {
   //      document.getElementById("first").style.backgroundImage = 'url(' + menu_minus.src + ')';
   //  }
}


(function($) {
    "use strict";

    $('body').scrollspy({
        target: '.navbar-fixed-top',
        offset: 60
    });

    $('#topNav').affix({
        offset: {
            top: 200
        }
    });
    
    new WOW().init();
    
    $('a.page-scroll').bind('click', function(event) {
        var $ele = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($ele.attr('href')).offset().top -60)
        }, 1450, 'easeInOutExpo');
        event.preventDefault();
    });
    
    $('.navbar-collapse ul li a').click(function() {
        /* always close responsive nav after click */
        $('.navbar-toggle:visible').click();
    });

    $('#galleryModal').on('show.bs.modal', function (e) {
       $('#galleryImage').attr("src",$(e.relatedTarget).data("src"));
    });

})(jQuery);



// if(document.getElementById("toggleVideo").style.toggleVideo = "false"){
//     document.getElementById("first").style.backgroundImage = 'url(' + menu_minus.src + ')';
// }




