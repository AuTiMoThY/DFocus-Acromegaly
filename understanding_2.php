<?php
	include_once 'config.php';
	include_once INC_PATH.'headleader.php';
	require_once INC_PATH.'aunav.php';
?>
<title>疾病重要三激素 | 肢端肥大症-衛教資訊網</title>

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

<body class="understanding_page common_page">
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
				<h1 class="txt_title-title-understanding_2 hide_txt">認識肢端肥大症:什麼是肢端肥大症</h1>
			</header>
			<article class="cnt_md understanding_2">
				<section class="col1 col">
					<img src="<?php path_au('img'); ?>pic-understanding_2.png" alt="">
				</section>
				<section class="col2 col">
					<h2 class="title-fc1">1. 生長激素（GH）</h2>
					<p class="txt-fc1">在夜間睡覺或是運動時，腦下垂體會不定期的分泌生長激素（GH），當發生肢端肥大症時，腦下垂體會釋放異常高的生長激素（GH）。過多的生長激素會導致身體物理性質的變化。</p>
					<h2 class="title-fc1">2. 類胰島素生長因子（IGF-1）</h2>
					<p class="txt-fc1">分泌出來的生長激素(GH)進入血液後，會被肝臟所吸收，再轉變成不同的成長因子 (Growth Factors)，其中最主要的就是「類胰島素生長因子（IGF-1）」。分泌過量時會導致許多肢端肥大症的體徵和症狀。</p>
					<h2 class="title-fc1">3. 體抑素(Somatostatin)</h2>
					<p class="txt-fc1">又稱生長素抑制因子，主要效果為抑制腦下垂體分泌生長激素(GH)。</p><br>
					<p class="txt-fc1"><strong>這三種重要的激素在人的身體裡扮演重要的角色，隨血液循環全身，負責調節許多身體最基本的活動。</strong></p>

				</section>



			</article>


		</div><!-- /.container  END  !! -->
		<div class="change_page clearfix">
			<span class="prev left"><a href="<?php webPageUrlAu('understanding_1'); ?>" class="ib">什麼是肢端肥大症</a></span>
			<span class="next right"><a href="<?php webPageUrlAu('understanding_3'); ?>" class="ib">發病率</a></span>
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
