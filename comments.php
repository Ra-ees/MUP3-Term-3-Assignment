<?php
/**
 * Comments Template
 *
 * @package Elan_Wellness_Spa
 */

if ( post_password_required() ) {
    return;
}
?>

<div id="comments" class="mt-20">

    <?php if ( have_comments() ) : ?>

        <h2 class="font-heading text-4xl mb-10">

            <?php
            printf(
                esc_html(
                    _nx(
                        '%1$s Comment',
                        '%1$s Comments',
                        get_comments_number(),
                        'comments title',
                        'elan-wellness-spa'
                    )
                ),
                number_format_i18n( get_comments_number() )
            );
            ?>

        </h2>

        <ol class="space-y-8">

            <?php
            wp_list_comments(
                array(
                    'style'      => 'ol',
                    'short_ping' => true,
                    'avatar_size'=> 70,
                )
            );
            ?>

        </ol>

        <?php the_comments_navigation(); ?>

    <?php endif; ?>

    <?php if ( ! comments_open() && get_comments_number() ) : ?>

        <p class="mt-8 text-gray-600">

            <?php esc_html_e( 'Comments are closed.', 'elan-wellness-spa' ); ?>

        </p>

    <?php endif; ?>

    <div class="mt-16 bg-white rounded-3xl shadow-xl p-10">

        <?php

        comment_form(
            array(

                'title_reply' => esc_html__( 'Leave a Comment', 'elan-wellness-spa' ),

                'class_submit' =>
                    'bg-secondary hover:bg-primary transition duration-300 text-white px-8 py-4 rounded-full cursor-pointer',

                'comment_field' => '
                    <p class="comment-form-comment mb-6">
                        <label for="comment" class="block mb-2 font-semibold">'
                        . esc_html__( 'Comment', 'elan-wellness-spa' ) .
                        '</label>
                        <textarea id="comment"
                                  name="comment"
                                  rows="6"
                                  required
                                  class="w-full border border-gray-300 rounded-xl px-5 py-4 focus:outline-none focus:ring-2 focus:ring-secondary"></textarea>
                    </p>',

                'fields' => array(

                    'author' => '
                        <p class="comment-form-author mb-6">
                            <label for="author" class="block mb-2 font-semibold">'
                            . esc_html__( 'Name', 'elan-wellness-spa' ) .
                            '</label>
                            <input id="author"
                                   name="author"
                                   type="text"
                                   required
                                   class="w-full border border-gray-300 rounded-xl px-5 py-4 focus:outline-none focus:ring-2 focus:ring-secondary">
                        </p>',

                    'email' => '
                        <p class="comment-form-email mb-6">
                            <label for="email" class="block mb-2 font-semibold">'
                            . esc_html__( 'Email', 'elan-wellness-spa' ) .
                            '</label>
                            <input id="email"
                                   name="email"
                                   type="email"
                                   required
                                   class="w-full border border-gray-300 rounded-xl px-5 py-4 focus:outline-none focus:ring-2 focus:ring-secondary">
                        </p>',

                    'url' => '
                        <p class="comment-form-url mb-6">
                            <label for="url" class="block mb-2 font-semibold">'
                            . esc_html__( 'Website', 'elan-wellness-spa' ) .
                            '</label>
                            <input id="url"
                                   name="url"
                                   type="url"
                                   class="w-full border border-gray-300 rounded-xl px-5 py-4 focus:outline-none focus:ring-2 focus:ring-secondary">
                        </p>',
                ),

            )
        );

        ?>

    </div>

</div>