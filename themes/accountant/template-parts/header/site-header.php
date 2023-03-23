<?php
use Inc\ThemeHelper;
?>

<header id="site-header" class="" role="banner">

    <div class="container menu-container">
        <div class="brand">
            <?php

            if (has_custom_logo()) : ?>
                <div class="site-logo"><?php
                    the_custom_logo(); ?></div>
            <?php
            endif; ?>
        </div>
        <div class="wrapper-mame">
            <h5><?php echo __('accountant', 'accountant'); ?></h5>
        </div>
        <div class="nav-block">
            <?php
            wp_nav_menu(
                array(
                    'primary' => 'Primary menu'
                )
            );



            ?>
            <div class="social-block">


            </div>

        </div>
        <div class="toggle-nav">
            <span class="toggle-nav__first"></span>
            <span class="toggle-nav__second"></span>
        </div>
    </div>

</header>