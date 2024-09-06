<div class="content-wrap">
	<div class="h_btm_bg height-full">
		<div class="wrap">
			<section class="position-relative">

				<?php 
					/**
					 * Get Avaiable Statitics
					 */ 
					$donorList = $donorsList->fetch_object(); 
					$requestList = $requestedList->fetch_object(); 
					$campList = $campsList->fetch_object(); 
				?>
				<div class="row justify-content-center">
					<div class="col-lg-6 txt-center mt-10">
						<div class="section-header mb-5 m-xy-2.5rem">
							<h2 class="section-title-medium">
								Dashboard
							</h2>
						</div>
					</div>
				</div>

				<div class="dashboard-3grid mt-10"> 
					<div class="dashboard-row" data-icon="&#xe798;">
						<a href="user.php" class="item--link"></a>
						<h6 class="dashboard-row__name">
							<span class="icon material-symbols-outlined">
								water_drop
							</span>
							<?= $donorList->total ?>
						</h6>
						<span class="dashboard-row-caption">
							Total Donor
						</span>
					</div> 
					
					<div class="dashboard-row" data-icon="&#xe7e2;">
						<a href="request.php" class="item--link"></a>
						<h6 class="dashboard-row__name">
							<span class="icon material-symbols-outlined">
								switch_access_shortcut_add
							</span>
							<?= $requestList->total ?>
						</h6>
						<span class="dashboard-row-caption">
							Total Request
						</span>
					</div> 
					
					<div class="dashboard-row" data-icon="&#xf8d9;">
						<a href="camp.php" class="item--link"></a>
						<h6 class="dashboard-row__name">
							<span class="icon material-symbols-outlined">
								diversity_3
							</span>
							<?= $campList->total ?>
						</h6>
						<span class="dashboard-row-caption">
							Total Camps
						</span>
					</div> 
				</div>
			</section> 
		</div>
	</div>
</div>