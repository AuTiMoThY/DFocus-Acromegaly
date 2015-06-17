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
<div id="notifications"></div>
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
					<div class="step2 col-3 txt-fc1"><i class="icon"></i>STEP2.<br>填寫基本資料及症狀</div>
					<div class="step3 col-3 txt-fc1 active"><i class="icon"></i>STEP3.<br>上傳手部對照影像</div>
				</section>
				<section class="row2 list-item s4 upload_pic-steps3">
					<header class="list-item-header"><i class="icon icon-step3-row2"></i>上傳手部對照影像</header>
					<div class="upload_pic-form-data frm--dfocus frm--uploadpic">
						<form action="" class="">
							<table>
								<tr>
									<td colspan="2">
										<div class="ib">
											<p>請拍攝您與其他人的手部影像<br>如右範例照片：</p>
										</div>
										<div class="ib">
											<img src="<?php path_au('img'); ?>pic.jpg" alt="">
										</div>
									</td>
								</tr>
								<tr>
									<td colspan="2">
<span class="input input--df">
	<label for="acroPhone" class="frm__label">上傳照片：</label>
	<input type="file" name="acrophone" id="acroPhone" class="frm__field">
</span>
									</td>
								</tr>
							</table>
						</form>
					</div>
					<footer class="list-item-footer agree">
					    <div class="code_block">
					        <!-- 輸入驗證碼： -->
					        <label for="input_code" class="titleLabel ib">請輸入驗證碼：</label>
					        <input type="text" id="input_code" class="ib">
					        <div class="code" id="checkCode" onclick="createCode()"></div>
					    </div>
					</footer>
				</section>
				<section class="row3 btns">
					<a href="upload_step2.php" class="btn btn-default btn-cancel">上一步</a>
					<button type="button" class="btn btn-default btn-next" onclick="submitgo();">確認送出</button>
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

var code;
function createCode() {
    code = "";
    var codeLength = 6; //验证码的长度
    var checkCode = document.getElementById("checkCode");
    var codeChars = new Array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 
    'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'); //所有候选组成验证码的字符，当然也可以用中文的
    for (var i = 0; i < codeLength; i++)  {
        var charNum = Math.floor(Math.random() * 26);
        code += codeChars[charNum];
    }
    if (checkCode)  {
        checkCode.className = "code";
        checkCode.innerHTML = code;
    }
}


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

function notifications_append(e, msg){

var center = '<div id="notifications-full">';
	center += '	<div id="notifications-full-close" class="close">';
	center += '		<span class="fa fa-times" data-icon="&#xe20e;"></span>';
	center += '	</div>';
	center += '	<div id="notifications-full-icon">';
	center += '		<span class="icon" data-icon="&#xe261;"></span>';
	center += '	</div>';
	center += '	<div id="notifications-full-text">';
	center += '		'+msg;
	center += '	</div>';
	center += '</div>';
	center += '';

	e.append(center);
}

function submit_append2(e, msg){

var center = '<div id="notifications-full">';
	center += '	<div id="notifications-full-close" class="close">';
	center += '		<span class="fa fa-times" data-icon="&#xe20e;"></span>';
	center += '	</div>';
	center += '	<div id="notifications-full-icon">';
	center += '		<p class="upload_pic-steps3-msg">照片已成功送出！</p>';
	center += '	</div>';
	center += '	<div id="notifications-full-text">';
	center += '		'+msg;
	center += '	</div>';
	center += '</div>';
	center += '';

	e.append(center);
}

function submitgo(){
	var input_code = $("#input_code").val();

	if (input_code == "") {
		$("#notifications-full").remove();
		notifications_append($("#notifications"), "請輸入驗證碼");
		// $("#notifications").append(center);
		$("#notifications").addClass('active');
		$("#notifications-full").addClass('animated bounce');
		refresh_close();
	}else if (input_code.toUpperCase() != code) {
		$("#notifications-full").remove();
		notifications_append($("#notifications"), "驗證碼錯誤，請重新輸入");
		// $("#notifications").append(center);
		$("#notifications").addClass('active');
		$("#notifications-full").addClass('animated bounce');
		refresh_close();
		createCode();
	}else {
		$("#notifications-full").remove();
		submit_append2($("#notifications"), "感謝您使用「大手照過來-影像上傳系統」服務<br> 請您耐心等候，駐站醫師將盡快回覆您喔！");
		// $("#notifications").append(center);
		$("#notifications").addClass('active');
		$("#notifications-full").addClass('animated bounce');
		refresh_close();

		setTimeout(function(){
			location.href="index.php";
		}, 3500);
	};



}


$(function() {
	createCode();
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
