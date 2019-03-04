<?php
/**
 * The main template file
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

	<section id="primary" class="content-area">
		<main id="main" class="site-main">
		<section class="corp_design jumbotron text-center">
			<div class="container">
			 <?php the_field('introduc'); ?>
					<a href="#" class="btn btn-primary my-2">Buy now</a>					
				</p>
			</div>
		</section>

		<section class="clean_unique_design jumbotron text-center">
		<div class="container">
		  <?php the_field('corp_design'); ?>
				<p class="buttons">
						<a href="#" class="btn btn-default ">Read more</a> 	
						<span>or</span> 
						<a href="#" class="btn btn-primary ">Buy now</a>								
				</p>
</div>
</section>

		<section class="know_about_us jumbotron text-center">
			<div class="container">
				<h1 class="name jumbotron-heading">Know About Us</h1>
				<div class="info">
				<div class="text">
				 <?php the_field('know_us'); ?>
				  <p class="button">
						<a href="#" class="btn btn-primary my-2">Buy this Theme</a>
						</p>
			</div>
			<div class="picture">
				<img src="<?php bloginfo('template_url'); ?>/images/team.png">
		</div>
   </div>
	</div>
</section>

<section class="working_process jumbotron text-center">
			<div class="container">
				<h1 class="name jumbotron-heading">Working Process</h1>
					<?php the_field('working'); ?>
			</div>
			
 <div class="work_prog">
	  <ul class="timeline">
      <li>
				<h3>Plan</h3>
			</li>
      <li>
				<h3>Design</h3>
			</li>
      <li>
				<h3>Develop</h3>
			</li>
			<li>
				<h3>Testing</h3>
			</li>
			<li>
				<h3>Launch</h3>
			</li>
    </ul>
  </div>
    
<div class=" container stories">
  <div class="row story">
  
			<?php if(get_field('stories')): ?>
	<ul>
	<?php while(has_sub_field('stories')): ?>
		<li><?php the_sub_field('story'); ?></li>
	<?php endwhile; ?>
	</ul>
<?php endif; ?>
			
    </div>      
 </div>
</div>
</section>

<section class="testimonials jumbotron text-center">
	<div class="container">
		<h1 class="name jumbotron-heading">Testimonials</h1>
			<p class="intro">
					<?php the_field('testimonials'); ?>
			 </p>
      </div>

<?php if(get_field('testimonial_members')): ?>
<ul class="team testimonials">
		<?php while(has_sub_field('testimonial_members')): ?>
  <li class="left">
	   
		 <img src="<?php the_sub_field('testimonial_img'); ?>" />
		 
		 <h3 class="name"><?php  the_sub_field('testimonial_name'); ?> </h3>	 
		 <span class="job"><?php  the_sub_field('testimonial_job'); ?></span> 
		 <?php the_sub_field('testimonial'); ?>		
	</li>
	   <?php endwhile; ?>
		</ul>
		<?php endif; ?>	


	
</section>

<section class="our_portofolio jumbotron text-center">
			<div class="container">
				<h1 class="name jumbotron-heading">Our portofolio</h1>
					<p class="intro">
					<?php the_field('portofolio'); ?>
					</p>
</div>
<div class="row">
	 <div class="column left">
		 <ul>
			 <li class="large"><img class="large" src="<?php the_field('portofolio_top_left'); ?>" /> </li>
			 <li class="small"> <img class="small" src="<?php the_field('portofolio_middle_left'); ?>" /> </li>
			 <li class="medium"> <img class="medium" src="<?php the_field('portofolio_bottom_left'); ?>" /> </li>
</ul>
	 </div>
	 <div class="column right">
		 <ul>
			 <li class="small"> <img class="small" src="<?php the_field('portofolio_top_center'); ?>" /> </li>
			 <li class="medium"> <img class="medium" src="<?php the_field('portofolio_middle_center'); ?>" /> </li>
			 <li class="large"> <img class="large" src="<?php the_field('portofolio_bottom_center'); ?>" /> </li>
</ul>
	 </div>
	 <div class="column right">
		 <ul>
			 <li class="small"> <img class="small" src="<?php the_field('portofolio_top_right'); ?>" /> </li>
			 <li class="large"> <img class="large" src="<?php the_field('portofolio_middle_right'); ?>" /> </li>
			 <li class="medium"> <img class="medium" src="<?php the_field('portofolio_bottom_right'); ?>" /></li>
</ul>
	 </div>
</div>	 
</section>
<section class="purchase jumbotron text-center">
			<div class="container">				
				<p class="left">
				  <?php the_field('purchase'); ?>
				</p>
				<p class="buttons right">
						<a href="#" class="btn btn-primary my-2">Purchase now</a>
						</p>
</div>
</section>

<section class="our_team jumbotron text-center">
			<div class="container">
				<h1 class="name jumbotron-heading">Our team</h1>
					<p>
					  <?php the_field('our_team'); ?>
					</p>
</div>


<?php if(get_field('team_members')): ?>
<ul class="team">
		<?php while(has_sub_field('team_members')): ?>
		<li>   
      	<img class="profile" src="<?php the_sub_field('team_member_image'); ?>" />
	      <h3><?php the_sub_field('name'); ?> </h3>
				<h4><?php the_sub_field('position'); ?> </h4>
				<ul class="social">
					<li>
							<a href="<?php the_sub_field('facebook_url'); ?>">
							<i class="fab fa-facebook"></i></a>
					</li>
					<li>
							<a href="<?php the_sub_field('twitter_url'); ?>">
							<i class="fab fa-twitter-square"></i></a>
					</li>	
					<li>
							<a href="<?php the_sub_field('linkedin_url'); ?>">
							<i class="fab fa-linkedin"></i></a>
					</li>		
				</ul>	


    </li>			

			<?php endwhile; ?>
		</ul>
		<?php endif; ?>	

	</section>

<section class="contact jumbotron text-center">
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

<section class="footer-front">
<div>
	<p>Copyright entity &copy; 2015, All Rights Reserved</p>
</div>	
</section>


		</main><!-- .site-main -->
	</section><!-- .content-area -->

<?php
get_footer();
