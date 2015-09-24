$(document).ready(function(){
	var menutab = $(".menutab");
	var menuBtn = $(".menutab li a"); 
	var _index = 0;
	var _content = $(".floorplan .floorplan-child");
	
	menuBtn.click(function(e){
		e.preventDefault();
		if($(this).parent().hasClass("active")== false){
			menutab.find(".active").removeClass("active");
			$(this).parent().addClass("active");
			_index = $(this).parent().index();
			_content.each(function(){
				if($(this).hasClass("active")==true){
					$(this).fadeOut().removeClass("active");
				}
			})
			_content.eq(_index).fadeIn().addClass("active");
			
			if($(this).parent().attr('data-tab-target')== 'building'){
				$(".right-tab").each(function(){
					var _attr = $(this).attr('data-menu-name');
					
					if(_attr == 'menubuilding'){
						console.log("_attr =", _attr);
						$(this).show();
					}else{
						$(this).hide();
					}
				})
				
				$(".report-panel").each(function(){
					var _attr = $(this).attr('data-menu-name');
					
					if(_attr == 'menubuilding'){
						console.log("_attr =", _attr);
						$(this).show();
					}else{
						$(this).hide();
					}
				})
				
				
				
			}else if($(this).parent().attr('data-tab-target')== 'amb'){
				$(".right-tab").each(function(){
					var _attr = $(this).attr('data-menu-name');
					
					if(_attr == 'menuamb'){
						console.log("_attr =", _attr);
						$(this).show();
					}else{
						$(this).hide();
					}
				})
				$(".report-panel").each(function(){
					var _attr = $(this).attr('data-menu-name');
					
					if(_attr == 'menuamb'){
						console.log("_attr =", _attr);
						$(this).show();
					}else{
						$(this).hide();
					}
				})
				
			}
		}
	});
	
	//bottom tab
	$(".bottom-tab a").click(function(){
		var _tab = $(this).parent();
		var _section = _tab.attr("data-panel");
		var _childsection = $(".status-all .status-child");
		if(_tab.hasClass("active") == false){
			$(".bottom-tab li.active").removeClass("active");
			_tab.addClass("active");
			_childsection.each(function(){
				var _sectionName = $(this).attr("data-panel-name");
				if(_sectionName == _section){
					$(this).fadeIn('fast').addClass("active");
				}else{
					$(this).fadeOut('fast').removeClass("active");
				}
			})
		}
	})
	
	//open report panel
	$('.report-btn a').click(function(e){
		e.preventDefault();
		var _report = $("body").find('.report-panel');
		if(_report.hasClass("active") == false){
			_report.addClass("active");
			_report.animate({
				'right':'8%'
			},1000)
		}else{
			_report.animate({
				'right':"100%"
			});
			_report.removeClass("active");
		}
		
	})
	
	//floor plan panel click
	$(".tb-panel .tb-panel-btn").click(function(){
		var _panel = $(this).parent();
		var _target = $(this).parent().find(".tb-panel-body");
		if(_panel.hasClass("active") == false){
			$("body").find(".tb-panel.active .tb-panel-btn").trigger('click');
			_panel.addClass("active");
			_target.slideToggle();
		}else{
			_target.slideToggle(function(){
				_panel.removeClass("active");
			});
			
		}
	})
})


$(window).load(function(){
	//intitial temp scale
	$(".graph-body.temp").each(function(){
		var tempFrame = $(this).find(".graph-frame");
		var tempH = tempFrame.height();
		var tempscale = $(this).find(".tempscale");
		tempscale.css({
			'height': tempH
		})
		
	})
})