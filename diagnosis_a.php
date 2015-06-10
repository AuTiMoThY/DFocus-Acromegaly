<!doctype html>
<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" lang="zh"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" lang="zh"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 ie-lt10 ie-lt9 no-js" lang="zh"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 ie-lt10 no-js" lang="zh"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="zh"><!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>診斷結果 | 庫欣氏病</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="favicon.ico" />

<link rel="stylesheet" href="css/reset.css" />
<!-- <link rel="stylesheet" href="css/style.css" /> -->

<!--<script src="js/controllers.js"></script> -->
<style>
html {
	overflow: hidden;
}
body {
	background-color: #fff;
	padding: 30px;
	color: #172934;
	font-size: 15px;
	letter-spacing: 1px;
}
h1 {
	border-bottom: 1px solid #e9ca4c;
	margin-bottom: 20px;
	padding-bottom: 0.8em;
	font-weight: bolder;
	font-size: 17px;
	font-family: "PMingLiU", \65B0\7EC6\660E\4F53, Arial, "Helvetica Neue", Helvetica, sans-serif;
	line-height: 21px;
	letter-spacing: 1px;
}
h2 {
	font-size: 17px;
	font-weight: bolder;
	font-family: "PMingLiU", \65B0\7EC6\660E\4F53, Arial, "Helvetica Neue", Helvetica, sans-serif;
	line-height: 23px;
}
.red {
	color: #e83f22;
	font-weight: bolder;
	font-size: 17px;
}
p {
	font-size: 15px;
	line-height: 23px;
}
</style>


<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>

<body>
<h1>評估結果</h1>

<!-- 勾選數量 大於等於 2 項 -->
<section class="gt2" style="display:none;">
	<h2>自我評估有多於<span class="red"> 2 </span>項臨床症狀</h2>
	<p>
	你可能罹患肢端肥大症，請盡速就診，及早發現，及早治療。<br>
	<!-- 庫欣氏病患者死亡率是一般人的4倍 -->
	</p>
</section>

<!-- 勾選數量1項 -->
<section class="eq1" style="display:none;">
	<h2>自我評估有<span class="red"> 1 </span>項臨床症狀</h2>
	<p>
		小心你的身體喔!！若發現身體不適，記得要到醫院找醫師唷!
	</p>
</section>

<!-- 無勾選 -->
<section class="eq0" style="display:none;">
	<h2>自我評估有<span class="red"> 0 </span>項臨床症狀</h2>
	<p>
		恭喜您，您不是肢端肥大症患者!
	</p>
</section>




<!-- Grab Google CDN's jQuery. fall back to local if necessary -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/libs/jquery-1.11.1.js"><\/script>')</script>

<!-- <script src="js/au.js"></script> -->
<script>
	$(document).ready(function(){
		var checknum = $("input[name='assess']:checked",window.parent.document).length;
		console.log(checknum);
		if(checknum <=0){
			$(".eq0").css("display","block");
		}else if(checknum == 1){
			$(".eq1").css("display","block");
		}else{
			$(".gt2").css("display","block");
		}
		
	});
</script>

</body>
</html>
