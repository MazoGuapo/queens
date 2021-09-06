<?php
$before = get_sub_field('before');
$after = get_sub_field('after');
$options = get_sub_field('opciones');
$content = get_sub_field('contenido');
?>

<div class="module module-block-top module_before_after bg-<?php echo $options['bg_color']; ?> flex items-center flex-col">

  <!-- CONTENIDOS -->
  <div class="wrapper_content ipad:pb-40 pb-20 flex flex-col <?php echo $align_text; ?> <?php echo $align['horizontal_title']; ?>  items-center text-center  w-2/5">

  <?php if($content['sobretitulo']) { ?>
      <div class="surtitle">
          <p class="font-primary text-secondary italic"><?php echo $content['sobretitulo']; ?></p>
      </div>
  <?php } ?>

  <?php if($content['titulo']) { ?>
      <div class="title">
          <p class="ipad:text-<?php echo $content['tamano_titulo']; ?> text-h3 font-primary font-thin">
              <?php echo $content['titulo']; ?>
          </p>
      </div>
  <?php } ?>

  <?php if($content['subtitulo']) { ?>
      <div class="subtitle pb-16">
          <p class="text-white"><?php echo $content['subtitulo']; ?></p>
      </div>
  <?php } ?>

  <?php if($content['cuerpo']) { ?>
  <div class="body">
      <p class=""><?php echo $content['cuerpo']; ?></p>
  </div>
  <?php } ?>

  </div>


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