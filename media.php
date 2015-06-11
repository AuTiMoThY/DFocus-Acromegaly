<?php
	include_once 'config.php';
	include_once INC_PATH.'headleader.php';
	require_once INC_PATH.'aunav.php';

	function link_class($mediaType){
		$LinkClass = (isset($_GET['type'])) ? $_GET['type'] : "media";
		if ($mediaType === $LinkClass) {
			echo "class=\"active\"";
		}
	}
?>
<title>衛教影音 | 肢端肥大症-衛教資訊網</title>

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

<body class="media_page">
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
				<div class="media_cate">
					<ul class="clearfix">
						<li <?php link_class('media'); ?>><a href="media.php?type=media">媒體報導</a></li>
						<li <?php link_class('knowledge'); ?>><a href="media.php?type=knowledge">知識補給站</a></li>
						<li <?php link_class('friend'); ?>><a href="media.php?type=friend">病友打氣團</a></li>
						<li <?php link_class('store'); ?>><a href="media.php?type=store">病友故事</a></li>
					</ul>
				</div>
			</header>
			<article class="cnt_md">
<ul class="media_list clearfix">
	<li>
		<section class="list-item c6 row_1">
			<a href="media_cnt.php?type=media&id=0"></a>
			<h1 class="c6_title">媒體報導 1</h1>
			<div class="media_block">
				<div class="youtube_frame" style="background-image: url('<?php path_au('temp'); ?>tem6.jpg');">
					<!-- <iframe width="640" height="390" src="//www.youtube.com/embed/<?php //echo $Film['film_code']?>" frameborder="0" allowfullscreen></iframe> -->
				</div>
			</div>
		</section>
	</li>
	<li>
		<section class="list-item c6 row_1">
			<a href="media_cnt.php?type=media&id=0"></a>
			<h1 class="c6_title">媒體報導 2</h1>
			<div class="media_block">
				<div class="youtube_frame" style="background-image: url('<?php path_au('temp'); ?>tem6.jpg');">
					<!-- <iframe width="640" height="390" src="//www.youtube.com/embed/<?php //echo $Film['film_code']?>" frameborder="0" allowfullscreen></iframe> -->
				</div>
			</div>
		</section>
	</li>
	<li>
		<section class="list-item c6 row_1">
			<a href="media_cnt.php?type=media&id=0"></a>
			<h1 class="c6_title">媒體報導 3</h1>
			<div class="media_block">
				<div class="youtube_frame" style="background-image: url('<?php path_au('temp'); ?>tem6.jpg');">
					<!-- <iframe width="640" height="390" src="//www.youtube.com/embed/<?php //echo $Film['film_code']?>" frameborder="0" allowfullscreen></iframe> -->
				</div>
			</div>
		</section>
	</li>
	<li>
		<section class="list-item c6 row_1">
			<a href="media_cnt.php?type=media&id=0"></a>
			<h1 class="c6_title">媒體報導 4</h1>
			<div class="media_block">
				<div class="youtube_frame" style="background-image: url('<?php path_au('temp'); ?>tem6.jpg');">
					<!-- <iframe width="640" height="390" src="//www.youtube.com/embed/<?php //echo $Film['film_code']?>" frameborder="0" allowfullscreen></iframe> -->
				</div>
			</div>
		</section>
	</li>
	<li>
		<section class="list-item c6 row_1">
			<a href="media_cnt.php?type=media&id=0"></a>
			<h1 class="c6_title">媒體報導 5</h1>
			<div class="media_block">
				<div class="youtube_frame" style="background-image: url('<?php path_au('temp'); ?>tem6.jpg');">
					<!-- <iframe width="640" height="390" src="//www.youtube.com/embed/<?php //echo $Film['film_code']?>" frameborder="0" allowfullscreen></iframe> -->
				</div>
			</div>
		</section>
	</li>
</ul>

<div class="pages_btn">
	<ul>
		<li class="prev"><a href=""><i class="icon">&lt;</i><span class="txt hide">上一頁</span></a></li><!-- 在第一頁時不顯示 -->
		<li class="number active"><a href="">1</a></li>
		<li class="number"><a href="">2</a></li>
		<li class="number"><a href="">3</a></li>
		<li class="number"><a href="">4</a></li>
		<li class="number"><a href="">5</a></li>
		<li class="next"><a href=""><span class="txt hide">下一頁</span><i class="icon">&gt;</i></a></li><!-- 在最後一頁時不顯示 -->
	</ul>
</div>
			</article>


		</div><!-- /.container  END  !! -->
		<div class="change_page clearfix">
			<span class="next right"><a href="<?php webPageUrlAu('links'); ?>" class="ib">相關資源連結</a></span>
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
