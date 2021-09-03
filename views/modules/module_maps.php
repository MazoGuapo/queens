<?php
    $direccion_inicial = get_sub_field('direccion_inicial');
	$filtros = get_sub_field('filters');
?>
<section class="module module_maps">

	<div class="map">
		<!-- MAPA -->
		<div class="acf-map" data-initial-icon="<?php bloginfo('template_url'); ?>/src/assets/images/marker_main.png">
			<div class="marker marker-fixed" data-type="fixed" data-marker-image="<?php bloginfo( 'template_url' ); ?>/src/assets/images/marker_main.png" data-marker-image-hover="<?php bloginfo( 'template_url' ); ?>/src/assets/images/marker_main.png" data-lat="<?php echo $direccion_inicial['lat']; ?>" data-lng="<?php echo $direccion_inicial['lng']; ?>"></div>
			<?php
			foreach ($filtros as $filter) {
				foreach ( $filter['localizaciones'] as $loc ) { ?>
					<div class="marker" data-type="<?php echo slugify($filter['titulo']); ?>" data-marker-image="<?php bloginfo( 'template_url' ); ?>/src/assets/images/marker.png" data-marker-image-hover="<?php bloginfo( 'template_url' ); ?>/src/assets/images/marker.png" data-lat="<?php echo $loc['direccion']['lat']; ?>" data-lng="<?php echo $loc['direccion']['lng']; ?>">
						<div class="marker-content">
							<!-- TITULO -->
							<div class="map_title">
								<p class="text-h7 text-primary "><?php echo $loc['titulo']; ?></p>
							</div>
							<hr>
							<!-- DISTANCIA -->
							<div class="map_distance">
								<p class="distance text-h7 text-primary"><?php echo $loc[ 'distancia']; ?>' desde Queens</p>
							</div>
						</div>
					</div>
				<?php } ?>
			<?php } ?>
		</div>
	</div>

	<div class="map-filters">
		<ul>
			<?php foreach ($filtros as $filtro) { ?>
				<li class="map-filter-item" id="map-filter-<?php echo slugify($filtro['titulo']);?>" data-filter="<?php echo slugify($filtro['titulo']);?>">
					<span><?php echo $filtro['titulo']; ?></span>
				</li>
			<?php } ?>
		</ul>
	</div>

</section>