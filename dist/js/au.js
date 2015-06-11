/*--------------------------------------*\
	肢端肥大症 Acromegaly
			by DFocus AuTiMoThY
\*--------------------------------------*/
var oldIE = false;
if ($("html").hasClass('.ie-lt9')) {
	oldIE = true;
};
// if (ie<=8) {
// 	oldIE = true;
// };
// console.log(oldIE);


/*--------------------------------------*\
	PIC大圖輪播_變數宣告
\*--------------------------------------*/
var NN = 0;
var Time = 0;
var QUA = $('#bodyBg .bg').length;



function webBuilding() {
	alert("頁面建置中\r\n敬請期待");
}


	function mainNavLink(whereYouGo) {
		switch(whereYouGo) {
			case "goto2":
				location.href="understanding_1.php";
				break;
			case "goto3":
				location.href="symptoms_1.php";
				break;
			case "goto4":
				location.href="diagnosis_1.php";
				break;
			case "goto5":
				location.href="coexisting_1.php";
				break;
			case "goto6":
				location.href="information.php";
				break;
			case "goto7":
				location.href="media.php";
				break;

		}
	}

function viewPortWidthHeight() {
  var wh = {};
  if(window.innerWidth) {
      wh.width = window.innerWidth;
      wh.height = window.innerHeight;
  }
  else if(document.documentElement.clientWidth) {
      wh.width = document.documentElement.clientWidth;
      wh.height = document.documentElement.clientHeight;
  }
  else if(document.body.clientWidth) {
      wh.width = document.body.clientWidth;
      wh.height = document.body.clientHeight;
  }
  return wh;
}

function resizeBlock(){
	var $body = $("body"),
		$indexPage = $("body.index_page"),
		viewPortWH = viewPortWidthHeight(),
		viewPortH = viewPortWH.height;
	var $indexCnt = $("#indexCnt");

	if ($indexPage.length) {
		$indexPage.css('height', viewPortH);
		$("#bodyBg").css('height', viewPortH);
	};

	if ($indexCnt.length) {
		var indexCntH = $indexCnt.outerHeight();

		// console.log(indexCntH); 
		if (indexCntH < 245) {
			$indexCnt.css({
				padding: '0.5% 0 0'
				// property2: 'value2'
			});
		}
		else if (indexCntH = 245) {
			// console.log(indexCntH);
			$indexCnt.css({
				padding: '20px 0 0'
				// property2: 'value2'
			});
		}

	}

}

function isHover($this, $thisClass) {
	if (!($this.hasClass('js-hover'))) {
		$this.addClass('js-hover');
	} else{
		$thisClass.removeClass('js-hover');
	};
}

/*--------------------------------------*\
	PIC大圖輪播
\*--------------------------------------*/
function PIC(){   
	if(NN < QUA-1){
		$("#bodyBg .bg").fadeOut(1000).removeClass('active').eq(NN).fadeIn(1000).addClass('active');
		$("#bodyBgCtrl li").removeClass('active').eq(NN).addClass('active');
		NN += 1;    

	}else{
		$("#bodyBg .bg").fadeOut(1000).removeClass('active').eq(NN).fadeIn(1000).addClass('active');
		$("#bodyBgCtrl li").removeClass('active').eq(NN).addClass('active');
		NN = 0;
	}
	Time = setTimeout(PIC, 6000);
}



$(window).on('resize', function () {
	resizeBlock();
});

$(function () {
	resizeBlock();
	PIC();

	var bgLen = $("#bodyBg .bg").length;
	console.log(bgLen);
	for (var i = 0; i < bgLen; i++) {
		$(".bodyBg_ctrl-dot").eq(i).stop().click(function() {
			$("#bodyBgCtrl li.active").removeClass('active');
			$(this).addClass('active');
			$("#bodyBg .bg").fadeOut(1000).removeClass('active');
			$("#bodyBg .bg").eq(i).fadeIn(1000).addClass('active');

			clearTimeout(PIC);
		});
	};



	$.preload();


	$(".main_nav-item:has('ul')").hover(function() {
		$(this).addClass('js-hover');
		$("#subNavBar").addClass('active');
	}, function() {
		$(this).removeClass('js-hover');
		$("#subNavBar").removeClass('active');
	});



	// var ftCtrl = 0;
	// $('#ftCtrl').click(function() {
	// 	if( userAgent.match(/(msie|MSIE)/) || userAgent.match(/(T|t)rident/)  ) {
	// 		// console.log(' ie')
	// 	}else {
	// 		// console.log('not ie');
	// 		$.material.init();
	// 	}
	// 	footerCtrler();
	// });

	// $(".sitemap-seg a").click(function(event) {
	// 	ftCtrl = 1;
	// 	footerCtrler();
	// });

	// function footerCtrler() {

	// 	if (ftCtrl==0) {
	// 		//  footer open
	// 		$('footer#footerWrap').animate({bottom: '400%'}, 300, 'easeInOutQuart');
	// 		$('#ftCtrl').animate({top: '-315px'}, 0)
	// 		ftCtrl++
	// 	}else {
	// 		//  footer close
	// 		$('footer#footerWrap').animate({bottom: '0'}, 300, 'easeInOutQuart');
	// 		$('#ftCtrl').animate({top: '-30px'}, 0)
	// 		ftCtrl=0
	// 	};
	// }



	// $(window).bind('scroll resize', function() {
	// 	var $this = $(this),
	// 		scroll = $this.scrollTop();

	// 	if (scroll>=200) {
	// 		$("#headerWrap").css('height', '8%');
	// 		$("nav.main_nav ul").css('bottom', '1em');
	// 		$(".logo").css({'height': '90%', 'position': 'relative', 'left': '-5%'});
	// 		$(".page_banner").css({
	// 			'background-attachment': 'fixed',
	// 			'background-position': '50% -80%'
	// 		});
	// 	}else {
	// 		$("#headerWrap").css('height', '');
	// 		$("nav.main_nav ul").css('bottom', '');
	// 		$(".logo").css({'height': '', 'position': '', 'left': ''});
	// 		$(".page_banner").css({
	// 			'background-attachment': '',
	// 			'background-position': ''
	// 		});
	// 	};
	// });

})




