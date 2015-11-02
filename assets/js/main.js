$ (function() {

	//cache de windows object

	var $window = $(window);

	//parallax backgroud effect
	$('section [data-type="backgroud"]').each(function(){

		var $bgobj = $ (this); //assigning the object

		$(windows).scroll(function(){

			//scroll the backgroud at var speed
			// the ypost is a negative value  because we are scrolling it up 


			var yPos = -($windows.scrollTop() /
				$bgobj.data('speed'));

			//put together our final backgroud position

			var coords= '50%' + yPos + 'px';

			//move the backgroud 

			$bgobj .css({backgroudPosition: coords});



		});

	});

});