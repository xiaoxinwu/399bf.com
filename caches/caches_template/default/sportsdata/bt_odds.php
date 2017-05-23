<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php $css = ['laydate-need.css', 'laydate.css','bt_odds.css'];?>
<?php $nav_id = 5;?>
<?php include template('content', 'header_score'); ?>

<div class="banner-wrap">
    <div class="shop">
        <div class="odds-title">
            <a href="<?php echo APP_PATH;?>zqodds/">足球赔率</a>
        </div>
        <div class="odds-title active">
            <a href="<?php echo APP_PATH;?>lqodds/">篮球赔率</a>
        </div>
        <div class="nav">
            <ul class="odds-nav">
                <li class="active"><a href="<?php echo APP_PATH;?>lqodds/">综合指数</a></li>
                <li><a href="<?php echo APP_PATH;?>lqoddseuro/">欧赔指数</a></li>
                <li><a href="<?php echo APP_PATH;?>lqoddsasia/">亚盘指数</a></li>
                <li><a href="<?php echo APP_PATH;?>lqoddsou/">大小球</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="choose">
    <div class="choose-time clearfix">
        <ul style="float: left;">
            <li class="<?php if($odds_status == 1) { ?>active<?php } ?>"><a href="<?php echo APP_PATH;?>lqodds/">即时指数</a></li>
            <li class="<?php if($odds_status == 2) { ?>active<?php } ?>"><a href="<?php echo APP_PATH;?>lqodds/?odds_status=2">已开赛</a></li>
            <li class="<?php if($odds_status == 3) { ?>active<?php } ?>"><a href="<?php echo APP_PATH;?>lqodds/?odds_status=3">历史</a></li>
            <li class="<?php if($odds_status == 4) { ?>active<?php } ?>"><a href="<?php echo APP_PATH;?>lqodds/?odds_status=4">早盘</a></li>
            <li>
                <div class="dropdown" style="display: inline-block;">
                    <button class="btn btn-control" data-toggle="modal" data-target="#game-modal" style="background-color: #fff;width: 90px;">
                        选择赛事
                        <i class="icon-angle-down"></i>
                    </button>
                </div>
            </li>
        </ul>
        <?php if(in_array($odds_status, array(3, 4)) ) { ?>
        <div id="date-wrap" class="search-date" >
            <form method="post" action="<?php echo APP_PATH;?>lqodds/">
                <input type="hidden" name="odds_status" value="<?php echo $odds_status;?>" />
                日期：<input id="<?php if($odds_status == 3) { ?>history<?php } else { ?>tomorrow<?php } ?>" name="date" value="<?php echo $date;?>" type="text" style="width: 145px;height: 26px;">
                <button type="submit" class="btn btn-warning btn-sm">查询</button>
            </form>
        </div>
        <?php } ?>
    </div>
    <div class="choose-company clearfix">
        <form method="post" action="<?php echo APP_PATH;?>lqodds/">
            <input type="hidden" name="dosubmit" value="1" />
            <input type="hidden" name="odds_status" value="<?php echo $odds_status;?>" />
            <input type="hidden" name="date" value="<?php echo $date;?>" />
            <ul style="float: left;">
                <?php $n=1; if(is_array($companies)) foreach($companies AS $cid => $c) { ?>
                <li class="<?php if($c[checked]) { ?>active<?php } ?>"><a href=""><?php echo $c['name'];?></a><input type="checkbox" style="display: none" name="companyid[]" value="<?php echo $cid;?>"></li>
                <?php $n++;}unset($n); ?>
            </ul>
            <a id="sure" class="sure">确定</a>

        </form>
    </div>
</div>
<div class="content">
    <div id="table-header" class="table-header-wrap">
        <table class="table-header">
            <tr class="bg-grey">
                <td width="132" rowspan="2">公司</td>
                <td width="270" colspan="3">亚盘</td>
                <td width="270" colspan="3">欧赔</td>
                <td width="270" colspan="3">大小对比</td>
                <td width="90" rowspan="2"></td>
            </tr>
            <tr class="bg-grey">
                <td>主赔</td>
                <td>盘口</td>
                <td>客赔</td>
                <td>主胜</td>
                <td>客胜</td>
                <td>返回率</td>
                <td>大球</td>
                <td>盘口</td>
                <td>小球</td>
            </tr>
        </table>
    </div>
    <div class="time"><i class="rili"></i><?php echo $date_text;?></div>
    <?php $n=1; if(is_array($live_games)) foreach($live_games AS $gameid => $game) { ?>
    <!--一条数据start-->
    <div class="data-container" data-competition="<?php echo $game['sclassid'];?>">
        <div class="competition-info">
            <i class="data-btn data-open"></i>
            <span class="ml30"><?php echo $game['sclassname_cn'];?>&nbsp;&nbsp;<?php echo date('H:i', $game[date]);?></span>
            <span class="red mr40"><?php echo $arr_status[$game['status']];?></span>
            <span class="ml40"><span class="red mr5"><?php if(!empty($game[homerank])) { ?>［<?php echo $game['homerank'];?>］<?php } ?></span><?php echo $game['homename_cn'];?></span>
            <span class="red mr20"><?php if(isset($game[homescore])) { ?><?php echo $game['homescore'];?><?php } ?>－<?php if(isset($game[guestscore])) { ?><?php echo $game['guestscore'];?><?php } ?></span>
            <span class="mrr40"><?php echo $game['guestname_cn'];?><span class="red ml5"><?php if(!empty($game[guestrank])) { ?>［<?php echo $game['guestrank'];?>］<?php } ?></span></span>
            <a target="_blank" href="<?php echo APP_PATH;?>schedule/<?php echo $gameid;?>/analyse/" class="analysis">析</a>
        </div>
        <div class="competition-data">
            <table>
                <?php $rowspan = true;?>
                <?php $n=1;if(is_array($game['odds'])) foreach($game['odds'] AS $r) { ?>
                <tr>
                    <td width="132"><?php echo $r['companyname'];?></td>
                    <td width="90"><?php echo $r['homeodds'];?></td>
                    <td width="90"><?php echo $r['letgoal'];?></td>
                    <td width="90"><?php echo $r['guestodds'];?></td>
                    <td width="90"><?php echo $r['homewin'];?></td>
                    <td width="90"><?php echo $r['guestwin'];?></td>
                    <td width="90"><?php echo $r['return'];?></td>
                    <td width="90"><?php echo $r['highodds'];?></td>
                    <td width="90"><?php echo $r['totalscore'];?></td>
                    <td width="90"><?php echo $r['lowodds'];?></td>
                    <?php if($rowspan) { ?>
                    <td width="90" rowspan="<?php echo count($game[odds]);?>">
                        <a href="<?php echo APP_PATH;?>schedule/<?php echo $gameid;?>/asia/" target="_blank">亚</a>
                        <a href="<?php echo APP_PATH;?>schedule/<?php echo $gameid;?>/ou/" target="_blank">大</a>
                        <a href="<?php echo APP_PATH;?>schedule/<?php echo $gameid;?>/euro/" target="_blank">欧</a>
                    </td>
                    <?php } ?>
                </tr>
                <?php $rowspan = false;?>
                <?php $n++;}unset($n); ?>
            </table>
        </div>
    </div>
    <!--一条数据end-->
    <?php $n++;}unset($n); ?>
</div>

<!--弹层-->
<div class="modal fade" id="game-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" >赛事选择</h4>
            </div>
            <div class="modal-body">
                <div class="dioLog-bd clearfix">
                    <?php $n=1;if(is_array($sclassidData)) foreach($sclassidData AS $r) { ?>
                    <div class="col-sm-3">
                        <label>
                            <input type="checkbox" name="competitionid[]" data-name="competition" value="<?php echo $r['sclassid'];?>">
                            <?php echo $r['name_s'];?>
                        </label>
                    </div>
                    <?php $n++;}unset($n); ?>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info checkAll" data-action="check-all" data-target="competition">全选</button>
                <button type="button" class="btn btn-info clearCheck" data-action="check-clear" data-target="competition">全不选</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                <button type="button" class="btn btn-primary" data-target="competition" data-action="submit" data-dismiss="modal">确定</button>
            </div>
        </div>
    </div>
</div>
<script>
    //指数状态
    var odds_status = <?php echo $odds_status;?>;
</script>
<?php $js = ['bt_odds.js','laydate.dev.js','date.js','fixed.js'];?>
<?php include template('content', 'footer'); ?>