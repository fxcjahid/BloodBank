<div class="register-form">
	<div class="form-header">
		<div class="regiser-image txt-center">
			<img src="<?= $config['site']['url'] ?>assets/Images/brequest.png" width="280px" />
		</div>
	</div>

	<form method="post">
		<div class="form-container">

			<div class="form-group">
				<p>Please fill the following information to post your blood request.</p>
			</div>

			<div class="form-group">
				<label for="title">
					Title <sup class="text--danger">*</sup>
				</label>
				<input type="text" name="title" id="title" placeholder="Title"
					class="form--input" maxlength="35" required="">
			</div>

			<div class="form-group">
				<label for="mobile">
					Mobile <sup class="text--danger">*</sup>
				</label>
				<input type="text" name="mobile" id="mobile" placeholder="Mobile Number"
					class="form--input" maxlength="16" required="">
			</div>

			<div class="form-group">
				<label for="email">
					Email
				</label>
				<input type="text" name="email" id="email" placeholder="Email Address"
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
							   value="<?= $gender->id ?>" />

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
							   value="<?= $blood->id ?>" />

						<label for="blood-group-a<?= $blood->name ?>">
							<?= $blood->name ?>
						</label> 

					<?php endwhile; ?>
				</div>
			</div>

			<div class="form-group">
				<label for="name">
					Patient Name <sup class="text--danger">*</sup>
				</label>
				<input type="text" name="patientName" id="name" 
					placeholder="Full name" class="form--input" maxlength="40" required="">
			</div>

			<div class="flex justify-content-between gap-50">
				<div class="form-group width-full">
					<label for="patient-age">
						Patient Age <sup class="text--danger">*</sup>
					</label>
					<input type="nunmber" name="patientAge" id="patient-age"
						placeholder="Patient Age" class="form--input" maxlength="2"
						required="">
				</div>

				<div class="form-group width-full">
					<label for="require-date">
						Till Required Date
					</label>
					<input type="text" name="requireDate" id="require-date"
						placeholder="dd-mm-yyyy" class="form--input datepicker-here"
						maxlength="20" data-language="en" data-view="months" />
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
				<label for="details">
					Details
				</label>
				<textarea name="details" id="details"
					placeholder="Write something about your emergency."
					class="form--input" maxlength="3000"></textarea>
			</div>

			<div class="form-group">
				<input type="checkbox" name="agree" value="0" required>
				<label for="terms" class="form-check-label">
					I agree with the terms and conditions.
				</label>
			</div>

			<div class="form-group">
				<div class="register-button">
					<button type="submit" value="Submit" name="submit">
						Submit
					</button>
				</div>
			</div>
		</div>
	</form>
</div>