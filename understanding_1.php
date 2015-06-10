<?php
	include_once 'config.php';
	include_once INC_PATH.'headleader.php';
	require_once INC_PATH.'aunav.php';
?>
<title>認識肢端肥大症:什麼是肢端肥大症 | 肢端肥大症-衛教資訊網</title>

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
				<h1 class="txt_title-title-understanding_1 hide_txt">認識肢端肥大症:什麼是肢端肥大症</h1>
			</header>
			<article class="cnt_md understanding_1">
				<section class="col1 col">
					<img src="<?php path_au('img'); ?>understanding_1.jpg" alt="">
				</section>
				<section class="col2 col">
					<h2 class="title-fc1">什麼是肢端肥大症</h2>
					<p class="txt-fc1">肢端肥大症是一種體內生成過量生長激素（GH）時發生的慢性荷爾蒙疾病。大多數的肢端肥大症案例都是由腦下垂體中分泌過量生長激素(GH)的良性腫瘤所引起，而生長激素(GH}過量會進一步導致類胰島素生長因子(IGF-1)濃度上升。偏高的類胰島素生長因子(IGF-1)濃度可引發生理變化，例如手部、足部、內臟和臉部特徵增大，同時導致患者有較高的風險發生嚴重併發症及較高的死亡率。</p>
					<h2 class="title-fc1">肢端肥大症不同於巨人症</h2>
					<p class="txt-fc1">腦下垂體腫瘤刺激過量生長激素(GH)分泌，若發生於青春期之前，因骨骺尚未閉合，會引起巨人症；而在青春期之後，則會導致肢端肥大症。</p>
				</section>



			</article>


		</div><!-- /.container  END  !! -->
		<div class="change_page clearfix">
			<span class="next right"><a href="<?php webPageUrlAu('understanding_2'); ?>" class="ib">疾病重要三激素</a></span>
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
