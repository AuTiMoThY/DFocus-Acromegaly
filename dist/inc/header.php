<?php
// fb-root
//  include_once INC_PATH.'fbscript.php';
 ?>

<div id="top"></div>
<header class="global_hd">
	<!-- <div class="wrapper"> -->
		<header id="logo" class="ib">
			<a href="<?php webPageUrlAu('index'); ?>" title="<?php echo PROJECT; ?> 首頁"><img src="<?php path_au('img'); ?>logo-web.png" alt=""></a>
		</header>
		<nav class="main_nav ib">
			<ul class="cf">
			<?php
				// see aunav.php
				headerNavAu();
			?>

			</ul>
		</nav>
		<nav class="sub_nav"></nav>

	<!-- </div> -->
</header>
