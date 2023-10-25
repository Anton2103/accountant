<?php
$face_mobile = get_field('face_mobile', 'option');
?>

<div class="contacts-wrapper">
    <div class="face-mob">
        <img src="<?php echo $face_mobile ?>" alt="">
    </div>
    <div class="social-block contacts">
		<?php

		if (have_rows('social_network', 'option')):
			while (have_rows('social_network', 'option')) : the_row();
				$url_social         = get_sub_field('url_social_network');
				$icon_social_header = get_sub_field('social_icon_header');
				$active_social      = get_sub_field('active_social');

				if ($active_social == 'true'):
					?>
                    <div class="social-block__img-shadow button-grow">
                        <a href="<?php
						echo $url_social; ?>" target="_blank">
                            <img src="<?php
							echo $icon_social_header; ?>" alt="<?php
							echo $url_social; ?>">
                        </a>
                    </div>
				<?php
				endif;
			endwhile;
		endif;
		?>
    </div>
    <div class="phone-btn button-grow">
		<?php
		$phone = get_field('phone_number', 'option'); ?>
        <a class="button-grow" href="tel:<?php
		echo $phone; ?>"><?php
			echo $phone; ?></a>
    </div>
</div>
<div class="user-name">
    <?php
    $phone_name = get_field('phone_name', 'option');
    ?>
    <p><?php echo $phone_name; ?></p>
</div>
