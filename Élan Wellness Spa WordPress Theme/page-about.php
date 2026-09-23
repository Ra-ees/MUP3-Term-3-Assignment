<?php
/**
 * Template Name: About Page
 *
 * @package Elan_Wellness_Spa
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main id="primary">

<!-- ========================================= -->
<!-- HERO -->
<!-- ========================================= -->

<section
class="relative min-h-screen bg-cover bg-center flex items-center pb-16 md:pb-0"
style="background-image:url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/about-hero.png' ); ?>');">

    <div class="absolute inset-0 bg-black/50"></div>

    <div class="relative max-w-7xl mx-auto px-8 pt-36 md:pt-0">

        <p class="uppercase tracking-[4px] text-secondary font-semibold text-xs md:text-base mt-6 md:mt-0 mb-6 md:mb-4">

            About Élan Wellness Spa

        </p>

        <h1 class="font-heading text-5xl md:text-7xl text-white leading-tight mb-6">

            Where Luxury Meets
            <br>
            Wellness

        </h1>

        <p class="text-white/90 text-base md:text-xl max-w-3xl leading-8 md:leading-9">

           Discover the story behind Élan Wellness Spa and our passion for creating
           meaningful wellness experiences that help you slow down, reconnect and
           restore balance. From personalised treatments and expert therapeutic care
           to our tranquil surroundings, every element has been thoughtfully created
           to provide a sense of comfort, relaxation and complete rejuvenation. A 
           space designed to help you pause, breathe and return to yourself.

        </p>

    </div>

</section>

<!-- ========================================= -->
<!-- OUR STORY -->
<!-- ========================================= -->

<section class="py-24 bg-white">

    <div class="max-w-7xl mx-auto px-8">

        <div class="grid lg:grid-cols-2 gap-16 items-center">

            <div>

                <img
                    src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/our-story.png' ); ?>"
                    alt="Luxury Spa Interior"
                    class="rounded-3xl shadow-2xl w-full object-cover">

            </div>

            <div>

                <p class="uppercase tracking-[4px] text-secondary font-semibold mb-4">

                    Our Story

                </p>

                <h2 class="font-heading text-5xl mb-8">

                    A Sanctuary Designed
                    <br>
                    for Mind, Body & Soul

                </h2>

                <p class="text-gray-600 leading-8 mb-6">

                    Founded with a passion for holistic wellness,
                    Élan Wellness Spa was created to offer guests a peaceful
                    escape from the demands of modern life. Every detail
                    has been thoughtfully designed to promote relaxation,
                    comfort and rejuvenation.

                </p>

                <p class="text-gray-600 leading-8 mb-8">

                    From personalised massage therapies and advanced skincare
                    treatments to calming wellness rituals, our experienced
                    therapists are dedicated to helping every guest restore
                    balance, reduce stress and leave feeling refreshed.

                </p>

                <a
                   href="<?php echo esc_url( home_url('/booking/#booking-form') ); ?>"
                   class="inline-block bg-secondary text-white px-8 py-4 rounded-full hover:bg-primary transition duration-300">

                    Book Your Experience

                </a>

            </div>

        </div>

    </div>

</section>

<!-- ========================================= -->
<!-- MISSION & VISION -->
<!-- ========================================= -->

<section class="py-24 bg-[#F9F7F3]">

    <div class="max-w-7xl mx-auto px-8">

        <div class="text-center mb-20">

            <p class="uppercase tracking-[4px] text-secondary font-semibold mb-4">

                Our Purpose

            </p>

            <h2 class="font-heading text-5xl">

                Our Mission & Vision

            </h2>

        </div>

        <div class="grid md:grid-cols-2 gap-12">

            <div class="bg-white rounded-3xl shadow-xl p-10 hover:-translate-y-2 transition duration-300">

                <div class="text-secondary text-5xl mb-6">

                    <i class="fa-solid fa-spa"></i>

                </div>

                <h3 class="font-heading text-3xl mb-6">

                    Our Mission

                </h3>

                <p class="text-gray-600 leading-8">

                    To provide exceptional wellness experiences through
                    personalised treatments, professional care and
                    a peaceful environment.

                </p>

            </div>

            <div class="bg-white rounded-3xl shadow-xl p-10 hover:-translate-y-2 transition duration-300">

                <div class="text-secondary text-5xl mb-6">

                    <i class="fa-solid fa-leaf"></i>

                </div>

                <h3 class="font-heading text-3xl mb-6">

                    Our Vision

                </h3>

                <p class="text-gray-600 leading-8">

                    To become one of Cape Town's leading luxury wellness
                    destinations recognised for exceptional spa experiences.

                </p>

            </div>

        </div>

    </div>

</section>

<!-- ========================================= -->
<!-- CORE VALUES -->
<!-- ========================================= -->

<section class="py-24 bg-white">

    <div class="max-w-7xl mx-auto px-8">

        <div class="text-center mb-20">

            <p class="uppercase tracking-[4px] text-secondary font-semibold mb-4">

                What We Believe

            </p>

            <h2 class="font-heading text-5xl mb-6">

                Our Core Values

            </h2>

            <p class="text-gray-600 max-w-3xl mx-auto leading-8">

                Every experience at Élan Wellness Spa is guided by our commitment
                to exceptional care, genuine hospitality, and holistic wellbeing.

            </p>

        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">

            <!-- Holistic Wellness -->

            <div class="bg-[#F9F7F3] rounded-3xl p-10 text-center shadow-lg hover:-translate-y-3 hover:shadow-2xl transition duration-300">

                <div class="text-secondary text-5xl mb-6">

                    <i class="fa-solid fa-spa"></i>

                </div>

                <h3 class="font-heading text-2xl mb-4">

                    Holistic Wellness

                </h3>

                <p class="text-gray-600 leading-7">

                    We nurture the mind, body, and spirit through personalised
                    wellness experiences designed for complete relaxation and renewal.

                </p>

            </div>

            <!-- Excellence -->

            <div class="bg-[#F9F7F3] rounded-3xl p-10 text-center shadow-lg hover:-translate-y-3 hover:shadow-2xl transition duration-300">

                <div class="text-secondary text-5xl mb-6">

                    <i class="fa-solid fa-award"></i>

                </div>

                <h3 class="font-heading text-2xl mb-4">

                    Excellence

                </h3>

                <p class="text-gray-600 leading-7">

                    Every treatment is delivered with exceptional attention to
                    detail, professionalism, and a passion for exceeding expectations.

                </p>

            </div>

            <!-- Personalised Care -->

            <div class="bg-[#F9F7F3] rounded-3xl p-10 text-center shadow-lg hover:-translate-y-3 hover:shadow-2xl transition duration-300">

                <div class="text-secondary text-5xl mb-6">

                    <i class="fa-solid fa-heart"></i>

                </div>

                <h3 class="font-heading text-2xl mb-4">

                    Personalised Care

                </h3>

                <p class="text-gray-600 leading-7">

                    Every guest receives thoughtful treatments tailored to their
                    individual needs, comfort, and wellness goals.

                </p>

            </div>

            <!-- Sustainability -->

            <div class="bg-[#F9F7F3] rounded-3xl p-10 text-center shadow-lg hover:-translate-y-3 hover:shadow-2xl transition duration-300">

                <div class="text-secondary text-5xl mb-6">

                    <i class="fa-solid fa-leaf"></i>

                </div>

                <h3 class="font-heading text-2xl mb-4">

                    Sustainability

                </h3>

                <p class="text-gray-600 leading-7">

                    We embrace environmentally conscious practices and carefully
                    selected products that respect both nature and our guests.

                </p>

            </div>

        </div>

    </div>

</section>

<!-- ========================================= -->
<!-- AWARDS & CERTIFICATIONS -->
<!-- ========================================= -->

<section class="py-24 bg-[#F9F7F3]">

    <div class="max-w-7xl mx-auto px-8">

        <div class="text-center mb-20">

            <p class="uppercase tracking-[4px] text-secondary font-semibold mb-4">

                Excellence & Recognition

            </p>

            <h2 class="font-heading text-5xl mb-6">

                Awards & Certifications

            </h2>

            <p class="text-gray-600 max-w-3xl mx-auto leading-8">

                Our commitment to exceptional service, wellness excellence, and
                professional care is reflected through industry-recognised
                standards and the trust of our valued guests.

            </p>

        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">

	            <!-- Luxury Spa Excellence -->

            <div class="bg-white rounded-3xl shadow-xl p-10 text-center hover:-translate-y-3 transition duration-300">

                <div class="text-secondary text-5xl mb-6">

                    <i class="fa-solid fa-trophy"></i>

                </div>

                <h3 class="font-heading text-2xl mb-4">

                    Luxury Spa Excellence

                </h3>

                <p class="text-gray-600 leading-7">

                    Recognised for delivering exceptional wellness experiences,
                    premium facilities and outstanding customer service.

                </p>

            </div>

            <!-- Certified Therapists -->

            <div class="bg-white rounded-3xl shadow-xl p-10 text-center hover:-translate-y-3 transition duration-300">

                <div class="text-secondary text-5xl mb-6">

                    <i class="fa-solid fa-certificate"></i>

                </div>

                <h3 class="font-heading text-2xl mb-4">

                    Certified Therapists

                </h3>

                <p class="text-gray-600 leading-7">

                    Our experienced therapists are professionally trained and
                    committed to delivering safe, personalised treatments.

                </p>

            </div>

            <!-- Premium Natural Products -->

            <div class="bg-white rounded-3xl shadow-xl p-10 text-center hover:-translate-y-3 transition duration-300">

                <div class="text-secondary text-5xl mb-6">

                    <i class="fa-solid fa-seedling"></i>

                </div>

                <h3 class="font-heading text-2xl mb-4">

                    Premium Natural Products

                </h3>

                <p class="text-gray-600 leading-7">

                    We use carefully selected, high-quality skincare and wellness
                    products inspired by nature to enhance every treatment.

                </p>

            </div>

            <!-- Client Satisfaction -->

            <div class="bg-white rounded-3xl shadow-xl p-10 text-center hover:-translate-y-3 transition duration-300">

                <div class="text-secondary text-5xl mb-6">

                    <i class="fa-solid fa-heart"></i>

                </div>

                <h3 class="font-heading text-2xl mb-4">

                    Client Satisfaction

                </h3>

                <p class="text-gray-600 leading-7">

                    We take pride in creating memorable spa experiences that leave
                    our guests feeling refreshed, relaxed and eager to return.

                </p>

            </div>

        </div>

    </div>

</section>

<!-- ========================================= -->
<!-- CALL TO ACTION -->
<!-- ========================================= -->

<section
class="relative py-32 bg-cover bg-center"
style="background-image:url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/about-cta.png' ); ?>');">

    <div class="absolute inset-0 bg-black/55"></div>

    <div class="relative max-w-4xl mx-auto px-8 text-center">

        <p class="uppercase tracking-[5px] text-secondary font-semibold mb-5">

            Begin Your Wellness Journey

        </p>

        <h2 class="font-heading text-5xl md:text-6xl text-white mb-8 leading-tight">

            Relax, Rejuvenate &
            <br>
            Restore Your Wellbeing

        </h2>

        <p class="text-white/90 text-lg leading-8 mb-10">

            Escape the pressures of everyday life and experience luxurious
            spa treatments tailored to your individual needs. Let our expert
            therapists help you achieve complete relaxation in an atmosphere
            of comfort, elegance and tranquillity.

        </p>

        <a
            href="<?php echo esc_url( home_url('/booking/#booking-form') ); ?>"
            class="inline-block bg-secondary hover:bg-primary transition duration-300 text-white px-10 py-5 rounded-full shadow-xl text-lg">

            Book Your Appointment

        </a>

    </div>

</section>

</main>

<?php get_footer(); ?>	
