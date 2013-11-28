$(function(){
	
	var note = $('#note'),
		ts = new Date(2013,10,23),
		newYear = true;
	
	if((new Date()) > ts){
		// The new year is here! Count towards something else.
		// Notice the *1000 at the end - time must be in milliseconds
		// Défault : ts = (new Date()).getTime() + 10*24*60*60*1000;
		ts = (new Date(2013,9,27,4,0,0)).getTime() + 10*24*60*60*1000;
		newYear = false;
	}
		
	$('#countdown').countdown({
		timestamp	: ts,
		callback	: function(days, hours, minutes, seconds){
			
			var message = "";
			
			message += days + " jour" + ( days==1 ? '':'s' ) + ", ";
			message += hours + " heure" + ( hours==1 ? '':'s' ) + ", ";
			message += minutes + " minute" + ( minutes==1 ? '':'s' ) + " et ";
			message += seconds + " seconde" + ( seconds==1 ? '':'s' ) + " <br />";
			
			if(newYear){
				message += "<p>L'univers de la retouche, bientôt en ligne...</p>";
			}
			else {
				message += '<a class="BT2 BLACK R4" href="index.php?page=retouch_A1">Bienvenue sur MDcreatis.com</a>';
			}
			
			note.html(message);
		}
	});
	
});
