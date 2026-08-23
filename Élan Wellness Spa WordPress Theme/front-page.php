<?php
/**
 * Front Page Template
 *
 * @package Elan_Wellness_Spa
 */

get_header();
?>

<main id="primary" class="site-main">

<!-- ========================================= -->
<!-- HERO SECTION -->
<!-- ========================================= -->

<section
    class="relative min-h-screen bg-cover bg-center flex items-center pb-16 md:pb-0"
    style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero.png' ); ?>');">

    <!-- Dark Overlay -->
    <div class="absolute inset-0 bg-black/40"></div>

    <!-- Hero Content -->
    <div class="relative z-10 max-w-7xl mx-auto px-8 w-full pt-48 md:pt-0"
         style="transform: translateY(-55px);">

        <div class="max-w-2xl">

            <p class="uppercase tracking-[4px] text-secondary font-semibold text-xs md:text-base mt-16 md:mt-0 mb-6 md:mb-4">
                <?php esc_html_e( 'Relax • Refresh • Renew', 'elan-wellness-spa' ); ?>
            </p>

            <h1 class="font-heading text-5xl sm:text-6xl md:text-7xl text-white leading-[1.15] md:leading-tight -mt-4 md:mt-0 mb-8">

                <?php esc_html_e( 'Experience Pure Wellness', 'elan-wellness-spa' ); ?>
                <br>
                <?php esc_html_e( 'at Élan Spa', 'elan-wellness-spa' ); ?>

            </h1>

            <p class="text-white/90 text-lg leading-8 mb-10">

                <?php esc_html_e(
                    'Escape the demands of everyday life and discover a sanctuary dedicated to relaxation, rejuvenation, and holistic wellness. Our personalised treatments are designed to restore balance, refresh your mind, and revitalise your body.',
                    'elan-wellness-spa'
                ); ?>

            </p>

            <div class="flex flex-wrap gap-4 mb-10 md:mb-0">

                <a href="<?php echo esc_url( home_url( '/booking/' ) ); ?>"
                   class="bg-secondary hover:bg-primary text-white px-10 py-5 rounded-full shadow-xl transition duration-300">

                    <?php esc_html_e( 'Book Appointment', 'elan-wellness-spa' ); ?>

                </a>

                <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>"
                   class="border-2 border-white text-white hover:bg-white hover:text-primary transition duration-300 px-10 py-5 rounded-full">

                    <?php esc_html_e( 'Explore Services', 'elan-wellness-spa' ); ?>

                </a>

            </div>

        </div>

    </div>

</section>

<!-- ========================================= -->
<!-- FEATURED TREATMENTS -->
<!-- ========================================= -->

<section class="py-24 bg-accent">

    <div class="max-w-7xl mx-auto px-8">

        <!-- Section Heading -->

        <div class="text-center mb-16">

            <p class="text-secondary uppercase tracking-[4px] font-semibold mb-3">

                <?php esc_html_e( 'Signature Treatments', 'elan-wellness-spa' ); ?>

            </p>

            <h2 class="font-heading text-5xl text-text mb-6">

                <?php esc_html_e( 'Indulge in Luxury Wellness', 'elan-wellness-spa' ); ?>

            </h2>

            <p class="max-w-3xl mx-auto text-gray-600 leading-8">

                <?php esc_html_e(
                    'Discover our carefully curated treatments designed to relax your body, restore your mind, and rejuvenate your spirit in a luxurious, tranquil environment.',
                    'elan-wellness-spa'
                ); ?>

            </p>

        </div>

        <!-- Treatment Cards -->

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">

            <!-- Card 1 -->

            <div class="bg-white rounded-3xl overflow-hidden shadow-soft hover:-translate-y-3 transition duration-500">

                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/massage.png' ); ?>"
                     class="h-72 w-full object-cover"
                     alt="<?php esc_attr_e( 'Swedish Massage', 'elan-wellness-spa' ); ?>">

                <div class="p-8">

                    <h3 class="font-heading text-3xl mb-3">

                        <?php esc_html_e( 'Swedish Massage', 'elan-wellness-spa' ); ?>

                    </h3>

                    <p class="text-gray-600 mb-6">

                        <?php esc_html_e( 'Gentle massage techniques designed to relieve stress, improve circulation, and promote complete relaxation and overall wellbeing.', 'elan-wellness-spa' ); ?>

                    </p>

                    <div class="flex justify-between text-sm text-gray-500 mb-6">

                        <span><?php esc_html_e( '60 Minutes', 'elan-wellness-spa' ); ?></span>

                        <span class="font-semibold text-secondary">R750</span>

                    </div>

                    <a href="<?php echo esc_url( home_url( '/booking/' ) ); ?>"
                       class="inline-block bg-primary text-white px-6 py-3 rounded-full hover:bg-secondary transition">

                        <?php esc_html_e( 'Book Now', 'elan-wellness-spa' ); ?>

                    </a>

                </div>

            </div>

            <!-- Card 2 -->

            <div class="bg-white rounded-3xl overflow-hidden shadow-soft hover:-translate-y-3 transition duration-500">

                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/hot-stone.png' ); ?>"
                     class="h-72 w-full object-cover"
                     alt="<?php esc_attr_e( 'Hot Stone Therapy', 'elan-wellness-spa' ); ?>">

                <div class="p-8">

                    <h3 class="font-heading text-3xl mb-3">

                        <?php esc_html_e( 'Hot Stone Therapy', 'elan-wellness-spa' ); ?>

                    </h3>

                    <p class="text-gray-600 mb-6">

                        <?php esc_html_e( 'Heated volcanic stones ease muscle tension, improve circulation, and provide a deeply soothing and restorative experience.', 'elan-wellness-spa' ); ?>

                    </p>

                    <div class="flex justify-between text-sm text-gray-500 mb-6">

                        <span><?php esc_html_e( '75 Minutes', 'elan-wellness-spa' ); ?></span>

                        <span class="font-semibold text-secondary">R950</span>

                    </div>

                    <a href="<?php echo esc_url( home_url( '/booking/' ) ); ?>"
                       class="inline-block bg-primary text-white px-6 py-3 rounded-full hover:bg-secondary transition">

                        <?php esc_html_e( 'Book Now', 'elan-wellness-spa' ); ?>

                    </a>

                </div>

            </div>

            <!-- Card 3 -->

            <div class="bg-white rounded-3xl overflow-hidden shadow-soft hover:-translate-y-3 transition duration-500">

                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/aromatherapy.png' ); ?>"
                     class="h-72 w-full object-cover"
                     alt="<?php esc_attr_e( 'Aromatherapy Massage', 'elan-wellness-spa' ); ?>">

                <div class="p-8">

                    <h3 class="font-heading text-3xl mb-3">

                        <?php esc_html_e( 'Aromatherapy Massage', 'elan-wellness-spa' ); ?>

                    </h3>

                    <p class="text-gray-600 mb-6">

                        <?php esc_html_e( 'Experience calming essential oils that relax the senses, reduce stress, and restore harmony to both body and mind.', 'elan-wellness-spa' ); ?>

                    </p>

                    <div class="flex justify-between text-sm text-gray-500 mb-6">

                        <span><?php esc_html_e( '60 Minutes', 'elan-wellness-spa' ); ?></span>

                        <span class="font-semibold text-secondary">R850</span>

                    </div>

                    <a href="<?php echo esc_url( home_url( '/booking/' ) ); ?>"
                       class="inline-block bg-primary text-white px-6 py-3 rounded-full hover:bg-secondary transition">

                        <?php esc_html_e( 'Book Now', 'elan-wellness-spa' ); ?>

                    </a>

                </div>

            </div>

            <!-- Card 4 -->

            <div class="bg-white rounded-3xl overflow-hidden shadow-soft hover:-translate-y-3 transition duration-500">

                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/facial.png' ); ?>"
                     class="h-72 w-full object-cover"
                     alt="<?php esc_attr_e( 'Luxury Facial', 'elan-wellness-spa' ); ?>">

                <div class="p-8">

                    <h3 class="font-heading text-3xl mb-3">

                        <?php esc_html_e( 'Luxury Facial', 'elan-wellness-spa' ); ?>

                    </h3>

                    <p class="text-gray-600 mb-6">

                        <?php esc_html_e( 'Rejuvenate your skin with a luxurious facial treatment that deeply cleanses, hydrates, and nourishes your complexion for a radiant, youthful glow.', 'elan-wellness-spa' ); ?>

                    </p>

                    <div class="flex justify-between text-sm text-gray-500 mb-6">

                        <span><?php esc_html_e( '60 Minutes', 'elan-wellness-spa' ); ?></span>

                        <span class="font-semibold text-secondary">R700</span>

                    </div>

                    <a href="<?php echo esc_url( home_url( '/booking/' ) ); ?>"
                       class="inline-block bg-primary text-white px-6 py-3 rounded-full hover:bg-secondary transition">

                        <?php esc_html_e( 'Book Now', 'elan-wellness-spa' ); ?>

                    </a>

                </div>

            </div>

            <!-- Card 5 -->

            <div class="bg-white rounded-3xl overflow-hidden shadow-soft hover:-translate-y-3 transition duration-500">

                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/deep-tissue.png' ); ?>"
                     class="h-72 w-full object-cover"
                     alt="<?php esc_attr_e( 'Deep Tissue Massage', 'elan-wellness-spa' ); ?>">

                <div class="p-8">

                    <h3 class="font-heading text-3xl mb-3">

                        <?php esc_html_e( 'Deep Tissue Massage', 'elan-wellness-spa' ); ?>

                    </h3>

                    <p class="text-gray-600 mb-6">

                        <?php esc_html_e( 'Target chronic muscle tension and improve mobility with a therapeutic massage that relieves pain and promotes lasting muscle recovery and relaxation.', 'elan-wellness-spa' ); ?>

                    </p>

                    <div class="flex justify-between text-sm text-gray-500 mb-6">

                        <span><?php esc_html_e( '90 Minutes', 'elan-wellness-spa' ); ?></span>

                        <span class="font-semibold text-secondary">R1,050</span>

                    </div>

                    <a href="<?php echo esc_url( home_url( '/booking/' ) ); ?>"
                       class="inline-block bg-primary text-white px-6 py-3 rounded-full hover:bg-secondary transition">

                        <?php esc_html_e( 'Book Now', 'elan-wellness-spa' ); ?>

                    </a>

                </div>

            </div>

            <!-- Card 6 -->

            <div class="bg-white rounded-3xl overflow-hidden shadow-soft hover:-translate-y-3 transition duration-500">

                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/spa-package.png' ); ?>"
                     class="h-72 w-full object-cover"
                     alt="<?php esc_attr_e( 'Signature Spa Package', 'elan-wellness-spa' ); ?>">

                <div class="p-8">

                    <h3 class="font-heading text-3xl mb-3">

                        <?php esc_html_e( 'Signature Spa Package', 'elan-wellness-spa' ); ?>

                    </h3>

                    <p class="text-gray-600 mb-6">

                        <?php esc_html_e( 'Indulge in the ultimate wellness experience with a carefully curated combination of massage, facial, and body treatments for complete rejuvenation.', 'elan-wellness-spa' ); ?>

                    </p>

                    <div class="flex justify-between text-sm text-gray-500 mb-6">

                        <span><?php esc_html_e( '3 Hours', 'elan-wellness-spa' ); ?></span>

                        <span class="font-semibold text-secondary">R2,200</span>

                    </div>

                    <a href="<?php echo esc_url( home_url( '/booking/' ) ); ?>"
                       class="inline-block bg-primary text-white px-6 py-3 rounded-full hover:bg-secondary transition">

                        <?php esc_html_e( 'Book Now', 'elan-wellness-spa' ); ?>

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ========================================= -->
<!-- WHY CHOOSE ÉLAN -->
<!-- ========================================= -->

<section class="py-24 bg-background">

    <div class="max-w-7xl mx-auto px-8">

        <!-- Section Heading -->

        <div class="text-center mb-16">

            <p class="uppercase tracking-[4px] text-secondary font-semibold mb-3">

                <?php esc_html_e( 'Why Choose Us', 'elan-wellness-spa' ); ?>

            </p>

            <h2 class="font-heading text-5xl text-text mb-6">

                <?php esc_html_e( 'A Wellness Experience Like No Other', 'elan-wellness-spa' ); ?>

            </h2>

            <p class="max-w-3xl mx-auto text-gray-600 leading-8">

                <?php esc_html_e(
                    'At Élan Wellness Spa, every treatment is thoughtfully designed to provide exceptional care, personalised attention, and a peaceful escape from the stresses of everyday life.',
                    'elan-wellness-spa'
                ); ?>

            </p>

        </div>

        <!-- Feature Cards -->

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- Card 1 -->

            <div class="bg-white p-8 rounded-3xl shadow-soft text-center hover:-translate-y-2 transition duration-500">

                <i class="fa-solid fa-spa text-5xl text-primary mb-6"></i>

                <h3 class="font-heading text-2xl mb-4">

                    <?php esc_html_e( 'Expert Care', 'elan-wellness-spa' ); ?>

                </h3>

                <p class="text-gray-600">

                    <?php esc_html_e(
                        'Our experienced therapists are dedicated to delivering exceptional treatments tailored to your individual needs.',
                        'elan-wellness-spa'
                    ); ?>

                </p>

            </div>

            <!-- Card 2 -->

            <div class="bg-white p-8 rounded-3xl shadow-soft text-center hover:-translate-y-2 transition duration-500">

                <i class="fa-solid fa-leaf text-5xl text-primary mb-6"></i>

                <h3 class="font-heading text-2xl mb-4">

                    <?php esc_html_e( 'Premium Products', 'elan-wellness-spa' ); ?>

                </h3>

                <p class="text-gray-600">

                    <?php esc_html_e(
                        'We use only high-quality, skin-friendly products enriched with natural ingredients for every treatment.',
                        'elan-wellness-spa'
                    ); ?>

                </p>

            </div>

            <!-- Card 3 -->

            <div class="bg-white p-8 rounded-3xl shadow-soft text-center hover:-translate-y-2 transition duration-500">

                <i class="fa-solid fa-heart text-5xl text-primary mb-6"></i>

                <h3 class="font-heading text-2xl mb-4">

                    <?php esc_html_e( 'Personalised Treatments', 'elan-wellness-spa' ); ?>

                </h3>

                <p class="text-gray-600">

                    <?php esc_html_e(
                        'Every wellness journey is customised to suit your goals, ensuring a truly unique and relaxing experience.',
                        'elan-wellness-spa'
                    ); ?>

                </p>

            </div>

            <!-- Card 4 -->

            <div class="bg-white p-8 rounded-3xl shadow-soft text-center hover:-translate-y-2 transition duration-500">

                <i class="fa-solid fa-fire-flame-curved text-5xl text-primary mb-6"></i>

                <h3 class="font-heading text-2xl mb-4">

                    <?php esc_html_e( 'Relaxing Atmosphere', 'elan-wellness-spa' ); ?>

                </h3>

                <p class="text-gray-600">

                    <?php esc_html_e(
                        'Enjoy calming interiors, soothing aromas, and tranquil surroundings designed to help you unwind completely.',
                        'elan-wellness-spa'
                    ); ?>

                </p>

            </div>

            <!-- Card 5 -->

            <div class="bg-white p-8 rounded-3xl shadow-soft text-center hover:-translate-y-2 transition duration-500">

                <i class="fa-solid fa-user-group text-5xl text-primary mb-6"></i>

                <h3 class="font-heading text-2xl mb-4">

                    <?php esc_html_e( 'Experienced Therapists', 'elan-wellness-spa' ); ?>

                </h3>

                <p class="text-gray-600">

                    <?php esc_html_e(
                        'Our professional team is passionate about wellness and committed to providing outstanding customer care.',
                        'elan-wellness-spa'
                    ); ?>

                </p>

            </div>

            <!-- Card 6 -->

            <div class="bg-white p-8 rounded-3xl shadow-soft text-center hover:-translate-y-2 transition duration-500">

                <i class="fa-solid fa-seedling text-5xl text-primary mb-6"></i>

                <h3 class="font-heading text-2xl mb-4">

                    <?php esc_html_e( 'Holistic Wellness', 'elan-wellness-spa' ); ?>

                </h3>

                <p class="text-gray-600">

                    <?php esc_html_e(
                        'We focus on nurturing your body, mind, and spirit through treatments that promote complete wellbeing.',
                        'elan-wellness-spa'
                    ); ?>

                </p>

            </div>

        </div>

    </div>

</section>

<!-- ========================================= -->
<!-- TESTIMONIALS -->
<!-- ========================================= -->

<section class="py-24 bg-accent">

    <div class="max-w-7xl mx-auto px-8">

        <!-- Section Heading -->

        <div class="text-center mb-16">

            <p class="uppercase tracking-[4px] text-secondary font-semibold mb-3">

                <?php esc_html_e( 'Testimonials', 'elan-wellness-spa' ); ?>

            </p>

            <h2 class="font-heading text-5xl text-text mb-6">

                <?php esc_html_e( 'What Our Clients Say', 'elan-wellness-spa' ); ?>

            </h2>

            <p class="max-w-3xl mx-auto text-gray-600 leading-8">

                <?php esc_html_e(
                    'We take pride in creating unforgettable wellness experiences. Here\'s what some of our valued guests have shared after visiting Élan Wellness Spa.',
                    'elan-wellness-spa'
                ); ?>

            </p>

        </div>

        <!-- Testimonial Cards -->

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- ====================== -->
            <!-- Testimonial 1 -->
            <!-- ====================== -->

            <div class="bg-white rounded-3xl p-8 shadow-soft hover:-translate-y-2 transition duration-500">

                <div class="flex gap-1 text-secondary text-xl mb-6">

                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>

                </div>

                <p class="text-gray-600 leading-8 mb-8">

                    <?php esc_html_e(
                        '"From the moment I walked in, I felt completely relaxed. The massage was exceptional, and the atmosphere was peaceful and luxurious. I can\'t wait to return."',
                        'elan-wellness-spa'
                    ); ?>

                </p>

                <div class="flex items-center gap-4">

                    <img
                        src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/client1.png' ); ?>"
                        alt="<?php esc_attr_e( 'Sarah Mitchell', 'elan-wellness-spa' ); ?>"
                        class="w-16 h-16 rounded-full object-cover">

                    <div>

                        <h4 class="font-semibold">

                            <?php esc_html_e( 'Sarah Mitchell', 'elan-wellness-spa' ); ?>

                        </h4>

                        <p class="text-gray-500 text-sm">

                            <i class="fa-solid fa-location-dot text-secondary"></i>

                            <?php esc_html_e( 'Cape Town', 'elan-wellness-spa' ); ?>

                        </p>

                    </div>

                </div>

            </div>

            <!-- ====================== -->
            <!-- Testimonial 2 -->
            <!-- ====================== -->

            <div class="bg-white rounded-3xl p-8 shadow-soft hover:-translate-y-2 transition duration-500">

                <div class="flex gap-1 text-secondary text-xl mb-6">

                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>

                </div>

                <p class="text-gray-600 leading-8 mb-8">

                    <?php esc_html_e(
                        '"The therapists were incredibly professional and made me feel comfortable throughout my treatment. Every detail was thoughtfully designed for relaxation."',
                        'elan-wellness-spa'
                    ); ?>

                </p>

                <div class="flex items-center gap-4">

                    <img
                        src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/client2.png' ); ?>"
                        alt="<?php esc_attr_e( 'Daniel Jacobs', 'elan-wellness-spa' ); ?>"
                        class="w-16 h-16 rounded-full object-cover">

                    <div>

                        <h4 class="font-semibold">

                            <?php esc_html_e( 'Daniel Jacobs', 'elan-wellness-spa' ); ?>

                        </h4>

                        <p class="text-gray-500 text-sm">

                            <i class="fa-solid fa-location-dot text-secondary"></i>

                            <?php esc_html_e( 'Somerset West', 'elan-wellness-spa' ); ?>

                        </p>

                    </div>

                </div>

            </div>

            <!-- ====================== -->
            <!-- Testimonial 3 -->
            <!-- ====================== -->

            <div class="bg-white rounded-3xl p-8 shadow-soft hover:-translate-y-2 transition duration-500">

                <div class="flex gap-1 text-secondary text-xl mb-6">

                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>

                </div>

                <p class="text-gray-600 leading-8 mb-8">

                    <?php esc_html_e(
                        '"Élan Wellness Spa exceeded every expectation. The Signature Spa Package was worth every minute, and I left feeling completely refreshed and revitalised."',
                        'elan-wellness-spa'
                    ); ?>

                </p>

                <div class="flex items-center gap-4">

                    <img
                        src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/client3.png' ); ?>"
                        alt="<?php esc_attr_e( 'Olivia Petersen', 'elan-wellness-spa' ); ?>"
                        class="w-16 h-16 rounded-full object-cover">

                    <div>

                        <h4 class="font-semibold">

                            <?php esc_html_e( 'Olivia Petersen', 'elan-wellness-spa' ); ?>

                        </h4>

                        <p class="text-gray-500 text-sm">

                            <i class="fa-solid fa-location-dot text-secondary"></i>

                            <?php esc_html_e( 'Stellenbosch', 'elan-wellness-spa' ); ?>

                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ========================================= -->
<!-- SPECIAL OFFER -->
<!-- ========================================= -->

<section class="py-24 bg-primary">


    <div class="max-w-5xl mx-auto px-8">


        <div class="bg-white rounded-3xl p-12 shadow-soft text-center">


            <div class="text-secondary text-6xl mb-6">

                <i class="fa-solid fa-gift"></i>

            </div>




            <p class="uppercase tracking-[4px] text-secondary font-semibold mb-3">

                Limited Time Offer

            </p>





            <h2 class="font-heading text-5xl text-text mb-6">

                Enjoy 20% Off Your First Visit

            </h2>





            <p class="text-gray-600 leading-8 max-w-3xl mx-auto mb-10">

                Experience the luxury of Élan Wellness Spa with an exclusive
                introductory offer for first-time guests. Relax, unwind and
                discover why our personalised treatments leave clients feeling
                refreshed, renewed and revitalised.

            </p>





            <a href="<?php echo home_url('/booking/'); ?>"

               class="inline-block bg-secondary text-white px-10 py-4 rounded-full hover:bg-primary transition duration-300">


                Book Your Appointment


            </a>




        </div>


    </div>


</section>

<!-- ========================================= -->
<!-- MEET OUR THERAPISTS -->
<!-- ========================================= -->

<section class="py-24 bg-background">

    <div class="max-w-7xl mx-auto px-8">


        <!-- Section Heading -->

        <div class="text-center mb-16">


            <p class="uppercase tracking-[4px] text-secondary font-semibold mb-3">

                Meet Our Team

            </p>



            <h2 class="font-heading text-5xl text-text mb-6">

                Meet Our Expert Therapists

            </h2>



            <p class="max-w-3xl mx-auto text-gray-600 leading-8">

                Our passionate team of qualified wellness professionals is committed
                to providing exceptional treatments and personalised care,
                ensuring every visit is relaxing, rejuvenating, and memorable.

            </p>


        </div>





        <!-- Therapist Cards -->


        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">





            <!-- Emma -->

            <div class="bg-white rounded-3xl overflow-hidden shadow-soft hover:-translate-y-3 transition duration-500">


                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/therapist1.png"

                     alt="Emma Carter"

                     class="w-full h-96 object-cover transition duration-500 hover:scale-105">



                <div class="p-8 text-center">


                    <h3 class="font-heading text-3xl mb-2">

                        Emma Carter

                    </h3>



                    <p class="text-secondary font-semibold mb-4">

                        Senior Massage Therapist

                    </p>




                    <p class="text-gray-600 leading-7 mb-6">

                        Emma has over 10 years of experience specialising in
                        Swedish, Deep Tissue, and Hot Stone Massage therapies.
                        She is passionate about helping every guest achieve
                        complete relaxation and renewed wellbeing.

                    </p>




                    <a href="<?php echo home_url('/booking/'); ?>"

                       class="inline-block bg-primary text-white px-6 py-3 rounded-full hover:bg-secondary transition">


                        Book Appointment


                    </a>



                </div>


            </div>







            <!-- Amy -->


            <div class="bg-white rounded-3xl overflow-hidden shadow-soft hover:-translate-y-3 transition duration-500">


                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/therapist2.png"

                     alt="Amy Bennett"

                     class="w-full h-96 object-cover transition duration-500 hover:scale-105">



                <div class="p-8 text-center">


                    <h3 class="font-heading text-3xl mb-2">

                        Amy Bennett

                    </h3>



                    <p class="text-secondary font-semibold mb-4">

                        Skincare & Facial Specialist

                    </p>




                    <p class="text-gray-600 leading-7 mb-6">

                        Amy specialises in luxury facial treatments and advanced
                        skincare therapies. Her personalised approach helps clients
                        achieve healthier, radiant skin while enjoying a deeply
                        relaxing spa experience.

                    </p>




                    <a href="<?php echo home_url('/booking/'); ?>"

                       class="inline-block bg-primary text-white px-6 py-3 rounded-full hover:bg-secondary transition">


                        Book Appointment


                    </a>



                </div>


            </div>







            <!-- Michael -->


            <div class="bg-white rounded-3xl overflow-hidden shadow-soft hover:-translate-y-3 transition duration-500">


                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/therapist3.png"

                     alt="Michael Jacobs"

                     class="w-full h-96 object-cover transition duration-500 hover:scale-105">



                <div class="p-8 text-center">


                    <h3 class="font-heading text-3xl mb-2">

                        Michael Jacobs

                    </h3>




                    <p class="text-secondary font-semibold mb-4">

                        Holistic Wellness Therapist

                    </p>





                    <p class="text-gray-600 leading-7 mb-6">

                        Michael combines massage therapy, aromatherapy, and holistic
                        wellness techniques to create personalised treatments that
                        relieve stress, improve wellbeing, and restore balance to
                        both body and mind.

                    </p>




                    <a href="<?php echo home_url('/booking/'); ?>"

                       class="inline-block bg-primary text-white px-6 py-3 rounded-full hover:bg-secondary transition">


                        Book Appointment


                    </a>



                </div>


            </div>




        </div>


    </div>


</section>

<!-- ========================================= -->
<!-- NEWSLETTER -->
<!-- ========================================= -->

<section class="py-24 bg-accent">


    <div class="max-w-5xl mx-auto px-8">


        <div class="bg-white rounded-3xl shadow-soft p-12 text-center">



            <i class="fa-solid fa-envelope-open-text text-6xl text-primary mb-6"></i>





            <p class="uppercase tracking-[4px] text-secondary font-semibold mb-3">

                Stay Connected

            </p>





            <h2 class="font-heading text-5xl text-text mb-6">

                Join Our Wellness Community

            </h2>





            <p class="text-gray-600 leading-8 max-w-3xl mx-auto mb-10">

                Subscribe to receive exclusive promotions, wellness advice,
                seasonal spa offers, and the latest updates from Élan Wellness Spa.

            </p>






            <form class="flex flex-col md:flex-row gap-4 justify-center"
                  method="post">


                <input

                    type="email"

                    name="newsletter_email"

                    placeholder="Enter your email address"

                    class="flex-1 max-w-xl px-6 py-4 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary"

                    required>



                <button

                    type="submit"

                    class="bg-primary text-white px-8 py-4 rounded-full hover:bg-secondary transition">


                    Subscribe


                </button>



            </form>




        </div>


    </div>


</section>

</main>

<?php get_footer(); ?>
