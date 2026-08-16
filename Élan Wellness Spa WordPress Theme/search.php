<?php
/**
 * Search Results
 *
 * @package Elan_Wellness_Spa
 */

get_header();
?>

<section class="py-32 bg-background">

    <div class="max-w-7xl mx-auto px-8">

        <div class="text-center mb-16">

            <p class="uppercase tracking-[5px] text-secondary font-semibold mb-4">

                Search Results

            </p>

            <h1 class="font-heading text-5xl mb-6">

                Results for:
                <span class="text-secondary">
                    "<?php echo esc_html( get_search_query() ); ?>"
                </span>

            </h1>

        </div>

        <?php if ( have_posts() ) : ?>

            <div class="grid md:grid-cols-2 gap-10">

                <?php while ( have_posts() ) : the_post(); ?>

                    <article class="bg-white rounded-3xl shadow-xl overflow-hidden">

                        <?php if ( has_post_thumbnail() ) : ?>

                            <a href="<?php the_permalink(); ?>">

                                <?php the_post_thumbnail(
                                    'large',
                                    array(
                                        'class' => 'w-full h-72 object-cover'
                                    )
                                ); ?>

                            </a>

                        <?php endif; ?>

                        <div class="p-8">

                            <h2 class="font-heading text-3xl mb-4">

                                <a href="<?php the_permalink(); ?>">

                                    <?php the_title(); ?>

                                </a>

                            </h2>

                            <div class="text-gray-600 leading-8 mb-6">

                                <?php the_excerpt(); ?>

                            </div>

                            <a href="<?php the_permalink(); ?>"
                               class="inline-block bg-secondary text-white px-6 py-3 rounded-full hover:bg-primary transition duration-300">

                                Read More

                            </a>

                        </div>

                    </article>

                <?php endwhile; ?>

            </div>

            <div class="mt-16">

                <?php the_posts_pagination(); ?>

            </div>

        <?php else : ?>

            <div class="text-center">

                <h2 class="font-heading text-4xl mb-6">

                    Nothing Found

                </h2>

                <p class="text-gray-600 text-lg mb-10">

                    Sorry, we couldn't find anything matching your search.

                </p>

                <?php get_search_form(); ?>

            </div>

        <?php endif; ?>

    </div>

</section>

<?php
get_footer();