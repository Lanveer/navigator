/**
 * Created by Administrator on 2017/2/7.
 */
//首页的选项卡
$(document).ready(function() {
    jQuery.tabchange = function(tabtit,tabcon) {
        $(tabtit+" li:first").addClass("tabs_active").show();
        $(tabcon+":first").show();

        $(tabtit + " li").click(function() {
            $(tabtit+" li").removeClass("tabs_active");
            $(this).addClass("tabs_active");
            $(tabcon).hide();
            var activeTab = $(this).find("a").attr("tab");
            $("#"+activeTab).fadeIn();
            return false;
        });

    };
    $.tabchange("#tabs",".tab_con");

});
