<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package accountant
 */

get_header(); ?>
    <div class="error-404">
        <div class="accountant-404">
            <h1><?php esc_html_e( 'Такої сторінки не існує', 'accountant' ); ?></h1>
            <p><?php esc_html_e( 'На нашій сторінці поки що бракує того, що ви шукаєте.', 'accountant' ); ?></p>
            <p><?php esc_html_e( 'Ми постійно працюємо над новими послугами та новою інформацією. А поки що...', 'accountant' ); ?></p>
            <p class="accountant-404--home">
                <a href="<?php echo esc_url( get_home_url() ); ?>"><?php esc_html_e( 'Поверніться на головну або прочитайте статті нижче', 'accountant' ); ?></a>
            </p>
        </div>

        <div class="slider-main">
			<?php
			$args = array('posts_per_page' => 23);
			$lastposts = get_posts($args);
			get_template_part( 'template-parts/slick', 'slider', ['posts_slider' => $lastposts] );
			?>
        </div>
    </div><!-- .error-404 -->
<?php
get_footer();