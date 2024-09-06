<div class="content-wrap">
	<div class="h_btm_bg height-full">
		<div class="wrap">
			<section class="position-relative"> 
				<div class="row justify-content-center">
					<div class="col-lg-6 txt-center mt-10">
						<div class="section-header mb-5 m-xy-2.5rem">
							<h2 class="section-title">
								Contact Us
							</h2>
						</div>
					</div>
				</div>

				<div class="row justify-content-center">
					<div class="col-lg-12 -mt-10 mb-15">
						<div class="section-content">
							<p>
							Our team is ready to help you 24/7 by phone on 01 xx xx xx xx, by chat or by email below!
								<br/><br/>
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium optio, eaque rerum! Provident similique accusantium nemo autem.
							</p>
						</div>
					</div>
				</div> 

				<div class="row">
					<div class="col-lg-6">
						<div class="section-header mb-5 m-xy-2.5rem">
							<h2 class="section-title-tiny">
								Quick Contact
							</h2>
						</div>
						<?php
							/**
							 * Get setting data
							 */
							$setting = $setting->fetch_object(); 
						?>
						<div class="section-content cotact">
							<p>Phone :  <a href="tel:<?= $setting->phone ?>"><?= $setting->phone ?></a></p>
							<p>Email :  <a href="mailto:<?= $setting->email ?>"><?= $setting->email ?></a></p>
							<p>Address : <a target="_blank" href="https://www.google.com/maps/place/<?= $setting->address ?>"><?= $setting->address ?></a</p>
						</div>
					</div> 
				</div>
			</section>
		</div>
	</div>
</div>