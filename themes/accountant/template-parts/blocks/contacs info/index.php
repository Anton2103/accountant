<?php
/**
 * Contacts Info Block Template
 *
 * @package accountant
 */

$phone = get_field('phone_number', 'option');
$phone_name = get_field('phone_name', 'option');
?>

<div class="contacts-wrapper">

    <div class="phone-contacts">
        <div class="socials__text">
            <p class="socials__header"><?php esc_html_e( 'Зателефонуйте', 'accountant' ); ?></p>
			<?php if ( $phone_name ) : ?>
                <p class="socials__context phone-name"><?php echo esc_html( $phone_name ); ?></p>
			<?php endif; ?>
        </div>

		<?php if ( $phone ) : ?>
            <div class="socials__link button-grow">
                <span><?php echo esc_html( $phone ); ?></span>
                <a class="button-grow" href="tel:<?php echo esc_attr( preg_replace( '/[^0-9+]/', '', $phone ) ); ?>" aria-label="<?php esc_attr_e( 'Зателефонуйте', 'accountant' ); ?>"></a>
            </div>
		<?php endif; ?>
    </div>

    <div class="socials-contacts">
		<?php
		if ( have_rows( 'social_network', 'option' ) ) :
			while ( have_rows( 'social_network', 'option' ) ) : the_row();
				$url_social = get_sub_field( 'url_social_network' );
				$social_icon = get_sub_field( 'social_icon_header' );
				$active_social = get_sub_field( 'active_social' );
				$social_name = get_sub_field( 'social_name' );
				$social_context = get_sub_field( 'social_context' );

				if ( $active_social === 'true' || $active_social === true ) :
					?>
                    <div class="socials__text">
						<?php if ( $social_name ) : ?>
                            <p class="socials__header"><?php echo esc_html( $social_name ); ?></p>
						<?php endif; ?>
						<?php if ( $social_context ) : ?>
                            <p class="socials__context"><?php echo esc_html( $social_context ); ?></p>
						<?php endif; ?>
                    </div>
                    <div class="socials__link button-grow">
						<?php if ( $social_icon ) : ?>
                            <img class="social-icon" src="<?php echo esc_url( $social_icon ); ?>" alt="<?php echo esc_attr( $social_name ); ?>">
						<?php endif; ?>
                        <span><?php echo esc_html( $social_name ); ?></span>
						<?php if ( $url_social ) : ?>
                            <a href="<?php echo esc_url( $url_social ); ?>" aria-label="<?php echo esc_attr( $social_name ); ?>" target="_blank" rel="noopener noreferrer"></a>
						<?php endif; ?>
                    </div>
				<?php
				endif;
			endwhile;
		endif;
		?>
    </div>

</div>