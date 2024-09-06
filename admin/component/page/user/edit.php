<div class="content-wrap">
	<div class="h_btm_bg">
		<div class="wrap">
			<section class="position-relative">
				<?php 
					/**
					 * Get user data
					 */
					$user = $users->fetch_object();
				?>
				<div class="section-header p-xy-2.5rem">
					<h2 class="section-title-medium txt-1.5 ">
						Manage User : <?= $user->name ?>
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
									<?= Alert::get('error');  Alert::set('error',''); ?> 
								</div>
							<?php endif; ?>

							<div class="form-group">
								<label for="name">
									Full Name <sup class="text--danger">*</sup>
								</label>
								<input type="text" name="name" id="name" placeholder="Full name"
									value="<?= $user->name ?>"
									pattern="[a-zA-Z. _]{4,40}"
									title="Please enter only character  between 4 to 40 for donor name"
									class="form--input" maxlength="40" required="">
							</div> 

							<div class="form-group">
								<label for="phone">
									Phone <sup class="text--danger">*</sup>
								</label>
								<input type="text" value="<?= $user->phone ?>" name="phone" id="phone" placeholder="Phone Number"
									class="form--input" maxlength="16" required="">
							</div>

							<div class="form-group">
								<label for="email">
									Email <sup class="text--danger">*</sup>
								</label>
								<input type="text" value="<?= $user->email ?>" name="email" id="email" placeholder="Email Address"
									class="form--input" maxlength="30" required="">
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
											value="<?= $gender->id ?>" <?= ($gender->id == $user->genderID)? 'checked' : ''; ?> />

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
											value="<?= $blood->id ?>" <?= ($blood->id == $user->bloodID)? 'checked' : ''; ?> />

										<label for="blood-group-a<?= $blood->name ?>">
											<?= $blood->name ?>
										</label> 

									<?php endwhile; ?>
								</div>
							</div>
 
							<div class="flex justify-content-between gap-50">
								<div class="form-group width-full">
									<label for="date-of-birth">
										Date Of Birth <sup class="text--danger">*</sup>
									</label>
									<input type="text" value="<?= date('Y-m-d', strtotime($user->birthday)) ?>" name="birthday" id="date-of-birth"
										autocomplete="off"
										placeholder="yyyy-dd-mm" class="form--input datepicker-here"
										maxlength="20" required="" data-date-format="yyyy-dd-mm" data-language="en" data-view="years">
								</div>

								<div class="form-group width-full">
									<label for="last-donate">
										Last Donate
									</label>
									<input type="text" value="<?= date('Y-m-d', strtotime($user->lastDonate)) ?>" name="lastDonate" id="last-donate"
										autocomplete="off"
										placeholder="yyyy-dd-mm" class="form--input datepicker-here"
										maxlength="20" data-date-format="yyyy-dd-mm" data-language="en" data-view="years" />
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
											<option value="<?= $city->id ?>" <?= ($city->id == $user->cityID)? 'selected' : ''; ?>>
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

											<option value="<?= $state->id ?>" <?= ($state->id == $user->stateID)? 'selected' : ''; ?>>
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
								<input type="hidden" name="available" value="0">
								<input type="checkbox" value="1" name="available" <?= ($user->available)? 'checked' : ''; ?>>
								<label for="agree" class="form-check-label">
									Available for donate blood
								</label>
							</div>

							<div class="form-group">
								<label for="description">
									About <span class="text--danger">*</span>
								</label>
								<textarea name="description" id="description" class="form--input" maxlength="3000" required><?= $user->description ?></textarea>
							</div> 
  
							<div class="flex form-group gap-20">
								<div class="register-button">
									<button type="submit" value="Submit" name="update">
										update
									</button>
								</div>
								<div class="delete">
									<a href="?delete=<?= $user->id ?>" onclick="return confirm('Are you sure you want to delete `<?= $user->name ?>` user?')">
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