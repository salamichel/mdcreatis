<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery('#liteaccordion').liteAccordion({
			onTriggerSlide : function() {
			this.find('.liteaccordion-caption').fadeOut();
			},
			onSlideAnimComplete : function() {    
			this.find('.liteaccordion-caption').fadeIn();
			},
			containerWidth:980,                   // fixed (px)  
			containerHeight:300,                  // fixed (px)  
			headerWidth:48,                       // fixed (px)  
	
			activateOn:'mouseover',	// click or mouseover  
			firstSlide:4,	// displays slide (n) on page load  
			slideSpeed: 2000,	// slide animation speed
	
			autoPlay:true,	// automatically cycle through slides  
			pauseOnHover:false,	// pause on hover  
			cycleSpeed: 8000,	// time between slide cycles  
			easing:'swing',                       // custom easing function  
	
			theme:'basic',                        // basic, dark, light, or stitch  
			rounded:false,	// square or rounded corners  
			enumerateSlides:false,                // put numbers on slides  
			linkable:false                
		}).find('.liteaccordion-caption:first').show();
	});
</script>