 <div class="wrap alert-area">

 	<?php if(isset($_GET['info'])): ?>
		<div class="alert alert--info" role="alert"> 
			<?= Alert::get('info'); ?> 
		</div>
 	<?php endif; ?> 


 	<?php if(isset($_GET['success'])): ?>
		<div class="alert alert--success" role="alert">
			<strong>Well done! </strong>
				<?= Alert::get('success'); ?>
			<meta http-equiv="refresh" content="3; url=?">
		</div>
 	<?php endif; ?>


 	<?php if(isset($_GET['error'])): ?>
		<div class="alert alert--danger" role="alert">
			<strong>Oh snap! </strong> 
				<?= Alert::get('error'); ?> 
		</div>
 	<?php endif; ?>

	
 	<?php if(isset($_GET['warning'])): ?>
		<div class="alert alert--warning" role="alert">
			<strong>Warning! </strong> 
				<?= Alert::get('warning'); ?> 
		</div>
 	<?php endif; ?>
 </div>