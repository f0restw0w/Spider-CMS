        <!--相关推荐-->
        <div class="r body-right"><!-- 右侧主体内容 -->
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
        </div><!-- 右侧主体内容  结束 -->