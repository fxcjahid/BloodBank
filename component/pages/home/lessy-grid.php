<div class="h_btm_bg min-h-auto">
	<div class="wrap">
		<section class="pt-80 pb-80 position-relative z-index-2 overflow-hidden">
			<div class="top-el-bg">
				<img src="<?= $config['site']['url'] ?>assets/Images/60fff77d8bf601627387773.png" alt="image">
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-6 txt-center">
					<div class="section-header mb-5">
						<h2 class="section-title">
							Avaiable Blood Donors
						</h2>
					</div>
				</div>
			</div>

			<div class="avaiable-blood-grid">
				
				<?php 
					/**
					 * Get Avaiable Blood Donors
					 */ 
					while($statistic = $donorsStatistics->fetch_object()):
				?>

					<div class="avaiable-blood-single has--link">
						<a href="search.php?group=<?= $statistic->id ?>" class="item--link">
						</a>
						<h6 class="avaiable-blood-single__name">
							<span class="icon material-symbols-outlined">
								water_drop
							</span><?= $statistic->name ?>
						</h6>
						<span class="avaiable-blood-single__amount">
							<?= $statistic->count ?>
						</span>
					</div> 
				
				<?php endwhile; ?>

			</div>
		</section>
	</div>
</div>