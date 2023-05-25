<?php
?>

<div class="contacts-wrapper">
    <div class="social-block contacts">
        <?php

        if (have_rows('social_network', 'option')):
            while (have_rows('social_network', 'option')) : the_row();
                $url_social = get_sub_field('url_social_network');
                $icon_social_header = get_sub_field('social_icon_header');
                $active_social = get_sub_field('active_social');

                if ($active_social == 'true'):
                    ?>
                    <a href="<?php echo $url_social; ?>" target="_blank" >
                        <img src="<?php echo $icon_social_header; ?>" alt="<?php echo $url_social; ?>">
                    </a>
                <?php
                endif;
            endwhile;
        endif;
        ?>
    </div>
    <div class="phone-btn">
        <?php $phone = get_field('phone_number', 'option'); ?>
        <a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>
    </div>

</div>
