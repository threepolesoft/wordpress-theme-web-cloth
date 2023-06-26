<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>


<div class="single-postbox">
	<div class="recent-post">
		<div class="post-content">
			<div class="title">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</div>
			<?php if ( has_post_thumbnail() ) {the_post_thumbnail( 'thumbnail' );}else {echo '<img width="100" height="75" src="' . get_bloginfo( 'template_url' ) . '/images/no-thumbnail-110x75.png"  alt="No image" />';} ?>
		<?php while ( have_posts() ) : the_post();?>
		<?php the_content();?>
		</div>
				<?php if ( '' !== get_the_author_meta( 'description' ) ) {
				get_template_part( 'template-parts/biography' );
			}
		?>
	
	<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

			if ( is_singular( 'attachment' ) ) {

			} elseif ( is_singular( 'post' ) ) {
				// Previous/next post navigation.
				the_post_navigation( array(
					'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentysixteen' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Post:', 'twentysixteen' ) . '</span> ' .
						'<span class="post-title">%title</span>',
					'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentysixteen' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Post:', 'twentysixteen' ) . '</span> ' .
						'<span class="post-title">%title</span>',
				) );
			};?>

	<?php endwhile;?>

	</div>
</div>
</div>



<?php get_footer();?>