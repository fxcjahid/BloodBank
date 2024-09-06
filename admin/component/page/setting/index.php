<div class="content-wrap">
	<div class="h_btm_bg">
		<div class="wrap">
			<section class="position-relative">

				<?php
					/**
					 * Get settings
					 */
					$setting = $settings->fetch_object(); 
				?>
				
				<div class="section-header p-xy-2.5rem">
					<h2 class="section-title-medium">
						General Setting
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
									Site Title<sup class="text--danger">*</sup>
								</label>
								<input type="text" name="name" id="name" 
									placeholder="Site Name"
									value="<?= $setting->site_name ?>"
									pattern="[a-zA-Z. _]{4,40}"
									title="Please enter only character  between 4 to 40 for site name"
									class="form--input" 
									maxlength="40" 
									required="">
							</div> 

							<div class="form-group">
								<label for="phone">
									Phone <sup class="text--danger">*</sup>
								</label>
								<input type="text" 
									value="<?= $setting->phone ?>" 
									name="phone" 
									id="phone" 
									placeholder="Phone Number"
									class="form--input" 
									maxlength="16" 
									required="">
							</div>

							<div class="form-group">
								<label for="email">
									Email <sup class="text--danger">*</sup>
								</label>
								<input type="text" 
									value="<?= $setting->email ?>" 
									name="email" 
									id="email" 
									placeholder="Email Address"
									class="form--input" 
									maxlength="30" 
									required="">
							</div> 

							<div class="form-group">
								<label for="address">
									Address
								</label>
								<input type="text" 
									value="<?= $setting->address ?>"
									name="address" 
									id="address" 
									placeholder="Address" 
									class="form--input" 
									maxlength="100">
							</div> 
  
							<div class="flex form-group gap-20">
								<div class="save-button">
									<button type="submit" value="Submit" name="update">
										save
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