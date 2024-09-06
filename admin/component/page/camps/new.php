<div class="content-wrap">
	<div class="h_btm_bg">
		<div class="wrap">
			
			<section class="position-relative">
				<div class="section-header p-xy-2.5rem">
					<h2 class="section-title-medium txt-1.5 ">
						Create New Camp
					</h2>
				</div> 

				<div class="edit-form camps"> 
					<form method="post" enctype="multipart/form-data">
						<div class="form-container">

							<div class="form-group">
								<p>Please fill the following information.</p>
							</div>  

							<?php if(Alert::get('error')): ?>
								<div class="alert alert--danger" role="alert"> 
									<?= Alert::get('error'); ?> 
								</div>
							<?php endif; ?>

							<div class="form-group">
								<label for="title">
									Title <span class="text--danger">*</span>
								</label>
								<input type="text" name="title" id="title" placeholder="Title" class="form--input" maxlength="80" required="">
							</div>

							<div class="form-group">
								<label for="organise">
									Organise <span class="text--danger">*</span>
								</label>
								<input type="text" name="organise" id="organise" placeholder="Organise Name" class="form--input" maxlength="16" required="">
							</div> 

							<div class="flex justify-content-between gap-50">
								<div class="form-group width-full">

									<label for="city">
										City <span class="text--danger">*</span>
									</label>
									<select type="select" name="city" id="city" class="form--input"
										required>
										<?php 
											/**
											* Fetch city data
											*/
											while($city = $cities->fetch_object()): 
										?>
											<option value="<?= $city->id ?>">
												<?= $city->name ?>
											</option>
										<?php endwhile; ?>
									</select>
								</div>

								<div class="form-group width-full">
									<label for="state">
										State <span class="text--danger">*</span>
									</label>
									<select type="select" name="state" id="state" class="form--input"
										required>
										<?php 
											/**
											* Fetch state data
											*/
											while($state = $states->fetch_object()): 
										?>

											<option value="<?= $state->id ?>">
												<?= $state->name ?>
											</option>

										<?php endwhile; ?>
									</select>
								</div>

								<div class="form-group width-full">
									<label for="country">
										Country <span class="text--danger">*</span>
									</label>
									<select type="select" name="country" id="country" class="form--input"
										required>

										<?php 
											/**
											* Fetch counrty data
											*/
											while($country = $countries->fetch_object()): 
										?>

											<option value="<?= $country->id ?>">
												<?= $country->name ?>
											</option>

										<?php endwhile; ?>
									</select>
								</div>
							</div>

							<div class="form-group">
								<label for="description">
									Description	<span class="text--danger">*</span>
								</label>
								<textarea name="description" id="description" class="form--input" maxlength="3000" required></textarea>
							</div> 

							<div class="form-group">
								<label for="images">
									Gallery Images
								</label>
								<div class="gallery" id="sortable">    
									<div class="item">
										<input type="file" name="gallery" multiple accept="image/*"/>
									</div>
								</div>
							</div>
 
							<div class="flex form-group gap-20">
								<div class="register-button">
									<button type="submit" value="submit" name="new">
										Create Camp
									</button>
								</div> 
							</div>
						</div>
					</form>
				</div>  
			</section>
		</div>
	</div>
</div>