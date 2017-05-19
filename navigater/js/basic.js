/**
 * Created by Administrator on 2017/2/8.
 */
//插入固定在右边的悬浮按钮
$(function () {
//    $(".body-").append('<div class="fixed_box"><a href="/app/apply/" class="add-fixed">发布</a><!--<a href="/index/download" class="load-fixed">下载</a>--><a class="look_telephone"><div class="telephone_pop"><p></p><span></span></div></a><a class="to_top"></a></div>');
    var wWidth = $(window).width();
    var wHeight = $(window).height();
    var imgLeft = 0;
    var scrollTop = 0;
    if ($(this).scrollTop() > 200) {
        $(".fixed_box .to_top").show()
    } else {
        $(".fixed_box .to_top").hide()
    }
    $(window).scroll(function () {
        scrollTop = $(this).scrollTop()
        if ($(this).scrollTop() > 200) {
            $(".fixed_box .to_top").fadeIn()
        } else {
            $(".fixed_box .to_top").fadeOut()
        }
    })

    $(".fixed_box").css("bottom", "170px");
    if (wWidth < 980) {
        imgLeft = (wWidth - 980) - 140;
    } else {
        imgLeft = (wWidth - 980) / 2 - 140
    }
    $(".fixed_box").css("right", imgLeft);
    $(window).resize(function () {
        wWidth = $(window).width();
        wHeight = $(window).height();
        if (wWidth < 980) {
            imgLeft = (wWidth - 980) - 140;
        } else {
            imgLeft = (wWidth - 980) / 2 - 140;
        }
        $(".fixed_box").css("bottom", "170px");
        $(".fixed_box").css("right", imgLeft);
    })
    //二维码显示
    $(".look_telephone").hover(function () {
        $(".telephone_pop").stop(true, true).fadeIn();
    }, function () {
        $(".telephone_pop").stop(true, true).fadeOut();
    })
    //	回到顶部
    $(".to_top").click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 200);
    })
})