<?php
/**
 * The default template for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

		
		<?php
			if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
			endif;
		?>
		
		<div class="category-archive-thumbnail">
		<?php if ( has_post_thumbnail() ) {the_post_thumbnail( 'thumbnail' );}else {echo '<img width="100" height="75" src="' . get_bloginfo( 'template_url' ) . '/images/no-thumbnail-110x75.png" class="attachment-thumbnail wp-post-image" alt="No image" />';} ?>
		</div>
<div class="post-content">
<?php echo wp_trim_words( get_the_content(),50, ' <a href="'. get_permalink($post->ID) . '">Read More</a>' ); ?>
</div>	
<div class="post-info">
	<li>
		<?php _e( 'Category', 'BD Blog' ); ?> : <?php the_category(',');?>
	</li>
	<li>
		<?php _e( 'Comment ', 'BD Blog' ); ?> :<?php comments_popup_link( '<span class="leave-reply">' . __( ' Leave a reply', 'BD Blog' ) . '</span>', __( '1 Reply', 'BD Blog' ), __( '% Replies', 'BD Blog' ) ); ?>
	</li>
	<li>
		<?php _e( 'Posted Date', 'BD Blog' ); ?> : <?php the_time( get_option( 'date_format' ) ); ?>
	</li>	
	<li>
		<?php echo __('Posted Time : ').human_time_diff(get_the_time('U'), current_time('timestamp')) . __(' ago', 'BD Blog'); ?>
	</li>
</div>
