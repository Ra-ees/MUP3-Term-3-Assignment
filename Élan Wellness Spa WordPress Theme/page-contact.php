<?php
/**
 * Template Name: Contact Page
 */

get_header();
?>

<!-- ========================================= -->
<!-- CONTACT HERO -->
<!-- ========================================= -->

<?php
$hero_image = get_theme_mod(
    'contact_hero_image',
    get_template_directory_uri() . '/assets/images/contact-hero.png'
);
?>

<section class="relative min-h-screen bg-cover bg-center flex items-center pb-16 md:pb-0"
         style="background-image:url('<?php echo esc_url($hero_image); ?>');">

    <div class="absolute inset-0 bg-black/55"></div>

    <div class="relative max-w-7xl mx-auto px-8 w-full pt-28 md:pt-0">

        <p class="uppercase tracking-[4px] text-secondary font-semibold text-xs md:text-base mt-6 md:mt-0 mb-6 md:mb-4">

            <?php echo esc_html(
                get_theme_mod(
                    'contact_hero_subtitle',
                    'Get In Touch'
                )
            ); ?>

        </p>

        <h1 class="font-heading text-5xl md:text-7xl text-white leading-tight mb-6">

            <?php
            echo nl2br(
                esc_html(
                    get_theme_mod(
                        'contact_hero_title',
                        "We'd Love\nTo Hear From You"
                    )
                )
            );
            ?>

        </h1>

        <p class="text-white/90 text-base md:text-xl max-w-xl md:max-w-3xl leading-8 md:leading-9">

            <?php
            echo wp_kses_post(
                get_theme_mod(
                    'contact_hero_description',
                    "Whether you're ready to book a treatment or simply have a question, our friendly team is here to help. Contact us today and begin your journey to relaxation and wellbeing."
                )
            );
            ?>

        </p>

    </div>

</section>

<!-- ========================================= -->
<!-- CONTACT INTRO -->
<!-- ========================================= -->

<section class="py-24 bg-white">

    <div class="max-w-4xl mx-auto px-8 text-center">

        <p class="uppercase tracking-[5px] text-secondary font-semibold mb-4">

            <?php echo esc_html(
                get_theme_mod(
                    'contact_intro_subtitle',
                    "We're Here to Help"
                )
            ); ?>

        </p>

        <h2 class="font-heading text-5xl mb-8">

            <?php echo esc_html(
                get_theme_mod(
                    'contact_intro_title',
                    "Let's Start the Conversation"
                )
            ); ?>

        </h2>

        <p class="text-gray-600 text-lg leading-9">

            <?php
            echo wp_kses_post(
                get_theme_mod(
                    'contact_intro_description',
                    'Have a question about our treatments, booking process, or spa facilities? Our dedicated team is always happy to assist and ensure your experience at Élan Wellness Spa is exceptional from beginning to end.'
                )
            );
            ?>

        </p>

    </div>

</section>

<!-- ========================================= -->
<!-- CONTACT FORM -->
<!-- ========================================= -->

<section class="py-24 bg-[#F9F7F3]">

    <div class="max-w-7xl mx-auto px-8">

        <div class="grid lg:grid-cols-2 gap-16">

            <!-- Left Side -->

            <div>

                <p class="uppercase tracking-[5px] text-secondary font-semibold mb-4">

                    <?php echo esc_html( get_theme_mod(
                        'contact_form_subtitle',
                        'Contact Us'
                    ) ); ?>

                </p>

                <h2 class="font-heading text-5xl mb-8">

                    <?php echo esc_html( get_theme_mod(
                        'contact_form_title',
                        'Reach Out to Our Team'
                    ) ); ?>

                </h2>

                <p class="text-gray-600 leading-8 mb-10">

                    <?php echo wp_kses_post( get_theme_mod(
                        'contact_form_description',
                        'Whether you have a question about our treatments, need assistance with your booking, or simply want to learn more about our spa, our friendly team is always here to help.'
                    ) ); ?>

                </p>

                <?php
                $contact_image = get_theme_mod(
                    'contact_form_image',
                    get_template_directory_uri() . '/assets/images/contact-form.png'
                );
                ?>

                <img src="<?php echo esc_url( $contact_image ); ?>"
                     alt="Spa Reception"
                     class="rounded-3xl shadow-2xl w-full object-cover">

            </div>

            <!-- Right Side -->

            <div class="bg-white rounded-3xl shadow-2xl p-10">

                   <?php echo do_shortcode('[wpforms id="1586"]'); ?>

        </div>

    </div>

</section>

<!-- ========================================= -->
<!-- CONTACT DETAILS -->
<!-- ========================================= -->

<section class="py-24 bg-white">

    <div class="max-w-7xl mx-auto px-8">

        <div class="text-center mb-20">

            <p class="uppercase tracking-[5px] text-secondary font-semibold mb-4">

                <?php echo esc_html( get_theme_mod(
                    'contact_details_subtitle',
                    'Contact Information'
                ) ); ?>

            </p>

            <h2 class="font-heading text-5xl">

                <?php echo esc_html( get_theme_mod(
                    'contact_details_title',
                    "We're Always Here to Help"
                ) ); ?>

            </h2>

        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">

            <!-- Address -->

            <div class="bg-[#F9F7F3] rounded-3xl shadow-lg p-8 text-center">

                <i class="fa-solid fa-location-dot text-secondary text-5xl mb-6"></i>

                <h3 class="font-heading text-2xl mb-4">Visit Us</h3>

                <p class="text-gray-600 leading-7">

                    27 Serenity Lane<br>
                    Constantia, Cape Town 7806<br>
                    South Africa

                </p>

            </div>

            <!-- Phone -->

            <div class="bg-[#F9F7F3] rounded-3xl shadow-lg p-8 text-center">

                <i class="fa-solid fa-phone text-secondary text-5xl mb-6"></i>

                <h3 class="font-heading text-2xl mb-4">Call Us</h3>

                <p class="text-gray-600 leading-7">

                    +27 21 681 9425

                </p>

            </div>

            <!-- Email -->

            <div class="bg-[#F9F7F3] rounded-3xl shadow-lg p-8 text-center">

                <i class="fa-solid fa-envelope text-secondary text-5xl mb-6"></i>

                <h3 class="font-heading text-2xl mb-4">Email</h3>

                <p class="text-gray-600 leading-7">

                    info@elanwellnessspa.co.za

                </p>

            </div>

            <!-- Hours -->

            <div class="bg-[#F9F7F3] rounded-3xl shadow-lg p-8 text-center">

                <i class="fa-solid fa-clock text-secondary text-5xl mb-6"></i>

                <h3 class="font-heading text-2xl mb-4">Opening Hours</h3>

                <p class="text-gray-600 leading-7">

                    Monday – Friday<br>
                    8 AM – 8 PM<br>

                    Saturday – Sunday<br>
                    9 AM – 5 PM

                </p>

            </div>

        </div>

    </div>

</section>

<!-- ========================================= -->
<!-- LOCATION & HOURS -->
<!-- ========================================= -->

<?php
$location_image = get_theme_mod(
    'contact_location_image',
    get_template_directory_uri() . '/assets/images/location.png'
);
?>

<section class="py-24 bg-[#F9F7F3]">

    <div class="max-w-7xl mx-auto px-8">

        <div class="grid lg:grid-cols-2 gap-16">

            <!-- Hours -->

            <div>

                <p class="uppercase tracking-[5px] text-secondary font-semibold mb-4">

                    Opening Hours

                </p>

                <h2 class="font-heading text-5xl mb-8">

                    Visit Us Any Day

                </h2>

                <div class="bg-white rounded-3xl shadow-xl p-10">

                    <?php

                    $hours = [

                        'Monday'    => '8 AM – 8 PM',
                        'Tuesday'   => '8 AM – 8 PM',
                        'Wednesday' => '8 AM – 8 PM',
                        'Thursday'  => '8 AM – 8 PM',
                        'Friday'    => '8 AM – 8 PM',
                        'Saturday'  => '9 AM – 5 PM',
                        'Sunday'    => '9 AM – 5 PM'

                    ];

                    foreach ( $hours as $day => $time ) :

                    ?>

                    <div class="flex justify-between border-b py-4">

                        <span><?php echo esc_html( $day ); ?></span>

                        <span><?php echo esc_html( $time ); ?></span>

                    </div>

                    <?php endforeach; ?>

                </div>

            </div>

            <!-- Location -->

            <div>

                <p class="uppercase tracking-[5px] text-secondary font-semibold mb-4">

                    Our Location

                </p>

                <h2 class="font-heading text-5xl mb-8">

                    Find Your Way

                </h2>

                <div class="overflow-hidden rounded-3xl shadow-2xl">

                    <img src="<?php echo esc_url( $location_image ); ?>"
                         alt="Spa Location"
                         class="w-full h-full object-cover">

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ========================================= -->
<!-- FOLLOW US -->
<!-- ========================================= -->

<section class="py-24 bg-white">

    <div class="max-w-5xl mx-auto px-8 text-center">

        <p class="uppercase tracking-[5px] text-secondary font-semibold mb-4">

            Stay Connected

        </p>

        <h2 class="font-heading text-5xl mb-6">

            Follow Our Journey

        </h2>

        <p class="text-gray-600 leading-8 max-w-3xl mx-auto mb-12">

            Follow us on social media for wellness inspiration,
            exclusive offers, skincare tips and the latest updates
            from Élan Wellness Spa.

        </p>

        <div class="flex justify-center gap-8 text-5xl">

            <a href="#"><i class="fa-brands fa-facebook hover:text-secondary transition"></i></a>

            <a href="#"><i class="fa-brands fa-instagram hover:text-secondary transition"></i></a>

            <a href="#"><i class="fa-brands fa-x-twitter hover:text-secondary transition"></i></a>

            <a href="#"><i class="fa-brands fa-youtube hover:text-secondary transition"></i></a>

        </div>

    </div>

</section>

<!-- ========================================= -->
<!-- CONTACT CTA -->
<!-- ========================================= -->

<?php

$cta_image = get_theme_mod(
    'contact_cta_image',
    get_template_directory_uri() . '/assets/images/contact-cta.png'
);

?>

<section class="relative py-32 bg-cover bg-center"
         style="background-image:url('<?php echo esc_url( $cta_image ); ?>');">

    <div class="absolute inset-0 bg-black/55"></div>

    <div class="relative max-w-4xl mx-auto px-8 text-center">

        <p class="uppercase tracking-[5px] text-secondary font-semibold mb-5">

            Begin Your Wellness Journey

        </p>

        <h2 class="font-heading text-5xl md:text-6xl text-white mb-8">

            We Look Forward<br>
            to Welcoming You

        </h2>

        <p class="text-white/90 text-lg leading-8 mb-10">

            Whether you're planning your first visit or returning for another
            relaxing experience, our team is ready to provide exceptional care
            in a peaceful and luxurious environment.

        </p>

        <a href="<?php echo esc_url( home_url('/booking') ); ?>"
           class="inline-block min-w-[320px] bg-secondary hover:bg-primary transition duration-300 text-white px-10 py-5 rounded-full shadow-xl text-center">

            Book Your Visit

        </a>

    </div>

</section>

<?php get_footer(); ?>