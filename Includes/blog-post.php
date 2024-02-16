<?php
$blogs =[
	[
	"blog_id" => 1,
	"image" => "http://localhost/MrID/assets/images/blog/blog-1.jpg",
	"title" => "A Security-first Approach To Protect Customer Workloads",
	"discription" => "Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit,
	 Sed Do Eiusmod Tempor Incididunt Ut Labore Et Dolore."
],
[
	"blog_id" => 2,
	"image" => "http://localhost/MrID/assets/images/blog/blog-2.jpg",
	"title" => "Abend Network Security",
	"discription" => "Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit,
	 Sed Do Eiusmod Tempor Incididunt Ut Labore Et Dolore."
]
];

// var_dump($blog);

?>

<div class="blog-area pb-70">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-4 col-md-12">
							<div class="blog-contents">
								<span class="span">LATEST BLOG POST</span>
								<h2>Interesting Articles Updated Daily</h2>
								<p>Integrate local and cloud resources, protect user traffic and endpoints, and create custom, scalable network.</p>

								<a href="blog-detials.php/<?= $blog["blog_id"]; ?>" class="default-btn">
									View More
								</a>
							</div>
						</div>
                            
						<?php
                            foreach ($blogs as  $blog) {?>
							     <div class="col-lg-4 col-md-6">
							<div class="single-blog">
								<a href="blog-details.html" class="blog-img">
									<img src="<?= $blog["image"]; ?>" alt="Image">
								</a>

								<div class="blog-content">
									<ul>
										<li>
											<img src="assets/images/svg-icon/calendar.svg" alt="Image">
											 <?= date("Y:m:i"); ?>
										</li>
										<li>
											<img src="assets/images/svg-icon/comments.svg" alt="Image">
											<a href="blog-details.html">1350 Commets</a>
										</li>
									</ul>
									<h3>
										<a href="blog-details.html"><?= $blog["title"];?></a>
									</h3>
									<p> <?= $blog["discription"]; ?></p>

									<a href="blog-details.html" class="read-more">
										Read More
										<i class="ri-arrow-right-line"></i>
									</a>
								</div>
							</div>
						</div>
							<?php	
							}
						?>
						

						
					</div>
				</div>
			</div>