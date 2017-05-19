/**
 * Created by Administrator on 2017/2/8.
 */

$("#title").keyup(function () {
    var len = $("#title").val().length;
    $("#title").siblings('span').text(len + '/15');
});

$("#author").keyup(function () {
    var len = $("#author").val().length;
    $("#author").siblings('span').text(len + '/15');
});
$("#content").keyup(function () {
    var len = $("#content").val().length;
    $("#content").siblings('span').text(len + '/300');
});