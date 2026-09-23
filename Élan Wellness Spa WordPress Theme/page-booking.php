<?php
/**
 * Template Name: Booking Page
 *
 * @package Elan_Wellness_Spa
 */

get_header();
?>

<!-- ========================================= -->
<!-- BOOKING HERO -->
<!-- ========================================= -->

<section class="relative min-h-screen bg-cover bg-center flex items-center pb-16 md:pb-0"
    style="background-image:url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/booking-hero.png');">

    <div class="absolute inset-0 bg-black/55"></div>

    <div class="relative max-w-7xl mx-auto px-8 w-full pt-28 md:pt-0">

        <p class="uppercase tracking-[4px] text-secondary font-semibold text-xs md:text-base mt-6 md:mt-0 mb-6 md:mb-4">

            Reserve Your Experience

        </p>

        <h1 class="font-heading text-5xl md:text-7xl text-white leading-tight mb-6">

            Book Your
            <br>
            Spa Experience

        </h1>

        <p class="text-white/90 text-base md:text-xl max-w-xl md:max-w-3xl leading-8 md:leading-9">

             Schedule your appointment with our expert therapists and enjoy a
             personalised wellness experience created around your comfort and
             wellbeing. Choose from our luxurious treatments, select a convenient
             date and time, and prepare to unwind in a tranquil environment where
             thoughtful care, relaxation, and rejuvenation come together.

        </p>

    </div>

</section>

<!-- ========================================= -->
<!-- BOOKING INTRO -->
<!-- ========================================= -->

<section class="py-24 bg-white">

    <div class="max-w-4xl mx-auto px-8 text-center">

        <p class="uppercase tracking-[5px] text-secondary font-semibold mb-4">

            Your Journey Begins Here

        </p>

        <h2 class="font-heading text-5xl mb-8">

            Schedule Your Appointment

        </h2>

        <p class="text-gray-600 text-lg leading-9">

            Booking your spa experience is simple. Choose your preferred
            treatment, select a convenient date and time, and let us take
            care of the rest. Our team looks forward to welcoming you for
            a truly relaxing and rejuvenating experience.

        </p>

    </div>

</section>

<!-- ========================================= -->
<!-- BOOKING FORM -->
<!-- ========================================= -->

<section id="booking-form" class="py-24 bg-[#F9F7F3]">

    <div class="max-w-7xl mx-auto px-8">

        <div class="grid lg:grid-cols-2 gap-16">

            <!-- LEFT COLUMN -->

            <div>

                <p class="uppercase tracking-[5px] text-secondary font-semibold mb-4">

                    Book Your Appointment

                </p>

                <h2 class="font-heading text-5xl mb-8">

                    Reserve Your Luxury Spa Experience

                </h2>

                <p class="text-gray-600 leading-8 mb-10">

                    Complete the booking form and one of our team members
                    will confirm your appointment. We recommend booking
                    in advance to secure your preferred treatment, date,
                    and therapist.

                </p>

                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/booking-form.png"
                    alt="Luxury Spa"
                    class="rounded-3xl shadow-2xl w-full">

            </div>

            <!-- RIGHT COLUMN -->

            <div id="amelia-booking-form" class="scroll-mt-24">

                    <?php echo do_shortcode('[ameliastepbooking]'); ?>

        </div>

    </div>

</section>

<!-- ========================================= -->
<!-- WHY BOOK WITH US -->
<!-- ========================================= -->

<section class="py-24 bg-white">

    <div class="max-w-7xl mx-auto px-8">

        <div class="text-center mb-20">

            <p class="uppercase tracking-[5px] text-secondary font-semibold mb-4">

                <?php echo esc_html( get_theme_mod(
                    'booking_why_subtitle',
                    'Why Book With Us'
                ) ); ?>

            </p>

            <h2 class="font-heading text-5xl mb-6">

                <?php echo esc_html( get_theme_mod(
                    'booking_why_title',
                    'A Relaxing Experience From Start to Finish'
                ) ); ?>

            </h2>

            <p class="text-gray-600 max-w-3xl mx-auto leading-8">

                <?php echo wp_kses_post( get_theme_mod(
                    'booking_why_description',
                    'From the moment you make your reservation until the end of your treatment, our team is committed to providing exceptional service, personalised care, and a truly luxurious wellness experience.'
                ) ); ?>

            </p>

        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">

            <?php
            $features = [
                [
                    'icon' => 'fa-calendar-check',
                    'title' => 'Easy Booking',
                    'text'  => 'Reserve your appointment online in just a few simple steps.'
                ],
                [
                    'icon' => 'fa-clock',
                    'title' => 'Flexible Scheduling',
                    'text'  => 'Choose a date and time that best suits your lifestyle.'
                ],
                [
                    'icon' => 'fa-user-check',
                    'title' => 'Qualified Therapists',
                    'text'  => 'Enjoy treatments delivered by experienced wellness professionals.'
                ],
                [
                    'icon' => 'fa-heart',
                    'title' => 'Personalised Care',
                    'text'  => 'Every appointment is tailored to your individual needs and preferences.'
                ]
            ];

            foreach ( $features as $feature ) :
            ?>

                <div class="bg-[#F9F7F3] rounded-3xl p-8 shadow-lg text-center">

                    <i class="fa-solid <?php echo esc_attr( $feature['icon'] ); ?> text-5xl text-secondary mb-6"></i>

                    <h3 class="font-heading text-2xl mb-4">

                        <?php echo esc_html( $feature['title'] ); ?>

                    </h3>

                    <p class="text-gray-600 leading-7">

                        <?php echo esc_html( $feature['text'] ); ?>

                    </p>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>

<!-- ========================================= -->
<!-- BOOKING INFORMATION -->
<!-- ========================================= -->

<section class="py-24 bg-[#F9F7F3]">

    <div class="max-w-6xl mx-auto px-8">

        <div class="text-center mb-16">

            <p class="uppercase tracking-[5px] text-secondary font-semibold mb-4">

                Booking Information

            </p>

            <h2 class="font-heading text-5xl">

                Before Your Visit

            </h2>

        </div>

        <div class="grid md:grid-cols-2 gap-10">

            <div class="bg-white rounded-3xl shadow-lg p-10">

                <h3 class="font-heading text-3xl mb-6">

                    Arrival Guidelines

                </h3>

                <ul class="space-y-4 text-gray-600 leading-8">

                    <li>• Arrive at least 15 minutes before your appointment.</li>

                    <li>• Complimentary robes, towels, and slippers are provided.</li>

                    <li>• Inform your therapist of any medical conditions or allergies.</li>

                    <li>• Relax in our lounge before your treatment begins.</li>

                </ul>

            </div>

            <div class="bg-white rounded-3xl shadow-lg p-10">

                <h3 class="font-heading text-3xl mb-6">

                    Cancellation Policy

                </h3>

                <ul class="space-y-4 text-gray-600 leading-8">

                    <li>• Please provide at least 24 hours' notice for cancellations.</li>

                    <li>• Late cancellations may incur a cancellation fee.</li>

                    <li>• Gift vouchers can be redeemed during online bookings.</li>

                    <li>• Secure payment options are available upon confirmation.</li>

                </ul>

            </div>

        </div>

    </div>

</section>

<!-- ========================================= -->
<!-- BOOKING CTA -->
<!-- ========================================= -->

<?php
$booking_cta_bg = get_theme_mod(
    'booking_cta_background',
    get_template_directory_uri() . '/assets/images/booking-cta.png'
);
?>

<section class="relative py-32 bg-cover bg-center"
         style="background-image:url('<?php echo esc_url( $booking_cta_bg ); ?>');">

    <div class="absolute inset-0 bg-black/55"></div>

    <div class="relative max-w-4xl mx-auto px-8 text-center">

        <p class="uppercase tracking-[5px] text-secondary font-semibold mb-5">

            <?php echo esc_html( get_theme_mod(
                'booking_cta_subtitle',
                'Ready to Relax?'
            ) ); ?>

        </p>

        <h2 class="font-heading text-5xl md:text-6xl text-white leading-tight mb-8">

            <?php echo nl2br( esc_html( get_theme_mod(
                'booking_cta_title',
                "Your Perfect Spa\nExperience Awaits"
            ) ) ); ?>

        </h2>

        <p class="text-white/90 text-lg leading-8 mb-10">

            <?php echo wp_kses_post( get_theme_mod(
                'booking_cta_description',
                'Escape the stresses of everyday life and enjoy a personalised wellness experience designed to restore balance, calm your mind, and revitalise your body. Book today and let us take care of the rest.'
            ) ); ?>

        </p>

        <a href="<?php echo esc_url( home_url('/booking/#booking-form') ); ?>"
           class="inline-block min-w-[320px] bg-secondary hover:bg-primary transition duration-300 text-white px-10 py-5 rounded-full shadow-xl text-center">

            <?php echo esc_html( get_theme_mod(
                'booking_cta_button',
                'Reserve Your Appointment'
            ) ); ?>

        </a>

    </div>

</section>

<?php get_footer(); ?>
