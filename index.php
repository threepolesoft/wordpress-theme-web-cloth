<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 */

get_header(); ?>
<div id="main">


<div id="sidebar">
<?php get_sidebar();?>
</div>

<div class="slider">


</div>
		
<div class="postbox">

	<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
	<div class="recent-post">
	
	
	<div class="title"><?php the_title( sprintf( '<h1><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?></div>
	
		<header class="entry-header">
			<?php if ( is_sticky() ) : ?>
				<hgroup>
					<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
					<h3 class="entry-format"><?php _e( 'Featured', 'twentyeleven' ); ?></h3>
				</hgroup>
			<?php else : ?>
			<?php endif; ?>

			<?php if ( 'post' == get_post_type() ) : ?>
			<?php endif; ?>

			<?php if ( comments_open() && ! post_password_required() ) : ?>
			<div class="comments-link">
				<?php comments_popup_link( '<span class="leave-reply">' . __( 'Reply', 'twentyeleven' ) . '</span>', _x( '1', 'comments number', 'twentyeleven' ), _x( '%', 'comments number', 'twentyeleven' ) ); ?>
			</div>
			<?php endif; ?>
		</header>

	<?php
	// Recent post thumbnail.

	if ( has_post_thumbnail() ) {the_post_thumbnail( 'thumbnail' );}else {echo '<img width="100" height="75" src="' . get_bloginfo( 'template_url' ) . '/images/no-thumbnail-110x75.png" class="attachment-thumbnail wp-post-image" alt="No image" />';} ?>	
	
	<div class="post-content">
	<?php echo wp_trim_words( get_the_content(),50, ' <a href="'. get_permalink($post->ID) . '">Read More</a>' ); ?>
	</div>
	
	<div class="post-info">
		<li>
			<?php _e( 'Posted By', 'BD Blog' 	); ?> :  <?php the_author_posts_link(); ?>
		</li>
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
		<li>
			<?php edit_post_link( __( 'Edit', 'twentyeleven' ), '<span class="edit-link">', '</span>' ); ?>
		</li>
	</div>	
	

</div>

<?php endwhile; ?>
<?php endif; ?>
			 

<?php the_posts_pagination( array(
'prev_text'          => __( 'Previous', 'twentysixteen' ),
'next_text'          => __( 'Next', 'twentysixteen' ),
'before_page_number' => __( '', 'twentysixteen' ),
) ); ?> 

			

</div>

</div>

<?php get_footer(); ?>