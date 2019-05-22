
jQuery(document).ready(function($){


    $('.owl-carousel.speaker-carousel1').owlCarousel({
        loop:false,
        items : 1,
        nav:true,
        navText:['<div class="arrow cydu text-right pr-3">\n' +
        '                            <i class="fa fa-angle-left" aria-hidden="true"></i>\n' +
        '                        </div>', '<div class="arrow tydu text-left pl-3">\n' +
        '                            <i class="fa fa-angle-right" aria-hidden="true"></i>\n' +
        '                        </div>'],
        responsive:{
            0:{
                items:1
            },
            480:{
                items:2
            },
            1024:{
                items:4
            }
        }
    });


    $('.owl-carousel.speaker-carousel2').owlCarousel({
        loop:false,
        items : 1,
        nav:true,
        navText:['<div class="arrow cydu text-right pr-3">\n' +
        '                            <i class="fa fa-angle-left" aria-hidden="true"></i>\n' +
        '                        </div>', '<div class="arrow tydu text-left pl-3">\n' +
        '                            <i class="fa fa-angle-right" aria-hidden="true"></i>\n' +
        '                        </div>'],
        responsive:{
            0:{
                items:1
            },
            480:{
                items:2
            },
            1024:{
                items:4
            }
        }
    });


    $('.owl-carousel.speaker-carousel3').owlCarousel({
        loop:false,
        items : 1,
        nav:true,
        navText:['<div class="arrow cydu text-right pr-3">\n' +
        '                            <i class="fa fa-angle-left" aria-hidden="true"></i>\n' +
        '                        </div>', '<div class="arrow tydu text-left pl-3">\n' +
        '                            <i class="fa fa-angle-right" aria-hidden="true"></i>\n' +
        '                        </div>'],
        responsive:{
            0:{
                items:1
            },
            480:{
                items:2
            },
            1024:{
                items:4
            }
        }
    });


    $('.owl-carousel.speaker-carousel4').owlCarousel({
        loop:false,
        items : 1,
        nav:true,
        navText:['<div class="arrow cydu text-right pr-3">\n' +
        '                            <i class="fa fa-angle-left" aria-hidden="true"></i>\n' +
        '                        </div>', '<div class="arrow tydu text-left pl-3">\n' +
        '                            <i class="fa fa-angle-right" aria-hidden="true"></i>\n' +
        '                        </div>'],
        responsive:{
            0:{
                items:1
            },
            480:{
                items:2
            },
            1024:{
                items:4
            }
        }
    });


    $('.owl-carousel.speaker-carousel5').owlCarousel({
        loop:false,
        items : 1,
        nav:true,
        navText:['<div class="arrow cydu text-right pr-3">\n' +
        '                            <i class="fa fa-angle-left" aria-hidden="true"></i>\n' +
        '                        </div>', '<div class="arrow tydu text-left pl-3">\n' +
        '                            <i class="fa fa-angle-right" aria-hidden="true"></i>\n' +
        '                        </div>'],
        responsive:{
            0:{
                items:1
            },
            480:{
                items:2
            },
            1024:{
                items:4
            }
        }
    });



    $(".owl-carousel.logo-carousel").owlCarousel({
        loop:true,
        nav:true,
        navText:['<div class="arrow cydu text-right pr-3">\n' +
        '                            <i class="fa fa-angle-left" aria-hidden="true"></i>\n' +
        '                        </div>', '<div class="arrow tydu text-left pl-3">\n' +
        '                            <i class="fa fa-angle-right" aria-hidden="true"></i>\n' +
        '                        </div>'],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            },
            1300:{
                items:5
            }
        }
    });


    $(".owl-carousel.organiz-carousel").owlCarousel({
        loop:false,
        nav:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            },
            1300:{
                items:4
            }
        }
    });


    $(window).on('scroll', function() {
        if ($(this).scrollTop() >= '300' ) {
            $(".header-wrpapper").addClass("header-sticky");
        }else {
            $(".header-wrpapper").removeClass("header-sticky");
        }
    });


    $(".anchor").on("click","a", function (event) {
        //отменяем стандартную обработку нажатия по ссылке
        event.preventDefault();

        //забираем идентификатор бока с атрибута href
        var id  = $(this).attr('href'),

            //узнаем высоту от начала страницы до блока на который ссылается якорь
            top = $(id).offset().top;

        //анимируем переход на расстояние - top за 1500 мс
        $('body,html').animate({scrollTop: top}, 1500);
    });


    //Инициализация всплывающей панели для
    //элементов веб-страницы, имеющих атрибут
    //data-toggle="popover"
    $('[data-toggle="popover"]').popover({
        //Установление направления отображения popover
        placement : 'bottom',

    });


    $("#third-section .no-gutters.align-items-center").hover(function(){
        //On Hover - Works on ios
        $(this).find(".hover-visible").show();
    }, function(){
        //Hover Off - Hover off doesn't seem to work on iOS
        $(this).find(".hover-visible").hide();
    })


    $(".speaker-item-wrapper").on("click", function () {

        var speakerFaceURL          = $(this).find(".speaker-face").attr("src");
        var speakerName             = $(this).find(".foto-name").html();
        var speakerPosada           = $(this).find(".foto-description").html();
        var speakerDosyagnennya     = $(this).find(".speaker-dosyagnennya").html();
        var speakerTopic            = $(this).find(".speaker-topic").html();

        $(".speaker-modal-img").attr("src", speakerFaceURL);
        $(".speaker-modal-name").html(speakerName);
        $(".speaker-modal-posada").html(speakerPosada);
        $(".speaker-modal-dosyagnennya").html(speakerDosyagnennya);
        $(".speaker-modal-topic").html(speakerTopic);
    })


    $(".ticket_info_button").on("click", function () {

        var ticketInfo             = $(this).find(".ticket_info").html();

        $(".addition_info").html(ticketInfo);
    })
});



