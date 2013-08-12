<footer>
	<div id="footer-links">
		<?php include("footer-links.php") ?>
	</div><!-- #footer-links -->
	
	<div id="footer-bottom">
		<div class="page">
			<div class="small-12 copyright columns">© 2013 Columbia College.</div>
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

<!-- Mobile Nav -->
<script src="../_js/mobile-nav.js"></script>
</body>
</html>