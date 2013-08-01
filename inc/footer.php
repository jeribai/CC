<footer>
	<div id="footer-links">
		<?php include("footer-links.php") ?>
	</div><!-- #footer-links -->
	
	<div id="footer-bottom">
		<div class="page">
			<div class="small-4 columns right">
				<a href="#" class="icon"><i class="icon-youtube"></i></a>
				<a href="#" class="icon"><i class="icon-facebook"></i></a>
				<a href="#" class="icon"><i class="icon-twitter"></i></a>
				<a href="#" class="icon"><i class="icon-linkedin"></i></a>
			</div>
			<div class="small-8 copyright columns">© 2013 Columbia College - 11600 Columbia College Dr., Sonora CA 95370
			</div>
		</div>
		<div style="clear: both;"></div>
	</div><!-- #footer-bottom -->
</footer>

<!-- Royal Slider -->
<script> jQuery(document).ready(function($) {
  $('#full-width-slider').royalSlider({
    arrowsNav: true,
    loop: true,
    keyboardNavEnabled: true,
    controlsInside: false,
    imageScaleMode: 'fill',
    arrowsNavAutoHide: false,
    autoScaleSlider: true, 
    autoScaleSliderWidth: 960,     
    autoScaleSliderHeight: 350,
    controlNavigation: 'bullets',
    thumbsFitInViewport: false,
    navigateByClick: true,
    startSlideId: 0,
    autoPlay: true,
    transitionType:'move',
    globalCaption: false,
    deeplinking: {
      enabled: true,
      change: false
    },
    /* size of all images http://help.dimsemenov.com/kb/royalslider-jquery-plugin-faq/adding-width-and-height-properties-to-images */
    imgWidth: 1920,
    imgHeight: 500
  });
});</script>

<!-- Foundation -->
<script> document.write('<script src=' + ('__proto__' in {} ? '../_js/vendor/zepto' : '../_js/vendor/jquery') + '.js><\/script>')
</script>
<script src="../_js/foundation.min.js"></script>
<script src="../_js/foundation/foundation.topbar.js"></script>
<script>$(document).foundation();</script>

</body>
</html>