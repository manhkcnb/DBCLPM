$(function(){
	$('#showmenumobile').click(function(){
		if($("#boxmenumobile").width()>0){
			$("#boxmenumobile").stop().animate({
				width: "0%",
			
			}, 300 );
			$("#boxmenumobile ul.mainmenumobile").css({
				left: '0px'
			});
			$('.submemumobile').css({
				width: '0%'	
			})
		}else{
			$("#boxmenumobile").stop().animate({
				width: "100%",
				
			}, 300 );
			$('.submemumobile').css({
				width: '0%'	
			})
		}
		 return false;
	})
	$('.mainmenumobile li i').click(function(){
		var me = $(this);
		
		$("#boxmenumobile ul.mainmenumobile").animate({
				left: '-100%'
		},800);
		$('#' + me.attr('rel')).stop().show().animate({
			width: "100%",
		},800);
		
		return false;
	});
	$('.submemumobile li.title a').click(function(){
		$('.submemumobile').animate({
				width: '0%'
		},800);;
		$("#boxmenumobile ul.mainmenumobile").animate({
				left: '0%'
		},800);
		return false;
	});
	$(window).resize(function(){
		$("#page_scroll").css({
			'height':$(window).height() - page_scroll_bottom +'px'
		});	
		
	});
	
	$("#page_scroll").css({
		'height':$(window).height() - page_scroll_bottom +'px'
	});	
	
	$('#menubottom .child').hover(function(){
		
	},function(){
		$(this).hide();
	})
	$('#menubottom .child').each(function(){
		if($('ul li',this).length >8){
			$('ul',this).css({
				'width' : '640px'
			});
		}else if($('ul li',this).length <5){
			$('ul',this).css({
				'width' : '250px'
			});
		}
	});
	
	
	
	$('.box-search-bottom').hover(function(){
		$('.thumbbar').hide();
			$('.crumb').hide();
			$('.more-info').hide();
	});	
	$('#btnsearch').click(function(){
		
		$('.box-search-bottom').slideToggle();
		if($('.box-search-bottom').is(":visible")){
			$('.thumbbar').hide();
			$('.crumb').hide();
			$('.more-info').hide();
			$('#menubottom .content').css({
			//	'height' : '135px'
			});
		}else{
			$('.thumbbar').show();
			$('.crumb').show();
			$('.more-info').show();	
		}
	//	$('html, body').animate({
	//		scrollTop: $(this).offset().top -100
	//	}, 1000);
		$('#menubottom .content').css({
			//'height':'200px'
			
		});
		return false;
	});	
	
	$('#slidepro .swiper-slide,.crumbtext').hover(function(){
		if($('.box-search-bottom').is(":visible")){
			$('.crumb').hide();
			$('.thumbbar').hide();
			$('.more-info').hide();
		}else{
			$('.crumb').show();
			$('.thumbbar').show();
			$('.more-info').show();
		}
		
	});
	
	$('.menubottom, .child').hover(function(){
		$('.crumb').hide();
		$('.thumbbar').hide();
		$('.more-info').hide();
	},function(){
		$('.crumb').show();
		$('.thumbbar').show();
		$('.more-info').show();
		
	});
	
	$('#menubottom .menubottom li.current').addClass('active');
	
	$('#menubottom .menubottom .mnubottom').hover(function(){
		var me=$(this);
		$('.child').hide();
		$('#menubottom .menubottom li.current').removeClass('active');
		$('#menubottom .menubottom li').removeClass('active');
		var $position = me.position();
		
		if(me.attr('rel')!='0'){
			mnuFooterShow(me.attr('rel'),$position);
			
			$('#'+me.attr('rel')+' ul').css({
				'margin-left': $position.left+'px'
			});
			$('#menubottom .content').css({
//				'height':'160px'
			});
			if($('#'+me.attr('rel')+' ul li').length > 0){
				$('#'+me.attr('rel') + ' div').removeClass('nobackground');
			}else{
				$('#'+me.attr('rel') + ' div').addClass('nobackground');
				$('#'+me.attr('rel')).css({
					'height': '0px'
				})
			}
			
		}else{
			$('.crumb').hide();
			$('.thumbbar').hide();
			$('#menubottom .content').css({
				//'height':'90px'
			});
		
		}
		$(this).addClass('active');
	},function(){
		//$('.child').hide();
	});
	
	
	$('.content-text img').each(function(){
		if($(this).width() > ($(window).width()-20))	{
			 $(this).removeAttr('height');
        	$(this).css({'height': ''});
			
		}
	});
	$('.content-zone img').each(function(){
		
			 $(this).removeAttr('height');
        	$(this).css({'height': ''});
			
		
	});
	
	$('#mnubottom').hover(function(){
		
	},function(){
		$('.child').hide();
		$('#menubottom .menubottom li').removeClass('active');
		$('#menubottom .menubottom li.current').addClass('active');
		
	})
	
})
function mnuFooterShow(id,$position){
	
	if(id=='0' ){
		
		if($('.box-search-bottom').is(":visible")){
			//$("#page_scroll").css({
			//	'height':$(window).height() - 160 +'px'
			//});
			//$('#project_detail').css({
			//	'height':$(window).height() - 190 +'px'
			//});
		}
	}else{
	/*	
		if($('.box-search-bottom').is(":visible")){
			var heightsearch = 160;	
			var pjheightsearch = 160;
			
		}else{
			var heightsearch = 0;
			var pjheightsearch = 0	;
		}
		$('.divcrumb').hide();
		$('.divthumb').hide();
		var x = $('#menubottom #'+id+' li').length;
		if(x > 10){
			$('.child ul').css({
				'width' : '640px'
			});
		}else if(x<=4){
			$('.child ul').css({
				'width' : '420px'
			});	
		}else{
			$('.child ul').css({
				'width' : '640px'
			});
		}
		$('#'+id+' ul').css({
			'margin-left': 20 + $position.left+'px'
		});
		if(x > 6){
			$('#'+id).css({ 'height': '70px' });
			$("#page_scroll").css({
			//	'height':$(window).height() - (165 + heightsearch) +'px'
			});
			$('#project_detail').css({
			//	'height':$(window).height() - (140 + pjheightsearch) +'px'
			});
		}else if(x==4){
			$('#'+id).css({ 'height': '70px' });
			$("#page_scroll").css({
			//	'height':$(window).height() - (155 + heightsearch) +'px'
			});
			$('#project_detail').css({
			//	'height':$(window).height() -(130 + pjheightsearch) +'px'
			});
		}else if(x<=3){
			$('#'+id).css({ 'height': '70px' });
			$("#page_scroll").css({
			//	'height':$(window).height() - (135 + heightsearch) +'px'
			});
			$('#project_detail').css({
			//	'height':$(window).height() - (110 + pjheightsearch) +'px'
			});
		}else{
			$("#page_scroll").css({
			//	'height':$(window).height() - (125 + heightsearch)  +'px'
			});
			$('#project_detail').css({
			//	'height':$(window).height() - (110 + pjheightsearch) +'px'
			});
			$('#'+id).css({ 'height': '70px' });
		}*/
		$('#'+id).stop().show();
	}
}
function mnuFooterHide(){
		//$('#'+id).css({ 'height': '40px' });
	///	$('#'+id).stop().hide();	
//	if($('.box-search-bottom').is(":visible")){
	/*	$("#page_scroll").css({
			'height':$(window).height() - 225 +'px'
		});
		$("#project_detail").css({
			'height':$(window).height() - 290 +'px'
		});*/
//	}else{
		/*$("#page_scroll").css({
			'height':$(window).height() - page_scroll_bottom +'px'
		});*/
//	}
	//$('.divthumb').show();
	//$('.divcrumb').show();
		
	
}