<?php
	include_once 'config.php';
	include_once INC_PATH.'headleader.php';
	require_once INC_PATH.'aunav.php';
?>
<title>最新消息 | 肢端肥大症-衛教資訊網</title>

<?php
// -------------------------------
// SEO
// CSS
// Script in the HEAD
// -------------------------------
  include_once INC_PATH.'head.php';
 ?>


<?php
//app
//  include_once INC_PATH.'social.php';
 ?>

<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body class="news_page">
<?php
// -------------------------------
// header.php inclube fb code
// -------------------------------
  include_once INC_PATH.'header.php';
 ?>

<main id="mainPage" class="layout-md">
	<div class="cnt_warpper">
		<div class="container">
			<header class="cnt_hd">
				<h1 class="txt_title-title-news hide_txt">最新消息</h1>
			</header>
			<article class="cnt_md">
				<section class="list_page s4 row_1 list-item">
					<h2 class="list-item-header cf">
						<span class="title">塗藥支架最新進展與安全的選用</span>
						<span class="time right">日期&nbsp;:&nbsp;<?php echo date('Y / m / d'); ?></span>
					</h2>
					<div class="pic list-item-pic">
						<img src="<?php path_au('temp'); ?>tem4.jpg" alt="">
					</div>
					<div class="list-item-cnt">
						<p class="">
							<?php 
								$cnt0 = "[文/中華民國血脂及動脈硬化學會秘書長 殷偉賢醫師]如何避免塗藥支架的晚期血栓,至於要如何能得到置放塗藥支架的好處，又能避免支架血栓的壞處呢?根據根據根據根據根據根據根據根據根據根據根據根據根據根據根據根據根據根據根據根據根據根據根據根據根據根據根據根據根據根據根據根據根據根據根據";
								$content0 = strip_tags($cnt0);
								$content = mb_substr($content0,0,100,'UTF-8');
								if ( $content != $content0 ) { $content .= "&nbsp;..."; }
								echo $content;
							?>
						</p>
					</div>
					<div class="more_btn">
						<a href="news_cnt.php">MORE</a>
					</div>
				</section>
				<section class="list_page s4 row_1 list-item">
					<h2 class="list-item-header cf">
						<span class="title">塗藥支架最新進展與安全的選用</span>
						<span class="time right">日期&nbsp;:&nbsp;<?php echo date('Y / m / d'); ?></span>
					</h2>
					<div class="pic list-item-pic">
						<img src="<?php path_au('temp'); ?>tem4.jpg" alt="">
					</div>
					<div class="list-item-cnt">
						<p class="">
							<?php 
								$cnt0 = "[文/中華民國血脂及動脈硬化學會秘書長 殷偉賢醫師]如何避免塗藥支架的晚期血栓,至於要如何能得到置放塗藥支架的好處，又能避免支架血栓的壞處呢?根據根據根據根據根據根據根據根據根據根據根據根據根據根據根據根據根據根據根據根據根據根據根據根據根據根據根據根據根據根據根據根據根據根據根據";
								$content0 = strip_tags($cnt0);
								$content = mb_substr($content0,0,100,'UTF-8');
								if ( $content != $content0 ) { $content .= "&nbsp;..."; }
								echo $content;
							?>
						</p>
					</div>
					<div class="more_btn">
						<a href="news_cnt.php">MORE</a>
					</div>
				</section>
				<section class="list_page s4 row_1 list-item">
					<h2 class="list-item-header cf">
						<span class="title">塗藥支架最新進展與安全的選用</span>
						<span class="time right">日期&nbsp;:&nbsp;<?php echo date('Y / m / d'); ?></span>
					</h2>
					<div class="pic list-item-pic">
						<img src="<?php path_au('temp'); ?>tem4.jpg" alt="">
					</div>
					<div class="list-item-cnt">
						<p class="">
							<?php 
								$cnt0 = "[文/中華民國血脂及動脈硬化學會秘書長 殷偉賢醫師]如何避免塗藥支架的晚期血栓,至於要如何能得到置放塗藥支架的好處，又能避免支架血栓的壞處呢?根據根據根據根據根據根據根據根據根據根據根據根據根據根據根據根據根據根據根據根據根據根據根據根據根據根據根據根據根據根據根據根據根據根據根據";
								$content0 = strip_tags($cnt0);
								$content = mb_substr($content0,0,100,'UTF-8');
								if ( $content != $content0 ) { $content .= "&nbsp;..."; }
								echo $content;
							?>
						</p>
					</div>
					<div class="more_btn">
						<a href="news_cnt.php">MORE</a>
					</div>
				</section>



<div class="pages_btn">
	<ul>
		<li class="prev"><a href=""><i class="icon">&lt;</i><span class="txt hide">上一頁</span></a></li><!-- 在第一頁時不顯示 -->
		<li class="number active"><a href="">1</a></li>
		<li class="number"><a href="">2</a></li>
		<li class="number"><a href="">3</a></li>
		<li class="number"><a href="">4</a></li>
		<li class="number"><a href="">5</a></li>
		<li class="next"><a href=""><span class="txt hide">下一頁</span><i class="icon">&gt;</i></a></li><!-- 在最後一頁時不顯示 -->
	</ul>
</div>
			</article>
		</div>

	</div>
</main>

<?php
// -------------------------------
// Footer
// -------------------------------
  include_once INC_PATH.'footer.php';
 ?>

<?php
// -------------------------------
// Script in the FOOT
// -------------------------------
  include_once INC_PATH.'scriptfoot.php';
 ?>

<script type="text/javascript" src="plugin/fancybox/jquery.fancybox.js"></script>
<script type="text/javascript" src="plugin/fancybox/helpers/jquery.fancybox-buttons.js"></script>
<script type="text/javascript" src="plugin/fancybox/helpers/jquery.fancybox-media.js"></script>

<script>
$(function() {
  	$(".fancybox_youtube")
	// .attr('rel', 'gallery')
	.fancybox({
		width       : '70%',
		height      : '70%',
		maxWidth	: 800,
		maxHeight	: 600,
		openEffect  : 'none',
		closeEffect : 'none',
		nextEffect  : 'none',
		prevEffect  : 'none',
		padding     : 0,
		margin      : 50,
		helpers : {
			media : {}
		}
	});


});
</script>

<?php
// -------------------------------
// google analytics
// -------------------------------
  include_once INC_PATH.'ga.php';
 ?>


</body>
</html>
