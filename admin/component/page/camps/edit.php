<div class="content-wrap">
	<div class="h_btm_bg">
		<div class="wrap">
				<?php 
					/**
					 * Get camps data
					 */
					$camp = $campView->fetch_object() 
				?>
			<section class="position-relative">
				<div class="section-header p-xy-2.5rem">
					<h2 class="section-title-medium txt-1.5 ">
						Manage Camp : <?= $camp->title ?>
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
								<input type="text" value="<?= $camp->title ?>" name="title" id="title" placeholder="Title" class="form--input" maxlength="80" required="">
							</div>

							<div class="form-group">
								<label for="organise">
									Organise <span class="text--danger">*</span>
								</label>
								<input type="text" value="<?= $camp->organise ?>"  name="organise" id="organise" placeholder="Organise Name" class="form--input" maxlength="16" required="">
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
											<option value="<?= $city->id ?>" <?= ($city->id == $camp->city)? 'selected' : ''; ?>>
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

											<option value="<?= $state->id ?>" <?= ($state->id == $camp->state)? 'selected' : ''; ?>>
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

											<option value="<?= $country->id ?>" <?= ($country->id == $camp->country)? 'selected' : ''; ?>>
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
								<textarea name="description" id="description" class="form--input" maxlength="3000" required><?= $camp->description ?></textarea>
							</div> 

							<div class="form-group">
								<label for="images">
									Gallery Images
								</label>
								<div class="gallery" id="sortable"> 
									<?php
										/**
										 * Get camps gallery Images
										 */
										while($item = $campsGallery->fetch_object()):
											
									?>
										<div class="item" data-id="<?= $item->image ?>">
											<input type="hidden" name="gallery[]" value="<?= $item->image ?>" />
											<img class="gallery-image" src="<?= $config['site']['url'] ?>storage/camps/<?= $item->image ?>">
										</div> 
									<?php endwhile; ?>  

									<div class="item">
										<input type="file" name="gallery" multiple accept="image/*"/>
									</div>
								</div>
							</div>
 
							<div class="flex form-group gap-20">
								<div class="register-button">
									<button type="submit" value="Submit" name="update">
										update camp
									</button>
								</div>
								<div class="delete">
									<a href="?delete=<?= $camp->id ?>" onclick="return confirm('Are you sure to remove this camp?')">
										Delete
									</a>
								</div>
							</div>
						</div>
					</form>
				</div>  
			</section>
		</div>
	</div>
</div>