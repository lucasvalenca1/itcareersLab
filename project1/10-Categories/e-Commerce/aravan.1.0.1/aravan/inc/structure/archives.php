<?php
/**
 * Archive elements.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'aravan_archive_title' ) ) {
	add_action( 'aravan_archive_title', 'aravan_archive_title' );
	/**
	 * Build the archive title
	 *
	 */
	function aravan_archive_title() { ?>
		<header class="page-header<?php if ( is_author() ) echo ' clearfix';?>">
			<?php
			/**
			 * aravan_before_archive_title hook.
			 *
			 */
			do_action( 'aravan_before_archive_title' );
			?>

			<h1 class="page-title">
				<?php the_archive_title(); ?>
			</h1>

			<?php
			/**
			 * aravan_after_archive_title hook.
			 *
			 */
			do_action( 'aravan_after_archive_title' );

			// Show an optional term description.
			$term_description = term_description();
			if ( ! empty( $term_description ) ) {
				printf( '<div class="taxonomy-description">%s</div>', esc_html( $term_description ) ); // WPCS: XSS ok, sanitization ok.
			}

			if ( get_the_author_meta( 'description' ) && is_author() ) {
				echo '<div class="author-info">' . get_the_author_meta( 'description' ) . '</div>'; // WPCS: XSS ok, sanitization ok.
			}

			/**
			 * aravan_after_archive_description hook.
			 *
			 */
			do_action( 'aravan_after_archive_description' ); ?>
		</header><!-- .page-header -->
		<?php
	}
}

if ( ! function_exists( 'aravan_filter_the_archive_title' ) ) {
	add_filter( 'get_the_archive_title', 'aravan_filter_the_archive_title' );
	/**
	 * Alter the_archive_title() function to match our original archive title function
	 *
	 *
	 * @param string $title The archive title
	 * @return string The altered archive title
	 */
	function aravan_filter_the_archive_title( $title ) {
		if ( is_category() ) {
			$title = single_cat_title( '', false );
		} elseif ( is_tag() ) {
			$title = single_tag_title( '', false );
		} elseif ( is_author() ) {
			/*
			 * Queue the first post, that way we know
			 * what author we're dealing with (if that is the case).
			 */
			the_post();
			$title = sprintf( '%1$s<span class="vcard">%2$s</span>',
				get_avatar( get_the_author_meta( 'ID' ), 75 ),
				get_the_author()
			);
			/*
			 * Since we called the_post() above, we need to
			 * rewind the loop back to the beginning that way
			 * we can run the loop properly, in full.
			 */
			rewind_posts();
		}

		return $title;

	}
}
