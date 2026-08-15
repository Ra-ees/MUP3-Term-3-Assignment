<?php
/**
 * Default Page Template
 *
 * @package Elan_Wellness_Spa
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main id="primary" class="site-main">

	<?php
	while ( have_posts() ) :
		the_post();
	?>

		<!-- Page Hero -->

		<section class="bg-primary text-white py-28">

			<div class="max-w-7xl mx-auto px-8">

				<h1 class="font-heading text-5xl mb-4">

					<?php the_title(); ?>

				</h1>

				<?php if ( has_excerpt() ) : ?>

					<p class="text-white/90 text-lg max-w-3xl">

						<?php the_excerpt(); ?>

					</p>

				<?php endif; ?>

			</div>

		</section>

		<!-- Page Content -->

		<section class="py-20 bg-background">

			<div class="max-w-5xl mx-auto px-8">

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<?php
					the_content();

					wp_link_pages(
						array(
							'before' => '<div class="page-links">',
							'after'  => '</div>',
						)
					);
					?>

				</article>

				<?php
				// Enable comments if desired.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}
				?>

			</div>

		</section>

	<?php endwhile; ?>

</main>

<?php
get_footer();