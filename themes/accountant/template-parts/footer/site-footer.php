<?php


$footer_logo = get_field('footer_logo', 'option');
?>

    <div class="footer-wrap">
        <div class="footer-container container">
            <div class="footer-contacts">
                <div class="social-block">
		            <?php

		            if (have_rows('social_network', 'option')):
			            while (have_rows('social_network', 'option')) : the_row();
				            $url_social = get_sub_field('url_social_network');
				            $icon_social = get_sub_field('social_icon_header');
				            $active_social = get_sub_field('active_social');

				            if ($active_social == 'true'):
					            ?>
                                <div class="social-block__img-shadow button-grow">
                                    <a href="<?php echo $url_social; ?>" target="_blank" >
                                        <img class="social-icon" src="<?php echo $icon_social; ?>" alt="<?php echo $url_social; ?>">
                                    </a>
                                </div>

				            <?php
				            endif;
			            endwhile;
		            endif;
		            ?>
                </div>
		        <?php $phone = get_field('phone_number', 'option'); ?>
                <a class="button-grow" href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>
            </div>
            <div class="title-footer-wrap">
                <h2 class="title-footer"><?php echo get_field('footer_title', 'option'); ?></h2>
            </div>
            <div class="site-logo">
                <div class="brand">
		            <?php if (has_custom_logo()) {
			            the_custom_logo();
		            } ?>
                </div>
            </div>
        </div>
    </div>

