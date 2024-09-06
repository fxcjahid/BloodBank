<div class="wrap donors-post" id="item-group"> 
	<div class="info">
		Showing results in <?= $donorCount ?> Donors
	</div>
	<div class="row"> 
		<?php while($view = $donors->fetch_object()): ?>
			<div class="item">

				<a href="donor-view.php?did=<?= $view->id ?>">
					<h1 class="title">
						<?= $view->name ?>
					</h1>
				</a>

				<ul class="donor-item">
					<li>
						<span class="icon material-symbols-outlined">
							water_drop
						</span>
						Blood Group : <span class="text--base"><?= $view->blood ?></span>
					</li>
					<li>
						<span class="icon material-symbols-outlined">
							water_drop
						</span>
						Location : <span class="text--base">
							<?= $view->city ?>
						</span>
					</li>
					<li>
						<span class="icon material-symbols-outlined">
							water_drop
						</span>
						Last Donate : <span class="text--base"><?= $view->last_donate ?></span>
					</li>
					<li>
						<span class="icon material-symbols-outlined">
							water_drop
						</span>
						Total Donate : <span class="text--base"><?= $view->total ?></span>
					</li>
				</ul> 

				<a href="donor-view.php?did=<?= $view->id ?>" class="btn">
					Read More
					<span class="material-symbols-outlined">
						navigate_next
					</span>
				</a>
			</div>
		<?php endwhile; ?>

		<?php if($donors->num_rows === 0): ?>
			<div class="noting txt-center">
				<h1> No Data Found</h1>
			</div>
		<?php endif; ?>
	</div>
</div>