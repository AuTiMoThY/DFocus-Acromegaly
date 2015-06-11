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
<div id="notifications"></div>
<main id="mainPage" class="layout-md">
	<div class="cnt_warpper">
		<div class="container">
			<header class="cnt_hd">
				<h1 class="txt_title-title-upload_pic hide_txt">大手照過來</h1>
			</header>

			<article class="cnt_md upload_pic clearfix">
			<form action="" class="upload_pic-form">
				<section class="row1 upload_pic-steps">
					<div class="step1 col-3 txt-fc1 active"><i class="icon"></i>STEP1.<br>詳閱個資使用同意書</div>
					<div class="step2 col-3 txt-fc1"><i class="icon"></i>STEP2.<br>填寫基本資料及症狀</div>
					<div class="step3 col-3 txt-fc1"><i class="icon"></i>STEP3.<br>上傳手部對照影像</div>
				</section>
				<section class="row2 list-item s4">
					<header class="list-item-header"><i class="icon icon-step1-row2"></i>大手照過來 - 線上系統使用說明</header>
					<div class="upload_pic-cnt">
						<p class="txt-fc1">本系統提供民眾當察覺疑似有肢端肥大症相關症狀時，可透過下列簡單步驟，上傳手部影像，由駐站醫師提供專業建議喔！</p>
						<p class="txt-r">※ 本網站提供之資訊，仍不可取代醫師門診相關建議，若有進一步疑問，可至相關醫療院所專科門診洽詢。</p>
						<p class="txt-fc1">
							<b>步驟一：詳閱「個人資料使用同意書」，並勾選「我同意」<br>
								步驟二：填寫「基本資料」及「症狀描述」<br>
								步驟三：上傳您與他人的「手部對照影像」並輸入「驗證碼」<br></b>
						</p>
					</div>
				</section>
				<section class="row3 list-item s4">
					<header class="list-item-header"><i class="icon icon-step1-row3"></i>個人資料使用同意書</header>
					<div class="upload_pic-cnt">
						<p class="txt-fc1">感謝您使用「肢端肥大症-衛教資訊網」之〈大手照過來-照片上傳系統〉，您的個人隱私權，本網站絕對尊重並予以保護。為了幫助您瞭解本系統如何使用及保護您所提供的個人資訊，請您務必詳細閱讀下列資訊：</p>
						<h3 class="title-fc1">一、個人資料的使用及保密</h3>
						<p class="txt-fc1">您所上傳之照片檔案及輸入之相關個人資料(包含姓名、性別、年齡、聯絡方式(電話、mail)、  症狀描述)等，本網站將進行彙整、保管，並提供醫師線上參閱。<br>本網站有義務保護個人隱私資料，除非經本人同意否則不會自行修改或刪除任何資料或檔案。<br>您所提供的所有資訊將僅限於醫師線上參閱，絕不會任意下載、出售、交換或以任何形式提供其它團體、個人或私人企業。</p>
						<h3 class="title-fc1">二、網站安全機制</h3>
						<p class="txt-fc1">本網站對外服務主機已建置網路安全機制。對於不明企圖與入侵、破壞者，將依安全政策規範，進行呈報與阻攔，並通報警政單位。</p>
						<h3 class="title-fc1">三、同意書之效力</h3>
						<p class="txt-fc1">當您勾選「我同意」時，即表示您已閱讀、瞭解並同意本同意書之所有內容。</p>
					</div>
					<footer class="list-item-footer agree">
						<input type="checkbox" id="agree">
						<label for="agree" class="agree-label">已閱讀</label>
					</footer>
				</section>
				<section class="row4 btns">
					<a href="<?php path_au('index'); ?>" class="btn btn-default btn-cancel">取消</a>
					<button type="button" class="btn btn-default btn-next" onclick="submitgo();">下一步</button>
				</section>
			</form>
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
