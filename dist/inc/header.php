<?php
// fb-root
//  include_once INC_PATH.'fbscript.php';
 ?>

<div id="top"></div>
<header class="global_hd cf">
	<!-- <div class="wrapper"> -->
		<header id="logo" class="left">
			<a href="<?php webPageUrlAu('index'); ?>" title="<?php echo PROJECT; ?> 首頁"><img src="<?php path_au('img'); ?>logo-web.png" alt=""></a>
		</header>
		<nav class="main_nav right">
			<ul class="cf ib">
			<?php
				// see aunav.php
				headerNavAu();
			?>

			</ul>
			<div class="search_form ib">
				<form action="">
					<input type="text" name="" id="" class="search_form-input" placeholder="請輸入關鍵字搜尋...">
					<input type="button" name="" id="" class="search_form-submit icon icon-search">
				</form>
			</div>
		</nav>
		<nav id="subNavBar" class="sub_nav-bg"></nav>

	<!-- </div> -->
</header>
