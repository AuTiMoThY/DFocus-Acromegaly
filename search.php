<?php
	include_once 'config.php';
	include_once INC_PATH.'headleader.php';
	require_once INC_PATH.'aunav.php';
?>


<title>搜尋結果 | 肢端肥大症-衛教資訊網</title>

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
<div id="faqmsg"></div>
<main id="mainPage" class="layout-md">
	<div class="cnt_warpper">
		<div class="container">
			<header class="cnt_hd">
				<h1 class="txt_title-title-search hide_txt">疾病QA</h1>
			</header>

			<article class="cnt_md faq">
				<section class="row2 list-item faq-wrap s4">
					<header class="list-item-header text-center">查無結果</header>
				</section>

				<section class="row2 list-item faq-wrap s4">
					<ul class="faq-list">
						<li class="faq-item">
							<h3 class="faq-item-q">北部地區</h3>
							<div class="faq-item-a">MM醫院：ooo 醫師 內分泌科。MM醫院：ooo 醫師 內分泌科。</div>
						</li>
						<li class="faq-item">
							<h3 class="faq-item-q">Q 01：肢端肥大症會不會影響我的生活？或是影響工作？</h3>
							<div class="faq-item-a">
								答： (1)日常作息：維持正常的生活作息，避免過度熬夜，配合適當的運動，切勿從事過度激烈碰撞的活動，對於人生保          持積極的態度，這是自己對於治療疾病最好的方式。
								(2)飲食須知：均衡飲食，可多攝取新鮮的蔬果及高纖維質的食物，以防止便秘；不菸不酒、避免攝取過度辛辣的食物。
							</div>
						</li>
						<li class="faq-item">
							<h3 class="faq-item-q">Q 03：除了醫生建議的治療方式外，飲食和生活作息可以如何注意，不讓病情加重？</h3>
							<div class="faq-item-a">
								答： (1)日常作息：維持正常的生活作息，避免過度熬夜，配合適當的運動，切勿從事過度激烈碰撞的活動，對於人生保          持積極的態度，這是自己對於治療疾病最好的方式。
								(2)飲食須知：均衡飲食，可多攝取新鮮的蔬果及高纖維質的食物，以防止便秘；不菸不酒、避免攝取過度辛辣的食物。
								答： (1)日常作息：維持正常的生活作息，避免過度熬夜，配合適當的運動，切勿從事過度激烈碰撞的活動，對於人生保          持積極的態度，這是自己對於治療疾病最好的方式。
								(2)飲食須知：均衡飲食，可多攝取新鮮的蔬果及高纖維質的食物，以防止便秘；不菸不酒、避免攝取過度辛辣的食物。
							</div>
						</li>
					</ul>
				</section>
			</article>




		</div><!-- /.container  END  !! -->
		<div class="change_page clearfix">
			<span class="prev left"><a href="<?php webPageUrlAu('upload_step1'); ?>" class="ib">大手照過來</a></span>
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
