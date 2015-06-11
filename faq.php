<?php
	include_once 'config.php';
	include_once INC_PATH.'headleader.php';
	require_once INC_PATH.'aunav.php';
?>
<?php
// -------------------------------
// 狀態判斷：
// -------------------------------
//	status 1 : 一般使用者，FAQ管理者未回覆
//
//	status 2 : 一般使用者，FAQ管理者有回覆
//
//	status 3 : FAQ管理者登入 ( 從後台連結過來的 )。且尚未回覆。
//	
//	status 4 : FAQ管理者登入 ( 從後台連結過來的 )。已有回覆，要編輯回覆內容
?>

<title>疾病QA | 肢端肥大症-衛教資訊網</title>

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
				<h1 class="txt_title-title-faq hide_txt">疾病QA</h1>
			</header>

			<article class="cnt_md faq clearfix">
				<section class="faq-wrap">
					<aside class="left">
						<header class="aside-header"></header>
						<div class="aside-block">
							<div class="pic faq-pic">
								<img src="<?php path_au('temp'); ?>tem3.jpg" alt="">
							</div>
							<p class="txt-fc1">
								肢端肥大症最常見的症狀即為外觀的變化，但此疾病外表的變化是很緩慢的。往往發現的時候，腦下垂體腫瘤都已擴大，也造成治療上的困難。
							</p>
							<p class="txt-fc1">
								因此，希望能藉由我畢生的醫療經驗，讓此疾病的患者能及早被發現，早期得到妥善治療。
							</p>
						</div>
						<footer class="aside-footer">
							<p>
								* 本Q&A單元記綠綜合很多位患者被診斷之前、治療期間和治療之後所發出的問題與醫師的意見回覆。請注意！這些只是可能的建議，獲得這些建議之後，不代表您已經不需要由受過專業訓練的合格治療師為您提供諮詢服務、心理社會支持或心理協助
							</p>
						</footer>
					</aside>
					<article class="faq-container left">
<?php
echo "<!-- status 1 : 一般使用者，FAQ管理者未回覆 -->";
?>
						<section class="list-item s4">
							<header class="list-item-header">
								肢端肥大症是什麼?
							</header>
							<div class="leader">
								<span class="faq-msg-people ib">留言: 王大明</span><span class="faq-msg-date ib">日期 : 2014 / 9 / 5</span>
							</div>
							<div class="faq-msg-cnt">
								<p>最近懷疑自己有肢端肥大症，但手邊的資料很少，身邊也沒有相同背景病因的人可以詢問。希望可以得到相關資料。若是有人有一樣的病，希望也可以分享這段歷程。謝謝</p>
							</div>
							<!-- 管理者無回覆，故不會顯示回覆區塊 -->
						</section>

<?php 
echo "<!-- status 2 : 一般使用者，FAQ管理者有回覆 -->";
?>

						<section class="list-item s4">
							<header class="list-item-header">
								這一行是標題 我有問題想要發問??
							</header>
							<div class="leader">
								<span class="faq-msg-people ib">留言: 王大明</span><span class="faq-msg-date ib">日期 : 2014 / 9 / 5</span>
							</div>
							<div class="faq-msg-cnt">
								<p>老實說<br>
									大概有3年了...<br>
									<br>
									主要是4肢(手+臀部以下)<br>
									總是會不名所以然地腫脹起來<br>
									紅腫.會痛..尤其是我的手指發作較頻繁<br>
									當腫脹起來時.很不自然.會比其他沒腫的地方紅.脹.也好像熱了點...<br>
									<br>
									我有去抽血檢查過.但查不出什麼來<br>
									頂多是查出我的血脂過高<br>
									<br>
									前陣子 <br>
									有位醫生說.我可能是水腫<br>
									但我印象中.水腫的症狀不太像呀<br>
									後來他說.是屬於嚴重型水腫<br>
									<br>
									我想問<br>
									真的是這樣嗎??<br>
									如果真的是.那我又要怎麼做比較不容易讓自己腫脹呢??</p>
							</div>
							<!-- 管理者有回覆時才顯示   ↓↓↓ -->
							<div class="faq-msg-reply">
								<b>回覆：</b>
								<p>
								一般人想到「水腫」總是會認為與水喝多了，要不就是腎不好有關，事實上「水腫」指的是體內液體過多聚積在細胞間隙的狀況，會造成體內水分積聚的原因主要與細胞外液及細胞內液的的鈉、鉀離子不平衡有關，並非與水分的攝取多寡有關，「水」因屬低張性溶液，多喝水對於鈉滯留體內所致的水腫，反而有改善的作用。<br>
								<br>
								所以有水腫的人不一定就是腎臟有問題，但有水腫的人一定要早期接受進一步的檢查，才能瞭解真正水腫的原因。一般來說引起水腫的原因除了心肺衰竭、腎病症後群、糖尿病、肝硬化、紅斑性狼瘡等較嚴重的疾病，可能改變血管通透性外，長期站立或坐著工作、精神壓力引發的荷爾蒙失調、飲食太鹹等，或服用特殊藥物，都可能使靜脈循環不佳，以致局部（特別是腳）出現所謂體質性的水腫。<br>
								<br>
								體質性水腫是水腫中最常見的，尤其以女性為多，而水腫又分為局部性水腫及全身性水腫兩種，局部性水腫，可由局部組織發炎、靜脈或淋巴管阻塞，所導致微血管的靜水壓上升或通透性改變或組織液無法順利回流至淋巴管所造成；而全身性水腫可由心臟、腎臟疾病所引起。
								</p>
							</div>
						</section>

<?php 
echo "<!-- status 3 : FAQ管理者登入 ( 從後台連結過來的 )。且尚未回覆。 -->";
?>
						<section id="form_0" class="list-item s4">
							<header class="list-item-header">
								這一行是標題 我有問題想要發問??
							</header>
							<div class="leader">
								<span class="faq-msg-people ib">留言: 王大明</span><span class="faq-msg-date ib">日期 : 2014 / 9 / 5</span>
								<div style="width:200px; position: absolute; top: -1.5em; right: 0;">
									<a href="javascript:void(0)" onClick="AddForm('#form_0', 0)" class="btn btn-default btn-adm btn-adm-reply">回覆留言</a>
									<a href="javascript:void(0)" onclick="DelForum()" class="btn btn-default btn-adm btn-adm-del">刪除留言</a>
								</div>
							</div>
							<div class="faq-msg-cnt">
								留言內容留言內容留言內容留言內容留言內容留言內容留言內容留言內容留言內容
							</div>
							<div class="faq-msg-reply" style="display : none;">
								<b>回覆：</b>
							</div>
						</section>


<?php 
echo "<!-- status 4 : FAQ管理者登入 ( 從後台連結過來的 )。已有回覆，要編輯回覆內容 -->";
?>
						<section id="form_1" class="list-item s4">
							<header class="list-item-header">
								這一行是標題 我有問題想要發問??
							</header>
							<div class="leader">
								<span class="faq-msg-people ib">留言: 王大明</span><span class="faq-msg-date ib">日期 : 2014 / 9 / 5</span>
								<div style="width:200px; position: absolute; top: -1.5em; right: 0;">
									<a href="javascript:void(0)" onClick="EditForm('#form_1', 0)" class="btn btn-default btn-adm btn-adm-reply">回覆留言</a>
									<a href="javascript:void(0)" onclick="DelForum()" class="btn btn-default btn-adm btn-adm-del">刪除留言</a>
								</div>
							</div>
							<div class="faq-msg-cnt">
								<p>老實說<br>
									大概有3年了...<br>
									<br>
									主要是4肢(手+臀部以下)<br>
									總是會不名所以然地腫脹起來<br></p>
							</div>
							<!-- 管理者有回覆時才顯示   ↓↓↓ -->
							<div class="faq-msg-reply">
								<b>回覆：</b>
								<p>
								一般人想到「水腫」總是會認為與水喝多了，要不就是腎不好有關，事實上「水腫」指的是體內液體過多聚積在細胞間隙的狀況，會造成體內水分積聚的原因主要與細胞外液及細胞內液的的鈉、鉀離子不平衡有關，並非與水分的攝取多寡有關，「水」因屬低張性溶液，多喝水對於鈉滯留體內所致的水腫，反而有改善的作用。
								</p>
							</div>
						</section>
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
<div class="leave_a_message">
	<h1 class="txt_title-title-msg hide_txt">我要留言</h1>
	<section class="list-item cnt_md s4">
		<form name="ForumForm" id="ForumForm">
			<ul>
				<li>
					<label for="title">標題：</label>
					<input type="text" name="title" id="title" placeholder="標題名稱" class="frm_field-title validate[required]">
				</li>
				<li>
					<div class="ib">
						<label for="name">姓名：</label>
						<input type="text" name="name" id="name" placeholder="姓名" class="frm_field-name validate[required]">
					</div>
					<div class="ib">
						<label for="email">EMAIL：</label>
						<input type="text" name="email" id="email" placeholder="e-mail" class="frm_field-email validate[required,custom[email]]">
					</div>
				</li>
				<li class="textarea">
					<textarea name="content" id="content" placeholder="輸入內容" class="frm_field-cnt validate[required]"></textarea>
				</li>
				<li class="ftBar cf">
				    <div class="code_block">
				        <!-- 輸入驗證碼： -->
				        <label for="input_code" class="titleLabel ib">請輸入驗證碼：</label>
				        <input type="text" id="input_code" class="ib">
				        <div class="code" id="checkCode" onclick="createCode()"></div>
				    </div>
					<div class="btns">
						<input type="button" name="SendBtn" id="SendBtn" class="btn btn-flat btn-link" value="發表留言" onClick="submitgo();">
						<input type="reset" name="" id="" class="btn btn-flat btn-link" value="取消重填">
					</div>
				</li>
			</ul>
		</form>
	</section>
</div>


					</article>
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
<script language="JavaScript" type="text/javascript" src="plugin/Validation-Engine/jquery.validationEngine.js"></script>
<script language="JavaScript" type="text/javascript" src="plugin/Validation-Engine/jquery.validationEngine-zh_TW.js"></script>


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
	$('#faqmsg').height(window.innerHeight - 50);
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

var center = '<div id="faqmsg-full">';
	center += '	<div id="faqmsg-full-close" class="close">';
	center += '		<span class="fa fa-times" data-icon="&#xe20e;"></span>';
	center += '	</div>';
	center += '	<div id="faqmsg-full-text">';
	center += '		謝謝您的留言,駐站醫師將盡快回覆您！';
	center += '	</div>';
	center += '</div>';
	center += '';


function submitgo(){

	$("#faqmsg-full").remove();
	$("#faqmsg").append(center);
	$("#faqmsg").addClass('active');
	$("#faqmsg-full").addClass('animated bounce');
	refresh_close();

}

function AddForm(obj,rid){
	$("#edit_reply").remove();
	$(obj).find(".faq-msg-reply").css("display","block");
	// $(this).find(".message_reply").css("display","block");
	var EditCnt = "";
EditCnt += "<div id=\"edit_reply\"><form name=\"EditForum\" id=\"EditForum\">";
EditCnt += "<ul>";
EditCnt += "	<li>";
EditCnt += "		<textarea name=\"reply\" style=\"width:100%;height:100px\"></textarea></li>";
EditCnt += "	<li class=\"btns\"><input  type = \"hidden\" name=\"reply_id\" value=\"\">";
EditCnt += "		<input type=\"submit\" value=\"送出\" class=\"btn btn-default btn-adm btn-adm-submit\">";
EditCnt += "		<input type=\"reset\" value=\"重寫\" class=\"btn btn-default btn-adm btn-adm-reset\">";
EditCnt += "	</li>";
EditCnt += "</ul>";
EditCnt += "</form></div>";
EditCnt += "";

	$(obj).find(".faq-msg-reply").append(EditCnt);
	// $(this).find(".faq-msg-reply").append(EditCnt);
	

}

function EditForm(obj,rid){
	$("#edit_reply").remove();
	$(obj).find(".faq-msg-reply").css("display","block");
	// $(this).find(".message_reply").css("display","block");
	var EditCnt = "";
EditCnt += "<div id=\"edit_reply\"><h3><b>編輯回覆內容：</b></h3>";
EditCnt += "<form name=\"EditForum\" id=\"EditForum\">";
EditCnt += "<ul>";
EditCnt += "	<li>";
EditCnt += "		<textarea name=\"reply\" style=\"width:100%;height:100px\"></textarea></li>";
EditCnt += "	<li class=\"btns\"><input  type = \"hidden\" name=\"reply_id\" value=\"\">";
EditCnt += "		<input type=\"submit\" value=\"送出\" class=\"btn btn-default btn-adm btn-adm-submit\">";
EditCnt += "		<input type=\"reset\" value=\"重寫\" class=\"btn btn-default btn-adm btn-adm-reset\">";
EditCnt += "	</li>";
EditCnt += "</ul>";
EditCnt += "</form></div>";
EditCnt += "";

	$(obj).find(".faq-msg-reply").append(EditCnt);
	// $(this).find(".faq-msg-reply").append(EditCnt);
	

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
