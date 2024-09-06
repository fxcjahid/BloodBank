<div class="content-wrap">
	<div class="h_btm_bg">
		<div class="wrap"> 
			<section class="position-relative">  
				<?php if(Alert::get('success')): ?><br>
					<div class="alert alert--success" role="alert"> 
						<?= Alert::get('success'); ?> 
					</div>
				<?php endif; ?> 

				<div class="row">
					<div class="col-lg-6">
						<div class="section-header mb-5 m-xy-2.5rem">
							<h2 class="section-title-medium">
								Manage City
							</h2>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="add-new txt-rt mt-48 m-xy-2.5rem"> 
							<a href="#city" rel="modal:open" class="add-button city">Add City</a>
						</div>
					</div>
				</div>
				
				<table id="data-table" class="ui celled padded table">
					<thead>
						<tr class="txt-center">
							<th>City</th>
							<th>State</th>
							<th>Country</th> 
							<th>Action</th> 
						</tr>
					</thead>

					<tbody>
						<?php
							/**
							 * get city list by Relation between table
							 */
							while($city = $cites->fetch_object()): 
						?>	
							<tr class="txt-center">
								<td>
									<?= $city->city ?>
								</td>
								<td>
									<?= $city->state ?>
								</td>
								<td>
									<?= $city->country ?> 
								</td> 
								<td>
									<div class="flex gap-10 justify-content-center">
										<a href="#eqwwq" class="updateLocation" 
											data-id="<?= $city->id ?>" 
											data-title="<?= $city->city ?>" 
											data-state="<?= $city->stateID ?>" 
											data-country="<?= $city->countryID ?>"
											rel="modal:open">Edit</a>
										<a href="#edit">View</a>
									</div> 
								</td> 
							</tr> 
						<?php endwhile; ?>
					</tbody> 
				</table>
			</section>
		</div>
	</div>
</div>