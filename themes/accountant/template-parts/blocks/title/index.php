<?php

$title_image = get_field('title_image');



?>

<div class="title-block-wrap">
    <img src="<?php echo $title_image['url']; ?>" alt="<?php echo $title_image['name']; ?>">
</div>
