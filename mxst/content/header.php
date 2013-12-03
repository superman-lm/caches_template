<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
<meta name="keywords" content="<?php echo $SEO['keyword'];?>">
<meta name="description" content="<?php echo $SEO['description'];?>">
<link href="<?php echo CSS_PATH;?>mxststlye.css" rel="stylesheet" type="text/css" />
<link href="<?php echo CSS_PATH;?>default_blue.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.min.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.sgallery.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>search_common.js"></script>
</head>
<body>

<div class="top">
  <div class="top_l area">
    <div class="loginBar fr"><a href="#" class="none">返回首页</a><a href="#">博客官方</a> <a href="#">联系我们</a><span><a href="#">立即在线沟通</a></span></div>
 </div>
</div>
<div class="secure_top area">
  <div class="secure_logo fl"><?php if($catid==177) { ?>
<img src="<?php echo IMG_PATH;?>zzzsimgs/elite_logo.jpg" />
<?php } ?>
<?php if($catid==204) { ?>
<img src="<?php echo IMG_PATH;?>zzzsimgs/bkzx_logo.jpg" />
<?php } ?></div>
  <div class="secure_sch fr"><img src="<?php echo IMG_PATH;?>zzzsimgs/elite_r.jpg" /></div>
  </div>
<div class="elite_nav area">
  <div class="elite_m1">
  <map>
    	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=8b67ffe034eb9eb231fcc13d3c550b6a&action=category&catid=0&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
    <ul>
      <li><a href="/" id="default">首页</a></li><!--<?php echo siteurl($siteid);?>-->
	  <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
      <li><a href="<?php echo $r['url'];?>" id="<?php echo $r['catid'];?>"><?php echo $r['catname'];?></a></li>	
	  <?php $n++;}unset($n); ?>
    </ul>
	<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
	</map>
  </div>
  <div class="elite_m2">
     <ul>
	 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=7634abeb2b7b153a570cc18446b812a5&sql=select+area_fl+from+v9_mxst_down+&num=40\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select area_fl from v9_mxst_down  LIMIT 40");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
       <li><?php $n=1;if(is_array($data)) foreach($data AS $r) { ?><a href="#"><?php echo $r['area_fl'];?></a> <?php $n++;}unset($n); ?></li>
	 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>  
     </ul>
  </div>
</div>
<!--头部结束-->
<div class="mb10"></div>