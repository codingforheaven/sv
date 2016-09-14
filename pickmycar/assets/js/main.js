$(document).ready(function(){
	
	/*fixed height*/
	var windowHeight = $(window).height();
	var windowwidth = $(window).width();
	
	if(windowwidth > 767){
		$('.fixed-layout').height(windowHeight);
	}
	
	
	/*search.html title change*/
	$('.carousel').carousel({
	  interval: 3000,
	  pause: false
	})
	
	/*....................getting car details ajax start................................*/
		$(".popular-car-box").click(function(event) {   
				var href = $(this).attr('href');
                event.preventDefault();

		$.post("detail_process.php", {'value': href}, function(result){

					$('#detail').html(result);
					 $("html, body").animate({ scrollTop: 0 }, "slow");		  
							  
		});
	
            });
	
	/*....................getting car details ajax End................................*/
	
	
	
});

//search page - by pressing enter, go to next input
$('.full-input textarea').keydown(function (e){
   if(e.keyCode == 13){
	 e.preventDefault();
     $(this).parent('form').next('.brands-submit').find('button').click();
   }
   
   
   
   
   
});
//contact
	$('#contact').click(function(){
  	 $.growl.notice({ message: "Address: PickMyCars, Bangalore. Email: info@pickymycars.com" });
}); 
	