$(function(){
	$(".nav li").hover(function(){
		
		$(this).find("dl").slideDown();
		
	},function(){
		$(this).find("dl").slideUp();
		
	})
})