<div class="content-wrap">
	<div class="h_btm_bg">
		<div class="wrap">
			<section class="position-relative"> 
				<?php if(Alert::get('success')): ?><br>
					<div class="alert alert--success" role="alert"> 
							<?= Alert::get('success'); Alert::set('success',''); ?>
						<meta http-equiv="refresh" content="3; url=?">
					</div>
				<?php endif; ?>
				
				<div class="row">
					<div class="col-lg-6">
						<div class="section-header mb-5 m-xy-2.5rem">
							<h2 class="section-title-medium">
								Requested Blood
							</h2>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="add-new txt-rt mt-48 m-xy-2.5rem"> 
							<a href="add-new-request.php" class="add-button">Add New Request</a>
						</div>
					</div>
				</div>
				
				<table id="data-table" class="ui celled padded table">
					<thead>
						<tr class="txt-center">
							<th class="!txt-lt">Title</th>
							<th title="Patient Name" class="single line">P. Name</th>
							<th title="Patient Age" class="single line">P. Age</th>
							<th>Blood</th> 
							<th>Action</th> 
						</tr>
					</thead>

					<tbody>
						<?php
							/**
							 * get all blood request
							 */
							while($view = $RequestView->fetch_object()):
						?>	
							<tr>
								<td>
									<?= $view->title ?>
								</td>
								<td class="single line">
									<?= $view->patientName ?>
								</td>
								<td class="!txt-center">
									<?= $view->patientAge ?>
								</td>
								<td class="!txt-center">
									<?= $view->blood ?>
								</td>
								<td class="center aligned">
									<div class="flex justify-content-center gap-10">
										<a href="manage-request.php?rid=<?= $view->id ?>">Edit</a>
										<a href="<?= $config['site']['url'] ?>viewrequest.php?rid=<?= $view->id ?>" target="_blank">View</a>
									</div> 
								</td> 
							</tr> 
						<?php endwhile ?>
					</tbody> 
					 
				</table>
			</section>
		</div>
	</div>
</div>