<script type="text/javascript">
      //chargement de swfobject à partir du CDN de google
      google.load("swfobject", "2.1");
 
      // Update a particular HTML element with a new value
      function updateHTML(elmId, value) {
        document.getElementById(elmId).innerHTML = value;
      }
 
      // chargement de la vidéo concerné dans le player
      function loadVideo(idvid) {
        var videoID = idvid;
        if(ytplayer) {
          ytplayer.loadVideoById(videoID);
        }
      }
 
      // fonction appellé en cas d'erreur
      function onPlayerError(errorCode) {
        alert("An error occured of type:" + errorCode);
      }
 
      // fonction appellé au chargement du player
      function onYouTubePlayerReady(playerId) {
        ytplayer = document.getElementById("ytPlayer");
        ytplayer.addEventListener("onError", "onPlayerError");
      }

      // Méthode mère qui va être appelée en première, pour charger la vidéo qu'il faut, là où il faut
      function loadPlayer() {
        var videoID = 'gfaYRLFI0vs';  // vidéo à charger
        var params = { allowScriptAccess: "always" }; // persmission d'acces d'un autre domaine
        var atts = { id: "ytPlayer", wmode:"transparent" };  // attributs du player
		// embed avec swf object
        swfobject.embedSWF("http://www.youtube.com/v/" + videoID + "&enablejsapi=1&playerapiid=player1",
		"videoDiv", //id de l'élément contenant le player
		980, //largeur du player
		551, //hauteur du player
		"8", null, null, params, atts); 
      }
      function _run() {
        loadPlayer();
      }
      google.setOnLoadCallback(_run);
</script>