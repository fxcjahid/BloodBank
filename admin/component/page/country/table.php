<div class="content-wrap">
	<div class="h_btm_bg">
		<div class="wrap">
			<section class="position-relative">
				
				<div class="row">
					<div class="col-lg-6">
						<div class="section-header mb-5 m-xy-2.5rem">
							<h2 class="section-title-medium">
								Manage Country
							</h2>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="add-new txt-rt mt-48 m-xy-2.5rem"> 
							<a href="#country" rel="modal:open" class="add-button">Add Country</a>
						</div>
					</div>
				</div>
				
				<table id="data-table" class="ui celled padded table">
					<thead>
						<tr>  
							<th>Country Name</th> 
							<th class="!txt-center">Action</th> 
						</tr>
					</thead>

					<tbody>
						<?php
							/**
							 * get city list by Relation between table
							 */
							while($country = $countries->fetch_object()):
						?>
							<tr>   
								<td>
									<?= $country->name ?>
								</td>
								<td class="center aligned">
									<div class="flex gap-10 justify-content-center">
										<a href="#eqwwq" class="updateLocation" 
											data-id="<?= $country->id ?>" 
											data-title="<?= $country->name ?>"   
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