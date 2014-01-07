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
			href="<?php echo SITE_PATH;?>templates/<?php echo TEMPLATE;?>/css/list.css"
			type="text/css" />
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
<div class="body-cent-boutique bor-sty bg-fff">
					<p class="line-t-10"></p>
					<!-- ========================================================================================================================== -->
					<link rel="shortcut icon" href="http://www.93yo.com/favicon.ico">
						<link rel="stylesheet" type="text/css" href="/css/Yoo.css">
					<script>
                var newTSelect = null;
                $(function () {
                    //对“.NEWTT”选择器的所有元素尽兴function函数处理
                    $("div  .NEWTT").each(function () {
                            if (newTSelect == null) { 
	                            newTSelect = $(this).attr("id");
    	                        $(this).attr("class", "NEWTT Select"); 
        	                	SetNewTT($(this).attr("id")); 
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
                    $("div ." + newTSelect.replace("A", "a")).css("display", "none");
                    $("div ." + id.replace("A", "a")).css("display", "inline");
                    }
            </script>
					<div class="Tabs">
						<a href="http://127.0.0.1/index.php?tpl=special_content&id=18" class="NEWTT" id="bout-content-A1">精品推荐</a>
						<a href="http://127.0.0.1/index.php?tpl=special_content&id=19" class="NEWTT" id="bout-content-A2">浪漫爱情</a> <a
							href="http://127.0.0.1/index.php?tpl=special_content&id=20" class="NEWTT" id="bout-content-A3">明星美女</a> <a
							href="http://www.93yo.com/#" class="NEWTT" id="TT2">另类个性</a> <a
							href="http://www.93yo.com/#" class="NEWTT" id="bout-content-A2">明星美女</a> <a
							href="http://www.93yo.com/#" class="NEWTT" id="TT4">手绘艺术</a> <a
							href="http://www.93yo.com/#" class="NEWTT" id="TT3">自然风光</a> <a
							href="http://www.93yo.com/#" class="NEWTT Select" id="TT60">世界名车</a>
						<a href="http://www.93yo.com/#" class="NEWTT" id="TT6">动物宠物</a>
					</div>

					<!-- ========================================================================================================================== -->
					<ul class="bout-content-a1" style="display: none;">
<!--精品推荐--><?php $a = $c->get_recommend(array('area_id'=>18,'pagesize'=>18,'count'=>0,'rewrite'=>SITE_REWRITEURL,'where'=>'(area_type=3)'));?>
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
<!-- 浪漫爱情--><?php $a = $c->get_recommend(array('area_id'=>19,'pagesize'=>18,'count'=>0,'rewrite'=>SITE_REWRITEURL,'where'=>'(area_type=3)'));?>
<ul class="bout-content-a2" style="display: none;">
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
<!-- 明星美女--><?php $a = $c->get_recommend(array('area_id'=>20,'pagesize'=>18,'count'=>0,'rewrite'=>SITE_REWRITEURL,'where'=>'(area_type=3)'));?>
<ul class="bout-content-a3" style="display: none;">
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

	<!-- 右侧主体内容 -->
			<div class="r body-right">
				<!--每日推荐-->
				<div class="center-warp">
					<div class="the-one">
						<div class="bor-sty cont">
							<div style="height:120px; overflow:hidden;margin-top:-5px"><img src="templates/tuzim/css/img/index_right/a3.gif"></div>
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

<?php require_once ('inc_foot.php');?>