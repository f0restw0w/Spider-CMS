<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!--IE Compatibilty start-->
<?php require_once ('IECompatiblity.php')?>
<!--IE Compatibilty end-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php if(defined('SEO_TITLE') && SEO_TITLE != ''){ echo SEO_TITLE;}else{echo SITE_NAME.' - 安卓手机游戏下载|安卓应用市场';}?></title>
<meta name="keywords"
	content="<?php if(defined('SEO_KEYWORDS')){ echo SEO_KEYWORDS;}?>">
	<meta name="description"
		content="<?php if(defined('SEO_DESCRIPTION')){echo SEO_DESCRIPTION;}?>">
		<script language="javascript" type="text/javascript"
			src="<?php echo SITE_PATH;?>templates/lib/jquery-1.7.1.min.js"></script>
		<link rel="stylesheet"
			href="<?php echo SITE_PATH;?>templates/<?php echo TEMPLATE;?>/css/style.css"
			type="text/css" />
		<script type="text/javascript"
			src="<?php echo SITE_PATH;?>templates/<?php echo TEMPLATE;?>/css/js/comm.js"></script>
		<script type="text/javascript"
			src="<?php echo SITE_PATH;?>templates/lib/nbspslider-1.1/jquery.nbspSlider.1.1.js"></script>
		<link
			href="<?php echo SITE_PATH;?>templates/lib/nbspslider-1.1/css/css.css"
			rel="stylesheet" type="text/css" />
		<script type="text/javascript">
    $(document).ready(function(){
        $("#index_top_left").nbspSlider({widths:'750px',heights:'200px',numBtnSty:"num",numBtnShow:1,speeds:500,delays:4000,preNexBtnShow:0});
    });
</script> <?php require_once ('inc_head.php')?>
<p class="line-t-10"></p>
		<div class="warp-content">
			<!-- 主体内容 开始 -->
			<div class="l body-left">
				<!-- 左侧主体内容 -->
				<div class="body-top-poster" id="index_top_left">
					<ul style="">
<?php $c->get_ad(16); ?>
</ul>
				</div>
				<p class="line-t-10"></p>
				<!--精品推荐--> <?php $a = $c->get_recommend(array('area_id'=>2,'pagesize'=>18,'count'=>0,'rewrite'=>SITE_REWRITEURL,'where'=>'(area_type=3  )'));//print_r($a['list'][0]);?>
<div class="body-cent-boutique bor-sty bg-fff">
					<p class="line-t-10"></p>
					<!-- <span class="title"><em><?php echo $a['title']; ?></em></span> -->
					<!-- ========================================================================================================================== -->
					<link rel="shortcut icon" href="http://www.93yo.com/favicon.ico">
						<link rel="stylesheet" type="text/css" href="/css/Yoo.css">
							<script src="/css/js/jquery.js" type="text/javascript"></script>
					
					
					<script>
                var newTSelect = null;
                $(function () {
                    //对“.NEWTT”选择器的所有元素尽兴function函数处理
                    $("div  .NEWTT").each(function () {
                        if (newTSelect == null) { 
                            newTSelect = $(this).attr("id");
                            $(this).attr("class", "NEWTT Select"); 
                        	//SetNewTT($(this).attr("id")); 
                            }
                        $(this).bind("mouseover", function () {
                            if (newTSelect == $(this).attr("id")) return;
                            SetNewTT($(this).attr("id"));
                            $("#" + newTSelect).attr("class", "NEWTT");
                            $(this).attr("class", "NEWTT Select"); 
                            newTSelect = $(this).attr("id");
                        });
                    }
                    );
                });
                function SetNewTT(id) {
                    $("div ." + newTSelect.replace("TT", "T")).css("display", "none");
                    //$("div ." + id.replace("a", "s")).css("display", "inline");
					$("div ."+id).css("display","inline");
                    }
            </script>
					<div class="Tabs">
						<a href="http://www.93yo.com/#" class="NEWTT" id="bout-content">浪漫爱情</a> 
						<a href="http://www.93yo.com/#" class="NEWTT" id="TT7">欧美潮流</a>
						<a href="http://www.93yo.com/#" class="NEWTT" id="TT38">另类个性</a> <a
							href="http://www.93yo.com/#" class="NEWTT" id="TT2">动漫游戏</a> <a
							href="http://www.93yo.com/#" class="NEWTT" id="TT8">明星美女</a> <a
							href="http://www.93yo.com/#" class="NEWTT" id="TT4">手绘艺术</a> <a
							href="http://www.93yo.com/#" class="NEWTT" id="TT3">自然风光</a> <a
							href="http://www.93yo.com/#" class="NEWTT Select" id="TT60">世界名车</a>
						<a href="http://www.93yo.com/#" class="NEWTT" id="TT6">动物宠物</a>
					</div>





					<!-- ========================================================================================================================== -->
					<ul class="bout-content" style="display: none;">
<?php if(!empty($a['list'])){ foreach($a['list'] as $k => $v){?>
	<li>
							<dl>
								<dt class="play-img">
									<a href="<?php echo $v['surl']?>"><img
										src="<?php echo $v['app_logo']; ?>" width="216" height="320"
										border="0" alt="<?php echo $v['app_title']; ?>"></a>
								</dt>
								<dd class="play-name"></dd>
								<dd class="play-type"></dd>
								<dd class="play-download" style="display: none;">
									<a href="<?php echo $v['surl']?>">&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $v['app_title']; ?>&nbsp&nbsp&nbsp&nbsp&nbsp下载：<font
										color="#005AB5"><?php echo $v['app_down'];?>&nbsp次</font></a>
								</dd>
							</dl>
						</li>
	<?php } }?>
</ul>
				</div>
			</div>
			<!-- 左侧主体内容  结束 -->


			<div class="r body-right">
				<!-- 右侧主体内容 -->
				<!--每日推荐-->
				<div class="center-warp">
					<div class="the-one">
						<div class="bor-sty cont">
							<p class="line-t-6"></p>
	<?php $a = $c->get_recommend(array('area_id'=>2,'pagesize'=>6,'count'=>0,'rewrite'=>SITE_REWRITEURL,'where'=>'(area_type=3  )'));//print_r($a['list'][0]);?>
<div class="body-cent-boutique bor-sty bg-fff">
								<ul class="bout-content-yizhou">
<?php if(!empty($a['list'])){ foreach($a['list'] as $k => $v){?>
	<li>
										<dl>
											<dt class="play-img">
												<a href="<?php echo $v['surl']?>"><img
													src="<?php echo $v['app_logo']; ?>" width="216"
													height="320" border="0"
													alt="<?php echo $v['app_title']; ?>"></a>
											</dt>
											<dd class="play-name"></dd>
											<dd class="play-type"></dd>
											<dd class="play-download" style="display: none;">
												<a href="<?php echo $v['surl']?>">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $v['app_title']; ?>&nbsp&nbsp&nbsp&nbsp&nbsp下载：<font
													color="#005AB5"><?php echo $v['app_down'];?>&nbsp次</font></a>
											</dd>
										</dl> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
									</li>
	<?php } }?>
</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- 右侧主体内容  结束 -->


			<p class="line-t-10"></p>
	<?php $a = $c->get_recommend(array('pagesize'=>9,'rewrite'=>SITE_REWRITEURL,'where'=>'(area_type=4 or area_type=3)'));//print_r($a);?>
<div class="bor-sty choiceness"><?php

foreach ( $a ['list'] as $k => $v ) {
	if ($k == 0) {
		if (empty ( $v ['area_logo'] )) {
			$v ['area_logo'] = SITE_PATH . "templates/" . TEMPLATE . "/css/img/default.jpg";
		}
		?>
<div class="l choice-left">
					<span class="title">专题精选</span>
					<div class="p-img">
						<a href="<?php echo $v['surl'];?>"><img
							src="<?php echo $v['area_logo'];?>" class="p-img" /></a>
					</div>
					<a class="c-name" href="<?php echo $v['surl'];?>"><?php echo $v['title'];?></a><br />
					<span class="c-info"><?php echo $v['area_html'];?></span>
				</div>
				<div class="r choice-right">
					<a class="more"
						href="<?php echo $c->url->encode('special_list', array('host' => '/','p' => 1));?>">更多>></a>
					<ul>
<?php }else{?>
	<!--专题精选-->
						<li><a href="<?php echo $v['surl'];?>" class="r-img"><img
								src="<?php echo $v['area_logo'];?>" border="0"
								alt="<?php echo $v['title'];?>"></a> <a class="p-name"
							href="<?php echo $v['surl'];?>"><?php echo $v['title'];?></a></li>
		<?php } }?>

</ul>
				</div>
			</div>
		<?php $a = $c->get_list(array('fields'=>'app_title,app_logo,app_id,last_cate_id','pagesize'=>100,'rewrite'=>SITE_REWRITEURL,'count'=>0));?>
<div class="newlist">
				<div class="title">最近更新</div>
				<ul>
<?php
foreach ( $a ['list'] as $b ) {
	echo ('<li><a href="' . $b ['surl'] . '" title=' . $b ['app_title'] . '><img src="' . $b ['app_logo'] . '" alt=' . $b ['app_title'] . '></a></li>');
}
?>
</ul>
				<div style="clear: both;"></div>
			</div>
		</div>
<!-- 主体内容 结束 -->


<p class="line-t-10"></p>

<?php require_once ('inc_foot.php');?>