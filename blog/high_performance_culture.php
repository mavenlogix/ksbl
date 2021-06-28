<!DOCTYPE html>
<html lang="en">
<?php 

include('../partials/head.php');

?>

<body class="mba open-house center-page category-page">
    <!-----------------------------------------------------------------#
	#                       Header START                               #
	#----------------------------------------------------------------->
    <header id="header" class="run">
        <div class="container">
            <?php
include('../partials/navbar.php'); 
?>
            <div class="header-content">
                <a href="index.php" title="KSBL" class="logo">
                    <img src="images/ksbl-logo-high.png" width="239" alt="KSBL" />
                </a>
            </div>
            <div class="open-house-content single-blog">
                <h1>News & EVENTS . 2020</h1>
                <div class="page-detail">Stay up to date with the latest happenings at KSBL</div>
                <!---
					
					<div class="tabs">
							<a href="#" class="tab active" data-tab="2020">2020</a>
							<a href="#" class="tab" data-tab="2019">2019</a>
							<a href="#" class="tab" data-tab="2018">2018</a>
							<a href="#" class="tab" data-tab="archive">Archive</a>
							
						</div>

					--->
                <a href="blog/category/news-and-updates/" class="back-link" title="All News">All News & Events</a>
                <div class="center-page-content news-and-events container-boxes">
                    <div class="blog-header">
                        <img src="images/blog/High_performance_culture.jpg" alt="Signs an MoU" />
                        <div class="blog-name">
                            <div class="tag">EVENTS</div>
                            <h2>A Guest Speaker session on 'Building Blocks of Creating a High Performance Culture' by Hassan Hashmi (Head of HR, Midas Safety)</h2>
                            <div class="post-date">Monday, December 14th, 2020</div>
                        </div>
                    </div>
                    <div class="blog-detail">
                        <p>KSBL recently hosted Mr.Hassan Hashmi, Head of HR at Midas Safety to speak to KSBL students. Mr. Hassan shared his knowledge on 'Building Blocks of Creating a High Performance Culture' with the students of EMBA & MBA programs. He gave a detailed run down of performance management methodology and practical issues that managers face while working towards building a high performance culture. </p>
                        <p>Such sessions are a regular feature at KSBL to give students the opportunity to learn from the real world stories of industry practitioners.</p>
                    </div>
                    <!-----------------------------------------------------------------#
							#                       Other Pictures                             #
							#----------------------------------------------------------------->
                    <div class="other-pictures">
                        <div class="blog-image-section image">
                            <div class="campus-image">
                                <img src="images/blog/high_performance_culture3.jpg" alt="Blog other" />
                            </div>
                        </div>
                        <div class="blog-image-section image">
                            <div class="campus-image">
                                <img src="images/blog/high_performance_culture2.jpg" alt="Blog other" />
                            </div>
                        </div>
                    </div>
                    <!-----------------------------------------------------------------#
							#                      END  Other Pictures                         #
							#----------------------------------------------------------------->
                </div>
                <a href="blog/category/news-and-updates/" class="back-link" title="Back to News">Back to News & Events</a>
            </div>
        </div><!-- container -->
    </header>
    <!-----------------------------------------------------------------#
	#                       Header END                                 #
	#----------------------------------------------------------------->
    
<?php
include('../partials/footer.php');
?>

<!-- footer end -->
<?php
include('../partials/footer-scripts.php');
?>

    <script async defer src="https://cse.google.com/cse.js?cx=5a67611eb2aef8e92"></script>
</body>

</html>