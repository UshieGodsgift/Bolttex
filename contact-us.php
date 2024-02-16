<?php
require_once('./Includes/header.php');
require_once('./Includes/nav.php');

?>

			<!-- Start Page Banner Area -->
			<div class="banner-page-area">
				<div class="container">
					<div class="page-banner-content">
						<ul>
							<li>
								<a href="index.php">Home</a>
							</li>
							<li>
								<span class="active">Contact Us</span>
							</li>
						</ul>

						<div class="ptb-100">
							<h2>Contact Us</h2>
							<!-- <p>Integrate local and cloud resources, protect user traffic and endpoints, and create custom, scalable network.</p> -->
						</div>
					</div>
				</div>

				<div class="only-shape banner-shape-1" data-speed="0.04" data-revert="true">
					<img src="assets/images/banner/banner-shape-2.png" alt="Image">
				</div>
				<div class="only-shape banner-shape-2" data-speed="0.06" data-revert="true">
					<img src="assets/images/banner/banner-shape-1.png" alt="Image">
				</div>
				<div class="only-shape banner-shape-3" data-speed="0.08" data-revert="true">
					<img src="assets/images/banner/banner-shape-4.png" alt="Image">
				</div>
			</div>
			<!-- End Page Banner Area -->

			<!-- Start Conatct Us Area -->
			<div class="contact-us-area default-shape bg-color-linear-5 ptb-100">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6">
							<div class="contact-info-content">
								<span class="span">GET IN TOUCH</span>
								<h2>To Make Requests For Further Information Contact Us</h2>

								<div class="contat-social-wrap">
									<ul class="contact-info">
										<li>
											<span>Address :</span>
											8113 Mandan Terrace, Greenbelt 20770, Maryland
										</li>
										<li>
											<span>Email :</span>
											<a href=""><span class="__cf_email__" data-cfemail="056d6069696a45667c67607d2b666a68">[email&#160;protected]</span></a>
										</li>
										<li>
											<span>Phone :</span>
											<a href="tel:+386-334-7493">+386-334-7493</a>
										</li>
										<!-- <li>
											<span>Fax :</span>
											<a href="tel:+1-485-456-0101">+1-485-456-0101</a>
										</li> -->
									</ul>
	
									<ul class="social-link">
										<li>
											<span>Social Links :</span>
										</li>
										<li>
											<a href="https://facebook.com/" target="_blank">
												<i class="ri-facebook-fill"></i>
											</a>
										</li>
										<li>
											<a href="https://twitch.com/" target="_blank">
												<i class="ri-twitch-line"></i>
											</a>
										</li>
										<li>
											<a href="https://instagram.com/" target="_blank">
												<i class="ri-instagram-line"></i>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>

						<div class="col-lg-6">
							<div class="contact-form">
								<h3>Send Us A Message</h3>

								<form id="contactForm">
									<div class="row">
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Name">
												<div class="help-block with-errors"></div>
											</div>
										</div>
			
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Email">
												<div class="help-block with-errors"></div>
											</div>
										</div>
			
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Phone No">
												<div class="help-block with-errors"></div>
											</div>
										</div>
			
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="Subject">
												<div class="help-block with-errors"></div>
											</div>
										</div>
			
										<div class="col-lg-12">
											<div class="form-group">
												<textarea name="message" class="form-control" id="message" cols="30" rows="4" required data-error="Write your message" placeholder="Enter you message"></textarea>
												<div class="help-block with-errors" aria-placeholder="Your Message"></div>
											</div>
										</div>
			
										<div class="col-12">
											<div class="form-check">
												<div class="form-group">
													<div class="form-check">
														<input
															name="gridCheck"
															value="I agree to the terms and privacy policy."
															class="form-check-input"
															type="checkbox"
															id="gridCheck"
															required
														>
												
														<label class="form-check-label" for="gridCheck">
															I agree to the <a href="terms-conditions.html">Terms &amp; conditions</a>
														</label>
														<div class="help-block with-errors gridCheck-error"></div>
													</div>
												</div>
											</div>
										</div>
			
										<div class="col-lg-12 col-md-12">
											<button type="submit" class="default-btn">
												Send Message
											</button>
											<div id="msgSubmit" class="h3 text-center hidden"></div>
											<div class="clearfix"></div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>

				<div class="only-shape shape-1" data-speed="0.04" data-revert="true">
					<img src="assets/images/team/team-shape-1.png" alt="Image">
				</div>
				<div class="only-shape shape-2" data-speed="0.06" data-revert="true">
					<img src="assets/images/team/team-shape-2.png" alt="Image">
				</div>
			</div>
			<!-- End Conatct Us Area -->


<?php 
// <!-- Start Blog Area -->
// require_once('./Includes/blog-post.php');
// <!-- End Blog Area -->
// <!-- Start Consultations Area -->
require_once('./Includes/consultation.php');
// <!-- End Consultations Area -->
require_once('./Includes/bottom-nav.php');
require_once('./Includes/footer.php');

?>