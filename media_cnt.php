<?php
	include_once 'config.php';
	include_once INC_PATH.'headleader.php';
	require_once INC_PATH.'aunav.php';
?>
<title>衛教影音 - 媒體報導 | 肢端肥大症-衛教資訊網</title>

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
				<h1 class="txt_title-title-media hide_txt">衛教影音</h1>
			</header>
			<article class="cnt_md">
				<section class="s4 row_1 list-item">
					<h2 class="list-item-header title cf">媒體報導 : 名製作人周遊阿姑也是肢端肥大症患者</h2>
					<div class="media_block">
						<div id="youtubeFrame" class="youtube_frame">
							<!-- <img src="images/temporary/tem03.jpg" alt=""> -->
							<iframe width="420" height="315" src="https://www.youtube.com/embed/FIhop2QqQMw" frameborder="0" allowfullscreen></iframe>
						</div>
						<p class="editorDF">
							黃姓婦人表示，「感覺身形越變越多，頭部也變形，也會掉牙齒，手指跟手會脹大，骨頭也變大。」因為這變臉的過程相當緩慢，家人不會發現，久久才見面的親友才會驚覺她怎麼變了一個人，同時間她會暈眩，以為是高血壓，進了醫院醫師一看就知道不對勁，藉由核磁共振檢查影像檢查，確定她的腦下垂體長了1顆約2.6公分大的腫瘤。
						</p>
					</div>
				</section>



			</article>


		</div><!-- /.container  END  !! -->
		<div class="change_page clearfix">
			<span class="prev left"><a href="media_cnt.php" class="ib">前一則</a></span>
			<span class="go_list center"><a href="media.php" class="ib">返回列表</a></span>
			<span class="next right"><a href="media_cnt.php" class="ib">下一則</a></span>
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

<script>
$(function() {
	$('.nav_item-5').children('span').addClass('active');

	$('#youtubeFrame iframe').attr({
		width: '640',
		height: '390'
	});;
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
