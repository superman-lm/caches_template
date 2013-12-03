<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<base target="_blank" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<link rel="shortcut icon" href="favicon.ico" />
<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
<meta name="keywords" content="<?php echo $SEO['keyword'];?>">
<meta name="description" content="<?php echo $SEO['description'];?>">
<link href="<?php echo CSS_PATH;?>reset.css" rel="stylesheet" type="text/css" />
<link href="<?php echo CSS_PATH;?>default_blue.css" rel="stylesheet" type="text/css" />
<link href="<?php echo CSS_PATH;?>indexstyle.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.min.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.sgallery.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>search_common.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>index.js"></script>
<link href="<?php echo CSS_PATH;?>dialog.css" rel="stylesheet" type="text/css" />
 
<script language="javascript" type="text/javascript" src="<?php echo JS_PATH;?>dialog.js"></script>

</head>
<body>
<!--<div class="body-top">
    <div class="content">
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2e3bec5eab254972ef7678fb28fb15b9&action=position&posid=9&order=id&num=10&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('posid'=>'9','order'=>'id',)).'2e3bec5eab254972ef7678fb28fb15b9');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'9','order'=>'id','limit'=>'10',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
    		<div id="announ">
                 <ul>
                 <?php $n=1; if(is_array($data)) foreach($data AS $k => $v) { ?>
                      <li><a href="<?php echo $v['url'];?>"><?php echo $v['title'];?></a></li>
                      <?php $n++;}unset($n); ?>
                 </ul>
            </div>
     <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
	 <?php echo runhook('glogal_header')?>
<script type="text/javascript">
$(function(){
	startmarquee('announ',22,1,500,3000);
})
</script>
            <div class="login lh24 blue"><a href="<?php echo APP_PATH;?>index.php?m=content&c=rss&siteid=<?php echo get_siteid();?>" class="rss ib">rss</a><span class="rt"><script type="text/javascript">document.write('<iframe src="<?php echo APP_PATH;?>index.php?m=member&c=index&a=mini&forward='+encodeURIComponent(location.href)+'&siteid=<?php echo get_siteid();?>" allowTransparency="true"  width="500" height="24" frameborder="0" scrolling="no"></iframe>')</script></span></div>
    </div>
</div>
<div class="header">
	<div class="logo"><a href="<?php echo siteurl($siteid);?>/"><img src="<?php echo IMG_PATH;?>v9/logo.jpg" /></a></div>

    <div class="search">
    	<div class="tab" id="search">
			<?php $j=0?>
			<?php $search_model = getcache('search_model_'.$siteid, 'search');?>
			<?php $n=1;if(is_array($search_model)) foreach($search_model AS $k=>$v) { ?>
			<?php $j++;?>
				<a href="javascript:;" onclick="setmodel(<?php echo $v['typeid'];?>, $(this));" style="outline:medium none;" hidefocus="true" <?php if($j==1 && $typeid=$v['typeid']) { ?> class="on" <?php } ?>><?php echo $v['name'];?></a><?php if($j != count($search_model)) { ?><span> | </span><?php } ?>
			<?php $n++;}unset($n); ?>
			<?php unset($j);?>
		</div>

        <div class="bd">
            <form action="<?php echo APP_PATH;?>index.php" method="get" target="_blank">
				<input type="hidden" name="m" value="search"/>
				<input type="hidden" name="c" value="index"/>
				<input type="hidden" name="a" value="init"/>
				<input type="hidden" name="typeid" value="<?php echo $typeid;?>" id="typeid"/>
				<input type="hidden" name="siteid" value="<?php echo $siteid;?>" id="siteid"/>
                <input type="text" class="text" name="q" id="q"/><input type="submit" value="搜 索" class="button" />
            </form>
        </div>
    </div>

    <div class="banner"><script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=1"></script></div>
    <div class="bk3"></div>
    <div class="nav-bar">
    	<map>
    	 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b43f1459ac702900c8d44c91a5e796dd&action=category&catid=0&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?> 
        	<ul class="nav-site">
			<li><a href="<?php echo siteurl($siteid);?>"><span>首页</span></a></li>
			<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
			<li class="line">|</li>
			<li><a href="<?php echo $r['url'];?>"><span><?php echo $r['catname'];?></span></a></li>
			<?php $n++;}unset($n); ?>
            </ul>
         <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		<?php echo runhook('glogal_menu')?>
        </map>
    </div> 
	
	<?php if($top_parentid) { ?>
    <div class="subnav">
		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=894824ec88c3701696ad9d879ede6b1d&action=category&catid=%24top_parentid&num=15&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$top_parentid,'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'15',));}?>
			<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
			<a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a><span> | </span>
			<?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		<a href="<?php echo APP_PATH;?>index.php?m=video&c=index&a=album">视频专辑</a> <span> | </span>
    	<?php if($modelid) { ?><a href="<?php echo APP_PATH;?>index.php?m=content&c=search&catid=<?php echo $catid;?>">搜索</a><?php } ?>
    </div>
	<?php } ?>
</div>
</div>-->
<div class="top">
  <div class="top_l area">
    <div class="loginBar fr"><a href="#" class="none">返回首页</a><a href="#">博客官方</a> <a href="#">联系我们</a><span><a href="http://wpa.qq.com/msgrd?v=3&uin=1147691117&site=qq&menu=yes">立即在线沟通</a></span></div>
 </div>
</div>
<div class="Search area">
  <div class="search_l fl">
    <div class="logo_l fl"><a href="index.html"><img src="<?php echo IMG_PATH;?>zzzsimgs/logo.jpg" /></a></div>
    <div class="logo_r fl">
       <span><img src="<?php echo IMG_PATH;?>zzzsimgs/Sina.jpg" /><a href="#">中高考首选。</a></span>
       <p>最近更新：<em>2376</em> 昨天：<em>2134</em> 本周：<em>13308</em> 总量：<em>3313878</em></p>
     </div>
  </div>
  <div class="search_r fr">
    <div class="search_form">
      <form action="index.php" method="get">
				<input type="hidden" name="m" value="search">
				<input type="hidden" name="c" value="index">
				<input type="hidden" name="a" value="init">
				<input type="hidden" name="typeid" value="63" id="typeid">
				<input type="hidden" name="siteid" value="2" id="siteid">
         <input name="q"  id="q" type="text" class="search_input fl" onBlur="if (value ==''){value=''}" onClick="if(this.value!='')this.value=''" value="">
         <input type="submit" class="search_btn fl"  value="搜索">
      </form>
    </div>
  </div>
</div>
<!--头部结束-->
<div class="mt10"></div>
<!--导航开始-->
<div class="Nav area">
  <ul>

    <li><a href="/index.php?m=content&c=index&a=lists&catid=177&area_fl=北京">北京</a> 
<a href="/index.php?m=content&c=index&a=lists&catid=177&area_fl=天津">天津</a> <a href="/index.php?m=content&c=index&a=lists&catid=177&area_fl=上海">上海</a> <a href="/index.php?m=content&c=index&a=lists&catid=177&area_fl=重庆">重庆</a> |</li>
    <li><a href="/index.php?m=content&c=index&a=lists&catid=177&area_fl=河北">河北</a> <a href="/index.php?m=content&c=index&a=lists&catid=177&area_fl=山西">山西</a> <a href="/index.php?m=content&c=index&a=lists&catid=177&area_fl=内蒙">内蒙 </a>|</li>
    <li><a href="/index.php?m=content&c=index&a=lists&catid=177&area_fl=黑龙江">黑龙江</a> <a href="/index.php?m=content&c=index&a=lists&catid=177&area_fl=吉林">吉林</a><a href="/index.php?m=content&c=index&a=lists&catid=177&area_fl=辽宁"> 辽宁 </a>|</li>
    <li><a href="/index.php?m=content&c=index&a=lists&catid=177&area_fl=江苏">江苏</a> <a href="/index.php?m=content&c=index&a=lists&catid=177&area_fl=浙江">浙江</a> <a href="/index.php?m=content&c=index&a=lists&catid=177&area_fl=安徽">安徽 </a> <a href="/index.php?m=content&c=index&a=lists&catid=177&area_fl=福建">福建</a> <a href="/index.php?m=content&c=index&a=lists&catid=177&area_fl=江西">江西</a> <a href="/index.php?m=content&c=index&a=lists&catid=177&area_fl=山东">山东</a>|</li>
    <li><a href="/index.php?m=content&c=index&a=lists&catid=177&area_fl=广东">广东</a> <a href="/index.php?m=content&c=index&a=lists&catid=177&area_fl=海">海南</a> |</li>
    <li><a href="/index.php?m=content&c=index&a=lists&catid=177&area_fl=河南">河南</a> <a href="/index.php?m=content&c=index&a=lists&catid=177&area_fl=湖南">湖南</a> <a href="/index.php?m=content&c=index&a=lists&catid=177&area_fl=湖北">湖北</a> |</li>
    <li><a href="/index.php?m=content&c=index&a=lists&catid=177&area_fl=四川">四川</a> <a href="/index.php?m=content&c=index&a=lists&catid=177&area_fl=云南">云南</a> <a href="/index.php?m=content&c=index&a=lists&catid=177&area_fl=广西">广西</a> <a href="/index.php?m=content&c=index&a=lists&catid=177&area_fl=陕西">陕西</a> <a href="/index.php?m=content&c=index&a=lists&catid=177&area_fl=甘肃">甘肃 </a> </li>
  </ul>
</div>
<div class="mt8"></div>
<div class="main_nav area">
    <div class="main_nav_t">
      <ul>
        <li><a href="http://mxst.qyzywz.com/">名校试题</a></li>
        <li><a href="/index.php?m=content&c=index&a=lists&catid=204">备课中心</a></li>
      
     <!--   <li><a href="#">具体科目管理中心</a></li>
        <li><a href="#">在线组卷功能</a></li>
        <li><a href="/index.php?m=content&c=index&a=lists&catid=177&leibie=试题&nianji_fl=高">初中试题</a></li>
        <li><a href="/index.php?m=content&c=index&a=lists&catid=177&leibie=试题&nianji_fl=初">高中试题</a></li>-->
      </ul>
      <span><a href="#">会员中心</a></span> </div>
    <div class="main_nav_b">
      <ul class="font">
        <li>高中</li>
        <li>初中</li>
      </ul>
      <ul class="tar">
        <li><a href="/index.php?m=content&c=index&a=lists&catid=177&xueke_fl=语文&nianji_fl=高中">语文</a></li>
        <li><a href="/index.php?m=content&c=index&a=lists&catid=177&xueke_fl=语文&nianji_fl=初中">语文</a></li>
      </ul>
      <ul class="tar">
        <li><a href="/index.php?m=content&c=index&a=lists&catid=177&xueke_fl=数学&nianji_fl=高中">数学</a></li>
        <li><a href="/index.php?m=content&c=index&a=lists&catid=177&xueke_fl=数学&nianji_fl=初中">数学</a></li>
      </ul>
      <ul class="tar">
        <li><a href="/index.php?m=content&c=index&a=lists&catid=177&xueke_fl=英语&nianji_fl=高中">英语</a></li>
        <li><a href="/index.php?m=content&c=index&a=lists&catid=177&xueke_fl=英语&nianji_fl=初中">英语</a></li>
      </ul>
      <ul class="tar">
        <li><a href="/index.php?m=content&c=index&a=lists&catid=177&xueke_fl=物理&nianji_fl=高中">物理</a></li>
        <li><a href="/index.php?m=content&c=index&a=lists&catid=177&xueke_fl=物理&nianji_fl=初中">物理</a></li>
      </ul>
      <ul class="tar">
        <li><a href="/index.php?m=content&c=index&a=lists&catid=177&xueke_fl=化学&nianji_fl=高中">化学</a></li>
        <li><a href="/index.php?m=content&c=index&a=lists&catid=177&xueke_fl=化学&nianji_fl=初中">化学</a></li>
      </ul>
      <ul class="tar">
        <li><a href="/index.php?m=content&c=index&a=lists&catid=177&xueke_fl=地理&nianji_fl=高中">地理</a></li>
        <li><a href="/index.php?m=content&c=index&a=lists&catid=177&xueke_fl=地理&nianji_fl=初中">地理</a></li>
      </ul>
      <ul class="tar">
        <li><a href="/index.php?m=content&c=index&a=lists&catid=177&xueke_fl=历史&nianji_fl=高中">历史</a></li>
        <li><a href="/index.php?m=content&c=index&a=lists&catid=177&xueke_fl=历史&nianji_fl=初中">历史</a></li>
      </ul>
      <ul class="clor">
        <li><a href="/index.php?m=content&c=index&a=lists&catid=177&xueke_fl=生物&nianji_fl=高中">生物</a></li>
        <li><a href="/index.php?m=content&c=index&a=lists&catid=177&xueke_fl=生物&nianji_fl=初中">生物</a></li>
      </ul>
      <ul class="tar">
        <li><a href="/index.php?m=content&c=index&a=lists&catid=177&xueke_fl=政治&nianji_fl=高中">政治</a></li>
        <li><a href="/index.php?m=content&c=index&a=lists&catid=177&xueke_fl=政治&nianji_fl=初中">政治</a></li>
      </ul>

      <ul class="tar">
        <li><a href="/index.php?m=content&c=index&a=lists&catid=204&leibie=试题&nianji_fl=高中">试题</a></li>
        <li><a href="/index.php?m=content&c=index&a=lists&catid=204&leibie=试题&nianji_fl=初中">试题</a></li>
      </ul>
      <ul class="tar">
        <li><a href="/index.php?m=content&c=index&a=lists&catid=204&leibie=教案&nianji_fl=高中">教案</a></li>
        <li><a href="/index.php?m=content&c=index&a=lists&catid=204&leibie=教案&nianji_fl=初中">教案</a></li>
      </ul>
      <ul class="tar">
        <li><a href="/index.php?m=content&c=index&a=lists&catid=177&stsm=精品&nianji_fl=高中">精品</a></li>
        <li><a href="/index.php?m=content&c=index&a=lists&catid=177&stsm=精品&nianji_fl=初中">精品</a></li>
      </ul>
      <ul class="tar">
        <li><a href="/index.php?m=content&c=index&a=lists&catid=204&leibie=课件&nianji_fl=高中">课件</a></li>
        <li><a href="/index.php?m=content&c=index&a=lists&catid=204&leibie=课件&nianji_fl=初中">课件</a></li>
      </ul>
      <ul class="tar">
        <li><a href="/index.php?m=content&c=index&a=lists&catid=204&leibie=论文&nianji_fl=高中">作文</a></li>
        <li><a href="/index.php?m=content&c=index&a=lists&catid=204&leibie=论文&nianji_fl=初中">作文</a></li>
      </ul>

  </div>
<div class="mt8"></div>
<div class="section area">
  <div class="sect_l fl">
    <h2 class="fl">初中专区</h2>
    <span class="fr"><a href="/index.php?m=content&c=index&a=lists&catid=177&leibie=试题&nianji_fl=初中">进入>></a></span> </div>
  
  <div class="sect_r fr">
    <h2 class="fl">高中专区</h2>
    <span class="fr"><a href="/index.php?m=content&c=index&a=lists&catid=177&leibie=试题&nianji_fl=高中">进入>></a></span></div>
</div>
<div class="mt8"></div>
<div class="collect area" style="display:none;">
  <div class="coll_l fl">
    <ul>
     <li><a href="#">2012年高考题下载</a></li>
     <li><a href="#">2013年高考题专区</a></li>
     <li><a href="#">历年高考英语听力</a></li>
    </ul>
    <ul>
     <li class="red"><a href="#">2012年高考题下载</a></li>
     <li><a href="#">2013年高考题专区</a></li>
     <li><a href="#">历年高考英语听力</a></li>
    </ul>
  </div>
  <div class="coll_a fl">
    <h2><a href="#">2013全国各地高考试题及答案发布</a><a href="#"> 作文点评</a></h2>
    <p><a href="#">[2013高考语文试题答案汇总]</a><a href="#">[2013高考数学试题答案汇总]</a></p>
    <h2><a href="#">2013高考题汇总：语文</a> <a href="#"> 数学</a> <a href="#">理综</a> <a href="#">文综</a> <a href="#">英语</a></h2>
    <p><a href="#">[2012年高考录取分数线公布]</a><a href="#">[2013全国重要考试精品解析]</a></p>
  </div>
  <div class="coll_r fr">
    <ul>
     <li><a href="#">2012年高考题下载</a></li>
     <li><a href="#">2013年高考题专区</a></li>
     <li><a href="#">历年高考英语听力</a></li>
    </ul>
    <ul>
     <li><a href="#">2012年高考题下载</a></li>
     <li><a href="#">2013年高考题专区</a></li>
     <li><a href="#">历年高考英语听力</a></li>
    </ul>
  </div>
</div>
<!--导航结束-->
<div class="mt10"></div>