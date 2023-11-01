<?php

$posts_slider = get_field('posts_slider');
?>

<div class="slider-main">
	<?php get_template_part( 'template-parts/slick', 'slider', ['posts_slider' => $posts_slider]  ); ?>
</div>
