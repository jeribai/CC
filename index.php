<?php include("inc/header.php") ?>


<!-- If Home Page -->
<?php include("inc/royalslider.php") ?>
<!-- /If Home Page -->

<div id="content" class="page">
	
	<div class="row">
		<div class="small-4 columns">
			<div class="featured-col">
				<a href="#">
					<h4 class="featured-title">Online Learning</h4>
					<img src="_assets/img/home-featured/cc-online-learning.jpg" />
				</a>
			</div>
		</div>
		<div class="small-4 columns">
			<div class="featured-col">
				<a href="#">
					<h4 class="featured-title">Get Started</h4>
					<img src="_assets/img/home-featured/cc-enroll-now.jpg" />
				</a>
			</div>
		</div>
		<div class="small-4 columns">
			<div class="featured-col">
				<a href="#">
					<h4 class="featured-title">Student Services</h4>
					<img src="_assets/img/home-featured/cc-student-services.jpg" />
				</a>
			</div>
		</div>
	</div>
	
	<div class="divider"></div>
	
	<div class="row">
		<div class="small-4 columns">
			<h3 class="underline">Events</h3>
			<?php include("inc/calendar.php") ?>
		</div>
		<div class="small-8 columns">
			<h3 class="underline">Latest News</h3>
			<?php include("inc/news.php") ?>
		</div>
	</div>
</div><!-- #content -->


<?php include("inc/footer.php") ?>