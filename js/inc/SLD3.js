<script type="text/javascript">
	if (typeof jQuery == 'undefined'){
	    document.write(unescape("%3Cscript src='js/jquery.js' type='text/javascript'%3E%3C/script%3E"));
	}
	</script>
	<script type="text/javascript" src="js/sequence.jquery-min.js"></script>
	<script type="text/javascript">	
		$(document).ready(function(){
			var options = {
				nextButton: false,
				prevButton: false,				
				autoPlayDelay: 6000, 						
				pauseOnHover: false, 				
				animateStartingFrameIn: true, 				
				delayDuringOutInTransitions: 750,
				keysNavigate: true,								
				touchEnabled: false,
				startingFrameID: 1,					
				fallbackTheme: { 							
					speed: 500
				}
			};

			var sequence = $("#sequence").sequence(options).data("sequence");
		})
	</script>

<script type="text/javascript">
	$(window).load(function() {
		$('#slider').nivoSlider();
	});
</script>