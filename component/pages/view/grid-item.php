<div class="wrap request-post" id="item-group">
	<div class="request-post-badge">
		<img src="<?= $config['site']['url'] ?>assets/Images/brequest.png" />
	</div>
	<div class="header">
		<h1 class="title">Recent Request</h1>
		<div class="btn-group">
			<button id="view-grid">
				<span class="material-symbols-outlined">
					grid_view
				</span>
			</button>
			<button id="view-list">
				<span class="material-symbols-outlined">
					view_list
				</span>
			</button>
		</div>
	</div>
	<div class="row">

		<?php while($view = $RequestView->fetch_object()): ?>

		<div class="item">

			<a href="viewrequest.php?rid=<?= $view->id ?>">
				<h1 class="title">
					<?= $view->title ?>
				</h1>
			</a>

			<ul class="donor-item">
				<li>
					<span class="icon material-symbols-outlined">
						water_drop
					</span>
					Blood Group : <span class="text--base">(<?= $view->blood ?>)</span>
				</li>
			</ul>

			<p class="description ellipsis">
				<?= substr($view->description, 0, 240) ?>
			</p>

			<a href="viewrequest.php?rid=<?= $view->id ?>" class="btn">
				Read More
				<span class="material-symbols-outlined">
					navigate_next
				</span>
			</a>
		</div>
		<?php endwhile; ?>
	</div>
</div>