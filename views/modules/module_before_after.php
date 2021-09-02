<?php
$before = get_sub_field('before');
$after = get_sub_field('after');
?>

<div class="module module-block module_before_after">

  <div class="wrapper_before">

      <div class="images">
        <span class="text-white flex items-center text-h5"><img class="mr-4" src="<?php bloginfo('template_url') ?>/src/assets/images/icon_play.png" alt=""><?php echo $before['titulo'] ?></span>
        <img class="imagen img-1" src="<?php echo $before['imagen']['sizes']['theme_xlarge'] ?>" alt="">
        <div class="imagen img-2" style="background-image: url(<?php echo $after['imagen']['sizes']['theme_xlarge'] ?>)">
          <span class="text-white flex items-center text-h5"><img class="mr-4" src="<?php bloginfo('template_url') ?>/src/assets/images/icon_play.png" alt=""><?php echo $after['titulo'] ?></span>
        </div>
      </div>

      <div class="slider">
        <div class="drag-line">
          <span></span>
        </div>
        <input type="range" min="0" max="100" value="50">
      </div>
  </div>

</div>