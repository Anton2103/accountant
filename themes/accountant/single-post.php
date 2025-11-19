<?php
/**
 * The template for displaying single blog posts.
 *
 * @package accountant
 */

get_header(); ?>

    <div class="blog-wrapper">
        <h1><?php echo esc_html( get_the_title() ); ?></h1>
        <div class="blog-content"><?php the_content(); ?></div>

		<?php
		$args = array('posts_per_page' => 23);
		$lastposts = get_posts($args);
		?>
        <div class="blog-slider">
			<?php
			get_template_part( 'template-parts/slick', 'slider', ['posts_slider' => $lastposts] );
			?>
        </div>
    </div>

<?php get_footer(); ?>