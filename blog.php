<?php
require_once('./Includes/header.php');
require_once('./Includes/nav.php');
require_once('blog-array.php');
// var_dump($blog);

?>



		<!-- Start Page Banner Area -->
        <div class="banner-page-area">
				<div class="container">
					<div class="page-banner-content">
						<ul>
							<li>
								<a href="index.html">Home</a>
							</li>
							<li>
								<span class="active">Blog</span>
							</li>
						</ul>

						<div class="ptb-100">
							<h2>Latest News & Blog</h2>
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

			<!-- Start Blog Area -->
			<div class="blog-area shape-style ptb-100">
				<div class="container">
					<div class="section-title">
						<span class="span">LATEST BLOG POST</span>
						<h2>Interesting Articles Updated Daily</h2>
						<p>Integrate local and cloud resources, protect user traffic and endpoints, and create custom, scalable network.</p>
					</div>

					<div class="row align-items-center">
                            

                      <?php
                            foreach ($blogs as $blog) {?>
                                   <div class="col-lg-4 col-md-6">
							<div class="single-blog">
								<a href="blog-details.html" class="blog-img">
									<img src="<?= $blog["image"]; ?>" alt="Image">
								</a>

								<div class="blog-content">
									<ul>
										<li>
											<i class="ri-calendar-2-line"></i>
											<?= date("Y:m:i"); ?>
										</li>
										<li>
											<i class="ri-chat-3-line"></i>
											<a href="blog-details.php?blog_id=<?= $blog["blog_id"]; ?>">200 commets</a>
										</li>
									</ul>
									<h3>
										<a href="blog-details.html"><?= $blog["title"]; ?></a>
									</h3>
									<p><?= $blog["discription"]; ?></p>

									<a href="blog-details.php?blog_id=<?= $blog["blog_id"]; ?>" class="read-more">
										Read More
										<i class="ri-arrow-right-line"></i>
									</a>
								</div>
							</div>
						</div>
                            <?php    
                            }
                      ?>
						

			

						<div class="col-lg-12">
							<div class="pagination-area">
								<a href="blog.html" class="next page-numbers">
									<i class="ri-arrow-left-s-line"></i>
								</a>
								<span class="page-numbers current" aria-current="page">1</span>
								<a href="blog.html" class="page-numbers">2</a>
								<a href="blog.html" class="page-numbers">3</a>
								
								<a href="blog.html" class="next page-numbers">
									<i class="ri-arrow-right-s-line"></i>
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="only-shape shape-2" data-speed="0.06" data-revert="true">
					<img src="assets/images/pricing-shape-1.png" alt="Image">
				</div>
				<div class="only-shape shape-4" data-speed="0.06" data-revert="true">
					<img src="assets/images/feature-shape-1.png" alt="Image">
				</div>
			</div>
			<!-- End Blog Area -->



















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