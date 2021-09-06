<?php
$expand = get_sub_field('expandible');
?>


<div class="module-gallery-expand">
    <?php $n = 1; foreach ($expand['categorias'] as $cat) {  ?>
        <a
        data-gallery="expand_lg_open_<?php echo $n ?>"
        class="button_lg module-gallery-expand-item flex justify-center items-end"
        style="background-image: url(<?php echo $cat['galeria'][0]['sizes']['theme_xlarge']; ?>)">
            <p class="font-primary text-h3 ipad:text-h1 text-white mb-8 ipad:mb-16"><?php echo $cat['titulo']?></p>
        </a>
    <?php $n++;  } ?>
</div>

<?php $n = 1; foreach ($expand['categorias'] as $cat) {  ?>
    <div class="gallery_lg" id="expand_lg_open_<?php echo $n ?>">
        <?php foreach ($cat['galeria'] as $imagen) { ?>
            <div class="gallery_lg_item"  data-src="<?php echo $imagen['sizes']['theme_xlarge'] ?>"></div>
        <?php } ?>
    </div>
<?php $n++;  } ?>
