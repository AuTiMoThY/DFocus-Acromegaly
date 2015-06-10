<?php
	include_once 'config.php';
	include_once INC_PATH.'headleader.php';
	require_once INC_PATH.'aunav.php';
?>
<title>臨床症狀:自我檢測 | 肢端肥大症-衛教資訊網</title>

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

<body class="diagnosis_page common_page">
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
				<h1 class="txt_title-title-diagnosis_1 hide_txt">臨床症狀:自我檢測</h1>
			</header>
			<article class="cnt_md diagnosis_1">
				<section class="col1 col">
					<img src="<?php path_au('img'); ?>pic-diagnosis_1.jpg" alt="">
				</section>
				<section class="col2 col">
					<div class="editorDF">
						<p class="txt-fc1">肢端肥大症是一種罕見的疾病，最常見的症狀為手腳變大、臉型改變等，但此疾病的外表變化緩慢，不容易自我察覺，常因延誤診斷，導致疾病惡化，因此除了平時應定期自我檢測外，也請不忘關心周遭親朋好友，若有以下症狀者，請務必及早就醫檢查喔！</p>
					</div>
					<h2 class="title-fc1">肢端肥大症的自我檢測</h2>
					<form class="assess-form" action="">
						<ul>
<li><input type="checkbox" id="assess1"><label for="assess1">您是否已達30歲？</label></li>
<li><input type="checkbox" id="assess2"><label for="assess2">您的鞋子大小，與去年相比是否變大？</label></li>
<li><input type="checkbox" id="assess3"><label for="assess3">您的手指，與去年相比是否覺得變粗？</label></li>
<li><input type="checkbox" id="assess4"><label for="assess4">與去年照片中的您相比，現在的鼻翼兩側是否變寬？</label></li>
<li><input type="checkbox" id="assess5"><label for="assess5">與去年照片中的您相比，現在的下巴是否有變長或變厚？</label></li>
<li><input type="checkbox" id="assess6"><label for="assess6">您是否感覺舌頭變粗，與牙齒磨擦機會變大，</label></li>
<li><input type="checkbox" id="assess7"><label for="assess7">甚至會咬到舌頭？</label></li>
<li><input type="checkbox" id="assess8"><label for="assess8">您是否感覺聲音變得較低沉？</label></li>
<li><input type="checkbox" id="assess9"><label for="assess9">您是否發覺週遭親友有呼吸中止症問題？</label></li>
<li><input type="checkbox" id="assess10"><label for="assess10">最近是否感覺血壓或血糖值突然變高？</label></li>
						</ul>
						<div class=""><a href="diagnosis_a.php" class="fancybox btn-assess" data-fancybox-type="iframe" >評估結果</a></div>
						<!-- <div class="cnt_btns"><a href="diagnosisS.php" class="fancybox">評估結果</a></div> -->
					</form>



				</section>



			</article>


		</div><!-- /.container  END  !! -->
		<div class="change_page clearfix">
			<span class="next right"><a href="<?php webPageUrlAu('diagnosis_2'); ?>" class="ib">檢驗流程</a></span>
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
  	$('a.fancybox').fancybox({
		width	    : 700,
		// minHeight	: 600,
		padding     : 0,
		margin      : 0,
		wrapCSS     : 'fancybox_style2'
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
