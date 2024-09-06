<div class="donor-page"> 
		<div class="profile">
			<div class="profile-cover"> 
			</div>
			<div class="profile-form">
				<div class="form-header">
					<div class="txt-center">
						<img class="cover" src="<?= $config['site']['url'] ?>assets/Images/chpass2.png" width="300px" height="80px">
					</div>
				</div>

				<form method="post" action="<?= $_SERVER['PHP_SELF']; ?>">
					<div class="form-container">
						<div class="form-group">
							<label for="currentPassword">
								Current Password <sup class="text--danger">*</sup>
							</label>
							<input type="text" name="currentPassword" id="currentPassword" placeholder="Current Password" class="form--input" maxlength="40" required="">
						</div>

						<div class="form-group">
							<label for="new-password">
								New Password <sup class="text--danger">*</sup>
							</label>
							<input type="text" name="password" id="new-password" placeholder="New Number" class="form--input" maxlength="16" required="">
						</div>
   
						<div class="form-group mt-10 mb-10">
							<div class="form-button">
								<button type="submit" value="updatePassowrd" name="updatePassowrd">
									Update
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