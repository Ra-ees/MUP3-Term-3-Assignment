<?php
/**
 * Archive Template
 *
 * @package Elan_Wellness_Spa
 */

get_header();
?>

<section class="py-32 bg-background">

    <div class="max-w-7xl mx-auto px-8">

        <div class="text-center mb-16">

            <p class="uppercase tracking-[5px] text-secondary font-semibold mb-4">

                Archive

            </p>

            <h1 class="font-heading text-5xl mb-6">

                <?php the_archive_title(); ?>

            </h1>

            <?php if ( get_the_archive_description() ) : ?>

                <div class="max-w-3xl mx-auto text-gray-600 leading-8">

                    <?php the_archive_description(); ?>

                </div>

            <?php endif; ?>

        </div>

        <?php if ( have_posts() ) : ?>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">

                <?php while ( have_posts() ) : the_post(); ?>

                    <article id="post-<?php the_ID(); ?>" <?php post_class( 'bg-white rounded-3xl shadow-xl overflow-hidden hover:-translate-y-2 hover:shadow-2xl transition duration-300' ); ?>>

                        <?php if ( has_post_thumbnail() ) : ?>

                            <a href="<?php the_permalink(); ?>">

                                <?php the_post_thumbnail(
                                    'large',
                                    array(
                                        'class' => 'w-full h-64 object-cover'
                                    )
                                ); ?>

                            </a>

                        <?php endif; ?>

                        <div class="p-8">

                            <p class="text-secondary text-sm uppercase tracking-[3px] mb-3">

                                <?php echo esc_html( get_the_date() ); ?>

                            </p>

                            <h2 class="font-heading text-3xl mb-4">

                                <a href="<?php the_permalink(); ?>" class="hover:text-secondary transition duration-300">

                                    <?php the_title(); ?>

                                </a>

                            </h2>

                            <div class="text-gray-600 leading-8 mb-6">

                                <?php the_excerpt(); ?>

                            </div>

                            <a href="<?php the_permalink(); ?>"
                               class="inline-block bg-secondary text-white px-6 py-3 rounded-full hover:bg-primary transition duration-300">

                                <?php esc_html_e( 'Read More', 'elan-wellness-spa' ); ?>

                            </a>

                        </div>

                    </article>

                <?php endwhile; ?>

            </div>

            <div class="mt-16">

                <?php
                the_posts_pagination(
                    array(
                        'mid_size'  => 2,
                        'prev_text' => '&laquo;',
                        'next_text' => '&raquo;',
                    )
                );
                ?>

            </div>

        <?php else : ?>

            <div class="text-center py-20">

                <h2 class="font-heading text-4xl mb-6">

                    <?php esc_html_e( 'No Posts Found', 'elan-wellness-spa' ); ?>

                </h2>

                <p class="text-gray-600 mb-8">

                    <?php esc_html_e( 'There are currently no posts available in this archive.', 'elan-wellness-spa' ); ?>

                </p>

                <?php get_search_form(); ?>

            </div>

        <?php endif; ?>

    </div>

</section>

<?php
get_footer();