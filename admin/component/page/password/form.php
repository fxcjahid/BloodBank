<div class="content-wrap">
	<div class="h_btm_bg pt.4">
		<div class="wrap">
			<div class="profile"> 

			<?php if(isset($_GET['success'])): ?>
				<div class="alert alert--success" role="alert"> 
					<?= Alert::get('success'); ?>
					<meta http-equiv="refresh" content="3; url=?">
				</div>
			<?php endif; ?>
			<?php if(isset($_GET['error'])): ?>
				<div class="alert alert--danger" role="alert"> 
					<?= Alert::get('error'); ?> 
				</div>
			<?php endif; ?>

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
	</div>
</div>