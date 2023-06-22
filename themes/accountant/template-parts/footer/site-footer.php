<?php


$footer_logo = get_field('footer_logo', 'option');
?>

    <div class="footer-container">
        <div class="footer-inf">
            <div class="privacy-policy">
                <span>privacy-policy</span>
                <a href="<?php echo do_shortcode('[privacy]')?>" target="_blank" ></a>
            </div>
            <span>Copyright ©2023. All rights reserved.</span>
        </div>
        <div class="site-logo">
            <img src="<?php echo $footer_logo; ?>" alt="">
        </div>
    </div>

