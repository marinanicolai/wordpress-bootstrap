<?php
/**
 * Template Name: Contact
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


<section id="primary" class="contact_us-area">
		<main id="main" class="site-about">

<section class="get_touch jumbotron text-center">
		<div class="container">
		   <h1 class="name jumbotron-heading"> 
		   <?php the_field('introduction_heading'); ?> </h1>
			 <?php the_field('introduction'); ?>     
    </div>
</section>

<section class="submit">
<article class="first">
<img src="<?php bloginfo('template_url'); ?>/images/contact-us.png">
</article>
<article class="form">
<form id="myForm" action="foo.htm" method="post"> 
<div class="form-group">
	<span class="layer"><i class="fas fa-users"></i></span>
  <input type="text" name="firstName" id="first-name" placeholder="Name(Required)"/>
</div>

<div class="form-group">
 <span class="layer"><i class="fas fa-envelope"></i></span>
 <input type="email" name="email" id="email" placeholder="Email(Required)"/>
</div>

<div class="form-group">
	<span class="layer"><i class="far fa-keyboard"></i></span>
 <input type="text" name="subject" id="subject" placeholder="Subject(Optional)"/>
</div>

<div class="form-group textarea">
<textarea name="message" rows="10" cols="30">
Enter the text 
</textarea>
</div>

<button type="submit">Submit
</button>
</article>
</section>

<section class="map">

</section>

<section class="reach_us">
 <ul class="contact">
	 <li> 
		 <span class="layer"><i class="fas fa-map-marker-alt"></i></span>
		 <?php the_field('address'); ?>
	 </li>
	 <li> 
		 <span class="layer"><i class="fas fa-phone"></i></span>
		 <?php the_field('phones'); ?>
	 </li>
	 <li> 
		 <span class="layer"><i class="far fa-envelope"></i></span>
		 <?php the_field('emails'); ?>
	 </li>
	 <li> 
		 <span class="layer"><i class="fas fa-pen"></i></span>
		 <?php the_field('write'); ?>
	 </li>
</ul> 
</section>

<section class="reach_to_us jumbotron text-center">
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

<section class="footer">
<div>
	<p>Copyright entity &copy; 2015, All Rights Reserved</p>
</div>	
</section>
