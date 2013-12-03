<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!--<div class="footer">
<p class="info">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e3d146232857be4579899ac97dbd2f7c&action=category&catid=1&num=15&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'1','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'15',));}?>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
<a href="<?php echo $r['url'];?>" target="_blank"><?php echo $r['catname'];?></a> |  
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
<a href="<?php echo APP_PATH;?>index.php?m=link" target="_blank">友情链接</a>
<br />
Powered by <strong><a href="http://www.phpcms.cn" target="_blank">PHPCMS</a></strong> <em><?php echo get_pc_version(1);?></em> &copy; 2011 <img src="<?php echo IMG_PATH;?>copyright.gif"/><?php echo tjcode();?><?php echo runhook('glogal_footer')?>
</p>
</div>
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
</html>-->
<div class="link area">
  <h2><a>友情链接</a></h2>
  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"link\" data=\"op=link&tag_md5=0f78b763d64bc584f076557d8f584de9&action=type_list&siteid=%24siteid&order=listorder+DESC&num=20&return=dat\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$link_tag = pc_base::load_app_class("link_tag", "link");if (method_exists($link_tag, 'type_list')) {$dat = $link_tag->type_list(array('siteid'=>$siteid,'order'=>'listorder DESC','limit'=>'20',));}?>
  <ul>
    <?php $n=1;if(is_array($dat)) foreach($dat AS $v) { ?>
    <li><a href="<?php echo $v['url'];?>"><?php echo $v['name'];?></a></li>
  <?php $n++;}unset($n); ?> 
  </ul>
  <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
</div> 
<div class="mt10"></div>
<div class="bottm area">
  <p><a href="#">关于网站</a> | <a href="#">联系我们</a> |  <a href="#">免责声明</a> | <a href="#">新手上路</a> | <a href="#">诚聘英才</a> | <a href="#">合作单位</a> | <a href="#">免费加盟</a> | <a href="#">广告合作</a></p>
  <p><!--Copyright @ 2006-2013 750gk.com　版权所有 　京ICP备11029505号--></p>
  <p>This page is cached at 15:18:56</p>
</div>
<!--底部结束-->
</body>
</html>