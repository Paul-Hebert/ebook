function makeBookmark(){
	bookmark = pageYOffset;
	document.cookie = pageYOffset + ';';
}

function getBookmark(){
    bookmark = document.cookie.split(';');
    window.scrollBy(0,bookmark[0] - pageYOffset);
}

/*function showPopUp(){
		newObject = document.createElement('span');
		newObject.id = 'popup';

    	$('body').append(newObject);
    	$('#popup').html('<img src="../../imgs/plus.png" class="plus rotated" />');
}*/

$( function(){
	    bookmark = document.cookie.split(';');
	    if (bookmark[0] > 0){
	    	//showPopUp();
	    	getBookmark();
	    }

	    /*$('#popup img').click( function (){
	    	$('#popup').fadeOut(300);
	    });*/
});

