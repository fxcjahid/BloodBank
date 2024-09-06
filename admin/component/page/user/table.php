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
								Manage User | Donor
							</h2>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="add-new txt-rt mt-48 m-xy-2.5rem"> 
							<a href="add-new-user.php" class="add-button">Add Donor</a>
						</div>
					</div>
				</div>
				
				<table id="data-table" class="ui celled padded table">
					<thead>
						<tr class="txt-center">
							<th class="!txt-lt">Patient Name</th>
							<th title="Patient Age">P.Age</th>
							<th>Blood</th> 
							<th>Gender</th> 
							<th title="Last Donate">Donate</th>
							<th>Available</th>
							<th>Action</th> 
						</tr>
					</thead>

					<tbody>
						<?php
							/**
							 * get all blood request
							 */
							while($user = $users->fetch_object()):
						?>	
							<tr>
								<td>
									<?= $user->name ?>
								</td>
								<td class="!txt-center">
									<?= $user->age ?>
								</td>
								<td class="!txt-center">
									<?= $user->blood ?>
								</td>
								<td class="!txt-center">
									<?= $user->gender ?>
								</td>
								<td class="!txt-center"> 
									<?= date('d M, Y', strtotime($user->lastDonate)) ?>
								</td>
								<td class="!txt-center">
									<?= ($user->available)? 'YES' : 'NO' ?>
								</td>
								<td class="center aligned">
									<div class="flex gap-10">
										<a href="manage-user.php?uid=<?= $user->id ?>">Edit</a>
										<a href="?delete=<?= $user->id ?>" onclick="return confirm('Are you sure you want to delete `<?= $user->name ?>` user?');" class="red">delete</a>
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