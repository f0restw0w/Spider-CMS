<div class="warp-footer"> <!-- 页脚 结束 -->
      <div class="marauto1">
        <div class="l footer-left">
            <h4>友情链接</h4>
            <div class="footer-link">
                <a href="http://app.305ol.com/" target="_blank">305在线·市场</a><a href="http://www.305ol.com/" target="_blank">305在线·影院</a><?php echo($c->get_flink($tpl));?>
            </div>
            <div class="f-img-link">
            
            </div>
        </div>
        <p class="line-t-25"></p>
        <span class="footer-info">
            <p class="line-t-15"></p>
            <!-- 版权标识开始 -->
            <!-- 如果取消了版权标识，AppCMS有权取消您的使用授权 -->
            <div class="l">&nbsp;&nbsp;&nbsp;&nbsp;Powered by <a href="" target="_blank" >深圳南山科技园 A-TEAM Studio</a> &copy; 2010-2013&nbsp;&nbsp;&nbsp;&nbsp;<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  申明：本站所有手机主题均由网站自由上传或由部份合作提供，如果有哪款手机主题下载包侵犯您版权，请联系我们网站邮箱，我们在24小时由删除！</div>
    <!-- 版权标识结束 -->
            <div class="r">邮箱：themeshow@126.com &nbsp;&nbsp;&nbsp;&nbsp;<?php echo('Processed in '.number_format(helper::getmicrotime()-$time_start, 2, '.', '').' MilliSeconds ');?>&nbsp;&nbsp;<?php if(defined('COUNT_CODE')) echo(COUNT_CODE); ?></div>
            <p class="line-t-25"></p>
        </span>
      </div>    
    </div><!-- 页脚 结束  -->
</div>
</div>
<div class="to-top"  style="display:none;"  >
	<a class="to-top-a" title="返回顶部"></a>
</div>

<script type="text/javascript">
	$(function(){
		$(window).scroll(function(){
				var scrolltop=$(this).scrollTop();
				scrolltop > 250 ? $('.to-top').show(): $('.to-top').hide();
				var top = $(window).height();
				$('.to-top').css({'top':scrolltop + top - 246});
			});
		$('.to-top').on('click',function(){
			if(!$('body').is(":animated"))
				$('html,body').animate({scrollTop: 0}, 500);
		});
	});
</script>
</body>
</html>
