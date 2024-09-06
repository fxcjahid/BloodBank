<section class="hero-search-bar bgImg">
	<div class="wrap">
		<div class="flex justify-content-center">
			<h2 class="txt-center hero__title">
				A lot of things hurt.<br />
				Saving lives doesn't have to
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
								Select Blood Group
							</option> 
							<?php 
								/**
								 * Fetch Blood group data
								 */
								while($blood = $group->fetch_object()): 
							?>
								<option value="<?= $blood->id ?>">
									<?= $blood->name ?>
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
								<option value="<?= $city->id ?>">
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