<?php
	require( dirname(__FILE__, 3) . '/class/admin.global.php');
?>
<div class="topbar sticky">
	<div class="ui menu-bg">
		<div class="right mr-1rem">
			<div class="ui dropdown item profile-item">
				<?= $admin->name ?> <i class="dropdown icon"></i>
				<div class="menu">
					<a href="profile.php" class="item">view profile</a>
					<a href="password.php" class="item">change password</a>
					<a href="logout.php" class="item">Log out</a>
				</div>
			</div>
		</div>
	</div>
</div> 