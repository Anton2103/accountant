<?php
/**
 * The template for displaying single project posts.
 *
 * @package accountant
 */

get_header(); ?>

    <div class="projects-single-wrapper">
        <h1><?php echo esc_html( get_the_title() ); ?></h1>
        <div class="projects-single-content"><?php the_content(); ?></div>

        <div class="wrapper-author">
            <picture class="img-author">
				<?php echo get_avatar( get_the_author_meta('ID'), 167 ); ?>
            </picture>
            <div class="wrap-about-author">
                <h3><?php echo esc_html( get_the_author_meta('user_firstname') ); ?></h3>
                <p><?php echo esc_html( get_the_author_meta('position') ); ?></p>
                <p><?php echo esc_html( get_the_author_meta('user_description') ); ?></p>
                <button><?php esc_html_e( 'Read full bio', 'accountant' ); ?></button>
            </div>
        </div>
    </div>

<?php get_footer(); ?>