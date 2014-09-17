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

	$('select').change( function(){
		$(this).parent().find('input').attr('alt',$(this).val()).trigger('change');
	});
});

function change(selector,property,value,units){
	$('.story ' + selector).css(property,value + units);
	if(selector == 'img' && property == 'width'){
		$('.story img').css('margin-left', ((100-value)/2) + '%')
	}
}
