<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package Elan_Wellness_Spa
 */

get_header();

$background = get_template_directory_uri() . '/assets/images/contact-cta.png';
?>

<section class="relative min-h-screen flex items-center justify-center bg-cover bg-center"
         style="background-image:url('<?php echo esc_url( $background ); ?>');">

    <!-- Overlay -->

    <div class="absolute inset-0 bg-black/60"></div>

    <!-- Content -->

    <div class="relative z-10 max-w-3xl mx-auto px-8 text-center text-white">

        <p class="uppercase tracking-[5px] text-secondary font-semibold mb-6">

            Oops!

        </p>

        <h1 class="font-heading text-7xl md:text-9xl mb-6">

            404

        </h1>

        <h2 class="font-heading text-4xl md:text-5xl mb-8">

            Page Not Found

        </h2>

        <p class="text-lg md:text-xl text-white/90 leading-9 mb-12">

            The page you're looking for doesn't exist, may have been moved,
            or the URL may have been entered incorrectly.
            Let's help you find your way back to relaxation.

        </p>

        <div class="flex flex-wrap justify-center gap-5">

            <a href="<?php echo esc_url( home_url('/') ); ?>"
               class="bg-secondary hover:bg-primary transition duration-300 text-white px-10 py-5 rounded-full shadow-xl">

                Return Home

            </a>

            <a href="<?php echo esc_url( home_url('/contact') ); ?>"
               class="border-2 border-white hover:bg-white hover:text-primary transition duration-300 text-white px-10 py-5 rounded-full">

                Contact Us

            </a>

        </div>

        <!-- Search -->

        <div class="mt-16 max-w-xl mx-auto">

            <?php get_search_form(); ?>

        </div>

    </div>

</section>

<?php get_footer(); ?>