<?php
require_once('./Includes/header.php');
require_once('./Includes/nav.php');
require_once('./SecuritySolutions-array.php');

?>


			<!-- Start Page Banner Area -->
			<div class="banner-page-area">
				<div class="container">
					<div class="page-banner-content">
						<ul>
							<li>
								<a href="index">Home</a>
							</li>
							<li>
								<span class="active">Services</span>
							</li>
						</ul>

						<div class="ptb-100">
							<h2>Cyber Security Services</h2>
							<p>Integrate local and cloud resources, protect user traffic and endpoints, and create custom, scalable network.</p>
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

			<!-- Start Services Area -->
			<div class="services-area bg-color-linear pt-100 pb-70">
				<div class="container">
					<div class="section-title">
						<span class="span color-style-two">OUR SECURITY SOLUTIONS</span>
						<h2>Our Unique, Best Approach To Systems Implementation</h2>
						<p>Integrate local and cloud resources, protect user traffic and endpoints, and create custom, scalable network.</p>
					</div>

					<div class="row justify-content-center">

						<?php
					        foreach($SecurityService as $service){?>
						            <div class="col-lg-4 col-sm-6">
							<div class="single-services style-two">
								<div class="icon">
									<img src="<?= $service['image']?>" alt="Image">
								</div>
								<h3>
									<a href="#"><?= $service['title']?></a>
								</h3>
								<p><?= $service['content']?></p>
								<a href="#" class="read-more">
									Read More
									<i class="ri-arrow-right-line"></i>
								</a>
							</div>
						</div>	    
							<?php
							}
					   ?>
						

					</div>
				</div>

				

				<div class="only-shape shape-2" data-speed="0.06" data-revert="true">
					<img src="assets/images/pricing-shape-1.png" alt="Image">
				</div>
				<div class="only-shape shape-4" data-speed="0.06" data-revert="true">
					<img src="assets/images/feature-shape-1.png" alt="Image">
				</div>
                       



			</div>
			<!-- End Services Area -->

			<!-- Start Partner Area -->
			<div class="partner-area bg-color-f2f0ef ptb-100">
				<div class="container">
					<div class="section-title">
						<span class="span mb-0 trusted">Trusted by 2,500+ Customers</span>
					</div>
					<div class="partner-slide owl-carousel owl-theme">
						<div class="partner-item">
							<img src="assets/images/partner/partner-8.png" alt="Image">
						</div>
						<div class="partner-item">
							<img src="assets/images/partner/partner-9.png" alt="Image">
						</div>
						<div class="partner-item">
							<img src="assets/images/partner/partner-10.png" alt="Image">
						</div>
						<div class="partner-item">
							<img src="assets/images/partner/partner-11.png" alt="Image">
						</div>
						<div class="partner-item">
							<img src="assets/images/partner/partner-12.png" alt="Image">
						</div>
						<div class="partner-item">
							<img src="assets/images/partner/partner-13.png" alt="Image">
						</div>
						<div class="partner-item">
							<img src="assets/images/partner/partner-14.png" alt="Image">
						</div>
					</div>
				</div>
			</div>
			<!-- End Partner Area -->

			<!-- Start Defend Area -->
			<div class="defend-area pt-100 pb-70">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-6 col-md-6">
							<div class="single-defend">
								<span>01.</span>
								<h3>Defend Against Attacks</h3>
								<p>Integrate local and cloud resources, user traffic and  cloud resources, user traffic and endpoints.</p>
							</div>
						</div>

						<div class="col-lg-6 col-md-6">
							<div class="single-defend">
								<span>02.</span>
								<h3>Satisfy Audit And Compliance</h3>
								<p>Integrate local and cloud resources, user traffic and  cloud resources, user traffic and endpoints.</p>
							</div>
						</div>

						<div class="col-lg-6 col-md-6">
							<div class="single-defend">
								<span>03.</span>
								<h3>Enable The Digital Business</h3>
								<p>Integrate local and cloud resources, user traffic and  cloud resources, user traffic and endpoints.</p>
							</div>
						</div>

						<div class="col-lg-6 col-md-6">
							<div class="single-defend">
								<span>04.</span>
								<h3>Drive Operational Efficiencies</h3>
								<p>Integrate local and cloud resources, user traffic and  cloud resources, user traffic and endpoints.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Defend Area -->

			<!-- Start Testimonial Area -->
			<!-- <div class="testimonial-area shape-style bg-liner ptb-100">
				<div class="container">
					<div class="section-title">
						<span class="span color-style-five">CUSTOMER’S FEEDBACK</span>
						<h2>Enterprises Move To Cybex For World Class Security</h2>
						<p>Integrate local and cloud resources, protect user traffic and endpoints, and create custom, scalable network.</p>
					</div>

					<div class="testimonial-slide owl-carousel owl-theme">
						<div class="single-testimonial">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut amet tortor, libero blandit pharetra ornare faucibus ultricies sollicitudin. In interdum nullam turpis feugiat. Ipsum malesuada sempere faucibus ultricies sollicitudin.</p>
							
							<div class="d-flex justify-content-between align-items-center">
								<div class="avater d-flex align-items-center">
									<img src="assets/images/testimonial/testimonial-1.jpg" alt="Image">
									<div class="avater-info">
										<h3>Thomas Markdanel</h3>
										<span>Manager of LTD</span>
									</div>
								</div>
								
								<ul class="d-flex">
									<li>
										<i class="ri-star-fill"></i>
									</li>
									<li>
										<i class="ri-star-fill"></i>
									</li>
									<li>
										<i class="ri-star-fill"></i>
									</li>
									<li>
										<i class="ri-star-fill"></i>
									</li>
									<li>
										<i class="ri-star-fill"></i>
									</li>
								</ul>
							</div>
						</div>
					
						<div class="single-testimonial">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut amet tortor, libero blandit pharetra ornare faucibus ultricies sollicitudin. In interdum nullam turpis feugiat. Ipsum malesuada sempere faucibus ultricies sollicitudin.</p>
							
							<div class="d-flex justify-content-between align-items-center">
								<div class="avater d-flex align-items-center">
									<img src="assets/images/testimonial/testimonial-2.jpg" alt="Image">
									<div class="avater-info">
										<h3>Thomas Markdanel</h3>
										<span>Manager of LTD</span>
									</div>
								</div>
								
								<ul class="d-flex">
									<li>
										<i class="ri-star-fill"></i>
									</li>
									<li>
										<i class="ri-star-fill"></i>
									</li>
									<li>
										<i class="ri-star-fill"></i>
									</li>
									<li>
										<i class="ri-star-fill"></i>
									</li>
									<li>
										<i class="ri-star-fill"></i>
									</li>
								</ul>
							</div>
						</div>

						<div class="single-testimonial">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut amet tortor, libero blandit pharetra ornare faucibus ultricies sollicitudin. In interdum nullam turpis feugiat. Ipsum malesuada sempere faucibus ultricies sollicitudin.</p>
							
							<div class="d-flex justify-content-between align-items-center">
								<div class="avater d-flex align-items-center">
									<img src="assets/images/testimonial/testimonial-1.jpg" alt="Image">
									<div class="avater-info">
										<h3>Thomas Markdanel</h3>
										<span>Manager of LTD</span>
									</div>
								</div>
								
								<ul class="d-flex">
									<li>
										<i class="ri-star-fill"></i>
									</li>
									<li>
										<i class="ri-star-fill"></i>
									</li>
									<li>
										<i class="ri-star-fill"></i>
									</li>
									<li>
										<i class="ri-star-fill"></i>
									</li>
									<li>
										<i class="ri-star-fill"></i>
									</li>
								</ul>
							</div>
						</div>
					
						<div class="single-testimonial">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut amet tortor, libero blandit pharetra ornare faucibus ultricies sollicitudin. In interdum nullam turpis feugiat. Ipsum malesuada sempere faucibus ultricies sollicitudin.</p>
							
							<div class="d-flex justify-content-between align-items-center">
								<div class="avater d-flex align-items-center">
									<img src="assets/images/testimonial/testimonial-2.jpg" alt="Image">
									<div class="avater-info">
										<h3>Thomas Markdanel</h3>
										<span>Manager of LTD</span>
									</div>
								</div>
								
								<ul class="d-flex">
									<li>
										<i class="ri-star-fill"></i>
									</li>
									<li>
										<i class="ri-star-fill"></i>
									</li>
									<li>
										<i class="ri-star-fill"></i>
									</li>
									<li>
										<i class="ri-star-fill"></i>
									</li>
									<li>
										<i class="ri-star-fill"></i>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="only-shape shape-1" data-speed="0.04" data-revert="true">
					<img src="assets/images/testimonial/testimonial-shape-3.png" alt="Image">
				</div>
				<div class="only-shape shape-2" data-speed="0.06" data-revert="true">
					<img src="assets/images/testimonial/testimonial-shape-2.png" alt="Image">
				</div>
			</div> -->
			<!-- End Testimonial Area -->
<?php 

// <!-- Start Consultations Area -->
require_once('./Includes/consultation.php');
// <!-- End Consultations Area -->
require_once('./Includes/bottom-nav.php');
require_once('./Includes/footer.php');

?>