<?php
	include_once 'config.php';
	include_once INC_PATH.'headleader.php';
	require_once INC_PATH.'aunav.php';
?>
<title>臨床症狀:常見症狀 | 肢端肥大症-衛教資訊網</title>

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

<body class="symptoms_page common_page">
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
				<h1 class="txt_title-title-symptoms_1 hide_txt">臨床症狀:常見症狀</h1>
			</header>
			<article class="cnt_md symptoms_1">
				<section class="col1 col">
					<img src="<?php path_au('img'); ?>pic-symptoms_1.jpg" alt="">
				</section>
				<section class="col2 col">
					<h2 class="title-fc1">肢端肥大症的臨床症狀</h2>
					<p class="txt-fc1">肢端肥大症患者發病最明顯的特徵，就是外型不正常的肥大或增生，一般病患因年紀漸長，在外表臉型或體型產生變化時，常被誤認為是邁入中年的正常現象，而忽略可能是疾病造成，以至於常延誤就醫，無法及時獲得正確診斷及治療。</p>
					<h2 class="title-fc1">腦下垂體腫瘤造成的症狀</h2>
					<p class="txt-fc1">頭痛 X 視野缺損<br>視神經受到腦下垂體瘤的擠壓而損傷，造成兩側視野偏盲、甚至全盲。腦下垂體瘤如果侵入海棉竇，也有可能引起複視，將一個東西看成兩個。</p>
					<h2 class="title-fc1">其他症狀和體徵</h2>
					<p class="txt-fc1">
						(1)軟組織增生導致手的神經受壓迫，造成疼痛和麻木感<br>
						(2)女性月經失調、男性性功能減退<br>
						(3)甲狀腺腫大或增生<br>
						(4)皮膚的變化，包括結節、增厚、油性等<br>
						(5)臉型五官改變，包括額頭、鼻子、嘴唇、舌頭及下巴粗化<br><br>
						若出現以上症狀，務必告訴您的醫生並詢問是否為肢端肥大症，這可做為自我檢測及自我警惕，及早診斷治療可減少嚴重的共病症。</p>

				</section>



			</article>


		</div><!-- /.container  END  !! -->
		<div class="change_page clearfix">
			<span class="next right"><a href="<?php webPageUrlAu('symptoms_2'); ?>" class="ib">共存疾病</a></span>
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
