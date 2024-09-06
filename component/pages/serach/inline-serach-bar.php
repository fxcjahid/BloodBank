<section class="inline-search-bar bgImg">
	<div class="wrap">
		<div class="flex justify-content-center">
			<h2 class="txt-center hero__title">
				Donor Search
			</h2>
		</div>
		<div class="flex justify-content-center">
			<div class="form">
				<form action="<?= $config['site']['url'] ?>search.php" method="GET" action="" class="hero-search-form">
					<div class="input-field">
						<span class="icon material-symbols-outlined">
							water_drop
						</span>
						<select name="group"> 
							<option value="" selected="" disabled="">
								Select Group
							</option> 
							<?php 
								/**
								 * Fetch Blood group data
								 */
								while($blood = $group->fetch_object()): 
							?>
							<option value="<?= $blood->id ?>" <?= ($blood->id == $groupID)? 'selected' : ''; ?>>
								<?= $blood->name ?>
							</option>

							<?php endwhile; ?>

						</select>
					</div>

					<div class="input-field">
						<span class="icon material-symbols-outlined">
							supervisor_account
						</span>
						<select name="gender"> 
							<option value="" selected="" disabled="">
								Select Donar
							</option> 
							<?php 
								/**
								 * Fetch Gender data
								 */
								while($gender = $genders->fetch_object()): 
							?>
								<option value="<?= $gender->id ?>" <?= ($gender->id == $genderID)? 'selected' : ''; ?>>
									<?= $gender->name ?>
								</option> 
							<?php endwhile; ?>

						</select>
					</div>
					<div class="input-field">
						<span class="icon material-symbols-outlined">
							location_city
						</span>
						<select name="city">
							<option value="" selected="" disabled="">
								Select City
							</option> 
							<?php 
							/**
							 * Fetch city data
							 */
								while($city = $cities->fetch_object()): 
							?> 
								<option value="<?= $city->id ?>" <?= ($city->id == $cityID)? 'selected' : ''; ?>>
									<?= $city->name ?>
								</option> 
							<?php endwhile; ?> 
						</select>
					</div>
					<div class="btn-area">
						<button type="submit" class="btn btn-md btn--base">
							<span class="material-symbols-outlined">
								search
							</span>
							Search
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>