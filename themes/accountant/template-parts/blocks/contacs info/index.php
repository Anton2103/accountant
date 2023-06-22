<?php
?>

<div class="contacts-wrapper">

    <div class="phone-contacts">
        <div class="socials__text">
            <?php $phone = get_field('phone_number', 'option'); ?>
            <?php $phone_name = get_field('phone_name', 'option'); ?>
            <p class="socials__header">Зателефонуйте</p>
            <p class="socials__context phone-name"><?php echo $phone_name; ?></p>
        </div>

        <div class="socials__link">
            <span><?php echo $phone; ?></span>
            <a href="tel:<?php echo $phone; ?>"></a>
        </div>
    </div>

    <div class="socials-contacts">
	    <?php
            if (have_rows('social_network', 'option')):
                while (have_rows('social_network', 'option')) : the_row();
                    $url_social = get_sub_field('url_social_network');
                    $social_icon_footer = get_sub_field('social_icon_footer');
                    $active_social = get_sub_field('active_social');
                    $social_name = get_sub_field('social_name');
                    $social_context = get_sub_field('social_context');

                    if ($active_social == 'true'):
                        ?>
                        <div class="socials__text">
                            <p class="socials__header"><?php echo $social_name ?></p>
                            <p class="socials__context" ><?php echo $social_context?></p>
                        </div>
                        <div class="socials__link">
                            <img src="<?php echo $social_icon_footer; ?>" alt="<?php echo $url_social; ?>">
                            <span><?php echo  $social_name; ?></span>
                            <a href="<?php echo $url_social; ?>" target="_blank"> </a>
                        </div>
                    <?php
                    endif;
                endwhile;
            endif;
	    ?>
    </div>


</div>
