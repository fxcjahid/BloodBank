<div id="eqwwq" class="modal">
	<div class="modal-body">
		<div class="modal-header">
			<div class="modal-title">
				Edit Country
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
					<div class="flex form-group gap-20">
						<div class="register-button">
							<button type="submit" value="Submit" name="update">
								update
							</button>
						</div>
						<div class="delete">
							<a href="delete" onclick="return confirm('Are you sure to remove this country?')">
								Delete
							</a>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div> 
</div> 