<div class="content-wrap">
	<div class="h_btm_bg">
		<div class="wrap">
			
			<section class="position-relative">
				<div class="section-header p-xy-2.5rem">
					<h2 class="section-title-medium txt-1.5 ">
						Create New Donor
					</h2>
				</div> 
				<div class="edit-form"> 
					<form method="post">
						<div class="form-container">
							
							<div class="form-group">
								<p>Please fill the following information.</p>
							</div> 

							<div class="form-group">
								<label for="name">
									Full Name <sup class="text--danger">*</sup>
								</label>
								<input type="text" name="name" id="name" placeholder="Full name"
									pattern="[a-zA-Z. _]{4,40}"
									title="Please enter only character  between 4 to 40 for donor name"
									class="form--input" maxlength="40" required="">
							</div>

							<div class="form-group">
								<label for="phone">
									Phone <sup class="text--danger">*</sup>
								</label>
								<input type="text" name="phone" id="phone" placeholder="Phone Number"
									class="form--input" maxlength="16" required="">
							</div>

							<div class="form-group">
								<label for="email">
									Email <sup class="text--danger">*</sup>
								</label>
								<input type="text" name="email" id="email" placeholder="Email Address"
									class="form--input" maxlength="30" required="">
							</div>

							<div class="form-group">
								<label for="password">
									Password <sup class="text--danger">*</sup>
								</label>
								<input type="text" name="password" id="password" placeholder="Password"
									class="form--input" minlength="6" maxlength="40" required="">
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
											value="<?= $gender->id ?>" required />
										<label for="gender-<?= $gender->id ?>">
											<?= $gender->name ?>
										</label>

									<?php endwhile; ?>

								</div>
							</div>

							<div class="form-group">
								<label for="blood-group">
									Blood Group <sup class="text--danger">*</sup>
								</label>
								<div class="switch-field">

									<?php 
										/**
										 * Fetch Blood group data
										 */
										while($blood = $group->fetch_object()): 
									?>
										<input type="radio" id="blood-group-a<?= $blood->name ?>" name="blood"
											required value="<?= $blood->id ?>" />
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
									<input type="text" name="birthday" id="date-of-birth"
										autocomplete="off"
										placeholder="yyyy-dd-mm" class="form--input datepicker-here"
										maxlength="20" required="" data-date-format="yyyy-dd-mm" data-language="en" data-view="years">
								</div>

								<div class="form-group width-full">
									<label for="last-donate">
										Last Donate
									</label>
									<input type="text" name="lastDonate" id="last-donate"
										autocomplete="off"
										placeholder="yyyy-dd-mm" class="form--input datepicker-here"
										maxlength="20" data-date-format="yyyy-dd-mm" data-language="en" data-view="years" />
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
											<option value="<?= $city->id ?>">
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

											<option value="<?= $state->id ?>">
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

											<option value="<?= $country->id ?>">
												<?= $country->name ?>
											</option>

										<?php endwhile; ?>
									</select>
								</div>
							</div>

							<div class="form-group">
								<label for="description">
									About 
								</label>
								<textarea name="description" id="description"
									placeholder="Write something about donor."
									class="form--input" maxlength="3000"></textarea>
							</div> 

							<div class="flex form-group gap-20">
								<div class="register-button">
									<button type="submit" value="submit" name="new">
										Create Donor
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