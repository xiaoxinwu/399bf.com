<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><footer class="footer">
    <div class="container">
        <div class="row footer-nav" style="text-align: left;">
            <div class="mrgB20">
                <b class="text-label">比分指数</b>
                <a href="<?php echo APP_PATH;?>zqscore/" target="_blank">即时比分网</a>
                <a href="<?php echo APP_PATH;?>zqwanchang/" target="_blank">足球比分网</a>
                <a href="<?php echo APP_PATH;?>zqsaicheng/" target="_blank">足球赛事</a>
                <a href="<?php echo APP_PATH;?>lqwanchang/" target="_blank">篮球比分网</a>
                <a href="<?php echo APP_PATH;?>lqsaicheng/" target="_blank">竞彩篮球</a>
                <a href="<?php echo APP_PATH;?>zqodds/" target="_blank">足球盘口</a>
                <a href="<?php echo APP_PATH;?>zqoddsasia/" target="_blank">亚盘</a>
                <a href="<?php echo APP_PATH;?>zqoddseuro/" target="_blank">欧赔</a>
                <a href="<?php echo APP_PATH;?>zqoddsou/" target="_blank">大小球</a>
            </div>
            <div class="mrgB20">
                <b class="text-label">情报资讯</b>
                <a href="<?php echo APP_PATH;?>jczqfx/" target="_blank">竞彩足球分析</a>
                <a href="<?php echo APP_PATH;?>ypfxf/" target="_blank">亚盘分析法</a>
                <a href="<?php echo APP_PATH;?>opfxjq/" target="_blank">欧赔分析技巧</a>
                <a href="<?php echo APP_PATH;?>ephyp/" target="_blank">欧赔和亚盘</a>
                <a href="<?php echo APP_PATH;?>jczqzmw/" target="_blank">竞彩足球怎么玩</a>
                <a href="<?php echo APP_PATH;?>jczqyc/" target="_blank">竞彩足球预测</a>
                <a href="<?php echo APP_PATH;?>sfcyc/" target="_blank">胜负彩14场专家预测</a>
            </div>
            <div class="mrgB20">
                <b class="text-label">体育美图</b>
                <a href="<?php echo APP_PATH;?>zqbbpic/" target="_blank">足球宝贝图片</a>
                <a href="<?php echo APP_PATH;?>zqbbbz/" target="_blank">足球宝贝壁纸</a>
                <a href="<?php echo APP_PATH;?>ycbaobei/" target="_blank">英超宝贝</a>
                <a href="<?php echo APP_PATH;?>nbabaobei/" target="_blank">NBA篮球宝贝</a>
                <a href="<?php echo APP_PATH;?>cbabaobei/" target="_blank">CBA篮球宝贝</a>
                <a href="<?php echo APP_PATH;?>lqbaobei/" target="_blank">篮球宝贝壁纸</a>
            </div>
            <div class="mrgB20">
                <b class="text-label">友情链接</b>
                <a href="http://www.13322.com" target="_blank">一比分</a>
                <a href="http://www.gooooal.com" target="_blank">雪缘网</a>
                <a href="http://www.aicai.com" target="_blank">新浪爱彩</a>
                <a href="http://www.onlinezhibo.com" target="_blank">百事通直播</a>
                <a href="http://zuqiu.winzq.com/" target="_blank">足球比分</a>
                <a href="http://www.39qq.cn" target="_blank">39娱乐资讯网网</a>
                <a href="http://www.26qq.cn" target="_blank">26qq体坛资讯</a>
                <a href="http://www.xz52.com" target="_blank">星洲财经</a>
                <a href="http://www.cnjiayu.net" target="_blank">佳瑜娱乐资讯</a>
            </div>

        </div>
        <div class="row copyright">
            <a href="<?php echo APP_PATH;?>" class="footer-logo" title="...">
                <img src="<?php echo IMG_PATH;?>logo.png">
            </a>
            <div class="footer-content">
                <a href="<?php echo APP_PATH;?>">足球竞猜网</a>|
                <a href="javascript:;">关于我们</a>|
                <a href="javascript:;">法律法规</a>|
                <a href="javascript:;">联系我们</a>|
                <a target="_blank" href="<?php echo APP_PATH;?>site.xml">网站地图</a>|
                <a href="#header">返回页顶</a>
                <br>
                闽ICP备16013563号-3
                <span class="blue">399彩迷网</span><span class="gray">© 2017 火冶网络. All rights reserved.</span>
            </div>
        </div>

    </div>
</footer>
<!--footer end-->
<script src="<?php echo JS_PATH;?>jquery-1.11.3.min.js"></script>
<script src="<?php echo JS_PATH;?>bootstrap.js"></script>
<script src="<?php echo JS_PATH;?>common.js"></script>
<script src="<?php echo JS_PATH;?>navication.js"></script>
<script>
    var isFollow=true;
    $("#follow").click(function(){
       if(isFollow){
           alert('已经收藏');
           $(this).css({color:'red'});
           isFollow=false;
       }else{
           alert('取消收藏');
           $(this).css({color:'#ccc'});
           isFollow=true;
       }
    });
</script>
<?php if(isset($js) && is_array($js) && count($js)) { ?>
<?php $n=1;if(is_array($js)) foreach($js AS $data) { ?>
<?php $src = strpos($data, 'http://') === false ? JS_PATH . $data : $data?>
<script src="<?php echo $src;?>"></script>
<?php $n++;}unset($n); ?>
<?php } ?>
<!--百度统计-->
<script src="<?php echo JS_PATH;?>hm.js"></script>
</body>
</html>