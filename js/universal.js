var clickable = true;

var max="50px";

$(function(){
	/* Redirect images to the correct directory */
	$('.story img').each(function (){
		src = $(this).attr('src').split('/');
		file = src[src.length - 1];
		this.src = directory + "/" + file;
	});

	$('.section img').click( function(){
		if (clickable == true){
			clickable = false;
			if ($(this).parent().height() <= 51){
				$(this).removeClass("rotateBack").addClass("rotate").addClass("rotated");

				$(this).parent().animate({
					'max-height':'500px'
				},500, function(){
					$(this).css('overflow','visible');
					clickable = true;
				});
			} else{
				$(this).removeClass("rotate").removeClass("rotated").addClass("rotateBack");
				if ( $(this).parent().hasClass('bookmark') ){
					max = '30px';
				} else{
					max = '50px';
				}

				$(this).parent().css('overflow','hidden').animate({
					'max-height':max
				},500, function(){
					clickable = true;
				});			
			}
		}
	});

	$('.section .head').click( function(){
		$(this).parent().find('img').trigger('click');
	})
});
