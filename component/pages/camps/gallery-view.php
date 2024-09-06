<div class="camps-gallery-view">
	<div class="wrap">
		<div class="gallery-image-top">
			<img src="<?= $config['site']['url'] ?>assets/Images/gallery.png" height="80px">
		</div>

		<div class="wrap">

			<?php $campsOnly = $campsOnly->fetch_object() ?>

			<div class="capm-title">
				<h1>
					<?= $campsOnly->title ?>
				</h1>
			</div>
			<div class="capm-description">
				<p>
					<?= $campsOnly->description ?>
				</p>
			</div>
		</div>
		<div class="camp-gallery-imager">

			<div class="gallery">

				<?php while($camp = $campsGallery->fetch_object()): ?>

				<a href="./storage/camps/<?= $camp->image ?>" class="gallery-item"
					data-lightbox="roadtrip">
					<img class="gallery-image" src="./storage/camps/<?= $camp->image ?>">
				</a>

				<?php endwhile; ?>


			</div>

		</div>
	</div>