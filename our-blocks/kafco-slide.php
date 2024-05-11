<?php

if (!empty($attributes['themeimage'])) {
  $attributes['imgURL'] = get_theme_file_uri('/images/' . $attributes['themeimage']);
}

if (!isset($attributes['imgURL'])) {
  $attributes['imgURL'] = get_theme_file_uri('/images/library-hero.jpg');
}

?>

<div class="swiper-slide">
       <?php echo $content; ?>
</div>