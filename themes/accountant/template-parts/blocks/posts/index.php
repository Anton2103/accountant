<?php

$posts_slider = get_field('posts_slider');
get_template_part( 'template-parts/slick-slider', '', ['posts_slider' => $posts_slider]  );