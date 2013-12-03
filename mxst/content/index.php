<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<!--main-->

<div class="main area">
    <div class="ml fl">
      <div class="ml_t">
	  <div class="FocusPic">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=dcd1c47627b910509414b85662be50cc&action=position&posid=1&order=listorder+DESC&thumb=1&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'1','order'=>'listorder DESC','thumb'=>'1','limit'=>'5',));}?>
            	<div class="content" id="main-slide" style="height:301px;">
                    <div class="changeDiv">  
                        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                        <a href="<?php echo $r['url'];?>" title="<?php echo str_cut($r['title'],30);?>"><img src="<?php echo thumb($r['thumb'],310,310);?>" alt="<?php echo $r['title'];?>" width="310" height="260" /></a>
                   	    <?php $n++;}unset($n); ?>
                    </div>
                </div>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
	  </div>
      <div class="ml_b">
        <h3><a href="#">今日名校</a></h3>
        <ul>
          <li><a href="#">长安一中</a></li>
          <li><a href="#">北京四中</a></li>
          <li><a href="#">包头一中</a></li>
          <li><a href="#">包头一中</a></li>
          <li><a href="#">包头一中</a></li>
          <li><a href="#">包头一中</a></li>
          <li><a href="#">包头一中</a></li>
          <li><a href="#">包头一中</a></li>
        </ul>
      </div>
    </div>
    <div class="ma fl">
      <div class="ma_t">
        <div class="ma_t_l">
          <p><a href="#">2013全国各地高考试题及答案发布 高考作文点评</a></p>
          <em>[<a href="#">2013四川一诊</a>] [<a href="#">2013广东一模</a>] [<a href="#">2013北京期末</a>] [<a href="#">2013湖北调研</a>]
[<a href="#">2013长春二模</a>] [<a href="#">2013广州一模</a>] [<a href="#">2013兰州一诊</a>] [<a href="#">2013青岛一模</a>]</em>
          <p><a href="#">2013高考题汇总：语文</a> <a href="#">数学</a> <a href="#">理综</a> <a href="#">文综</a> <a href="#">英语</a></p>
          <em>[<a href="#">2013四川一诊</a>] [<a href="#">2013广东一模</a>] [<a href="#">2013北京期末</a>] [<a href="#">2013湖北调研</a>]
[<a href="#">2013长春二模</a>] [<a href="#">2013广州一模</a>] [<a href="#">2013兰州一诊</a>] [<a href="#">2013青岛一模</a>]</em>
        </div>
        <div class="ma_t_r">
          <ul id="menu1">
            <li onmouseover="setTab(1,0)" style=" cursor:pointer;"><a>高三名题</a></li>
            <li onmouseover="setTab(1,1)" style=" cursor:pointer;"><a>高二名题</a></li>
            <li onmouseover="setTab(1,2)" style=" cursor:pointer;"><a>高一名题</a></li>
          </ul>
        </div>
      </div>
      <div class="ma_a" id="main1">
	  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=803846f7911f62d457c5de4bd68c3de8&sql=select+typeid+from+v9_type+where+siteid%3D%24siteid+and+%60module%60+%3D+%27search%27+order+by+listorder+desc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select typeid from v9_type where siteid=$siteid and `module` = 'search' order by listorder desc LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
	  <?php $n=1;if(is_array($data)) foreach($data AS $t) { ?>
	   <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=aa99d90bf0dba099d00067f2f29fa5e0&sql=select+title%2Cinputtime%2Ckeywords+from+v9_mxst_down+where+nianji_fl%3D%27%E9%AB%98%E4%B8%89%E8%AF%95%E9%A2%98%27+and+posids%3D%271%27+order+by+id+desc&num=10\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select title,inputtime,keywords from v9_mxst_down where nianji_fl='高三试题' and posids='1' order by id desc LIMIT 10");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
        <ul>
		 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
		
          <li><span><?php echo date('Y-m-d',$r[inputtime]);?></span><a href="<?php echo APP_PATH;?>index.php?m=search&c=index&a=init&typeid=<?php echo $t['typeid'];?>&siteid=<?php echo $siteid;?>&q=<?php echo $r['keywords'];?>">·<?php echo $r['title'];?></a></li>
		 <?php $n++;}unset($n); ?>
        </ul>
		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		<?php $n++;}unset($n); ?>
		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=803846f7911f62d457c5de4bd68c3de8&sql=select+typeid+from+v9_type+where+siteid%3D%24siteid+and+%60module%60+%3D+%27search%27+order+by+listorder+desc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select typeid from v9_type where siteid=$siteid and `module` = 'search' order by listorder desc LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
	  <?php $n=1;if(is_array($data)) foreach($data AS $t) { ?>
	   <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=77f436e1bb13549c17e01bb93403780a&sql=select+title%2Cinputtime%2Ckeywords+from+v9_mxst_down+where+nianji_fl%3D%27%E9%AB%98%E4%BA%8C%E8%AF%95%E9%A2%98%27+and+posids%3D%271%27+order+by+id+desc&num=10\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select title,inputtime,keywords from v9_mxst_down where nianji_fl='高二试题' and posids='1' order by id desc LIMIT 10");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
        <ul>
		 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
          <li><span><?php echo date('Y-m-d',$r[inputtime]);?></span><a href="<?php echo APP_PATH;?>index.php?m=search&c=index&a=init&typeid=<?php echo $t['typeid'];?>&siteid=<?php echo $siteid;?>&q=<?php echo $r['keywords'];?>">·<?php echo $r['title'];?></a></li>
		 <?php $n++;}unset($n); ?>
        </ul>
		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		<?php $n++;}unset($n); ?>
		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=803846f7911f62d457c5de4bd68c3de8&sql=select+typeid+from+v9_type+where+siteid%3D%24siteid+and+%60module%60+%3D+%27search%27+order+by+listorder+desc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select typeid from v9_type where siteid=$siteid and `module` = 'search' order by listorder desc LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
	  <?php $n=1;if(is_array($data)) foreach($data AS $t) { ?>
	   <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=ada4d45ee2ae6c477ce1cf9071e77be5&sql=select+title%2Cinputtime%2Ckeywords+from+v9_mxst_down+where+nianji_fl%3D%27%E9%AB%98%E4%B8%80%E8%AF%95%E9%A2%98%27+and+posids%3D%271%27+order+by+id+desc&num=10\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select title,inputtime,keywords from v9_mxst_down where nianji_fl='高一试题' and posids='1' order by id desc LIMIT 10");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
        <ul>
		 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
          <li><span><?php echo date('Y-m-d',$r[inputtime]);?></span><a href="<?php echo APP_PATH;?>index.php?m=search&c=index&a=init&typeid=<?php echo $t['typeid'];?>&siteid=<?php echo $siteid;?>&q=<?php echo $r['keywords'];?>">·<?php echo $r['title'];?></a></li>
		 <?php $n++;}unset($n); ?>
        </ul>
		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		<?php $n++;}unset($n); ?>
		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
      </div>
    </div>
    <div class="mr fr">
      <div class="mr_t">
        <ul>
          <li><span class="clor">1</span><a href="#">备战2014：诗歌鉴赏专项训练</a></li>
          <li><span class="clor">2</span><a href="#">备战2014：诗歌鉴赏专项训练</a></li>
          <li><span class="clor">3</span><a href="#">备战2014：诗歌鉴赏专项训练</a></li>
          <li><span >4</span><a href="#">备战2014：诗歌鉴赏专项训练</a></li>
        </ul>
      </div>
      <div class="mr_b">
	   <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=803846f7911f62d457c5de4bd68c3de8&sql=select+typeid+from+v9_type+where+siteid%3D%24siteid+and+%60module%60+%3D+%27search%27+order+by+listorder+desc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select typeid from v9_type where siteid=$siteid and `module` = 'search' order by listorder desc LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
	  <?php $n=1;if(is_array($data)) foreach($data AS $t) { ?>
	   <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=fff3a78c536acf8db65a5ead4c7a0625&sql=select+title%2Ckeywords+from+v9_mxst_down+where+posids%3D%271%27+and+thumb+%21%3D%27%27+order+by+id+desc&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select title,keywords from v9_mxst_down where posids='1' and thumb !='' order by id desc LIMIT 4");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
	   <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <ul>
          <li class="bot"><img src="<?php echo thumb($r['thumb'],90,90);?>" /></li>
          <li><a href="<?php echo APP_PATH;?>index.php?m=search&c=index&a=init&typeid=<?php echo $t['typeid'];?>&siteid=<?php echo $siteid;?>&q=<?php echo $r['keywords'];?>"><?php echo $r['title'];?>/a></li>
        </ul>
		<?php $n++;}unset($n); ?>
		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		<?php $n++;}unset($n); ?>
		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
      </div>
    </div>
</div>
<div class="mb10"></div>
 <?php $n=1;if(is_array(subcat(0,0,0,$siteid))) foreach(subcat(0,0,0,$siteid) AS $r) { ?>
  <?php $num++?>
  <?php $catname=$r[catname]; $catid=$r[catid]; $catdir=$r[catdir];?>
  
<div class="chinese area">
  <div class="<?php echo $catdir;?>_l fl">
  
    <h2>
	<?php echo $r['catname'];?><?php echo $r['catdir'];?>
	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=803846f7911f62d457c5de4bd68c3de8&sql=select+typeid+from+v9_type+where+siteid%3D%24siteid+and+%60module%60+%3D+%27search%27+order+by+listorder+desc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select typeid from v9_type where siteid=$siteid and `module` = 'search' order by listorder desc LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
	<?php $n=1;if(is_array($data)) foreach($data AS $t) { ?>	
	 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=2ed4ef2abf759da7281bf50e7d172f5c&sql=select+catname%2Curl+from+v9_category+where+parentid%3D%24catid+order+by+catid+asc&num=3\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select catname,url from v9_category where parentid=$catid order by catid asc LIMIT 3");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
	<span class="fr">
	<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
    <a href="<?php echo APP_PATH;?>index.php?m=search&c=index&a=init&typeid=<?php echo $t['typeid'];?>&siteid=<?php echo $siteid;?>&q=<?php echo $catname;?>&<?php echo $r['catname'];?>"> <?php echo $r['catname'];?></a>|<?php $n++;}unset($n); ?></span><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?><?php $n++;}unset($n); ?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
	</h2>
	
	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=803846f7911f62d457c5de4bd68c3de8&sql=select+typeid+from+v9_type+where+siteid%3D%24siteid+and+%60module%60+%3D+%27search%27+order+by+listorder+desc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select typeid from v9_type where siteid=$siteid and `module` = 'search' order by listorder desc LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
	<?php $n=1;if(is_array($data)) foreach($data AS $t) { ?>	
    <div class="chinese_l_list">
       <div class="chin_l_list_a">
          <h3><a href="<?php echo APP_PATH;?>index.php?m=search&c=index&a=init&typeid=<?php echo $t['typeid'];?>&siteid=<?php echo $siteid;?>&q=<?php echo $catname;?>模拟"><?php echo $catname;?>模拟</a><em></em></h3>
		 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=6cbe2fd32c77c8cdf11e063713118178&sql=select+url%2Ctitle+from+v9_mxst_down+where+catid%3D%24catid+and+leixing_fl%3D%27%E9%AB%98%E8%80%83%E6%A8%A1%E6%8B%9F%27+order+by+id+desc&num=7\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select url,title from v9_mxst_down where catid=$catid and leixing_fl='高考模拟' order by id desc LIMIT 7");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
          <ul>
		   <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <li><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a></li>
		   <?php $n++;}unset($n); ?>
          </ul>
		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
       </div>
	  <?php $n++;}unset($n); ?>
	   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
	   <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=803846f7911f62d457c5de4bd68c3de8&sql=select+typeid+from+v9_type+where+siteid%3D%24siteid+and+%60module%60+%3D+%27search%27+order+by+listorder+desc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select typeid from v9_type where siteid=$siteid and `module` = 'search' order by listorder desc LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
	<?php $n=1;if(is_array($data)) foreach($data AS $t) { ?>	
       <div class="chin_l_list_a">
          <h3><a href="<?php echo APP_PATH;?>index.php?m=search&c=index&a=init&typeid=<?php echo $t['typeid'];?>&siteid=<?php echo $siteid;?>&q=<?php echo $catname;?>月考"><?php echo $catname;?>月考</a><em></em></h3>
           <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=412bde0298348d2f7e5ab22883329f85&sql=select+url%2Ctitle+from+v9_mxst_down+where+catid%3D%24catid+and+leixing_fl%3D%27%E6%9C%88%E8%80%83%27+order+by+id+desc&num=7\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select url,title from v9_mxst_down where catid=$catid and leixing_fl='月考' order by id desc LIMIT 7");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
          <ul>
		   <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <li><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a></li>
		   <?php $n++;}unset($n); ?>
          </ul>
		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
       </div>
	   <?php $n++;}unset($n); ?>
	   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
	     <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=803846f7911f62d457c5de4bd68c3de8&sql=select+typeid+from+v9_type+where+siteid%3D%24siteid+and+%60module%60+%3D+%27search%27+order+by+listorder+desc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select typeid from v9_type where siteid=$siteid and `module` = 'search' order by listorder desc LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
	<?php $n=1;if(is_array($data)) foreach($data AS $t) { ?>	
       <div class="chin_l_list_a">
          <h3><a href="<?php echo APP_PATH;?>index.php?m=search&c=index&a=init&typeid=<?php echo $t['typeid'];?>&siteid=<?php echo $siteid;?>&q=<?php echo $catname;?>期中"><?php echo $catname;?>期中</a><em></em></h3>
         <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=40a1a1e4d67212425792e415fff681d3&sql=select+url%2Ctitle+from+v9_mxst_down+where+catid%3D%24catid+and+leixing_fl%3D%27%E6%9C%9F%E4%B8%AD%E8%80%83%E8%AF%95%27+order+by+id+desc&num=7\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select url,title from v9_mxst_down where catid=$catid and leixing_fl='期中考试' order by id desc LIMIT 7");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
          <ul>
		   <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <li><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a></li>
		   <?php $n++;}unset($n); ?>
          </ul>
		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
       </div>
	    <?php $n++;}unset($n); ?>
	   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
	    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=803846f7911f62d457c5de4bd68c3de8&sql=select+typeid+from+v9_type+where+siteid%3D%24siteid+and+%60module%60+%3D+%27search%27+order+by+listorder+desc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select typeid from v9_type where siteid=$siteid and `module` = 'search' order by listorder desc LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
	<?php $n=1;if(is_array($data)) foreach($data AS $t) { ?>	
       <div class="chin_l_list_a">
          <h3><a href="<?php echo APP_PATH;?>index.php?m=search&c=index&a=init&typeid=<?php echo $t['typeid'];?>&siteid=<?php echo $siteid;?>&q=<?php echo $catname;?>期末"><?php echo $catname;?>期末</a><em></em></h3>
         <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=1598c5ff82bac22026d232b744059fd7&sql=select+url%2Ctitle+from+v9_mxst_down+where+catid%3D%24catid+and+leixing_fl%3D%27%E6%9C%9F%E6%9C%AB%E8%80%83%E8%AF%95%27+order+by+id+desc&num=7\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select url,title from v9_mxst_down where catid=$catid and leixing_fl='期末考试' order by id desc LIMIT 7");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
          <ul>
		   <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <li><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a></li>
		   <?php $n++;}unset($n); ?>
          </ul>
		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
       </div>
	     <?php $n++;}unset($n); ?>
	   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>
  </div>
  <div class="chinese_r fr">
   <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=803846f7911f62d457c5de4bd68c3de8&sql=select+typeid+from+v9_type+where+siteid%3D%24siteid+and+%60module%60+%3D+%27search%27+order+by+listorder+desc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select typeid from v9_type where siteid=$siteid and `module` = 'search' order by listorder desc LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
	<?php $n=1;if(is_array($data)) foreach($data AS $t) { ?>	
     <div class="chinese_r_t">
       <h2><a href="<?php echo APP_PATH;?>index.php?m=search&c=index&a=init&typeid=<?php echo $t['typeid'];?>&siteid=<?php echo $siteid;?>&q=<?php echo $catname;?>高考"><?php echo $catname;?>高考</a></h2>
       <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=5ca51ee3d536e18005e94922ab3e1844&sql=select+url%2Ctitle+from+v9_mxst_down+where+catid%3D%24catid+and+leixing_fl%3D%27%E5%8E%86%E5%B9%B4%E9%AB%98%E8%80%83%27+order+by+id+desc&num=7\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select url,title from v9_mxst_down where catid=$catid and leixing_fl='历年高考' order by id desc LIMIT 7");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
          <ul>
		   <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <li><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a></li>
		   <?php $n++;}unset($n); ?>
          </ul>
		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
     </div>
	  <?php $n++;}unset($n); ?>
	   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>  
	    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=803846f7911f62d457c5de4bd68c3de8&sql=select+typeid+from+v9_type+where+siteid%3D%24siteid+and+%60module%60+%3D+%27search%27+order+by+listorder+desc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select typeid from v9_type where siteid=$siteid and `module` = 'search' order by listorder desc LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
	<?php $n=1;if(is_array($data)) foreach($data AS $t) { ?>	
     <div class="chinese_r_b">
       <h2><a href="<?php echo APP_PATH;?>index.php?m=search&c=index&a=init&typeid=<?php echo $t['typeid'];?>&siteid=<?php echo $siteid;?>&q=<?php echo $catname;?>专题"><?php echo $catname;?>专题</a></h2>
        <ul>
          <li><img src="imgs/pic02.jpg" /></li>
          <li>2013高考语文复习</li>
        </ul>
        <ul>
          <li><img src="imgs/pic02.jpg" /></li>
          <li>2013高考语文复习</li>
        </ul>
        <p>2014届高三语文《测评手册》阶段评估检测
2013届高三语文最新专项综合演练</p>
     </div>
	   <?php $n++;}unset($n); ?>
	   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>   
  </div> 
</div>
<?php $n++;}unset($n); ?>
<div class="mb10"></div>
<script type="text/javascript"> 
$(function(){
	new slide("#main-slide","cur",310,310,1);//焦点图
	new SwapTab(".SwapTab","span",".tab-content","ul","fb");//排行TAB
})
</script>
<script>
function setTab(m,n){
var tli=document.getElementById("menu"+m).getElementsByTagName("li");
var mli=document.getElementById("main"+m).getElementsByTagName("ul");
for(i=0;i<tli.length;i++){
tli[i].className=i==n?"hover":"";
mli[i].style.display=i==n?"block":"none";
}
}
</script>
<?php include template("content","footer"); ?>