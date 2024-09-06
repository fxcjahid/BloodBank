<div class="content-wrap">
	<div class="h_btm_bg height-full">
		<div class="wrap">
			<section class="position-relative">
				
				<div class="row justify-content-center">
					<div class="col-lg-6 txt-center">
						<div class="section-header mb-5 m-xy-2.5rem">
							<h2 class="section-title-medium">
								Manage Blood Group
							</h2>
						</div>
					</div>
				</div>

				<div class="dashboard-4grid"> 
					<?php 
						/**
						 * Get Avaiable Blood Group
						 */ 
						while($group = $bloodGroup->fetch_object()):
					?>
						<div class="dashboard-row" data-icon="&#xe798;">
							<a href="" class="item--link"></a>
							<h6 class="dashboard-row__name">
								<span class="icon material-symbols-outlined">
									water_drop
								</span>
								<?= $group->count ?>
							</h6>
							<span class="dashboard-row-caption">
								<?= $group->name ?>
							</span>
						</div>  
					<?php endwhile; ?> 
				</div>
			</section>
		</div>
	</div>
</div>