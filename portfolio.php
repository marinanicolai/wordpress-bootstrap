<?php
/**
 * Template Name: Portfolio
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

<section id="primary" class="portfolio-area">
		<main id="main" class="site-about">
<section class="know_about jumbotron text-center">
		<div class="container">
        <h1 class="name jumbotron-heading">Know about us</h1>
        Home >> Portfolio
				<p> We strive to give the best service to our clients</p>					
    </div>
</section>
<section class="portof_nav">
 <div class="container">   
<ul class="show_work">
    <li><a href="#">Show All Works </a></li>
    <li><a href="#">Photography</a></li>
    <li><a href="#">Visualisation </a></li>
    <li><a href="#">Webdesign</a> </li>
    <li><a href="#">Typography</a> </li>
</ul>
</div>
<div class="portofolio">
<ul>
    <li class="big"> </li>
    <li class="small"> </li>
    <li class="big"> </li>
    <li class="small"> </li>
</ul>   
<ul>
    <li class="small"> </li>
    <li class="big"> </li>
    <li class="small"> </li>
    <li class="big"> </li>
</ul>   
<ul>
    <li class="big"> </li>
    <li class="small"> </li>
    <li class="big"> </li>
    <li class="small"> </li>
</ul>   
</div>   
</section>

<section class="contact jumbotron text-center">
<ul class="col">
<li>
   <h3> Contact Us </h3>
	 <ul class="contact_us">
     <li>
		 <i class="fas fa-map-marker-alt"></i>
		 <h4><span> address: </span>
		  326585 Salemba Raya, Jakata </h4>
			</li>
			<li>
		 <i class="fas fa-phone"></i>
		 <h4><span> Phone:  </span>
		  +880 111-111-111 </h4>
		  </li>

			<li>
		 <i class="far fa-envelope"></i>
		 <h4><span> Email: </span>
		 ForCorporate@ForestThmes.com  </h4>
		  </li>

			<li>
		 <i class="far fa-clock"></i>
		 <h4><span>Monday - Friday :  </span>
			10.00 am to 18.00 pm</h4></li>
			<li>			
		 <h4><span>Saturday - Sunday : </span>
		  closed</h4>
		  </li>
   </ul>
 </li>

 <li class="tweets">
   <h3> Latest Tweets </h3>
	  <ul class="lates_twe">
			<li>
				<p>
				   <i class="fab fa-twitter"></i>
			Tweet It is a long established fact that
		  a reader will be distracted by the 
			readable content of a page when</p>
			</li>			
			<li>
				<p> 
				<i class="fab fa-twitter"></i>
			Tweet It is a long established fact that
		  a reader will be distracted by the 
			readable content of a page when</p>
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

