<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<link href="<?php echo CSS_PATH;?>download.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="/statics/js/tab.js"></script>
<script type="text/javascript">
    $(function () {
        //选中filter下的所有a标签，为其添加hover方法，该方法有两个参数，分别是鼠标移上和移开所执行的函数。
        $("#filter a").hover(
            function () {
                $(this).addClass("seling");
            },
            function () {
                $(this).removeClass("seling");
            }
        );


        //选中filter下所有的dt标签，并且为dt标签后面的第一个dd标签下的a标签添加样式seled。(感叹jquery的强大)
        $("#filter ul+li a").attr("class", "seled"); /*注意：这儿应该是设置(attr)样式，而不是添加样式(addClass)，
                                                      不然后面通过$("#filter a[class='seled']")访问不到class样式为seled的a标签。*/       

        //为filter下的所有a标签添加单击事件
        $("#filter a").click(function () {
            $(this).parents("ul").children("li").each(function () {
				//下面三种方式效果相同（第三种写法的内部就是调用了find()函数，所以，第二、三种方法是等价的。）
                //$(this).children("div").children("a").removeClass("seled");
				//$(this).find("a").removeClass("seled");
				$('a',this).removeClass("seled");
            });

            $(this).attr("class", "seled");

          
        });
       
    });

    function RetSelecteds() {
        var result = "";
        $("#filter a[class='seled']").each(function () {
            result += $(this).html()+"\n";
        });
        return result;
    }
</script>
<!--main-->
<!--<?php echo $_GET['area'];?>-->
<style>
.ny_wdjfb_a{ height:27px; width:100%;}
.ny_wdjfb_a li {float:left; text-align:center; display:block; cursor:pointer;}
.ny_wdjfb_a li a{ padding:2px 20px;}
.ny_wdjfb_a ul .hover a {color: #FFF;background:#09F;}
.ny_wdjfb_b{overflow:hidden;}
</style>

<div class="main">
	<!--left_bar-->
	<div class="col-left" style="overflow:hidden; width:100%; margin-bottom:10px;">
    <div class="crumbs"><a href="#">首页</a><span> > </span><?php echo catpos($catid);?></div>
    
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=2a51167be283007fe56c716127e1996c&sql=SELECT+distinct+leibie+FROM+%60v9_mxst_down%60+where++trim%28leibie%29%3C%3E%27%E8%AE%BA%E6%96%87%27+order+by+id+desc&num=50&return=leibie\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT distinct leibie FROM `v9_mxst_down` where  trim(leibie)<>'论文' order by id desc LIMIT 50");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$leibie = $a;unset($a);?>
  <div style="overflow:hidden; margin:10px 0;  width:100%;" >
<div class="ny_wdjfb_a" id="filter">
<ul>
<li id="one1" onclick="setTab('one',1,6)" class="hover"><a href="/index.php?m=content&c=index&a=lists&catid=204">全部</a></li>
<li id="one2" onclick="setTab('one',2,6)"><a href="index.php?m=content&c=index&a=lists&catid=204&leibie=试题">试题</a></li>
<li id="one3" onclick="setTab('one',3,6)"><a href="index.php?m=content&c=index&a=lists&catid=204&leibie=教案">教案</a></li>
<li id="one4" onclick="setTab('one',4,6)"><a href="index.php?m=content&c=index&a=lists&catid=204&leibie=课件">课件</a></li>
<li id="one5" onclick="setTab('one',5,6)"><a href="index.php?m=content&c=index&a=lists&catid=204&leibie=素材">素材</a></li>
<li id="one6" onclick="setTab('one',6,6)"><a href="index.php?m=content&c=index&a=lists&catid=204&leibie=学案">学案</a></li>
</ul>
</div>
<div class="ny_wdjfb_b" >
<div id="con_one_1">
<div class="ny_wdjfb_a">
<ul>
<li id="onee1" onclick="setTab('onee',1,2)" class="hover">我的积分</li>
<li id="onee2" onclick="setTab('onee',2,2)">积分换券</li></ul></div>
<div class="ny_wdjfb_b" >
<div id="con_onee_1">
<div class="ny_wdjfb_a">
<ul><li id="oneee1" onclick="setTab('oneee',1,2)" class="hover">我的积分</li>
               <li id="oneee2" onclick="setTab('oneee',2,2)">积分换券</li></ul></div>
<div class="ny_wdjfb_b" >
<div id="con_oneee_1">
</div>

<div id="con_oneee_1">
</div>
</div> 

</div>

<div id="con_onee_1">
</div>
</div>              
</div>
<div id="con_one_2" style="display: none">
dfdkkkkkkdsaass
</div>
<div id="con_one_3" style="display: none">
dfdkkkkkkdsaass
</div>
<div id="con_one_4" style="display: none">
dfdkkkkkkdsaass
</div>
<div id="con_one_5" style="display: none">
dfdkkkkkkdsaass
</div>
<div id="con_one_6" style="display: none">
dfdkkkkkkdsaass
</div>





</div>

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
<?php if($_GET["leibie"] != "") { ?>
<?php $_where = $_where." AND leibie='" . $_GET["leibie"]."' "?>
<?php } ?>
<?php if($_GET["stsm"] != "") { ?>
<?php $_where = $_where." AND stsm like '".$_GET["stsm"]."%'"?>
<?php } ?>
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=27c6eb85b39db619955762fde2ef8152&action=lists&catid=%24catid&where=%24_where&num=15&order=id+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 15;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'where'=>$_where,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'where'=>$_where,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>



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
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=4e2dd0dc2a14d9024d26d6ceab0d1ce3&action=hits&catid=177&num=10&order=views+DESC&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'177','order'=>'views DESC',)).'4e2dd0dc2a14d9024d26d6ceab0d1ce3');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>'177','order'=>'views DESC','limit'=>'10',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<li><a href="<?php echo $r['url'];?>" target="_blank"><?php echo $r['title'];?></a></li>
				<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
        </div>
<div class="box" style="margin-bottom:10px;">
            <h5 class="title-2">推荐下载</h5>
            <ul class="content digg">
            	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d154efdfdc48c925897a7362cfa8b192&action=position&catid=177&posid=10&order=listorder+DESC&num=10\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('catid'=>'177','posid'=>'10','order'=>'listorder DESC','limit'=>'10',));}?>
        	 	<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>        
                <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r[title],60,'');?></a></li>
               	<?php $n++;}unset($n); ?>  
             	<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
            </ul>
        </div>
<div class="brd mg_b10 mxstlby_gg"><script language="javascript" src="<?php echo APP_PATH;?>caches/poster_js/5.js"></script></div>
        </div>
    </div>
    <!--right_bar-->
    <div class="col-auto">
    	<!--广告228x90-->
    	
        
        <div class="bk10"></div>
       <!-- -->
    </div>
</div>
<div class="bk10"></div>
<script language="javascript">
function changename(c,cl)
{
	var d=document.getElementById("menu").getElementsByTagName("a");
	if(!cl)
	{
                      writeCookie("hovers",c,222);
	}
	c=readCookie("hovers")?readCookie("hovers"):c;
	for(i=0;i<d.length;i++)
	{
	    d[i].className=i==c?"hover":"";
	}
}
function writeCookie(name, value, hours)
{
  var expire = "";
  if(hours != null)
  {
    expire = new Date((new Date()).getTime() + hours * 3600000);
    expire = "; expires=" + expire.toGMTString();
  }
  document.cookie = name + "=" + escape(value) + expire;
}
// alert( readCookie("myCookie") );
function readCookie(name)
{
  var cookieValue = "";
  var search = name + "=";
  if(document.cookie.length > 0)
  { 
    offset = document.cookie.indexOf(search);
    if (offset != -1)
    { 
      offset += search.length;
      end = document.cookie.indexOf(";", offset);
      if (end == -1) end = document.cookie.length;
      cookieValue = unescape(document.cookie.substring(offset, end))
    }
  }
  return cookieValue;
}
function clear()
{
	writeCookie("hovers","",222);
	document.location=document.location.href;
}
changename(0,1)
</script>
<?php include template("content","footer"); ?>