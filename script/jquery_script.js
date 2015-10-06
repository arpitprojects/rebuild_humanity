function imageclick(url) {
    window.location = url;
}

 $(document).ready(function(){
    $('ul.tabs').tabs();
  });
 
 $('.tog').click(function(){
	 $('.cola').attr('display', false);
	 $('.cola').fadeToggle();
 });
 
 $('#search').focus(function(){
	 $(this).attr('value','');
 }),$('#search').blur(function(){
	 $(this).attr('value','SEARCH POSTS');
 });
 //likng button concept
 
 $(document).ready(function(){
	$('#liking').click(function(){
		$('#hidehoga').fadeOut(1000);
		
	});
 });
  
 $(document).ready(function(){
	$('#liking').click(function(){
		$('#appearhoga').fadeIn(2000);
		
	});
 });