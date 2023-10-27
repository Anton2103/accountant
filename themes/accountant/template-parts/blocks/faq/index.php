<?php
global $post;
$faq_posts = get_field('faq_list');
if ($faq_posts): ?>
    <div class="block-faq">
        <div class="accordion">
            <?php foreach ($faq_posts as $post):
                setup_postdata($post); ?>
                <div class="accordion-item">
                    <div class="accordion-title">
                        <p class="accordion-title-text"><?php the_title(); ?></p>
                        <div>
                            <span class="ic-icon ic-icon-plus material-symbols-outlined">add</span>
                            <span class="ic-icon ic-icon-minus material-symbols-outlined">remove</span>
                        </div>
                    </div>
                    <div class="accordion-content"><?php the_content(); ?></div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <?php wp_reset_postdata();
endif; ?>
