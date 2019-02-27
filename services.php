<?php
/**
 * Template Name: Services
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


<section id="primary" class="services-area">
		<main id="main" class="site-about">
<section class="our_services jumbotron text-center">
		<div class="container">
		 <?php the_field('intro'); ?>        					
    </div>
</section>

<section class="how_are_services">
	<div class="container">
<h1 class="name jumbotron-heading">Our services</h1>
  <div class="row">
	 <div class="col-sm">
     <img src="#">
     <h4>Fully Responsive </h4>
     <p> Modi tempora incidunt ut labore et dolore magnam aliquam quaera.Modi 
         tempora incidunt ut labore et dolore magnam aliquam quaera.Modi tempora 
         incidunt ut labore et dolore magnam aliquam quaera.
		 </p>
	  </div>
		<div class="col-sm">
     <img src="#">
     <h4>Clean and Clear Layout </h4>
     <p> Modi tempora incidunt ut labore et dolore magnam aliquam quaera.Modi 
         tempora incidunt ut labore et dolore magnam aliquam quaera.Modi tempora 
         incidunt ut labore et dolore magnam aliquam quaera.
		 </p>
	  </div>
		<div class="col-sm">
     <img src="#">
     <h4>Retina Ready </h4>
     <p> Modi tempora incidunt ut labore et dolore magnam aliquam quaera.Modi 
         tempora incidunt ut labore et dolore magnam aliquam quaera.Modi tempora 
         incidunt ut labore et dolore magnam aliquam quaera.
		 </p>
	  </div>
     </div>
     <div class="row">
	 <div class="col-sm">
     <img src="#">
     <h4>Fully Responsive </h4>
     <p> Modi tempora incidunt ut labore et dolore magnam aliquam quaera.Modi 
         tempora incidunt ut labore et dolore magnam aliquam quaera.Modi tempora 
         incidunt ut labore et dolore magnam aliquam quaera.
		 </p>
	  </div>
		<div class="col-sm">
     <img src="#">
     <h4>Clean and Clear Layout </h4>
     <p> Modi tempora incidunt ut labore et dolore magnam aliquam quaera.Modi 
         tempora incidunt ut labore et dolore magnam aliquam quaera.Modi tempora 
         incidunt ut labore et dolore magnam aliquam quaera.
		 </p>
	  </div>
		<div class="col-sm">
     <img src="#">
     <h4>Retina Ready </h4>
     <p> Modi tempora incidunt ut labore et dolore magnam aliquam quaera.Modi 
         tempora incidunt ut labore et dolore magnam aliquam quaera.Modi tempora 
         incidunt ut labore et dolore magnam aliquam quaera.
		 </p>
	  </div>
		 </div>
</div>
</section>
     
     <section class="testimonials jumbotron text-center">
			<div class="container">
			  <?php the_field('testimonials'); ?>
			</div>
<ul>
  <li class="left">
	   <div class="img"></div>
		 <h3 class="name">Jacob Lawrence</h3>
		 <span class="job">Magic Studio </span>
		 <p> It is a long established fact that
		  a reader will be distracted by the 
			readable content of a page when </p>
	</li>
	<li class="right">
	   <div class="img"></div>
		 <h3 class="name">Jacob Lawrence</h3>
		 <span class="job">Magic Studio </span>
		 <p> It is a long established fact that
		  a reader will be distracted by the 
			readable content of a page when </p>
	</li>
	<li class="right">
	   <div class="img"></div>
		 <h3 class="name">Jacob Lawrence</h3>
		 <span class="job">Magic Studio </span>
		 <p> It is a long established fact that
		  a reader will be distracted by the 
			readable content of a page when </p>
	</li>
</ul>

</section>

<section class="process_of_working jumbotron text-center">
			<div class="container">
			  <?php the_field('working'); ?>
			</div>
 <div class="timeline">
      <div class="events">
        <ul class="testimonials">
  <li class="active">Designer at Google</li>
  <li class="active">Freelance Developer</li>
  <li>Microsoft ???</li>
</ul>
      </div>
    </div>
    <div> 

    <div class="slider">
			<h1> thi is the slider </h1>
</div>
			<div class=" container stories">

<div class="row story">
 <div class="col-sm">
            first It is a long established fact that a reader will be distracted by the 
						readable content of a page when looking at its layout. The point of 
						using Lorem Ipsum is that it has a more-or-less normal distribution 
						of letters, as opposed to using 'Content here,
</div>
<div class="col-sm">
second It is a long established fact that a reader will be distracted by the 
						readable content of a page when looking at its layout. The point of 
						using Lorem Ipsum is that it has a more-or-less normal distribution 
						of letters, as opposed to using 'Content here,
</div>
<div class="col-sm">
third It is a long established fact that a reader will be distracted by the 
						readable content of a page when looking at its layout. The point of 
						using Lorem Ipsum is that it has a more-or-less normal distribution 
						of letters, as opposed to using 'Content here,
</div>
</div>


</div>

</section>

<section class="buy jumbotron text-center">
			<div class="container">		
				<p class="left">
				<?php the_field('descr_buy'); ?>
				</p>
				<p class="buttons right">
						<a href="#" class="btn btn-primary my-2">Purchase now</a>
						</p>
</div>
</section>

<section class="clients jumbotron text-center">
			<div class="container">
				<?php the_field('our_clients'); ?>
</div>
</section>

<section class="get_in_touch jumbotron text-center">
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

<section class="footer-services">
<div>
	<p>Copyright entity &copy; 2015, All Rights Reserved</p>
</div>	
</section>

