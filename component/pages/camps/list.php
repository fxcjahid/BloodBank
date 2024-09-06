<div class="wrap request-post view-camps" id="item-group">
	<div class="request-post-badge">
		<img src="<?= $config['site']['url'] ?>assets/Images/camps.png" />
	</div>
	<div class="row">

		<?php while($camp = $camps->fetch_object()): ?>

		<div class="item">

			<a href="campgallery.php?cid=<?= $camp->id ?>">
				<h1 class="title">
					<?= $camp->title ?>
				</h1>
			</a>

			<a class="pop-image" href="./storage/camps/<?= $camp->image ?>"
				data-lightbox="image-1">
				<img src="./storage/camps/<?= $camp->image ?>" height="250px" width="460px" />
			</a>

			<ul class="donor-item">
				<li>
					<span class="icon material-symbols-outlined">
						location_city
					</span>
					City: <span class="text--base"><?= $camp->city ?></span>
				</li>
				<li>
					<span class="icon material-symbols-outlined">
						mode_of_travel
					</span>
					State : <span class="text--base"><?= $camp->state ?></span>
				</li>
				<li>
					<span class="icon material-symbols-outlined">
						leaderboard
					</span>
					Organised By : <span class="text--base"><?= $camp->organise ?></span>
				</li>
			</ul>

			<p class="description ellipsis">
				<?= $camp->description ?>
			</p>

			<a href="campgallery.php?cid=<?= $camp->id ?>" class="btn">
				View Camp Gallary
				<span class="material-symbols-outlined">
					navigate_next
				</span>
			</a>
		</div>
		<?php endwhile; ?>
	</div>
</div>