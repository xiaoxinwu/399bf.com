<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=9" />
    <meta name="keywords" content="<?php echo $SEO['keyword'];?>">
    <meta name="description" content="<?php echo $SEO['description'];?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
    <!-- css start -->
    <link href="<?php echo CSS_PATH;?>bootstrap.css" rel="stylesheet">
    <link href="<?php echo CSS_PATH;?>font-awesome-3.0.css" rel="stylesheet">

    <link href="<?php echo CSS_PATH;?>base.css" rel="stylesheet">
    <link href="<?php echo CSS_PATH;?>main.css" rel="stylesheet">
    <?php if(isset($css) && is_array($css) && count($css)) { ?>
    <?php $n=1;if(is_array($css)) foreach($css AS $data) { ?>
    <link href="<?php echo CSS_PATH;?><?php echo $data;?>" rel="stylesheet">
    <?php $n++;}unset($n); ?>
    <?php } ?>
    <!-- css end -->
    <!-- 如果手机访问，跳转到m站 -->
    <script src="<?php echo JS_PATH;?>jump2m.js"></script>
    <!--[if lt IE 9]>
    <script src="<?php echo JS_PATH;?>selectivizr.js"></script>
    <script src="http://apps.bdimg.com/libs/html5shiv/3.7/html5shiv.min.js"></script>
    <script src="http://apps.bdimg.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!--header-->
<header class="header" id="header">
    <div class="container">
        <div class="row">
            <!--logo-->
            <a href="<?php echo APP_PATH;?>" class="logo">
                <img src="<?php echo IMG_PATH;?>logo.png">
            </a>
            <!-- logo -->

            <ul class="nav-sidebar">
                <li>
                    <a id="follow" href="#" class="gray">
                        <i class="icon-star"></i>
                        关注
                    </a>
                </li>
               <!-- <li>
                    <a href="#" class="gray">
                        <i class="icon-user"></i>
                        互动
                    </a>
                </li>
                <li>

                    <a href="<?php echo APP_PATH;?>u/login/" class="gray active">
                        <i class="icon-signout"></i>
                        登录
                    </a>
                </li>-->
                <li>
                    <form target="_blank" action="http://zhannei.baidu.com/cse/site">
                    <div class="search">
                        <i class="icon-search"></i>
                        <input type="text" name="q" class="input-search" placeholder="搜索">
                        <input type="hidden" name="cc" value="<?php echo rtrim(str_replace('http://www.', '', APP_PATH), '/');?>">
                    </div>
                    </form>
                </li>
            </ul>

            <!--nav-->
            <ul class="nar-bar clearfix">
                <li>
                    <a <?php if(isset($nav_id) && $nav_id == 1) { ?>class="active"<?php } ?> href="<?php echo APP_PATH;?>">首页</a>
                </li>
                <li data-action="nav-menu">
                    <a <?php if(isset($nav_id) && $nav_id == 3) { ?>class="active"<?php } ?> href="<?php echo APP_PATH;?>zqscore/">即时比分</a>
                    <ul class="children" style="display: none;">
                        <li><a href="<?php echo APP_PATH;?>zqscore/">足球即时比分</a></li>
                        <li><a href="<?php echo APP_PATH;?>lqscore/">篮球即时比分</a></li>
                    </ul>
                </li>
                <li data-action="nav-menu">
                    <a <?php if(isset($nav_id) && $nav_id == 5) { ?>class="active"<?php } ?> href="<?php echo APP_PATH;?>zqodds/">指数中心</a>
                    <ul class="children" style="display: none;">
                        <li><a href="<?php echo APP_PATH;?>zqodds/">足球赔率</a></li>
                        <li><a href="<?php echo APP_PATH;?>lqodds/">篮球赔率</a></li>
                    </ul>
                </li>
                <li data-action="nav-menu">
                    <a <?php if(isset($nav_id) && $nav_id == 6) { ?>class="active"<?php } ?> href="<?php echo APP_PATH;?>zqevent/">资料库</a>
                    <ul class="children" style="display: none;">
                        <li><a href="<?php echo APP_PATH;?>zqevent/">足球数据库</a></li>
                        <li><a href="<?php echo APP_PATH;?>lqevent/">篮球数据库</a></li>
                    </ul>
                </li>
                <li data-action="nav-menu">
                    <a <?php if(isset($nav_id) && $nav_id == 7) { ?>class="active"<?php } ?> href="<?php echo APP_PATH;?>zcfx/">足彩分析</a>
                    <ul class="children" style="display: none;">
                        <li><a href="<?php echo APP_PATH;?>ypfxf/">亚盘分析法</a></li>
                        <li><a href="<?php echo APP_PATH;?>opfxjq/">欧赔分析技巧</a></li>
                        <li><a href="<?php echo APP_PATH;?>ephyp/">欧赔和亚盘</a></li>
                        <li><a href="<?php echo APP_PATH;?>jczqfx/">竞彩足球分析</a></li>
                    </ul>
                </li>
                <li data-action="nav-menu">
                    <a <?php if(isset($nav_id) && $nav_id == 11) { ?>class="active"<?php } ?> href="<?php echo APP_PATH;?>zcyc/">足彩预测</a>
                    <ul class="children" style="display: none;">
                        <li><a href="<?php echo APP_PATH;?>jczqyc/">竞彩足球预测</a></li>
                        <li><a href="<?php echo APP_PATH;?>sfcyc/">胜负彩14场专家预测</a></li>
                    </ul>
                </li>
                <li data-action="nav-menu">
                    <a <?php if(isset($nav_id) && $nav_id == 12) { ?>class="active"<?php } ?> href="<?php echo APP_PATH;?>zctj/">足彩推荐</a>
                    <ul class="children" style="display: none;">
                        <li><a href="<?php echo APP_PATH;?>jrqdtj/">今日强胆推荐</a></li>
                        <li><a href="<?php echo APP_PATH;?>zcdcfx/">足彩单场分析</a></li>
                    </ul>
                </li>
                <li data-action="nav-menu">
                    <a <?php if(isset($nav_id) && $nav_id == 8) { ?>class="active"<?php } ?> href="<?php echo APP_PATH;?>wdls/">体坛资讯</a>
                    <ul class="children" style="display: none;">
                        <li><a href="<?php echo APP_PATH;?>wdls/">五大联赛</a></li>
                        <li><a href="<?php echo APP_PATH;?>cnzt/">中国足坛</a></li>
                        <li><a href="<?php echo APP_PATH;?>sjzt/">世界足坛</a></li>
                    </ul>
                </li>
                <li data-action="nav-menu">
                    <a <?php if(isset($nav_id) && $nav_id == 9) { ?>class="active"<?php } ?> href="<?php echo APP_PATH;?>zqbaobei/">体坛图库</a>
                    <ul class="children" style="display: none;">
                        <li><a href="<?php echo APP_PATH;?>zqbaobei/">足球宝贝</a></li>
                        <li><a href="<?php echo APP_PATH;?>lqbaobei/">篮球宝贝</a></li>
                        <li><a href="<?php echo APP_PATH;?>ttmt/">体坛美图</a></li>
                    </ul>
                </li>
            </ul>
            <!--nav end-->
        </div>
    </div>
</header>
<!--header end-->