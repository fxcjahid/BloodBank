<div class="donor-page"> 
		<div class="donation"> 
			<div class="donation-form">
				<div class="form-header">
					<div class="txt-center">
						<img class="cover" src="<?= $config['site']['url'] ?>assets/Images/viewdonation.png" width="300px" height="80px">
					</div>
				</div>

				<div class="donation-table">
				 	<table class="crazy-table"> 
						<thead>
							<tr>
								<th>Camp Name</th>
								<th>Unit / Bag</th>
								<th>Date</th>
								<th>Description</th>
							</tr>
						</thead>
						<tbody>

							<?php while($view = $viewDonations->fetch_object()): ?>
								<tr>
									<td>
										<?= $view->name ?>
									</td>
									<td>
										<?= $view->units ?>
									</td>
									<td>
										<?= $view->donate_date ?>
									</td>  
									<td>
										<?= $view->description ?>
									</td>
								</tr> 
							<?php endwhile; ?>
						</tbody>
					</table>
				 </div>
			</div>
		</div>
	</div>

   <!--End Layout-->
 </div>
</div>