
<?php


require_once('./Includes/header.php');
require_once('./Includes/nav.php');
require_once('blog-array.php');

if(isset($_GET["blog_id"]))
{
    $blog_id = $_GET["blog_id"] - 1;
    //   echo $blog_id;
	// echo "<pre>";
	// print_r($blogs[ $blog_id]);
    
}

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
								<span>Blog</span>
							</li>
							<li>
								<span class="active">Blog Details</span>
							</li>
						</ul>

						<div class="ptb-100">
							<h2>Single Blog </h2>
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
			<div class="blog-details-area default-shape bg-color-linear-3 ptb-100">
				<div class="container">
					<div class="row">
						<div class="col-lg-4">
							<div class="sidebar-wrap mr-15">
								<div class="sidebar-widget">
									<form class="src-form">
										<input type="text" class="form-control" placeholder="Search....">
										<button type="submit" class="src-btn">
											<img src="assets/images/icon/search-icon.svg" alt="Image">
										</button>
									</form>
								</div>
								<div class="sidebar-widget">
									<div class="author">
										<img src="assets/images/blog/blog-job.jpg" width="200" alt="Image">
										<div class="author-content">
											<h4>Ushie Job</h4>
											<span>Blogger</span>
										</div>
									</div>
								</div>
	
								<div class="sidebar-widget">
									<div class="follow-us">
										<h3>
											<span>Follow Us</span>
										</h3>
	
										<ul class="social-link">
											<li>
												<a href="https://facebook.com/" target="_blank">
													<i class="ri-facebook-fill"></i>
													<span>facebook</span>
												</a>
											</li>
											<li>
												<a href="https://twitter.com/" target="_blank">
													<i class="ri-twitter-fill"></i>
													<span>twitter</span>
												</a>
											</li>
											<li>
												<a href="https://instagram.com/" target="_blank">
													<i class="ri-instagram-line"></i>
													<span>instagram</span>
												</a>
											</li>
										</ul>
									</div>
								</div>
	
								<div class="sidebar-widget">
									<div class="recent-posts">
										<h3>
											<span>Recent Posts</span>
										</h3>
	
										<ul class="recent-list">
											<li>
												<i class="ri-arrow-right-line"></i>
												<a href="blog.html">
													How Wireless Technology Is Changing The Mordern Business
												</a>
											</li>
											<li>
												<i class="ri-arrow-right-line"></i>
												<a href="blog.html">
													Protect Yur Workplace From Cyber Attacks Anywhere
												</a>
											</li>
											<li>
												<i class="ri-arrow-right-line"></i>
												<a href="blog.html">
													The Security Ricks Of Changing Package Owners On Cyber Attack
												</a>
											</li>
											<li>
												<i class="ri-arrow-right-line"></i>
												<a href="blog.html">
													Cyber Criminals Publish Stolen Sepa Data And Optimize Cloud Security
												</a>
											</li>
											<li>
												<i class="ri-arrow-right-line"></i>
												<a href="blog.html">
													Morbi Maximus Mauris Eget Groot Dignissim, In Laoreet Justo Facilisis
												</a>
											</li>
										</ul>
									</div>
								</div>
	
								<div class="sidebar-widget">
									<div class="tags-grid">
										<h3>
											<span>Popular Tag</span>
										</h3>
	
										<ul class="tag-grid">
											<li>
												<a href="blog">Cyber Security</a>
											</li>
											<li>
												<a href="blog">Cloud</a>
											</li>
											<li>
												<a href="blog">Data Strage</a>
											</li>
											<li>
												<a href="blog">Cybercrime</a>
											</li>
											<li>
												<a href="blog">Cyber Attack</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
	
						<div class="col-lg-8">
							<div class="details-content ml-15">
								<div class="blog-single-img">
									<img src="<?= $blogs[ $blog_id]["image"]; ?>" alt="Image">
								</div>

								<ul class="coment-info d-flex justify-content-between align-items-center">
									<!-- <li>
										<a href="blog-details.html" class="tags">
											cyber security
										</a>
									</li> -->
									<li>
										<span>
											<i class="ri-calendar-2-line"></i>
											 <?= date("Y:m:d Hi:s") ?>
										</span>
										<a href="blog-details.html" class="commets">
											<i class="ri-chat-3-line"></i>
											550 Commets
										</a>
									</li>
								</ul>

								<h2><?= $blogs[ $blog_id]["title"]; ?></h2>
								<p> <?= $blogs[ $blog_id]["discription"]; ?></p>

								<div class="mb-30"></div>

								<!-- <blockquote>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
								</blockquote> -->

								<div class="mb-30"></div>

								<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p> -->

								<p>If there’s one way that wireless technology has changed the way we work, it’s that everyone is now connected, pretty much all the time. Previously, if someone called the office for you but you were out or on the way to a meeting, they’d have to wait to get hold of you.</p>

								<div class="mb-30"></div>

								<div class="row">
									<div class="col-lg-12">
										<div class="blog-img mb-30">
											<img src="<?= $blogs[ $blog_id]["image"]; ?>" alt="Image">
										</div>
									</div>

									<!-- <div class="col-lg-12">
										<div class="blog-img mb-30">
											<img src="assets/images/blog/blog-7.jpg" alt="Image">
										</div>
									</div> -->
								</div>

								<!-- <h3>Secure Access Across Any Device, Anywhere, At Just The Right Time.</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat aute irure dolor in reprehenderit in voluptate.</p> -->

								<div class="mb-30"></div>

								<ul class="detection-list">
									<li>
										<img src="assets/images/icon/check-mark.svg" alt="Image">
										Malware Detection Removal
									</li>
									<li>
										<img src="assets/images/icon/check-mark.svg" alt="Image">
										Content Delivery Network
									</li>
									<li>
										<img src="assets/images/icon/check-mark.svg" alt="Image">
										Managed Web Application
									</li>
								</ul>

								<div class="mb-30"></div>

								<h3>Protecting our Web applications and databases is a key element in safeguarding the private health information </h3>
								<p>Redolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat aute irure dolor in reprehenderit in voluptate.</p>

								<div class="mb-30"></div>

								<div class="tag-social d-flex justify-content-between">
									<ul>
										<li>
											<span>Tags:</span>
										</li>
										<li>
											<a href="blog.html">Business,</a>
										</li>
										<li>
											<a href="blog.html">Consulting,</a>
										</li>
										<li>
											<a href="blog.html">Tax Preparation,</a>
										</li>
									</ul>
	
									<ul class="social-link">
										<li>
											<a href="https://www.facebook.com/" target="_blank">
												<i class="ri-facebook-fill"></i>
											</a>
										</li>
										<li>
											<a href="https://www.twitter.com/" target="_blank">
												<i class="ri-twitter-fill"></i>
											</a>
										</li>
										<li>
											<a href="https://www.linkedin.com/" target="_blank">
												<i class="ri-linkedin-fill"></i>
											</a>
										</li>
									</ul>
								</div>

								<div class="mb-30"></div>
	
								<div id="comment" class="comments">
									<h3>549 Comments</h3>
	
									<ul>
										<li class="d-flex">
											<div class="flex-shrink-0">
												<img src="assets/images/blog/comment-1.jpg" alt="Image">
											</div>
	
											<!-- <div class="comment-details ms-3">
												<h4>Thomas Markdanel</h4>
												<span>Manager of LTD</span>
												<p>Proin eget tortor risus. Proin eget tortor risus. Donec sollicitudin molestie malesuada. Vivamus suscipit tortor eget felis porttitor volutpat. Proin eget tortor risus.</p>
	
												<a href="#reply" class="reply">
													Reply
												</a>
											</div> -->
										</li>
										<li class="d-flex">
											<div class="flex-shrink-0">
												<img src="assets/images/blog/unim.jpg"width="70" height="50" alt="Image">
											</div>
	
											<div class="comment-details ms-3">
												<h4>Ushie Unimke</h4>
												<span>Developer</span>
												<p>  Head spark Technology.</p>
	
												<a href="#reply" class="reply">
													Reply
												</a>
											</div>
										</li>
									</ul>
								</div>
	
								<div id="reply" class="leave-form">
									<h3>Leave a comment</h3>
	
									<form>
										<div class="row">
											<div class="col-lg-12">
												<div class="form-group">
													<input type="text" class="form-control" placeholder="Your name">
												</div>
											</div>
											<div class="col-lg-12">
												<div class="form-group">
													<input type="email" class="form-control" placeholder="Enter you email">
												</div>
											</div>
											<div class="col-lg-12">
												<div class="form-group">
													<textarea name="message" class="form-control" id="message" rows="4" placeholder="| Enter you comment"></textarea>
												</div>
											</div>
											<div class="col-lg-12">
												<div class="form-group mb-0">
													<button type="submit" class="default-btn">Submit</button>
												</div>
											</div>
										</div>
									</form>
								</div>
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