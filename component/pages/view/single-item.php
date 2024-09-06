<section class="request-single-page ptb-80">
	<div class="wrap">
		<div class="row align-items-center">
			<div class="col-sm-4 p-0 txt-rt">
				<img class="banner-image mb-3" src="<?= $config['site']['url'] ?>assets/images/single-post-request.jpg">
			</div>
			<div class="col-sm-8 p-0">
				<div class="request-info-wrapper">


					<?php 
						/**
						 * Fetch data
						 */
						$view = $singleView->fetch_object(); 
					?>

					<div class="request-info text-left">

						<h2>
							<?= $view->title ?>
						</h2>

						<span>
							Post Date:
							<?= date('d F, Y', strtotime($view->create_date)) ?>
						</span>

						<p>
							<?= $view->description ?>
						</p>
					</div>

					<div class="infotable">
						<div class="table-responsive">
							<table class="table table-bordered width-full">
								<tbody>
									<tr>
										<td class="tbllabel table-info">
											Patient Name
										</td>
										<td class="table-info">
											<?= $view->patientName ?>
										</td>
									</tr>
									<tr>
										<td class="tbllabel table-info">
											Patient Age
										</td>
										<td class="table-info">
											<?= $view->patientAge ?>
										</td>
									</tr>
									<tr>
										<td class="tbllabel table-danger">
											Blood Group
										</td>
										<td class="table-danger">
											<?= $view->blood ?>
										</td>
									</tr>
									<tr>
										<td class="tbllabel table-danger">
											Gender
										</td>
										<td class="table-danger">
											<?= $view->gender ?>
										</td>
									</tr>
									<tr>
										<td class="tbllabel table-danger">
											Require Blood at
										</td>
										<td class="table-danger">
											<?= date('d F, Y', strtotime($view->required_date)) ?>
										</td>
									</tr>
									<tr>
										<td class="tbllabel table-danger">
											Mobile Number
										</td>
										<td class="table-danger">
											<?= $view->mobile ?>
										</td>
									</tr>
									<tr>
										<td class="tbllabel table-info">
											Country
										</td>
										<td class="table-info">
											<?= $view->country ?>
										</td>
									</tr>
									<tr>
										<td class="tbllabel table-info">
											State
										</td>
										<td class="table-info">
											<?= $view->state ?>
										</td>
									</tr>
									<tr>
										<td class="tbllabel table-info">
											City
										</td>
										<td class="table-info">
											<?= $view->city ?>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>