<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><div class="fontr area" style="display:none;">
  <div class="fontr_t">
    <span class="fl"><strong>合作伙伴:</strong></span>
    <ul>
     <li><img src="<?php echo IMG_PATH;?>zzzsimgs/fontr_pic.jpg" /></li>
      <li><img src="<?php echo IMG_PATH;?>zzzsimgs/fontr_pic.jpg" /></li>
      <li><img src="<?php echo IMG_PATH;?>zzzsimgs/fontr_pic.jpg" /></li>
      <li><img src="<?php echo IMG_PATH;?>zzzsimgs/fontr_pic.jpg" /></li>
      <li><img src="<?php echo IMG_PATH;?>zzzsimgs/fontr_pic.jpg" /></li>
    </ul>
  </div>
  <div class="fontr_b">
    <p>友情链接：<a href="#">公务员面试</a>  <a href="#">作文网</a> <a href="#">出国</a> <a href="#">在线英语听力室</a> <a href="#">外语教育网</a> <a href="#">高考</a> <a href="#">作文网</a> <a href="#">出国</a> <a href="#">在线英语听力室</a> <a href="#">外语教育网</a> <a href="#">高考</a><a href="#">腾讯高考</a> <a href="#">作文网</a> <a href="#">出国</a> <a href="#">在线英语听力室</a> <a href="#">外语教育网</a> <a href="#">高考</a>  <a href="#">作文网</a> <a href="#">出国</a> <a href="#">在线英语听力室</a> <a href="#">外语教育网</a> <a href="#">高考</a> <a href="#">作文网</a> <a href="#">出国</a> <a href="#">在线英语听力室</a> <a href="#">外语教育网</a> <a href="#">高考</a> <a href="#">更多链接>></a>
  </div></p>
</div>
<div class="mt10"></div>
<div class="bottom area">
  <div class="bottom_t"><a href="#">关于网站</a> | <a href="#">联系我们</a> | <a href="#">免责声明</a> | <a href="#">新手上路</a> | <a href="#">诚聘英才</a> | <a href="#">合作单位</a> | <a href="#">免费加盟</a> | <a href="#">广告合作</a></div>
   <div class="bottom_b" style="display:none;">
     <div class="bottom_b_l fl">
       <p>Copyright @ 2006-2012 750gk.com　版权所有 　京ICP备11029505号</p>
       <p><a href="#">学优高考网，每天发布最有价值的高考资料，向高考满分冲刺。</a></p>
       <p>京公安备:110106100076号　This page is cached at 15:18:56</p>
     </div>
     <div class="bottom_b_r fr"><img src="<?php echo IMG_PATH;?>zzzsimgs/bottom_lo.jpg" /></div>
   </div>
</div>
<!--底部结束-->
<script type="text/javascript">
$(function(){
	$(".picbig").each(function(i){
		var cur = $(this).find('.img-wrap').eq(0);
		var w = cur.width();
		var h = cur.height();
	   $(this).find('.img-wrap img').LoadImage(true, w, h,'<?php echo IMG_PATH;?>msg_img/loading.gif');
	});
})
</script>
</body>
</html>