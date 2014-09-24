function makeBookmark(){
	bookmark = pageYOffset;
	document.cookie = document.cookie + directory + '.' + theme + '.' + pageYOffset + '|';
}

function getBookmark(){
    bookmark = document.cookie.split('|');
    for (var i in bookmark){
	    bookmarkSplit = bookmark[i].split('.');
	    bookmarkHeight = bookmarkSplit[2];
	    bookmarkTheme = bookmarkSplit[1];
	    bookmarkStory = bookmarkSplit[0];
	    if (bookmarkTheme == theme && bookmarkStory == directory){
		    window.scrollBy(0,bookmarkHeight - pageYOffset);
		}
	}
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

