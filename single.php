<?php
/**
 * Single Post Template
 *
 * @package Elan_Wellness_Spa
 */

get_header();
?>

<section class="py-32 bg-background">

    <div class="max-w-5xl mx-auto px-8">

        <?php
        if ( have_posts() ) :

            while ( have_posts() ) :

                the_post();
        ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                    <?php if ( has_post_thumbnail() ) : ?>

                        <div class="mb-10 rounded-3xl overflow-hidden shadow-2xl">

                            <?php the_post_thumbnail(
                                'full',
                                array(
                                    'class' => 'w-full h-auto object-cover'
                                )
                            ); ?>

                        </div>

                    <?php endif; ?>

                    <header class="mb-10 text-center">

                        <p class="uppercase tracking-[4px] text-secondary font-semibold mb-4">

                            <?php echo esc_html( get_the_date() ); ?>

                        </p>

                        <h1 class="font-heading text-5xl md:text-6xl mb-6">

                            <?php the_title(); ?>

                        </h1>

                        <div class="text-gray-500 text-sm">

                            <?php
                            printf(
                                esc_html__( 'Posted by %s', 'elan-wellness-spa' ),
                                esc_html( get_the_author() )
                            );
                            ?>

                        </div>

                    </header>

                    <div class="prose prose-lg max-w-none text-gray-700 leading-8">

                        <?php the_content(); ?>

                    </div>

                    <?php
                    wp_link_pages(
                        array(
                            'before' => '<div class="mt-10">',
                            'after'  => '</div>',
                        )
                    );
                    ?>

                    <div class="mt-16 pt-8 border-t border-gray-200">

                        <div class="flex flex-wrap gap-2">

                            <?php the_tags(
                                '<span class="font-semibold mr-2">' . esc_html__( 'Tags:', 'elan-wellness-spa' ) . '</span>',
                                '',
                                ''
                            ); ?>

                        </div>

                    </div>

                    <div class="mt-16 flex justify-between items-center gap-6">

                        <div>

                            <?php previous_post_link(
                                '%link',
                                '&larr; %title'
                            ); ?>

                        </div>

                        <div class="text-right">

                            <?php next_post_link(
                                '%link',
                                '%title &rarr;'
                            ); ?>

                        </div>

                    </div>

                    <?php

                    if ( comments_open() || get_comments_number() ) {

                        comments_template();

                    }

                    ?>

                </article>

        <?php

            endwhile;

        else :

        ?>

            <div class="text-center py-20">

                <h2 class="font-heading text-4xl mb-6">

                    <?php esc_html_e( 'Post Not Found', 'elan-wellness-spa' ); ?>

                </h2>

                <p class="text-gray-600">

                    <?php esc_html_e( 'The content you are looking for could not be found.', 'elan-wellness-spa' ); ?>

                </p>

            </div>

        <?php endif; ?>

    </div>

</section>

<?php
get_footer();