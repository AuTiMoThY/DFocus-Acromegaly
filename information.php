<?php
	include_once 'config.php';
	include_once INC_PATH.'headleader.php';
	require_once INC_PATH.'aunav.php';
?>
<title>就醫資訊 | 肢端肥大症-衛教資訊網</title>

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

<body class="information_page common_page">
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
				<h1 class="txt_title-title-information hide_txt">就醫資訊</h1>
			</header>

			<article class="cnt_md information clearfix">
				<section class="row_1 c1">
					<div class="map">
						<div id="area1" class="area1_map">北部地區</div>
						<div id="area2" class="area2_map">中部地區</div>
						<div id="area3" class="area3_map">南部地區</div>
					</div>
					<!-- <img src="images/pic13.png" alt="就醫資訊, 庫欣病醫療照顧專家"> -->
					<div id="area1Block" class="area_block area1 active">
						<h3 class="col_1">北部地區</h3>
						<div class="col_2">
							<div class="hospital">
								<h2 class="title-fc1">醫院</h2>
								<ul>
									<li class="txt-fc1">OOO教授 內分泌科</li>
									<li class="txt-fc1">OOO教授 內分泌科</li>
								</ul>
							</div>
							<div class="hospital">
								<h2 class="title-fc1">醫院</h2>
								<ul>
									<li class="txt-fc1">OOO教授 內分泌科</li>
									<li class="txt-fc1">OOO教授 內分泌科</li>
								</ul>
							</div>
							<div class="hospital">
								<h2 class="title-fc1">醫院</h2>
								<ul>
									<li class="txt-fc1">OOO教授 內分泌科</li>
									<li class="txt-fc1">OOO教授 內分泌科</li>
								</ul>
							</div>
						</div>
					</div>
					<div id="area2Block" class="area_block area2">
						<h3 class="col_1">中部地區</h3>
						<div class="col_2">
							<div class="hospital">
								<h2 class="title-fc1">醫院</h2>
								<ul>
									<li class="txt-fc1">OOO教授 內分泌科</li>
									<li class="txt-fc1">OOO教授 內分泌科</li>
								</ul>
							</div>
							<div class="hospital">
								<h2 class="title-fc1">醫院</h2>
								<ul>
									<li class="txt-fc1">OOO教授 內分泌科</li>
									<li class="txt-fc1">OOO教授 內分泌科</li>
								</ul>
							</div>
							<div class="hospital">
								<h2 class="title-fc1">醫院</h2>
								<ul>
									<li class="txt-fc1">OOO教授 內分泌科</li>
									<li class="txt-fc1">OOO教授 內分泌科</li>
								</ul>
							</div>
						</div>
					</div>
					<div id="area3Block" class="area_block area3">
						<h3 class="col_1">南部地區</h3>
						<div class="col_2">
							<div class="hospital">
								<h2 class="title-fc1">醫院</h2>
								<ul>
									<li class="txt-fc1">OOO教授 內分泌科</li>
									<li class="txt-fc1">OOO教授 內分泌科</li>
								</ul>
							</div>
							<div class="hospital">
								<h2 class="title-fc1">醫院</h2>
								<ul>
									<li class="txt-fc1">OOO教授 內分泌科</li>
									<li class="txt-fc1">OOO教授 內分泌科</li>
								</ul>
							</div>
							<div class="hospital">
								<h2 class="title-fc1">醫院</h2>
								<ul>
									<li class="txt-fc1">OOO教授 內分泌科</li>
									<li class="txt-fc1">OOO教授 內分泌科</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="area_cnt">
						<h2 class="title-fc1">肢端肥大症醫療團隊</h2>
						<p class="txt-fc2">
							肢端肥大症患者常合併多種內外科疾病的症狀，因此需要整合跨領域的醫療團隊，如神經外科、內分泌新陳代謝科、及個管師定期聯繫追蹤回診進度，以確保醫療團隊確實掌握患者最新疾病變化狀況，幫助更多潛在的肢端肥大症患者更快被診斷並提供完善照護。
						</p>
					</div>
				</section>
			</article>





		</div><!-- /.container  END  !! -->
		<div class="change_page clearfix">
			<span class="next right"><a href="<?php webPageUrlAu('upload_step1'); ?>" class="ib">大手照過來</a></span>
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
	var area1B = $('#area1Block'),
		area2B = $('#area2Block'),
		area3B = $('#area3Block'),
		area4B = $('#area4Block'),
		col2H1 = $('#area1Block').children('.col_2').outerHeight(),
		col2H2 = $('#area2Block').children('.col_2').outerHeight(),
		col2H3 = $('#area3Block').children('.col_2').outerHeight(),
		col2H4 = $('#area4Block').children('.col_2').outerHeight();
	$('#area1Block').children('.col_1').css({
		height: col2H1,
		'line-height': col2H1 + 'px'
	});
	$('#area2Block').children('.col_1').css({
		height: col2H2,
		'line-height': col2H2 + 'px'
	});
	$('#area3Block').children('.col_1').css({
		height: col2H3,
		'line-height': col2H3 + 'px'
	});
	$('#area4Block').children('.col_1').css({
		height: col2H4,
		'line-height': col2H4 + 'px'
	});

	$('#area1').click(function() {
		area1B.addClass('active');
		area2B.removeClass('active');
		area3B.removeClass('active');
		area4B.removeClass('active');
	});
	$('#area2').click(function() {
		area1B.removeClass('active');
		area2B.addClass('active');
		area3B.removeClass('active');
		area4B.removeClass('active');
	});
	$('#area3').click(function() {
		area1B.removeClass('active');
		area2B.removeClass('active');
		area3B.addClass('active');
		area4B.removeClass('active');
	});
	$('#area4').click(function() {
		area1B.removeClass('active');
		area2B.removeClass('active');
		area3B.removeClass('active');
		area4B.addClass('active');
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
