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


<header
    class="w-full z-50"
    style="
        position: sticky;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 9999;
        background-color: #556B5D;
    ">


<nav class="max-w-7xl mx-auto flex items-center justify-between px-8 py-5 transition-all duration-500">


<!-- ========================= -->
<!-- LOGO -->
<!-- ========================= -->


<a href="<?php echo home_url(); ?>"
   class="font-heading text-3xl font-bold text-white">

    Élan

    <span class="text-secondary">

        Wellness Spa

    </span>

</a>


<!-- ========================= -->
<!-- DESKTOP NAVIGATION -->
<!-- ========================= -->


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


<!-- ========================= -->
<!-- DESKTOP BOOK BUTTON -->
<!-- ========================= -->


<a href="<?php echo home_url('/booking'); ?>"
   class="hidden md:inline-block bg-secondary text-white px-6 py-3 rounded-full shadow-soft hover:scale-105 transition-transform duration-300">

Book Now

</a>


<!-- ========================= -->
<!-- MOBILE BUTTON -->
<!-- ========================= -->


<button
    type="button"
    class="md:hidden text-3xl text-white"
    id="mobile-menu-button"
    aria-label="Open navigation menu"
    aria-expanded="false"
    aria-controls="mobile-menu"
    style="
        position: relative;
        z-index: 10001;
        border: none;
        background: transparent;
        cursor: pointer;
        padding: 4px;
    ">

    <i class="fa-solid fa-bars" id="mobile-menu-icon"></i>

</button>


</nav>


<!-- ========================= -->
<!-- MOBILE NAVIGATION -->
<!-- ========================= -->


<div
   id="mobile-menu"
    class="md:hidden"
    style="
        display: none;
        width: 100%;
        background-color: #4B6053;
        overflow: hidden;
        opacity: 0;
        transform: translateY(-18px);
        max-height: 0;
        transition:
            opacity 0.45s ease,
            transform 0.45s ease,
            max-height 0.45s ease;
        box-shadow: 0 12px 25px rgba(0,0,0,0.18);
        border-radius: 0 0 18px 18px;
    ">


    <div
        style="
            padding: 10px 30px 30px 30px;
            text-align: left;
        ">


        <!-- HOME -->

        <a
            href="<?php echo home_url(); ?>"
            class="mobile-nav-link"
            style="
                display: block;
                padding: 15px 0;
                text-decoration: none;
                font-size: 17px;
                font-weight: <?php echo is_front_page() ? '600' : '500'; ?>;
                color: <?php echo is_front_page() ? '#C8A96A' : '#FFFFFF'; ?>;
                border-bottom: 1px solid rgba(255,255,255,0.14);
                transition: color 0.25s ease, padding-left 0.25s ease;
            ">

            Home

        </a>


        <!-- ABOUT -->

        <a
            href="<?php echo home_url('/about'); ?>"
            class="mobile-nav-link"
            style="
                display: block;
                padding: 15px 0;
                text-decoration: none;
                font-size: 17px;
                font-weight: <?php echo is_page('about') ? '600' : '500'; ?>;
                color: <?php echo is_page('about') ? '#C8A96A' : '#FFFFFF'; ?>;
                border-bottom: 1px solid rgba(255,255,255,0.14);
                transition: color 0.25s ease, padding-left 0.25s ease;
            ">

            About

        </a>


        <!-- SERVICES -->

        <a
            href="<?php echo home_url('/services'); ?>"
            class="mobile-nav-link"
            style="
                display: block;
                padding: 15px 0;
                text-decoration: none;
                font-size: 17px;
                font-weight: <?php echo is_page('services') ? '600' : '500'; ?>;
                color: <?php echo is_page('services') ? '#C8A96A' : '#FFFFFF'; ?>;
                border-bottom: 1px solid rgba(255,255,255,0.14);
                transition: color 0.25s ease, padding-left 0.25s ease;
            ">

            Services

        </a>


        <!-- BOOKING -->

        <a
            href="<?php echo home_url('/booking'); ?>"
            class="mobile-nav-link"
            style="
                display: block;
                padding: 15px 0;
                text-decoration: none;
                font-size: 17px;
                font-weight: <?php echo is_page('booking') ? '600' : '500'; ?>;
                color: <?php echo is_page('booking') ? '#C8A96A' : '#FFFFFF'; ?>;
                border-bottom: 1px solid rgba(255,255,255,0.14);
                transition: color 0.25s ease, padding-left 0.25s ease;
            ">

            Booking

        </a>


        <!-- CONTACT -->

        <a
            href="<?php echo home_url('/contact'); ?>"
            class="mobile-nav-link"
            style="
                display: block;
                padding: 15px 0;
                text-decoration: none;
                font-size: 17px;
                font-weight: <?php echo is_page('contact') ? '600' : '500'; ?>;
                color: <?php echo is_page('contact') ? '#C8A96A' : '#FFFFFF'; ?>;
                border-bottom: 1px solid rgba(255,255,255,0.14);
                transition: color 0.25s ease, padding-left 0.25s ease;
            ">

            Contact

        </a>


        <!-- MOBILE BOOK NOW BUTTON -->

        <a
            href="<?php echo home_url('/booking'); ?>"
            id="mobile-book-button"
            style="
                display: inline-block;
                margin-top: 24px;
                padding: 12px 28px;
                background-color: #C8A96A;
                color: #FFFFFF;
                border-radius: 999px;
                text-decoration: none;
                font-size: 15px;
                box-shadow: 0 7px 18px rgba(0,0,0,0.15);
                transition:
                    transform 0.25s ease,
                    background-color 0.25s ease;
            ">

            Book Now

        </a>


    </div>

</div>


</header>
