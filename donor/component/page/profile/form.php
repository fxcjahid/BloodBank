	<div class="donor-page"> 
		<div class="profile">
			<div class="profile-cover"> 
			</div>
			<div class="profile-form">
				<div class="form-header">
					<div class="txt-center">
						<img class="cover" src="<?= $config['site']['url'] ?>assets/Images/updateuser.png" width="300px" height="80px">
					</div>
				</div>
				  
				<form method="post">
					<div class="form-container">
						<div class="form-group">
							<label for="name">
								Full Name <sup class="text--danger">*</sup>
							</label>
							<input type="text" name="name" id="name" placeholder="Full name"
								class="form--input" maxlength="40" value="<?= $user->name ?>" required>
						</div>

						<div class="form-group">
							<label for="phone">
								Phone <sup class="text--danger">*</sup>
							</label>
							<input type="text" name="phone" id="phone" placeholder="Phone Number"
								class="form--input" maxlength="16" value="<?= $user->phone ?>" required>
						</div>

						<div class="form-group">
							<label for="email">
								Email
							</label>
							<input disabled type="text" name="email" id="email" placeholder="Email Address" 
								class="form--input" maxlength="30" value="<?= maskEmail($user->email) ?>" required="">
						</div>
  
						<div class="form-group">
							<label for="gender">
								Gender <sup class="text--danger">*</sup>
							</label>
							<div class="switch-field">

								<?php 
									/**
									 * Fetch gender data
									 */
									while($gender = $genders->fetch_object()): 
								?>
									<input type="radio" id="gender-<?= $gender->id ?>" name="gender"
										value="<?= $gender->id ?>" required <?= ($gender->id == $user->genderID)? 'checked' : ''; ?> >
									<label for="gender-<?= $gender->id ?>">
										<?= $gender->name ?>
									</label>

								<?php endwhile; ?>

							</div>
						</div>

						<div class="form-group">
							<label for="blood-group">
								Blood Group
							</label>
							<div class="switch-field">  
								<input type="radio" checked/>
								<label for="blood-group-a" class="disabled rounded-4" disabled>
									<?= $user->bloodName ?>
								</label> 		 
							</div>
						</div>

						<div class="flex justify-content-between gap-50">
							<div class="form-group width-full">
								<label for="date-of-birth">
									Date Of Birth <sup class="text--danger">*</sup>
								</label>
								<input type="date" name="birthday" id="date-of-birth" placeholder="dd-mm-yyyy" 
									class="form--input datepicker-heres" value="<?= $user->birthday ?>" maxlength="20" required="" data-language="en" data-view="years">
							</div>

							<div class="form-group width-full">
								<label for="last-donate">
									Last Donate
								</label>
								<input type="date" name="lastDonate" value="<?= $user->lastDonate ?>" id="last-donate" placeholder="dd-mm-yyyy" class="form--input datepicker-heres" maxlength="20" data-language="en" data-view="years">
							</div>
						</div> 

						<div class="flex justify-content-between gap-50">
							<div class="form-group width-full">

								<label for="city">
									City <sup class="text--danger">*</sup>
								</label>
								<select type="select" name="city" id="city" class="form--input"
									required>
									<?php 
										/**
										 * Fetch city data
										 */
										while($city = $cities->fetch_object()): 
									?>
										<option value="<?= $city->id ?>" <?= ($city->id == $user->cityID)? 'selected' : ''; ?>>
											<?= $city->name ?>
										</option>
									<?php endwhile; ?>
								</select>
							</div>

							<div class="form-group width-full">
								<label for="state">
									State <sup class="text--danger">*</sup>
								</label>
								<select type="select" name="state" id="state" class="form--input"
									required>
									<?php 
										/**
										 * Fetch state data
										 */
										while($state = $states->fetch_object()): 
									?>

										<option value="<?= $state->id ?>" <?= ($state->id == $user->stateID)? 'selected' : ''; ?>>
											<?= $state->name ?>
										</option>

									<?php endwhile; ?>
								</select>
							</div>

							<div class="form-group width-full">
								<label for="country">
									Country <sup class="text--danger">*</sup>
								</label>
								<select type="select" name="country" id="country" class="form--input"
									required>

									<?php 
										/**
										 * Fetch counrty data
										 */
										while($country = $countries->fetch_object()): 
									?>

										<option value="<?= $country->id ?>" <?= ($country->id == $user->countryID)? 'selected' : ''; ?>>
											<?= $country->name ?>
										</option>

									<?php endwhile; ?>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label for="address">
								Address
							</label>
							<input type="text" name="address" id="address" placeholder="Address" 
								class="form--input" maxlength="30" value="<?= $user->address ?>">
						</div>

						<div class="form-group">
							<label for="description">
								About Your self
							</label>
							<textarea name="description" id="description"
								placeholder="Write something about your self."
								class="form--input" maxlength="3000"><?= $user->description ?></textarea>
						</div>
						
						<div class="form-group">
							<input type="hidden" name="available" value="0">
							<input type="checkbox" value="1" name="available" <?= ($user->available)? 'checked' : ''; ?>>
							<label for="agree" class="form-check-label">
								I am available to donate blood
							</label>
						</div>
						

						<div class="form-group mt-10 mb-10">
							<div class="form-button">
								<button type="submit" value="update" name="update">
									Update Profile
								</button>
							</div>
						</div>
						<br/>
					</div>
				</form>
			</div>
		</div>
	</div>

   <!--End Layout-->
 </div>
</div>