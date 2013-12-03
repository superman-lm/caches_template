<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!--main-->

<?php include template("content","header"); ?>

<script language="JavaScript">
<!--
$(function(){
	$.formValidator.initConfig({autotip:true,formid:"myform",onerror:function(msg){}});
	$("#username").formValidator({onshow:"请输入用户名",onfocus:"应该为2-20位之间"}).inputValidator({min:2,max:20,onerror:"应该为2-20位之间"}).regexValidator({regexp:"ps_username",datatype:"enum",onerror:"用户名格式错误"});
	$("#password").formValidator({onshow:"请输入密码",onfocus:"密码应该为6-20位之间"}).inputValidator({min:6,max:20,onerror:"密码应该为6-20位之间"});

});
//-->
</script>
<script src="/statics/js/ajax_login.js"></script>

<div class="center area">
  <div class="center_l fl">
    <div class="center_A">
        <ul>
          <li class="by AA" id="center_B_key_1" onmouseover="tab_show('center_B', 'by', 1, 2);"><a href="/index.php?m=content&c=index&a=lists&catid=177&stsm=精品试卷&nianji_fl=高">高中精品</a></li>
          <li class="AA" id="center_B_key_2" onmouseover="tab_show('center_B', 'by', 2, 2);"><a href="/index.php?m=content&c=index&a=lists&catid=177&nianji_fl=高">热点推荐</a></li>
        </ul>
    </div>
    <div class="center_B">
      <dl id="center_B_info_1">
        <dt style="display:none;"><a href="#">学习方法</a><a href="#">学习方法</a><a href="#">学习方法</a><a href="#">家长必读</a></dt>
        <dd>
          <p class="img"><a href="http://www.qyzywz.com/index.php?m=content&c=index&a=show&catid=177&id=100295"><img src="<?php echo IMG_PATH;?>zzzsimgs/centa2.jpg" /></a><a href="http://www.qyzywz.com/index.php?m=content&c=index&a=show&catid=177&id=100295">2014高考语文（人教版·湖南专用）一轮复习【配套word文档】考点复习 语言基础知识 考点针对练（四）…</a></p>
      <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=980616b995c491a0239138cee6be6ddc&sql=select+url%2Ctitle+from+v9_mxst_down+where+catid%3D177+and+nianji_fl+like+%27%E9%AB%98%25%27++and+stsm%3D%27%E7%B2%BE%E5%93%81%E8%AF%95%E5%8D%B7%27+order+by+id+desc&num=6&return=gaosan_jp\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select url,title from v9_mxst_down where catid=177 and nianji_fl like '高%'  and stsm='精品试卷' order by id desc LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$gaosan_jp = $a;unset($a);?>
      <?php $n=1;if(is_array($gaosan_jp)) foreach($gaosan_jp AS $jp) { ?>
       <p><a href="<?php echo $jp['url'];?>">·<?php echo str_cut($jp[title],50);?> </a></p>
       <?php $n++;}unset($n); ?>
      <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
       </dd>
      </dl>
      <dl id="center_B_info_2" style="display:none;">
        <dt style="display:none;"><a href="#">高考政策</a><a href="#">学习方法</a><a href="#">状元心得</a><a href="#">家长必读</a></dt>
        <dd>
          <p class="img"><a href="http://www.qyzywz.com/index.php?m=content&c=index&a=show&catid=177&id=100298"><img src="<?php echo IMG_PATH;?>zzzsimgs/centa3.jpg" /></a><a href="http://www.qyzywz.com/index.php?m=content&c=index&a=show&catid=177&id=100298">2014高考语文（人教版·湖南专用）一轮复习【配套word文档】考点复习 语言基础知识 特色专题1…</a></p>

      <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=ff53a9d9acb147a5abbbb0ddff3c8858&sql=select+url%2Ctitle+from+v9_mxst_down+where+catid%3D177+and+nianji_fl+like+%27%E9%AB%98%25%27++order+by+id+desc&num=6&action=position&return=gaosan_rd\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select url,title from v9_mxst_down where catid=177 and nianji_fl like '高%'  order by id desc LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$gaosan_rd = $a;unset($a);?>
      <?php $n=1;if(is_array($gaosan_rd)) foreach($gaosan_rd AS $jp) { ?>
       <p><a href="<?php echo $jp['url'];?>">·<?php echo str_cut($jp[title],50);?> </a></p>
       <?php $n++;}unset($n); ?>
      <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </dd>
      </dl>
    </div>
  </div>
  <div class="flash fl"><script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=12"></script></div>
  <div class="center_r fr">
    <h2>
      <ul>
        <li class="show"><a>会员登录</a></li>
        <li><a>常见问题</a></li>
        <li><a>问题反馈</a></li>
      </ul>
    </h2>

    <div class="list_r" id="login_xx"  style="<?php if($_username) { ?>display:none;<?php } else { ?>display:'';<?php } ?>">
      <div class="land">
       <form method="post" action="index.php?m=member&c=index&a=login" id="myform" name="myform">
       <input type="hidden" name="forward" id="forward" value="/">
<input type="hidden" name="dosubmit" value="1"/>

       <label for="user" class="user">账户</label>
      <input type="text" id="username" name="username" size="22" class="input-text">
<div style="margin:5px 0;">
    <label class="control-label" for="inputWarning">密码 </label>
    <input type="password" id="password" name="password" size="22" class="input-text">
</div>
    <div class="input">
	<label>验证码：</label><input type="text" id="code" name="code" size="8" class="input-text">


<img id="code_img" width="100" height="24" onclick="this.src=this.src+'&'+Math.random()" src="http://www.qyzywz.com/api.php?op=checkcode&code_len=5&font_size=14&width=120&height=26&font_color=&background=&0.19476872752420604&0.9317783897276968&0.6829130572732538&0.4060351005755365">

</div>

      </div> 
      <div class="next">
         <p class="xieyi clearfix">
<div class=" fl"><input type="button" class="circle" onclick="login();" value="登录" style="border: 0px;color: white;cursor: pointer;"/></div>
<label class="fr" style="padding-top:6px;"><input type="checkbox" name="cache" value='1'/>
<span>下次自动登录</span></label></p>
       </div> 
</form>     

 <div class="coi">
     <p style="display:none;">使用合作网站账号登陆：</p>
     <div class="qq"><a href="#"><img src="<?php echo IMG_PATH;?>zzzsimgs/qq.jpg" /> QQ</a><a href="#"><img src="<?php echo IMG_PATH;?>zzzsimgs/Sina1.jpg" />新浪微博</a></div>
     <span><a href="/index.php?m=member&c=index&a=register&siteid=1">免费注册</a> | <a href="/index.php?m=member&c=index&a=public_forget_password&siteid=1">找回密码</a> | <a href="/index.php?m=member&c=index&a=login">我要登录</a></span>
 </div>  

    </div>


<div id="login_ok" style="<?php if($_username) { ?>display:'';<?php } else { ?>display:none;<?php } ?>">
    <div class="list_r">


<div class="land" style="
    margin: 0 auto;
    width: 140px;
    margin-top: 20px;
    /* font-size: 14px; */
">
<p class="blue" style=" line-height: 40px;
    font-weight: 900;
">
<div id="hello">你好 ()</div>
<br>


  </p>
  <div style="line-height:40px; color:blue;"><span><a href="index.php?m=pay&c=deposit&a=pay" style="
    color: blue;
">在线充值</a></span><span style="margin-left:20px;"><a href="index.php?m=member&c=content&a=publish" style="
    color: blue;
">在线投稿</a></span></div>
<div style="
    line-height: 40px;
"><span><a href="index.php?m=member&c=index&a=account_manage_password&t=1" style="
    color: blue;
">修改密码</a></span><span style="margin-left:20px;"><a href="index.php?m=pay&c=spend_list&a=init" style="
    color: blue;
">消费记录</a></span></div>
<div style="line-height:40px;"><span><a href="http://www.qyzywz.com/index.php?m=member&c=index" target="_blank" style="
    color: blue;
">会员中心</a></span><span><span onclick="loginut();" style="cursor:pointer; margin-left:20px;color: blue;">退出登录</span></span></div>
</div>





</div>
</div>

</div>


  </div>
</div>

<div class="mt10"></div>
<div class="con1 area">
  <div class="con1_l fl">
   <div class="con1_l_l">
    <div class="con1_l_A">
        <ul>
          <li class="by AA" id="con1_l_B_key_1" onmouseover="tab_show('con1_l_B', 'by', 1, 2);"><a href="/index.php?m=content&c=index&a=lists&catid=177&zhuti2=历年真题">历年真题</a></li>
          <li class="AA" id="con1_l_B_key_2" onmouseover="tab_show('con1_l_B', 'by', 2, 2);"><a href="/index.php?m=content&c=index&a=lists&catid=177&zhuti2=高考模拟">高考模拟</a></li>
        </ul>
     </div>
    <div class="con1_l_B">
      <dl id="con1_l_B_info_1">
        <dd>
          <p class="img"><a href="/index.php?m=content&c=index&a=show&catid=177&id=99958"><img src="<?php echo IMG_PATH;?>zzzsimgs/centa4.jpg" /></a><a href="/index.php?m=content&c=index&a=show&catid=177&id=99958">山西省历年中考分类汇编：有理数与实数;山西省历年中考分类汇编：有理数与实数…</a></p>
      <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=15d5b175c72c7b401e9b872075b7be26&sql=select+url%2Ctitle+from+v9_mxst_down+where+catid%3D177+and+zhuti2%3D%27%E5%8E%86%E5%B9%B4%E7%9C%9F%E9%A2%98%27+order+by+id+desc&num=6&return=gaosan_rd\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select url,title from v9_mxst_down where catid=177 and zhuti2='历年真题' order by id desc LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$gaosan_rd = $a;unset($a);?>
      <?php $n=1;if(is_array($gaosan_rd)) foreach($gaosan_rd AS $jp) { ?>
       <p><a href="<?php echo $jp['url'];?>">·<?php echo str_cut($jp[title],50);?> </a></p>
       <?php $n++;}unset($n); ?>
      <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

        </dd>
      </dl>
      <dl id="con1_l_B_info_2" style="display:none;">
        <dd>
          <p class="img"><a href="/index.php?m=content&c=index&a=show&catid=177&id=1891"><img src="<?php echo IMG_PATH;?>zzzsimgs/centa5.jpg" /></a><a href="/index.php?m=content&c=index&a=show&catid=177&id=1891">广东省茂名市2013届高三第一次高考模拟考试数学（理）试题;广东省茂名市2013届高三第一次高考模拟考试数学（理）试题…</a></p>
      <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=d2b6cc132906d745f122a083b2cbfe9e&sql=select+url%2Ctitle+from+v9_mxst_down+where+catid%3D177+and+zhuti2%3D%27%E9%AB%98%E8%80%83%E6%A8%A1%E6%8B%9F%27+order+by+id+desc&num=6&return=gaosan_rd\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select url,title from v9_mxst_down where catid=177 and zhuti2='高考模拟' order by id desc LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$gaosan_rd = $a;unset($a);?>
      <?php $n=1;if(is_array($gaosan_rd)) foreach($gaosan_rd AS $jp) { ?>
       <p><a href="<?php echo $jp['url'];?>">·<?php echo str_cut($jp[title],50);?> </a></p>
       <?php $n++;}unset($n); ?>
      <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </dd>
      </dl>
    </div>
  </div>
   <div class="con1_l_b">
    <div class="recom_A">
        <ul>
          <li class="by AA" id="recom_A_key_1" onmouseover="tab_show('recom_A', 'by', 1, 2);">高三一轮复习</li>
          <li class="AA" id="recom_A_key_2" onmouseover="tab_show('recom_A', 'by', 2, 2);">高三二轮复习</li>
        </ul>
     </div>
    <div class="recom_B">
      <dl id="recom_A_info_1">
        
        <dd>
          <p class="img"><a href="/index.php?m=content&c=index&a=show&catid=177&id=98565"><img src="<?php echo IMG_PATH;?>zzzsimgs/centa6.jpg" /></a><a href="/index.php?m=content&c=index&a=show&catid=177&id=98565">24．在经济生活中，一种经济现象的出现往往会引起另一种现象的产生。下列表述能体现这一关系的有①美元对人民币汇…</a></p>
      <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=6a1e80e128798a37e165987cf65a6f95&sql=select+url%2Ctitle+from+v9_mxst_down+where+catid%3D177+and+nianji_fl%3D%27%E9%AB%98%E4%B8%80%27+and+zhuti2%3D%27%E4%B8%80%E8%BD%AE%E5%A4%8D%E4%B9%A0%27+order+by+id+desc&num=6&return=gaosan_rd\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select url,title from v9_mxst_down where catid=177 and nianji_fl='高一' and zhuti2='一轮复习' order by id desc LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$gaosan_rd = $a;unset($a);?>
      <?php $n=1;if(is_array($gaosan_rd)) foreach($gaosan_rd AS $jp) { ?>
       <p><a href="<?php echo $jp['url'];?>">·<?php echo str_cut($jp[title],50);?> </a></p>
       <?php $n++;}unset($n); ?>
      <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </dd>
      </dl>
      <dl id="recom_A_info_2" style="display:none;">
        
        <dd>
          <p class="img"><a href="/index.php?m=content&c=index&a=show&catid=177&id=22115"><img src="<?php echo IMG_PATH;?>zzzsimgs/centa7.jpg" /></a><a href="/index.php?m=content&c=index&a=show&catid=177&id=22115">浙江省杭州市某重点中学2014届高三地理,化学,历史上学期第一次月考试卷湘教版,苏教版,人民版.doc…</a></p>
      <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=fe87999d5a46d2a8958a5393c4747aaa&sql=select+url%2Ctitle+from+v9_mxst_down+where+catid%3D177+and+nianji_fl%3D%27%E9%AB%98%E4%BA%8C%27+and+zhuti2%3D%27%E4%BA%8C%E8%BD%AE%E5%A4%8D%E4%B9%A0%27+order+by+id+desc&num=6&return=gaosan_rd\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select url,title from v9_mxst_down where catid=177 and nianji_fl='高二' and zhuti2='二轮复习' order by id desc LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$gaosan_rd = $a;unset($a);?>
      <?php $n=1;if(is_array($gaosan_rd)) foreach($gaosan_rd AS $jp) { ?>
       <p><a href="<?php echo $jp['url'];?>">·<?php echo str_cut($jp[title],50);?> </a></p>
       <?php $n++;}unset($n); ?>
      <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </dd>
      </dl>
    </div>
  </div>
  </div>
  
  

  <div class="con1_a fl">
    <div class="con1_a_t">
     
      <h2>
       <p class="fl">高一名题</p>
       <span class="fr"><a href="/index.php?m=content&c=index&a=lists&catid=177&nianji_fl=高一">查看更多>></a></span>
      </h2>
      <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=33fcd4c9399be5e051ac181f6cdedc5f&sql=select+url%2Ctitle+from+v9_mxst_down+where+catid%3D177+and+nianji_fl%3D%27%E9%AB%98%E4%B8%80%27+ORDER+BY++%60v9_mxst_down%60.%60posids%60+DESC&num=5&return=gaosan\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select url,title from v9_mxst_down where catid=177 and nianji_fl='高一' ORDER BY  `v9_mxst_down`.`posids` DESC LIMIT 5");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$gaosan = $a;unset($a);?>
      <ul>
      <?php $n=1;if(is_array($gaosan)) foreach($gaosan AS $rgs) { ?>
       <li><span><!--<?php echo date('m-d',$rgs[inputtime]);?>--></span><a href="<?php echo $rgs['url'];?>">·<?php echo str_cut($rgs[title],70);?> </a></li>
       <?php $n++;}unset($n); ?>
      </ul>
      <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>
    <div class="con1_a_t">
      <h2>
       <p class="fl">高二名题</p>
       <span class="fr"><a href="/index.php?m=content&c=index&a=lists&catid=177&nianji_fl=高二">查看更多>></a></span>
      </h2>
      <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=414e2e20f924f066da186932fbfeebd3&sql=select+url%2Ctitle+from+v9_mxst_down+where+catid%3D177+and+nianji_fl%3D%27%E9%AB%98%E4%BA%8C%27+ORDER+BY++%60v9_mxst_down%60.%60posids%60+DESC&num=4&return=gaosan\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select url,title from v9_mxst_down where catid=177 and nianji_fl='高二' ORDER BY  `v9_mxst_down`.`posids` DESC LIMIT 4");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$gaosan = $a;unset($a);?>
      <ul>
      <?php $n=1;if(is_array($gaosan)) foreach($gaosan AS $rgs) { ?>
       <li><span><!--<?php echo date('m-d',$rgs[inputtime]);?>--></span><a href="<?php echo $rgs['url'];?>">·<?php echo str_cut($rgs[title],70);?> </a></li>
       <?php $n++;}unset($n); ?>
      </ul>
      <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>
    <div class="con1_a_t">
      <h2>
       <p class="fl">高三名题</p>
       <span class="fr"><a href="/index.php?m=content&c=index&a=lists&catid=177&nianji_fl=高三">查看更多>></a></span>
      </h2>
     <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=c69174aedd67c710a3e765385abb0206&sql=select+url%2Ctitle+from+v9_mxst_down+where+catid%3D177+and+nianji_fl%3D%27%E9%AB%98%E4%B8%89%27+ORDER+BY++%60v9_mxst_down%60.%60posids%60+DESC&num=4&return=gaosan\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select url,title from v9_mxst_down where catid=177 and nianji_fl='高三' ORDER BY  `v9_mxst_down`.`posids` DESC LIMIT 4");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$gaosan = $a;unset($a);?>
      <ul>
      <?php $n=1;if(is_array($gaosan)) foreach($gaosan AS $rgs) { ?>
       <li><span><!--<?php echo date('m-d',$rgs[inputtime]);?>--></span><a href="<?php echo $rgs['url'];?>">·<?php echo str_cut($rgs[title],70);?> </a></li>
       <?php $n++;}unset($n); ?>
      </ul>
      <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>
  </div>

  
  
  <div class="con1_r fr">
    <div class="con1_r_t">
      <h2>
        <ul>
          <li class="by AA" id="con1c_list_key_1" onmouseover="tab_show('con1c_list', 'by', 1, 2);">重点推荐</li>
          <li class="AA" id="con1c_list_key_2" onmouseover="tab_show('con1c_list', 'by', 2, 2);">全优策划</li>
        </ul>
      </h2>
      <div class="con1c_list">
       <div class="con_r_ls" id="con1c_list_info_1">
       
         <ul>
         <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=5c95f6ff1201800b5addef8d15be5c81&action=lists&catid=183&num=12&order=id+DESC&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'183','order'=>'id DESC','limit'=>'12',));}?>
      <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
       <li><span></span><a href="<?php echo $v['url'];?>" target="_blank"  title="<?php echo $v['title'];?>"><?php echo str_cut($v[title],50);?></a></li>
         <?php $n++;}unset($n); ?>
         <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
       
        
      </ul>
       </div>
       <div class="con_r_ls" id="con1c_list_info_2"  style="display:none;">
         <ul>
         <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=56340fabbbb84ba56c04201baa2c5fdf&action=lists&catid=184&num=12&order=id+DESC&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'184','order'=>'id DESC','limit'=>'12',));}?>
      <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
       <li><span></span><a href="<?php echo $v['url'];?>" target="_blank"  title="<?php echo $v['title'];?>"><?php echo str_cut($v[title],50);?></a></li>
         <?php $n++;}unset($n); ?>
         <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
      </ul>
       </div>
      </div>
    </div>
    <div class="con1_r_b">
      <script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=13"></script>
    </div>
  </div>
</div>
<div class="mt10"></div>
<div class="con2 area">
  <div class="con2_top">
    <h2>高中资料检索</h2>
    <ul>
      <li id="bk_content_key_1" onmouseover="tab_show('bk_content', 'bt', 1, 9);"><a href="/index.php?m=content&c=index&a=lists&catid=177&xueke_fl=语文&nianji_fl=高中">语文</a></li>
      <li id="bk_content_key_2" onmouseover="tab_show('bk_content', 'bt', 2, 9);"><a href="/index.php?m=content&c=index&a=lists&catid=177&xueke_fl=数学&nianji_fl=高中">数学</a></li>
      <li id="bk_content_key_3" onmouseover="tab_show('bk_content', 'bt', 3, 9);"><a href="/index.php?m=content&c=index&a=lists&catid=177&xueke_fl=英语&nianji_fl=高中">英语</a></li>
      <li id="bk_content_key_4" onmouseover="tab_show('bk_content', 'bt', 4, 9);"><a href="/index.php?m=content&c=index&a=lists&catid=177&xueke_fl=物理&nianji_fl=高中">物理</a></li>
      <li id="bk_content_key_5" onmouseover="tab_show('bk_content', 'bt', 5, 9);"><a href="/index.php?m=content&c=index&a=lists&catid=177&xueke_fl=化学&nianji_fl=高中">化学</a></li>
      <li id="bk_content_key_6" onmouseover="tab_show('bk_content', 'bt', 6, 9);"><a href="/index.php?m=content&c=index&a=lists&catid=177&xueke_fl=生物&nianji_fl=高中">生物</a></li>
      <li id="bk_content_key_7" onmouseover="tab_show('bk_content', 'bt', 7, 9);"><a href="/index.php?m=content&c=index&a=lists&catid=177&xueke_fl=政治&nianji_fl=高中">政治</a></li>
      <li id="bk_content_key_8" onmouseover="tab_show('bk_content', 'bt', 8, 9);"><a href="/index.php?m=content&c=index&a=lists&catid=177&xueke_fl=历史&nianji_fl=高中">历史</a></li>
      <li id="bk_content_key_9" onmouseover="tab_show('bk_content', 'bt', 9, 9);" class="wiat"><a href="/index.php?m=content&c=index&a=lists&catid=177&xueke_fl=地理&nianji_fl=高">地理</a></li>
    </ul>
  </div>
<style>
.bk_content{}
.bk_content li{width:290px;line-height:20px;}
.bk_content li h2{ font-size:14px; color:#333;padding-top:5px;}
.bk_content li p{ width:290px;}

</style>
  <div class="bk_content">

     
     
    <ul id="bk_content_info_1">
       <li class="fl">
     <h2>高一</h2> 
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=45900950e04b3f7356bb819669bc24e6&sql=select+url%2Ctitle+from+v9_mxst_down+where+catid%3D177+and+xueke_fl%3D%27%E8%AF%AD%E6%96%87%27+and+nianji_fl%3D%27%E9%AB%98%E4%B8%80%27+order+by+id+desc&num=6&return=yw\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select url,title from v9_mxst_down where catid=177 and xueke_fl='语文' and nianji_fl='高一' order by id desc LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$yw = $a;unset($a);?>
             <?php $n=1;if(is_array($yw)) foreach($yw AS $r) { ?>
                	<p ><a target="_blank" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r['title'],70);?></a>  </p>
             <?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
     
       </li>
       <li class="fl">
      <h2>高二</h2>
      
             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=11bc68550ce5f7a3504fcd043f42f080&sql=select+url%2Ctitle+from+v9_mxst_down+where+catid%3D177+and+xueke_fl%3D%27%E8%AF%AD%E6%96%87%27+and+nianji_fl%3D%27%E9%AB%98%E4%BA%8C%27+order+by+id+desc&num=6&return=yw\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select url,title from v9_mxst_down where catid=177 and xueke_fl='语文' and nianji_fl='高二' order by id desc LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$yw = $a;unset($a);?>
             <?php $n=1;if(is_array($yw)) foreach($yw AS $r) { ?>
                	<p ><a target="_blank" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r['title'],70);?></a>  </p>
             <?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
       </li>
       <li class="fl">
     <h2>高三</h2>
    
             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=0a87cc30c2237a9567bb8d5303195491&sql=select+url%2Ctitle+from+v9_mxst_down+where+catid%3D177+and+xueke_fl%3D%27%E8%AF%AD%E6%96%87%27+and+nianji_fl%3D%27%E9%AB%98%E4%B8%89%27+order+by+id+desc&num=6&return=yw\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select url,title from v9_mxst_down where catid=177 and xueke_fl='语文' and nianji_fl='高三' order by id desc LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$yw = $a;unset($a);?>
             <?php $n=1;if(is_array($yw)) foreach($yw AS $r) { ?>
                	<p ><a target="_blank" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r['title'],70);?></a>  </p>
             <?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
      
       </li>
    </ul> 
    <ul id="bk_content_info_2" style="display:none;">
        <li class="fl">
     <h2>高一</h2> 
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=c5aab75e314c05bb73e9aae4af87bfcf&sql=select+url%2Ctitle+from+v9_mxst_down+where+catid%3D177+and+xueke_fl%3D%27%E6%95%B0%E5%AD%A6%27+and+nianji_fl%3D%27%E9%AB%98%E4%B8%80%27+order+by+id+desc&num=6&return=yw\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select url,title from v9_mxst_down where catid=177 and xueke_fl='数学' and nianji_fl='高一' order by id desc LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$yw = $a;unset($a);?>
             <?php $n=1;if(is_array($yw)) foreach($yw AS $r) { ?>
                	<p ><a target="_blank" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r['title'],70);?></a>  </p>
             <?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
     
       </li>
       <li class="fl">
      <h2>高二</h2>
      
             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=028d87ed3f143f223123258f580346e2&sql=select+url%2Ctitle+from+v9_mxst_down+where+catid%3D177+and+xueke_fl%3D%27%E6%95%B0%E5%AD%A6%27+and+nianji_fl%3D%27%E9%AB%98%E4%BA%8C%27+order+by+id+desc&num=6&return=yw\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select url,title from v9_mxst_down where catid=177 and xueke_fl='数学' and nianji_fl='高二' order by id desc LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$yw = $a;unset($a);?>
             <?php $n=1;if(is_array($yw)) foreach($yw AS $r) { ?>
                	<p ><a target="_blank" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r['title'],70);?></a>  </p>
             <?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
       </li>
       <li class="fl">
     <h2>高三</h2>
    
             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=c77d9a07700fa11f6747c12c60936ee2&sql=select+url%2Ctitle+from+v9_mxst_down+where+catid%3D177+and+xueke_fl%3D%27%E6%95%B0%E5%AD%A6%27+and+nianji_fl%3D%27%E9%AB%98%E4%B8%89%27+order+by+id+desc&num=6&return=yw\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select url,title from v9_mxst_down where catid=177 and xueke_fl='数学' and nianji_fl='高三' order by id desc LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$yw = $a;unset($a);?>
             <?php $n=1;if(is_array($yw)) foreach($yw AS $r) { ?>
                	<p ><a target="_blank" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r['title'],70);?></a>  </p>
             <?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
      
       </li>
    </ul>    
    <ul id="bk_content_info_3" style="display:none;">
       <li class="fl">
     <h2>高一</h2> 
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=af31e84c6e3d162bcea094ca2bcc6301&sql=select+url%2Ctitle+from+v9_mxst_down+where+catid%3D177+and+xueke_fl%3D%27%E8%8B%B1%E8%AF%AD%27+and+nianji_fl%3D%27%E9%AB%98%E4%B8%80%27+order+by+id+desc&num=6&return=yw\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select url,title from v9_mxst_down where catid=177 and xueke_fl='英语' and nianji_fl='高一' order by id desc LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$yw = $a;unset($a);?>
             <?php $n=1;if(is_array($yw)) foreach($yw AS $r) { ?>
                	<p ><a target="_blank" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r['title'],70);?></a>  </p>
             <?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
     
       </li>
       <li class="fl">
      <h2>高二</h2>
      
             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=7f76caa03ec55a4fefa97ba02dae5e18&sql=select+url%2Ctitle+from+v9_mxst_down+where+catid%3D177+and+xueke_fl%3D%27%E8%8B%B1%E8%AF%AD%27+and+nianji_fl%3D%27%E9%AB%98%E4%BA%8C%27+order+by+id+desc&num=6&return=yw\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select url,title from v9_mxst_down where catid=177 and xueke_fl='英语' and nianji_fl='高二' order by id desc LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$yw = $a;unset($a);?>
             <?php $n=1;if(is_array($yw)) foreach($yw AS $r) { ?>
                	<p ><a target="_blank" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r['title'],70);?></a>  </p>
             <?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
       </li>
       <li class="fl">
     <h2>高三</h2>
    
             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=b263984fda2aa404fb5421f1ccb1df46&sql=select+url%2Ctitle+from+v9_mxst_down+where+catid%3D177+and+xueke_fl%3D%27%E8%8B%B1%E8%AF%AD%27+and+nianji_fl%3D%27%E9%AB%98%E4%B8%89%27+order+by+id+desc&num=6&return=yw\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select url,title from v9_mxst_down where catid=177 and xueke_fl='英语' and nianji_fl='高三' order by id desc LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$yw = $a;unset($a);?>
             <?php $n=1;if(is_array($yw)) foreach($yw AS $r) { ?>
                	<p ><a target="_blank" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r['title'],70);?></a>  </p>
             <?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
      
       </li>
    </ul>
    <ul id="bk_content_info_4" style="display:none;">
      <li class="fl">
     <h2>高一</h2> 
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=a9b4fe089abb2e986fb342b9f16e6828&sql=select+url%2Ctitle+from+v9_mxst_down+where+catid%3D177+and+xueke_fl%3D%27%E7%89%A9%E7%90%86%27+and+nianji_fl%3D%27%E9%AB%98%E4%B8%80%27+order+by+id+desc&num=6&return=yw\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select url,title from v9_mxst_down where catid=177 and xueke_fl='物理' and nianji_fl='高一' order by id desc LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$yw = $a;unset($a);?>
             <?php $n=1;if(is_array($yw)) foreach($yw AS $r) { ?>
                	<p ><a target="_blank" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r['title'],70);?></a>  </p>
             <?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
     
      </li>
       <li class="fl">
      <h2>高二</h2>
      
             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=01414704e0a9fc2d643734633ba434d6&sql=select+url%2Ctitle+from+v9_mxst_down+where+catid%3D177+and+xueke_fl%3D%27%E7%89%A9%E7%90%86%27+and+nianji_fl%3D%27%E9%AB%98%E4%BA%8C%27+order+by+id+desc&num=6&return=yw\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select url,title from v9_mxst_down where catid=177 and xueke_fl='物理' and nianji_fl='高二' order by id desc LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$yw = $a;unset($a);?>
             <?php $n=1;if(is_array($yw)) foreach($yw AS $r) { ?>
                	<p ><a target="_blank" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r['title'],70);?></a>  </p>
             <?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
       </li>
       <li class="fl">
     <h2>高三</h2>
    
             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=575c425d38cb4bdedfd2f473346793ea&sql=select+url%2Ctitle+from+v9_mxst_down+where+catid%3D177+and+xueke_fl%3D%27%E7%89%A9%E7%90%86%27+and+nianji_fl%3D%27%E9%AB%98%E4%B8%89%27+order+by+id+desc&num=6&return=yw\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select url,title from v9_mxst_down where catid=177 and xueke_fl='物理' and nianji_fl='高三' order by id desc LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$yw = $a;unset($a);?>
             <?php $n=1;if(is_array($yw)) foreach($yw AS $r) { ?>
                	<p ><a target="_blank" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r['title'],70);?></a>  </p>
             <?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
      
       </li>
    </ul>
    <ul id="bk_content_info_5" style="display:none;">
     <li class="fl">
     <h2>高一</h2> 
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=da270f0910a3e173e4ff6d7a3837c573&sql=select+url%2Ctitle+from+v9_mxst_down+where+catid%3D177+and+xueke_fl%3D%27%E5%8C%96%E5%AD%A6%27+and+nianji_fl%3D%27%E9%AB%98%E4%B8%80%27+order+by+id+desc&num=6&return=yw\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select url,title from v9_mxst_down where catid=177 and xueke_fl='化学' and nianji_fl='高一' order by id desc LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$yw = $a;unset($a);?>
             <?php $n=1;if(is_array($yw)) foreach($yw AS $r) { ?>
                	<p ><a target="_blank" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r['title'],70);?></a>  </p>
             <?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
     
      </li>
       <li class="fl">
      <h2>高二</h2>
      
             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=68cb12d87175dbf3bb914b70e28be673&sql=select+url%2Ctitle+from+v9_mxst_down+where+catid%3D177+and+xueke_fl%3D%27%E5%8C%96%E5%AD%A6%27+and+nianji_fl%3D%27%E9%AB%98%E4%BA%8C%27+order+by+id+desc&num=6&return=yw\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select url,title from v9_mxst_down where catid=177 and xueke_fl='化学' and nianji_fl='高二' order by id desc LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$yw = $a;unset($a);?>
             <?php $n=1;if(is_array($yw)) foreach($yw AS $r) { ?>
                	<p ><a target="_blank" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r['title'],70);?></a>  </p>
             <?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
       </li>
       <li class="fl">
     <h2>高三</h2>
    
             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=e52c4bc0ea8d4981745bdf04cd4ca0a4&sql=select+url%2Ctitle+from+v9_mxst_down+where+catid%3D177+and+xueke_fl%3D%27%E5%8C%96%E5%AD%A6%27+and+nianji_fl%3D%27%E9%AB%98%E4%B8%89%27+order+by+id+desc&num=6&return=yw\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select url,title from v9_mxst_down where catid=177 and xueke_fl='化学' and nianji_fl='高三' order by id desc LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$yw = $a;unset($a);?>
             <?php $n=1;if(is_array($yw)) foreach($yw AS $r) { ?>
                	<p ><a target="_blank" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r['title'],70);?></a>  </p>
             <?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
      
       </li>
    </ul>
    <ul id="bk_content_info_6" style="display:none;">
      <li class="fl">
     <h2>高一</h2> 
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=b09eb78c1b6812616a1fca43831550b3&sql=select+url%2Ctitle+from+v9_mxst_down+where+catid%3D177+and+xueke_fl%3D%27%E7%94%9F%E7%89%A9%27+and+nianji_fl%3D%27%E9%AB%98%E4%B8%80%27+order+by+id+desc&num=6&return=yw\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select url,title from v9_mxst_down where catid=177 and xueke_fl='生物' and nianji_fl='高一' order by id desc LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$yw = $a;unset($a);?>
             <?php $n=1;if(is_array($yw)) foreach($yw AS $r) { ?>
                	<p ><a target="_blank" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r['title'],70);?></a>  </p>
             <?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
     
      </li>
       <li class="fl">
      <h2>高二</h2>
      
             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=c7883fea7c6201428121063939c276a5&sql=select+url%2Ctitle+from+v9_mxst_down+where+catid%3D177+and+xueke_fl%3D%27%E7%94%9F%E7%89%A9%27+and+nianji_fl%3D%27%E9%AB%98%E4%BA%8C%27+order+by+id+desc&num=6&return=yw\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select url,title from v9_mxst_down where catid=177 and xueke_fl='生物' and nianji_fl='高二' order by id desc LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$yw = $a;unset($a);?>
             <?php $n=1;if(is_array($yw)) foreach($yw AS $r) { ?>
                	<p ><a target="_blank" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r['title'],70);?></a>  </p>
             <?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
       </li>
       <li class="fl">
     <h2>高三</h2>
    
             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=2085997ed0dfdd718d8f8b908d80bce9&sql=select+url%2Ctitle+from+v9_mxst_down+where+catid%3D177+and+xueke_fl%3D%27%E7%94%9F%E7%89%A9%27+and+nianji_fl%3D%27%E9%AB%98%E4%B8%89%27+order+by+id+desc&num=6&return=yw\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select url,title from v9_mxst_down where catid=177 and xueke_fl='生物' and nianji_fl='高三' order by id desc LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$yw = $a;unset($a);?>
             <?php $n=1;if(is_array($yw)) foreach($yw AS $r) { ?>
                	<p ><a target="_blank" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r['title'],70);?></a>  </p>
             <?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
      
       </li>
    </ul>
    <ul id="bk_content_info_7" style="display:none;">
     <li class="fl">
     <h2>高一</h2> 
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=9a293521f9ecb42882eb9ab096662f2f&sql=select+url%2Ctitle+from+v9_mxst_down+where+catid%3D177+and+xueke_fl%3D%27%E6%94%BF%E6%B2%BB%27+and+nianji_fl%3D%27%E9%AB%98%E4%B8%80%27+order+by+id+desc&num=6&return=yw\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select url,title from v9_mxst_down where catid=177 and xueke_fl='政治' and nianji_fl='高一' order by id desc LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$yw = $a;unset($a);?>
             <?php $n=1;if(is_array($yw)) foreach($yw AS $r) { ?>
                	<p ><a target="_blank" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r['title'],70);?></a>  </p>
             <?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
     
      </li>
       <li class="fl">
      <h2>高二</h2>
      
             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=a882d3706be7564dcf1aa7c28a6fe11c&sql=select+url%2Ctitle+from+v9_mxst_down+where+catid%3D177+and+xueke_fl%3D%27%E6%94%BF%E6%B2%BB%27+and+nianji_fl%3D%27%E9%AB%98%E4%BA%8C%27+order+by+id+desc&num=6&return=yw\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select url,title from v9_mxst_down where catid=177 and xueke_fl='政治' and nianji_fl='高二' order by id desc LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$yw = $a;unset($a);?>
             <?php $n=1;if(is_array($yw)) foreach($yw AS $r) { ?>
                	<p ><a target="_blank" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r['title'],70);?></a>  </p>
             <?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
       </li>
       <li class="fl">
     <h2>高三</h2>
    
             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=dd647e790e7ad28c21212c99b43520e8&sql=select+url%2Ctitle+from+v9_mxst_down+where+catid%3D177+and+xueke_fl%3D%27%E6%94%BF%E6%B2%BB%27+and+nianji_fl%3D%27%E9%AB%98%E4%B8%89%27+order+by+id+desc&num=6&return=yw\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select url,title from v9_mxst_down where catid=177 and xueke_fl='政治' and nianji_fl='高三' order by id desc LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$yw = $a;unset($a);?>
             <?php $n=1;if(is_array($yw)) foreach($yw AS $r) { ?>
                	<p ><a target="_blank" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r['title'],70);?></a>  </p>
             <?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
      
       </li>
    </ul>
    <ul id="bk_content_info_8" style="display:none;">
  <li class="fl">
     <h2>高一</h2> 
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=8b260f6c5d0fefaad944514089700d3f&sql=select+url%2Ctitle+from+v9_mxst_down+where+catid%3D177+and+xueke_fl%3D%27%E5%8E%86%E5%8F%B2%27+and+nianji_fl%3D%27%E9%AB%98%E4%B8%80%27+order+by+id+desc&num=6&return=yw\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select url,title from v9_mxst_down where catid=177 and xueke_fl='历史' and nianji_fl='高一' order by id desc LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$yw = $a;unset($a);?>
             <?php $n=1;if(is_array($yw)) foreach($yw AS $r) { ?>
                	<p ><a target="_blank" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r['title'],70);?></a>  </p>
             <?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
     
      </li>
       <li class="fl">
      <h2>高二</h2>
      
             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=cc3cd2f73a63e5ada05b0c9c713e1482&sql=select+url%2Ctitle+from+v9_mxst_down+where+catid%3D177+and+xueke_fl%3D%27%E5%8E%86%E5%8F%B2%27+and+nianji_fl%3D%27%E9%AB%98%E4%BA%8C%27+order+by+id+desc&num=6&return=yw\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select url,title from v9_mxst_down where catid=177 and xueke_fl='历史' and nianji_fl='高二' order by id desc LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$yw = $a;unset($a);?>
             <?php $n=1;if(is_array($yw)) foreach($yw AS $r) { ?>
                	<p ><a target="_blank" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r['title'],70);?></a>  </p>
             <?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
       </li>
       <li class="fl">
     <h2>高三</h2>
    
             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=07ee71d8381dbe43d13539084a61f2dc&sql=select+url%2Ctitle+from+v9_mxst_down+where+catid%3D177+and+xueke_fl%3D%27%E5%8E%86%E5%8F%B2%27+and+nianji_fl%3D%27%E9%AB%98%E4%B8%89%27+order+by+id+desc&num=6&return=yw\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select url,title from v9_mxst_down where catid=177 and xueke_fl='历史' and nianji_fl='高三' order by id desc LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$yw = $a;unset($a);?>
             <?php $n=1;if(is_array($yw)) foreach($yw AS $r) { ?>
                	<p ><a target="_blank" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r['title'],70);?></a>  </p>
             <?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
      
       </li>
    </ul>
    <ul id="bk_content_info_9" style="display:none;">
 <li class="fl">
     <h2>高一</h2> 
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=acca6159943292fb51547c309264926e&sql=select+url%2Ctitle+from+v9_mxst_down+where+catid%3D177+and+xueke_fl%3D%27%E5%9C%B0%E7%90%86%27+and+nianji_fl%3D%27%E9%AB%98%E4%B8%80%27+order+by+id+desc&num=6&return=yw\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select url,title from v9_mxst_down where catid=177 and xueke_fl='地理' and nianji_fl='高一' order by id desc LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$yw = $a;unset($a);?>
             <?php $n=1;if(is_array($yw)) foreach($yw AS $r) { ?>
                	<p ><a target="_blank" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r['title'],70);?></a>  </p>
             <?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
     
      </li>
       <li class="fl">
      <h2>高二</h2>
      
             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=f50017ecce8a45c321cc807fc82a1187&sql=select+url%2Ctitle+from+v9_mxst_down+where+catid%3D177+and+xueke_fl%3D%27%E5%9C%B0%E7%90%86%27+and+nianji_fl%3D%27%E9%AB%98%E4%BA%8C%27+order+by+id+desc&num=6&return=yw\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select url,title from v9_mxst_down where catid=177 and xueke_fl='地理' and nianji_fl='高二' order by id desc LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$yw = $a;unset($a);?>
             <?php $n=1;if(is_array($yw)) foreach($yw AS $r) { ?>
                	<p ><a target="_blank" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r['title'],70);?></a>  </p>
             <?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
       </li>
       <li class="fl">
     <h2>高三</h2>
    
             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=e9c349b6a6a7d01626b33086eff46e4c&sql=select+url%2Ctitle+from+v9_mxst_down+where+catid%3D177+and+xueke_fl%3D%27%E5%9C%B0%E7%90%86%27+and+nianji_fl%3D%27%E9%AB%98%E4%B8%89%27+order+by+id+desc&num=6&return=yw\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select url,title from v9_mxst_down where catid=177 and xueke_fl='地理' and nianji_fl='高三' order by id desc LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$yw = $a;unset($a);?>
             <?php $n=1;if(is_array($yw)) foreach($yw AS $r) { ?>
                	<p ><a target="_blank" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r['title'],70);?></a>  </p>
             <?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
      
       </li>
    </ul>

  </div>
</div>
<div class="mt10"></div>
<div class="con3 area">
  <div class="con3_l fl">
   <div class="con3_l_l">
    <h2>
      <ul>
          <li class="by AA" id="con3_l_list_key_1" onmouseover="tab_show('con3_l_list', 'by', 1, 2);">高中作文</li>
          <li class="AA" id="con3_l_list_key_2" onmouseover="tab_show('con3_l_list', 'by', 2, 2);">作文指南</li>
      </ul>
    </h2>
    <div class="con3_l_list">
      <div class="recom_B" id="con3_l_list_info_1">
       <dl>  
        <dd><p class="img"><a href="/index.php?m=content&c=index&a=show&catid=186&id=64"><img src="<?php echo IMG_PATH;?>zzzsimgs/centa8.jpg" /></a><a href="/index.php?m=content&c=index&a=show&catid=186&id=64">15岁以前我是个游击队员，除了吃饭睡觉，余下时间，就在琢磨怎么跟老师和家长进行地雷战、地道战、狙击战…</a></p> 
         <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=5c5f054836ca865340f386ca89fd5978&action=lists&catid=186&num=10&order=id+DESC&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'186','order'=>'id DESC','limit'=>'10',));}?>
      <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
         <p><a target="_blank" href="<?php echo $v['url'];?>" title="<?php echo $v['title'];?>">·<?php echo str_cut($v[title],55);?></a></p>
         <?php $n++;}unset($n); ?>
         <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
         </dd>
        </dl>
        
      </div>
      <div class="recom_B" id="con3_l_list_info_2" style="display:none;">     
      <dl>  
        <dd><p class="img"><a href="/index.php?m=content&c=index&a=show&catid=186&id=60"><img src="<?php echo IMG_PATH;?>zzzsimgs/centa9.jpg" /></a><a href="/index.php?m=content&c=index&a=show&catid=186&id=60">面对人类一往无前的探索，自然如同洞壁上栖息的美丽蝴蝶，向纵深之处隐匿而去。我们，或许早该意识到，是时候…</a></p> 
         <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b0a2718023f008429d9a5ad31ee853a8&action=lists&catid=185&num=10&order=id+DESC&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'185','order'=>'id DESC','limit'=>'10',));}?>
      <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
         <p><a target="_blank" href="<?php echo $v['url'];?>" title="<?php echo $v['title'];?>">·<?php echo str_cut($v[title],55);?></a></p>
         <?php $n++;}unset($n); ?>
         <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
         </dd>
        </dl>
      </div>
     </div>
  </div>
  </div>
  
  <div class="con3_a fl">
    <div class="con3_a_t">
      <h2>
       <p class="fl">教育动态</p>
      <!-- <em class="fl"> <a href="#">京</a> <a href="#">津</a> <a href="#">沪</a> <a href="#">渝</a> <a href="#">辽</a> <a href="#">苏</a> <a href="#">浙</a> <a href="#">粤</a> <a href="#">鲁</a></em>
       <span class="fr"><a href="#">查看更多>></a></span>-->
      </h2>
      <div class="con3_a_list">
        <dl>
        
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2c88987e42f24c3484ec2bbf5dd3daff&action=lists&catid=178%2C179&num=3&thumb=1&order=id+DESC&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'178,179','thumb'=>'1','order'=>'id DESC','limit'=>'3',));}?>
 <?php $n=1;if(is_array($info)) foreach($info AS $r) { ?> 
          <dt><img src="<?php echo thumb($r[thumb],80,70);?>" width="80" height="70" /></dt>
          <dd><a href="<?php echo $r['url'];?>"><?php echo str_cut($r[title],20);?></a></dd>
  <br />
 <?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </dl>
        <ul>
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f3cf4995ea13e4e8b47860aea0c744aa&action=lists&catid=178%2C179&num=13&order=id+DESC&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'178,179','order'=>'id DESC','limit'=>'13',));}?>
      <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
         <li><a target="_blank" href="<?php echo $v['url'];?>" title="<?php echo $v['title'];?>">·<?php echo str_cut($v[title],70);?></a></li>
         <?php $n++;}unset($n); ?>
         <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>
      </div>
    </div>
  
  </div>
  <div class="con3_rr fr">
     <h2>
      <ul>
        <li class="by AA" id="xijuan_key_1" onmouseover="tab_show('xijuan', 'by', 1, 2);">初中作文</li>
        <li class="AA" id="xijuan_key_2" onmouseover="tab_show('xijuan', 'by', 2, 2);">作文指南</li>
      </ul>
    </h2>
    <div class="xijuan">
      <div class="recom_B" id="xijuan_info_1">
       <dl>  
        <dd><p class="img"><a href="/index.php?m=content&c=index&a=show&catid=181&id=17"><img src="<?php echo IMG_PATH;?>zzzsimgs/centa0.jpg" /></a><a href="/index.php?m=content&c=index&a=show&catid=181&id=17">捧一本小说，泡一壶清茶，轻声朗读，细细品味，在清新的墨香与淡雅的茶香中旅行。…</a></p> 
         <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=18084ad54f6e996e4cd3547659d10498&action=lists&catid=181&num=10&order=id+DESC&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'181','order'=>'id DESC','limit'=>'10',));}?>
      <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
         <p><a target="_blank" href="<?php echo $v['url'];?>" title="<?php echo $v['title'];?>">·<?php echo str_cut($v[title],55);?></a></p>
         <?php $n++;}unset($n); ?>
         <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
         </dd>
        </dl>
        
      </div>
      <div class="recom_B" id="xijuan_info_2" style="display:none;">     
      <dl>  
        <dd><p class="img"><a href="/index.php?m=content&c=index&a=show&catid=182&id=80"><img src="<?php echo IMG_PATH;?>zzzsimgs/centa1.jpg" /></a><a href="/index.php?m=content&c=index&a=show&catid=182&id=80">沈祥龙在《论词随笔》中说过：“意不浅露，语不穷尽，句中有余味，篇中有余意，其妙不外寄言而已。…</a></p> 
         <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=68c117714debdddc5cea522799b2b499&action=lists&catid=182&num=10&order=id+DESC&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'182','order'=>'id DESC','limit'=>'10',));}?>
      <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
         <p><a target="_blank" href="<?php echo $v['url'];?>" title="<?php echo $v['title'];?>">·<?php echo str_cut($v[title],55);?></a></p>
         <?php $n++;}unset($n); ?>
         <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
         </dd>
        </dl>
      </div>
     </div>
  </div>
</div>
<div class="mt10"></div>
<div class="con4 area">
             <div class="con4_top">
               <h2>初中资料检索</h2>
               <ul>
                 <li id="bk_conx_key_1" onmouseover="tab_show('bk_conx', 'bt', 1, 9);"><a href="/index.php?m=content&c=index&a=lists&catid=177&xueke_fl=语文&nianji_fl=初中">语文</a></li>
                 <li id="bk_conx_key_2" onmouseover="tab_show('bk_conx', 'bt', 2, 9);"><a href="/index.php?m=content&c=index&a=lists&catid=177&xueke_fl=数学&nianji_fl=初中">数学</a></li>
                 <li id="bk_conx_key_3" onmouseover="tab_show('bk_conx', 'bt', 3, 9);"><a href="/index.php?m=content&c=index&a=lists&catid=177&xueke_fl=英语&nianji_fl=初中">英语</a></li>
                 <li id="bk_conx_key_4" onmouseover="tab_show('bk_conx', 'bt', 4, 9);"><a href="/index.php?m=content&c=index&a=lists&catid=177&xueke_fl=物理&nianji_fl=初中">物理</a></li>
                 <li id="bk_conx_key_5" onmouseover="tab_show('bk_conx', 'bt', 5, 9);"><a href="/index.php?m=content&c=index&a=lists&catid=177&xueke_fl=化学&nianji_fl=初中">化学</a></li>
                 <li id="bk_conx_key_6" onmouseover="tab_show('bk_conx', 'bt', 6, 9);"><a href="/index.php?m=content&c=index&a=lists&catid=177&xueke_fl=生物&nianji_fl=初中">生物</a></li>
                 <li id="bk_conx_key_7" onmouseover="tab_show('bk_conx', 'bt', 7, 9);"><a href="/index.php?m=content&c=index&a=lists&catid=177&xueke_fl=政治&nianji_fl=初中">政治</a></li>
                 <li id="bk_conx_key_8" onmouseover="tab_show('bk_conx', 'bt', 8, 9);"><a href="/index.php?m=content&c=index&a=lists&catid=177&xueke_fl=历史&nianji_fl=初中">历史</a></li>
                 <li class="wiat" id="bk_conx_key_9" onmouseover="tab_show('bk_conx', 'bt', 9, 9);"><a href="/index.php?m=content&c=index&a=lists&catid=177&xueke_fl=地理&nianji_fl=初中">地理</a></li>
               </ul>
             </div>
             <div class="bk_content">
               <ul id="bk_conx_info_1">
                 <li class="fl">
                   <h2>七年级</h2>
                   <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=2f863900364c0471f0987042e6041c4b&sql=select+url%2Ctitle+from+v9_mxst_down+where+catid%3D177+and+xueke_fl%3D%27%E8%AF%AD%E6%96%87%27+and+nianji_fl%3D%27%E4%B8%83%E5%B9%B4%E7%BA%A7%27+order+by+id+desc&num=6&return=yw\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select url,title from v9_mxst_down where catid=177 and xueke_fl='语文' and nianji_fl='七年级' order by id desc LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$yw = $a;unset($a);?>
                   <?php $n=1;if(is_array($yw)) foreach($yw AS $r) { ?>
                   <p ><a target="_blank" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r['title'],70);?></a></p>
                   <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> </li>
                 <li class="fl">
                   <h2>八年级</h2>
                   <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=81e8e15cc56fa7278b905d280b1c3338&sql=select+url%2Ctitle+from+v9_mxst_down+where+catid%3D177+and+xueke_fl%3D%27%E8%AF%AD%E6%96%87%27+and+nianji_fl%3D%27%E5%85%AB%E5%B9%B4%E7%BA%A7%27+order+by+id+desc&num=6&return=yw\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select url,title from v9_mxst_down where catid=177 and xueke_fl='语文' and nianji_fl='八年级' order by id desc LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$yw = $a;unset($a);?>
                   <?php $n=1;if(is_array($yw)) foreach($yw AS $r) { ?>
                   <p ><a target="_blank" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r['title'],70);?></a></p>
                   <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> </li>
                 <li class="fl">
                   <h2>九年级</h2>
                   <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=f96c06c2fdbcfbfe22398734789c462b&sql=select+url%2Ctitle+from+v9_mxst_down+where+catid%3D177+and+xueke_fl%3D%27%E8%AF%AD%E6%96%87%27+and+nianji_fl%3D%27%E4%B9%9D%E5%B9%B4%E7%BA%A7%27+order+by+id+desc&num=6&return=yw\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select url,title from v9_mxst_down where catid=177 and xueke_fl='语文' and nianji_fl='九年级' order by id desc LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$yw = $a;unset($a);?>
                   <?php $n=1;if(is_array($yw)) foreach($yw AS $r) { ?>
                   <p ><a target="_blank" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r['title'],70);?></a></p>
                   <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> </li>
               </ul>
               <ul id="bk_conx_info_2" style="display:none;">
                 <li class="fl">
                   <h2>七年级</h2>
                   <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=d31b89d554e1e9aa66b1ff3ca7494dcb&sql=select+url%2Ctitle+from+v9_mxst_down+where+catid%3D177+and+xueke_fl%3D%27%E6%95%B0%E5%AD%A6%27+and+nianji_fl%3D%27%E4%B8%83%E5%B9%B4%E7%BA%A7%27+order+by+id+desc&num=6&return=yw\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select url,title from v9_mxst_down where catid=177 and xueke_fl='数学' and nianji_fl='七年级' order by id desc LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$yw = $a;unset($a);?>
                   <?php $n=1;if(is_array($yw)) foreach($yw AS $r) { ?>
                   <p ><a target="_blank" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r['title'],70);?></a></p>
                   <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> </li>
                 <li class="fl">
                   <h2>八年级</h2>
                   <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=bbafc6663429d8db2af6bbc94eebbb65&sql=select+url%2Ctitle+from+v9_mxst_down+where+catid%3D177+and+xueke_fl%3D%27%E6%95%B0%E5%AD%A6%27+and+nianji_fl%3D%27%E5%85%AB%E5%B9%B4%E7%BA%A7%27+order+by+id+desc&num=6&return=yw\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select url,title from v9_mxst_down where catid=177 and xueke_fl='数学' and nianji_fl='八年级' order by id desc LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$yw = $a;unset($a);?>
                   <?php $n=1;if(is_array($yw)) foreach($yw AS $r) { ?>
                   <p ><a target="_blank" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r['title'],70);?></a></p>
                   <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> </li>
                 <li class="fl">
                   <h2>九年级</h2>
                   <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=117de754a88dda2e527e7da3d966f851&sql=select+url%2Ctitle+from+v9_mxst_down+where+catid%3D177+and+xueke_fl%3D%27%E6%95%B0%E5%AD%A6%27+and+nianji_fl%3D%27%E4%B9%9D%E5%B9%B4%E7%BA%A7%27+order+by+id+desc&num=6&return=yw\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select url,title from v9_mxst_down where catid=177 and xueke_fl='数学' and nianji_fl='九年级' order by id desc LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$yw = $a;unset($a);?>
                   <?php $n=1;if(is_array($yw)) foreach($yw AS $r) { ?>
                   <p ><a target="_blank" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r['title'],70);?></a></p>
                   <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> </li>
               </ul>
               <ul id="bk_conx_info_3" style="display:none;">
                 <li class="fl">
                   <h2>七年级</h2>
                   <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=94d0b440b889c191f44d07ffb4f9ea7e&sql=select+url%2Ctitle+from+v9_mxst_down+where+catid%3D177+and+xueke_fl%3D%27%E8%8B%B1%E8%AF%AD%27+and+nianji_fl%3D%27%E4%B8%83%E5%B9%B4%E7%BA%A7%27+order+by+id+desc&num=6&return=yw\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select url,title from v9_mxst_down where catid=177 and xueke_fl='英语' and nianji_fl='七年级' order by id desc LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$yw = $a;unset($a);?>
                   <?php $n=1;if(is_array($yw)) foreach($yw AS $r) { ?>
                   <p ><a target="_blank" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r['title'],70);?></a></p>
                   <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> </li>
                 <li class="fl">
                   <h2>八年级</h2>
                   <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=f6e787de9774e8660d50fdabab1fafc0&sql=select+url%2Ctitle+from+v9_mxst_down+where+catid%3D177+and+xueke_fl%3D%27%E8%8B%B1%E8%AF%AD%27+and+nianji_fl%3D%27%E5%85%AB%E5%B9%B4%E7%BA%A7%27+order+by+id+desc&num=6&return=yw\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select url,title from v9_mxst_down where catid=177 and xueke_fl='英语' and nianji_fl='八年级' order by id desc LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$yw = $a;unset($a);?>
                   <?php $n=1;if(is_array($yw)) foreach($yw AS $r) { ?>
                   <p ><a target="_blank" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r['title'],70);?></a></p>
                   <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> </li>
                 <li class="fl">
                   <h2>九年级</h2>
                   <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=d169b9a3e8a9e104af35d86c887dff14&sql=select+url%2Ctitle+from+v9_mxst_down+where+catid%3D177+and+xueke_fl%3D%27%E8%8B%B1%E8%AF%AD%27+and+nianji_fl%3D%27%E4%B9%9D%E5%B9%B4%E7%BA%A7%27+order+by+id+desc&num=6&return=yw\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select url,title from v9_mxst_down where catid=177 and xueke_fl='英语' and nianji_fl='九年级' order by id desc LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$yw = $a;unset($a);?>
                   <?php $n=1;if(is_array($yw)) foreach($yw AS $r) { ?>
                   <p ><a target="_blank" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r['title'],70);?></a></p>
                   <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> </li>
               </ul>
               <ul id="bk_conx_info_4" style="display:none;">
                 <li class="fl">
                   <h2>七年级</h2>
                   <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=1921efd81f6b3bd877f6121e7a4be7df&sql=select+url%2Ctitle+from+v9_mxst_down+where+catid%3D177+and+xueke_fl%3D%27%E7%89%A9%E7%90%86%27+and+nianji_fl%3D%27%E4%B8%83%E5%B9%B4%E7%BA%A7%27+order+by+id+desc&num=6&return=yw\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select url,title from v9_mxst_down where catid=177 and xueke_fl='物理' and nianji_fl='七年级' order by id desc LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$yw = $a;unset($a);?>
                   <?php $n=1;if(is_array($yw)) foreach($yw AS $r) { ?>
                   <p ><a target="_blank" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r['title'],70);?></a></p>
                   <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> </li>
                 <li class="fl">
                   <h2>八年级</h2>
                   <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=776609cf6976aa1027a54f3ffe35faeb&sql=select+url%2Ctitle+from+v9_mxst_down+where+catid%3D177+and+xueke_fl%3D%27%E7%89%A9%E7%90%86%27+and+nianji_fl%3D%27%E5%85%AB%E5%B9%B4%E7%BA%A7%27+order+by+id+desc&num=6&return=yw\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select url,title from v9_mxst_down where catid=177 and xueke_fl='物理' and nianji_fl='八年级' order by id desc LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$yw = $a;unset($a);?>
                   <?php $n=1;if(is_array($yw)) foreach($yw AS $r) { ?>
                   <p ><a target="_blank" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r['title'],70);?></a></p>
                   <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> </li>
                 <li class="fl">
                   <h2>九年级</h2>
                   <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=179b8955326c4bf7adb098d72f1545b7&sql=select+url%2Ctitle+from+v9_mxst_down+where+catid%3D177+and+xueke_fl%3D%27%E7%89%A9%E7%90%86%27+and+nianji_fl%3D%27%E4%B9%9D%E5%B9%B4%E7%BA%A7%27+order+by+id+desc&num=6&return=yw\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select url,title from v9_mxst_down where catid=177 and xueke_fl='物理' and nianji_fl='九年级' order by id desc LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$yw = $a;unset($a);?>
                   <?php $n=1;if(is_array($yw)) foreach($yw AS $r) { ?>
                   <p ><a target="_blank" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r['title'],70);?></a></p>
                   <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> </li>
               </ul>
               <ul id="bk_conx_info_5" style="display:none;">
                 <li class="fl">
                   <h2>七年级</h2>
                   <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=0c084374a4f6ad8b27f79cc89b44b32b&sql=select+url%2Ctitle+from+v9_mxst_down+where+catid%3D177+and+xueke_fl%3D%27%E5%8C%96%E5%AD%A6%27+and+nianji_fl%3D%27%E4%B8%83%E5%B9%B4%E7%BA%A7%27+order+by+id+desc&num=6&return=yw\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select url,title from v9_mxst_down where catid=177 and xueke_fl='化学' and nianji_fl='七年级' order by id desc LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$yw = $a;unset($a);?>
                   <?php $n=1;if(is_array($yw)) foreach($yw AS $r) { ?>
                   <p ><a target="_blank" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r['title'],70);?></a></p>
                   <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> </li>
                 <li class="fl">
                   <h2>八年级</h2>
                   <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=f8853b14f7789a2427ea2869f5d3bbc0&sql=select+url%2Ctitle+from+v9_mxst_down+where+catid%3D177+and+xueke_fl%3D%27%E5%8C%96%E5%AD%A6%27+and+nianji_fl%3D%27%E5%85%AB%E5%B9%B4%E7%BA%A7%27+order+by+id+desc&num=6&return=yw\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select url,title from v9_mxst_down where catid=177 and xueke_fl='化学' and nianji_fl='八年级' order by id desc LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$yw = $a;unset($a);?>
                   <?php $n=1;if(is_array($yw)) foreach($yw AS $r) { ?>
                   <p ><a target="_blank" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r['title'],70);?></a></p>
                   <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> </li>
                 <li class="fl">
                   <h2>九年级</h2>
                   <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=6776b34dfbcdbe2cd544300bcb8e114f&sql=select+url%2Ctitle+from+v9_mxst_down+where+catid%3D177+and+xueke_fl%3D%27%E5%8C%96%E5%AD%A6%27+and+nianji_fl%3D%27%E4%B9%9D%E5%B9%B4%E7%BA%A7%27+order+by+id+desc&num=6&return=yw\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select url,title from v9_mxst_down where catid=177 and xueke_fl='化学' and nianji_fl='九年级' order by id desc LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$yw = $a;unset($a);?>
                   <?php $n=1;if(is_array($yw)) foreach($yw AS $r) { ?>
                   <p ><a target="_blank" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r['title'],70);?></a></p>
                   <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> </li>
               </ul>
               <ul id="bk_conx_info_6" style="display:none;">
                 <li class="fl">
                   <h2>七年级</h2>
                   <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=ea390455b402548df1b1c53754232daf&sql=select+url%2Ctitle+from+v9_mxst_down+where+catid%3D177+and+xueke_fl%3D%27%E7%94%9F%E7%89%A9%27+and+nianji_fl%3D%27%E4%B8%83%E5%B9%B4%E7%BA%A7%27+order+by+id+desc&num=6&return=yw\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select url,title from v9_mxst_down where catid=177 and xueke_fl='生物' and nianji_fl='七年级' order by id desc LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$yw = $a;unset($a);?>
                   <?php $n=1;if(is_array($yw)) foreach($yw AS $r) { ?>
                   <p ><a target="_blank" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r['title'],70);?></a></p>
                   <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> </li>
                 <li class="fl">
                   <h2>八年级</h2>
                   <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=cd53b063bd515430381e4877ca6af3e2&sql=select+url%2Ctitle+from+v9_mxst_down+where+catid%3D177+and+xueke_fl%3D%27%E7%94%9F%E7%89%A9%27+and+nianji_fl%3D%27%E5%85%AB%E5%B9%B4%E7%BA%A7%27+order+by+id+desc&num=6&return=yw\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select url,title from v9_mxst_down where catid=177 and xueke_fl='生物' and nianji_fl='八年级' order by id desc LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$yw = $a;unset($a);?>
                   <?php $n=1;if(is_array($yw)) foreach($yw AS $r) { ?>
                   <p ><a target="_blank" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r['title'],70);?></a></p>
                   <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> </li>
                 <li class="fl">
                   <h2>九年级</h2>
                   <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=3bc1039040feeefdc5f19af761be82c0&sql=select+url%2Ctitle+from+v9_mxst_down+where+catid%3D177+and+xueke_fl%3D%27%E9%AB%98%E4%B8%89%27+and+nianji_fl%3D%27%E4%B9%9D%E5%B9%B4%E7%BA%A7%27+order+by+id+desc&num=6&return=yw\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select url,title from v9_mxst_down where catid=177 and xueke_fl='高三' and nianji_fl='九年级' order by id desc LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$yw = $a;unset($a);?>
                   <?php $n=1;if(is_array($yw)) foreach($yw AS $r) { ?>
                   <p ><a target="_blank" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r['title'],70);?></a></p>
                   <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> </li>
               </ul>
               <ul id="bk_conx_info_7" style="display:none;">
                 <li class="fl">
                   <h2>七年级</h2>
                   <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=4adb7ec9fff67aedf7449a3321e2b8f7&sql=select+url%2Ctitle+from+v9_mxst_down+where+catid%3D177+and+xueke_fl%3D%27%E6%94%BF%E6%B2%BB%27+and+nianji_fl%3D%27%E4%B8%83%E5%B9%B4%E7%BA%A7%27+order+by+id+desc&num=6&return=yw\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select url,title from v9_mxst_down where catid=177 and xueke_fl='政治' and nianji_fl='七年级' order by id desc LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$yw = $a;unset($a);?>
                   <?php $n=1;if(is_array($yw)) foreach($yw AS $r) { ?>
                   <p ><a target="_blank" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r['title'],70);?></a></p>
                   <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> </li>
                 <li class="fl">
                   <h2>八年级</h2>
                   <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=2892400dd02fb403727f61950fbafd25&sql=select+url%2Ctitle+from+v9_mxst_down+where+catid%3D177+and+xueke_fl%3D%27%E6%94%BF%E6%B2%BB%27+and+nianji_fl%3D%27%E5%85%AB%E5%B9%B4%E7%BA%A7%27+order+by+id+desc&num=6&return=yw\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select url,title from v9_mxst_down where catid=177 and xueke_fl='政治' and nianji_fl='八年级' order by id desc LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$yw = $a;unset($a);?>
                   <?php $n=1;if(is_array($yw)) foreach($yw AS $r) { ?>
                   <p ><a target="_blank" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r['title'],70);?></a></p>
                   <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> </li>
                 <li class="fl">
                   <h2>九年级</h2>
                   <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=c908b94f3f35ad85c8241bfdab2f92c1&sql=select+url%2Ctitle+from+v9_mxst_down+where+catid%3D177+and+xueke_fl%3D%27%E6%94%BF%E6%B2%BB%27+and+nianji_fl%3D%27%E4%B9%9D%E5%B9%B4%E7%BA%A7%27+order+by+id+desc&num=6&return=yw\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select url,title from v9_mxst_down where catid=177 and xueke_fl='政治' and nianji_fl='九年级' order by id desc LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$yw = $a;unset($a);?>
                   <?php $n=1;if(is_array($yw)) foreach($yw AS $r) { ?>
                   <p ><a target="_blank" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r['title'],70);?></a></p>
                   <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> </li>
               </ul>
               <ul id="bk_conx_info_8" style="display:none;">
                 <li class="fl">
                   <h2>七年级</h2>
                   <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=e929dbe8c4f0ade9bb7dd9c98fb716cd&sql=select+url%2Ctitle+from+v9_mxst_down+where+catid%3D177+and+xueke_fl%3D%27%E5%8E%86%E5%8F%B2%27+and+nianji_fl%3D%27%E4%B8%83%E5%B9%B4%E7%BA%A7%27+order+by+id+desc&num=6&return=yw\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select url,title from v9_mxst_down where catid=177 and xueke_fl='历史' and nianji_fl='七年级' order by id desc LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$yw = $a;unset($a);?>
                   <?php $n=1;if(is_array($yw)) foreach($yw AS $r) { ?>
                   <p ><a target="_blank" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r['title'],70);?></a></p>
                   <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> </li>
                 <li class="fl">
                   <h2>八年级</h2>
                   <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=202a861b713f56a5b616ccb8b908c267&sql=select+url%2Ctitle+from+v9_mxst_down+where+catid%3D177+and+xueke_fl%3D%27%E5%8E%86%E5%8F%B2%27+and+nianji_fl%3D%27%E5%85%AB%E5%B9%B4%E7%BA%A7%27+order+by+id+desc&num=6&return=yw\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select url,title from v9_mxst_down where catid=177 and xueke_fl='历史' and nianji_fl='八年级' order by id desc LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$yw = $a;unset($a);?>
                   <?php $n=1;if(is_array($yw)) foreach($yw AS $r) { ?>
                   <p ><a target="_blank" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r['title'],70);?></a></p>
                   <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> </li>
                 <li class="fl">
                   <h2>九年级</h2>
                   <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=2640dbfbc1fb8c7b1f4651981c73cb0b&sql=select+url%2Ctitle+from+v9_mxst_down+where+catid%3D177+and+xueke_fl%3D%27%E5%8E%86%E5%8F%B2%27+and+nianji_fl%3D%27%E4%B9%9D%E5%B9%B4%E7%BA%A7%27+order+by+id+desc&num=6&return=yw\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select url,title from v9_mxst_down where catid=177 and xueke_fl='历史' and nianji_fl='九年级' order by id desc LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$yw = $a;unset($a);?>
                   <?php $n=1;if(is_array($yw)) foreach($yw AS $r) { ?>
                   <p ><a target="_blank" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r['title'],70);?></a></p>
                   <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> </li>
               </ul>
               <ul id="bk_conx_info_9" style="display:none;">
                 <li class="fl">
                   <h2>七年级</h2>
                   <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=53db7c379fb5664cb4fb0ee17ede92d4&sql=select+url%2Ctitle+from+v9_mxst_down+where+catid%3D177+and+xueke_fl%3D%27%E5%9C%B0%E7%90%86%27+and+nianji_fl%3D%27%E4%B8%83%E5%B9%B4%E7%BA%A7%27+order+by+id+desc&num=6&return=yw\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select url,title from v9_mxst_down where catid=177 and xueke_fl='地理' and nianji_fl='七年级' order by id desc LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$yw = $a;unset($a);?>
                   <?php $n=1;if(is_array($yw)) foreach($yw AS $r) { ?>
                   <p ><a target="_blank" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r['title'],70);?></a></p>
                   <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> </li>
                 <li class="fl">
                   <h2>八年级</h2>
                   <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=cbffe5c22cc7726344bf1a04faa1a377&sql=select+url%2Ctitle+from+v9_mxst_down+where+catid%3D177+and+xueke_fl%3D%27%E5%9C%B0%E7%90%86%27+and+nianji_fl%3D%27%E5%85%AB%E5%B9%B4%E7%BA%A7%27+order+by+id+desc&num=6&return=yw\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select url,title from v9_mxst_down where catid=177 and xueke_fl='地理' and nianji_fl='八年级' order by id desc LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$yw = $a;unset($a);?>
                   <?php $n=1;if(is_array($yw)) foreach($yw AS $r) { ?>
                   <p ><a target="_blank" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r['title'],70);?></a></p>
                   <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> </li>
                 <li class="fl">
                   <h2>九年级</h2>
                   <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=c45d56517139bb9ea9eaa3c600680a57&sql=select+url%2Ctitle+from+v9_mxst_down+where+catid%3D177+and+xueke_fl%3D%27%E5%9C%B0%E7%90%86%27+and+nianji_fl%3D%27%E4%B9%9D%E5%B9%B4%E7%BA%A7%27+order+by+id+desc&num=6&return=yw\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select url,title from v9_mxst_down where catid=177 and xueke_fl='地理' and nianji_fl='九年级' order by id desc LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$yw = $a;unset($a);?>
                   <?php $n=1;if(is_array($yw)) foreach($yw AS $r) { ?>
                   <p ><a target="_blank" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r['title'],70);?></a></p>
                   <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> </li>
               </ul>
             </div>
           </div>
<div class="mt10"></div>
<div class="con5 area">
 <div class="con3_l fl">
   <div class="con3_l_l">
    <h2>
      <ul>
          <li class="by AA" id="con3_l_li_key_1" onmouseover="tab_show('con3_l_li', 'by', 1, 2);"><a href="/index.php?m=content&c=index&a=lists&catid=177&stsm=精品&nianji_fl=初">初中精品试题</a></li>
          <li class="AA" id="con3_l_li_key_2" onmouseover="tab_show('con3_l_li', 'by', 2, 2);"><a href="/index.php?m=content&c=index&a=lists&catid=177&nianji_fl=初">热点推荐</a></li>
      </ul>
    </h2>
    <div class="con3_l_li">
      <div class="recom_B" id="con3_l_li_info_1">
      <dl>  
        <dd><p class="img"><a href="/index.php?m=content&c=index&a=show&catid=177&id=100909"><img src="<?php echo IMG_PATH;?>zzzsimgs/cent_lisr_pic.jpg" /></a><a href="/index.php?m=content&c=index&a=show&catid=177&id=100909">去过抚顺皇家极地海洋世界的朋友们，都对极地的小企鹅印象深刻。今天，就让我们…</a></p> 
          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=88cc6efa29e1daf797dd89b52390c4d3&sql=select+url%2Ctitle+from+v9_mxst_down+where+catid%3D177+and+nianji_fl%3D%27%E5%88%9D%E4%B8%AD%27+and+stsm%3D%27%E7%B2%BE%E5%93%81%E8%AF%95%E5%8D%B7%27+and+leibie%3D%27%E8%AF%95%E9%A2%98%27+order+by+id+desc&num=9&return=gaosan_fx\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select url,title from v9_mxst_down where catid=177 and nianji_fl='初中' and stsm='精品试卷' and leibie='试题' order by id desc LIMIT 9");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$gaosan_fx = $a;unset($a);?>
      <?php $n=1;if(is_array($gaosan_fx)) foreach($gaosan_fx AS $fx) { ?>
         <p><a target="_blank" href="<?php echo $fx['url'];?>" title="<?php echo $fx['title'];?>">·<?php echo str_cut($fx[title],55);?></a></p>
         <?php $n++;}unset($n); ?>
         <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
         </dd>
        </dl>

        
    
      </div>
      <div class="recom_B" id="con3_l_li_info_2" style="display:none;">
      
      <dl>  
        <dd><p class="img"><a href="/index.php?m=content&c=index&a=show&catid=177&id=100907"><img src="<?php echo IMG_PATH;?>zzzsimgs/cent_lisr_pic.jpg" /></a><a href="/index.php?m=content&c=index&a=show&catid=177&id=100907">圆明园是北京的一处伤口。一百多年了，伤口仍隐隐作痛。这份疼痛今天又传达到我的笔尖…</a></p> 
       <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=b49cbb08254874c8dfb1e885208416ee&sql=select+url%2Ctitle+from+v9_mxst_down+where+catid%3D177+and+nianji_fl%3D%27%E5%88%9D%E4%B8%AD%27+order+by+id+desc&num=9&return=gaosan_fx\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select url,title from v9_mxst_down where catid=177 and nianji_fl='初中' order by id desc LIMIT 9");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$gaosan_fx = $a;unset($a);?>
      <?php $n=1;if(is_array($gaosan_fx)) foreach($gaosan_fx AS $fx) { ?>
         <p><a target="_blank" href="<?php echo $fx['url'];?>" title="<?php echo $fx['title'];?>">·<?php echo str_cut($fx[title],55);?></a></p>
         <?php $n++;}unset($n); ?>
         <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
         </dd>
        </dl>
      </div>
     </div>
  </div>
  </div>
  <div class="con3_a fl">
    <div class="con3_r con3_a_t" style="width:420px;">
    <h2 style="width:420px;">
      <ul>
        <li class="by AA" id="fff_key_1" onmouseover="tab_show('fff', 'by', 1, 3);"><a href="/index.php?m=content&c=index&a=lists&catid=177&zhuti2=一轮复习&nianji_fl=七年级">初一名题</a></li>
        <li class="AA" id="fff_key_2" onmouseover="tab_show('fff', 'by', 2, 3);"><a href="/index.php?m=content&c=index&a=lists&catid=177&zhuti2=二轮复习&nianji_fl=八年级">初二名题</a></li>
        <li class="AA" id="fff_key_3" onmouseover="tab_show('fff', 'by', 3, 3);"><a href="/index.php?m=content&c=index&a=lists&catid=177&zhuti2=三轮冲刺&nianji_fl=九年级">初三名题</a></li>
      </ul>
    </h2>
      <div class="fff ">
       <div class="con3_a_list" id="fff_info_1" >
        <dl>
          <dt><img src="<?php echo IMG_PATH;?>zzzsimgs/centa10.jpg" /></dt>
          <dd><a href="/index.php?m=content&c=index&a=lists&catid=177&zhuti2=一轮复习&nianji_fl=七年级">初一名题</a></dd>
        </dl>
        <ul>
         <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=cd54315ec37b94aa0cacd338d22ea0d8&sql=select+url%2Ctitle+from+v9_mxst_down+where+catid%3D177+and+nianji_fl%3D%27%E4%B8%83%E5%B9%B4%E7%BA%A7%27+and+zhuti2%3D%27%E4%B8%80%E8%BD%AE%E5%A4%8D%E4%B9%A0%27+order+by+id+desc&num=4&return=gaosan_fx\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select url,title from v9_mxst_down where catid=177 and nianji_fl='七年级' and zhuti2='一轮复习' order by id desc LIMIT 4");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$gaosan_fx = $a;unset($a);?>
      <?php $n=1;if(is_array($gaosan_fx)) foreach($gaosan_fx AS $fx) { ?>
       <li><a target="_blank" href="<?php echo $jp['url'];?>" title="<?php echo $fx['title'];?>">·<?php echo str_cut($fx[title],50);?> </a></li>
       <?php $n++;}unset($n); ?>
         <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>
        </div>
       <div class="con3_a_list" id="fff_info_2" style="display:none">
        <dl>
          <dt><img src="<?php echo IMG_PATH;?>zzzsimgs/centa10.jpg" /></dt>
          <dd><a href="/index.php?m=content&c=index&a=lists&catid=177&zhuti2=二轮复习&nianji_fl=八年级">初二名题</a></dd>
        </dl>
        <ul>
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=6b2ac04618f41bf13c51b020f51894ad&sql=select+url%2Ctitle+from+v9_mxst_down+where+catid%3D177+and+nianji_fl%3D%27%E5%85%AB%E5%B9%B4%E7%BA%A7%27+and+zhuti2%3D%27%E4%BA%8C%E8%BD%AE%E5%A4%8D%E4%B9%A0%27+order+by+id+desc&num=4&return=gaosan_fx\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select url,title from v9_mxst_down where catid=177 and nianji_fl='八年级' and zhuti2='二轮复习' order by id desc LIMIT 4");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$gaosan_fx = $a;unset($a);?>
      <?php $n=1;if(is_array($gaosan_fx)) foreach($gaosan_fx AS $fx) { ?>
       <li><a target="_blank" href="<?php echo $fx['url'];?>" title="<?php echo $fx['title'];?>">·<?php echo str_cut($fx[title],50);?> </a></li>
       <?php $n++;}unset($n); ?>
         <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>
        </div>
       <div class="con3_a_list" id="fff_info_3" style="display:none">
        <dl>
          <dt><img src="<?php echo IMG_PATH;?>zzzsimgs/centa10.jpg" /></dt>
          <dd><a href="/index.php?m=content&c=index&a=lists&catid=177&zhuti2=三轮冲刺&nianji_fl=九年级">初三名题</a></dd>
        </dl>
        <ul>
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=50118b5e81fbe5db7950e21ea30a2486&sql=select+url%2Ctitle+from+v9_mxst_down+where+catid%3D177+and+nianji_fl%3D%27%E4%B9%9D%E5%B9%B4%E7%BA%A7%27++and+zhuti2%3D%27%E4%B8%89%E8%BD%AE%E5%86%B2%E5%88%BA%27+order+by+id+desc&num=4&return=gaosan_fx\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select url,title from v9_mxst_down where catid=177 and nianji_fl='九年级'  and zhuti2='三轮冲刺' order by id desc LIMIT 4");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$gaosan_fx = $a;unset($a);?>
      <?php $n=1;if(is_array($gaosan_fx)) foreach($gaosan_fx AS $fx) { ?>
       <li><a target="_blank" href="<?php echo $fx['url'];?>" title="<?php echo $fx['title'];?>">·<?php echo str_cut($fx[title],50);?> </a></li>
       <?php $n++;}unset($n); ?>
         <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>
        </div>
      </div>
      
    </div>
    <div class="con3_r con3_a_t" style="width:420px;">
      <h2 style="width:420px;">
      <ul>
        <li class="by AA" id="ffff_key_1" onmouseover="tab_show('ffff', 'by', 1, 2);"><a href="/index.php?m=content&c=index&a=lists&catid=177&nianji_fl=初">初中最新资源</a></li>
        <li class="AA" id="ffff_key_2" onmouseover="tab_show('ffff', 'by', 2, 2);"><a href="/index.php?m=content&c=index&a=lists&catid=177&zhuti2=历年真题&nianji_fl=初">历年真题</a></li>
   
      </ul>
    </h2>
      <div class="ffff">
       <div class="con3_a_list" id="ffff_info_1" >
        <dl>
          <dt><img src="<?php echo IMG_PATH;?>zzzsimgs/centa11.jpg" /></dt>
         <dt><img src="<?php echo IMG_PATH;?>zzzsimgs/centa12.jpg" /></dt>
        </dl>
        <ul>
           <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=a9722bf1e036e8b8b8831a15e07f3e9a&sql=select+url%2Ctitle+from+v9_mxst_down+where+catid%3D177+and+nianji_fl%3D%27%E5%88%9D%E4%B8%AD%27+order+by+id+desc&num=6&order=id+DESC&return=gaosan_fx\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select url,title from v9_mxst_down where catid=177 and nianji_fl='初中' order by id desc LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$gaosan_fx = $a;unset($a);?>
      <?php $n=1;if(is_array($gaosan_fx)) foreach($gaosan_fx AS $fx) { ?>
       <li><a href="<?php echo $fx['url'];?>" target="_blank" title="<?php echo $fx['title'];?>">·<?php echo str_cut($fx[title],50);?> </a></li>
       <?php $n++;}unset($n); ?>
         <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>
        </div>
       <div class="con3_a_list" id="ffff_info_2" style="display:none">
        <dl>
          <dt><img src="<?php echo IMG_PATH;?>zzzsimgs/con3_a_list_pic.jpg" /></dt>
           <dt><img src="<?php echo IMG_PATH;?>zzzsimgs/con3_a_list_pic.jpg" /></dt>
        </dl>
        <ul>
           <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=e6b3a721910ba2662ef5629fb2130f5c&sql=select+url%2Ctitle+from+v9_mxst_down+where+catid%3D177+and+nianji_fl%3D%27%E5%88%9D%E4%B8%AD%27+and+zhuti2%3D%27%E5%8E%86%E5%B9%B4%E7%9C%9F%E9%A2%98%27+order+by+id+desc&num=6&return=gaosan_fx\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select url,title from v9_mxst_down where catid=177 and nianji_fl='初中' and zhuti2='历年真题' order by id desc LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$gaosan_fx = $a;unset($a);?>
      <?php $n=1;if(is_array($gaosan_fx)) foreach($gaosan_fx AS $fx) { ?>
       <li><a href="<?php echo $fx['url'];?>" target="_blank" title="<?php echo $fx['title'];?>">·<?php echo str_cut($fx[title],50);?> </a></li>
       <?php $n++;}unset($n); ?>
         <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>
        </div>
       
      </div>
      
    </div>
  </div>
  <div class="con3_r fr">
     <h2>
      <ul>
        <li class="by AA"><a href="/index.php?m=content&c=index&a=lists&catid=177">下载排行</a></li>
        <!--<li class="AA" id="con3_list_z_key_2" onmouseover="tab_show('con3_list_z', 'by', 2, 2);"><a href="#">自主招生</a></li>-->
      </ul>
    </h2>

<div class="con3_jl_r">
<ul>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=7cf7b92761ec6cf3f4fdcd8f2eedadac&sql=select+%2A+from+v9_mxst_down+where+status%3D99+order+by+id+desc&num=12&ordertype=6\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from v9_mxst_down where status=99 order by id desc LIMIT 12");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?> 
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>  
<li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><?php echo str_cut($r[title],50);?></a> </li>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
</ul>
    </div>
  </div>

</div>
<div class="mt10"></div>
<div class="area2 area">
  <div class="area_top">
  <h2>备课中心</h2>
    <ul>
      <li id="area_list_key_1" onmouseover="tab_show('area_list', 'bt', 1, 9);"><a href="/index.php?m=content&c=index&a=lists&catid=204&xueke_fl=语文">语文</a></li>
      <li id="area_list_key_2" onmouseover="tab_show('area_list', 'bt', 2, 9);"><a href="/index.php?m=content&c=index&a=lists&catid=204&xueke_fl=数学">数学</a></li>
      <li id="area_list_key_3" onmouseover="tab_show('area_list', 'bt', 3, 9);"><a href="/index.php?m=content&c=index&a=lists&catid=204&xueke_fl=英语">英语</a></li>
      <li id="area_list_key_4" onmouseover="tab_show('area_list', 'bt', 4, 9);"><a href="/index.php?m=content&c=index&a=lists&catid=204&xueke_fl=物理">物理</a></li>
      <li id="area_list_key_5" onmouseover="tab_show('area_list', 'bt', 5, 9);"><a href="/index.php?m=content&c=index&a=lists&catid=204&xueke_fl=化学">化学</a></li>
      <li id="area_list_key_6" onmouseover="tab_show('area_list', 'bt', 6, 9);"><a href="/index.php?m=content&c=index&a=lists&catid=204&xueke_fl=生物">生物</a></li>
      <li id="area_list_key_7" onmouseover="tab_show('area_list', 'bt', 7, 9);"><a href="/index.php?m=content&c=index&a=lists&catid=204&xueke_fl=政治">政治</a></li>
      <li id="area_list_key_8" onmouseover="tab_show('area_list', 'bt', 8, 9);"><a href="/index.php?m=content&c=index&a=lists&catid=204&xueke_fl=历史">历史</a></li>
      <li class="noe" id="area_list_key_9" onmouseover="tab_show('area_list', 'bt', 9, 9);"><a href="/index.php?m=content&c=index&a=lists&catid=204&xueke_fl=地理">地理</a></li>
    </ul>
  </div>
  <div class="area_list">
   <div class="area_list_js" id="area_list_info_1">
   
    <div class="area_list_l fl">
  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=01b8d896db6e1965b02556b68cb741b4&sql=SELECT+distinct+banben2+FROM+%60v9_mxst_down%60+where++trim%28banben2%29%3C%3E%27%27+and+trim%28banben2%29%3C%3E%27%E4%B8%8D%E5%88%86%E7%89%88%E6%9C%AC%27+and+xueke_fl%3D%27%E8%AF%AD%E6%96%87%27+order+by+id+desc&num=50&return=banben2\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT distinct banben2 FROM `v9_mxst_down` where  trim(banben2)<>'' and trim(banben2)<>'不分版本' and xueke_fl='语文' order by id desc LIMIT 50");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$banben2 = $a;unset($a);?>
      <?php $n=1;if(is_array($banben2)) foreach($banben2 AS $bb) { ?>
      
     <div class="a1">
       <span><strong><?php echo $bb['banben2'];?></strong></span>
       <ul>
         <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=97c3a8ae689dd9a0d135810f955c63b4&sql=SELECT+distinct+banbie+FROM+%60v9_mxst_down%60++where++trim%28banbie%29%3C%3E%27%27+and+xueke_fl%3D%27%E8%AF%AD%E6%96%87%27+order+by+%27banbie%27+desc+&num=10&return=banbie\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT distinct banbie FROM `v9_mxst_down`  where  trim(banbie)<>'' and xueke_fl='语文' order by 'banbie' desc  LIMIT 10");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$banbie = $a;unset($a);?>
      <?php $n=1;if(is_array($banbie)) foreach($banbie AS $bx) { ?>
     <li class="fl"><p class="fl"><a href="/index.php?m=content&c=index&a=lists&catid=204&xueke_fl=语文&banben2=<?php echo $bb['banben2'];?>&banbie=<?php echo $bx['banbie'];?>"><strong><?php echo $bx['banbie'];?></strong> </a></p>
      <p class="fr">
      <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=229a0e392d56e96ad856ce2510d270fb&sql=SELECT+distinct+leibie+FROM+%60v9_mxst_down%60+&num=6&return=leibie\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT distinct leibie FROM `v9_mxst_down`  LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$leibie = $a;unset($a);?>
      <?php $n=1;if(is_array($leibie)) foreach($leibie AS $dd) { ?>
      <a href="/index.php?m=content&c=index&a=lists&catid=204&xueke_fl=语文&banben2=<?php echo $bb['banben2'];?>&banbie=<?php echo $bx['banbie'];?>&leibie=<?php echo $dd['leibie'];?>"><?php echo $dd['leibie'];?></a> 
          <?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
      </p></li>
               <?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
     </ul>
     </div>
     <?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>

    
   </div>
   
    <div class="area_list_js" id="area_list_info_2" style="display:none;">
    <div class="area_list_l fl">
  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=2e918d8fcf89dbf299ebcf5ca54e0069&sql=SELECT+distinct+banben2+FROM+%60v9_mxst_down%60+where++trim%28banben2%29%3C%3E%27%27+and+trim%28banben2%29%3C%3E%27%E4%B8%8D%E5%88%86%E7%89%88%E6%9C%AC%27+and+xueke_fl%3D%27%E6%95%B0%E5%AD%A6%27+order+by+id+desc&num=50&return=banben2\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT distinct banben2 FROM `v9_mxst_down` where  trim(banben2)<>'' and trim(banben2)<>'不分版本' and xueke_fl='数学' order by id desc LIMIT 50");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$banben2 = $a;unset($a);?>
      <?php $n=1;if(is_array($banben2)) foreach($banben2 AS $bb) { ?>
      
     <div class="a1">
       <span><strong><?php echo $bb['banben2'];?></strong></span>
       <ul>
         <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=4c2c6f1974e1b08320d1621589fcb5fa&sql=SELECT+distinct+banbie+FROM+%60v9_mxst_down%60++where++trim%28banbie%29%3C%3E%27%27+and+xueke_fl%3D%27%E6%95%B0%E5%AD%A6%27+order+by+%27banbie%27+desc+&num=10&return=banbie\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT distinct banbie FROM `v9_mxst_down`  where  trim(banbie)<>'' and xueke_fl='数学' order by 'banbie' desc  LIMIT 10");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$banbie = $a;unset($a);?>
      <?php $n=1;if(is_array($banbie)) foreach($banbie AS $bx) { ?>
     <li class="fl"><p class="fl"><a href="/index.php?m=content&c=index&a=lists&catid=204&xueke_fl=数学&banben2=<?php echo $bb['banben2'];?>&banbie=<?php echo $bx['banbie'];?>"><strong><?php echo $bx['banbie'];?></strong> </a></p>
      <p class="fr">
      <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=229a0e392d56e96ad856ce2510d270fb&sql=SELECT+distinct+leibie+FROM+%60v9_mxst_down%60+&num=6&return=leibie\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT distinct leibie FROM `v9_mxst_down`  LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$leibie = $a;unset($a);?>
      <?php $n=1;if(is_array($leibie)) foreach($leibie AS $dd) { ?>
      <a href="/index.php?m=content&c=index&a=lists&catid=204&xueke_fl=数学&banben2=<?php echo $bb['banben2'];?>&banbie=<?php echo $bx['banbie'];?>&leibie=<?php echo $dd['leibie'];?>"><?php echo $dd['leibie'];?></a> 
          <?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
      </p></li>
               <?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
     </ul>
     </div>
     <?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>
    

   </div>
   <div class="area_list_js" id="area_list_info_3" style="display:none;">
    <div class="area_list_l fl">
  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=28d2d3df86bb063ac09674e8c95c3d2e&sql=SELECT+distinct+banben2+FROM+%60v9_mxst_down%60+where++trim%28banben2%29%3C%3E%27%27+and+trim%28banben2%29%3C%3E%27%E4%B8%8D%E5%88%86%E7%89%88%E6%9C%AC%27+and+xueke_fl%3D%27%E8%8B%B1%E8%AF%AD%27+order+by+id+desc&num=50&return=banben2\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT distinct banben2 FROM `v9_mxst_down` where  trim(banben2)<>'' and trim(banben2)<>'不分版本' and xueke_fl='英语' order by id desc LIMIT 50");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$banben2 = $a;unset($a);?>
      <?php $n=1;if(is_array($banben2)) foreach($banben2 AS $bb) { ?>
      
     <div class="a1">
       <span><strong><?php echo $bb['banben2'];?></strong></span>
       <ul>
         <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=2e9e8d60685bed9134da46946eb1321f&sql=SELECT+distinct+banbie+FROM+%60v9_mxst_down%60++where++trim%28banbie%29%3C%3E%27%27+and+xueke_fl%3D%27%E8%8B%B1%E8%AF%AD%27+order+by+%27banbie%27+desc+&num=10&return=banbie\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT distinct banbie FROM `v9_mxst_down`  where  trim(banbie)<>'' and xueke_fl='英语' order by 'banbie' desc  LIMIT 10");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$banbie = $a;unset($a);?>
      <?php $n=1;if(is_array($banbie)) foreach($banbie AS $bx) { ?>
     <li class="fl"><p class="fl"><a href="/index.php?m=content&c=index&a=lists&catid=204&xueke_fl=英语&banben2=<?php echo $bb['banben2'];?>&banbie=<?php echo $bx['banbie'];?>"><strong><?php echo $bx['banbie'];?></strong> </a></p>
      <p class="fr">
      <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=229a0e392d56e96ad856ce2510d270fb&sql=SELECT+distinct+leibie+FROM+%60v9_mxst_down%60+&num=6&return=leibie\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT distinct leibie FROM `v9_mxst_down`  LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$leibie = $a;unset($a);?>
      <?php $n=1;if(is_array($leibie)) foreach($leibie AS $dd) { ?>
      <a href="/index.php?m=content&c=index&a=lists&catid=204&xueke_fl=英语&banben2=<?php echo $bb['banben2'];?>&banbie=<?php echo $bx['banbie'];?>&leibie=<?php echo $dd['leibie'];?>"><?php echo $dd['leibie'];?></a> 
          <?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
      </p></li>
               <?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
     </ul>
     </div>
     <?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>

   </div>
   <div class="area_list_js" id="area_list_info_4" style="display:none;">
    <div class="area_list_l fl">
  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=7ec7b92f3916bab0ee2f9d9c9e4dffcf&sql=SELECT+distinct+banben2+FROM+%60v9_mxst_down%60+where++trim%28banben2%29%3C%3E%27%27+and+trim%28banben2%29%3C%3E%27%E4%B8%8D%E5%88%86%E7%89%88%E6%9C%AC%27+and+xueke_fl%3D%27%E7%89%A9%E7%90%86%27+order+by+id+desc&num=50&return=banben2\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT distinct banben2 FROM `v9_mxst_down` where  trim(banben2)<>'' and trim(banben2)<>'不分版本' and xueke_fl='物理' order by id desc LIMIT 50");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$banben2 = $a;unset($a);?>
      <?php $n=1;if(is_array($banben2)) foreach($banben2 AS $bb) { ?>
      
     <div class="a1">
       <span><strong><?php echo $bb['banben2'];?></strong></span>
       <ul>
         <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=35f3d8c8d72dffcc5d3e5ac61ba65f28&sql=SELECT+distinct+banbie+FROM+%60v9_mxst_down%60++where++trim%28banbie%29%3C%3E%27%27+and+xueke_fl%3D%27%E7%89%A9%E7%90%86%27+order+by+%27banbie%27+desc+&num=10&return=banbie\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT distinct banbie FROM `v9_mxst_down`  where  trim(banbie)<>'' and xueke_fl='物理' order by 'banbie' desc  LIMIT 10");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$banbie = $a;unset($a);?>
      <?php $n=1;if(is_array($banbie)) foreach($banbie AS $bx) { ?>
     <li class="fl"><p class="fl"><a href="/index.php?m=content&c=index&a=lists&catid=204&xueke_fl=物理&banben2=<?php echo $bb['banben2'];?>&banbie=<?php echo $bx['banbie'];?>"><strong><?php echo $bx['banbie'];?></strong> </a></p>
      <p class="fr">
      <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=229a0e392d56e96ad856ce2510d270fb&sql=SELECT+distinct+leibie+FROM+%60v9_mxst_down%60+&num=6&return=leibie\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT distinct leibie FROM `v9_mxst_down`  LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$leibie = $a;unset($a);?>
      <?php $n=1;if(is_array($leibie)) foreach($leibie AS $dd) { ?>
      <a href="/index.php?m=content&c=index&a=lists&catid=204&xueke_fl=物理&banben2=<?php echo $bb['banben2'];?>&banbie=<?php echo $bx['banbie'];?>&leibie=<?php echo $dd['leibie'];?>"><?php echo $dd['leibie'];?></a> 
          <?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
      </p></li>
               <?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
     </ul>
     </div>
     <?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>

   </div>
   <div class="area_list_js" id="area_list_info_5" style="display:none;">
    <div class="area_list_l fl">
  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=6978fe4814ddc2ca08e9b32e1a8edace&sql=SELECT+distinct+banben2+FROM+%60v9_mxst_down%60+where++trim%28banben2%29%3C%3E%27%27+and+trim%28banben2%29%3C%3E%27%E4%B8%8D%E5%88%86%E7%89%88%E6%9C%AC%27+and+xueke_fl%3D%27%E5%8C%96%E5%AD%A6%27+order+by+id+desc&num=50&return=banben2\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT distinct banben2 FROM `v9_mxst_down` where  trim(banben2)<>'' and trim(banben2)<>'不分版本' and xueke_fl='化学' order by id desc LIMIT 50");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$banben2 = $a;unset($a);?>
      <?php $n=1;if(is_array($banben2)) foreach($banben2 AS $bb) { ?>
      
     <div class="a1">
       <span><strong><?php echo $bb['banben2'];?></strong></span>
       <ul>
         <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=23a93b25645722651eac621fc9632340&sql=SELECT+distinct+banbie+FROM+%60v9_mxst_down%60++where++trim%28banbie%29%3C%3E%27%27+and+xueke_fl%3D%27%E5%8C%96%E5%AD%A6%27+order+by+%27banbie%27+desc+&num=10&return=banbie\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT distinct banbie FROM `v9_mxst_down`  where  trim(banbie)<>'' and xueke_fl='化学' order by 'banbie' desc  LIMIT 10");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$banbie = $a;unset($a);?>
      <?php $n=1;if(is_array($banbie)) foreach($banbie AS $bx) { ?>
     <li class="fl"><p class="fl"><a href="/index.php?m=content&c=index&a=lists&catid=204&xueke_fl=化学&banben2=<?php echo $bb['banben2'];?>&banbie=<?php echo $bx['banbie'];?>"><strong><?php echo $bx['banbie'];?></strong> </a></p>
      <p class="fr">
      <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=229a0e392d56e96ad856ce2510d270fb&sql=SELECT+distinct+leibie+FROM+%60v9_mxst_down%60+&num=6&return=leibie\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT distinct leibie FROM `v9_mxst_down`  LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$leibie = $a;unset($a);?>
      <?php $n=1;if(is_array($leibie)) foreach($leibie AS $dd) { ?>
      <a href="/index.php?m=content&c=index&a=lists&catid=204&xueke_fl=化学&banben2=<?php echo $bb['banben2'];?>&banbie=<?php echo $bx['banbie'];?>&leibie=<?php echo $dd['leibie'];?>"><?php echo $dd['leibie'];?></a> 
          <?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
      </p></li>
               <?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
     </ul>
     </div>
     <?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>

   </div>
   <div class="area_list_js" id="area_list_info_6" style="display:none;">
    <div class="area_list_l fl">
  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=2d57ccf057ea941eea2b4f6e7798d294&sql=SELECT+distinct+banben2+FROM+%60v9_mxst_down%60+where++trim%28banben2%29%3C%3E%27%27+and+trim%28banben2%29%3C%3E%27%E4%B8%8D%E5%88%86%E7%89%88%E6%9C%AC%27+and+xueke_fl%3D%27%E7%94%9F%E7%89%A9%27+order+by+id+desc&num=50&return=banben2\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT distinct banben2 FROM `v9_mxst_down` where  trim(banben2)<>'' and trim(banben2)<>'不分版本' and xueke_fl='生物' order by id desc LIMIT 50");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$banben2 = $a;unset($a);?>
      <?php $n=1;if(is_array($banben2)) foreach($banben2 AS $bb) { ?>
      
     <div class="a1">
       <span><strong><?php echo $bb['banben2'];?></strong></span>
       <ul>
         <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=1f1d33d844959a379dca60d88eee29b7&sql=SELECT+distinct+banbie+FROM+%60v9_mxst_down%60++where++trim%28banbie%29%3C%3E%27%27+and+xueke_fl%3D%27%E7%94%9F%E7%89%A9%27+order+by+%27banbie%27+desc+&num=10&return=banbie\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT distinct banbie FROM `v9_mxst_down`  where  trim(banbie)<>'' and xueke_fl='生物' order by 'banbie' desc  LIMIT 10");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$banbie = $a;unset($a);?>
      <?php $n=1;if(is_array($banbie)) foreach($banbie AS $bx) { ?>
     <li class="fl"><p class="fl"><a href="/index.php?m=content&c=index&a=lists&catid=204&xueke_fl=生物&banben2=<?php echo $bb['banben2'];?>&banbie=<?php echo $bx['banbie'];?>"><strong><?php echo $bx['banbie'];?></strong> </a></p>
      <p class="fr">
      <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=229a0e392d56e96ad856ce2510d270fb&sql=SELECT+distinct+leibie+FROM+%60v9_mxst_down%60+&num=6&return=leibie\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT distinct leibie FROM `v9_mxst_down`  LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$leibie = $a;unset($a);?>
      <?php $n=1;if(is_array($leibie)) foreach($leibie AS $dd) { ?>
      <a href="/index.php?m=content&c=index&a=lists&catid=204&xueke_fl=生物&banben2=<?php echo $bb['banben2'];?>&banbie=<?php echo $bx['banbie'];?>&leibie=<?php echo $dd['leibie'];?>"><?php echo $dd['leibie'];?></a> 
          <?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
      </p></li>
               <?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
     </ul>
     </div>
     <?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>

   </div>
   <div class="area_list_js" id="area_list_info_7" style="display:none;">
    <div class="area_list_l fl">
  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=84a7ab181adba67d080586ff332cbfe9&sql=SELECT+distinct+banben2+FROM+%60v9_mxst_down%60+where++trim%28banben2%29%3C%3E%27%27+and+trim%28banben2%29%3C%3E%27%E4%B8%8D%E5%88%86%E7%89%88%E6%9C%AC%27+and+xueke_fl%3D%27%E6%94%BF%E6%B2%BB%27+order+by+id+desc&num=50&return=banben2\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT distinct banben2 FROM `v9_mxst_down` where  trim(banben2)<>'' and trim(banben2)<>'不分版本' and xueke_fl='政治' order by id desc LIMIT 50");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$banben2 = $a;unset($a);?>
      <?php $n=1;if(is_array($banben2)) foreach($banben2 AS $bb) { ?>
      
     <div class="a1">
       <span><strong><?php echo $bb['banben2'];?></strong></span>
       <ul>
         <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=36ecfc481d7ec0bb4ba954e7bc4eb980&sql=SELECT+distinct+banbie+FROM+%60v9_mxst_down%60++where++trim%28banbie%29%3C%3E%27%27+and+xueke_fl%3D%27%E6%94%BF%E6%B2%BB%27+order+by+%27banbie%27+desc+&num=10&return=banbie\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT distinct banbie FROM `v9_mxst_down`  where  trim(banbie)<>'' and xueke_fl='政治' order by 'banbie' desc  LIMIT 10");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$banbie = $a;unset($a);?>
      <?php $n=1;if(is_array($banbie)) foreach($banbie AS $bx) { ?>
     <li class="fl"><p class="fl"><a href="/index.php?m=content&c=index&a=lists&catid=204&xueke_fl=政治&banben2=<?php echo $bb['banben2'];?>&banbie=<?php echo $bx['banbie'];?>"><strong><?php echo $bx['banbie'];?></strong> </a></p>
      <p class="fr">
      <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=229a0e392d56e96ad856ce2510d270fb&sql=SELECT+distinct+leibie+FROM+%60v9_mxst_down%60+&num=6&return=leibie\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT distinct leibie FROM `v9_mxst_down`  LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$leibie = $a;unset($a);?>
      <?php $n=1;if(is_array($leibie)) foreach($leibie AS $dd) { ?>
      <a href="/index.php?m=content&c=index&a=lists&catid=204&xueke_fl=政治&banben2=<?php echo $bb['banben2'];?>&banbie=<?php echo $bx['banbie'];?>&leibie=<?php echo $dd['leibie'];?>"><?php echo $dd['leibie'];?></a> 
          <?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
      </p></li>
               <?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
     </ul>
     </div>
     <?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>

   </div>
   <div class="area_list_js" id="area_list_info_8" style="display:none;">
    <div class="area_list_l fl">
  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=22b03990c36a56a5924958c2678f4257&sql=SELECT+distinct+banben2+FROM+%60v9_mxst_down%60+where++trim%28banben2%29%3C%3E%27%27+and+trim%28banben2%29%3C%3E%27%E4%B8%8D%E5%88%86%E7%89%88%E6%9C%AC%27+and+xueke_fl%3D%27%E5%8E%86%E5%8F%B2%27+order+by+id+desc&num=50&return=banben2\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT distinct banben2 FROM `v9_mxst_down` where  trim(banben2)<>'' and trim(banben2)<>'不分版本' and xueke_fl='历史' order by id desc LIMIT 50");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$banben2 = $a;unset($a);?>
      <?php $n=1;if(is_array($banben2)) foreach($banben2 AS $bb) { ?>
      
     <div class="a1">
       <span><strong><?php echo $bb['banben2'];?></strong></span>
       <ul>
         <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=8828400ae0786df0290ad6325def9281&sql=SELECT+distinct+banbie+FROM+%60v9_mxst_down%60++where++trim%28banbie%29%3C%3E%27%27+and+xueke_fl%3D%27%E5%8E%86%E5%8F%B2%27+order+by+%27banbie%27+desc+&num=10&return=banbie\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT distinct banbie FROM `v9_mxst_down`  where  trim(banbie)<>'' and xueke_fl='历史' order by 'banbie' desc  LIMIT 10");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$banbie = $a;unset($a);?>
      <?php $n=1;if(is_array($banbie)) foreach($banbie AS $bx) { ?>
     <li class="fl"><p class="fl"><a href="/index.php?m=content&c=index&a=lists&catid=204&xueke_fl=历史&banben2=<?php echo $bb['banben2'];?>&banbie=<?php echo $bx['banbie'];?>"><strong><?php echo $bx['banbie'];?></strong> </a></p>
      <p class="fr">
      <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=229a0e392d56e96ad856ce2510d270fb&sql=SELECT+distinct+leibie+FROM+%60v9_mxst_down%60+&num=6&return=leibie\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT distinct leibie FROM `v9_mxst_down`  LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$leibie = $a;unset($a);?>
      <?php $n=1;if(is_array($leibie)) foreach($leibie AS $dd) { ?>
      <a href="/index.php?m=content&c=index&a=lists&catid=204&xueke_fl=历史&banben2=<?php echo $bb['banben2'];?>&banbie=<?php echo $bx['banbie'];?>&leibie=<?php echo $dd['leibie'];?>"><?php echo $dd['leibie'];?></a> 
          <?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
      </p></li>
               <?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
     </ul>
     </div>
     <?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>

   </div>
   <div class="area_list_js" id="area_list_info_9" style="display:none;">
    <div class="area_list_l fl">
  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=fe95b026ca90d74127246bf3cd43e686&sql=SELECT+distinct+banben2+FROM+%60v9_mxst_down%60+where++trim%28banben2%29%3C%3E%27%27+and+trim%28banben2%29%3C%3E%27%E4%B8%8D%E5%88%86%E7%89%88%E6%9C%AC%27+and+xueke_fl%3D%27%E5%9C%B0%E7%90%86%27+order+by+id+desc&num=50&return=banben2\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT distinct banben2 FROM `v9_mxst_down` where  trim(banben2)<>'' and trim(banben2)<>'不分版本' and xueke_fl='地理' order by id desc LIMIT 50");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$banben2 = $a;unset($a);?>
      <?php $n=1;if(is_array($banben2)) foreach($banben2 AS $bb) { ?>
      
     <div class="a1">
       <span><strong><?php echo $bb['banben2'];?></strong></span>
       <ul>
         <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=855901d8f180067495e7d4002ccf5207&sql=SELECT+distinct+banbie+FROM+%60v9_mxst_down%60++where++trim%28banbie%29%3C%3E%27%27+and+xueke_fl%3D%27%E5%9C%B0%E7%90%86%27+order+by+%27banbie%27+desc+&num=10&return=banbie\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT distinct banbie FROM `v9_mxst_down`  where  trim(banbie)<>'' and xueke_fl='地理' order by 'banbie' desc  LIMIT 10");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$banbie = $a;unset($a);?>
      <?php $n=1;if(is_array($banbie)) foreach($banbie AS $bx) { ?>
     <li class="fl"><p class="fl"><a href="/index.php?m=content&c=index&a=lists&catid=204&xueke_fl=地理&banben2=<?php echo $bb['banben2'];?>&banbie=<?php echo $bx['banbie'];?>"><strong><?php echo $bx['banbie'];?></strong> </a></p>
      <p class="fr">
      <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=229a0e392d56e96ad856ce2510d270fb&sql=SELECT+distinct+leibie+FROM+%60v9_mxst_down%60+&num=6&return=leibie\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT distinct leibie FROM `v9_mxst_down`  LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$leibie = $a;unset($a);?>
      <?php $n=1;if(is_array($leibie)) foreach($leibie AS $dd) { ?>
      <a href="/index.php?m=content&c=index&a=lists&catid=204&xueke_fl=地理&banben2=<?php echo $bb['banben2'];?>&banbie=<?php echo $bx['banbie'];?>&leibie=<?php echo $dd['leibie'];?>"><?php echo $dd['leibie'];?></a> 
          <?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
      </p></li>
               <?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
     </ul>
     </div>
     <?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>

   </div>

   <!---->
 
  </div>
</div>
<!--内容结束-->
<div class="mt10"></div>
<div class="con6 area">
  <h2><a>全优精品教辅</a></h2>
  <div class="con6_list">
    <ul>
       <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=51b36d5f91a594d84377480a6d0fa7a3&action=lists&catid=180&num=6&order=id+DESC&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'180','order'=>'id DESC','limit'=>'6',));}?>
      <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
         <li><a href="<?php echo $v['url'];?>" title="<?php echo $v['title'];?>" target="_blank"><img src="<?php echo thumb($v[thumb],130,130);?>" /></a><span><a href="<?php echo $v['url'];?>" title="<?php echo $v['title'];?>" target="_blank"><?php echo str_cut($v[title],30,'');?></a></span></li>
         <?php $n++;}unset($n); ?>
         <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
     
    </ul>
  </div>
</div>

<!--文字开始-->
<div class="mt10"></div>

<div class="mt10"></div>

<div class="mt10"></div>

<div class="mt10"></div>
<div class="oblig area" style=" display:none">
  <div class="boli_l fl">
       <div class="boli_l_a">
        <ul>
          <li class="by AA" id="recom_A_key_1" onmouseover="tab_show('recom_A', 'by', 1, 2);"><a href="#">（预留栏目）</a></li>
          <li class="AA" id="recom_A_key_2" onmouseover="tab_show('recom_A', 'by', 2, 2);"></li>
        </ul>
    </div>
       <div class="boli_l_b">
        <ul>
          <li><a href="#">·高三名题模拟考试题模拟考试</a></li>
          <li><a href="#">·高三名题模拟考试题模拟考试</a></li>
          <li><a href="#">·高三名题模拟考试题模拟考试</a></li>
          <li><a href="#">·高三名题模拟考试题模拟考试</a></li>
          <li><a href="#">·高三名题模拟考试题模拟考试</a></li>
          <li><a href="#">·高三名题模拟考试题模拟考试</a></li>
        </ul>
    </div>
  </div>
    <div class="boli_a fl">
       <div class="boli_a_a">
        <ul>
          <li class="by" id="recom_A_key_1" onmouseover="tab_show('recom_A', 'by', 1, 2);"><a href="#">（预留栏目）</a></li>
          <li class="AA" id="recom_A_key_2" onmouseover="tab_show('recom_A', 'by', 2, 2);"><a href="#">查看更多>></a></li>
        </ul>
    </div>
       <div class="boli_l_b">
        <ul>
          <li><a href="#">·高三名题模拟考试题模拟考试</a></li>
          <li><a href="#">·高三名题模拟考试题模拟考试</a></li>
          <li><a href="#">·高三名题模拟考试题模拟考试</a></li>
          <li><a href="#">·高三名题模拟考试题模拟考试</a></li>
          <li><a href="#">·高三名题模拟考试题模拟考试</a></li>
          <li><a href="#">·高三名题模拟考试题模拟考试</a></li>
        </ul>
    </div>
    </div>
    <div class="boli_r fr" style=" display:none">
        <div class="boli_r_a">
        <ul>
          <li class="by AA" id="recom_A_key_1" onmouseover="tab_show('recom_A', 'by', 1, 2);"><a href="#">（预留栏目）</a></li>
          <li class="AA" id="recom_A_key_2" onmouseover="tab_show('recom_A', 'by', 2, 2);"></li>
        </ul>
    </div>
       <div class="boli_l_b">
        <ul>
          <li><a href="#">·高三名题模拟考试题模拟考试</a></li>
          <li><a href="#">·高三名题模拟考试题模拟考试</a></li>
          <li><a href="#">·高三名题模拟考试题模拟考试</a></li>
          <li><a href="#">·高三名题模拟考试题模拟考试</a></li>
          <li><a href="#">·高三名题模拟考试题模拟考试</a></li>
          <li><a href="#">·高三名题模拟考试题模拟考试</a></li>
        </ul>
    </div>
    </div>
</div>
<!--文字结束-->
<div class="mt10"></div>
<!--底部开始-->
<div class="School area">
   <div class="School_l fl">   
     <div class="School_l_t">
       <h2 class="fl">名师名校</h2>
       <ul class="fl">
         <li class="by AA" id="School_bt_a_key_1" onmouseover="tab_show('School_bt', 'by', 1, 3);"><a href="#">校长风采</a></li>
         <li id="School_bt_key_2" onmouseover="tab_show('School_bt', 'by', 2, 3);"><a href="#">名师风采</a></li>
         <li id="School_bt_key_3" onmouseover="tab_show('School_bt', 'by', 3, 3);"><a href="#">名校风采</a></li>
       </ul>
     </div>
     <div class="School_bt">
       <div class="School_bt_a" id="School_bt_info_1">
       <div class="School_l_b">
       <ul>


<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=df9d295fbcfcb07581835b28714392f4&sql=SELECT+%2A+FROM+%60gaokao%60.%60v9_news%60+WHERE+status%3D99+AND+catid%3D%27196%27+ORDER+BY+id+DESC+limit+0%2C5+--&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM `gaokao`.`v9_news` WHERE status=99 AND catid='196' ORDER BY id DESC limit 0,5 -- LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>

 <ul>
<?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
<li><img src="<?php echo $val['thumb'];?>" width="134" height="102" /><span><a href="<?php echo $val['url'];?>"><?php echo $val['title'];?></a></span></li>
 <?php $n++;}unset($n); ?>
 </ul>
 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>


       </ul>
     </div>
       <div class="School_l_a">

<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=c5a0edef55501da897c48d7c7b2b3361&sql=SELECT+%2A+FROM+%60gaokao%60.%60v9_news%60+WHERE+status%3D99+AND+catid%3D%27196%27+ORDER+BY+id+DESC+limit+5%2C12+--&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM `gaokao`.`v9_news` WHERE status=99 AND catid='196' ORDER BY id DESC limit 5,12 -- LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
 <ul>
<?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
<li><a href="<?php echo $val['url'];?>"><?php echo $val['title'];?></a></li>
 <?php $n++;}unset($n); ?>
 </ul>
 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=47f3dd1859fb61f253127ca3af9d2500&sql=SELECT+%2A+FROM+%60gaokao%60.%60v9_news%60+WHERE+status%3D99+AND+catid%3D%27196%27+ORDER+BY+id+DESC+limit+12%2C19+--&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM `gaokao`.`v9_news` WHERE status=99 AND catid='196' ORDER BY id DESC limit 12,19 -- LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
 <ul>
<?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
<li><a href="<?php echo $val['url'];?>"><?php echo $val['title'];?></a></li>
 <?php $n++;}unset($n); ?>
 </ul>
 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=4a95af2e517d17d047b3a90c102c7d54&sql=SELECT+%2A+FROM+%60gaokao%60.%60v9_news%60+WHERE+status%3D99+AND+catid%3D%27196%27+ORDER+BY+id+DESC+limit+19%2C26+--&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM `gaokao`.`v9_news` WHERE status=99 AND catid='196' ORDER BY id DESC limit 19,26 -- LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
 <ul>
<?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
<li><a href="<?php echo $val['url'];?>"><?php echo $val['title'];?></a></li>
 <?php $n++;}unset($n); ?>
 </ul>
 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>


     </div>
       </div>
       <div class="School_bt_a" id="School_bt_info_2" style="display:none;">
       <div class="School_l_b">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=2b5529fa0ed5efa34260c094afe2bf9d&sql=SELECT+%2A+FROM+%60gaokao%60.%60v9_news%60+WHERE+status%3D99+AND+catid%3D%27197%27+ORDER+BY+id+DESC+limit+0%2C5+--&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM `gaokao`.`v9_news` WHERE status=99 AND catid='197' ORDER BY id DESC limit 0,5 -- LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>

 <ul>
<?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
<li><img src="<?php echo $val['thumb'];?>" width="134" height="102" /><span><a href="<?php echo $val['url'];?>"><?php echo $val['title'];?></a></span></li>
 <?php $n++;}unset($n); ?>
 </ul>
 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

     </div>
       <div class="School_l_a">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=e5a0ea00b0cf5bcfd2f037b81acff2cd&sql=SELECT+%2A+FROM+%60gaokao%60.%60v9_news%60+WHERE+status%3D99+AND+catid%3D%27197%27+ORDER+BY+id+DESC+limit+5%2C12+--&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM `gaokao`.`v9_news` WHERE status=99 AND catid='197' ORDER BY id DESC limit 5,12 -- LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
 <ul>
<?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
<li><a href="<?php echo $val['url'];?>"><?php echo $val['title'];?></a></li>
 <?php $n++;}unset($n); ?>
 </ul>
 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=43ed5023c05eac912e6d171a02521e56&sql=SELECT+%2A+FROM+%60gaokao%60.%60v9_news%60+WHERE+status%3D99+AND+catid%3D%27197%27+ORDER+BY+id+DESC+limit+12%2C19+--&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM `gaokao`.`v9_news` WHERE status=99 AND catid='197' ORDER BY id DESC limit 12,19 -- LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
 <ul>
<?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
<li><a href="<?php echo $val['url'];?>"><?php echo $val['title'];?></a></li>
 <?php $n++;}unset($n); ?>
 </ul>
 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=93d0f4aa37212075e9198a7a3e8a2335&sql=SELECT+%2A+FROM+%60gaokao%60.%60v9_news%60+WHERE+status%3D99+AND+catid%3D%27197%27+ORDER+BY+id+DESC+limit+19%2C26+--&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM `gaokao`.`v9_news` WHERE status=99 AND catid='197' ORDER BY id DESC limit 19,26 -- LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
 <ul>
<?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
<li><a href="<?php echo $val['url'];?>"><?php echo $val['title'];?></a></li>
 <?php $n++;}unset($n); ?>
 </ul>
 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
     </div>
       </div>
       <div class="School_bt_a" id="School_bt_info_3" style="display:none;">
       <div class="School_l_b">
       <ul>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=6297e206d438df54d101c84a95d55c8d&sql=SELECT+%2A+FROM+%60gaokao%60.%60v9_news%60+WHERE+status%3D99+AND+catid%3D%27198%27+ORDER+BY+id+DESC+limit+0%2C5+--&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM `gaokao`.`v9_news` WHERE status=99 AND catid='198' ORDER BY id DESC limit 0,5 -- LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>

 <ul>

<?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
<li><img src="<?php echo $val['thumb'];?>" width="134" height="102" /><span><a href="<?php echo $val['url'];?>"><?php echo $val['title'];?></a></span></li>
 <?php $n++;}unset($n); ?>
 </ul>
 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

       </ul>
     </div>
       <div class="School_l_a">

 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=7902da9cb3c9839bfbac11953e2e6274&sql=SELECT+%2A+FROM+%60gaokao%60.%60v9_news%60+WHERE+status%3D99+AND+catid%3D%27198%27+ORDER+BY+id+DESC+limit+5%2C12+--&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM `gaokao`.`v9_news` WHERE status=99 AND catid='198' ORDER BY id DESC limit 5,12 -- LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
 <ul>
<?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
<li><a href="<?php echo $val['url'];?>"><?php echo $val['title'];?></a></li>
 <?php $n++;}unset($n); ?>
 </ul>
 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=6c2911199a906e596d87d7f92b3cb298&sql=SELECT+%2A+FROM+%60gaokao%60.%60v9_news%60+WHERE+status%3D99+AND+catid%3D%27198%27+ORDER+BY+id+DESC+limit+12%2C19+--&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM `gaokao`.`v9_news` WHERE status=99 AND catid='198' ORDER BY id DESC limit 12,19 -- LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
 <ul>
<?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
<li><a href="<?php echo $val['url'];?>"><?php echo $val['title'];?></a></li>
 <?php $n++;}unset($n); ?>
 </ul>
 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=aa385c409dd4666b2b4d068471bd3725&sql=SELECT+%2A+FROM+%60gaokao%60.%60v9_news%60+WHERE+status%3D99+AND+catid%3D%27198%27+ORDER+BY+id+DESC+limit+19%2C26+--&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM `gaokao`.`v9_news` WHERE status=99 AND catid='198' ORDER BY id DESC limit 19,26 -- LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
 <ul>
<?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
<li><a href="<?php echo $val['url'];?>"><?php echo $val['title'];?></a></li>
 <?php $n++;}unset($n); ?>
 </ul>
 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

     </div>
       </div>
     </div>
   </div>
   <div class="School_r fr">
      <div class="School_r_t">
       <h2><a href="#">百强合作百校</a></h2>
      
     </div>
     <div class="School_r_b">
       <ul>
      
      </ul>
     </div>
   </div>
</div>
<div class="mt10"></div>

<script language="JavaScript">
<!--

	$(function(){
		$('#username').focus();
	})

	function save_username() {
		if($('#cookietime').attr('checked')==true) {
			var username = $('#username').val();
			setcookie('username', username, 3);
		} else {
			delcookie('username');
		}
	}
	var username = getcookie('username');
	if(username != '' && username != null) {
		$('#username').val(username);
		$('#cookietime').attr('checked',true);
	}

	function show_login(site) {
		if(site == 'sina') {
			art.dialog({lock:false,title:'用新浪账号登录',id:'protocoliframe', iframe:'index.php?m=member&c=index&a=public_sina_login',width:'500',height:'310',yesText:'关闭'}, function(){
			});
		} else if(site == 'snda') {
			art.dialog({lock:false,title:'用盛大连接登录',id:'protocoliframe', iframe:'index.php?m=member&c=index&a=public_snda_login',width:'500',height:'310',yesText:'关闭'}, function(){
			});
		} else if(site == 'qq') {
			art.dialog({lock:false,title:'用腾讯微博帐号登录',id:'protocoliframe', iframe:'index.php?m=member&c=index&a=public_qq_login',width:'500',height:'310',yesText:'关闭'}, function(){
			});
		}
	}
//-->
</script>


<script type="text/javascript"> 
$(function(){
	new slide("#main-slide","cur",310,260,1);//焦点图
	new SwapTab(".SwapTab","span",".tab-content","ul","fb");//排行TAB
})
</script>
<?php include template("content","footer"); ?>