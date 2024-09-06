<div id="eqwwq" class="modal">
	<div class="modal-body">
		<div class="modal-header">
			<div class="modal-title">
				Edit City
			</div> 
		</div>
		<div class="modal-content">
			<form method="post" enctype="multipart/form-data">
				<input type="hidden" name="id" />
				<div class="form-container"> 
					<div class="form-group">
						<label for="title">
							Title <span class="text--danger">*</span>
						</label>
						<input type="text" value="" name="title" id="title" placeholder="Title" class="form--input" maxlength="80" required="">
					</div>
				</div>

				<div class="form-group width-full">
					<label for="state">
						State <span class="text--danger">*</span>
					</label>
					<select type="select" name="state" id="state" class="form--input"
						required>
						<?php 
							/**
							* Fetch state data
							*/
							while($state = $states->fetch_object()): 
						?>
							<option value="<?= $state->id ?>">
								<?= $state->name ?>
							</option>
						<?php endwhile; ?>
					</select>
				</div>

				<div class="form-group width-full">
					<label for="country">
						Country <span class="text--danger">*</span>
					</label>
					<select type="select" name="country" id="country" class="form--input"
						required>
						<?php 
							/**
							* Fetch counrty data
							*/
							while($country = $countries->fetch_object()): 
						?> 
							<option value="<?= $country->id ?>">
								<?= $country->name ?>
							</option> 
						<?php endwhile; ?>
					</select>
				</div> 
				<div class="form-group width-full">
					<div class="flex form-group gap-20">
						<div class="register-button">
							<button type="submit" value="Submit" name="update">
								update
							</button>
						</div>
						<div class="delete">
							<a href="delete" onclick="return confirm('Are you sure to remove this city?')">
								Delete
							</a>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div> 
</div> 