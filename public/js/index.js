/*   ecart_sheet_sum   */
$(function(){
    $(window).scroll(function() {
        if ( $(this).scrollTop() < 650){
			$("#e_sum").removeClass("ecart_sheet_sum");
            $("#e_sum").addClass("ecart_sheet_sum_fixed");
        } else {
			$("#e_sum").removeClass("ecart_sheet_sum_fixed");
            $("#e_sum").addClass("ecart_sheet_sum");
        }
    });
});
/*   menu fade in   &     quick_menu_con .selected  */
$(function(){
    $(window).scroll(function() {
        if ( $(this).scrollTop() > 150){
			$('#header_container').addClass("header_container_fixed");
			//$('#quick_menu').fadeIn("fast");
			hidequick();
        } else {
			$('.quick_menu_con li a').removeClass("selected");
			$('#header_container').removeClass("header_container_fixed");
     		$('#quick_menu').stop().fadeOut("fast");
        }

    });
});
//  寬度小於1600  隱藏左側選單
function hidequick() {
  var w=$("body").innerWidth();
     //  if (w<1600){
	 //    $('#quick_menu').stop().fadeOut("fast");
	//  }else{
		 if ( $(window).scrollTop() > 150){
		 $('#quick_menu').fadeIn("fast");
		 }else{
			  $('#quick_menu').stop().fadeOut("fast");
	//		}
		 }
}
$(document).ready(function() {
	hidequick();
$(function(){
   $(window).resize(function() {
  		hidequick();
   });
  });
});


// sub_menu
$(function(){
	$('.catelog #sub1').mouseover(function(){
			$('#sub1 .sub_menu').show(200);
		}).mouseleave(function(){
			$('#sub1 .sub_menu').hide();
	});
	$('.catelog #sub2').mouseover(function(){
			$('#sub2 .sub_menu').show(200);
		}).mouseleave(function(){
			$('#sub2 .sub_menu').hide();
	});
	$('.catelog #sub3').mouseover(function(){
			$('#sub3 .sub_menu').show(200);
		}).mouseleave(function(){
			$('#sub3 .sub_menu').hide();
	});
	$('.catelog #sub4').mouseover(function(){
			$('#sub4 .sub_menu').show(200);
		}).mouseleave(function(){
			$('#sub4 .sub_menu').hide();
	});
	$('.catelog #sub5').mouseover(function(){
			$('#sub5 .sub_menu').show(200);
		}).mouseleave(function(){
			$('#sub5 .sub_menu').hide();
	});



});

/*    slider   */
/*    banner   */
$(function () {
	$("#slider1").slider({
		speed: 500,
		interval: 4000,
		width: 745,
		height: 372
	});
});

/*    ranker   */
$(function () {
	$("div[id^=rank_slider]").slider({
		autoPlay: false,
		speed: 500,
		interval: 4000,
		width: 238,
		height: 596
	});
});

/*    item ranker   */
$(function () {
	$("#rank_item").slider({
		autoPlay: false,
		speed: 500,
		interval: 4000,
		width: 218,
		height: 596
	});
});


/*    show  act   */
$(function(){
	var x = Array();
	var s = $('div[class^=row_list]').size();
	for(var i = 0 ;i < s ;i++){
		x[i] = $('div[class^=row_list]').eq(i).html();
	}

	$("a[class^=show_act]").unbind().click(function(){
		$('#floor1 .row_title h3').attr('class','gray');
		$('.show_act').attr('class','show_act');
		$(this).attr('class','show_act selected');
		$('#floor1 .row_act').fadeOut();
		var id = $("a[class^=show_act]").index($(this));
  		$('#floor1 .row_list').fadeOut();
		$('#floor1 .row_act').eq(id).fadeIn();

		$("a[class^=hide_act]").unbind().click(function(){
			$('#floor1 .row_title h3').attr('class','');
			$('.show_act').attr('class','show_act');
			$('.row_list').fadeIn();
			var id2 = $("a[class^=hide_act]").index($(this));
			$('#floor1 .row_act').eq(id2).attr('style','display:none');
			return false;
		});
		return false;
	  });
});







/*   tooltips   */
$(document).ready(function() {
   $('.tooltip').jBox('Tooltip', {
   position: {
        x: 'left',
        y: 'top'
    },
    outside: 'x'
	});
    $('.tooltip_list').jBox('Tooltip');
	$("#open_sheet a").jBox('Modal',{width: 1020,height: 500,content:$("#v_esheet_loader").load('無敵估價單-單號-blank.html')}) ;
    //$(".v_esheet a").jBox('Modal',{width: 1020,height: 500,content:$("#v_esheet_loader").load('無敵估價單-單號.html .ecart_sheet_frame')})
    $(".v_hope a").jBox('Modal',{width: 450,height: 220,content:$("#sheet_price_loader").load('價格報馬仔.html')});
    $(".open_login").jBox('Modal',{width: 760,height: 300,content:$("#login_loader").load('會員登入.html')});
    $(".b_order").jBox('Modal',{width: 820,height: 400,content:$("#order_loader").load('表單-訂單明細.html')});
    $(".b_cancel").jBox('Modal',{width: 450,height: 180,content:$("#cancel_loader").load('表單-取消訂單.html')});
    $(".b_back").jBox('Modal',{width: 820,height: 470,content:$("#back_loader").load('表單-退貨.html')});
    $(".b_change").jBox('Modal',{width: 820,height: 370,content:$("#change_loader").load('表單-換貨.html')});
    $(".b_question").jBox('Modal',{width: 450,height: 220,content:$("#question_loader").load('表單-客服.html')});
});


/*   go top  & go floor  */
$(function(){
	$(".gototop").click(function(){
		$("html,body").animate({scrollTop:0},900);
		return false;
	  });
	$(".gotofloor1").click(function(){
		$('.quick_menu_con li a').removeClass("selected");

		var floor_top= $('#floor1').position().top-80;
		$("html,body").animate({scrollTop:floor_top},900);
		$('.gotofloor1').addClass("selected");
		return false;
	  });
	$(".gotofloor2").click(function(){
		$('.quick_menu_con li a').removeClass("selected");

		var floor_top= $('#floor2').position().top-80;
		$("html,body").animate({scrollTop:floor_top},900);
		$('.gotofloor2').addClass("selected");
		return false;
	  });
	$(".gotofloor3").click(function(){
		$('.quick_menu_con li a').removeClass("selected");

		var floor_top= $('#floor3').position().top-80;
		$("html,body").animate({scrollTop:floor_top},900);
		$('.gotofloor3').addClass("selected");
		return false;
	  });
	$(".gotofloor4").click(function(){
		$('.quick_menu_con li a').removeClass("selected");

		var floor_top= $('#floor4').position().top-80;
		$("html,body").animate({scrollTop:floor_top},900);
		$('.gotofloor4').addClass("selected");
		return false;
	  });
	$(".gotofloor5").click(function(){
		$('.quick_menu_con li a').removeClass("selected");

		var floor_top= $('#floor5').position().top-80;
		$("html,body").animate({scrollTop:floor_top},900);
		$('.gotofloor5').addClass("selected");
		return false;
	  });
});


/* 更多  */
$(document).ready(function(){
 $("#b1").click(function(){
         $(".attr_list_more").toggle();
  });
});


/*   搜尋 更多開關  */
function toggleAndChange() {
	 $('.more_search_attr').toggle();
     if ($('.more_search_attr').css('display') === 'none') {
		  $('.more_search_attr_btn a span').attr('class','fa fa-chevron-down');
    }
     else {
		  $('.more_search_attr_btn a span').attr('class','fa fa-chevron-up');
     }
}


/*  顯示比較表  */
$(function(){
$('.v_compare').mouseover(function(){
			$(this).parent('div').children("div[class=v_compare_box]").show();
		}).mouseleave(function(){
			$(this).parent('div').children("div[class=v_compare_box]").hide();
	});
});


/*item_detail*/
$(document).ready(function() {
	var info = 1;
	$(".item_info_tab_con h3 a").click(function(){
		$(".item_info_tab_con .selected").removeAttr("class");
		$(this).attr("class","selected");
		$(".item_info"+info).css("display","none");
		info = $(this).index()+1;
		$(".item_info"+info).fadeIn();
		return false;
	})
	$(".pic_nav ul li a").click(function(){
		$(".pic_nav .selected").removeAttr("class");
		$(this).parent("li").attr("class","selected");
		$(".pb1").html($(this).html());
		return false;
	})
	$(".attr_title").click(function(){
		$(this).parent("div").children(".attr_list").toggle();
		if($(this).parent("div").children(".attr_list").css("display")==="none")
			$(this).children("span").attr("class","fa fa-plus-square");
		else
			$(this).children("span").attr("class","fa fa-minus-square");
	})
})



/*    show  hide small_list   */
$(function(){
	$("#s_list").click(function(){
		$("#s_list").addClass("selected");
		$("#l_list").removeClass("selected");
		$("#search_list_container").addClass("small_list");
		return false;
	  });
});
$(function(){
	$("#l_list").click(function(){
		$("#l_list").addClass("selected");
		$("#s_list").removeClass("selected");
		$("#search_list_container").removeClass("small_list");
		return false;
	  });
});


/* 估價單  */
$(document).ready(function(){
 $(".btn_open:eq(0)").click(function(){
         $(".ecart_sheet_openbox").toggle();
     return false;
  });
    $(".ecart_sheet_show_pro_pic").hover(function(){
         $(".ecart_sheet_pro_pic").toggle();
     return false;
  });

});


