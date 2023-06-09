<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package gorilla
 */

get_header();
?>

<div id="otherpage" class="container">
    <div class="row">
	<main id="primary" class="site-main col-lg-9  col-xs-12 col-sm-12 col-md-9">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'gorilla' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'gorilla' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<div class="col-lg-3 col-xs-12 col-sm-12 col-md-3">
<?php
get_sidebar();

?>
</div>


</div>
</div>

<?php
get_footer();
