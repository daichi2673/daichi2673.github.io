$(function() {
    /* レスポンシブメニューボタンのオンオフ */
    $('.nav-button').on('click',function(){
        if( $(this).hasClass('active') ){
            $(this).removeClass('active');
            $('.nav-wrap').addClass('close').removeClass('open');
        }else {
            $(this).addClass('active');
            $('.nav-wrap').addClass('open').removeClass('close'); 
        }
    });

    /* サイドバーアニメーション */
    $(".nav-list").each(function() {
        
        var index = $(".nav-list").index(this);

        $(this).hover(
            function() {
                $(".nav-cover img").eq(index).stop().animate( {
                    opacity : "0.8"  ,
                    left : 0
                },
                {
                    duration : 300
                });
            },
            function() {
                $(".nav-cover img").eq(index).stop().animate( {
                    opacity : 0 ,
                    left : "100%"
                },
                {
                    duration : 100
                });
            }
        );
    });

    /* モーダルウィンドウ */
    $(".works").click(function() {

        var index = $(".works").index(this);

        $("body").append('<div class="modal-bg"></div>');

        $(".modal-bg").fadeIn("slow");
        $(".modal-window").eq(index).fadeIn("slow");

        $(".modal-bg").click(function() {
            $(".modal-bg, .modal-window").fadeOut("slow", function() {
                $(".modal-bg").remove();
            });
        });

        $(".close-btn").click(function() {
            $(".modal-bg, .modal-window").fadeOut("slow", function() {
                $(".modal-bg").remove();
            });
        })

    });
});
