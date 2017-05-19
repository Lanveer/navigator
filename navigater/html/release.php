<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>发布</title>
    <link rel="stylesheet" href="../css/basic.css"/>
    <link rel="stylesheet" href="../css/release.css"/>
</head>
<body>
<div class="container">
    <!--header  begin-->
    <div class="header">
        <div class="logo"></div>
        <div class="menu">
            <ul>
                <li><a href="">首页</a></li>
                <li><a href="">排行榜</a></li>
                <li><a href="">小程序商店</a></li>
                <li><a href="">专题</a></li>
                <li><a href="">文章</a></li>
            </ul>
        </div>
        <div class="search">
            <input type="text" placeholder="搜索微信小程序"/>
        </div>
    </div>
    <!--header  over-->

    <!--nav-->
    <div class="title_common containers"><a href="/">首页</a><label></label><a>小程序商店</a><label></label><a>发布</a></div>
    <!--nav-->

    <!--发布内容开始-->
    <div class="content">
        <div class="title">发布小程序</div>
        <form action="post" class="release-content">
            <div class="item">
                <h2>小程序 &nbsp;&nbsp;名称</h2>
                <span>0/15</span>
                <input class="am-g" type="text" name="title" id="title" maxlength="15" placeholder="请输入小程序名称">
            </div>

            <div class="item">
                <h2>小程序 &nbsp;&nbsp;作者</h2>
                <span>0/15</span>
                <input class="am-g" type="text" name="author" id="author" maxlength="15" placeholder="请输入小程序作者">
            </div>


            <h2>小程序 &nbsp;&nbsp;ICON / 二维码<span>建议尺寸：不小于 400×400px，并且为正方形</span></h2>

            <div id="filelist1" class="files ">
                <div class="upload-box">
                    <input type="file" name="file" class="icon" accept="image/jpg,image/gif,image/png,image/jpeg">
                </div>
                <p>上传ICON</p>
            </div>

            <div id="filelist2" class="files ">
                <div class="upload-box">
                    <input type="file" name="file" class="icon erweima" accept="image/jpg,image/gif,image/png,image/jpeg">
                </div>
                <p>上传二维码</p>
            </div>

            <div id="filelist3" class="files ">
                <div class="upload-box">
                    <input type="file" name="file" class="icon gonngzgonghao" accept="image/jpg,image/gif,image/png,image/jpeg">
                </div>
                <p>上传公众号二维码</p>
            </div>



            <div class="item" style="clear:both;">
                <h2>小程序 &nbsp;&nbsp;介绍</h2>
                <span>0/15</span>
                <textarea class="am-g" name="content" id="content" maxlength="300" placeholder="请输入小程序介绍"></textarea>
            </div>
            <div class="item" style="clear:both;">
                <h2>小程序 &nbsp;&nbsp;分类</h2>
                <select name="" id="1" class="type" >
                    <option value="wef">234r43r43</option>
                </select>
                <select name="" id="2" class="type" >
                    <option value="wef">234r43r43</option>
                </select>
            </div>


            <div class="item" style="clear:both;">
                <h2>小程序 &nbsp;&nbsp;标签
                    <span>（选填）每个标签字数不超 6个字,多个用英文逗号隔开</span>
                </h2>
                <input class="" type="text" name="tags" id="tags" placeholder="请输入小程序标签">
            </div>


            <div class="item" style="clear:both;">
                <h2>联系QQ
                    <span>方便填写错误时，客服能与你联系哦</span>
                </h2>
                <input class="am-g" type="text" name="qq" id="qq" maxlength="15" placeholder="请填写联系QQ">

             </div>

            <div class="test clear">
                <h2 class="">验证码</h2>
                <input type="text" id="verify" name="verify" placeholder="请输入验证码">
                <div class="testimg"><img id="verifyImg" src="/cx/verify/t/1486544954.html" onclick="fleshVerify()" alt="点击刷新验证码"></div>
            </div>

            <div class="btns">
                <a id="save">保存并上传</a>
                <a class="cancel" onclick="history.back();">取消</a>
            </div>

        </form>
    </div>
    <!--发布内容结束-->




    <!--footer 开始-->
    <div class="foot">
        <div class="">
            <a href="">小程序商店</a>
            <label></label>
            <a href="">排行榜</a>
            <label></label>
            <a href="">文章</a>
        </div>
        <p>Copyright © 2017 <span>9.cn</span> 微信小程序商店 闽ICP备13005267号-3&nbsp;&nbsp;厦门云游数码科技有限公司 &nbsp;&nbsp;版权所有</p>
        <p>微信小程序商务合作联系QQ：3554537959</p>
    </div>
    <!--footer 结束-->

</div>


<!--侧边固定开始-->
<div class="fixed_box" style="bottom: 170px; right: 44.5px;">
    <a href="" class="add-fixed">发布</a>
    <a class="look_telephone">手机
        <div class="telephone_pop" style="display: none;">
            <p>手机访问</p>
            <span>扫一扫体验小程序</span>
        </div>
    </a>
    <a class="to_top"></a>
</div>
<!--侧边固定结束-->
</body>
<script src="http://libs.baidu.com/jquery/1.9.1/jquery.min.js"></script>
<script src="../js/release.js"></script>
<script src="../js/basic.js"></script>
</html>