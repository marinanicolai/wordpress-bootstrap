<?php
/**
 * Template Name: About Page
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>

<section id="primary" class="about-area">
		<main id="main" class="site-about">
<section class="know_about jumbotron text-center">
		<div class="container">
		    <?php the_field('introduction'); ?>        				
    </div>
</section>

<section class="about_spike jumbotron text-center">
			<div class="container">
				<h1 class="our_smiling_team jumbotron-heading">About Spike</h1>
				<div class="text">
					<?php the_field('about_spike'); ?>
				  <p class="button">
            <a href="#" class="btn btn-primary my-2">Get Template</a>
            <a href="#" class="btn btn-primary my-2">Read more</a>
						</p>
			</div>
			<div class="picture">
				<img href="#">
</div>
			</div>
		</section>
<section class="no-header">
  <div class="row">
	 <div class="col-sm">col-sm-12
		 <img src="<?php the_field('first_image'); ?>" />     
     <h4>Fully Responsive </h4>
     <p> Modi tempora incidunt ut labore et dolore magnam aliquam quaera.Modi 
         tempora incidunt ut labore et dolore magnam aliquam quaera.Modi tempora 
         incidunt ut labore et dolore magnam aliquam quaera.
		 </p>
	  </div>
		<div class="col-sm">
		 <img src="<?php the_field('second_image'); ?>" />
     <h4>Clean and Clear Layout </h4>
     <p> Modi tempora incidunt ut labore et dolore magnam aliquam quaera.Modi 
         tempora incidunt ut labore et dolore magnam aliquam quaera.Modi tempora 
         incidunt ut labore et dolore magnam aliquam quaera.
		 </p>
	  </div>
		<div class="col-sm">
		 <img src="<?php the_field('third_image'); ?>" />
     <h4>Retina Ready </h4>
     <p> Modi tempora incidunt ut labore et dolore magnam aliquam quaera.Modi 
         tempora incidunt ut labore et dolore magnam aliquam quaera.Modi tempora 
         incidunt ut labore et dolore magnam aliquam quaera.
		 </p>
	  </div>
	 </div>

</section>
<section class="team_sec jumbotron text-center">
			<div class="container">
			<?php the_field('our_team'); ?>
		 </div>
<ul class="team">
  <li>
	  <img class="profile" src="#">
		<h3> Dyloney Woodarns </h3>
		<h4 class="job">Web Designer </h4>
		<ul class="social">		  
      <li><i class="fab fa-facebook"></i></li>  
			<li><i class="fab fa-twitter-square"></i> </li>
			<li><i class="fab fa-google-plus-square"></i> </li>
		</ul>
	</li>

	<li>
	  <img class="profile" src="#">
		<h3> Dyloney Woodarns </h3>
		<h4 class="job">Web Designer </h4>
		<ul class="social">
		  <li><i class="fab fa-facebook"></i></li>
			<li><i class="fab fa-twitter-square"></i> </li>
			<li><i class="fab fa-google-plus-square"></i> </li>
		</ul>
	</li>

	<li>
	  <img class="profile" src="#">
		<h3> Dyloney Woodarns </h3>
		<h4 class="job">Web Designer </h4>
		<ul class="social">
		  <li><i class="fab fa-facebook"></i> </li>
			<li><i class="fab fa-twitter-square"></i> </li>
			<li><i class="fab fa-google-plus-square"></i> </li>
		</ul>
	</li>

	<li>
	  <img class="profile" src="#">
		<h3> Dyloney Woodarns </h3>
		<h4 class="job">Web Designer </h4>
		<ul class="social">
		  <li><i class="fab fa-facebook"></i> </li>
			<li><i class="fab fa-twitter-square"></i> </li>
			<li><i class="fab fa-google-plus-square"></i> </li>
		</ul>
	</li>

</ul>
</section>

<section class="our_skills jumbotron text-center">
			<div class="container">
      <?php the_field('our_skills'); ?>
      </div>				
</section>

<section class="our_clients jumbotron text-center">
			<div class="container">
			<?php the_field('our_clients'); ?>
			</div>
</section>

<section class="us_contact jumbotron text-center">
<ul class="col">
<li>
   <h3> Contact Us </h3>
	 <ul class="contact_us">
     <li>
		 <i class="fas fa-map-marker-alt"></i>
		 <?php the_field('write_us'); ?>
			</li>
			<li>
			<i class="fas fa-phone"></i>
			<?php the_field('call_us'); ?>
		  </li>
			<li>
			<i class="far fa-envelope"></i>
			<?php the_field('email_us'); ?>
			  </li>
			<li>
		 <i class="far fa-clock"></i>
		 <?php the_field('our_schedule_bus'); ?>
		 </li>
			<li>
			<?php the_field('our_schedule_weekend'); ?>			
		  </li>



   </ul>
 </li>

 <li class="tweets">
   <h3> Latest Tweets </h3>
	  <ul class="lates_twe">
			<li>
				<p>
				   <i class="fab fa-twitter"></i>
					 <?php the_field('first_tweet'); ?>
				</p>
			</li>
			
			<li>
				<p> 
				   <i class="fab fa-twitter"></i>
				   <?php the_field('second_tweet'); ?>
				</p>
      </li>
			</ul>
 </li>

 <li class="write_us">
   <h3> Write Us </h3>
	     <input type="name" id="profile" placeholder="Name">
	     <input type="email" id="envelope" placeholder="Email">
	     <input type="textarea" id="pen" placeholder="Message">
   <p class="buttons">
						<a href="#" class="btn btn-primary my-2">Send us</a>
		</p>
 </li>
</ul>
</section>

<section class="footer-about">
<div>
	<p>Copyright entity &copy; 2015, All Rights Reserved</p>
</div>	
</section>





