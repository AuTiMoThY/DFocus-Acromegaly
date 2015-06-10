<?php
	include_once 'config.php';
	include_once INC_PATH.'headleader.php';
	require_once INC_PATH.'aunav.php';
?>
<title>診斷及治療:治療目標 | 肢端肥大症-衛教資訊網</title>

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
				<h1 class="txt_title-title-diagnosis_4 hide_txt">診斷及治療:治療目標</h1>
			</header>
			<article class="cnt_md diagnosis_4">
				<section class="col col1">
					<img src="<?php path_au('img'); ?>pic-diagnosis_4.png" alt="">
				</section>
				<section class="col col2">
					<div class="editorDF">
						<p>
							肢端肥大症的治療目標，除了移除腦下垂體的腫瘤外，也須控制生長激素(GH)、類胰島素生長因子(IGF-1)在正常範圍中，並控制疾病症狀。
						</p>
						<p>
							手術是目前第一線的治療首選，若是腫瘤位置不佳，或是腫瘤太大導致手術風險過大，那麼藥物治療，如：體抑素類似物、多巴胺催動劑、生長激素(GH)受體拮抗劑及放射治療也將扮演重要的角色，病患及照護者可與專科醫師合作，共同決定最佳的治療計畫。
						</p>

					</div>
				</section>


			</article>


		</div><!-- /.container  END  !! -->
		<div class="change_page clearfix">
			<span class="prev left"><a href="<?php webPageUrlAu('diagnosis_3'); ?>" class="ib">檢驗方法</a></span>
			<span class="next right"><a href="<?php webPageUrlAu('diagnosis_5'); ?>" class="ib">治療方式</a></span>
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

<?php
// -------------------------------
// google analytics
// -------------------------------
  include_once INC_PATH.'ga.php';
 ?>


</body>
</html>
