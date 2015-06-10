<?php
	include_once 'config.php';
	include_once INC_PATH.'headleader.php';
	require_once INC_PATH.'aunav.php';
?>
<title>塗藥支架最新進展與安全的選用 | 肢端肥大症-衛教資訊網</title>

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
				<section class="s4 row_1 list-item">
					<h2 class="list-item-header title cf">塗藥支架最新進展與安全的選用</h2>
					<div class="fullBar time">日期&nbsp;:&nbsp;<?php echo date('Y / m / d'); ?></div>
					<div class="list-item-cnt">
						<div class="editorDF">
							<!-- 圖文編輯器 -->
							<img src="<?php path_au('temp'); ?>tem5.jpg" alt="" class="temp">
						</div>
					</div>
				</section>



			</article>


		</div><!-- /.container  END  !! -->
		<div class="change_page clearfix">
			<span class="prev left"><a href="news_cnt.php" class="ib">前一則</a></span>
			<span class="go_list center"><a href="news.php" class="ib">返回列表</a></span>
			<span class="next right"><a href="news_cnt.php" class="ib">下一則</a></span>
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
