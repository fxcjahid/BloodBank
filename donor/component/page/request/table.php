<div class="donor-page"> 
		<div class="donation"> 
			<div class="donation-form">
				<div class="form-header">
					<div class="txt-center">
						<img class="cover" src="<?= $config['site']['url'] ?>assets/Images/brequest.png" width="300px" height="80px">
					</div>
				</div>

				<div class="donation-table">
				 	<table class="crazy-table"> 
						<thead>
							<tr>
								<th>Name</th>
								<th>Phone</th>
								<th>Date</th>
								<th>Description</th>
							</tr>
						</thead>
						<tbody>

							<?php while($view = $viewRequeste->fetch_object()): ?>
								<tr>
									<td>
										<?= $view->name ?>
									</td>
									<td>
										<?= $view->phone ?>
									</td>
									<td>
										<?= timeElapsed($view->create_at) ?>
									</td>  
									<td>
										<?= $view->message ?>
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