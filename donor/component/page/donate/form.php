<div class="donor-page"> 
		<div class="profile">
			<div class="profile-cover"> 
			</div>
			<div class="profile-form">
				<div class="form-header">
					<div class="txt-center">
						<img class="cover" src="<?= $config['site']['url'] ?>assets/Images/bdonated.png" width="300px" height="80px">
					</div>
				</div>

				<form method="post">
					<div class="form-container">
						<div class="form-group">
							<label for="name">
								Camp Name<sup class="text--danger"></sup>
							</label>
							<input type="text" name="name" id="name" placeholder="Camp Name" class="form--input" maxlength="40" required="">
						</div>
  
						<div class="flex justify-content-between gap-50"> 
							<div class="form-group width-full">
								<label for="unit">
									Unit / Bag (S) <sup class="text--danger">*</sup>
								</label>
								<input type="text" name="unit" id="unit" placeholder="Unit / Bag" class="form--input" min="1" max="3" maxlength="1">
							</div>
							<div class="form-group width-full">
								<label for="donate-date">
									Donate Date <sup class="text--danger">*</sup>
								</label>
								<input type="text" name="donateDate" id="donate-date" placeholder="dd-mm-yyyy" class="form--input datepicker-here" maxlength="20" required="" data-language="en" data-view="years">
							</div>
						</div> 

						<div class="form-group">
							<label for="description">
								Description
							</label>
							<textarea name="description" id="description" placeholder="Write something about your blood donation." class="form--input" maxlength="3000"></textarea>
						</div>

						<div class="form-group mt-10 mb-10">
							<div class="form-button">
								<button type="submit" value="donate" name="donate">
									Submit
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