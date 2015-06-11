<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WEN Associate
 */

get_header(); ?>

	<div id="primary" <?php wen_associate_content_class( 'content-area' ); ?> >
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || get_comments_number() ) :
                                                /* Turn off comments on pages.
                                                 * comments_template();
                                                 */
					endif;
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
/**
 * wen_associate_action_sidebar hook
 *
 * @hooked: wen_associate_add_sidebar - 10
 *
 */
do_action( 'wen_associate_action_sidebar' );?>

<?php get_footer(); ?>
