$(document).ready(function(){

	//* je fait des inits ici par ce que j'ai envie
	 $(".button-collapse").sideNav();

	  $(document).ready(function() {
    		$('input#input_text, textarea#textarea1').characterCounter();
  		});

	  Materialize.showStaggeredList('.container');
        

	var hauteur= $(window).height();
	var largeur = $(window).width();
	
	$("#display_login")
		.css({
		"height" : hauteur,
		"width" : largeur/1.1,
		})

	$( window ).resize(function() {
			
			largeur = ($(window).width()/1.1);
			hauteur= ($(window).height());
 
      		$("#display_login")
				.css({
				
				"height" : hauteur,
				"width" : largeur,
				})
			
			console.log(hauteur);

     });
	

});