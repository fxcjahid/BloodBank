<section class="donors-single-page">

	<?php $view = $donorView->fetch_object() ?>

		<div class="bg-imge">
			<div class="wrap">
				<div class="profile-cover">
					<div class="profile-details">
						<div class="porfile-image">
							<img src="<?= $config['site']['url'] ?>assets/Images/blank-profile-picture.jpg"/>
						</div>
						<div class="name">
							<h1>
								<?= $view->name ?>
							</h1>
						</div> 
					</div>
				</div>
				<div class="blood-donor-info-area">
					<div class="row justify-content-center align-items-center">
						<div class="col-xl-3 col-lg-4">
							<div class="dono-info-item flex gap-10 align-items-center justify-content-center">
								<h5 class="text-white flex gap-10">
								<span class="icon material-symbols-outlined">
									water_drop
								</span> Blood Group :  
								</h5>
								<p class="text--base">
									<?= $view->blood ?> 
								</p>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 mt-lg-0 mt-3">
							<div class="dono-info-item flex align-items-center gap-10 justify-content-center">
								<h5 class="text-white flex gap-10">
									<span class="icon material-symbols-outlined">
										calendar_today
									</span>
									Last Donate : 
								</h5>
								<p class="text--base">
									<?= $view->last_donate ?>
								</p>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 mt-lg-0 mt-3">
							<div class="dono-info-item flex gap-10 align-items-center justify-content-center">
								<h5 class="text-white flex gap-10">
									<span class="material-symbols-outlined">
										total_dissolved_solids
									</span>
									Total Donate : 
								</h5>
								<p class="text--base">
									<?= $view->total ?>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="wrap donors-about">
			<div class="title">
				About Donor
			</div>
			<div class="description">
				<p>
					<?= $view->description ?>
				</p>
			</div>  
			<div class="row row-nowrap align-items-center">  
				<div class="col-lg-5">
					<div class="infotable">
						<div class="table-responsive">
							<table class="table table-bordered width-full">
								<tbody>
									<tr>
										<td class="tbllabel table-info">
											Donar Name
										</td>
										<td class="table-info">
											<?= $view->name ?>
										</td>
									</tr>
									<tr>
										<td class="tbllabel table-info">
											Donar Age
										</td>
										<td class="table-info">
											<?= age($view->birthday) ?>
										</td>
									</tr>
									<tr>
										<td class="tbllabel table-danger">
											Blood Group
										</td>
										<td class="table-danger">
											<?= $view->blood ?>
										</td>
									</tr> 
									<tr>
										<td class="tbllabel table-danger">
											Gender
										</td>
										<td class="table-danger">
											<?= $view->gender ?>
										</td>
									</tr> 
									<tr>
										<td class="tbllabel table-danger">
											Last Donate
										</td>
										<td class="table-danger">
											<?= timeElapsed($view->last_donate) ?>
										</td>
									</tr> 
									<tr>
										<td class="tbllabel table-danger">
											Mobile Number
										</td>
										<td class="table-danger">
											<?= $view->phone ?>
										</td>
									</tr>
									<tr>
										<td class="tbllabel table-info">
											City
										</td>
										<td class="table-info">
											<?= $view->city ?>
										</td>
									</tr>
									<tr>
										<td class="tbllabel table-info">
											State
										</td>
										<td class="table-info">
											<?= $view->state ?>
										</td>
									</tr>
									<tr>
										<td class="tbllabel table-info">
											Country
										</td>
										<td class="table-info">
											<?= $view->country ?>
										</td>
									</tr>
									<tr>
										<td class="tbllabel table-info">
											Address
										</td>
										<td class="table-info">
											<?= $view->address ?>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div> 
				</div>
				<div class="col-lg-7">
					<div class="donors-contact-form">
						<div class="card-header">
							<h5>Contact with Donor</h5>
						</div>
						<form method="post">
							<input type="hidden" name="user" value="<?= $view->id ?>"/>
							<div class="form-container">   
								<div class="form-group">
									<label for="name">
										Name <sup class="text--danger">*</sup>
									</label>
									<input type="text" name="name" id="name" placeholder="Your Name"
										class="form--input" maxlength="35" required="">
								</div> 

								<div class="form-group">
									<label for="phone">
										Phone <sup class="text--danger">*</sup>
									</label>
									<input type="text" name="phone" id="phone" placeholder="Your phone number"
										class="form--input" maxlength="35" required="">
								</div> 

								<div class="form-group">
									<label for="message">
										Message <sup class="text--danger">*</sup>
									</label>
									<textarea name="message" id="message"
										placeholder="Write something about your emergency."
										class="form--input" maxlength="3000" require></textarea>
								</div>  

								<div class="form-group">
									<div class="donor-button">
										<button type="submit" value="request" name="submit">
											Sent Request
										</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div> 
</section>