<div class="content-wrap">
	<div class="h_btm_bg">
		<div class="wrap">
			<section class="position-relative">
				<?php 
					/**
					 * Get requested data
					 */
					$view = $singleView->fetch_object() 
				?>
				<div class="section-header p-xy-2.5rem">
					<h2 class="section-title-medium txt-1.5 ">
						Manage Blood Request : <?= $view->title ?>
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
								<input type="text" value="<?= $view->title ?>" name="title" id="title" placeholder="Title" class="form--input" maxlength="80" required="">
							</div>

							<div class="form-group">
								<label for="patientName">
									Patient Name <span class="text--danger">*</span>
								</label>
								<input type="text" value="<?= $view->patientName ?>"  name="patientName" id="patientName" placeholder="patient Name" class="form--input" maxlength="50" required="">
							</div> 

							<div class="flex justify-content-between gap-50">
								<div class="form-group width-full">
									<label for="patient-age">
										Patient Age <sup class="text--danger">*</sup>
									</label>
									<input type="nunmber" name="patientAge" id="patient-age"
										placeholder="Patient Age" value="<?= $view->patientAge ?>" class="form--input" maxlength="2"
										required="">
								</div>

								<div class="form-group width-full">
									<label for="require-date">
										Till Required Date
									</label>
									<input type="date" name="requireDate" id="require-date"
										placeholder="dd-mm-yyyy" value="<?= date('Y-m-d', strtotime($view->required_date)) ?>" class="form--input datepicker-here"
										maxlength="20" data-language="en" data-view="months" />
								</div>
							</div>

							<div class="form-group">
								<label for="mobile">
									Mobile <sup class="text--danger">*</sup>
								</label>
								<input type="text" value="<?= $view->mobile ?>" name="mobile" id="mobile" placeholder="Mobile Number"
									class="form--input" maxlength="16" required="">
							</div>

							<div class="form-group">
								<label for="email">
									Email
								</label>
								<input type="text" value="<?= $view->email ?>" name="email" id="email" placeholder="Email Address"
									class="form--input" maxlength="30">
							</div>

							<div class="form-group">
								<label for="phone">
									Gender
								</label>
								<div class="switch-field">
									<?php 
										/**
										 * Fetch gender data
										 */
										while($gender = $genders->fetch_object()): 
									?>
										<input type="radio" 
											id="gender-<?= $gender->id ?>"
											name="gender"
											value="<?= $gender->id ?>" <?= ($gender->id == $view->genderID)? 'checked' : ''; ?> />

										<label for="gender-<?= $gender->id ?>">
											<?= $gender->name ?>
										</label>

									<?php endwhile; ?> 
								</div>
							</div>

							<div class="form-group">
								<label for="phone">
									Blood Group <sup class="text--danger">*</sup>
								</label>
								<div class="switch-field">
									<?php 
										/**
										 * Fetch Blood group data
										 */
										while($blood = $group->fetch_object()): 
									?>
										<input type="radio" 
											name="group"
											id="blood-group-a<?= $blood->name ?>" 
											value="<?= $blood->id ?>" <?= ($blood->id == $view->bloodID)? 'checked' : ''; ?> />

										<label for="blood-group-a<?= $blood->name ?>">
											<?= $blood->name ?>
										</label> 

									<?php endwhile; ?>
								</div>
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
											<option value="<?= $city->id ?>" <?= ($city->id == $view->cityID)? 'selected' : ''; ?>>
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

											<option value="<?= $state->id ?>" <?= ($state->id == $view->stateID)? 'selected' : ''; ?>>
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

											<option value="<?= $country->id ?>" <?= ($country->id == $view->countryID)? 'selected' : ''; ?>>
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
								<textarea name="description" id="description" class="form--input" maxlength="3000" required><?= $view->description ?></textarea>
							</div> 
  
							<div class="flex form-group gap-20">
								<div class="register-button">
									<button type="submit" value="Submit" name="update">
										update
									</button>
								</div>
								<div class="delete">
									<a href="?delete=<?= $view->id ?>" onclick="return confirm('Are you sure to remove this blood request?')">
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