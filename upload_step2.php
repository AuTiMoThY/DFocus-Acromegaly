<?php
	include_once 'config.php';
	include_once INC_PATH.'headleader.php';
	require_once INC_PATH.'aunav.php';
?>
<title>大手照過來 | 肢端肥大症-衛教資訊網</title>

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
<!-- <div id="notifications"></div> -->
<main id="mainPage" class="layout-md">
	<div class="cnt_warpper">
		<div class="container">
			<header class="cnt_hd">
				<h1 class="txt_title-title-upload_pic hide_txt">大手照過來</h1>
			</header>

			<article class="cnt_md upload_pic clearfix">
				<section class="row1 upload_pic-steps">
					<div class="step1 col-3 txt-fc1"><i class="icon"></i>STEP1.<br>詳閱個資使用同意書</div>
					<div class="step2 col-3 txt-fc1 active"><i class="icon"></i>STEP2.<br>填寫基本資料及症狀</div>
					<div class="step3 col-3 txt-fc1"><i class="icon"></i>STEP3.<br>上傳手部對照影像</div>
				</section>
				<section class="row2 list-item s4">
					<header class="list-item-header"><i class="icon icon-step2-row2"></i>填寫基本資料</header>
					<div class="upload_pic-form-data frm--dfocus">
						<form action="" class="">
							<table>
								<tr>
									<td>
      <span class="input input--df input_required">
           <label class="frm__label" for="acroName">姓名：</label>
           <input class="frm__field" type="text" name="acroname" id="acroName" placeholder="請輸入姓名">
      </span>
									</td>
									<td>
      <span class="input input--df input_required">
           <label class="frm__label" for="acroSex">性別：</label>
           <input class="frm__field frm__radio" type="radio" name="acrosex" id="acroSexM">
           <label class="frm__label frm__radio " for="acroSexM">男</label>
           <input class="frm__field frm__radio" type="radio" name="acrosex" id="acroSexF">
           <label class="frm__label frm__radio " for="acroSexF">女</label>
      </span>
									</td>
								</tr>
								<tr>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td colspan="2"></td>
								</tr>
							</table>
						</form>
					</div>
					<footer class="list-item-footer agree">
						<input type="checkbox" id="agree">
						<label for="agree" class="agree-label">已閱讀</label>
					</footer>
				</section>
				<section class="row3 btns">
					<a href="<?php path_au('index'); ?>" class="btn btn-default btn-cancel">取消</a>
					<button type="button" class="btn btn-default btn-next" onclick="submitgo();">下一步</button>
				</section>
			</article>





		</div><!-- /.container  END  !! -->
		<div class="change_page clearfix">
			<span class="prev left"><a href="<?php webPageUrlAu('information'); ?>" class="ib">就醫資訊</a></span>
			<span class="next right"><a href="<?php webPageUrlAu('faq'); ?>" class="ib">疾病QA</a></span>
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
function resize(){
	$('#notifications').height(window.innerHeight - 50);
}
$(window).resize(function() {
	resize();
});
resize();


function refresh_close(){
	$('.close').click(function(){
		$(this).parent().fadeOut(200);
		$(this).parent().parent().removeClass('active');
	});
}
refresh_close();

var center = '<div id="notifications-full">';
	center += '	<div id="notifications-full-close" class="close">';
	center += '		<span class="fa fa-times" data-icon="&#xe20e;"></span>';
	center += '	</div>';
	center += '	<div id="notifications-full-icon">';
	center += '		<span class="icon" data-icon="&#xe261;"></span>';
	center += '	</div>';
	center += '	<div id="notifications-full-text">';
	center += '		尚未勾選已閱讀同意書';
	center += '	</div>';
	center += '</div>';
	center += '';


function submitgo(){
	agree = $("input#agree:checked").length;

	if (agree < 1) {
		$("#notifications-full").remove();
		$("#notifications").append(center);
		$("#notifications").addClass('active');
		$("#notifications-full").addClass('animated bounce');
		$(".agree-label").css({
			'color': '#e9c636'
		});
		refresh_close();
	}else {
		location.href="upload_step2.php";
	};
}
</script>

<?php
// -------------------------------
// google analytics
// -------------------------------
  include_once INC_PATH.'ga.php';
 ?>


</body>
</html>
