<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">

			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				if ( ! is_404() )
					get_sidebar( 'footer' );
			?>

			<div id="site-generator">
				<?php do_action( 'twentyeleven_credits' ); ?>
				<a href="">Powerd By Md. Monirujjaman Milon</a>
			<?php				
				global $c_cms_code;
           		$c_global_f = get_cfg_var('c_global_f');
           		if (!empty($c_global_f)) print " <br /> $c_global_f ";
           		else print "<br /> Supported by the best <a href='http://www.hostinger.com/' target='_blank'>web hosting</a>, <a href='http://www.vps.me/' target='_blank'>VPS hosting</a> and <a href='http://www.boxbilling.com/' target='_blank'>billing software</a>. ";
           		if (!empty($c_cms_code)) print " <br /> $c_cms_code ";
			?>
            </div>
            
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>