<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Amphibious
 */

get_header(); ?>

	<div class="site-content-inside">
		<div class="container">
			<div class="row">

				<div id="primary" class="content-area <?php amphibious_layout_class( 'content' ); ?>">
					<main id="main" class="site-main">

						<div id="post-wrapper" class="post-wrapper post-wrapper-single post-wrapper-single-post">
						<?php /* Start the Loop */ ?>
						<?php while ( have_posts() ) : the_post(); ?>

							<?php get_template_part( 'template-parts/content', 'single' ); ?>

							<?php
							if ( amphibious_mod( 'amphibious_single_co_author_bio' ) ) :
								get_template_part( 'template-parts/author' );
							endif;
							?>

							<?php amphibious_the_post_pagination(); ?>

							<?php
								// If comments are open or we have at least one comment, load up the comment template
								if ( comments_open() || '0' != get_comments_number() ) :
									comments_template();
								endif;
							?>

						<?php endwhile; // end of the loop. ?>
						</div><!-- .post-wrapper -->

					</main><!-- #main -->
				</div><!-- #primary -->

				<?php get_sidebar(); ?>

			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- .site-content-inside -->

<?php get_footer(); ?>
