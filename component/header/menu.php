<div class="menu-bg">
	<div class="wrap">
		<ul class="nav">
			<li><a href="<?= $config['site']['url'] ?>">Home</a></li>
			<li><a href="<?= $config['site']['url'] ?>registration.php">Donor
					Registration</a></li>
			<li><a href="<?= $config['site']['url'] ?>donors.php">Donors</a></li>
			<li><a href="<?= $config['site']['url'] ?>requests.php">Send Request</a></li>
			<li><a href="<?= $config['site']['url'] ?>view.php">View Request</a></li>
			<li><a href="<?= $config['site']['url'] ?>camps.php">Camps</a></li>
			<?php
				/**
				 * Check user authenctication
				 */
				if(Auth::checkUserLogin()):
			?>
			<li><a href="<?= $config['site']['url'] ?>donor/index.php">Profile</a></li>

			<?php else: ?>

			<li><a href="<?= $config['site']['url'] ?>login.php">Log In</a></li>

			<?php endif; ?>
		</ul>
	</div>
</div>