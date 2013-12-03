<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<link href="<?php echo CSS_PATH;?>download.css" rel="stylesheet" type="text/css" />
<!--main-->
<!--<?php echo $_GET['area'];?>-->


<div class="main">
	<!--left_bar-->
	<div class="col-left" style="overflow:hidden; width:100%">
    <div class="crumbs"><a href="#">首页</a><span> > </span><?php echo catpos($catid);?></div>
    	<!--最新下载-->
    <div class="box mg_b10" style="overflow:hidden; width:100%">
        		<h5>最新下载</h5>
            <ul class="content news-photo">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f3a992326b5d68f80e9f99fee1be24fa&action=lists&catid=%24catid&num=8&thumb=1&order=id+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'thumb'=>'1','order'=>'id DESC','limit'=>'8',));}?>
			<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            	<li>
                    <div class="img-wrap">
                        <a href="<?php echo $r['url'];?>"><img src="<?php echo thumb($r[thumb],110,90);?>" width="110" height="90"></a>
                    </div>
                    <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" style="color:<?php echo $r['style'];?>"><?php echo str_cut($r[title],24,'');?></a>
                </li>
			<?php $n++;}unset($n); ?>	
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
        </div>
<?php $_where = " 1=1 "?>

<?php if($_GET["area_fl"] != "") { ?>
<?php $_where =  $_where." AND area_fl='" . $_GET["area_fl"]."' "?>
<?php } ?>

<?php if($_GET["xueke_fl"] != "") { ?>
<?php $_where = $_where." AND xueke_fl='" . $_GET["xueke_fl"]."' "?>
<?php } ?>
<?php if($_GET["zhuti2"] != "") { ?>
<?php $_where =  $_where." AND zhuti2='" . $_GET["zhuti2"]."' "?>
<?php } ?>
<?php if($_GET["nianji_fl"] == "高中") { ?>
	<?php $_where = $_where." AND nianji_fl like '%高%' "?>
<?php } else { ?>
    <?php if($_GET["nianji_fl"] == "初中") { ?>
	    <?php $_where = $_where." AND nianji_fl='七年级' "?>
    <?php } else { ?>
        <?php if($_GET["nianji_fl"] != "") { ?>
            <?php $_where = $_where." AND nianji_fl='" . $_GET["nianji_fl"]."' "?>
        <?php } ?>
<?php } ?>
<?php } ?>
<?php if($_GET["banben2"] != "") { ?>
<?php $_where = $_where." AND banben2='" . $_GET["banben2"]."' "?>
<?php } ?>
<?php if($_GET["banbie"] != "") { ?>
<?php $_where = $_where." AND banbie='" . $_GET["banbie"]."' "?>
<?php } ?>
<?php if($_GET["leibie"] == "试题") { ?>
<?php $_where = $_where." AND leibie='试题' "?>
<?php } ?>
<?php if($_GET["stsm"] != "") { ?>
<?php $_where = $_where." AND stsm like '".$_GET["stsm"]."%'"?>
<?php } ?>
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=27c6eb85b39db619955762fde2ef8152&action=lists&catid=%24catid&where=%24_where&num=15&order=id+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 15;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'where'=>$_where,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'where'=>$_where,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>


<div style="overflow:hidden; width:100%; margin-bottom:10px;">
 <div class="box boxsbg" style="float:left;width: 650px;">
		<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        	<dl class="down_list sysnews">
              <dt><h5><a target="_blank" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo $r['title'];?></a></h5></dt>
              <dd class="down_txt"><?php echo $r['description'];?></dd>
              <dd class="down_attribute align_r"><span class="icon_1">软件大小：<?php echo $r['filesize'];?></span><span class="icon_3">星级：<?php echo $r['stars'];?></span><span class="icon_4">更新时间：<?php echo date('Y-m-d',$r[inputtime]);?></span></dd>
            </dl>
		<?php $n++;}unset($n); ?>	
        	<!--pages-->
        <div class="text-c mg_t20" id="pages"><?php echo $pages;?></div>
	<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

        </div>
<div style="float:right;width: 289px; overflow:hidden;">

        <div class="box" style="margin-bottom:10px;">
            <h5 class="title-2">下载排行</h5>
            <ul class="content digg">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=0ad40a45ad075d8f47798a231e25aec2&action=hits&catid=%24catid&num=10&order=views+DESC&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('catid'=>$catid,'order'=>'views DESC',)).'0ad40a45ad075d8f47798a231e25aec2');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>$catid,'order'=>'views DESC','limit'=>'10',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<li><a href="<?php echo $r['url'];?>" target="_blank"><?php echo $r['title'];?></a></li>
				<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
        </div>
        <div class="box" style="margin-bottom:10px;">
            <h5 class="title-2">推荐下载</h5>
            <ul class="content digg">
            	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=8866cdad0485fb02880395c7104e353f&action=position&posid=10&order=listorder+DESC&num=10\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'10','order'=>'listorder DESC','limit'=>'10',));}?>
        	 	<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>        
                <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r[title],60,'');?></a></li>
               	<?php $n++;}unset($n); ?>  
             	<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
            </ul>
        </div><div class="brd mg_b10 mxstlby_gg"><script language="javascript" src="<?php echo APP_PATH;?>caches/poster_js/5.js"></script></div>
        </div>
        </div>
    </div>
    <!--right_bar-->
    <div class="col-auto">
    	<!--广告228x90-->
        
        <div class="bk10"></div>
        
    </div>
</div>
<div class="bk10"></div>
<?php include template("content","footer"); ?>