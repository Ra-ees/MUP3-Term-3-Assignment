<?php
/**
 * The main template file
 *
 * @package Elan_Wellness_Spa
 */

get_header();
?>

<section class="py-24 bg-[#F9F7F3]">

    <div class="max-w-6xl mx-auto px-8">

        <?php if ( have_posts() ) : ?>

            <header class="mb-16 text-center">

                <?php if ( is_home() && ! is_front_page() ) : ?>

                    <h1 class="font-heading text-5xl mb-6">

                        <?php single_post_title(); ?>

                    </h1>

                <?php else : ?>

                    <h1 class="font-heading text-5xl mb-6">

                        Latest Articles

                    </h1>

                <?php endif; ?>

            </header>

            <div class="grid lg:grid-cols-2 gap-10">

                <?php
                while ( have_posts() ) :
                    the_post();
                ?>

                    <article id="post-<?php the_ID(); ?>"
                             <?php post_class('bg-white rounded-3xl shadow-xl overflow-hidden'); ?>>

                        <?php if ( has_post_thumbnail() ) : ?>

                            <a href="<?php the_permalink(); ?>">

                                <?php the_post_thumbnail(
                                    'large',
                                    [
                                        'class' => 'w-full h-72 object-cover'
                                    ]
                                ); ?>

                            </a>

                        <?php endif; ?>

                        <div class="p-8">

                            <div class="text-sm text-gray-500 mb-4">

                                <?php echo get_the_date(); ?>

                            </div>

                            <h2 class="font-heading text-3xl mb-4">

                                <a href="<?php the_permalink(); ?>"
                                   class="hover:text-secondary transition">

                                    <?php the_title(); ?>

                                </a>

                            </h2>

                            <div class="text-gray-600 leading-8 mb-6">

                                <?php the_excerpt(); ?>

                            </div>

                            <a href="<?php the_permalink(); ?>"
                               class="inline-block bg-secondary text-white px-6 py-3 rounded-full hover:bg-primary transition">

                                Read More

                            </a>

                        </div>

                    </article>

                <?php endwhile; ?>

            </div>

            <div class="mt-16 flex justify-center">

                <?php
                the_posts_pagination([
                    'mid_size' => 2,
                    'prev_text' => '← Previous',
                    'next_text' => 'Next →',
                ]);
                ?>

            </div>

        <?php else : ?>

            <div class="text-center py-20">

                <h2 class="font-heading text-4xl mb-6">

                    Nothing Found

                </h2>

                <p class="text-gray-600 mb-8">

                    Sorry, we couldn't find any content.

                </p>

                <?php get_search_form(); ?>

            </div>

        <?php endif; ?>

    </div>

</section>

<?php get_footer(); ?>