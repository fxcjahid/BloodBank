<div class="wrap">
	<div id="viewport" class="viewport"> 
		<div class="sidebar">
			<div class="heading">
				<div class="title"> 
					<?= $user->name ?>
				</div>
			</div>

			<?php
				/**
				 * Include sidebar menu
				 */
				include_once( __DIR__ . '/menu.php');
			?>

		</div> 
		