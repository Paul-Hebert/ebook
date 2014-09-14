var clickable = true;

$(function (){
	$('input.color').minicolors();	

	$('.font, .font option').each( function(){
		$(this).css('font-family',$(this).val())
	});

	/* Redirect images to the correct directory */
	$('.story img').each(function (){
		src = $(this).attr('src').split('/');
		file = src[src.length - 1];
		this.src = 'books/' + directory + "/" + file;
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

				$(this).parent().css('overflow','hidden').animate({
					'max-height':'50px'
				},500, function(){
					clickable = true;
				});			
			}
		}
	});

	$('.section .head').click( function(){
		$(this).parent().find('img').trigger('click');
	})

	$('select').change( function(){
		$(this).parent().find('input').attr('alt',$(this).val()).trigger('change');
	});
});

function change(selector,property,value,units){
	$('.story ' + selector).css(property,value + units);
}
