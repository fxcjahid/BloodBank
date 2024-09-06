<div class="content-wrap">
	<div class="h_btm_bg">
		<div class="wrap">
			<section class="position-relative">
				<br/>
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
								Manage Camps
							</h2>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="add-new txt-rt mt-48 m-xy-2.5rem"> 
							<a href="add-new-camp.php" class="add-button">Add New Camp</a>
						</div>
					</div>
				</div>
				
				<table id="data-table" class="ui celled padded table">
					<thead>
						<tr class="txt-center">
							<th class="single line !txt-lt">Title</th>
							<th>Organised</th>
							<th>City</th>
							<th>Action</th> 
						</tr>
					</thead>

					<tbody>
						<?php
							/**
							 * get all Camps 
							 */
							while($camp = $camps->fetch_object()):
						?>	
							<tr>
								<td>
									<div class="ui aligned">
										<?= $camp->title ?>
									</div>
								</td>
								<td class="!txt-center">
									<?= $camp->organise ?>
								</td>
								<td class="!txt-center">
									<?= $camp->city ?>
								</td>
								<td class="center aligned">
									<div class="flex gap-10">
										<a href="manage-camp.php?id=<?= $camp->id ?>">Edit</a>
										<a href="<?= $config['site']['url'] ?>campgallery.php?cid=<?= $camp->id ?>" target="_blank">View</a>
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