<?php
/**
 * The template used for displaying page content in page.php
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> <?php aravan_article_schema( 'CreativeWork' ); ?>>
	<div class="inside-article">
		<?php
		/**
		 * aravan_before_content hook.
		 *
		 *
		 * @hooked aravan_featured_page_header_inside_single - 10
		 */
		do_action( 'aravan_before_content' );

		if ( aravan_show_title() ) : ?>

			<header class="entry-header">
				<?php the_title( '<h1 class="entry-title" itemprop="headline">', '</h1>' ); ?>
			</header><!-- .entry-header -->

		<?php endif;

		/**
		 * aravan_after_entry_header hook.
		 *
		 *
		 * @hooked aravan_post_image - 10
		 */
		do_action( 'aravan_after_entry_header' );
		?>

		<div class="entry-content" itemprop="text">
			<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'aravan' ),
				'after'  => '</div>',
			) );
			?>
		</div><!-- .entry-content -->

		<?php
		/**
		 * aravan_after_content hook.
		 *
		 */
		do_action( 'aravan_after_content' );
		?>
	</div><!-- .inside-article -->
</article><!-- #post-## -->
