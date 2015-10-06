$(window).load(function(){
	var body = $('body');
	$('.button').bind('click',function(){
		body.toggleClass('triggerx');
		return false;
	});
});

//MATERIAL BOX (OPTIONAL)
  $(document).ready(function(){
    $('.materialboxed').materialbox();
  });
        
		function imageclick(url) {
    window.location = url;
}