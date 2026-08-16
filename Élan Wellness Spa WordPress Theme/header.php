<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>


<meta charset="<?php bloginfo('charset'); ?>">


<meta name="viewport" content="width=device-width, initial-scale=1.0">


<title>

<?php wp_title('|', true, 'right'); ?>

<?php bloginfo('name'); ?>

</title>



<link rel="icon"
      type="image/png"
      href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png">



<?php wp_head(); ?>


</head>



<body <?php body_class('bg-background text-text font-body'); ?>>


<?php wp_body_open(); ?>



<!-- ========================= -->
<!-- HEADER -->
<!-- ========================= -->


<header class="absolute top-0 left-0 w-full z-50">


<nav class="max-w-7xl mx-auto flex items-center justify-between px-8 py-5 transition-all duration-500">



<!-- Logo -->


<a href="<?php echo home_url(); ?>"
   class="font-heading text-3xl font-bold text-white">


    Élan

    <span class="text-secondary">

        Wellness Spa

    </span>


</a>





<!-- Desktop Navigation -->


<ul class="hidden md:flex items-center gap-10 font-medium text-white">



<li>

<a href="<?php echo home_url(); ?>"
 class="relative text-white hover:text-secondary transition duration-300"
       style="<?php echo is_front_page() ? 'color: #C8A96A;' : ''; ?>">

Home

</a>

</li>





<li>

<a href="<?php echo home_url('/about'); ?>"
 class="relative text-white hover:text-secondary transition duration-300"
       style="<?php echo is_page('about') ? 'color: #C8A96A;' : ''; ?>">
   
About

</a>

</li>





<li>

<a href="<?php echo home_url('/services'); ?>"
 class="relative text-white hover:text-secondary transition duration-300"
       style="<?php echo is_page('services') ? 'color: #C8A96A;' : ''; ?>">

Services

</a>

</li>





<li>

<a href="<?php echo home_url('/booking'); ?>"
 class="relative text-white hover:text-secondary transition duration-300"
       style="<?php echo is_page('booking') ? 'color: #C8A96A;' : ''; ?>">

Booking

</a>

</li>





<li>

<a href="<?php echo home_url('/contact'); ?>"
class="relative text-white hover:text-secondary transition duration-300"
       style="<?php echo is_page('contact') ? 'color: #C8A96A;' : ''; ?>">

Contact

</a>

</li>



</ul>





<!-- Book Button -->


<a href="<?php echo home_url('/booking'); ?>"


class="hidden md:inline-block bg-secondary text-white px-6 py-3 rounded-full shadow-soft hover:scale-105 hover:bg-primary transition duration-300">


Book Now


</a>





<!-- Mobile Button -->


<button class="md:hidden text-3xl text-white"
        id="mobile-menu-button">


<i class="fa-solid fa-bars"></i>


</button>



</nav>




<!-- Mobile Navigation -->


<div id="mobile-menu"
     class="hidden md:hidden bg-primary/95 backdrop-blur-md">


<ul class="flex flex-col items-center gap-6 py-8 text-white font-medium">



<li>

<a href="<?php echo home_url(); ?>"
class="hover:text-secondary transition duration-300">

Home

</a>

</li>



<li>

<a href="<?php echo home_url('/about'); ?>"
class="hover:text-secondary transition duration-300">

About

</a>

</li>



<li>

<a href="<?php echo home_url('/services'); ?>"
class="hover:text-secondary transition duration-300">

Services

</a>

</li>



<li>

<a href="<?php echo home_url('/booking'); ?>"
class="hover:text-secondary transition duration-300">

Booking

</a>

</li>



<li>

<a href="<?php echo home_url('/contact'); ?>"
class="hover:text-secondary transition duration-300">

Contact

</a>

</li>



</ul>


</div>



</header>