<?php
	include_once 'config.php';
	include_once INC_PATH.'headleader.php';
	require_once INC_PATH.'aunav.php';
?>
<title>肢端肥大症 衛教資訊網 Acromegaly’s Disease Information</title>

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

<body class="index_page">
<?php
// -------------------------------
// header.php inclube fb code
// -------------------------------
  include_once INC_PATH.'header.php';
 ?>
	<div id="bodyBg">
		<!-- echo "<div id='bg{$i}' class='bg' style='display: none; background: url(\"{$imgstr}\") 50% 50% / cover no-repeat;'></div>"; -->
		<div id='bg1' class='bg' style='display: none; background-image: url("<?php path_au('img'); ?>banner1.jpg");'></div>
		<div id='bg2' class='bg' style='display: none; background-image: url("<?php path_au('img'); ?>banner1.jpg");'></div>
		<!-- 控制輪播圖片的點點 -->
		<!-- echo "<li id='dot{$i}' class=''></li>"; -->
		<div id="bodyBgCtrl" class="bodyBg_ctrl">
			<ul>
				<li id='dot1' class='bodyBg_ctrl-dot'></li>
				<li id='dot2' class='bodyBg_ctrl-dot'></li>
			</ul>
		</div>
	</div><!-- /#bodyBg  END  !! -->

	<div id="indexCnt" class="index_sec container">
		<div class="wrapper cf">
			<div class="col_1">
				<h1 class="title01 txt_img-index-video hide_txt ib">焦點影片</h1>
				<div class="youtube ib">
					<a href="media_cnt.php?type=media&id=0" class="">
						<img src="<?php path_au('temp'); ?>tem1.jpg" alt="">
						<i class="icon icon-playBtn"></i>
					</a>
				</div>
			</div>
			<div class="col_2 q">
				<h1 class="title01 txt_img-index-news hide_txt ib">最新消息</h1>
				<ul id="marqueeBtn" class="marqueeBtn">
					<li id="marquee_prev_btn" class='marquee_btn prev_btn'></li>
					<li id="marquee_next_btn" class='marquee_btn next_btn'></li>
				</ul>
				<article class="news-wra ib">
					<div class="news-container">
						<header class="news-header cf">
							<div class="news-time left">2015/05/17</div>
							<h2 class="news-title left">徵求健康操影音高手，幫職場動起來-8成以上職場員工每週求健康操影音高手，幫職場動起來-8成以上職場員工每週</h2>
						</header>
						<section class="news-block cf">
							<a href="news_cnt.php"></a>
							<div class="pic left">
								<img src="<?php path_au('temp'); ?>tem2.jpg" alt="">
							</div>
							<p class="news-cnt left">
								<?php 
									//  此處示意 顯示內文前 120 個字，超果以...取代
									$cnt0 = "世界衛生組織建議成人每週至少達到150分鐘的中等強度運動；每天運動15分鐘，可延長壽命3年，只要每天利用上下午時段做健康操，即可輕鬆達到世界衛生組織建議成人每週至少達到150分鐘的中等強度運動；每天運動15分鐘，可延長壽命3年，只要每天利用上下午時段做健康操，即可輕鬆達到世界衛生組織建議成人每週至少達到150分鐘的中等強度運動；每天運動15分鐘，可延長壽命3年，只要每天利用上下午時段做健康操，即可輕鬆達到";
									$showCount = 120;
									$content0 = strip_tags($cnt0);
									$content = mb_substr($content0,0,$showCount,'UTF-8');
									if ( $content != $content0 ) { $content .= "&nbsp;...<span class=\"more\">&lt;MORE&gt;</span>"; }
									echo $content;
								?>
							</p>
						</section>
					</div>
				</article>
			</div>
			<div class="col_3">
				<h1 class="title01 txt_img-index-column hide_txt ib">駐站醫師</h1>
				<div class="column-pic pic ib">
					<a href=""><img src="<?php path_au('temp'); ?>tem3.jpg" alt=""></a>
				</div>
			</div>
		</div>
	</div>
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
