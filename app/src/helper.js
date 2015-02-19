//helper.js
$(document).ready(function(){		  
	  getTweets();
});


function getTweets() {
    $.ajax({
        url : 'tweets.php',
		type: 'POST',
		dataType: 'json',
        success:function(data, textStatus, jqXHR) 
        {
			clearTweets();
			updateTweets( data );
        },
        error: function(jqXHR, textStatus, errorThrown) 
        {
			alert( "error" );
		}
    });
    
}

function clearTweets(){
		$('#tweets').empty() ;
}

function buildTweet( tweet , template ){

	return template( tweet );
}

function updateTweets( tweets ){

	var source = $("#tweet-template").html();
	var template = Handlebars.compile(source);
	
	$.each( tweets , function (key, tweet ) {
		$('#tweets').append( buildTweet( tweet , template ) ) ;
	})
}




  
    
