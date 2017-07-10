$(document).ready(function(){

	$('.dropdown').on('click',function(){
		$(this).next().slideToggle();
	});
});

function AjaxUrl(){
	var siteurl = "http://"+BASE+WEB_SITE;
	return siteurl;
}

