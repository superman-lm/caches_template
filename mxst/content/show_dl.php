<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
<meta name="keywords" content="<?php echo $SEO['keyword'];?>" />
<meta name="description" content="<?php echo $SEO['description'];?>" />

<link href="<?php echo CSS_PATH;?>downdefault.css" rel="stylesheet" type="text/css">
<link href="<?php echo CSS_PATH;?>resource.css" rel="stylesheet" type="text/css">
<!--<link href="../../../../statics/css/downdefault.css" rel="stylesheet" type="text/css">
<link href="../../../../statics/css/resource.css" rel="stylesheet" type="text/css">-->
</head>
<body>
<div class="search">
<div class="logo"><a href="/" title="高考网"><img src="<?php echo IMG_PATH;?>zzzsimgs/logo.jpg"></a></div>
<div class="user"><a href="/" title="高考网首页">高考网</a> > <?php echo catpos($catid);?><!--<a href="#" title="高考试题库，我的高考我做主">高考试题库</a> > <a href="/l.php" title="全国名校试题列表">试题大全</a>--></div>
<form id="search" name="search" action="http://sou.gkstk.com/" method="get" class=form><input type="text" class="inp" name="word" id="word" value="安徽省皖考数学理试题（WORD解析版）" /><input type="submit" value="搜索" class="btn" /></form>
</div>
<div class=border></div>
<div>
<h1 class="doc"><?php echo $title;?></h1>
<p class="summary">
<span id="summary">会员您好，本站资料需要登录后才能下载！<a href="/index.php?m=member&c=index&a=login">会员登录</a> <a href="/index.php?m=member&c=index&a=register&siteid=1">免费注册</a><!-- 放到桌面--></span>
</p>
</div>
<div class="main" id="main">
<div class="left">
<div class="intro pbg" style="border-top:2px solid #699407">
<strong>试卷说明：</strong>
<div class="zy">
<table width="100%">
<tr>
<td width="40"><b>状态:  </b></td>
<td><a name="elite" class="elite1"><?php echo $stsm;?></a></td>
</tr>
<tr>
<td valign="top"><b>摘要:  </b></td>
<td>文档属性: <u><?php echo $filesize;?></u> <u id="format"><?php echo $version;?></u><br /><!--投稿会员：<a href="#" title="gkstk168个人专题">gkstk168</a>（已授权）<br />-->考试地区: <a href="#" title="进入全国通用高考分站"><?php echo $area_fl;?></a> <a href="#" title="高考试题库">高考试题库</a></td>
</tr>
<tr>
<td valign="top"><b>分类:  </b></td>
<td><?php echo $banben2;?> <?php echo $xueke_fl;?> <?php echo $leibie;?> <?php echo $nianji_fl;?> <?php echo $zhuti2;?> </td>
</tr><tr>
<td><b>时间:  </b></td>
<td><?php echo $inputtime;?> 上传 | <?php echo $updatetime;?> 审核</td>
</tr>
<?php if($zhengtao) { ?>
<tr>
<td valign="top"><b>成套: </b></td>
<td><a href="#" title="<?php echo $zhengtao;?>"><?php echo $zhengtao;?> </a></td>
</tr>
<?php } ?>
<tr>
<td valign="top"><b>Tags:  </b></td>
<td><u><?php echo $area_fl;?></u> <u><?php echo $banben2;?></u> <u><?php echo $xueke_fl;?></u> <u><?php echo $leibie;?></u> <u><?php echo $nianji_fl;?></u> <u><?php echo $zhuti2;?></u> <u><?php echo $banbie;?></u>  </td>
</tr>
<tr>
<td valign="top"><b>互动:  </b></td>
<td><a href="#" style="color:#f00">立即投稿</a> <a href="#" onClick="Send_Report(6857580)">报告错误</a> <a href="#learn">加入讨论</a></td>
</tr>
<tr>
<td valign="top"><b>预览  </b></td>
<td id="login">本文档支持免费预览。</td>
</tr>

</table>
</div>
<h5 class="tit">下载收费:  <a style="color:#F00"> <?php echo $readpoint;?> </a><span style="font-weight:300;"> 点 </span></h5>
 <h5 class="tit">下载地址</h5>
<div class="down_address divl wrap">
<ul class="l xz_a wrap blue jl_xzwzm">

			<?php $n=1;if(is_array($downfile)) foreach($downfile AS $r) { ?>
	        	<li><?php echo $r;?></li>
			<?php $n++;}unset($n); ?>
			<?php $n=1;if(is_array($downfiles)) foreach($downfiles AS $r) { ?>
	        	<li>
                <?php echo $title;?>
                </li>
			<?php $n++;}unset($n); ?>			
</ul>
<div class="url" style="text-align:center;">
<p  style="text-align: left; padding-left:92px;">
<a href="<?php $n=1;if(is_array($downfiles)) foreach($downfiles AS $r) { ?>
<?php echo preg_replace("/<a href='(.*)'(.*)<\/a>/iUs",'\\1',$r)?>
<?php $n++;}unset($n); ?>"
 title="<?php echo $title;?>" ><img src="<?php echo IMG_PATH;?>zzzsimgs/paper.gif">
</a> <a href=""><img src="<?php echo IMG_PATH;?>zzzsimgs/sczy.gif"></a>
</p>
<table style="width:400px;padding-top: 10px" cellspacing="0" cellpadding="0">
<tbody><tr>
<td><a id="goodarea" href="javascript:void(0)" onclick="setgood(6950012)" class="good"><i><em style="width:100%"></em></i><span>100% (100)</span></a></td>
<td><a id="badarea" href="javascript:void(0)" onclick="setbad(6950012)" class="bad"><i><em style="width:0%"></em></i><span>0% (0)</span></a></td>

</tr>
</tbody></table></div>
        <div class="ad"><script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=11"></script></div>

<div class="line"></div>

<div id="_info">以下为<?php echo $title;?>文本内容，如需完整资源请下载。</div>
<pre class="paper" id="paper" name="6857580">
<?php echo $content;?>
</pre>
</div>
</div>
<div class="blank"></div>
<div class="intro pbg">
<?php if($allow_comment && module_exists('comment')) { ?>
   <iframe src="<?php echo APP_PATH;?>index.php?m=comment&c=index&a=init&commentid=<?php echo id_encode("content_$catid",$id,$siteid);?>&iframe=1" width="100%" height="100%" id="comment_iframe" frameborder="0" scrolling="no"></iframe>
	<?php } ?>
</div>

</div>

<div class=right>
<div class="rank"><img src="/statics/css/imgs/pic08.jpg"></div>
<strong id="xgzy">相关资料</strong>
<ul id="rht">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f3aa3dacde57ed7763d00d4c9474b547&action=relation&relation=%24relation&catid=%24catid&num=10&keywords=%24rs%5Bkeywords%5D\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'relation')) {$data = $content_tag->relation(array('relation'=>$relation,'catid'=>$catid,'keywords'=>$rs[keywords],'limit'=>'10',));}?>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
<li class="doc"><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><img src="<?php echo thumb($r['thumb'],109, 154);?>" alt="<?php echo $r['title'];?>" /></a>
<h5>
<span class="doc"></span>
<a href="<?php echo $r['url'];?>" target="_blank" title="<?php echo $r['title'];?>" ><?php echo $r['title'];?></a>
</h5><p><?php echo str_cut($r[description],200,'....');?></p>
</li>
<?php $n++;}unset($n); ?>
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
</ul>
</div>
</div>
<div class="mt10"></div>
<script type="text/javascript"> 
$(function(){
	new slide("#main-slide","cur",310,260,1);//焦点图
	new SwapTab(".SwapTab","span",".tab-content","ul","fb");//排行TAB
})
</script>

<div class="mt10"></div>
<div class="ddkflj">
<div class=border></div>
<div class="bottm area">
  <p><a href="#">关于网站</a> | <a href="#">联系我们</a> |  <a href="#">免责声明</a> | <a href="#">新手上路</a> | <a href="#">诚聘英才</a> | <a href="#">合作单位</a> | <a href="#">免费加盟</a> | <a href="#">广告合作</a></p>
  <p>Copyright @ 2006-2013 750gk.com　版权所有 　京ICP备11029505号</p>
  <p>This page is cached at 15:18:56</p>
</div>
</div>
<!--底部结束-->
 <style>
.ddkflj{ overflow:hidden;  width:100%; padding-top:20px;}
.area {margin: 0 auto;font-size:12px;width: 960px;overflow: hidden;line-height:24px;color:#666;}
.bottm{text-align:center; padding-top:10px;}
.bottm a{color: #444;text-decoration:none;}
.bottm a:hover {text-decoration: underline;color: #1E50A2;}
.bottom_b_l {width: 380px;margin-left: 15px;}
</style>
</body>
</html>