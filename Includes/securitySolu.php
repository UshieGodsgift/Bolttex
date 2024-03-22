<div class="services-area bg-color-linear pt-100 pb-50">
				<div class="container">
					<div class="section-title">
						<span class="span color-style-two">OUR SECURITY SOLUTIONS</span>
						<h2>Our Unique, Best Approach To Systems Implementation</h2>
						<p>Integrate local and cloud resources, protect user traffic and endpoints, and create custom, scalable network.</p>
					</div>

					<div class="row justify-content-center">

                    <?php 
                       
                       require_once("./SecuritySolutions-array.php");

                       foreach($SecurityService as $data){?>
                            <div class="col-lg-4 col-sm-6">
							<div class="single-services">
								<div class="icon">
									<img src="<?= $data['image']; ?>" alt="Image">
								</div>
								<h3>
									<a href="services-details.html"><?=  $data['title'];?></a>
								</h3>
								<p><?=  $data['content'];?></p>
								<a href="services-details.html" class="read-more">
									Read More
									<i class="ri-arrow-right-line"></i>
								</a>
							</div>
						</div>    
                       <?php
                       }


                    ?>
                        
						

						<!-- <div class="col-lg-4 col-sm-6">
							<div class="single-services">
								<div class="icon">
									<img src="assets/images/icon/icon-4.svg" alt="Image">
								</div>
								<h3>
									<a href="services-details.html">Network Security</a>
								</h3>
								<p>Securing networks from unauthorized access, intrusions,
									 and data exfiltration is a key focus area. Cybersecurity firms deploy firewalls,
									  intrusion detection systems (IDS),
									 intrusion prevention systems (IPS), and other network security measures to safeguard critical assets.</p>
								<a href="services-details.html" class="read-more">
									Read More
									<i class="ri-arrow-right-line"></i>
								</a>
							</div>
						</div> -->

					</div>
				</div>

				<div class="only-shape shape-1" data-speed="0.04" data-revert="true">
					<img src="assets/images/services-shape-1.png" alt="Image">
				</div>
				<div class="only-shape shape-2" data-speed="0.06" data-revert="true">
					<img src="assets/images/services-shape-2.png" alt="Image">
				</div>
				<div class="only-shape shape-3" data-speed="0.06" data-revert="true">
					<img src="assets/images/pricing-shape-1.png" alt="Image">
				</div>
			</div>