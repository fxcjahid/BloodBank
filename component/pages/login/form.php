<div class="login-form">
	<div class="form-header">
		<div class="login-image txt-center">
			<img src="<?= $config['site']['url'] ?>assets/Images/login2.png" width="250px" height="100%" />
		</div>
	</div>

	<form method="post">
		<div class="form-container">

			<div class="form-group">
				<label for="name">
					Email <sup class="text--danger">*</sup>
				</label>
				<input type="text" name="email" id="email"
					placeholder="Enter your email address" class="form--input"
					maxlength="40" required="">
			</div>

			<div class="form-group">
				<label for="password">
					Password <sup class="text--danger">*</sup>
				</label>
				<input type="password" name="pass" id="password"
					placeholder="Enter your password" class="form--input" maxlength="40"
					required="">
			</div>

			<div class="form-group">
				<div class="login-button">
					<input type="submit" value="Log In" name="submit">
				</div>
			</div>
		</div>
	</form>
</div>