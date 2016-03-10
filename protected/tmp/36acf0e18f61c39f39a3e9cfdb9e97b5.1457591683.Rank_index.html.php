<?php if(!class_exists("View", false)) exit("no direct access allowed");?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<title>html5+css3响应式游戏排行效果</title>
<link rel="stylesheet" href="css/normalize3.0.2.min.css" />
<link rel="stylesheet" href="css/css.css?v=15" />
</head>
<body> 

<section id="ranking"> 
<!-- <?php $_foreach_v_counter = 0; $_foreach_v_total = count($findone);?><?php foreach( $findone as $k => $v ) : ?><?php $_foreach_v_index = $_foreach_v_counter;$_foreach_v_iteration = $_foreach_v_counter + 1;$_foreach_v_first = ($_foreach_v_counter == 0);$_foreach_v_last = ($_foreach_v_counter == $_foreach_v_total);$_foreach_v_counter++;?> -->
        <?php $_foreach_vv_counter = 0; $_foreach_vv_total = count($findone[0]);?><?php foreach( $findone[0] as $vk => $vv ) : ?><?php $_foreach_vv_index = $_foreach_vv_counter;$_foreach_vv_iteration = $_foreach_vv_counter + 1;$_foreach_vv_first = ($_foreach_vv_counter == 0);$_foreach_vv_last = ($_foreach_vv_counter == $_foreach_vv_total);$_foreach_vv_counter++;?>
           <span id="ranking_title">我的排行：<?php echo htmlspecialchars($vv, ENT_QUOTES, "UTF-8"); ?></span>
        <?php endforeach; ?>  
<!-- <?php endforeach; ?> -->

  <section id="ranking_list">
  <?php if (!empty($findall)) : ?>
 
  <?php $_foreach_v_counter = 0; $_foreach_v_total = count($findall);?><?php foreach( $findall as $k => $v ) : ?><?php $_foreach_v_index = $_foreach_v_counter;$_foreach_v_iteration = $_foreach_v_counter + 1;$_foreach_v_first = ($_foreach_v_counter == 0);$_foreach_v_last = ($_foreach_v_counter == $_foreach_v_total);$_foreach_v_counter++;?>
    <section class="box">
      <?php if ($k==0) : ?>
      <section class="col_1" title="1"><?php echo htmlspecialchars($k+1, ENT_QUOTES, "UTF-8"); ?></section>
      <?php elseif ($k==1) : ?>
      <section class="col_1" title="2"><?php echo htmlspecialchars($k+1, ENT_QUOTES, "UTF-8"); ?></section>
      <?php elseif ($k==2) : ?>
      <section class="col_1" title="3"><?php echo htmlspecialchars($k+1, ENT_QUOTES, "UTF-8"); ?></section>
      <?php else : ?>
      <section class="col_1"><?php echo htmlspecialchars($k+1, ENT_QUOTES, "UTF-8"); ?></section>
      <?php endif; ?>
      <section class="col_2"><img src="http://mt1.baidu.com/timg?wh_rate=0&wapiknow&quality=100&size=w250&sec=0&di=0c0fa9be9a9b0dff61fac3d1ca18e061&src=http%3A%2F%2Fh.hiphotos.baidu.com%2Fzhidao%2Fwh%253D800%252C450%2Fsign%3D3efb27ebce177f3e1061f40540ff17f3%2Fcaef76094b36acafc1ee23a17bd98d1001e99c65.jpg"  /></section>
      <section class="col_3"><?php echo htmlspecialchars($v['user_name'], ENT_QUOTES, "UTF-8"); ?></section>
      <section class="col_4"><?php echo htmlspecialchars($v['score_score'], ENT_QUOTES, "UTF-8"); ?></section>
    </section>
 
  <?php endforeach; ?> 
<?php else : ?> 
<?php endif; ?>
    <!-- <section class="box">
      <section class="col_1" title="1">1</section>
      <section class="col_2"><img src="images/pic.jpg"  /></section>
      <section class="col_3">漫画之迷</section>
      <section class="col_4">5000</section>
    </section>
    <section class="box">
      <section class="col_1" title="2">2</section>
      <section class="col_2"><img src="images/pic.jpg"  /></section>
      <section class="col_3">漫画之迷</section>
      <section class="col_4">5000</section>
    </section>
    <section class="box cur">
      <section class="col_1" title="3">3</section>
      <section class="col_2"><img src="images/pic.jpg"  /></section>
      <section class="col_3">漫画之迷漫画之迷</section>
      <section class="col_4">5000</section>
    </section>
    <section class="box">
      <section class="col_1">4</section>
      <section class="col_2"><img src="images/pic.jpg"  /></section>
      <section class="col_3">漫画之迷</section>
      <section class="col_4">5000</section>
    </section>
    <section class="box">
      <section class="col_1">5</section>
      <section class="col_2"><img src="images/pic.jpg"  /></section>
      <section class="col_3">漫画之迷</section>
      <section class="col_4">5000</section>
    </section>
      <section class="box">
      <section class="col_1">6</section>
      <section class="col_2"><img src="images/pic.jpg"  /></section>
      <section class="col_3">漫画之迷</section>
      <section class="col_4">5000</section>
    </section> -->
  </section>
  <!-- <a id="play_game" href="#" title="开始游戏">开始游戏</a> </section>
<a id="return_back" href="#" title="返回">返回</a> -->
</body>
</html>
